@extends('admin.master')
@section('title')
Gallary Update
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
                                <span><h3 class="card-title">Edit Gallary Form</h3></span>
                                <a href="{{ route('mission.index') }}" class="btn btn-primary ms-auto d-block">Manage Gallary</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('mission.update', $mission->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        @if($mission->image)
                                            <div class="mb-2">
                                                <img src="{{ asset($mission->image) }}" alt="Current Image" width="150">
                                            </div>
                                        @endif
                                        <label for="sizeName" class="col-md-3 form-label">Gallary Image</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control"  name="image">
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-primary" type="submit">Update Gallary</button>
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
