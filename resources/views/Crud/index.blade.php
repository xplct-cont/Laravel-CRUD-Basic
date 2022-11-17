@extends('layouts.app')

@section('content')
    

    <div class="container  col-md-10">
        
        <div class="card mt-5 elevation-4">
                <div class="card-header" style="font-size: 20px;">
                    Student Lists
                    <div class="d-flex justify-content-end">
                        <a href="{{route('create_student')}}" type="button" class="btn btn-primary mt-1 mb-2">Add New Student <span class="fas fa-upload"></span></a>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead class="bg-dark text-light text-center">
                        <tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($crud as $item)
                           <tr class="text-center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->lname}}</td>
                            <td>{{$item->fname}}</td>
                            <td>{{$item->course}}</td>
                            <td>{{$item->year}}</td>
                            <td><a href="{{url('edit_student/'.$item->id)}}"
                                class="btn btn-warning btn-xs "><i class="fas fa-edit"></i></a></td>
                            <td><a href="{{url('delete_student/'.$item->id)}}"
                                class="btn btn-danger btn-xs "><i class="fas fa-trash"></i></a></td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
    

