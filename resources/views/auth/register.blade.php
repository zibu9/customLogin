@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('register.store') }}">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" value="{{ old('name') }}">Name</span>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" value="{{ old('name') }}">Email</span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" value="{{ old('name') }}">Password</span>
                            <input type="password" name="paassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </form>
                </div>
                <div class="card-footer">
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
