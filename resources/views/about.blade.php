@extends('layouts.main')
@section('container')
    <h1>Home Page</h1>
    <input type="text" id="textfield">
    <button class="update" onclick="change({{ $name }})">change</button>
    <h2>{{ $name }}</h2>
    <script src="js/script.js"></script>
@endsection
