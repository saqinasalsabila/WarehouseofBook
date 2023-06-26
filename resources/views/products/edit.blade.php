@extends('layouts.app')
<html>
    <head>
        <title>WoB - Edit Product</title>
    </head>
</html>
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="writer" class="form-control" placeholder="Writer" value="{{ $product->writer }}">
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
            <div class="col">
                <input type="number" name="stock" class="form-control" placeholder="Stock" value="{{ $product->stock }}" >
            </div>
        </div>
 
        <div class="row">
            <div class="col">
                <button class="btn btn-primary"> Save Update</button>
            </div>
        </div>
    </form>
@endsection
