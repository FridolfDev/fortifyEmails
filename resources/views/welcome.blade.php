@extends('templates.main')


@section('content')
    <h1 class="text-5xl text-center mt-12">Hello @auth {{ Auth::user()->name     }}@endauth</h1>
@endsection