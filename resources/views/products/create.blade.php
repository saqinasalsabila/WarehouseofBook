@extends('layouts.app')
<html>
    <head>
        <title>WoB - Add Product</title>
    </head>
</html>
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="writer" class="form-control" placeholder="Writer">
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col">
                <input type="number" name="stock" class="form-control" placeholder="Stock">
            </div>
        </div>
 
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
