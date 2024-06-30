<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller

    {
        public function index(Offer $offer = null)
        {
            // Fetch the offer record from the database
            $offer = Offer::first(); // Adjust this if you have logic to fetch a specific record
    
            return view('admin.offer.index', compact('offer'));
        }
    
        public function store(Request $request)
{
    $request->validate([
        'discount' => 'required|string',
        'text' => 'required|string|max:255',
        'number' => 'required|numeric',
    ]);

    $offer = new Offer();
    $offer->discount = $request->input('discount');
    $offer->text = $request->input('text');
    $offer->number = $request->input('number');
    $offer->save();

    return redirect()->route('offer.index')->with('success', 'Offer created successfully');
}

        // Update the offer
        public function update(Request $request, Offer $offer = null)
        {
            $request->validate([
                'discount' => 'required|string',
                'text' => 'required|string|max:255',
                'number' => 'required|numeric',
            ]);
        
            // If no offer is provided, create a new instance
            if ($offer === null) {
                $offer = new Offer();
            }
        
            // Update or set the offer fields
            $offer->discount = $request->input('discount');
            $offer->text = $request->input('text');
            $offer->number = $request->input('number');
            $offer->save();
        
            return redirect()->route('offer.index')->with('success', 'Offer updated successfully');
        }
        
        
}
