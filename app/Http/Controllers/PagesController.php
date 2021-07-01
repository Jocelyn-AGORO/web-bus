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

    public function administrer()
    {
        return view('admin.index');
    }

    public function about()
    {
        return view("about");
    }
}
