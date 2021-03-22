<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{
    public function store(){
    	$data = request()->validate([
    		'name' => 'required',
    		'dob' => 'required',
    	]);
    	Author::create($data);
    }
}
