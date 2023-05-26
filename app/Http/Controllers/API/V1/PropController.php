<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\StorePropRequest;
use App\Models\Prop;
use Illuminate\Http\Request;

class PropController extends Controller
{
    public function index(): mixed
    {
        $props = Prop::with('labels')->paginate(200);

        return response()->json($props);
    }

    public function store(StorePropRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prop $prop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prop $prop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prop $prop)
    {
        //
    }
}
