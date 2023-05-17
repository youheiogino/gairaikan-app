<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DentalClinic;

class DentalClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DentalClinic::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }


    public function geojson($like)
    {
        // TODO
        // 相模原市内、外来環
        // SELECT * FROM gairaikan_l5.dental_clinics
        // where address like "%相模原%"
        // and JSON_EXTRACT(accepts, "$[*].code") like "%外来環%"

        // 相模原市内、根切顕微
        // SELECT * FROM gairaikan_l5.dental_clinics
        // where address like "%相模原%"
        // and JSON_EXTRACT(accepts, "$[*].code") like "%根切顕微%"

        $dents = DentalClinic::all();//where('address', 'LIKE', '%' . $like . '%')
            // ->whereNotNull('location')
            // ->get();

        $features = [];

        foreach ($dents as $key => $item) {
            $feature = [];
            $feature["type"] = "Feature";

            $feature["geometry"]["type"] = "Point";
            $feature["geometry"]["coordinates"] = [$item->location->longitude, $item->location->latitude];

            $feature["properties"]["name"] = $item->name;
            $feature["properties"]["address"] = $item->address;
            $feature["properties"]["zip"] = $item->zip;
            $feature["properties"]["tel"] = $item->tel;
            $feature["properties"]["fax"] = $item->fax;

            $feature["properties"]["accepts"] = json_decode($item->accepts);

            array_push($features, $feature);
        }

        $geojson = [];
        $geojson["type"] = "FeatureCollection";
        $geojson["features"] = $features;

        // return response()->json($geojson);
        return $geojson;
    }
}
