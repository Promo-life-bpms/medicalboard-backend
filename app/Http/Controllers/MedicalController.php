<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index() {
        return view('medical.index');
    }

    public function presentation($id)  {
        $user = User::where('id', $id)->get()->first();


        return view('medical.presentation', compact('user'));
    }
}
