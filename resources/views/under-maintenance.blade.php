<?php $page = 'under-maintenance'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="under-maintenance text-center">
        <div class="container">
            <div class="maintenance-page">
                <div class="maintenance-bg">
                    <img src="{{ URL::asset('assets/img/bg/maintenance-bg-01.png')}}" class="small-bg-one" alt="Img">
                    <img src="{{ URL::asset('assets/img/bg/maintenance-bg-02.png')}}" class="small-bg-two" alt="Img">
                    <img src="{{ URL::asset('assets/img/bg/maintenance-bg-03.png')}}" class="small-bg-three" alt="Img">
                    <img src="{{ URL::asset('assets/img/bg/maintenance-bg-04.png')}}" class="small-bg-four" alt="Img">
                    <img src="{{ URL::asset('assets/img/bg/maintenance-bg-05.png')}}" class="small-bg-five" alt="Img">
                </div>
                <div class="maintenance-img text-center">
                    <img src="{{ URL::asset('assets/img/maintenance-img.png')}}" class="img-fluid" alt="Img">
                </div>
                <div class="maintenance-content">
                    <h3>Under Maintenance</h3>
                    <p>The server is in a maintenance mode, please come back later or
                        <a href="#">click here</a> to create ticket if it’s urgent
                    </p>
                    <a href="{{url('admin-dashboard')}}" class="btn btn-custom btn-primary">Back to Dashboard<i
                            class="la la-arrow-alt-circle-right ms-2"></i></a>
                </div>

            </div>
        </div>
    </div>
@endsection
