@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow mt-5">
                <div class="card-header text-center shadow">
                    <h1>Add a New Student</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="form-row mb-3">
                          <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" >
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" >
                          </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" value="Male">
                                <label for="gender">Male</label>
                                <input type="radio" name="gender" value="Male">
                                <label for="gender">Female</label>
                            </div>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control" >
                          </div>

                        <div class="form-group col-md-4 mb-3">
                            <label for="inputState">Major</label>
                            <select name="major" class="form-control">
                              <option selected>Choose...</option>
                              <option>IT</option>
                              <option>Civil</option>
                              <option>EC</option>
                              <option>EP</option>
                              <option>MP</option>
                            </select>
                        </div>

                        <a href="{{ route('student.index') }}" class="btn btn-outline-dark">
                            <i class="fa fa-angle-double-left fa-lg">Back</i>
                          </a>
                        <button type="submit" class="btn btn-outline-primary">Add</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
