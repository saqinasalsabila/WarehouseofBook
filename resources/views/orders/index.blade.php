@extends('layouts.app')
<html>
    <head>
        <title>WoB - Order List</title>
    </head>
</html>

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Order List</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Customer ID</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($order->count() > 0)
                @foreach($order as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->customer_id }}</td>
                        <td class="align-middle">{{ $rs->created_at }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('orders.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('orders.destroy', $rs->id)}}" type="button" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Order not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
