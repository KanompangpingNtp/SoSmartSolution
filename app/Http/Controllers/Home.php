<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function Index()
    {
        return view('pages.home-page.index');
    }

    public function Branch()
    {
        return view('pages.branch.app');
    }

    public function Contact()
    {
        return view('pages.contact.app');
    }

    public function Objective()
    {
        return view('pages.objective.app');
    }

     public function Performance()
    {
        return view('pages.performance.app');
    }

     public function Websites()
    {
        return view('pages.websites.app');
    }
}
