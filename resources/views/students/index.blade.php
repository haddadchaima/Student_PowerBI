@extends('students.layout')

@section('content')

    <div class="row" >
        <div class="col-lg-12">
            <h2 class="text-center">Student Management CRUD Application</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('students.create') }}"> Add Student</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($students) > 0)
        <table class=" table table-bordered"  >
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>University</th>
                <th>Department</th>
                <th>Branch</th>
                <th>Level</th>
               
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                    <td>{{ $student->age }}</td>
                    <td> {{$student->gender}} </td>
                    <td>{{ $student->University }}</td>
                    <td>{{ $student->departement }}</td>
                    <td>{{ $student->branch }}</td>
                    <td>{{ $student->level }}</td>
                    <td>
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                           
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

    {!! $students->links() !!}

@endsection

@section('content_chart')


<iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMTljYTRmNWQtNGQ2YS00NjFkLWI1NTMtZTJjODY0ZmZkOWI3IiwidCI6ImRiZDY2NjRkLTRlYjktNDZlYi05OWQ4LTVjNDNiYTE1M2M2MSIsImMiOjl9" frameborder="0" allowFullScreen="true"></iframe>

@endsection