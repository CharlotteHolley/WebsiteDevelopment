@extends('layout')

@section('title')
    Sessions
@endsection

@section('header')
   Creating a session
@endsection

@section('content')

<form method="POST" action="/session">
 
  {{ csrf_field() }}
 
     <div><input type="text" placeholder="Session Title" name="title"></div>
 
     <div><textarea name="description" placeholder="Describe Your session"></textarea></div>
 
     <div><button type="submit">Create Session</button></div>
 
  </form>

@endsection
