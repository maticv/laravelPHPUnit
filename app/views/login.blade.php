@extends('layouts.default')

@section('title')
    {{ 'Login' }}
@stop

@section('content')
<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>
	<!--{{ Former::open('login')->method('post') }}
    {{ Former::text('email','Email:')->autofocus() }}
    {{ Former::password('password','Password:') }}
    {{ Former::submit('login','Login') }}
    {{ Former::close() }}-->
@stop

