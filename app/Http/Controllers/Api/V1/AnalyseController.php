<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AnalysebCollection;
use App\Http\Resources\V1\AnalyseCollection;
use App\Models\Analyse;
use App\Http\Requests\StoreAnalyseRequest;
use App\Http\Requests\UpdateAnalyseRequest;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new AnalyseCollection(Analyse::all());
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
    public function store(StoreAnalyseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Analyse $analyse)
    {
        //
        return $analyse;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Analyse $analyse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnalyseRequest $request, Analyse $analyse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Analyse $analyse)
    {
        //
    }
}
