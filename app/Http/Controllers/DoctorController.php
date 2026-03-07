<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $doctors = [
        1 => [
            'id' => 1,
            'name' => 'Євпатій Коловрат',
            'specialty' => 'Кардіолог',
            'price' => '500 грн'
        ],
        2 => [
            'id' => 2,
            'name' => 'Ілля Муромець',
            'specialty' => 'Терапевт',
            'price' => '400 грн'
        ],
        3 => [
            'id' => 3,
            'name' => 'Добриня Микитич',
            'specialty' => 'Хірург',
            'price' => '700 грн'
        ]
    ];

    public function index()
    {
    return view('doctors.index', [
        'doctors' => $this->doctors
    ]);
    }

    public function show($id)
    {
    if(isset($this->doctors[$id])){
        return view('doctors.show', [
            'doctor' => $this->doctors[$id]
        ]);
    }

    abort(404);
    }
}