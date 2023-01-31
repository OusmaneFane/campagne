<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Distrib;
use App\Models\Organisation;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        return view('/dashboard.index');
    }
    public function benef() {
        return view('/dashboard.benef');
    }
    public function campagne() {
        return view('/dashboard.campagne');
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
        return view('/dashboard.zone');
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
        return view('/dashboard.distrib');
    }
    public function add_distrib(Request $request){
        //create distrib
        $request->validate([
            'nom_distrib' => 'required',
            'type_distrib' => 'required',
            'addresse_distrib' => 'required',
            'tel_distrib' => 'required',
            'nom_zone' => 'required',
            
        
        ]);
        $distrib = Distrib::create([
            'nom_distrib' => $request->nom_distrib,
            'type_distrib' => $request->type_distrib,
            'addresse_distrib' => $request->addresse_distrib,
            'tel_distrib' => $request->tel_distrib,
            'nom_zone' => $request->nom_zone,
        ]);
        return redirect()->route('distrib')->with('success', 'Distributeur ajouté avec succès');
    }

}
