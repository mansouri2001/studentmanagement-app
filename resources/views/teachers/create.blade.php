

@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teachers page</div>
    <div class="card-body">
        <form action="{{url('teachers')}}" method="POST">
            {!!csrf_field() !!}
            <label >Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label >Address</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label >Mobile</label></br>
            <input type="nmber" name="mobile"id="mobile" class="form-control"></br>
            <label >Email</label></br>
            <input type="text" name="email" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>
@stop