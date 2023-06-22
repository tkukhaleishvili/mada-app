@extends('layout.layout')

@section('content')
    <div class="container py-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach($menus as $menu)
                <div class="col-xl-3 mb-4">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top img-fluid" src="{{ url('/'.$menu->image) }}" />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{$menu->price}}$</div>
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">{{ $menu->name }}</h5></a>
                            <p class="card-text mb-0">{{$menu->description}}</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
