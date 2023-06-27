@extends('layouts.app')
<html>
    <head>
        <title>WoB - Dashboard</title>
    </head>
</html>

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-0">Welcome {{ auth()->user()->name }}!</h1>
    </div>
    <div class="dropdown-divider"></div>
    <br>
    <h2>Admin Manual</h2>
    <br>
    <p><i class="fas fa-fw fa-exclamation-circle"></i><b> Products:</b> Fill book's information and stocks here</p>
    <p><i class="fas fa-fw fa-exclamation-circle"></i><b> Order:</b> Customer's Order History </p>
    <p><i class="fas fa-fw fa-exclamation-circle"></i><b> Customer:</b> Warehouse of Books' Customer Membership List</p>
@endsection
