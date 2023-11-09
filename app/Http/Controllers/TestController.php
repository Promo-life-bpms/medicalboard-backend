<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function data()
    {
        $data = [];
        $users = User::all();
        foreach ($users as $user) {
            array_push($data , (object)[
                'name' => $user->name . ' ' . $user->lastname,
                'tagID' => '/medical/info/'. $user->medical->tag
            ]);
        }

        $newdata = $data;

        return $newdata;
    }
}
