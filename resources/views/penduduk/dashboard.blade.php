@extends('layouts.app')
@section('title' , 'Dashboard')

@section('content')

    <a href="/login">logout</a>
    {{ $nama }}
    {{ $role }}

@endsection