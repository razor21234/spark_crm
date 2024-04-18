<?php $page = 'analytics'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Analytics
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
        Analytics
        @endslot
       
    @endcomponent


	<!-- Search Filter -->
    <div class="filter-filelds" id="filter_inputs">
        <div class="row filter-row">
            <div class="col-xl-2">  
                <div class="input-block mb-3 form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Activity</label>
                </div>
            </div>
            
            <div class="col-xl-2">  
                <div class="input-block mb-3 form-focus">
                    <input type="email" class="form-control floating">
                    <label class="focus-label">Owner</label>
                </div>
            </div>
           <div class="col-xl-2">  
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">Due Date</label>
            </div>
        </div>
           <div class="col-xl-2"> 
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">Created at</label>
            </div>
        </div>
            
            <div class="col-xl-2"> 
                <div class="input-block mb-3 form-focus select-focus">
                    <select class="select floating"> 
                        <option>--Select--</option>
                        <option>Meeting</option>
                        <option>Calls</option>
                        <option>Email</option>
                        <option>Task</option>
                    </select>
                    <label class="focus-label">Activity Type</label>
                </div>
            </div>
            <div class="col-xl-2">  
                 <a href="#" class="btn btn-success w-100"> Search </a>  
            </div>     
         </div>
    </div>
     <hr>

    <div class="row">
        <div class="col-xl-6">
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Recently Created Contacts
                        <a href="#"><i class="la la-link"></i></a>
                    </h3>
                    <div class="input-block mb-0">
                        <select class="select">
                            <option>Last 30 days</option>
                            <option>Last 3 months</option>
                            <option>Last 6 months</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-16.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Carol Thomas<span>UI /UX Designer</span></a>
                                        </h2>
                                    </td>
                                    <td>caroltho3@example.com</td>
                                    <td>+1 124547845</td>
                                    <td>
                                        12 Jan 2024,10:00 am
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-22.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Dawn Mercha<span>Technician</span></a>
                                        </h2>
                                    </td>
                                    <td>dawnmercha@example.com</td>
                                    <td>+1 478845447</td>
                                    <td>
                                        20 Jan 2024,12:20 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-23.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Rachel Hampton<span>Software Developer</span></a>
                                        </h2>
                                    </td>
                                    <td>rachel@example.com</td>
                                    <td>+1 215544845</td>
                                    <td>
                                        15 Feb 2024,08:30 am
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-24.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Jonelle Curtiss<span>Supervisor</span></a>
                                        </h2>
                                    </td>
                                    <td>jonelle@example.com</td>
                                    <td>+1 121145471</td>
                                    <td>
                                        24 Feb 2024,11:00 am
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-23.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Jonathan<span>Team Lead Dev</span></a>
                                        </h2>
                                    </td>
                                    <td>jonathan@example.com</td>
                                    <td>+1 321454789</td>
                                    <td>
                                        10 Mar 2024,02:10 pm
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between card-selectsview flex-wrap row-gap-3 mb-0">
                    <h3 class="card-title mb-0">Won Deals Stage</h3>
                    <div class="card-select">
                        <ul>
                            <li>
                                <select class="select">
                                    <option>Marketing Pipeline</option>
                                    <option>Pipeline</option>
                                </select>
                            </li>
                            <li>
                                <select class="select">
                                    <option>Last 30 days</option>
                                    <option>Last 15 days</option>
                                    <option>Last 7 days</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="won-chart"></div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Recently Created Deals
                        <a href="#"><i class="la la-link"></i></a>
                    </h3>
                    <div class="input-block mb-0">
                        <select class="select">
                            <option>Last 30 days</option>
                            <option>Last 3 months</option>
                            <option>Last 6 months</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>Deal Name</th>
                                    <th>Stage</th>
                                    <th>Deal Value</th>
                                    <th>Probability</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="{{ url('deals-details')}}">Collins</a>
                                    </td>
                                    <td>Conversation</td>
                                    <td>$04,51,000</td>
                                    <td>
                                        85 %
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-info">Open</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('deals-details')}}">Konopelski</a>
                                    </td>
                                    <td>Pipeline</td>
                                    <td>$03,12,500</td>
                                    <td>
                                        15 %
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-danger">Lost</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('deals-details')}}">Adams</a>
                                    </td>
                                    <td>Won</td>
                                    <td>$04,14,800</td>
                                    <td>
                                        95 %
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-success">Won</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('deals-details')}}">Schumm</a>
                                    </td>
                                    <td>Lost</td>
                                    <td>$9,14,400</td>
                                    <td>
                                        47 %
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-danger">Lost</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('deals-details')}}">Wisozk</a>
                                    </td>
                                    <td>Follow Up</td>
                                    <td>$11,14,400</td>
                                    <td>
                                        98 %
                                    </td>
                                    <td>
                                        <span class="badge badge-soft-danger">Lost</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between card-selectsview mb-0 flex-wrap row-gap-3">
                    <h3 class="card-title mb-0">Lost Leads Stage</h3>
                    <div class="card-select">
                        <ul>
                            <li>
                                <select class="select">
                                    <option>Marketing Pipeline</option>
                                    <option>Pipeline</option>
                                </select>
                            </li>
                            <li>
                                <select class="select">
                                    <option>Last 30 days</option>
                                    <option>Last 15 days</option>
                                    <option>Last 7 days</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="last-chart-2"></div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Leads By Stage
                    </h3>
                    <div class="d-flex flex-wrap row-gap-3">
                        <div class="input-block mb-0 me-3">
                            <select class="select">
                                <option>Sales Pipeline</option>
                                <option>Marketing Pipeline</option>
                            </select>
                        </div>
                        <div class="input-block mb-0">
                            <select class="select">
                                <option>Last 30 days</option>
                                <option>Last 3 months</option>
                                <option>Last 6 months</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div id="leads-chart"></div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Recently Added Companies
                        <a href="#"><i class="la la-link"></i></a>
                    </h3>
                    <div class="title-head d-flex">
                        <div class="input-block mb-0">
                            <select class="select">
                                <option>Last 30 days</option>
                                <option>Last 3 months</option>
                                <option>Last 6 months</option>
                            </select>
                        </div>
                        <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_company"><i class="la la-plus-circle"></i> Add Company</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-01.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">NovaWaveLLC</a>
                                        </h2>
                                    </td>
                                    <td>robertson@example.com</td>
                                    <td>
                                        +1 875455453
                                    </td>
                                    <td>
                                        12 Jan 2024,10:00 am
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-02.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">SilverHawk</a>
                                        </h2>
                                    </td>
                                    <td>vaughan12@example.com</td>
                                    <td>
                                        +1 546555455
                                    </td>
                                    <td>
                                        20 Jan 2024,12:20 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-03.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">SummitPeak</a>
                                        </h2>
                                    </td>
                                    <td>jessica13@example.com</td>
                                    <td>
                                        +1 454478787
                                    </td>
                                    <td>
                                        15 Feb 2024,08:30 am
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-04.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">RiverStone Ventur</a>
                                        </h2>
                                    </td>
                                    <td>caroltho3@example.com</td>
                                    <td>
                                        +1 124547845
                                    </td>
                                    <td>
                                        24 Feb 2024,11:00 am
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-05.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">CoastalStar Co.</a>
                                        </h2>
                                    </td>
                                    <td>rachel@example.com</td>
                                    <td>
                                        +1 215544845
                                    </td>
                                    <td>
                                        10 Mar 2024,02:10 pm
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Deals By Stage
                    </h3>
                    <div class="d-flex flex-wrap row-gap-3">
                        <div class="input-block mb-0 me-3">
                            <select class="select">
                                <option>Sales Pipeline</option>
                                <option>Marketing Pipeline</option>
                            </select>
                        </div>
                        <div class="input-block mb-0">
                            <select class="select">
                                <option>Last 30 days</option>
                                <option>Last 3 months</option>
                                <option>Last 6 months</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div id="deals-chart"></div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Activities
                        <a href="#"><i class="la la-link"></i></a>
                    </h3>
                    <div class="title-head d-flex">
                        <div class="input-block mb-0">
                            <select class="select">
                                <option>Last 30 days</option>
                                <option>Last 3 months</option>
                                <option>Last 6 months</option>
                            </select>
                        </div>
                        <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_activity"><i class="la la-plus-circle"></i> Add Activity</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="activities-list">
                        <ul>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="activity-name">
                                            <h5>We scheduled a meeting for next week</h5>
                                            <p>Due Date : 10 Feb 2024, 09:00 am </p>
                                            <span class="badge activity-badge badge-bg-violet"><i class="la la-user-tie"></i>Meeting</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="user-activity">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="Img">
                                            </span>
                                            <h6>Darlee Robertson</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-0">
                                            <select class="select">
                                                <option>Inprogress</option>
                                                <option>Completed</option>
                                                <option>Todo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="activity-name">
                                            <h5>Built landing pages</h5>
                                            <p>Due Date : 12 Mar 2024, 08:30 am  </p>
                                            <span class="badge activity-badge badge-bg-warning"><i class="la la-envelope"></i>Email</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="user-activity">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/avatar/avatar-16.jpg')}}" alt="Img">
                                            </span>
                                            <h6>Carol Thomas</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-0">
                                            <select class="select">
                                                <option>Inprogress</option>
                                                <option>Completed</option>
                                                <option>Todo</option>
                                            </select>
                                        </div>
                                    </div>	
                                </div>										
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="activity-name">
                                            <h5>Call John and discuss about project</h5>
                                            <p>Due Date : 20 Apr 2024, 03:15 pm  </p>
                                            <span class="badge activity-badge badge-bg-success"><i class="la la-phone"></i>Calls</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="user-activity">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/avatar/avatar-20.jpg')}}" alt="Img">
                                            </span>
                                            <h6>Sharon Roy</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-0">
                                            <select class="select">
                                                <option>Inprogress</option>
                                                <option>Completed</option>
                                                <option>Todo</option>
                                            </select>
                                        </div>
                                    </div>	
                                </div>										
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="activity-name">
                                            <h5>Store and manage contact data</h5>
                                            <p>Due Date : 13 May 2024, 10:30 am </p>
                                            <span class="badge activity-badge badge-bg-info"><i class="la la-tasks"></i>Task</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="user-activity">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/avatar/avatar-22.jpg')}}" alt="Img">
                                            </span>
                                            <h6>Dawn Mercha</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-0">
                                            <select class="select">
                                                <option>Inprogress</option>
                                                <option>Completed</option>
                                                <option>Todo</option>
                                            </select>
                                        </div>
                                    </div>	
                                </div>										
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="activity-name">
                                            <h5>Regarding latest updates in project</h5>
                                            <p>Due Date : 25 May 2024, 02:10 pm </p>
                                            <span class="badge activity-badge badge-bg-violet"><i class="la la-user-tie"></i>Meeting</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="user-activity">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/avatar/avatar-24.jpg')}}" alt="Img">
                                            </span>
                                            <h6>Jonelle Curtiss</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-0">
                                            <select class="select">
                                                <option>Inprogress</option>
                                                <option>Completed</option>
                                                <option>Todo</option>
                                            </select>
                                        </div>
                                    </div>	
                                </div>										
                            </li>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="activity-name">
                                            <h5>Discussed budget proposal with Edwin</h5>
                                            <p>Due Date : 05 June 2024, 05:40 pm </p>
                                            <span class="badge activity-badge badge-bg-success"><i class="la la-phone"></i>Calls</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="user-activity">
                                            <span>
                                                <img src="{{ URL::asset('assets/img/avatar/avatar-25.jpg')}}" alt="Img">
                                            </span>
                                            <h6>Jonathan</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-block mb-0">
                                            <select class="select">
                                                <option>Inprogress</option>
                                                <option>Completed</option>
                                                <option>Todo</option>
                                            </select>
                                        </div>
                                    </div>	
                                </div>										
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between card-selectsview flex-wrap row-gap-3 mb-0">
                    <h3 class="card-title mb-0">Lost Leads Stage</h3>
                    <div class="card-select">
                        <ul>
                            <li>
                                <select class="select">
                                    <option>Marketing Pipeline</option>
                                    <option>Pipeline</option>
                                </select>
                            </li>
                            <li>
                                <select class="select">
                                    <option>Last 30 days</option>
                                    <option>Last 15 days</option>
                                    <option>Last 7 days</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="last-chart"></div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                    <h3>
                        Recently Created Leads
                        <a href="#"><i class="la la-link"></i></a>
                    </h3>
                    <div class="input-block mb-0">
                        <select class="select">
                            <option>Last 30 days</option>
                            <option>Last 3 months</option>
                            <option>Last 6 months</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>Lead Name</th>
                                    <th>Company Name</th>
                                    <th>Phone</th>
                                    <th>Lead Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="{{ url('leads-details')}}">Collins</a>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-01.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">NovaWaveLLC <span class="d-block">Newyork, USA</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 875455453</td>
                                    <td>
                                        <span class="badge badge-soft-success">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('leads-details')}}">Konopelski</a>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-02.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">BlueSky Industries <span class="d-block">Winchester, KY</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 989757485</td>
                                    <td>
                                        <span class="badge badge-soft-success">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('leads-details')}}">Adams</a>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-03.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">SilverHawk <span class="d-block">Jamestown, NY</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 546555455</td>
                                    <td>
                                        <span class="badge badge-soft-info">Not Contacted</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('leads-details')}}">Schumm</a>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-04.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">SummitPeak <span class="d-block">Compton, RI</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 454478787</td>
                                    <td>
                                        <span class="badge badge-soft-warning">Contacted</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('leads-details')}}">Wisozk</a>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-05.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">RiverStone Ventur<span class="d-block">Dayton, OH</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 124547845</td>
                                    <td>
                                        <span class="badge badge-soft-success">Closed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ url('leads-details')}}">Heller</a>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar d-flex align-items-center">
                                            <a href="{{ url('company-details')}}" class="company-img"><img src="{{ URL::asset('assets/img/icons/company-icon-06.svg')}}" alt="User Image"></a>
                                            <a href="{{ url('company-details')}}" class="profile-split">Bright Bridge Grp<span class="d-block">Saybrook, IL</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 478845447</td>
                                    <td>
                                        <span class="badge badge-soft-success">Closed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between card-selectsview flex-wrap row-gap-3 mb-0">
                    <h3 class="card-title mb-0">Won Leads Stage</h3>
                    <div class="card-select">
                        <ul>
                            <li>
                                <select class="select">
                                    <option>Marketing Pipeline</option>
                                    <option>Pipeline</option>
                                </select>
                            </li>
                            <li>
                                <select class="select">
                                    <option>Last 30 days</option>
                                    <option>Last 15 days</option>
                                    <option>Last 7 days</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="leads-won-chart"></div>
                </div>
            </div>
        </div>
    </div>
@component('components.model-popup')
@endcomponent
@endsection

