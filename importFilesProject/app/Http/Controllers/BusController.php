<?php

namespace App\Http\Controllers;

use App\Exports\BusesExport;
use App\Imports\BusesImport;
use App\Models\Bus;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBuses = Bus::all();
        return view('bus.index',compact('allBuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Excel::download(new BusesExport,'buses.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file'))
        {
            Excel::import(new BusesImport, request()->file('file'));
            return redirect()->route('bus.index')->with('success',"data imported succesfully");
        }

        return redirect()->route('bus.index');
        

        
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
