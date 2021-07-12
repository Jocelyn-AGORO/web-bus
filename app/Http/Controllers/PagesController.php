<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function services()
    {
        return view("services");
    }

    public function lines()
    {
        return view("lines");
    }

    public function contacts()
    {
        return view("contacts");
    }

    public function page_connexion()
    {
        $message = null;
        return view('connexion',['message' => $message]);
    }

    public function administrer()
    {
        return view('admin.index');
    }

    public function about()
    {
        return view("about");
    }

    public function espace_expediteur()
    {

        return view('expediteur.espace.expediteur');
    }

    public function historique_expediteur()
    {

        return view('expediteur.historique');
    }

    public function espace_passager()
    {

        return view('passager.espace.passager');
    }

    public function suggestions()
    {

        return view('suggestions');
    }

    public function historique_passager()
    {

        return view('passager.historique');
    }

    public function photos()
    {

        return view('passager.galerie.photos');
    }

}
