<?php $page = 'ui-counter'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Counter
        @endslot
    @endcomponent
    <div class="row">

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Clients</h5>
                    <h6 class="counter">3,000</h6>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Sales</h5>
                    <h6 class="counter">10,000</h6>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Projects</h5>
                    <h6 class="counter">15,000</h6>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Count Down</h5>
                </div>
                <div class="card-body">
                    <h6>Time Count from 3</h6>
                    <span id="timer-countdown">00 Day 00 : 02 : 38</span>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Count Up</h5>
                </div>
                <div class="card-body">
                    <h6>Time Counting From 0</h6>
                    <span id="timer-countup">00 Days 00 : 00 : 22</span>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Count Inbetween</h5>
                </div>
                <div class="card-body">
                    <h6>Time counting from 30 to 20</h6>
                    <span id="timer-countinbetween">00 Days 00 : 00 : 20</span>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Count Callback</h5>
                </div>
                <div class="card-body">
                    <h6>Count from 10 to 0 and calls timer end callback</h6>
                    <span id="timer-countercallback" style="text-decoration: line-through; opacity: 0.5;">00 Days 00 : 00 :
                        00</span>
                </div>
            </div>
        </div>
        <!-- /Counter -->

        <!-- Counter -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Custom Output</h5>
                </div>
                <div class="card-body">
                    <h6>Changed output pattern</h6>
                    <span id="timer-outputpattern">02 Days 23 Hour 59 Min 38 Sec..</span>
                </div>
            </div>
        </div>
        <!-- /Counter -->

    </div>
@endsection
