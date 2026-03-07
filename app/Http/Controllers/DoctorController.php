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
        return response()->json(array_values($this->doctors), 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function show($id)
    {
        if(isset($this->doctors[$id])){
            return response()->json($this->doctors[$id], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return "Лікаря з таким ID не знайдено";
    }
}