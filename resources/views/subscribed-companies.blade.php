<?php $page = 'subscribed-companies'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Subscribed Companies
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Subscriptions
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Joining</h6>
                <h4>12 <span>This Month</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Renewal</h6>
                <h4>3 <span>This Month</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Renewal</h6>
                <h4>0 <span>Next Month</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Total Companies</h6>
                <h4>312</h4>
            </div>
        </div>
    </div>

    <!-- Company List -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover custom-table datatable mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Client</th>
                            <th>Plan</th>
                            <th>Users</th>
                            <th>Plan Duration</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Amount</th>
                            <th>Plan Status</th>
                            <th>Update Plan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-19.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">Global Technologies</a>
                                </h2>
                            </td>
                            <td>Free Trial</td>
                            <td>30</td>
                            <td>6 Months</td>
                            <td>15 Feb 2019</td>
                            <td>14 Jul 2019</td>
                            <td>$200</td>
                            <td><span class="badge bg-inverse-success">Active</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_1" class="check">
                                    <label for="company_status_1" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-29.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">Delta Infotech</a>
                                </h2>
                            </td>
                            <td>Premium</td>
                            <td>50</td>
                            <td>1 Year</td>
                            <td>15 Feb 2019</td>
                            <td>14 Feb 2020</td>
                            <td>$200</td>
                            <td><span class="badge bg-inverse-danger">Expired</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_2" class="check" checked>
                                    <label for="company_status_2" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">Cream Inc</a>
                                </h2>
                            </td>
                            <td>Professional</td>
                            <td>10</td>
                            <td>1 Month</td>
                            <td>15 Feb 2019</td>
                            <td>14 Feb 2020</td>
                            <td>Free</td>
                            <td><span class="badge bg-inverse-success">Active</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_3" class="check" checked>
                                    <label for="company_status_3" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-06.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">Wellware Company</a>
                                </h2>
                            </td>
                            <td>Enterprise</td>
                            <td>10</td>
                            <td>1 Month</td>
                            <td>15 Feb 2019</td>
                            <td>14 Feb 2020</td>
                            <td>Free</td>
                            <td><span class="badge bg-inverse-success">Active</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_4" class="check" checked>
                                    <label for="company_status_4" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-14.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">Mustang Technologies</a>
                                </h2>
                            </td>
                            <td>Free Trial</td>
                            <td>10</td>
                            <td>1 Year</td>
                            <td>15 Feb 2019</td>
                            <td>14 Feb 2020</td>
                            <td>Free</td>
                            <td><span class="badge bg-inverse-success">Active</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_5" class="check" checked>
                                    <label for="company_status_5" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-18.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">International Software Inc</a>
                                </h2>
                            </td>
                            <td>Enterprise</td>
                            <td>10</td>
                            <td>1 Month</td>
                            <td>15 Feb 2019</td>
                            <td>14 Feb 2020</td>
                            <td>Free</td>
                            <td><span class="badge bg-inverse-success">Active</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_6" class="check" checked>
                                    <label for="company_status_6" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('client-profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-28.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('client-profile') }}">Mercury Software Inc</a>
                                </h2>
                            </td>
                            <td>Professional</td>
                            <td>10</td>
                            <td>1 Year</td>
                            <td>15 Feb 2019</td>
                            <td>14 Feb 2020</td>
                            <td>Free</td>
                            <td><span class="badge bg-inverse-success">Active</span></td>
                            <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#upgrade_plan">Change Plan</a></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="company_status_7" class="check" checked>
                                    <label for="company_status_7" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /Company List -->

    @component('components.model-popup')
    @endcomponent
@endsection
