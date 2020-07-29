{{-- inherits base markup --}}
{{-- got my page working im so excited --}}
@extends('layout.base')
{{-- add in the basic styling : check the contents of these stylesheets later --}}
@section("custom_css")
<link rel="stylesheet" href="{{asset('backend/assets/css/singleCustomer.css')}}">
@stop


{{-- yield body content --}}

@section('content')
<div class="content">

    <div class="container-fluid">
        {{-- start of page title --}}
        <div class="row page-title">
            <div class="col-md-12">
                <h4 class="mb-1 mt-0 float-left">Profile</h4>
                <a href="{{ route('assistants.index') }}" class="btn btn-primary float-right">
                    Go Back
                </a>
                <a href="{{route('assistants.edit', $assistant->_id) }}" class="mr-3 btn btn-success float-right" >
                    Edit Assistant
                </a>
            </div>
        </div>
         {{-- end of page title --}}

         {{-- start of content section --}}
         <div class="row contentrow">
             {{--start of person profile--}}
             <div class="col-lg-3 col-md-4 col-sm-5" id="h1IdTop">
                 <div class="card">
                     <div class="card-body text-center text-muted">
                         <img src="../../backend/assets/images/users/avatar-7.jpg" alt="Customer 1" class="img-fluid rounded-circle">
                         <h4>{{$assistant->name}}</h4>
                         <h5 class="cust-email">Assistant</h5>
                     </div>

                 </div>
             </div>
             {{--end of person profile--}}

                <div class="col-lg-9 col-md-8 col-sm-7">
                    {{-- start of card --}}
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-activity-tab" data-toggle="pill"
                                        href="#pills-activity" role="tab" aria-controls="pills-activity"
                                        aria-selected="true">
                                        Basic Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-messages-tab" data-toggle="pill"
                                        href="#pills-messages" role="tab" aria-controls="pills-messages"
                                        aria-selected="false">
                                        Transactions
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="pills-projects-tab" data-toggle="pill"
                                        href="#pills-projects" role="tab" aria-controls="pills-projects"
                                        aria-selected="false">
                                        Messages
                                    </a>
                                </li> --}}
                            </ul>
                            {{-- customer basic information --}}
                            <h6 class="customer-acct pt-3">Account Information</h6>
                            <div class="row profile-fields p-2">
                                <div class="col-lg-4 col-md-6 ">
                                    <ul class="customer-info text-capitalize">
                                        <li class="customer-field">Email</li>
                                        <li class="customer-field">Tel</li>
                                        <li class="customer-field">Status</li>
                                    </ul>
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <ul class="customer-info">
                                        <li class="pt-3">{{$assistant->email}}</li>
                                        <li class="pt-3">{{$assistant->phone_number}}</li>
                                        <li class="pt-3"><span class="badge badge-success">Active</span></li>
                                    </ul>
                                </div>
                            </div>

                            {{--customer basic info end--}}
                        </div>
                    </div>
                    <!-- end card -->
                </div>

            {{--End of person profile--}}
         </div>



        {{--end of column--}}
    </div>
</div>

@endsection
