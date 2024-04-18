<?php $page = 'contact-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Contact</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contact</li>
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
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_contact"><i
                            class="la la-plus-circle"></i> Add Contact</a>
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
                 <label class="focus-label">Contact Name</label>
             </div>
        </div>
        <div class="col-xl-2">  
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Email</label>
            </div>
       </div>
       <div class="col-xl-2">  
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Phone Number</label>
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
                <a href="{{ url('contact-list')}}" class="list-view btn btn-link"><i class="las la-list"></i></a>
                <a href="{{ url('contact-grid')}}" class="grid-view btn btn-link active"><i class="las la-th"></i></a>
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
                <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="las la-filter me-2"></i>Filter</a>
                <div class="filter-dropdown-menu">
                    <div class="filter-set-view">
                        <div class="filter-set-head">
                            <h4>Filter</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="filter-set-content">
                                <div class="filter-set-content-head">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rating<i class="las la-angle-right"></i></a>
                                </div>
                                <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
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
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Owner<i class="las la-angle-right"></i></a>
                                </div>
                                <div class="filter-set-contents accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
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
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags<i class="las la-angle-right"></i></a>
                                </div>
                                <div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
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
                        <label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="row mt-4">
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Darlee Robertson</a>
                        <span>Facility Manager</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>darleeo@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 12445-47878</span>
                    <span><i class="la la-map-marker"></i>United States</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-danger">Collab</span>
                    <span class="badge badge-soft-purple">Calls</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>5.0
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-20.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Sharon Roy</a>
                        <span>Installer</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>sharon@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 19026-83921</span>
                    <span><i class="la la-map-marker"></i>Germany</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-warning">Rated</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>4.2
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Vaughan</a>
                        <span>Senior  Manager</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>vaughan@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 17240-61041</span>
                    <span><i class="la la-map-marker"></i>Canada</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-info">Promotion</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>3.5
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-1.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Jessica</a>
                        <span>Test Engineer</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>jessica@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 16027-49102</span>
                    <span><i class="la la-map-marker"></i>India</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-purple">Calls</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>4.7
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-16.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Carol Thomas</a>
                        <span>UI /UX Designer</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>carol@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 18454-01578</span>
                    <span><i class="la la-map-marker"></i>China</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-warning">Rated</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>4.5
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-22.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Dawn Mercha</a>
                        <span>Technician</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>dawn@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 13816-03649</span>
                    <span><i class="la la-map-marker"></i>Japan</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-danger">Rejected</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>3.0
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-23.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Rachel Hampton</a>
                        <span>Software Developer</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>rachel@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 18914-51047</span>
                    <span><i class="la la-map-marker"></i>Indonesia</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-danger">Collab</span>
                    <span class="badge badge-soft-purple">Calls</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>4.6
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6">
        <div class="contact-grid">
            <div class="grid-head">
                <div class="users-profile">
                    <a href="#" class="avatar">
                        <img src="{{ URL::asset('assets/img/avatar/avatar-24.jpg')}}" alt="Img">
                    </a>
                    <h5 class="name-user">
                        <a href="{{ url('profile')}}">Jonelle Curtiss</a>
                        <span>Supervisor</span>
                    </h5>
                </div>
                <div class="dropdown">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        <a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
                    </div>
                </div>
            </div>
            <div class="grid-body">
                <div class="address-info">
                    <span><i class="la la-envelope-open"></i>jonelle@example.com</span>
                    <span><i class="la la-phone-volume"></i>+1 18314-01527</span>
                    <span><i class="la la-map-marker"></i>Cuba</span>
                </div>
                <div class="grid-badges">
                    <span class="badge badge-soft-info">Promotion</span>
                </div>
            </div>
            <div class="grid-footer d-flex justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="la la-facebook "></i></a>
                    </li>
                </ul>
                <div class="set-star">
                    <i class="fa fa-star filled me-2"></i>3.9
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="load-more-btn text-center">
            <a href="#" class="btn btn-primary">Load More Contacts<i class="spinner-border"></i></a>
        </div>
    </div>
</div>



    @component('components.model-popup')
    @endcomponent
@endsection
