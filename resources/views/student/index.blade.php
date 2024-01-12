@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Students Information</h1>
                </div>

                <div class="card-body">

                    <a href="{{ route('student.create') }}" class="btn btn-outline-success mb-3">
                        <i class="fas fa-user-plus"></i>
                    </a>

                    <table class="table table-striped">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Age</th>
                                <th scope="col">Major</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <th scope="row" >{{ $student->id }}</th>
                                    <td >{{ $student->name }}</td>
                                    <td >{{ $student->email }}</td>
                                    <td >{{ $student->gender }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td >{{ $student->major }}</td>
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{ route('student.edit',$student->id) }}" class="btn btn-outline-warning"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('student.show',$student->id) }}" class="btn btn-outline-info"><i class="fa fa-info"></i></a>
                                        </div>

                                        <form action="{{ route('student.destroy',$student->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
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
</div>
@endsection
