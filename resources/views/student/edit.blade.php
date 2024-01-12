@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Student Info</h1>
                </div>

                <div class="card-body">

                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row mb-3">
                          <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}" >
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                          </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" value="Male"
                                @if ($student->gender == "Male") checked @endif>
                                <label for="gender">Male</label>

                                <input type="radio" name="gender" value="Female"
                                @if ($student->gender == "Female") checked @endif>
                                <label for="gender">Female</label>
                            </div>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control" value="{{ $student->age }}">
                          </div>

                        <div class="form-group col-md-4 mb-3">
                            <label for="inputState">Major</label>
                            <select name="major" class="form-control">
                              <option>Choose...</option>
                              <option  @if ($student->major == "IT") selected @endif>IT</option>
                              <option  @if ($student->major == "Civil") selected @endif>Civil</option>
                              <option  @if ($student->major == "EC") selected @endif>EC</option>
                              <option  @if ($student->major == "EP") selected @endif>EP</option>
                              <option  @if ($student->major == "MP") selected @endif>MP</option>
                            </select>
                        </div>

                        <a href="{{ route('student.index') }}" class="btn btn-outline-dark">
                            <i class="fa fa-angle-double-left fa-lg">Back</i>
                          </a>
                        <button type="submit" class="btn btn-success">Change</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
