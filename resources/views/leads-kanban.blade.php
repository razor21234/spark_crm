<?php $page = 'leads-kanban'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Leads</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin-dashboard')}}">Dashboard</a></li>
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
                    <a href="{{url('leads')}}" class="list-view btn btn-link"><i class="las la-list"></i></a>
                    <a href="{{url('leads-kanban')}}" class="grid-view btn btn-link active"><i class="las la-th"></i></a>
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
            <div class="kanban-wrapper leads-kanban-wrapper">
                <div class="kanban-list-items">
                    <div class="kanban-list-head">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="kanban-title-head dot-purple">
                                <h5>Not Contacted</h5>
                                <span>13 Leads - $19,38,092</span>
                            </div>
                            <div class="kanban-action-btns d-flex align-items-center">
                                <a href="#" class="plus-btn"><i class="la la-plus"></i></a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="kanban-drag-wrap">
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-warning"></span>
                                    <div class="kanban-card-title">
                                        <span>SM</span>
                                        <h6>Schumm</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $03,50,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            darleeo@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Newyork, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-09.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-success"></span>
                                    <div class="kanban-card-title">
                                        <span>CS</span>
                                        <h6>Collins</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $02,10,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            sheron@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Exeter, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-01.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-danger"></span>
                                    <div class="kanban-card-title">
                                        <span>SM</span>
                                        <h6>Schumm</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $04,22,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            vau@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Phoenix, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-02.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-purple"></span>
                                    <div class="kanban-card-title">
                                        <span>SM</span>
                                        <h6>Schumm</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $03,50,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            darleeo@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Newyork, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-09.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="kanban-list-items">
                    <div class="kanban-list-head">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="kanban-title-head dot-warning">
                                <h5>Contacted</h5>
                                <span>20 Leads - $12,48,924</span>
                            </div>
                            <div class="kanban-action-btns d-flex align-items-center">
                                <a href="#" class="plus-btn"><i class="la la-plus"></i></a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="kanban-drag-wrap">
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-purple"></span>
                                    <div class="kanban-card-title">
                                        <span>AS</span>
                                        <h6>Adams</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $02,45,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            jessica13@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 89351-90346
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Chester, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-03.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-warning"></span>
                                    <div class="kanban-card-title">
                                        <span>WK</span>
                                        <h6>Wizosk</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $01,17,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            caroltho3@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 78982-09163
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Charlotte, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-04.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-success"></span>
                                    <div class="kanban-card-title">
                                        <span>HR</span>
                                        <h6>Heller</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $02,12,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            dawnmercha@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 27691-89246
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Bristol, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-05.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-danger"></span>
                                    <div class="kanban-card-title">
                                        <span>SM</span>
                                        <h6>Schumm</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $03,50,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            darleeo@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Newyork, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-01.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="kanban-list-items">
                    <div class="kanban-list-head">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="kanban-title-head dot-success">
                                <h5>Closed</h5>
                                <span>18 Leads - $16,39,093</span>
                            </div>
                            <div class="kanban-action-btns d-flex align-items-center">
                                <a href="#" class="plus-btn"><i class="la la-plus"></i></a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="kanban-drag-wrap">
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-success"></span>
                                    <div class="kanban-card-title">
                                        <span>GI</span>
                                        <h6>Gutkowsi</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $01,84,043
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            rachel@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 17839-93617
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Baltimore, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-06.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-danger"></span>
                                    <div class="kanban-card-title">
                                        <span>WR</span>
                                        <h6>Walter</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $09,35,189
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            jonelle@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 16739-47193
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Coventry, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-07.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-purple"></span>
                                    <div class="kanban-card-title">
                                        <span>HN</span>
                                        <h6>Hansen</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $04,27,940
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            jonathan@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 18390-37153
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Seattle
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-08.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-warning"></span>
                                    <div class="kanban-card-title">
                                        <span>SM</span>
                                        <h6>Schumm</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $03,50,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            darleeo@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Newyork, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-03.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="kanban-list-items">
                    <div class="kanban-list-head">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="kanban-title-head dot-danger">
                                <h5>Lost</h5>
                                <span>15 Leads - $14,89,543</span>
                            </div>
                            <div class="kanban-action-btns d-flex align-items-center">
                                <a href="#" class="plus-btn"><i class="la la-plus"></i></a>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="kanban-drag-wrap">
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-danger"></span>
                                    <div class="kanban-card-title">
                                        <span>SE</span>
                                        <h6>Steve</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $04,17,593
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            sidney@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 11739-38135
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            London, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-09.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-success"></span>
                                    <div class="kanban-card-title">
                                        <span>LE</span>
                                        <h6>Leuschke</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $08,81,389
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            brook@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 19302-91043
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Detroit, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-10.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-warning"></span>
                                    <div class="kanban-card-title">
                                        <span>AY</span>
                                        <h6>Anthony</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $09,27,193
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            mickey@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 17280-92016
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Manchester, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-01.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="kanban-card">
                                <div class="kanban-card-head">
                                    <span class="bar-design bg-purple"></span>
                                    <div class="kanban-card-title">
                                        <span>CS</span>
                                        <h6>Collins</h6>
                                    </div>
                                </div>
                                <div class="kanban-card-body">
                                    <ul>
                                        <li>
                                            <i class="la la-dollar-sign"></i>
                                            $03,50,000
                                        </li>
                                        <li>
                                            <i class="la la-envelope"></i>
                                            darleeo@example.com
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            +1 12445-47878
                                        </li>
                                        <li>
                                            <i class="la la-map-marker-alt"></i>
                                            Newyork, United States
                                        </li>
                                    </ul>
                                </div>
                                <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                    <span><img src="{{ URL::asset('assets/img/icons/company-icon-10.svg')}}" alt="Img"></span>
                                    <ul class="icons-social">
                                        <li><a href="#"><i class="la la-phone-volume"></i></a></li>
                                        <li><a href="#"><i class="lab la-facebook-messenger"></i></a></li>
                                        <li><a href="#"><i class="la la-swatchbook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
