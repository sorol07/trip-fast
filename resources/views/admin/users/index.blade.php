@extends('admin.master')

@section('title')
    User Index
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
                        <h1 class="page-title">Manage Users</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Index</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex align-items-center">
                                <h3 class="card-title mb-0">All Users</h3>
                                <a href="{{ route('users.create') }}" class="btn btn-primary ms-auto">
                                    <i class="fa fa-plus"></i> Create User
                                </a>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success text-center">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Created At</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                
                                                <td>{{ $user->created_at->format('d M, Y') }}</td>
                                                <td class="text-center">
                                                    @if($user->status == 1)
                                                        <a href="{{ route('users.show', $user->id) }}" 
                                                        class="btn btn-success btn-sm me-2">
                                                            <i class="fa fa-eye"></i> Active
                                                        </a>
                                                    @else
                                                        <a href="{{ route('users.show', $user->id) }}" 
                                                        class="btn btn-secondary btn-sm me-2">
                                                            <i class="fa fa-eye-slash"></i> Inactive
                                                        </a>
                                                    @endif

                                                    <a href="{{ route('users.edit', $user->id) }}" 
                                                       class="btn btn-primary btn-sm me-2">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>

                                                    <form action="{{ route('users.destroy', $user->id) }}" 
                                                          method="POST" 
                                                          class="d-inline"
                                                          onsubmit="return confirm('Are you sure to delete this user?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center text-muted">No users found.</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Laravel pagination -->
                                <div class="mt-3">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
