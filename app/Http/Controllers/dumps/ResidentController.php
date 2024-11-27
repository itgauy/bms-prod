<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResidentRequest;
use App\Http\Requests\UpdateResidentRequest;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Start building the query
        $query = Resident::query();

        // Optional: Implement filtering based on query parameters
        if ($request->has('residency_status')) {
            $query->where('residency_status', $request->input('residency_status'));
        }

        if ($request->has('application_status')) {
            $query->where('application_status', $request->input('application_status'));
        }

        if ($request->has('search')) {
            $query->where('first_name', 'like', '%' . $request->input('search') . '%')
                  ->orWhere('last_name', 'like', '%' . $request->input('search') . '%');
        }

        // Pagination
        $residents = $query->paginate(10); // Adjust the number of items per page as needed

        return response()->json($residents);
    }

    public function fetchAll()
{
    $residents = Resident::all();
    return response()->json($residents);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResidentRequest $request)
    {
        // Create a new resident with validated data
        $resident = Resident::create($request->validated());

        // Return the created resident with a 201 status code
        return response()->json($resident, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        // Return the specified resident
        return response()->json($resident);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResidentRequest $request, Resident $resident)
    {
        // Update the resident with validated data
        $resident->update($request->validated());

        // Return the updated resident
        return response()->json($resident);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        // Delete the specified resident
        $resident->delete();

        // Return a 204 No Content response
        return response()->json(null, 204);
    }
}
