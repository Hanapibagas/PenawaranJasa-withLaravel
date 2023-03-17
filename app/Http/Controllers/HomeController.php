<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.Landing.index');
    }

    public function explore()
    {
        return view('pages.Landing.explorer');
    }

    public function details($id)
    {
        return view('pages.Landing.details');
    }

    public function details_booking($id)
    {
        //
    }

    public function booking($id)
    {
        //
    }
}
