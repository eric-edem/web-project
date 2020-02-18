<?php

namespace App\Http\Controllers;

use App\GIS_User;
use Illuminate\Http\Request;

class GISController extends Controller
{
    public function index(){
        $users = GIS_User::all();
        $routeVar = ["name" => "gis", "label" => "Ghana Immigration Service"];
        return view('gis.index', compact('users', 'routeVar'));
    }

    public function show(){
        $routeVar = ["name" => "GIS", "label" => "Ghana Immigration Service"];
        $user = GIS_User::all();
        return view('gis.index', compact('user','routeVar'));
    }

    public function create(){
        $routeVar = ["name" => "GIS", "label" => "Ghana Immigration Service"];
        return view('gis.create', compact('routeVar'));
    }

    public function edit(){
        $user = GIS_User::all();
        $routeVar = ["name" => "GIS", "label" => "Ghana Immigration Service"];
        return view('gis.index', compact('user', 'routeVar'));
    }

    public function store(){
//        $this->validate()
        $user = new GIS_User();
        $user->first_name = \request('first_name');
        $user->last_name = \request('last_name');
        $user->date_of_birth = \request('date_of_birth');
        $user->ethnicity = \request('ethnicity');
        $user->ssn = \request('ssn');
        $user->save();
        return redirect('/gis');
    }
}
