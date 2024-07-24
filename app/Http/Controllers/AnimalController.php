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

        return view('pages.show', compact('animal'));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){
        $data = $request->all();

        // $newAnimal = new Animal();
        // $newAnimal->scientific_name = $data['scientific_name'];
        // $newAnimal->common_name = $data['common_name'];
        // $newAnimal->name = $data['name'];
        // $newAnimal->birthday = $data['birthday'];
        // $newAnimal->taxonomic_group = $data['taxonomic_group'];
        // $newAnimal->class = $data['class'];
        // $newAnimal->family = $data['family'];
        // $newAnimal->species = $data['species'];
        // $newAnimal->habitat = $data['habitat'];
        // $newAnimal->protected = $data['protected'];
        // $newAnimal->save();
        // dd($newAnimal);
        $newAnimal = Animal::create($data);
        return redirect()->route('pages.show', $newAnimal);
    }
}
