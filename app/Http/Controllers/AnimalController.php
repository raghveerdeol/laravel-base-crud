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

        $request->validate([
            'scientific_name' => 'required|max:60',
            'common_name' => 'required|max:40',
            'name' => 'required|max:40',
            'birthday' => 'required',
            'taxonomic_group' => 'required|max:60',
            'class' => 'required|max:50',
            'family' => 'required|max:50',
            'species' => 'required|max:50',
            'habitat' => 'required|max:50',
            'protected' => 'required',
        ]);
        $newAnimal = Animal::create($data);
        return redirect()->route('pages.show', $newAnimal);
    }

    public function edit(Animal $animal){
        return view('pages.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal){
        $data = $request->all();
        $request->validate([
            'scientific_name' => 'required|max:60',
            'common_name' => 'required|max:40',
            'name' => 'required|max:40',
            'birthday' => 'required',
            'taxonomic_group' => 'required|max:60',
            'class' => 'required|max:50',
            'family' => 'required|max:50',
            'species' => 'required|max:50',
            'habitat' => 'required|max:50',
            'protected' => 'required',
        ]);
        $animal->update($data);
        return redirect()->route('pages.show', $animal);
    }

    public function destroy(Animal $animal){
        $animal->delete();
        return redirect()->route('pages.home');
    }
}
