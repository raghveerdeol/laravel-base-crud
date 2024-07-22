@extends('layouts.app')

@section('title','Homepage')

@section('main-content')

<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Scientific-name: {{$animal->scientific_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Name: {{$animal->name}} - Birthday: {{$animal->birthday}}</h6>
                    <p class="card-text">Class: {{$animal->class}} - Family: {{$animal->family}} - Species: {{$animal->species}}</p>
                    <p class="card-text">Habitat: {{$animal->habitat}}</p>
                    @if ($animal->protected === 1)
                    <p class="card-text">Protected</p>
                    @else
                    <p class="card-text">Not Protected</p>
                    @endif
                    <td>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                    <a class="btn btn-success btn-sm" href="#" role="button">Edite</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-2">
                <a class="btn btn-primary" href="{{ route('pages.home')}}" role="button">Show all</a>
            </div>
        </div>
    </div>
@endsection
