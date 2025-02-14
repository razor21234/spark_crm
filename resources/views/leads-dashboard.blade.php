<?php $page = 'leads-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header mb-3">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Leads Dashboard</h3>
            </div>
            <div class="col-md-8 float-end ms-auto">
                <div class="d-flex title-head">
                    <div class="view-icons">
                        <a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
                        <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i
                                class="las la-expand-arrows-alt"></i></a>
                    </div>
                    <div class="form-sort">
                        <a href="javascript:void(0);" class="list-view btn btn-link"><i
                                class="las la-file-export"></i>Export</a>
                    </div>
                    <div class="daterange-picker d-flex">
                        <div class="form-sort">
                            <i class="las la-calendar"></i>
                            <input type="text" class="form-control  date-range bookingrange">
                        </div>
                        <div class="form-sort">
                            <i class="las la-cubes"></i>
                            <select class="select">
                                <option>Leads Dashboard</option>
                                <option>Deals Dashboard</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="statistic-header">
                        <h4>Lost Deals Stage</h4>
                        <div class="dropdown statistic-dropdown">
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Marketing Pipeline
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Marketing Pipeline
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Sales Pipeline
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Email
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Chats
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Operational
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Last 3 months
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 3 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 6 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 12 months
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="last-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body ">
                    <div class="statistic-header">
                        <h4>Won Deals Stage</h4>
                        <div class="dropdown statistic-dropdown">
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Marketing Pipeline
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Marketing Pipeline
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Sales Pipeline
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Email
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Chats
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Operational
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Last 3 months
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 3 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 6 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 12 months
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="won-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="statistic-header">
                        <h4>Deals by Year</h4>
                        <div class="dropdown statistic-dropdown">
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Last 3 months
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 3 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 6 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 12 months
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="leadchart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="statistic-header">
                        <h4>Leads By Stage</h4>
                        <div class="dropdown statistic-dropdown">
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Marketing Pipeline
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Marketing Pipeline
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Sales Pipeline
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Email
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Chats
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Operational
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Last 3 months
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 3 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 6 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 12 months
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div id="leadpiechart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="card analytics-card w-100">
                <div class="card-body">
                    <div class="statistic-header">
                        <h4>Recently Created Leads</h4>
                        <div class="dropdown statistic-dropdown">
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            Last 3 months
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 3 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 6 months
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                Last 12 months
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table custom-table table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Deal Name</th>
                                    <th>Company Name</th>
                                    <th>Deal Value</th>
                                    <th>Lead Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Collins</td>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('company-details') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/company/company-01.svg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('company-details') }}"
                                                class="profile-split d-flex flex-column">NovaWave
                                                LLC<span>Newyork, USA</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 989757485</td>
                                    <td><span class="badge bg-inverse-danger">Closed</span></td>
                                </tr>
                                <tr>
                                    <td>BlueSky Industries</td>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('company-details') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/company/company-02.svg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('company-details') }}"
                                                class="profile-split d-flex flex-column">BlueSky
                                                Industries<span>Winchester, KY</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 989757485</td>
                                    <td><span class="badge bg-inverse-info">Not Contacted</span></td>
                                </tr>
                                <tr>
                                    <td>Adams</td>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('company-details') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/company/company-03.svg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('company-details') }}"
                                                class="profile-split d-flex flex-column">SilverHawk<span>Jametown,
                                                    NY</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 546555455</td>
                                    <td><span class="badge bg-inverse-danger">Closed</span></td>
                                </tr>
                                <tr>
                                    <td>Schumm</td>
                                    <td>
                                        <h2 class="table-avatar d-flex">
                                            <a href="{{ url('company-details') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/company/company-04.svg') }}"
                                                    alt="User Image"></a>
                                            <a href="{{ url('company-details') }}"
                                                class="profile-split d-flex flex-column">SummitPeak<span>Compton,
                                                    RI</span></a>
                                        </h2>
                                    </td>
                                    <td>+1 454478787</td>
                                    <td><span class="badge bg-inverse-warning">Contacted</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
