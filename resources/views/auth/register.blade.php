@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h1>Register</h1>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="password" name="paassword" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
