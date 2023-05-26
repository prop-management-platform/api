<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\StorePropRequest;
use App\Models\Label;
use App\Models\Prop;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PropController extends Controller
{
    public function index(): mixed
    {
        $props = Prop::with('labels')->paginate(200);

        return response()->json($props);
    }

    public function store(StorePropRequest $request)// : JsonResponse
    {
        $validated = $request->validated();

        return $validated;

        if(empty($validated)) {
            return response()->json(['message' => 'No data provided'], 422);
        }

        $labelIds = [];

        if ($request->has('labels')) {
            return 'has labels';
            $labels = $validated['labels'];

            foreach ($labels as $label) {
                return $label;
                $label = Label::firstOrCreate(['name' => $label]);
                $labelIds[] = $label->id;
            }

            unset($validated['labels']);
        }

        $prop = Prop::create($validated);

        if (!empty($labelIds)) {
            $prop->labels()->syncWithoutDetaching($labelIds);
        }

        return response()->json($prop, 201);
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
