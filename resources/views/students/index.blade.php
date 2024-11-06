<!-- resources/views/students/index.blade.php -->

@extends('layout') <!-- You might have a master layout, adjust accordingly -->

@section('content')
<div class="card" style="right:100px ;width: 950px;">
    <div class="card-header ">
    <h1>Students List</h1>
    </div>
    <div class="card-body ">
        <a href="{{url('/students/create') }}" class="btn btn-success btn-sm "title= "Add New Student" >
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table"> 
                <thead> 
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                   
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->contact_number }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ url('/students/' .$item->id) }}" title ="view Student"> 
                                 <button class="btn btn-info btn-sm"><i class="fa-fa-eye" aria-hidden="tue"></i> View</button>
                            </a>
                            <a href="{{ url('/students/' .$item->id . '/edit') }}" title ="Edit Student"> 
                                 <button class="btn btn-primary btn-sm"><i class="fa-fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                            </a>
                            <form method="POST" action="{{ url('/students' . '/' .$item->id )}}" accept-charset="UTF-8" style="display:inline">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type ="submit" class="btn btn-danger btn-sm" title="Delete Student" 
                        onclick="return confirm($quot;confirm delete?$quot;)"><i class="fa-fa-trash-o" aria-hidden="true"></i>Delete</button>
                        </form>
                </td>    
                        </tr>
                        @endforeach
                        </tbody>
            </table>
        </div>
    </div>
</div>

    </div>
@endsection
