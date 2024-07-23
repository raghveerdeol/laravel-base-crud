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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('pages.store') }}" method="POST">
                    @csrf
                    <label for="scientific_name">Scientific name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Scientific name" aria-label="Scientific name" id="scientific-name" name="scientific_name">

                    <label for="common_name">Common name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Common name" aria-label="Common name" id="common-name" name="common_name">

                    <label for="name">Name</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Name" aria-label="Name" id="name" name="name">

                    <label for="birthday">Birthday</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Birthday" aria-label="Birthday" id="scientific-name" name="birthday">

                    <label for="taxonomic_group">Taxonomic Group</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Taxonomic Group" aria-label="Taxonomic Group" id="scientific-name" name="taxonomic_group">

                    <label for="class">Class</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Class" aria-label="Class" id="scientific-name" name="class">

                    <label for="family">Family</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Family" aria-label="Family" id="scientific-name" name="family">

                    <label for="species">Species</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Species" aria-label="Species" id="scientific-name" name="species">

                    <label for="habitat">Habitat</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Habitat" aria-label="Habitat" id="scientific-name" name="habitat">

                    <label for="protected">Protected</label>
                    <input class="form-control form-control-sm" type="text" placeholder="Protected" aria-label="Protected" id="scientific-name" name="protected">
                </form>
            </div>
        </div>
    </div>
@endsection
