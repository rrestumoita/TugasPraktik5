@extends('layout.app')
 
@section('title', 'Halaman 1')
 
@section('content')
  <h1 class="text-3xl font-bold text-blue-500">
    Halaman 1
  </h1>

<br>

<a href="{{url('/halaman2')}}" class="text-black bg-gradient-to-r underline">
 Halaman 2
</a>
@endsection

