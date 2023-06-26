@extends('layouts.app')
<html>
    <head>
        <title>WoB - Product List</title>
    </head>
</html>
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product +</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="/products" class="d-none d-sm-inline-block form-inline ml-auto mr-md-3 my-2 my-md-0 mw-100 navbar-search mb-3" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control border-20 small" placeholder="Search Product" aria-label="Search" aria-describedby="basic-addon2">
        </div>
    </form>

    <table class="table table-hover mt-3">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Writer</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->writer }}</td>  
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->stock }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <a href="{{ route('products.destroy', $rs->id)}}" type="button" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
