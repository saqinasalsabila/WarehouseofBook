@extends('layouts.app')
<html>
    <head>
        <title>WoB - Customer List</title>
    </head>
</html>
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Customer List</h1>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer +</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="/customers" class="d-none d-sm-inline-block form-inline ml-auto mr-md-3 my-2 my-md-0 mw-100 navbar-search mb-3" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control border-20 small" placeholder="Search Customer" aria-label="Search" aria-describedby="basic-addon2">
        </div>
    </form>

    <table class="table table-hover mt-3">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($customer->count() > 0)
                @foreach($customer as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->username }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">0{{ $rs->telp }}</td>   
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('customers.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('customers.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <a href="{{ route('customers.destroy', $rs->id)}}" type="button" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Customer not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
