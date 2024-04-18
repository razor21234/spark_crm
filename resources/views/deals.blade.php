<?php $page = 'deals'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Deals
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Deals
        @endslot
    @endcomponent

    <!-- Search Filter -->
    <div class="filter-filelds" id="filter_inputs">
        <div class="row filter-row">
            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Deal Name</label>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus focused">
                    <input type="text" class="form-control  date-range bookingrange">
                    <label class="focus-label">From - To Date</label>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">Expected Closed Date</label>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                    <select class="select floating">
                        <option>--Select--</option>
                        <option>Conversation</option>
                        <option>Pipeline</option>
                        <option>Won</option>
                        <option>Lost</option>
                        <option>Follow Up</option>
                    </select>
                    <label class="focus-label">Stage</label>
                </div>
            </div>

            <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                    <select class="select floating">
                        <option>--Select--</option>
                        <option>Germany</option>
                        <option>USA</option>
                        <option>Canada</option>
                        <option>India</option>
                        <option>China</option>
                    </select>
                    <label class="focus-label">Location</label>
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
                    <a href="{{ url('deals') }}" class="list-view btn btn-link active"><i class="las la-list"></i></a>
                    <a href="{{ url('deals-kanban') }}" class="grid-view btn btn-link"><i class="las la-th"></i></a>
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
                            <th>Deal Name</th>
                            <th>Stage</th>
                            <th>Deal Value</th>
                            <th>Tags</th>
                            <th>Expected Closed Date</th>
                            <th>Owner</th>
                            <th>Probability</th>
                            <th>Status</th>
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Collins</a>
                                </h2>
                            </td>
                            <td>Conversation</td>
                            <td>$04,51,000</td>
                            <td><span class="badge badge-soft-info">Promotion</span></td>
                            <td>10 Feb 2024</td>
                            <td>Hendry</td>
                            <td>85%</td>
                            <td>
                                <span class="badge badge-soft-info">Open</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                            <td>Pipeline</td>
                            <td>$03,12,500</td>
                            <td><span class="badge badge-soft-warning">Rated</span></td>
                            <td>24 Feb 2024</td>
                            <td>Guillory</td>
                            <td>15%</td>
                            <td>
                                <span class="badge badge-soft-danger">Lost</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Adams</a>
                                </h2>
                            </td>
                            <td>Won</td>
                            <td>$04,14,400</td>
                            <td><span class="badge badge-soft-info">Promotion</span></td>
                            <td>5 Mar 2024</td>
                            <td>Jami</td>
                            <td>95%</td>
                            <td>
                                <span class="badge badge-soft-success">Won</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Schumm</a>
                                </h2>
                            </td>
                            <td>Lost</td>
                            <td>$09,14,400</td>
                            <td><span class="badge badge-soft-warning">Rated</span></td>
                            <td>17 Mar 2024</td>
                            <td>Theresa</td>
                            <td>47%</td>
                            <td>
                                <span class="badge badge-soft-success">Won</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Wisozk</a>
                                </h2>
                            </td>
                            <td>Follow Up</td>
                            <td>$11,14,400</td>
                            <td><span class="badge badge-soft-danger">Rejected</span></td>
                            <td>08 Apr 2024</td>
                            <td>Espinosa</td>
                            <td>98%</td>
                            <td>
                                <span class="badge badge-soft-success">Won</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Heller</a>
                                </h2>
                            </td>
                            <td>Pipeline</td>
                            <td>$16,11,400</td>
                            <td><span class="badge badge-soft-warning">Rated</span></td>
                            <td>20 Apr 2024</td>
                            <td>Martin</td>
                            <td>14%</td>
                            <td>
                                <span class="badge badge-soft-success">Won</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Gutkowski</a>
                                </h2>
                            </td>
                            <td>Pipeline</td>
                            <td>$78,11,800</td>
                            <td><span class="badge badge-soft-danger">Rejected</span></td>
                            <td>12 May 2024</td>
                            <td>Newell</td>
                            <td>78%</td>
                            <td>
                                <span class="badge badge-soft-info">Open</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Walter</a>
                                </h2>
                            </td>
                            <td>Pipeline</td>
                            <td>$09,05,947</td>
                            <td><span class="badge badge-soft-danger">Rejected</span></td>
                            <td>26 May 2024</td>
                            <td>Janet</td>
                            <td>47%</td>
                            <td>
                                <span class="badge badge-soft-danger">Lost</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Hansen</a>
                                </h2>
                            </td>
                            <td>Schedule</td>
                            <td>$04,51,000</td>
                            <td>
                                <span class="badge badge-soft-danger me-2">Collab</span>
                                <span class="badge badge-soft-purple">Calls</span>
                            </td>
                            <td>13 June 2024</td>
                            <td>Craig</td>
                            <td>25%</td>
                            <td>
                                <span class="badge badge-soft-success">Won</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
                                    <a href="{{ url('deals-details') }}" class="profile-split">Leuschke</a>
                                </h2>
                            </td>
                            <td>Conversation</td>
                            <td>$72,14,078</td>
                            <td>
                                <span class="badge badge-soft-purple">Calls</span>
                            </td>
                            <td>28 June 2024</td>
                            <td>Daniel</td>
                            <td>69%</td>
                            <td>
                                <span class="badge badge-soft-success">Won</span>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_deals"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_deals"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="{{ url('deals-details') }}"><i
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
