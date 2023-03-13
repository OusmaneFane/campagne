<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Support\Facades\Auth;

class TwoFactorController extends Controller
{

public function enableTwoFactorAuth()
{
    $user = auth()->user();

    // Générer un secret 2FA
    $google2fa = app(Google2FA::class);
    $secret = $google2fa->generateSecretKey();

    // Enregistrer le secret 2FA pour l'utilisateur
    $user->google2fa_secret = $secret;
    $user->google2fa_enabled = true;
    $user->save();

    // Afficher le QR code pour l'utilisateur
    $qrCodeUrl = $google2fa->getQRCodeUrl(
        config('app.name'),
        $user->email,
        $secret
    );

    // Rediriger l'utilisateur vers la page pour entrer le code 2FA
    return redirect()->route('two-factor.auth')->with([
        'qrCodeUrl' => $qrCodeUrl,
    ]);
}

public function showTwoFactorAuthForm()
    {
        return view('auth.2fa.auth');
    }

public function postLogin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = auth()->user();

        if ($user->google2fa_enabled) {
            $google2fa = app(Google2FA::class);
            $code = $request->input('code');

            if ($google2fa->verifyKey($user->google2fa_secret, $code)) {
                // Code 2FA correct
                return redirect()->intended('/');
            } else {
                // Code 2FA incorrect
                return redirect()->route('login')->withErrors([
                    'code' => 'Code 2FA incorrect.',
                ]);
            }
        } else {
            // Authentification 2FA désactivée pour l'utilisateur
            return redirect()->intended('/');
        }
    }

    // Identifiants de connexion incorrects
    return redirect()->route('login')->withErrors([
        'email' => 'Les informations de connexion ne correspondent pas.',
    ]);
}

public function postTwoFactorAuth(Request $request)
{
    $request->validate([
        'two_factor_code' => 'required',
    ]);

    $google2fa = new Google2FA();
    $valid = $google2fa->verifyKey(
        $request->user()->two_factor_secret,
        $request->input('two_factor_code')
    );

    if ($valid) {
        session(['auth_2fa_verified' => true]);
        return redirect()->intended('/');
    }

    return redirect()->back()->withErrors([
        'two_factor_code' => 'Invalid code provided'
    ]);
}

}
