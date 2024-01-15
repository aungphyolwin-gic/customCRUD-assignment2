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
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" >
                            <div class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" class="@error('gender') is-invalid @enderror" value="Male" @if (old('gender'))@checked(true) @endif
                                <label for="gender">Male</label>
                                <input type="radio" name="gender" class="@error('gender') is-invalid @enderror" value="Male"  @if (old('gender'))@checked(true) @endif>
                                <label for="gender">Female</label>
                            </div>
                            <div class="text-danger">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}" >
                            <div class="text-danger">
                                @error('age')
                                    {{ $message }}
                                @enderror
                            </div>
                          </div>

                        <div class="form-group col-md-4 mb-3">
                            <label for="inputState">Major</label>
                            <select name="major" class="form-control @error('major') is-invalid @enderror">
                              <option >Choose...</option>
                              <option  @if (old('major') == "IT")@selected(true) @endif>IT</option>
                              <option  @if (old('major')=="Civil")@selected(true) @endif>Civil</option>
                              <option  @if (old('major')=="EC")@selected(true) @endif>EC</option>
                              <option  @if (old('major')=="EP")@selected(true) @endif>EP</option>
                              <option  @if (old('major')=="MP")@selected(true) @endif>MP</option>
                            </select>
                            <div class="text-danger">
                                @error('major')
                                    {{ $message }}
                                @enderror
                            </div>
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
