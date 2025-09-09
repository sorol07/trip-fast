@extends('admin.master')
@section('title')
    Edit User
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
                        <h1 class="page-title">Edit User</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex align-items-center">
                                <h3 class="card-title mb-0">Edit User Form</h3>
                                <a href="{{ route('users.index') }}" class="btn btn-primary ms-auto">
                                    Manage Users
                                </a>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success text-center">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form class="form-horizontal" action="{{ route('users.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Full Name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" class="form-control" 
                                                   value="{{ old('name', $user->name) }}" required>
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Email Address</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" class="form-control" 
                                                   value="{{ old('email', $user->email) }}" required>
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-md-3 form-label">Confirm Password</label>
                                        <div class="col-md-9">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter password">
                                        </div>
                                    </div>

                                    <!-- <div class="row mb-4">
                                        <label class="col-md-3 form-label">Role</label>
                                        <div class="col-md-9">
                                            <select name="role" class="form-control" required>
                                                <option value="">-- Select Role --</option>
                                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <button class="btn btn-primary" type="submit">Update User</button>
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
