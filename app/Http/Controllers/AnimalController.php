<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $animals = Animal::all();

        return view('pages.home', compact('animals'));
    }

    public function show(Animal $animal){
        // $animal = Animal::findOrFail($post);
        return view('pages.show', compact('animal'));
    }
}
