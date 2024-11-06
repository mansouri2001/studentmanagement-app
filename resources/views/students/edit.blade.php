@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit</div>
    <div class="card-body">
        <form action="{{url('students/' .$students->id)}}" method="POST">
            {!!csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id ="id" />
            <label >First_Name</label></br>
            <input type="text" name="first_name"  value ="{{$students->first_name }}" class="form-control"></br>
            <label >Last_Name</label></br>
            <input type="text" name="last_name" value= "{{$students->last_name }}" class="form-control"></br>
            <label >Age</label></br>
            <input type="number" name="age"  value= "{{$students->age }}" class="form-control"></br>
            <label >Address</label></br>
            <input type="text" name="address"  value= "{{$students->address }}" class="form-control"></br>
            <label >Contact_number</label></br>
            <input type="nmber" name="contact_number"  value= "{{$students->contact_number }}"class="form-control"></br>
            <label >Email</label></br>
            <input type="text" name="email" value= "{{$students->email }}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success">
        </form>    
        
</div>
</div>
@stop