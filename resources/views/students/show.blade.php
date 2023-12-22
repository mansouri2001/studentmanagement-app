@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Students page</div>
    <div class="card-body">
    
                <div class="card-body">
                <h5 class="card-title">Name: {{ $students->first_name }} {{ $students->last_name }}</h5>
                
                <p class="card-text">Age:{{$students->age}}</p>
                <p class="card-text">Address:{{$students->address}}</p>
                <p class="card-text">Contact Number:{{$students->contact_number}}</p>
                <p class="card-text">Email:{{$students->email}}</p>
    </div>
   </hr>
      </div>
</div>
@endsection