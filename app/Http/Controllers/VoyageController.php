<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageController extends Controller
{

    public function ajouter()
    {
        return view('admin.voyages.index');
    }

    //modifier un élément
    public function editer($id)
    {

        redirect('/admin/voyages/index');
    }

    //supprimer un élément
    public function supprimer($id)
    {

        redirect('/admin/voyages/index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.reservations');
    }

    /**
     * @param int $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function reserver(Request  $request,$id)
    {
        //$name = $request->input('place');
        $nb_place = $request->input('place');
        dd([$request->path(),$request->input('place')]);
        for ($i=0;$i < $nb_place;$i++){

        }

        //return redirect('/index');
    }

    public function reservations()
    {
        return view('services.reservations');
    }

    public function expedier()
    {
        return view('services.reservations');
    }

    public function expeditions()
    {
        return view('services.expeditions');
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
        //
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
