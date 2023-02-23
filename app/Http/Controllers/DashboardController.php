<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Distrib;
use App\Models\Campagne;
use App\Models\PieceJointe;
use App\Imports\ImportBenef;
use App\Models\Beneficiaire;
use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    public function index(){
        $campagnes = Campagne::where('id', '!=', '0')->count();
        $zones = Zone::where('id', '!=', '0')->count();
        $distribs = Distrib::where('id', '!=', '0')->count();
        $benefs = Beneficiaire::where('id', '!=', '0')->count();
        return view('/dashboard.index', ['campagnes'=>$campagnes, 'zones'=>$zones, 'distribs'=>$distribs, 'benefs'=>$benefs]);
    }
    public function benef() {
        $zones = Zone::all();
        return view('/dashboard.benef', ['zones'=>$zones]);
    }
    public function campagne() {
        $campagnes = Campagne::all();
        $distribs = Distrib::all();
        $organes = Organisation::all();
        $zones = Zone::all();
        return view('/dashboard.campagne', ['campagnes'=>$campagnes, 'zones'=>$zones, 'distribs'=>$distribs, 'organes'=>$organes]);
    }
    public function organe(){
        return view('/dashboard.organe');
    }
    public function add_organe(Request $request){
        //create organe
        $request->validate([
            'nom_organe' => 'required',
            'type_organe' => 'required',
            'adresse_organe' => 'required',
            'responsable_organe' => 'required',
            'tel_responsable' => 'required',
            'email_responsable' => 'required',

        ]);
        $organe = Organisation::create([
            'nom_organe' => $request->nom_organe,
            'type_organe' => $request->type_organe,
            'adresse_organe' => $request->adresse_organe,
            'responsable_organe' => $request->responsable_organe,
            'tel_responsable' => $request->tel_responsable,
            'email_responsable' => $request->email_responsable,
        ]);
        return redirect()->route('organe')->with('success', 'Organisation ajouté avec succès');

    }
    public function zone(){
        $zones = Zone::all();
        return view('/dashboard.zone',['zones'=>$zones]);
    }
    public function add_zone(Request $request){
        //create zone
        $request->validate([
            'nom_zone' => 'required',
            'addresse_zone' => 'required',


        ]);
        $zone = Zone::create([
            'nom_zone' => $request->nom_zone,
            'addresse_zone' => $request->addresse_zone,

        ]);
        return redirect()->route('zone')->with('success', 'Zone ajouté avec succès');
    }
    public function distrib(){
        $distribs = Distrib::all();
        $zones = Zone::all();
        return view('/dashboard.distrib', ['distribs'=>$distribs, 'zones'=>$zones]);
    }
    public function add_distrib(Request $request){
        //create distrib
        $request->validate([
            'nom_distrib' => 'required',
            'type_distrib' => 'required',
            'addresse_distrib' => 'required',
            'tel_distrib' => 'required',
            'email_distrib' => 'required',
            'nom_zone' => 'required',


        ]);

        // Recherche de l'ID de la zone correspondante
        $zone = Zone::where('nom_zone', $request->nom_zone)->first();
        if (!$zone) {
            return redirect()->back()-with('fail', 'La zone spécifiée n\'a pas été trouvée');
        }
        //dd(request()->all());
        $distrib = Distrib::create([
            'nom_distrib' => $request->nom_distrib,
            'type_distrib' => $request->type_distrib,
            'addresse_distrib' => $request->addresse_distrib,
            'tel_distrib' => $request->tel_distrib,
            'email_distrib' => $request->email_distrib,
            'nom_zone' => $request->nom_zone,

        ]);

        return redirect()->route('distrib')->with('success', 'Distributeur ajouté avec succès');
    }
    public function add_campagne(Request $request){
        //create campagne
        $request->validate([
            'nom_campagne' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'type_campagne' => 'required',
            'nom_organe' => 'required',
            'nom_zone' => 'required',
            'nom_distrib' => 'required',


        ]);

        // Recherche de l'ID de l'organisation correspondante
        $organe = Organisation::where('nom_organe', $request->nom_organe)->first();
        if (!$organe) {
            return redirect()->back()->with('fail', 'L\'organisation spécifiée n\'a pas été trouvée');
        }

        // Recherche de l'ID de la zone correspondante
        $zone = Zone::where('nom_zone', $request->nom_zone)->first();

        if (!$zone) {
            return redirect()->back()->with('fail', 'La zone spécifiée n\'a pas été trouvée');
        }
        $distrib = Distrib::where('nom_distrib', $request->nom_distrib)->first();
        if (!$distrib) {
            return redirect()->back()->with('fail', 'Le distributeur spécifié n\'a pas été trouvé');
        }

        $nom_zone = implode(",", $request->nom_zone);
        $campagne = Campagne::create([
            'nom_campagne' => $request->nom_campagne,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'type_campagne' => $request->type_campagne,
            'nom_organe' => $request->nom_organe,
            'nom_zone' => $nom_zone,
            'nom_distrib' => $request->nom_distrib,
            'organe_id' => $organe->id,
            'zone_id' => $zone->id,
            'distrib_id' => $distrib->id,
        ]);


        // dd(request()->all());

        return redirect()->route('campagne')->with('success', 'Campagne ajouté avec succès');


    }




    public function add_benef()
    {
        //create beneficiare


    }

    public function edit_campagne($id){
        $campagne = Campagne::find($id);
        $nom_zones = explode(',', $campagne->nom_zone);
        $zones = DB::table('zones')->whereIn('nom_zone', $nom_zones)->get();
        $zone_ids = $zones->pluck('id')->toArray();
        $benefs = DB::table('beneficiaires')
        ->whereIn('zone_id', $zone_ids)
        ->get();
        $benefs = Beneficiaire::whereIn('zone_id', $zone_ids)
            ->with('piecesJointes')
            ->get();

        
        return view('/dashboard.edit_campagne', ['campagne'=>$campagne, 'benefs'=>$benefs, ]);
        }



    public function store_benef(Request $request){
        //dd(request()->all());

       // Validation des données entrées par l'utilisateur
       $request->validate([
        'nom_beneficiaire' => 'required',
        'prenom_beneficiaire' => 'required',
        'tel_beneficiaire' => 'required',
        'adresse_beneficiaire' => 'required',
        'zone_id' => 'required',
    ]);



    // Création du bénéficiaire
    Beneficiaire::create([
        'nom_beneficiaire' => $request->nom_beneficiaire,
        'prenom_beneficiaire' => $request->prenom_beneficiaire,
        'tel_beneficiaire' => $request->tel_beneficiaire,
        'adresse_beneficiaire' => $request->adresse_beneficiaire,
        'zone_id' => $request->zone_id,
    ]);

    return redirect()->back()->with('success', 'Bénéficiaire ajouté avec succès');

    }
    public function info_zone(){
        $zones = Zone::all();
        return view('/dashboard.info_zone', ['zones'=>$zones]);
    }
    public function info_distrib(){
        $distribs = Distrib::all();
        return view('/dashboard.info_distrib', ['distribs'=>$distribs]);
    }
    public function info_campagne(){
        $campagnes = Campagne::all();
        return view('/dashboard.info_campagne', ['campagnes' => $campagnes]);
    }


    public function  import_benef() {
       return view('/dashboard.import_benef');
    }

    public function import(Request $request) {
       request()->validate([
          'file' => 'required|mimes:xls,xlsx'
       ]);

         Excel::import(new ImportBenef, request()->file('file'));

            return redirect()->back()->with('success', 'Bénéficiaires ajoutés avec succès');


    }

    public function edit_distrib($id){
        $distrib = Distrib::find($id);
        $zones = Zone::all();
        return view('/dashboard.edit_distrib', ['distrib'=>$distrib, 'zones'=>$zones]);

    }

    public function update_distrib(Request $request, $id){
       // update with modal

        $distrib = Distrib::find($id);
            $distrib->update([
            'nom_distrib' => $request->nom_distrib,
            'type_distrib' => $request->type_distrib,
            'addresse_distrib' => $request->addresse_distrib,
            'tel_distrib' => $request->tel_distrib,
            'email_distrib' => $request->email_distrib,
            'nom_zone' => $request->nom_zone,
        ]);
        if($distrib){
            return redirect()->back()->with('success', 'Distributeur modifié avec succès');
            }else{
                return redirect()->back()->with('fail', 'Distributeur non modifié');
        }


    }

    public function info_organe(){
        $organes = Organisation::all();
        return view('/dashboard.info_organe', ['organes'=>$organes]);

    }
    public function update(Request $request, $id)
{
    $beneficiaire = Beneficiaire::findOrFail($id);
    $beneficiaire->somARecevoir = $request->input('somARecevoir');

    if ($request->hasFile('pieces_jointes')) {
        $files = $request->file('pieces_jointes');
        foreach ($files as $file) {
            $path = $file->store('pieces_jointes');
            $pieceJointe = new PieceJointe([
                'url' => $path,
                'nom' => $file->getClientOriginalName(),
                'chemin' => $file->getClientMimeType(),
            ]);

            $beneficiaire->piecesJointes()->save($pieceJointe);
        }
    }

    $beneficiaire->statut = 1;
    $beneficiaire->save();

    return redirect()->back()->with('success', 'Bénéficiaire mis à jour avec succès');
}

}
