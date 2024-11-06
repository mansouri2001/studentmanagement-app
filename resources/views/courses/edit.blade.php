@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Edit</div>
    <div class="card-body">
        <form action="{{url('courses/' .$courses->id)}}" method="POST">
            {!!csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$courses->id}}" id ="id" />
            <label >Name</label></br>
            <input type="text" name="name"  value ="{{$courses->name }}" class="form-control"></br>
            <label >Description</label></br>
            <input type="text" name="description" value= "{{$courses->description }}" class="form-control"></br>
            <label >Credits</label></br>
            <input type="number" name="credits"  value= "{{$courses->credits }}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success">
        </form>    
        
</div>
</div>
@stop