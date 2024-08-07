@extends('layouts.app')

@section('title','Add new animal')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add new animal</h1>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('pages.update', $animal) }}" method="POST" id='edit-form'>
                    @method('PUT')
                    @csrf
                    <label for="scientific_name">Scientific name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Scientific name" aria-label="Scientific name" id="scientific-name" name="scientific_name" value="{{ old('scientific_name', $animal->scientific_name)}}">

                    <label for="common_name">Common name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Common name" aria-label="Common name" id="common-name" name="common_name" value="{{ old('common_name', $animal->common_name)}}">

                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Name" aria-label="Name" id="name" name="name" value="{{ old('name', $animal->name) }}">

                    <label for="birthday">Birthday</label>
                    <input class="form-control form-control-sm" type="date" placeholder="Birthday" aria-label="Birthday" id="scientific-name" name="birthday" value="{{ old('birthday', $animal->birthday) }}">

                    <label for="taxonomic_group">Taxonomic Group</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Taxonomic Group" aria-label="Taxonomic Group" id="scientific-name" name="taxonomic_group" value="{{ old('taxonomic_group', $animal->taxonomic_group) }}">

                    <label for="class">Class</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Class" aria-label="Class" id="scientific-name" name="class" value="{{ old('class', $animal->class) }}">

                    <label for="family">Family</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Family" aria-label="Family" id="scientific-name" name="family" value="{{ old('family', $animal->family)}}">

                    <label for="species">Species</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Species" aria-label="Species" id="scientific-name" name="species" value="{{ old('species', $animal->species) }}">

                    <label for="habitat">Habitat</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Habitat" aria-label="Habitat" id="scientific-name" name="habitat" value="{{ old('habitat', $animal->habitat) }}">

                    {{-- <label for="protected">Protected</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Protected" aria-label="Protected" id="scientific-name" name="protected"> --}}

                    <div class="form-check">
                        <input class="form-check-input" value="1" type="radio" name="protected" id="protected-1">
                        <label class="form-check-label" for="protected1">
                        Protected
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="0" type="radio" name="protected" id="protected-2" checked>
                        <label class="form-check-label" for="protected2">
                        Not Protected
                        </label>
                    </div>

                    <input type="submit" class="btn btn-primary mt-5" value="Update {{$animal->name}}">
                </form>
            </div>
        </div>
    </div>
@endsection
@vite('resources/js/update-alert.js')
