<?php

namespace App\Http\Controllers;

use App\DVLAUsers;
use App\ECUsers;
use App\GIS_User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $routeVar = ["name" => "search", "label" => "Search Ghana Databases"];
        return view('search.index', compact('routeVar'));
    }

    public  function store(){
        $name = \request('name');
        $routeVar = ["name" => "search", "label" => "Search Ghana Databases"];
        $GISUsers = GIS_User::whereRaw("first_name like '%".$name."%'")->orWhereRaw("last_name like '%".$name."%'")->get();
        $ECUsers = ECUsers::whereRaw("first_name like '%".$name."%'")->orWhereRaw("last_name like '%".$name."%'")->get();
        $DVLAUsers = DVLAUsers::whereRaw("first_name like '%".$name."%'")->orWhereRaw("last_name like '%".$name."%'")->get();

        return view('search.show', compact("name", "GISUsers", "ECUsers", "routeVar", "DVLAUsers"));
    }
}
