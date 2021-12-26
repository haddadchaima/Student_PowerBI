@extends('students.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit Student</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>

   

    <form action="{{ route('students.update',$student->id) }}" method="POST">
        

       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input name="_method" type="hidden" value="PUT">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="firstName" value="{{ $student->firstName}}" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" class="form-control" value="{{ $student->lastName}}" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="text" class="form-control" value="{{ $student->age}}" name="age" placeholder="Age">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="text" class="form-control" value="{{ $student->gender}}" name="gender" placeholder="Gender">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>University:</strong>
                    <input type="text" class="form-control" value="{{$student->University}}" name="University" placeholder="University">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departement:</strong>
                    <input type="text" class="form-control" value="{{$student->dept}}" name="departement" placeholder="Departement">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Branch:</strong>
                    <input type="text" class="form-control" value="{{$student->branch}}" name="branch" placeholder="Branch">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Level:</strong>
                    <input type="text" class="form-control" value="{{$student->level}}" name="level" placeholder="Level">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection