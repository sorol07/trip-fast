@extends('admin.master')

@section('title')
    Guide Index
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
                        <h1 class="page-title">Size</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Guide</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- End Row -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">All Guide</h3></span>

                                <a href="{{ route('guides.create') }}" class="btn btn-primary ms-auto d-block">Create Guide</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Name</th>
                                            <th class="wd-15p border-bottom-0">Guide Image</th>
                                            <th class="wd-10p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($guides as $guide)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $guide->name }}</td>
                                                <td>
                                                    <img src="{{ asset($guide->image) }}" alt="Mission Image" width="100">
                                                </td>
                                               
                                                <td>{{ $guide->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                                <td class="justify-content-center">
                                                    <a href="{{ route('guides.edit', $guide->id) }}" class="btn btn-primary btn-sm me-2 float-start">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    @if($guide->status == 1)
                                                        <a href="{{ route('guides.show', $guide->id) }}" class="btn btn-warning btn-sm me-2 float-start">
                                                            <i class="fa fa-eye-slash"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ route('guides.show', $guide->id) }}" class="btn btn-success btn-sm me-2 float-start">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    @endif
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
                <!-- End Row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection
