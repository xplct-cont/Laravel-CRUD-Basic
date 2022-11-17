@extends('layouts.app')

@section('content')
    
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5 elevation-4 rounded">
                <form method="post" action="{{url('update_student/' .$crud->id)}}">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label style="" for="">Last Name: </label>
                    <input type="text" name="lname" class="form-control" value="{{$crud->lname}}"  required>

                </div>
                <div class="form-group">
                    <label style="" for="">First Name: </label>
                    <input type="text" name="fname" class="form-control" value="{{$crud->fname}}"  required>

                </div>
                <div class="form-group">
                    <label style="" for="">Course: </label>
                    <input type="text" name="course" class="form-control" value="{{$crud->course}}"  required>

                </div>
                 <div class="form-group">
                    <label style="" for="">Year: </label>
                    <input type="text" name="year" class="form-control" value="{{$crud->year}}"  required>

                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mb-3" type="submit"><span class="fas fa-save"></span> Submit</button>
                </div>
                <div class="d-flex justify-content-start">
                    <a href="{{route('index')}}" type="button" class="btn btn-primary mb-2"><span class="fas fa-arrow-left"></span> Back</a>
                </div>
            </div>
        
        </form>
        
        </div>
    </div>
@endsection