<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function show(Doctor $doctor)
    {
        return view('admin.doctors.show', compact('doctor'));
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctors.index')
            ->with('success', 'Лікаря успішно видалено');
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'specialty' => 'required',
        'price' => 'required|numeric|min:1'
    ]);

    Doctor::create([
        'name' => $request->name,
        'specialty' => $request->specialty,
        'price' => $request->price
    ]);

    return redirect()->route('admin.doctors.index')
        ->with('success', 'Лікаря успішно додано');
    }

}