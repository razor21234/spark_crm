<?php $page = 'leads'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Leads</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Leads</li>
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
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_leads"><i
                            class="la la-plus-circle"></i> Add Leads</a>
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
                    <label class="focus-label">Lead Name</label>
                </div>
            </div>

            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                    <input type="email" class="form-control floating">
                    <label class="focus-label">Email</label>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus focused">
                    <input type="text" class="form-control  date-range bookingrange">
                    <label class="focus-label">From - To Date</label>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                    <select class="select floating">
                        <option>--Select--</option>
                        <option>Closed</option>
                        <option>Not Contacted</option>
                        <option>Contacted</option>
                        <option>Lost</option>
                    </select>
                    <label class="focus-label">Lead Status</label>
                </div>
            </div>

            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                    <select class="select floating">
                        <option>--Select--</option>
                        <option>NovaWaveLLC</option>
                        <option>SilverHawk</option>
                        <option>SummitPeak</option>
                        <option>HarborView</option>
                        <option>Redwood Inc</option>
                    </select>
                    <label class="focus-label">Company Name</label>
                </div>
            </div>
            <div class="col-xl-2">
                <a href="#" class="btn btn-success w-100"> Search </a>
            </div>
        </div>
    </div>
    <hr>
    <!-- /Search Filter -->
    <div class="filter-section">
        <ul>
            <li>
                <div class="view-icons">
                    <a href="{{ url('leads') }}" class="list-view btn btn-link active"><i class="las la-list"></i></a>
                    <a href="{{ url('leads-kanban') }}" class="grid-view btn btn-link"><i class="las la-th"></i></a>
                </div>
            </li>
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
                <div class="form-sorts dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i
                            class="las la-filter me-2"></i>Filter</a>
                    <div class="filter-dropdown-menu">
                        <div class="filter-set-view">
                            <div class="filter-set-head">
                                <h4>Filter</h4>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="filter-set-content">
                                    <div class="filter-set-content-head">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">Rating<i
                                                class="las la-angle-right"></i></a>
                                    </div>
                                    <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne"
                                        data-bs-parent="#accordionExample">
                                        <ul>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox" checked>
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <span>5.0</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>4.0</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>3.0</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>2.0</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star filled"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>1.0</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-set-content">
                                    <div class="filter-set-content-head">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">Owner<i
                                                class="las la-angle-right"></i></a>
                                    </div>
                                    <div class="filter-set-contents accordion-collapse collapse" id="collapseTwo"
                                        data-bs-parent="#accordionExample">
                                        <ul>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox" checked>
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Hendry</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Guillory</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Jami</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Theresa</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Espinosa</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-set-content">
                                    <div class="filter-set-content-head">
                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">Tags<i
                                                class="las la-angle-right"></i></a>
                                    </div>
                                    <div class="filter-set-contents accordion-collapse collapse" id="collapseThree"
                                        data-bs-parent="#accordionExample">
                                        <ul>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox" checked>
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Promotion</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Rated</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Rejected</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Collab</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-checks">
                                                    <label class="checkboxs">
                                                        <input type="checkbox">
                                                        <span class="checkmarks"></span>
                                                    </label>
                                                </div>
                                                <div class="collapse-inside-text">
                                                    <h5>Calls</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="filter-reset-btns">
                                <a href="#" class="btn btn-light">Reset</a>
                                <a href="#" class="btn btn-primary">Filter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="search-set">
                    <div class="search-input">
                        <a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
                        <div class="dataTables_filter">
                            <label> <input type="search" class="form-control form-control-sm"
                                    placeholder="Search"></label>
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
                            <th class="no-sort"></th>
                            <th>Lead Name</th>
                            <th>Company Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Lead Status</th>
                            <th>Created Date</th>
                            <th>Lead Owner</th>
                            <th class="no-sort text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Collins</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-01.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">NovaWaveLLC</a>
                                </h2>
                            </td>
                            <td>+1 875455453</td>
                            <td>Robertson@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>10 Feb 2024, 09:00 am</td>
                            <td>Hendry</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Konopelski</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-02.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">BlueSky Industries</a>
                                </h2>
                            </td>
                            <td>+1 989757485</td>
                            <td>sharon@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>24 Feb 2024, 12:20 pm</td>
                            <td>Guillory</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Adams</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-03.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">SilverHawk</a>
                                </h2>
                            </td>
                            <td>+1 546555455</td>
                            <td>Vaughan12@example.com</td>
                            <td><span class="badge badge-soft-info">Not Contacted</span></td>
                            <td>5 Mar 2024, 10:00 am</td>
                            <td>Jami</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Schumm</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-04.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">SummitPeak</a>
                                </h2>
                            </td>
                            <td>+1 454478787</td>
                            <td>Jessica13@example.com</td>
                            <td><span class="badge badge-soft-warning">Contacted</span></td>
                            <td>17 Mar 2024, 02:00 pm</td>
                            <td>Theresa</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Wisozk</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-05.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">RiverStone Ventur</a>
                                </h2>
                            </td>
                            <td>+1 124547845</td>
                            <td>CarolTho3@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>8 Apr 2024, 11:00 am</td>
                            <td>Espinosa</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Heller</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-06.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">Bright Bridge Grp</a>
                                </h2>
                            </td>
                            <td>+1 478845447</td>
                            <td>Dawnmercha@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>20 Apr 2024, 03:15 pm</td>
                            <td>Martin</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Gutkowski</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-07.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">CoastalStar Co.</a>
                                </h2>
                            </td>
                            <td>+1 215544845</td>
                            <td>Rachel@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>12 May 2024, 08:30 am</td>
                            <td>Newell</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star filled"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Walter</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-08.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">HarborView</a>
                                </h2>
                            </td>
                            <td>+1 121145471</td>
                            <td>Jonelle@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>26 May 2024, 04:10 pm</td>
                            <td>Janet</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Hansen</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-09.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">Golden Gate Ltd</a>
                                </h2>
                            </td>
                            <td>+1 321454789</td>
                            <td>Jonathan@example.com</td>
                            <td><span class="badge badge-soft-success">Closed</span></td>
                            <td>13 June 2024, 10:30 am</td>
                            <td>Craig</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
                                                class="fa-regular fa-eye"></i> Preview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="set-star star-select">
                                    <i class="fa fa-star"></i>
                                </div>
                            </td>
                            <td>
                                <h2>
                                    <a href="#" class="profile-split">Leuschke</a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar d-flex align-items-center">
                                    <a href="{{ url('company-details') }}" class="company-img"><img
                                            src="{{ URL::asset('/assets/img/icons/company-icon-10.svg') }}"
                                            alt="User Image"></a>
                                    <a href="{{ url('company-details') }}" class="profile-split">Redwood Inc</a>
                                </h2>
                            </td>
                            <td>+1 278907145</td>
                            <td>brook@example.com</td>
                            <td><span class="badge badge-soft-danger">Lost</span></td>
                            <td>28 June 2024, 05:40 pm</td>
                            <td>Daniel</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('leads-details') }}"><i
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
