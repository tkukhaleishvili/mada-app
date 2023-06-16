@extends('layout.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('menus.index') }}"> Back</a>

            </div>

        </div>

    </div>




    <form action="{{ route('menus.store') }}" method="POST">

        @csrf



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" class="form-control" placeholder="Name">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>description:</strong>

                    <input type="text" name="description" class="form-control" placeholder="description">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>price:</strong>

                    <input type="text" name="price" class="form-control" placeholder="price">

                </div>
                object-fit: cover; /* Ensures the image fills the container without distortion */

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>



    </form>

@endsection
