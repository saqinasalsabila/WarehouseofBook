@extends('layouts.app')
<html>
    <head>
        <title>WoB - Order Detail</title>
    </head>
</html>
@section('title', 'Home Order / Order Detail')
  
@section('contents')
    <div class="d-flex align-items-end justify-content-between">
        <h1 class="mb-0">Order Detail</h1>
        <h6 class="mb-0">Order ID : {{$order[1]->order_id}}</h6>
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
                <th>Product ID</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @if($order->count() > 0)
                @foreach($order as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->product_id }}</td>
                        <td class="align-middle">{{ $rs->amount }}</td>
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