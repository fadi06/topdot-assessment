<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {

        return $this->getUserInfo();

    }

    public function getUserInfo()
    {

        $data = User::with(['location', 'cars.location'])->get();

        return ['status' => true, 'data' => $data];

    }
}
