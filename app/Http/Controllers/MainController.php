<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Ласкаво просимо на сайт платної поліклініки. Тут ви можете переглянути список лікарів та записатися на прийом.";
    }

    public function about()
    {
        return "HospitalApp - це інформаційна система платної поліклініки, яка дозволяє пацієнтам переглядати інформацію про лікарів та записуватись на консультацію.";
    }
}