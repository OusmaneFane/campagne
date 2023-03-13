@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center " style="height: 70vh;S">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading font-weight-bold">Confirmation</div>
                <hr>
                @if($errors->any())
                    <b style="color: red">{{$errors->first()}}</b>

                @endif

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('2fa') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <p>Veuillez saisir  <strong>l'OTP</strong>généré sur votre application d'authentification. <br>Assurez-vous de soumettre l'actuel car il s'actualise toutes les 30 secondes.</p>
                            <label for="one_time_password" class="col-md-4 control-label">Mot de passe à usage unique</label>


                            <div class="col-md-6">
                                <input id="one_time_password" type="number" class="form-control" name="one_time_password" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirmer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
