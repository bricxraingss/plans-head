@extends('includes.layout')

@section('content')
  User page <br>
	<a href="{{ route('user.logout') }}" class="btn btn-primary">Logout</a>
@endsection