<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = House::get();

        return view('welcome', compact('data'));
    }

    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $query = House::query();

        if (!is_null($request->name)) {
            $query->where('name', 'Like', '%'.$request->name.'%');
        }

        if (!is_null($request->bedrooms)) {
            $query->where('bedrooms', $request->bedrooms);
        }

        if (!is_null($request->bathrooms)) {
            $query->where('bathrooms', $request->bathrooms);
        }

        if (!is_null($request->storeys)) {
            $query->where('storeys', $request->storeys);
        }

        if (!is_null($request->garages)) {
            $query->where('garages', $request->garages);
        }

        if (!is_null($request->price_from)) {
            $query->where('price', '>=', $request->price_from);
        }
        if (!is_null($request->price_to)) {
            $query->where('price', '<=', $request->price_to);
        }

        $data = $query->get();

        return new JsonResponse($data);
    }
}
