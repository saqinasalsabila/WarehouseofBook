@extends('layouts.app')
<html>
    <head>
        <title>WoB - Dashboard</title>
    </head>
</html>
@section('title', 'Dashboard')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-0">Welcome {{ auth()->user()->name }}!</h1>
    </div>
@endsection