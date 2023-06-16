@extends('layout.layout')

@section('content')
    <style>
        .card-img-top {
            height: 250px; /* Adjust the height as per your needs */
            object-fit: cover;
        }
    </style>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach($menus as $menu)
                <div class="col mb-4">
                    <div class="card card-item">
                        <img src="{{ url('/image/'.$menu->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menu->name }}</h5>
                            <p class="card-text">{{$menu->description}}</p>
                            <button type="button" class="btn btn-primary">{{$menu->price}}$</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
