@extends('layouts.app')

@section('title' , 'login')

@section('content')
    <h2>Login</h2>
    <div class="container">
        @if ($errors->any())
            <div class="aletr alert-danger">
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <input type="text" name="nik" value="{{old('nik')}}" id="" placeholder="Masukan Nik">
            <input type="password" name="password" id="" placeholder="Masukan Password">
            <input type="submit" value="Login">
        </form>
    </div>
@endsection