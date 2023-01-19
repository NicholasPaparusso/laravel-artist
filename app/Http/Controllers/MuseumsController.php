<?php

namespace App\Http\Controllers;

use App\Models\Museums;
use App\Http\Requests\StoreMuseumsRequest;
use App\Http\Requests\UpdateMuseumsRequest;

class MuseumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums = Museums::paginate(10);
        return view('museum.index', compact('museums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMuseumsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMuseumsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function show(Museums $museums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function edit(Museums $museums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMuseumsRequest  $request
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMuseumsRequest $request, Museums $museums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museums $museums)
    {
        //
    }
}
