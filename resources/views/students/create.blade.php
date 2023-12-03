@extends('layout.layout')
@section('bodyindex')

<div class="card">
  <div class="card-header">Add users</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post" />
        {!! csrf_field() !!}
        <label>Name</label></br>
          <input type="text" name="name" id="name" class="form-control" /></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" class="form-control" /></br>
        <label>Email</label></br>
        <input type="text" name="email" id="Email" class="form-control"></br>


      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
