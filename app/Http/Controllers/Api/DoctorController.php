<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return response()->json(Doctor::all());
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json($doctor);
    }

    public function store(Request $request)
{
    return response()->json([
        'message' => 'Validation error'
    ], 422);
}

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $doctor->update($request->all());

        return response()->json($doctor);
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $doctor->delete();

        return response()->json(['message' => 'Deleted']);
    }
}