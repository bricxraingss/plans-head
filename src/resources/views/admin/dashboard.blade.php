@extends('includes.layout')

@section('content')
  admin page <br>
	<a href="{{ route('user.logout') }}" class="btn btn-primary">Logout</a>
@endsection