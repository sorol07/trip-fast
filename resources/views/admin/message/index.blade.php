@extends('admin.master')

@section('title')
    Message Index
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
                        <h1 class="page-title">Message</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Message</li>
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
                                <span><h3 class="card-title">All Message</h3></span>

                                <!-- <a href="{{ route('mission.create') }}" class="btn btn-primary ms-auto d-block">Create Mission</a> -->
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('success')}}</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Name</th>
                                            <th class="wd-15p border-bottom-0">Email</th>
                                            <th class="wd-15p border-bottom-0">Subject</th>
                                            <th class="wd-10p border-bottom-0">Message</th>
                                            <th class="wd-10p border-bottom-0">Status</th>
                                            <th class="wd-10p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $message->name }} </td>
                                                <td>{{ $message->email }} </td>
                                                <td>{{ $message->subject }} </td>
                                                <td>{{ $message->message }} </td>
                                                <td>{{ $message->status == 1 ? 'Pending' : 'Sent' }}</td>
                                                <td>
                                                                                            
                                                    @if($message->status == 1)
                                                        {{-- Pending --}}
                                                        <a href="{{ route('message.show', $message->id) }}" 
                                                            class="btn btn-warning btn-sm me-2 float-start">
                                                            <i class="fa fa-clock-o"></i>
                                                        </a>
                                                    @else
                                                        {{-- Sent --}}
                                                        <a href="{{ route('message.show', $message->id) }}" 
                                                        class="btn btn-success btn-sm me-2 float-start">
                                                            <i class="fa fa-paper-plane"></i> {{-- Sent Icon --}}
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
