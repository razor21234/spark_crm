<?php $page = 'ui-images'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Images
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body card-buttons">
                    <div class="row">
                        <div class="col-xl-12">
                            <h4 class="header-title">Images shapes</h4>
                            <p>
                                Add classes to an <code>&lt;img&gt;</code> element to easily style
                                images in any project.
                            </p>

                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/img-4.jpg') }}" alt="image"
                                        class="img-fluid rounded" width="200">
                                    <p class="mb-0">
                                        <code>.rounded</code>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/user-6.jpg') }}" alt="image"
                                        class="img-fluid rounded-circle" width="133">
                                    <p class="mb-0">
                                        <code>.rounded-circle</code>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/img-1.jpg') }}" alt="image"
                                        class="img-fluid img-thumbnail" width="200">
                                    <p class="mb-0">
                                        <code>.img-thumbnail</code>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/user-6.jpg') }}" alt="image"
                                        class="img-fluid rounded-pill" width="133">
                                    <p class="mb-0">
                                        <code>.rounded-pill</code>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body card-buttons">
                    <div class="row">
                        <div class="col-xl-12 mt-3 mt-xl-0">
                            <h4 class="header-title">Image sizes</h4>
                            <p>
                                Add classes to an <code>&lt;img&gt;</code> element to easily style
                                images in any project.
                            </p>

                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/user-5.jpg') }}" alt="image"
                                        class="img-fluid avatar-xs rounded">
                                    <p class="mb-0">
                                        <code>.avatar-xs</code>
                                    </p>
                                </div>

                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/user-5.jpg') }}" alt="image"
                                        class="img-fluid avatar-sm rounded mt-2">
                                    <p class="mb-0">
                                        <code>.avatar-sm</code>
                                    </p>
                                </div>

                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/user-5.jpg') }}" alt="image"
                                        class="img-fluid avatar-lg rounded">
                                    <p class="mb-0">
                                        <code>.avatar-lg</code>
                                    </p>
                                </div>

                                <div class="col-sm-3">
                                    <img src="{{ URL::asset('/assets/img/user-5.jpg') }}" alt="image"
                                        class="img-fluid avatar-xl rounded">
                                    <p class="mb-0">
                                        <code>.avatar-xl</code>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Image Left Align -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Image Left Align</h4>
                    <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
                    <img class="rounded float-start" src="{{ URL::asset('/assets/img/img-1.jpg') }}" alt="..."
                        width="200">
                </div>

            </div>
        </div>
        <!-- /Image Left Align -->

        <!-- Image Center Align -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Image Center Align</h4>
                    <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
                    <img class="rounded mx-auto d-block" src="{{ URL::asset('/assets/img/img-1.jpg') }}" alt="..."
                        width="200">
                </div>
            </div>
        </div>
        <!-- /Image Center Align -->

        <!-- Image Right Align -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Image Right Align</h4>
                    <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
                    <img class="rounded float-end d-block" src="{{ URL::asset('/assets/img/img-1.jpg') }}" alt="..."
                        width="200">
                </div>
            </div>
        </div>
        <!-- /Image Right Align -->

        <!-- Figures -->
        <div class="col-xl-6">
            <div class="card mb-0">
                <div class="card-body ">
                    <h4 class="header-title">Figures</h4>
                    <div class="d-flex justify-content-between gap-2">
                        <figure class="figure">
                            <img class="bd-placeholder-img figure-img img-fluid rounded card-img"
                                src="{{ URL::asset('/assets/img/img-1.jpg') }}" alt="...">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                        <figure class="figure float-end">
                            <img class="bd-placeholder-img figure-img img-fluid rounded card-img"
                                src="{{ URL::asset('/assets/img/img-1.jpg') }}" alt="...">
                            <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Figures -->

    </div>
@endsection
