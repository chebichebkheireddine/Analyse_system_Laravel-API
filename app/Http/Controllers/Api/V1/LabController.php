<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LabCollection;
use App\Services\V1\LabsQuery;
use App\Models\Lab;
use App\Http\Requests\StoreLabRequest;
use App\Http\Requests\UpdateLabRequest;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
        // $filter=new LabsQuery();
        // $queryItem=$filter->transform($request);
        // if (count($queryItem)==0) {
        //     return new LabCollection(Lab::all());
        // }else{

        //     return new LabCollection(Lab::where($queryItem));

        // }
        // //this is to call reqest to do it in good why
        $filter = new LabsQuery();
        $queryItem = $filter->transform($request);

        $labs = Lab::query();

        if (!empty($queryItem)) {
            $labs->where($queryItem);
        }

        $labCollection = new LabCollection($labs->get());

        return $labCollection;
=======
        $filter=new LabsQuery();
        $queryItem=$filter->transform($request);
        if (count($queryItem)==0) {
            return new LabCollection(Lab::all());
        }else{

            return new LabCollection(Lab::where($queryItem));

        }
        //this is to call reqest to do it in good why
>>>>>>> 76e0c366840a1950ea1de99a7d03d6a7a74bd19e
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
    public function store(StoreLabRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lab $lab)
    { 
        //
        return $lab;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lab $lab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLabRequest $request, Lab $lab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lab $lab)
    {
        //
    }
}
