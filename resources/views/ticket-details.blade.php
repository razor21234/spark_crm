<?php $page = 'ticket-details'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-md-4">
            <h3 class="page-title mb-0">Ticket Detail</h3>
        </div>
    </div>
</div>
<!-- /Page Header -->
<hr>
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="ticket-detail-head">
            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                        <span class="ticket-detail-icon"><i class="la la-stop-circle"></i></span>
                        <div class="detail-info">
                            <h6>Status</h6>
                            <span class="badge badge-soft-warning">In Progress</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                        <span class="ticket-detail-icon bg-danger-lights"><i class="la la-user"></i></span>
                        <div class="detail-info info-two">
                            <h6>Created By</h6>
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                        <span class="ticket-detail-icon bg-warning-lights"><i class="la la-calendar"></i></span>
                        <div class="detail-info info-two">
                            <h6>Created Date</h6>
                            <span>08 Feb 2024</span>
                        </div>
                    </div>
                </div><div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                        <span class="ticket-detail-icon bg-purple-lights"><i class="la la-info-circle"></i></span>
                        <div class="detail-info">
                            <h6>Priority</h6>
                            <span class="badge badge-soft-danger">High</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ticket-purpose">
            <h4>Laptop Issue</h4>
            <p>For the past week, my laptop has been experiencing intermittent freezing issues. The freezes occur randomly, approximately 3-4 times a day, and last about 30-60 seconds each time. During these freezes, the cursor becomes unresponsive, and I am unable to click on anything or use keyboard shortcuts. The issue usually resolves itself, but it significantly disrupts my work.</p>
            <ul>
                <li>
                    I first noticed the problem on February 1, 2024, while using Google Meet for a video conference. Since then, the issue has occurred during various tasks, including browsing with Chrome, using Microsoft Office applications, and even when the laptop is idle.
                </li>
                <li>
                    Error messages: No specific error messages have appeared, but the Task Manager (when accessible) shows a spike in CPU usage to 100% during these freezes.
                </li>
            </ul>
        </div>
        <div class="attached-files-info">
            <div class="row">
                <div class="col-xxl-6">
                    <div class="attached-files">
                        <ul>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-file-pdf"></i></span>
                                    <p>file0702202413.pdf</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-file-pdf"></i></span>
                                    <p>file0702202414.pdf</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-file-alt"></i></span>
                                    <p>file0702202418.doc</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-file-alt"></i></span>
                                    <p>file0702202419.doc</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-file-alt"></i></span>
                                    <p>file0702202420.doc</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <div class="attached-files media-attached-files">
                        <ul>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-image"></i></span>
                                    <p>Image0702202411.jpg</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-image"></i></span>
                                    <p>Image0702202412.jpg</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-file-video"></i></span>
                                    <p>Video0702202415.mp4</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-image"></i></span>
                                    <p>Image0702202420.png</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="file-icon"><i class="la la-image"></i></span>
                                    <p>Image0702202421.png</p>
                                </div>
                                <div class="file-download">
                                    <a href="#"><i class="la la-download"></i>Download</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5 theiaStickySidebar">
        <div class="ticket-chat">
            <div class="ticket-chat-head">
                <h4>Ticket Chat</h4>
                <div class="chat-post-box">
                    <form action="ticket-details">
                        <textarea class="form-control" rows="4">Post</textarea>
                        <div class="files-attached d-flex justify-content-between align-items-center">
                            <div class="post-files">
                                <a href="javascript:void(0);"><i class="la la-image"></i></a>
                                <a href="javascript:void(0);"><i class="la la-file-video"></i></a>
                            </div>
                            <button type="submit">Sent</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="ticket-chat-body">
                <ul class="created-tickets-info">
                    <li>
                        <div class="ticket-created-user">
                            <span class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-27.jpg')}}" alt="User Image"></span>
                            <div class="user-name">
                                <h5><span>John Doe</span> posted a status</h5>
                                <span>5 hours ago</span>
                            </div>
                            
                        </div>
                    </li>
                    <li>
                        <div class="ticket-created-info">
                            <h6>Impact on Work</h6>
                            <p>This issue disrupts meetings, delays task completion, and affects my overall productivity.</p>
                            <a href="#" class="comment-text"><i class="la la-comments me-2"></i>Comments (2)</a>
                            
                        </div>
                    </li>
                    <li>
                        <div class="ticket-created-user">
                            <span class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-1.jpg')}}" alt="User Image"></span>
                            <div class="user-name">
                                <h5><span>Rebecca Velazquez</span></h5>
                                <span>2 hours ago</span>
                            </div>
                        </div>
                        <p class="details-text">Check the System and Application logs in the Event Viewer for warnings or errors that coincide with the times the freezes occur.</p>
                    </li>
                    <li>
                        <div class="ticket-created-user">
                            <span class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-28.jpg')}}" alt="User Image"></span>
                            <div class="user-name">
                                <h5><span>Rahul Daviz</span></h5>
                                <span>3 hours ago</span>
                            </div>
                        </div>
                        <p class="details-text">Confirm that basic troubleshooting steps have been correctly executed (restarts, updates, antivirus scans).</p>
                    </li>
                </ul>
            </div>
            <div class="ticket-chat-footer">
                <form action="ticket-details">
                    <div class="d-flex justify-content-between align-items-center">
                        <input type="text" class="form-control">
                        <button type="submit"><i class="la la-arrow-right"></i></button>
                    </div>									
                </form>
            </div>
        </div>
    </div>
</div>
    @component('components.model-popup')
    @endcomponent
@endsection
