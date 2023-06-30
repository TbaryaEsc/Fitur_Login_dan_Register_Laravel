<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Welcome to the Dashboard!</h1>
    <p>Your profile name: {{ Auth::user()->name }}</p>
@endsection
