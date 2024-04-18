<?php $page = 'ui-ribbon'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Ribbons
        @endslot
    @endcomponent

    <!-- Ribbon Style 1 -->
    <div class="row">
        <h5 class="mb-4">Ribbon Style 1</h5>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="power-ribbone power-ribbone-top-left text-warning">
                    <span class="bg-warning">
                        <i class="feather-zap"></i>
                    </span>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="power-ribbone power-ribbone-bottom-left text-primary">
                    <span class="bg-primary">
                        <i class="feather-zap"></i>
                    </span>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="power-ribbone power-ribbone-top-right text-danger">
                    <span class="bg-danger">
                        <i class="feather-zap"></i>
                    </span>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="power-ribbone power-ribbone-bottom-right text-success">
                    <span class="bg-success">
                        <i class="feather-zap"></i>
                    </span>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Ribbon Style 1 -->

    <!-- Ribbon Style 2 -->
    <div class="row">
        <h5 class="mb-4">Ribbon Style 2</h5>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="ribbone ribbone-top-left text-primary"><span class="bg-primary">sold out</span></div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card  sold-out">
                <div class="ribbone ribbone-top-right text-danger"><span class="bg-danger">Offer</span></div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="ribbone ribbone-top-left text-success"><span class="bg-success">Update</span></div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card sold-out">
                <div class="ribbone ribbone-top-right text-warning"><span class="bg-warning">Open</span></div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Ribbon Style 2 -->

    <!-- Ribbon Style 3 -->
    <div class="row">
        <h5 class="mb-4">Ribbon Style 3</h5>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="arrow-ribbone-left bg-secondary">Sale</div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="arrow-ribbone-right bg-info">Price</div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="arrow-ribbone-left bg-warning">Service</div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card ribbone-card">
                <div class="arrow-ribbone-right bg-danger">Offer</div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Ribbon Style 3 -->

    <!-- Ribbon Style 4 -->
    <div class="row ribbone-row">
        <h5 class="mb-4">Ribbon Style 4</h5>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <span class="ribbone-success-left">
                    <span>
                        <i class="feather-zap"></i>
                    </span>
                </span>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <span class="ribbone-warning-right">
                    <span>
                        <i class="feather-zap"></i>
                    </span>
                </span>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <span class="ribbone-info-left">
                    <span>
                        <i class="feather-zap"></i>
                    </span>
                </span>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold text-end">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <span class="ribbone-danger-right">
                    <span>
                        <i class="feather-zap"></i>
                    </span>
                </span>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-dark fw-bold">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title. Some quick example text to
                        build on the card title</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Ribbon Style 4 -->
@endsection
