@extends('layouts.app')
@section('content')
    <div class="body">
        <!-- Start Site Header -->
       @include('inc._siteheader')
        <!-- End Site Header -->
        <!-- Start Hero Slider -->
        @include('inc._slider')
        <!-- End Hero Slider -->
        <!-- Start Notice Bar -->
        <div class="notice-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title">
                        <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span>
                        <span class="title-note">Next</span> <strong>Upcoming Event</strong>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
                        <h5><a href="single-event.html">Sountheast Asia Meet</a></h5>
                        <span class="meta-data">13th July, 2016</span> </div>
                    <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="June 1, 2018">
                        <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
                        <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
                        <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
                        <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
                    </div>
                    <div class="col-md-2 col-sm-6 hidden-xs"> <a href="{{ url('/events') }}" class="btn btn-primary btn-lg btn-block">All Events</a> </div>
                </div>
            </div>
        </div>
        <!-- End Notice Bar -->
        <!-- Start Content -->
         @include('inc._content')
        <!-- Start Featured Gallery -->
         @include('inc._gallery')
        <!-- End Featured Gallery -->
        <!-- Start Footer -->
         @include('inc._footer')
        <!-- End Footer -->
        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
@endsection