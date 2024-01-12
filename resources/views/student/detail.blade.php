@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Student Info</h1>
                </div>

                <div class="card-body">

                    <form action="" method="">

                        <div class="form-row mb-3">
                          <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}" @disabled(true)>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}" @disabled(true)>
                          </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" value="Male"
                                @if ($student->gender == "Male") checked @endif @disabled(true)>
                                <label for="gender">Male</label>

                                <input type="radio" name="gender" value="Male"
                                @if ($student->gender == "Feale") checked @endif @disabled(true)>
                                <label for="gender">Female</label>
                            </div>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control" value="{{ $student->age }}" @disabled(true)>
                          </div>

                        <div class="form-group col-md-4 mb-3">
                            <label for="inputState">Major</label>
                            <select name="major" class="form-control" @disabled(true)>
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
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
