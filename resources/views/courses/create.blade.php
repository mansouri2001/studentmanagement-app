@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Courses page</div>
    <div class="card-body">
        <form action="{{url('courses')}}" method="POST">
            {!!csrf_field() !!}
            <label >Name</label></br>
            <input type="text" name="name" class="form-control"></br>
            <label >Description</label></br>
            <input type="text" name="description" class="form-control"></br>
            <label >Credits</label></br>
            <input type="number" name="credits" class="form-control"></br>
        
            <input type="submit" value="save" class="btn btn-success">
        </form>
    </div>
</div>
@stop