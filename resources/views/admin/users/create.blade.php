@extends('admin.master')
@section('title')
    Admin Create
@endsection

@section('body')

    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Create New User</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add User Form</h3></span>
                                <a href="{{ route('users.index') }}" class="btn btn-primary ms-auto d-block">Manage Users</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{ session('success') }}</p>

                                <form class="form-horizontal" action="{{ route('users.store') }}" method="POST">
                                    @csrf

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Full Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Email Address</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Confirm Password</label>
                                        <div class="col-md-9">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter password" required>
                                        </div>
                                    </div>

                                    <!-- <div class="row mb-4">
                                        <label class="col-md-3 form-label">Role</label>
                                        <div class="col-md-9">
                                            <select name="role" class="form-control" required>
                                                <option value="">-- Select Role --</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <button class="btn btn-primary" type="submit">Create User</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->

            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->

@endsection
