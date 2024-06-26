<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Frontend extends Controller
{
    public function index()
    {
        $data['testimonials'] = Testimonial::get();
        return view('Frontend.index', $data);
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

    public function contact_usPost(Request $request)
    {
        $data = $request->validate([
            'form_name' => 'required|string',
            'form_address' => 'string',
            'form_phone' => 'required|string',
            'form_email' => 'required|email',
            'form_message' => 'string|max:500',
            'comertial_residen' => 'string',
            'booking_date' => 'nullable',
            'location' => 'nullable',
            'type' => 'nullable'
        ]);
        // dd($data);
        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($data));
            return back()->with('msg', 'Thanks for your time..');
        } catch (\Throwable $th) {
            Log::debug('mailerror', [$th->getMessage()]);
            return back()->with('msg', 'Some error occur! Please try again');
        }
        return back()->with('msg', 'Thanks for you time, We will contact you shortly');
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
