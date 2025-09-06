@extends('admin.master')
@section('title')
Guide Edit
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
                        <h1 class="page-title">Form Layouts</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Guide Form</h3></span>
                                <a href="{{ route('guides.index') }}" class="btn btn-primary ms-auto d-block">Manage Guide</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('guides.update', $guide->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                   @method('PUT')
                                    <div class="row mb-4">
                                        <label for="sizeName" class="col-md-3 form-label">Guide Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="name" value="{{$guide->name}}" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="sizeName" class="col-md-3 form-label">Guide Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control"  name="image">
                                        </div>
                                        @if($guide->image)
                                            <div class="mb-2">
                                                <img src="{{ asset($guide->image) }}" alt="Current Image" width="150">
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <button class="btn btn-primary" type="submit">Update Guide</button>
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
