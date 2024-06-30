<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Models\PartnerLogo;
class PartnerLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['partner_logos'] = PartnerLogo::get();
        return view('admin.partnerlogo.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        return view('admin.partnerlogo.create');

    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image',
        ]);
    
      
        $data = [];
    
        
        if ($request->hasfile('image')) {
            foreach($request->file('image') as $file) {
                $db_image = time() . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
                $file->storeAs("public/partner_logos", $db_image);
                $data[] = [
                    'image' => $db_image,
                    'created_at' => date('Y-m-d H:i:s'),
                ];
            }
        }
    
       
        try {
            $insert = DB::table('partner_logos')->insert($data);
            if ($insert) {
                return redirect()->route('partner-logo.index')->with('msg', 'Images uploaded successfully');
            } else {
                return back()->with('msg', 'Some error occurred!');
            }
        } catch (Exception $e) {
            Log::error('Exception caught: ' . $e->getMessage());
            return back()->with('msg', 'Some error occurred!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
 
     public function destroy($id)
{
    try {
        // Retrieve the logo from the database
        $logo = DB::table('partner_logos')->where('id', $id)->first();

        if ($logo) {
            // Delete the image from the storage
            if (Storage::disk('public')->exists('partner_logos/' . $logo->image)) {
                Storage::disk('public')->delete('partner_logos/' . $logo->image);
            }

            // Delete the record from the database
            DB::table('partner_logos')->where('id', $id)->delete();

            return redirect()->route('partner-logo.index')->with('msg', 'Image deleted successfully');
        } else {
            return redirect()->route('partner-logo.index')->with('msg', 'Image not found');
        }
    } catch (Exception $e) {
        Log::error('Exception caught: ' . $e->getMessage());
        return redirect()->route('partner-logo.index')->with('msg', 'Some error occurred!');
    }
}
}
