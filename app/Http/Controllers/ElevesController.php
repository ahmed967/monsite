<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;

class ElevesController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Inscription
    public function Inscription ()
    {
        return view('geleves.Inscription');
    }
    //documents
    public function documents ()
    {
        return view('geleves.documents');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'date_naiss' => 'required',
            'adresse' => 'required',
            'mail' => 'required',
            'niv' => 'required'

        ]);

        $nom = request('nom');
        $prenom = request('prenom');
        $age = request('age');
        $date_naiss = request('date_naiss');
        $adresse = request('adresse');
        $mail = request('mail');
        $niv = request('niv');

        $eleve = new Eleve();
        $eleve->nom = $nom;
        $eleve->prenom = $prenom;
        $eleve->age = $age;
        $eleve->date_naiss = $date_naiss;
        $eleve->adresse = $adresse;
        $eleve->mail = $mail;
        $eleve->niv = $niv;
        
        $eleve->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
