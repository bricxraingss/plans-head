@extends('includes.layout')

@section('content')
<form class="mt-3" action="{{ route('user.auth') }}" method="post">
  @csrf
  @if(session()->has('error'))
      <div class="alert alert-warning">
          {{ session()->get('error') }}
      </div>
  @endif
  <div class="form-group">
    <label for="username">Email</label>
    <input type="text" class="form-control" name="email" placeholder="enter your email" >
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="enter your password">
  </div>

  <div class="form-group">
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <a href="{{ route('user.create') }}" class="ml-2 btn btn-info">Sign-up</a>
  </div>
</form>

@endsection
