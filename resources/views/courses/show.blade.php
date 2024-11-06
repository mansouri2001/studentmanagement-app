@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">courses page</div>
    <div class="card-body">
    
                <div class="card-body">
                <h5 class="card-title">Name: {{ $courses->name }} </h5>
                
                <p class="card-text">Credits:{{$courses->credits}}</p>
                <p class="card-text">Description:{{$courses->description}}</p>
                
    </div>
   </hr>
      </div>
</div>
@endsection