<?php

namespace App\Http\Controllers;

use App\Models\Client;

use App\Models\Expediteur;
use App\Models\Passager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function ajouter()
    {
        return view('admin.client.index');
    }

    //modifier un élément
    public function editer($id)
    {

        redirect('/admin/client/index');
    }

    //supprimer un élément
    public function supprimer($id)
    {

        redirect('/admin/client/index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
    * @return \Illuminate\Http\Response
    */
  public function inscription()
    {
        $message = null;
        return  view('inscription',['message' => $message]);//->with(['message' => $message]);

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
     * Vérification lors de l'authentification
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function connexion() {

        return redirect()->route('acceuil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if($request->input('type') == 'passager' ){
            $test = Passager::where('email','=',$request->input('email'))
                ->count();
            //dd($test);
            if ( $test == 0 ) {
                $passager = new Passager;
                $passager->nom = $request->input('nom');
                $passager->prenom = $request->input('prenom');
                $passager->age = $request->input('age');
                $passager->profession = $request->input('profession');
                $passager->adresse = $request->input('adresse');
                $passager->email = $request->input('email');
                $passager->mot_de_passe = sha1($request->input('mot_de_passe'));
                $passager->telephone = $request->input('tel');
                $passager->save();
                $message = 'Inscription réussie'.$passager->nom.' '.$passager->prenom.'Connectez-vous ici';
                return redirect()->route('page_connexion',['message' => $message]);
            }
            $message = 'Désolé cet utilisateur existe déja';
            return redirect()->route('inscription',['message' => $message ]);
        }
        $test = Expediteur::where('email','=',$request->input('email'))
            ->count();
        if( $test == 0 ){
            $expediteur =  new Expediteur;
            $expediteur->nom = $request->input('nom');
            $expediteur->prenom = $request->input('prenom');
            $expediteur->age = $request->input('age');
            $expediteur->profession = $request->input('profession');
            $expediteur->adresse = $request->input('adresse');
            $expediteur->email = $request->input('email');
            $expediteur->mot_de_passe = sha1($request->input('mot_de_passe'));
            $expediteur->telephone = $request->input('tel');
            $expediteur->save();
            $message = 'Inscription réussie'.$expediteur->nom.' '.$expediteur->prenom.'Connectez-vous ici';
            return redirect()->route('page_connexion',['message' => $message ]);
        }
        $message = 'Désolé cet utilisateur existe déja';
        return redirect()->route('inscription',['message' => $message ]);
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
