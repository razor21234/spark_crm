<?php $page = 'pipeline'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Pipeline</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin-dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pipeline</li>
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
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_pipeline"><i
                            class="la la-plus-circle"></i> Add Pipeline</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    <div class="filter-filelds" id="filter_inputs">
        <div class="row filter-row custom-filter-row">
            <div class="custom-col">
                <div class="input-block mb-3 form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Pipeline Name</label>
                </div>
            </div>

            <div class="custom-col">
                <div class="input-block mb-3 form-focus">
                    <input type="email" class="form-control floating">
                    <label class="focus-label">Deal Value</label>
                </div>
            </div>
            <div class="custom-col">
                <div class="input-block mb-3 form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">Created Date</label>
                </div>
            </div>

            <div class="custom-col">
                <div class="input-block mb-3 form-focus select-focus">
                    <select class="select floating">
                        <option>--Select--</option>
                        <option>Win</option>
                        <option>In Pipeline</option>
                        <option>Conversation</option>
                        <option>Folllow Up</option>
                        <option>Lost</option>
                    </select>
                    <label class="focus-label">Stages</label>
                </div>
            </div>
            <div class="custom-col">
                <a href="#" class="btn btn-success w-100"> Search </a>
            </div>
        </div>
    </div>
    <hr>
    <!-- /Search Filter -->
    <div class="filter-section">
        <ul>
            <!-- <li>
            <div class="view-icons">
             <a href="company" class="list-view btn btn-link active"><i class="las la-list"></i></a>
             <a href="company-grid" class="grid-view btn btn-link"><i class="las la-th"></i></a>
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
                            <th>Pipeline Name</th>
                            <th>Total Deal Value</th>
                            <th>No of Deals</th>
                            <th>Stages</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th class="no-sort text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Sales
                            </td>
                            <td>
                                $04,51,000
                            </td>
                            <td>315</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Win</span>
                                </div>

                            </td>
                            <td>10 Feb 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Marketing
                            </td>
                            <td>
                                $03,12,500
                            </td>
                            <td>447</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Win</span>
                                </div>

                            </td>
                            <td>24 Feb 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Calls
                            </td>
                            <td>
                                $04,14,400
                            </td>
                            <td>654</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-violet" role="progressbar">
                                        </div>
                                    </div>
                                    <span>In Pipeline</span>
                                </div>

                            </td>
                            <td>05 Mar 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                $09,14,400
                            </td>
                            <td>545</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Win</span>
                                </div>

                            </td>
                            <td>17 Mar 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Chats
                            </td>
                            <td>
                                $11,14,400
                            </td>
                            <td>787</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Win</span>
                                </div>

                            </td>
                            <td>08 Apr 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Operational
                            </td>
                            <td>
                                $16,11,400
                            </td>
                            <td>142</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Conversation</span>
                                </div>

                            </td>
                            <td>20 Apr 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Collabrative
                            </td>
                            <td>
                                $78,11,800
                            </td>
                            <td>315</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Folllow Up</span>
                                </div>

                            </td>
                            <td>12 May 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Differentiate
                            </td>
                            <td>
                                $09,05,947
                            </td>
                            <td>478</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-pink" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Schedule Service</span>
                                </div>

                            </td>
                            <td>26 May 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-danger"> Inactive </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Interact
                            </td>
                            <td>
                                $04,51,000
                            </td>
                            <td>664</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Win</span>
                                </div>

                            </td>
                            <td>13 June 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Identify
                            </td>
                            <td>
                                $72,14,078
                            </td>
                            <td>128</td>
                            <td>
                                <div class="pipeline-progress d-flex align-items-center">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar">
                                        </div>
                                    </div>
                                    <span>Lost</span>
                                </div>

                            </td>
                            <td>28 June 2024</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_pipeline"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        <a class="dropdown-item" href="{{url('contact-details')}}"><i
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
