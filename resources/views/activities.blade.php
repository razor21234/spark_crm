<?php $page = 'activities'; ?>
@extends('layout.mainlayout')

@section('content')
    {{-- Page Header --}}
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
                        <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
                        <a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
                    </div>
                    <div class="form-sort">
                        <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i> Export</a>
                    </div>
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_activity"><i class="la la-plus-circle"></i>Add Activity</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Page Header --}}

    {{-- Search Filter --}}
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
                    <label the="focus-label">Due Date</label>
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
                <a href="#" class="btn btn-success w-100">Search</a>
            </div>
        </div>
    </div>
    <hr>
    {{-- End of Search Filter --}}

    {{-- Dynamic Table of Activities --}}
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
                        @forelse ($activities as $activity)
                        <tr>
                            <td>{{ $activity->title }}</td>
                            <td><span class="badge activity-badge">{{ $activity->activity_type }}</span></td>
                            <td>{{ $activity->due_date }}</td>
                            <td>{{ $activity->owner }}</td>
                            <td>{{ $activity->created_at->format('d M Y, H:i a') }}</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_activity" data-id="{{ $activity->id }}">Edit</a>
                                <form method="POST" action="{{ url('activities/' . $activity->id) }}" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No activities found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- /Dynamic Table of Activities --}}

    @component('components.model-popup')
    @endcomponent
@endsection