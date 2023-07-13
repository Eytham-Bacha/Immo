@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence test</h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis laudantium totam quos minima excepturi
                magni doloremque necessitatibus possimus officia sequi labore dolor praesentium corporis mollitia vero neque
                vel, quae amet!</p>
        </div>
    </div>

    <div class="container">
        <h2> Nos derniers biens </h2>
        <div class="row">
            @foreach ($properties as $property )

            <div class="col">
@include('property.card')

            </div>
            @endforeach
        </div>

    </div>
@endsection
