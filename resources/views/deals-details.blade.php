<?php $page = 'deals-details'; ?>
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


<hr>

<div class="row">

    <!-- Contact User -->
    <div class="col-md-12">
        <div class="contact-head">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <ul class="contact-breadcrumb">
                        <li><a href="{{ url('deals')}}"><i class="las la-arrow-left"></i> Deals</a></li>
                        <li>Tremblay and Rath</li>
                        <li class="before-none">
                            <div class="select-pipeline">
                                <span class="pipe-icon"><i class="las la-code-branch"></i></span>
                                <select class="select">
                                    <option>Marketing Pipeline</option>
                                    <option>Sales Pipeline</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 text-sm-end">
                    <div class="contact-pagination">
                        <p>1 of 40</p>
                        <ul>
                            <li>
                                <a href="{{ url('deals-details')}}"><i class="las la-arrow-left"></i></a>
                            </li>
                            <li>
                                <a href="{{ url('deals-details')}}"><i class="las la-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-wrap">
            <div class="contact-profile">
                <div class="avatar company-avatar">									
                    <span class="text-icon">HT</span>
                </div>
                <div class="name-user">
                    <h4>Tremblay and Rath <span class="star-icon"><i class="fa-solid fa-star"></i></span></h4>
                    <p><i class="las la-building"></i> Google Inc</p>
                    <p class="mb-0"><i class="las la-map-marker"></i> 22, Ave Street, Newyork, USA</p>
                </div>
            </div>
            <div class="contacts-action">
                <span class="badge badge-light"><i class="las la-lock"></i>Private</span>
                <div class="dropdown action-drops">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><i class="las la-thumbs-up me-2"></i>Won<i class="las la-angle-down ms-2"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0);"><span><i class="las la-thumbs-up me-1"></i>Won</span></a>
                        <a class="dropdown-item" href="javascript:void(0);"><span><i class="las la-thumbs-down me-1"></i>Loss</span></a>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <!-- /Contact User -->

    <!-- Contact Sidebar -->
    <div class="col-xl-3">
        <div class="card contact-sidebar">
            <h5>Deal Information</h5>
            <ul class="other-info">
                <li><span class="other-title">Date Created</span><span>10 Jan 2024, 10:00 am</span></li>
                <li><span class="other-title">Probability - Win</span><span>80%</span></li>
                <li><span class="other-title">Deal Value</span><span>$25,11,145</span></li>
                <li><span class="other-title">Due Date</span><span>20 Jan 2024, 10:00 am</span></li>
                <li><span class="other-title">Follow Up</span><span>20 Jan 2024</span></li>
                <li><span class="other-title">Source</span><span>Google</span></li>
            </ul>	
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h5>Deal Owner</h5>
            </div>
            <ul class="deals-info">
                <li>
                    <span>
                        <img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="Image">
                    </span>
                    <div>
                        <p>Vaughan</p>
                    </div>
                </li>
                <li>
                    <span>
                        <img src="{{ URL::asset('assets/img/avatar/avatar-1.jpg')}}" alt="Image">
                    </span>
                    <div>
                        <p>Jessica</p>
                    </div>
                </li>
            </ul>								
            <h5>Tags</h5>
            <ul class="tag-info">
                <li>
                    <a href="javascript:void(0);" class="bg-success-light">Collab</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="bg-warning-light">Rated</a>
                </li>
            </ul>								
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h5>Priority</h5>
            </div>
            <ul class="priority-info">
                <li>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fa-solid fa-circle me-1 text-danger circle"></i>High</span><i class="las la-angle-down ms-1"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0);">
                                <span><i class="fa-solid fa-circle me-1 text-danger circle"></i>High</span>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <span><i class="fa-solid fa-circle me-1 text-success circle"></i>Low</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h5>Projects</h5>
            </div>	
            <ul class="projects-info">
                <li>
                    <a href="javascript:void(0);" class="badge badge-light">Devops Design</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="badge badge-light">Margrate Design</a>
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h5>Contacts</h5>
                <a href="javascript:void(0);" class="com-add" data-bs-toggle="modal" data-bs-target="#add_contact"><i class="las la-plus-circle me-1"></i>Add New</a>
            </div>
            <ul class="deals-info">
                <li>
                    <span>
                        <img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="Image">
                    </span>
                    <div>
                        <p>Vaughan</p>
                    </div>
                </li>
                <li>
                    <span>
                        <img src="{{ URL::asset('assets/img/avatar/avatar-1.jpg')}}" alt="Image">
                    </span>
                    <div>
                        <p>Jessica</p>
                    </div>
                </li>
            </ul>								
            <ul class="other-info">
                <li><span class="other-title">Last Modified</span><span>10 Jan 2024, 10:00 am</span></li>
                <li>
                    <span class="other-title">Modified By</span>
                    <span><img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" class="avatar-xs rounded-circle" alt="img"> Darlee Robertson</span>
                </li>
            </ul>						
        </div>
    </div>
    <!-- /Contact Sidebar -->

    <!-- Contact Details -->
    <div class="col-xl-9">
        <div class="contact-tab-wrap">
            <h4>Deal Pipeline Status</h4>
            <div class="pipeline-list">
                <ul>
                    <li><a href="javascript:void(0);" class="bg-pending">Qualify To Buy</a></li>
                    <li><a href="javascript:void(0);" class="bg-info">Contact Made</a></li>
                    <li><a href="javascript:void(0);" class="bg-warning">Presentation</a></li>
                    <li><a href="javascript:void(0);" class="bg-pink">Proposal Made</a></li>
                    <li><a href="javascript:void(0);">Appointment</a></li>
                </ul>
            </div>
            <ul class="contact-nav nav">
                <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#activities" class="active"><i class="las la-user-clock"></i>Activities</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#notes"><i class="las la-file"></i>Notes</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#calls"><i class="las la-phone-volume"></i>Calls</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#files"><i class="las la-file"></i>Files</a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#email"><i class="las la-envelope"></i>Email</a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="contact-tab-view">
            <div  class="tab-content pt-0">

                <!-- Activities -->
                <div  class="tab-pane active show" id="activities">
                    <div class="view-header">
                        <h4>Activities</h4>
                        <ul>
                            <li>
                                <div class="form-sort">
                                    <i class="las la-sort-amount-up-alt"></i>
                                    <select class="select">
                                        <option>Sort By Date</option>
                                        <option>Ascending</option>
                                        <option>Descending</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-activity">
                        <div class="badge-day"><i class="fa-regular fa-calendar-check"></i>15 Feb 2024</div>
                        <ul>
                            <li class="activity-wrap">
                                <span class="activity-icon bg-info">
                                    <i class="las la-comment-alt"></i>
                                </span>
                                <div class="activity-info">
                                    <h6>You sent 1 Message to the contact.</h6>
                                    <p>10:25 pm</p>
                                </div>
                            </li>
                            <li class="activity-wrap">
                                <span class="activity-icon bg-success">
                                    <i class="las la-phone"></i>
                                </span>
                                <div class="activity-info">
                                    <h6>Denwar responded to your appointment schedule question by call at 09:30pm.</h6>
                                    <p>09:25 pm</p>
                                </div>
                            </li>
                            <li class="activity-wrap">
                                <span class="activity-icon bg-warning">
                                    <i class="las la-file-alt"></i>
                                </span>
                                <div class="activity-info">
                                    <h6>Notes added by Antony</h6>
                                    <p>Please accept my apologies for the inconvenience caused. It would be much appreciated if it's possible to reschedule to 6:00 PM, or any other day that week.</p>
                                    <p>10.00 pm</p>
                                </div>
                            </li>
                        </ul>
                        <div class="badge-day"><i class="fa-regular fa-calendar-check"></i>15 Feb 2024</div>
                        <ul>												
                            <li class="activity-wrap">
                                <span class="activity-icon bg-pending">
                                    <i class="las la-user-tie"></i>
                                </span>
                                <div class="activity-info">
                                    <h6>Meeting With <span class="avatar-xs"><img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="img"></span> Abraham</h6>
                                    <p>Schedueled  on 05:00 pm</p>
                                </div>
                            </li>											
                            <li class="activity-wrap">
                                <span class="activity-icon bg-success">
                                    <i class="las la-phone"></i>
                                </span>
                                <div class="activity-info">
                                    <h6>Drain responded to your appointment schedule question.</h6>
                                    <p>09:25 pm</p>
                                </div>
                            </li>
                        </ul>
                        <div class="badge-day"><i class="fa-regular fa-calendar-check"></i>Upcoming Activity</div>
                        <ul>												
                            <li class="activity-wrap">
                                <span class="activity-icon bg-pending">
                                    <i class="las la-user-tie"></i>
                                </span>
                                <div class="activity-info">
                                    <h6>Product Meeting</h6>
                                    <p>A product team meeting is a gathering of the cross-functional product team — ideally including team members from product, engineering, marketing, and customer support.</p>
                                    <p>25 Jul 2023, 05:00 pm</p>
                                    <div class="upcoming-info">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p>Reminder</p>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="las la-clock me-1"></i>Reminder<i class="las la-angle-down ms-1"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">Remainder</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">1 hr</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">10 hr</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>Task Priority</p>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-circle me-1 text-danger circle"></i>High<i class="las la-angle-down ms-1"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-circle me-1 text-danger circle"></i>High</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-circle me-1 text-success circle"></i>Low</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>Assigned to</p>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="img" class="me-1 avatar-xs">John<i class="las la-angle-down ms-1"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);"><img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="img" class="me-1 avatar-xs">John</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="img" class="me-1 avatar-xs">Peter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>	
                        </ul>
                    </div>
                </div>
                <!-- /Activities -->

                <!-- Notes -->
                <div  class="tab-pane fade" id="notes">
                    <div class="view-header">
                        <h4>Notes</h4>
                        <ul>
                            <li>
                                <div class="form-sort">
                                    <i class="las la-sort-amount-up-alt"></i>
                                    <select class="select">
                                        <option>Sort By Date</option>
                                        <option>Ascending</option>
                                        <option>Descending</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_notes" class="com-add"><i class="las la-plus-circle me-1"></i>Add New</a>
                            </li>
                        </ul>
                    </div>
                    <div class="notes-activity">
                        <div class="calls-box">
                            <div class="caller-info">
                                <div class="calls-user">
                                    <img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="img">
                                    <div>
                                        <h6>Darlee Robertson</h6>
                                        <p>15 Sep 2023, 12:10 pm</p>
                                    </div>
                                </div>
                                <div class="calls-action">
                                    <div class="dropdown action-drop">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="las la-edit me-1"></i>Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="las la-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                            <h5>Notes added by Antony</h5>							
                            <p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project. </p>
                            <ul>
                                <li>
                                    <div class="note-download">
                                        <div class="note-info">
                                            <span class="note-icon bg-success">
                                                <i class="las la-file-excel"></i>
                                            </span>
                                            <div>
                                                <h6>Project Specs.xls</h6>
                                                <p>365 KB</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"><i class="las la-download"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="note-download">
                                        <div class="note-info">
                                            <span class="note-icon">
                                                <img src="{{ URL::asset('assets/img/media/media-35.jpg')}}" alt="img">
                                            </span>
                                            <div>
                                                <h6>090224.jpg</h6>
                                                <p>365 KB</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"><i class="las la-download"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="notes-editor">
                                <div class="note-edit-wrap">
                                    <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                    <div class="text-end note-btns">
                                        <a href="javascript:void(0);" class="btn btn-lighter add-cancel">Cancel</a>
                                        <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="javascript:void(0);" class="add-comment"><i class="las la-plus-circle me-1"></i>Add Comment</a>
                                </div>
                            </div>
                        </div>	
                        <div class="calls-box">
                            <div class="caller-info">
                                <div class="calls-user">
                                    <img src="{{ URL::asset('assets/img/avatar/avatar-20.jpg')}}" alt="img">
                                    <div>
                                        <h6>Sharon Roy</h6>
                                        <p>18 Sep 2023, 09:52 am</p>
                                    </div>
                                </div>
                                <div class="calls-action">
                                    <div class="dropdown action-drop">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="las la-edit me-1"></i>Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="las la-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                            <h5>Notes added by Antony</h5>								
                            <p>A project plan typically contains a list of the essential elements of a project, such as stakeholders, scope, timelines, estimated cost and communication methods. The project manager typically lists the information based on the assignment.</p>
                            <ul>
                                <li>
                                    <div class="note-download">
                                        <div class="note-info">
                                            <span class="note-icon bg-success">
                                                <i class="las la-file-excel"></i>
                                            </span>
                                            <div>
                                                <h6>Andrewpass.txt</h6>
                                                <p>365 KB</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"><i class="las la-download"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="reply-box">
                                <p>The best way to get a project done faster is to start sooner. A goal without a timeline is just a dream.The goal you set must be challenging. At the same time, it should be realistic and attainable, not impossible to reach.</p>
                                <p>Commented by <span class="text-primary">Aeron</span> on 15 Sep 2023, 11:15 pm</p>
                            </div>
                            <div class="notes-editor">
                                <div class="note-edit-wrap">
                                    <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                    <div class="text-end note-btns">
                                        <a href="javascript:void(0);" class="btn btn-lighter add-cancel">Cancel</a>
                                        <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="javascript:void(0);" class="add-comment"><i class="las la-plus-circle me-1"></i>Add Comment</a>
                                </div>
                            </div>
                        </div>	
                        <div class="calls-box">
                            <div class="caller-info">
                                <div class="calls-user">
                                    <img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="img">
                                    <div>
                                        <h6>Vaughan</h6>
                                        <p>20 Sep 2023, 10:26 pm</p>
                                    </div>
                                </div>
                                <div class="calls-action">
                                    <div class="dropdown action-drop">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="las la-edit me-1"></i>Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="las la-trash me-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>									
                            <p>Projects play a crucial role in the success of organizations, and their importance cannot be overstated. Whether it's launching a new product, improving an existing</p>
                            <div class="notes-editor">
                                <div class="note-edit-wrap">
                                    <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                    <div class="text-end note-btns">
                                        <a href="javascript:void(0);" class="btn btn-lighter add-cancel">Cancel</a>
                                        <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="javascript:void(0);" class="add-comment"><i class="las la-plus-circle me-1"></i>Add Comment</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
                <!-- /Notes -->

                <!-- Calls -->
                <div  class="tab-pane fade" id="calls">
                    <div class="view-header">
                        <h4>Calls</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_call" class="com-add"><i class="las la-plus-circle me-1"></i>Add New</a>
                            </li>
                        </ul>
                    </div>
                    <div class="calls-activity">
                        <div class="calls-box">
                            <div class="caller-info">
                                <div class="calls-user">
                                    <img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="img">
                                    <p><span>Darlee Robertson</span> logged a call on 23 Jul 2023, 10:00 pm</p>
                                </div>
                                <div class="calls-action">
                                    <div class="dropdown call-drop">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Busy<i class="las la-angle-down ms-1"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Busy</a>
                                            <a class="dropdown-item" href="javascript:void(0);">No Answer</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                            <p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project. </p>
                        </div>	
                        <div class="calls-box">
                            <div class="caller-info">
                                <div class="calls-user">
                                    <img src="{{ URL::asset('assets/img/avatar/avatar-20.jpg')}}" alt="img">
                                    <p><span>Sharon Roy</span> logged a call on 28 Jul 2023, 09:00 pm</p>
                                </div>
                                <div class="calls-action">
                                    <div class="dropdown call-drop">
                                        <a href="#" class="dropdown-toggle bg-light-pending" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="las la-angle-down ms-1"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Busy</a>
                                            <a class="dropdown-item" href="javascript:void(0);">No Answer</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                            <p>A project plan typically contains a list of the essential elements of a project, such as stakeholders, scope, timelines, estimated cost and communication methods. The project manager typically lists the information based on the assignment.</p>
                        </div>	
                        <div class="calls-box">
                            <div class="caller-info">
                                <div class="calls-user">
                                    <img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="img">
                                    <p><span>Vaughan</span> logged a call on 30 Jul 2023, 08:00 pm</p>
                                </div>
                                <div class="calls-action">
                                    <div class="dropdown call-drop">
                                        <a href="#" class="dropdown-toggle bg-light-pending" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="las la-angle-down ms-1"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Busy</a>
                                            <a class="dropdown-item" href="javascript:void(0);">No Answer</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                            <p>Projects play a crucial role in the success of organizations, and their importance cannot be overstated. Whether it's launching a new product, improving an existing</p>
                        </div>	
                    </div>
                </div>
                <!-- /Calls -->

                <!-- Files -->
                <div  class="tab-pane fade" id="files">
                    <div class="view-header">
                        <h4>Files</h4>
                    </div>
                    <div class="files-activity">
                        <div class="files-wrap">	
                            <div class="row align-items-center">										
                                <div class="col-md-8">											
                                    <div class="file-info">												
                                        <h4>Manage Documents</h4>
                                        <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                    </div>
                                </div>										
                                <div class="col-md-4 text-md-end">	
                                    <ul class="file-action">
                                        <li>
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new_file">Create Document</a>
                                        </li>
                                    </ul>
                                </div>		
                            </div>
                        </div>
                        <div class="files-wrap">	
                            <div class="row align-items-center">										
                                <div class="col-md-8">											
                                    <div class="file-info">												
                                        <h4>Collier-Turner Proposal</h4>
                                        <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                        <div class="file-user">
                                            <img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="img">
                                            <div>
                                                <p><span>Owner</span> Vaughan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>										
                                <div class="col-md-4 text-md-end">	
                                    <ul class="file-action">
                                        <li>															
                                            <span class="badge badge-soft-pink">Proposal</span>
                                        </li>
                                        <li>												
                                            <span class="badge badge-soft-grey priority-badge"><i class="fa-solid fa-circle"></i>Low</span>
                                        </li>
                                        <li>															
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-edit me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-trash me-1"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-download me-1"></i>Download</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>		
                            </div>
                        </div>
                        <div class="files-wrap">	
                            <div class="row align-items-center">										
                                <div class="col-md-8">											
                                    <div class="file-info">												
                                        <h4>Collier-Turner Proposal</h4>
                                        <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                        <div class="file-user">
                                            <img src="{{ URL::asset('assets/img/avatar/avatar-1.jpg')}}" alt="img">
                                            <div>
                                                <p><span>Owner</span> Jessica</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>										
                                <div class="col-md-4 text-md-end">	
                                    <ul class="file-action">
                                        <li>															
                                            <span class="badge badge-soft-info">Quote</span>
                                        </li>
                                        <li>												
                                            <span class="badge badge-soft-success priority-badge"><i class="fa-solid fa-circle"></i>Sent</span>
                                        </li>
                                        <li>															
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-edit me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-trash me-1"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-download me-1"></i>Download</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>		
                            </div>
                        </div>											
                        <div class="files-wrap">	
                            <div class="row align-items-center">										
                                <div class="col-md-8">											
                                    <div class="file-info">												
                                        <h4>Collier-Turner Proposal</h4>
                                        <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                        <div class="file-user">
                                            <img src="{{ URL::asset('assets/img/avatar/avatar-22.jpg')}}" alt="img">
                                            <div>
                                                <p><span>Owner</span> Vaughan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>										
                                <div class="col-md-4 text-md-end">	
                                    <ul class="file-action">
                                        <li>															
                                            <span class="badge badge-soft-pink">Proposal</span>
                                        </li>
                                        <li>												
                                            <span class="badge badge-soft-grey priority-badge"><i class="fa-solid fa-circle"></i>Low</span>
                                        </li>
                                        <li>															
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="feather-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-edit me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-trash me-1"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-download me-1"></i>Download</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>		
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Files -->

                <!-- Email -->
                <div  class="tab-pane fade" id="email">
                    <div class="view-header">
                        <h4>Email</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="com-add create-mail"  data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-dark" data-bs-original-title="There are no email accounts configured, Please configured your email account in order to Send/ Create EMails"><i class="las la-plus-circle me-1"></i>Create Email</a>
                            </li>
                        </ul>
                    </div>
                    <div class="files-activity">
                        <div class="files-wrap">	
                            <div class="row align-items-center">										
                                <div class="col-md-8">											
                                    <div class="file-info">												
                                        <h4>Manage Emails</h4>
                                        <p>You can send and reply to emails directly via this section.</p>
                                    </div>
                                </div>										
                                <div class="col-md-4 text-md-end">	
                                    <ul class="file-action">
                                        <li>
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_email" >Connect Account</a>
                                        </li>
                                    </ul>
                                </div>		
                            </div>
                        </div>
                        <div class="files-wrap">
                            <div class="email-header">
                                <div class="row">
                                    <div class="col top-action-left">
                                        <div class="float-start d-none d-sm-block">
                                            <input type="text" placeholder="Search Messages" class="form-control search-message">
                                        </div>
                                    </div>
                                    <div class="col-auto top-action-right">
                                        <div class="text-end">
                                            <button type="button" title="Refresh" data-bs-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa-solid fa-rotate"></i></button>
                                            <div class="btn-group">
                                                <a class="btn btn-white"><i class="fa-solid fa-angle-left"></i></a>
                                                <a class="btn btn-white"><i class="fa-solid fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-content">
                                <div class="table-responsive">
                                    <table class="table table-inbox table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="6" class="ps-2">
                                                    <input type="checkbox" class="checkbox-all">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="unread clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa fa-star starred "></i></span></td>
                                                <td class="name">John Doe</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td><i class="fa-solid fa-paperclip"></i></td>
                                                <td class="mail-date">13:14</td>
                                            </tr>
                                            <tr class="unread clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">Envato Account</td>
                                                <td class="subject">Important account security update from Envato</td>
                                                <td></td>
                                                <td class="mail-date">8:42</td>
                                            </tr>
                                            <tr class="clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">Twitter</td>
                                                <td class="subject">HRMS Bootstrap Admin Template</td>
                                                <td></td>
                                                <td class="mail-date">30 Nov</td>
                                            </tr>
                                            <tr class="unread clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">Richard Parker</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td></td>
                                                <td class="mail-date">18 Sep</td>
                                            </tr>
                                            <tr class="clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">John Smith</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td></td>
                                                <td class="mail-date">21 Aug</td>
                                            </tr>
                                            <tr class="clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">me, Robert Smith (3)</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td></td>
                                                <td class="mail-date">1 Aug</td>
                                            </tr>
                                            <tr class="unread clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">Codecanyon</td>
                                                <td class="subject">Welcome To Codecanyon</td>
                                                <td></td>
                                                <td class="mail-date">Jul 13</td>
                                            </tr>
                                            <tr class="clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">Richard Miles</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td><i class="fa-solid fa-paperclip"></i></td>
                                                <td class="mail-date">May 14</td>
                                            </tr>
                                            <tr class="unread clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                <td class="name">John Smith</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td></td>
                                                <td class="mail-date">11/11/16</td>
                                            </tr>
                                            <tr class="clickable-row" data-href="mail-view">
                                                <td>
                                                    <input type="checkbox" class="checkmail">
                                                </td>
                                                <td><span class="mail-important"><i class="fa fa-star starred "></i></span></td>
                                                <td class="name">Mike Litorus</td>
                                                <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td></td>
                                                <td class="mail-date">10/31/16</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Email -->

            </div>
        </div>
        <!-- /Tab Content -->

    </div>
    <!-- /Contact Details -->

</div>

    @component('components.model-popup')
    @endcomponent
    @endsection
