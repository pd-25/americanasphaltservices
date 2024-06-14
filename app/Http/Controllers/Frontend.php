<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }
    public function about()
    {
        return view('Frontend.about');
    }
    public function commercial()
    {
        return view('Frontend.commercial');
    }
    public function residential()
    {
        return view('Frontend.residential');
    }
    public function contact_us()
    {
        return view('Frontend.contact_us');
    }
    //services

    public function asphalt_paving()
    {
        return view('Frontend.services.asphalt_paving');
    }
    public function concrete_services()
    {
        return view('Frontend.services.concrete_services');
    }
    public function patching_and_crack_filling()
    {
        return view('Frontend.services.patching_and_crack_filling');
    }
    public function snow_removal()
    {
        return view('Frontend.services.snow_removal');
    }
}
