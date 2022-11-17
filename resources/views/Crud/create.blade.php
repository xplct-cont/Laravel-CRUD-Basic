@extends('layouts.app')

@section('content')
    
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5 elevation-4 rounded">
                <form method="post" action="{{url('create_new_student')}}">
                    @csrf
                <div class="form-group">
                    <label style="" for="">Last Name: </label>
                    <input type="text" name="lname" class="form-control" placeholder="Enter lastname"  required>

                </div>
                <div class="form-group">
                    <label style="" for="">First Name: </label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter firstname"  required>

                </div>
                <div class="form-group">
                    <label style="" for="">Course: </label>
                    <input type="text" name="course" class="form-control" placeholder="Enter course"  required>

                </div>
                 <div class="form-group">
                    <label style="" for="">Year: </label>
                    <input type="text" name="year" class="form-control" placeholder="Enter year"  required>

                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mb-3" type="submit"><span class="fas fa-save"></span> Submit</button>
                </div>
            </div>
        
        </form>
        </div>
    </div>
@endsection