<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
     public function index(Request $request) {
        $name = $request->input('name');
        $catbehavior = $request->input('catbehavior');
        $catphoto = $request->input('catphoto');
        return $name.$catbehavior.$catphoto;
	}

}
