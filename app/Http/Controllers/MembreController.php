<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\DB;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Resource::collection(Membre::all());
        //$membres = Membre::all();
        $membres = DB::table('membres')->orderBy('id','desc')->get();
        return view('/form', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Membre::create(
            $request->validate([
                'nom'           => 'required',
                'prenom'        => 'required',
                'email'         => 'required | email',
                'dateNaissance' => 'required',
                'telephone'     => 'required',
                'cin'           => 'required | size:8',
                'adresse'       => 'required',
                'dateEntree'    => 'required'
            ])
        );
        return redirect('/form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membre = Membre::findOrFail($id);
        return view('membres.show', compact('membre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        //$membres = Membre::all();
        $membres = DB::table('membres')->orderBy('id','desc')->get();
        return view('edit', compact('membre', 'membres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Membre $membre)
    {
        $membre->nom = request('nom');
        $membre->prenom = request('prenom');
        $membre->email = request('email');
        $membre->dateNaissance = request('dateNaissance');
        $membre->telephone = request('telephone');
        $membre->cin = request('cin');
        $membre->adresse = request('adresse');
        $membre->dateEntree = request('dateEntree');
        $membre->save();
        return redirect('/membres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        $membre->delete();
        return redirect('/membres');
    }

    public function remplir(Request $request){
         $request->input('nom', 'Sally');
         $request->input('prenom', 'Sally');
    }
}
