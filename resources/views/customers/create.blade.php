@extends('layouts.app')
<html>
    <head>
        <title>WoB - Add Customer</title>
    </head>
</html>
@section('title', 'Home Customer / Add Customer')
  
@section('contents')
    <h1 class="mb-0">Add Customer</h1>
    <hr />
    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="col">
                <input type="number" name="telp" class="form-control" placeholder="Phone Number" required>
            </div>
        </div>
 
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection