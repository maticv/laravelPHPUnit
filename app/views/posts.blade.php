@extends('layouts.default')

@section('title')
    {{ 'Main' }}
@stop

@section('content')
	{{ Former::open('login')->method('post') }}
    {{ Former::text('email','Email:')->autofocus() }}
    {{ Former::password('password','Password:') }}
    {{ Former::submit('login','Login') }}
    {{ Former::close() }}
@stop
