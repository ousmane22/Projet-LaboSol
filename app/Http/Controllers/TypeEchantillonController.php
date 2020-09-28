<?php

namespace App\Http\Controllers;

use App\Models\TypeEchantillon;
use Illuminate\Http\Request;

class TypeEchantillonController extends Controller
{
    public function index()
    {
        $type = TypeEchantillon::all();
        return json_encode($type);
    }
}
