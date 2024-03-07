<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function search(Request $request){
        // Get the search values from the request
        $searchloc = $request->input('src-location');
        $searchcat = $request->input('src-category');
        $searchname = $request->input('src-destination');

        // Start the query
        $query = DB::table('destinations');

        // Add conditions based on the search parameters
        if ($searchloc && $searchcat) {
            $query->where(function ($innerQuery) use ($searchloc, $searchcat) {
                $innerQuery->where('kota_destinasi', 'LIKE', "%{$searchloc}%")
                            ->where('kategori_destinasi', 'LIKE', "%{$searchcat}%")
                            ->orWhere('provinsi_destinasi', 'LIKE', "%{$searchloc}%");
            });
        }else if($searchname){
            $query->where('nama_destinasi', 'LIKE', "%{$searchname}%");
        } else {
            // Add conditions separately for location and category if only one is provided
            if ($searchloc) {
                $query->where(function ($innerQuery) use ($searchloc) {
                    $innerQuery->where('kota_destinasi', 'LIKE', "%{$searchloc}%")
                                ->orWhere('provinsi_destinasi', 'LIKE', "%{$searchloc}%");
                });
            }

            if ($searchcat) {
                $query->where('kategori_destinasi', 'LIKE', "%{$searchcat}%");
            }
        }

        // Execute the query
        $destinasi = $query->get();

        // Return the search view with the results compacted
        return view('auth.dashboard', compact('destinasi'));
    }

    public function edit($id){
        return view('maps', [
            'destinasi'=> DB::table('destinations')->where('id', "$id")->get(),
            'location'=> DB::table('locations')->where('destination_id', "$id")->get(),
        ]);
    }
}
