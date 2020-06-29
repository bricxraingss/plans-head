@extends('includes.layout')

@section('content')
  <form action="{{ route('user.store') }}" method="post">
    @csrf
    <h1>User Creation</h1>
    <div class="row p-3">
        <div class="col-sm-1">
            <label>Name:</label>
        </div>
        <div class="col-sm-11">
            <input type="textbox" name="name" required>
        </div>
        <div class="col-sm-1">
            <label>Email:</label>
        </div>
        <div class="col-sm-11">
            <input type="textbox" name="email" required>
        </div>
        <div class="col-sm-1">
            <label>Authority:</label>
        </div>
        <div class="col-sm-11">
          <select name="type">
            <option value="0">Admin</option>
            <option value="1">User</option>
          </select>
        </div>
        <div class="col-sm-1">
            <label>Password:</label>
        </div>
        <div class="col-sm-11">
            <input type="password" name="password" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Sign Up</button>
    <a href="{{ url()->previous() }}" class="ml-2 btn btn-secondary">Back</a>
  </form>
@endsection
