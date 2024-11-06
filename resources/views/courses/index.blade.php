<!-- resources/views/students/index.blade.php -->

@extends('layout') <!-- You might have a master layout, adjust accordingly -->

@section('content')
<div class="card" style="right:100px ;width: 950px;">
    <div class="card-header ">
    <h1>Course List</h1>
    </div>
    <div class="card-body ">
        <a href="{{url('/courses/create') }}" class="btn btn-success btn-sm "title= "Add New Course" >
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table"> 
                <thead> 
                    <th>Name</th>
                    <th>Description</th>
                    <th>Credits</th>
                    <th>Actions</th>
                </tr>
                   
                </thead>
                <tbody>
                @foreach($courses as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->credits }}</td>
                        
                        <td>
                            <a href="{{ url('/courses/' .$item->id) }}" title ="view Course"> 
                                 <button class="btn btn-info btn-sm"><i class="fa-fa-eye" aria-hidden="tue"></i> View</button>
                            </a>
                            <a href="{{ url('/courses/' .$item->id . '/edit') }}" title ="Edit Course"> 
                                 <button class="btn btn-primary btn-sm"><i class="fa-fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                            </a>
                            <form method="POST" action="{{ url('/courses' . '/' .$item->id )}}" accept-charset="UTF-8" style="display:inline">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type ="submit" class="btn btn-danger btn-sm" title="Delete Course" 
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
