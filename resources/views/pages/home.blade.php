@extends('layouts.app')

@section('title','Homepage')

@section('main-content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Scientific Name</th>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Family</th>
                <th scope="col">Species</th>
                <th scope="col">Habitat</th>
                <th scope="col">Protected</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
            <tr>
                <th scope="row">{{$animal->id}}</th>
                <td>{{$animal->scientific_name}}</td>
                <td>{{$animal->name}}</td>
                <td>{{$animal->birthday}}</td>
                <td>{{$animal->family}}</td>
                <td>{{$animal->species}}</td>
                <td>{{$animal->habitat}}</td>
                @if ($animal->protected === 1)
                <td>Protected</td>
                @else
                <td>Not Protected</td>
                @endif
                <td>
                    <a class="btn btn-primary btn-sm" href="#" role="button">Show</a>
                </td>
                <td>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success btn-sm" href="#" role="button">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
