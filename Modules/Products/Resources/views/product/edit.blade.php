@extends('products::layouts.master')

@section('content')
    <div class="div container">
        <div class="row">
            <div class="col-sm-12">
                <a href="{{route('products', $data)}}" class="btn btn-success">Product Lists</a>
            </div>
        </div>

        <form action="{{route('product.update', $data)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="category">Category</label>
                    <input type="text" name="category" value="{{$data->category}}" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="title">Title</label>
                    <input type="text" name="title"  value="{{$data->title}}" class="form-control">
                </div>
                <div class="col-sm-12">
                    <button class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
