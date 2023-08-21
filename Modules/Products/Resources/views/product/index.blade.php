@extends('products::layouts.master')

@section('content')
    <div class="div container">
        <div class="row">
            <div class="col-sm-12 text-right">
                <a href="{{route('product.create')}}" class="btn btn-success">Add Product</a>
            </div>
        </div>

        <div class="row mt-3">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>category</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->title}}</td>
                            <td>
                                <a href="{{route('product.edit', $item)}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="{{route('product.destroy', $item)}}" class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
