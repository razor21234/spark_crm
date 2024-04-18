<?php $page = 'activities'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Activities</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Activities</li>
                </ul>
            </div>
            <div class="col-md-8 float-end ms-auto">
                <div class="d-flex title-head">
                    <div class="view-icons">
                        <a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
                        <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i
                                class="las la-expand-arrows-alt"></i></a>
                        <a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i
                                class="las la-filter"></i></a>
                    </div>
                    <div class="form-sort">
                        <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal"
                            data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
                    </div>
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_activity"><i
                            class="la la-plus-circle"></i>Add Activity</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

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
    <!-- /Search Filter -->
    <div class="filter-section activity-filter-head">
        <div class="all-activity-head">
            <h5>All Activity</h5>
            <ul class="activity-list">
                <li>
                    <a href="javascript:void(0);"><i class="la la-phone"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="la la-envelope"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="la la-tasks"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="la la-user-tie"></i></a>
                </li>
            </ul>
        </div>
        <ul>
            <!-- <li>
                <div class="view-icons">
                    <a href="{{ url('company') }}" class="list-view btn btn-link active"><i class="las la-list"></i></a>
                    <a href="{{ url('company-grid') }}" class="grid-view btn btn-link"><i class="las la-th"></i></a>
                </div>
            </li> -->
            <li>
                <div class="form-sort">
                    <i class="las la-sort-alpha-up-alt"></i>
                    <select class="select">
                        <option>Sort By Alphabet</option>
                        <option>Ascending</option>
                        <option>Descending</option>
                        <option>Recently Viewed</option>
                        <option>Recently Added</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="search-set">
                    <div class="search-input">
                        <a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
                        <div class="dataTables_filter">
                            <label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable contact-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Activity Type</th>
                            <th>Due Date</th>
                            <th>Owner</th>
                            <th>Created At</th>
                            <th class="no-sort text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                We scheduled a meeting for next week
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-violet"><i
                                        class="la la-user-tie"></i>Meeting</span>
                            </td>
                            <td>10 Feb 2024, 09:00 am</td>
                            <td>Hendry</td>
                            <td>
                                08 Feb 2024, 10:00 am
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Had conversation with Fred regarding task
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-success"><i
                                        class="la la-phone"></i>Calls</span>
                            </td>
                            <td>24 Feb 2024, 12:20 pm</td>
                            <td>Monty Beer</td>
                            <td>
                                21 Feb 2024, 09:00 am
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Analysing latest time estimation for new project
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-warning"><i
                                        class="la la-envelope"></i>Email</span>
                            </td>
                            <td>05 Mar 2024, 10:00 am</td>
                            <td>Bradtke</td>
                            <td>
                                03 Mar 2024, 11:00 am
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Store and manage contact data
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-info"><i class="la la-tasks"></i>Task</span>
                            </td>
                            <td>17 Mar 2024, 02:00 pm</td>
                            <td>Swaniawski</td>
                            <td>
                                15 Mar 2024, 12:00 pm
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Call John and discuss about project
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-success"><i
                                        class="la la-phone"></i>Calls</span>
                            </td>
                            <td>20 Apr 2024, 03:15 pm</td>
                            <td>Itzel</td>
                            <td>
                                18 Apr 2024, 01:15 pm
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Will have a meeting before project start
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-violet"><i
                                        class="la la-user-tie"></i>Meeting</span>
                            </td>
                            <td>08 Apr 2024, 11:00 am</td>
                            <td>Sally</td>
                            <td>
                                05 Apr 2024, 03:20 pm
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Built landing pages
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-warning"><i
                                        class="la la-envelope"></i>Email</span>
                            </td>
                            <td>12 May 2024, 08:30 am</td>
                            <td>Danny</td>
                            <td>
                                10 May 2024, 11:30 am
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Regarding latest updates in project
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-violet"><i
                                        class="la la-user-tie"></i>Meeting</span>
                            </td>
                            <td>26 May 2024, 04:10 pm</td>
                            <td>Lynch</td>
                            <td>
                                23 May 2024, 05:00 pm
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Attach final proposal for upcoming project
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-info"><i class="la la-tasks"></i>Task</span>
                            </td>
                            <td>13 June 2024, 10:30 am</td>
                            <td>Merwin</td>
                            <td>
                                11 June 2024, 04:00 pm
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Discussed budget proposal with Edwin
                            </td>
                            <td>
                                <span class="badge activity-badge badge-bg-success"><i
                                        class="la la-phone"></i>Calls</span>
                            </td>
                            <td>28 June 2024, 05:40 pm</td>
                            <td>Andrew</td>
                            <td>
                                26 June 2024, 08:50 am
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_activity"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_activity"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{ url('contact-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
