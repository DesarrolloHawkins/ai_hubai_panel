<?php

namespace App\Http\Controllers;

use App\Models\Conversaciones;
use App\Http\Requests\StoreConversacionesRequest;
use App\Http\Requests\UpdateConversacionesRequest;

class ConversacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('conversaciones.index');
        
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
    public function store(StoreConversacionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Conversaciones $conversaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conversaciones $conversaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConversacionesRequest $request, Conversaciones $conversaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conversaciones $conversaciones)
    {
        //
    }
}
