<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Mpdf\Mpdf;


class TicketsController extends Controller
{
    public function ajouter()
    {
        return view('admin.tickets.index');
    }

    //modifier un élément
    public function editer($id)
    {

        redirect('/admin/tickets/index');
    }

    //supprimer un élément
    public function supprimer($id)
    {

        redirect('/admin/tickets/index');
    }

    public function afficher_ticket()
    {
        return view('services.tickets');
    }

    public function generateTicket()
    {
        $data = 'Hello Ticket!';
        $page_ticket='';
        $pdf = PDF::loadview('services.tickets',$data);
        return $pdf->download('ticket.pdf');
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
