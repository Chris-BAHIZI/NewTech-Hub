<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accueil()
    {
        return view('website.pages.accueil');
    }

    public function aproposdenous()
    {
        return view('website.pages.aproposdenous');
    }

    public function services()
    {
        return view('website.pages.services');
    }

    public function detailsservice($service){
        return view('website.pages.detailsservice', compact('service'));
    }

    public function projets()
    {
        return view('website.pages.projets');
    }
    
    public function contact()
    {
        return view('website.pages.contact');
    }
}
