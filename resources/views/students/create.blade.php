@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Students page</div>
    <div class="card-body">
        <form action="{{url('students')}}" method="POST">
            {!!csrf_field() !!}
            <label >First_Name</label></br>
            <input type="text" name="first_name" class="form-control"></br>
            <label >Last_Name</label></br>
            <input type="text" name="last_name" class="form-control"></br>
            <label >Age</label></br>
            <input type="number" name="age" class="form-control"></br>
            <label >Address</label></br>
            <input type="text" name="address" class="form-control"></br>
            <label >Contact_number</label></br>
            <input type="nmber" name="contact_number" class="form-control"></br>
            <label >Email</label></br>
            <input type="text" name="email" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>
@stop