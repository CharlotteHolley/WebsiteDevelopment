@extends('layout')

@section('title')
    Sessions
@endsection

@section('header')
   Session Holder Example
@endsection

@section('content')

     @if (session('message'))
   
     <p>{{ session('message') }}</p>
     
     @endif

@endsection
