<?php $page = 'ui-modal'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Modal
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Bootstrap Modals</h4>

                    <p>
                        A rendered modal with header, body, and set of actions in the footer.
                    </p>

                    <!-- Standard modal content -->
                    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="standard-modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Text in a modal</h6>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                    <hr>
                                    <h6>Overflowing text to show scroll behavior</h6>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <!-- Full width modal content -->
                    <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-full-width">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>Text in a modal</h6>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                    <hr>
                                    <h6>Overflowing text to show scroll behavior</h6>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Long Content Scroll Modal -->
                    <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                        aria-labelledby="scrollableModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas
                                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue
                                        laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl
                                        consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Standard  modal -->
                        <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                            data-bs-target="#standard-modal">Standard Modal</button>
                        <!-- Full width modal -->
                        <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                            data-bs-target="#full-width-modal">Full width Modal</button>
                        <!-- Scrollable modal -->
                        <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                            data-bs-target="#scrollable-modal">Scrollable Modal</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Modal with Pages</h4>
                    <p>Examples of custom modals.</p>

                    <!-- Signup modal content -->
                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="text-center mt-2 mb-4">
                                        <div class="auth-logo">
                                            <a href="{{ url('index') }}" class="logo logo-dark">
                                                <span class="logo-lg">
                                                    <img src="{{ URL::asset('/assets/img/logo2.png') }}" alt="Logo"
                                                        height="42">
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <form class="px-3" action="#">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input class="form-control" type="email" id="username" required=""
                                                placeholder="Michael Zenaty">
                                        </div>

                                        <div class="mb-3">
                                            <label for="emailaddress" class="form-label">Email address</label>
                                            <input class="form-control" type="email" id="emailaddress" required=""
                                                placeholder="john@deo.com">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input class="form-control" type="password" required="" id="password"
                                                placeholder="Enter your password">
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">I accept <a
                                                        href="#">Terms and Conditions</a></label>
                                            </div>
                                        </div>

                                        <div class="mb-3 text-center">
                                            <button class="btn btn-primary" type="submit">Sign Up Free</button>
                                        </div>

                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                    <!-- SignIn modal content -->
                    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-center mt-2 mb-4">
                                        <div class="auth-logo">
                                            <a href="{{ url('index') }}" class="logo logo-dark">
                                                <span class="logo-lg">
                                                    <img src="{{ URL::asset('/assets/img/logo2.png') }}" alt="Logo"
                                                        height="42">
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <form action="#" class="px-3">

                                        <div class="mb-3">
                                            <label for="emailaddress1" class="form-label">Email address</label>
                                            <input class="form-control" type="email" id="emailaddress1" required=""
                                                placeholder="john@deo.com">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password1" class="form-label">Password</label>
                                            <input class="form-control" type="password" required="" id="password1"
                                                placeholder="Enter your password">
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="mb-2 text-center">
                                            <button class="btn rounded-pill btn-primary" type="submit">Sign In</button>
                                        </div>

                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Sign Up modal -->
                        <button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
                            data-bs-target="#signup-modal">Sign Up Modal</button>
                        <!-- Log In modal -->
                        <button type="button" class="btn btn-info mt-1" data-bs-toggle="modal"
                            data-bs-target="#login-modal">Log In Modal</button>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Modal Position</h4>
                    <p>Specify the position for the modal. You can display modal at top, bottom, center or right of page by
                        specifying
                        classes <code>modal-top</code>, <code>modal-bottom</code>, <code>modal-dialog-centered</code> and
                        <code>modal-right
                        </code> respectively.
                    </p>

                    <!-- Top modal content -->
                    <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-top">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Text in a modal</h5>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Right modal content -->
                    <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-right">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        <h4 class="mt-0">Text in a modal</h4>
                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Bottom modal content -->
                    <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-bottom">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Text in a modal</h5>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Center modal content -->
                    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Overflowing text to show scroll behavior</h5>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Top modal -->
                        <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                            data-bs-target="#top-modal">Top Modal</button>
                        <!-- Bottom modal -->
                        <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                            data-bs-target="#bottom-modal">Bottom Modal</button>
                        <!-- Center modal -->
                        <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                            data-bs-target="#centermodal">Center modal</button>
                        <!-- Right modal -->
                        <button type="button" class="btn btn-secondary mt-1" data-bs-toggle="modal"
                            data-bs-target="#right-modal">Rightbar Modal</button>
                    </div>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Modal based Alerts</h4>
                    <p>Show different contexual alert messages using modal component</p>

                    <!-- Success Alert Modal -->
                    <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content modal-filled bg-success">
                                <div class="modal-body p-4">
                                    <div class="text-center">
                                        <i class="dripicons-checkmark h1 text-white"></i>
                                        <h4 class="mt-2 text-white">Well Done!</h4>
                                        <p class="mt-3 text-white">Cras mattis consectetur purus sit amet fermentum. Cras
                                            justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn btn-light my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Info Alert Modal -->
                    <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-body p-4">
                                    <div class="text-center">
                                        <i class="dripicons-information h1 text-info"></i>
                                        <h4 class="mt-2">Heads up!</h4>
                                        <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                            odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn btn-info my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Warning Alert Modal -->
                    <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-body p-4">
                                    <div class="text-center">
                                        <i class="dripicons-warning h1 text-warning"></i>
                                        <h4 class="mt-2">Incorrect Information</h4>
                                        <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                            odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn btn-warning my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Danger Alert Modal -->
                    <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content modal-filled bg-danger">
                                <div class="modal-body p-4">
                                    <div class="text-center">
                                        <i class="dripicons-wrong h1 text-white"></i>
                                        <h4 class="mt-2 text-white">Oh snap!</h4>
                                        <p class="mt-3 text-white">Cras mattis consectetur purus sit amet fermentum. Cras
                                            justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <button type="button" class="btn btn-light my-2"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Success Alert modal -->
                        <button type="button" class="btn btn-success mt-1" data-bs-toggle="modal"
                            data-bs-target="#success-alert-modal">Success Alert</button>
                        <!-- Info Alert modal -->
                        <button type="button" class="btn btn-info mt-1" data-bs-toggle="modal"
                            data-bs-target="#info-alert-modal">Info Alert</button>
                        <!-- Warning Alert modal -->
                        <button type="button" class="btn btn-warning mt-1" data-bs-toggle="modal"
                            data-bs-target="#warning-alert-modal">Warning Alert</button>
                        <!-- Danger Alert modal -->
                        <button type="button" class="btn btn-danger mt-1" data-bs-toggle="modal"
                            data-bs-target="#danger-alert-modal">Danger Alert</button>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Multiple Modal</h4>
                    <p>Display a series of modals one by one to guide your users on multiple aspects or take step wise
                        input.</p>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalToggleLabel">Modal 1</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Show a second modal and hide this one with the button below.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                        data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Hide this modal and show the first with the button below.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                        data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <a class="btn btn-secondary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open
                        first modal</a>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Custom Modals</h4>

                    <p>Examples of custom modals.</p>

                    <!-- sample modal content -->

                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                        style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modal Content is Responsive</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="field-1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="field-1"
                                                    placeholder="John">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="field-2" class="form-label">Surname</label>
                                                <input type="text" class="form-control" id="field-2"
                                                    placeholder="Doe">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="field-3" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="field-3"
                                                    placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="field-4" class="form-label">City</label>
                                                <input type="text" class="form-control" id="field-4"
                                                    placeholder="Boston">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="field-5" class="form-label">Country</label>
                                                <input type="text" class="form-control" id="field-5"
                                                    placeholder="United States">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="field-6" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="field-6"
                                                    placeholder="123456">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <label for="field-7" class="form-label">Personal Info</label>
                                                <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-info waves-effect waves-light">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal -->

                    <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
                        style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content p-0">
                                <div id="accordion">
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="m-0">
                                                <a href="#collapseOne" class="text-dark" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Collapsible Group Item #1
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil
                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan
                                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                                denim aesthetic synth nesciunt
                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="m-0">
                                                <a href="#collapseTwo" class="collapsed text-dark"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Collapsible Group Item #2
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil
                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan
                                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                                denim aesthetic synth nesciunt
                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="m-0">
                                                <a href="#collapseThree" class="collapsed text-dark"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil
                                                anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                                sapiente ea proident. Ad vegan
                                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                                denim aesthetic synth nesciunt
                                                you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="button-list">
                        <!-- Responsive modal -->
                        <button type="button" class="btn btn-success waves-effect waves-light mt-1"
                            data-bs-toggle="modal" data-bs-target="#con-close-modal">Responsive Modal</button>
                        <!-- Accordion modal -->
                        <button type="button" class="btn btn-secondary waves-effect waves-light mt-1"
                            data-bs-toggle="modal" data-bs-target="#accordion-modal">Accordion in Modal</button>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Static backdrop</h4>

                    <p>
                        When backdrop is set to static, the modal will not close when clicking outside it. Click the button
                        below to try it.
                    </p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    Brunch 3 wolf moon
                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Optional Sizes</h4>

                    <p>Example of Modal sizes</p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#example-modal-xl">
                        Extra Large Modal
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#example-modal-lg">
                        Large Modal
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#example-modal-sm">
                        Small Modal
                    </button>

                    <!--  Modal -->
                    <div class="modal fade" id="example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <div class="modal fade" id="example-modal-sm" tabindex="-1" role="dialog"
                        aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="example-modal-xl" tabindex="-1" aria-labelledby="exampleModalLgLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLgLabel">Extra Large Modal
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                </div>
            </div>
        </div>


        <div class="col-xl-12">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Fullscreen Modal</h4>

                    <p>Example of Fullscreen Modal</p>

                    <div class="bd-example">
                        <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalFullscreen">Full screen</button>
                        <button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                        <button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                        <button type="button" class="btn btn-info mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                        <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
                        <button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModalFullscreenXxl">Full screen below
                            xxl</button>
                    </div>

                    <!--  Modal -->
                    <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                        aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenLabel">Full
                                        screen modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                        aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-sm-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenSmLabel">
                                        Full
                                        screen below sm</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                        aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenMdLabel">
                                        Full
                                        screen below md</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                        aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-lg-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenLgLabel">
                                        Full
                                        screen below lg</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                        aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-xl-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenXlLabel">
                                        Full
                                        screen below xl</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                        aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen-xxl-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalFullscreenXxlLabel">
                                        Full
                                        screen below xxl</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->

                </div>
            </div>
        </div>

        <!-- Modal Animation Effects -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Modal Animation Effects</h4>
                    <p>Example of Animation Effects</p>
                    <div class="row ">
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-scale"
                                data-bs-toggle="modal" href="#modaldemo8">Scale</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-right"
                                data-bs-toggle="modal" href="#modaldemo8">Slide In Right</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-bottom"
                                data-bs-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-newspaper"
                                data-bs-toggle="modal" href="#modaldemo8">Newspaper</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall"
                                data-bs-toggle="modal" href="#modaldemo8">Fall</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-horizontal"
                                data-bs-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-vertical"
                                data-bs-toggle="modal" href="#modaldemo8">Flip Vertical</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-super-scaled"
                                data-bs-toggle="modal" href="#modaldemo8">Super Scaled</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-sign"
                                data-bs-toggle="modal" href="#modaldemo8">Sign</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-bottom"
                                data-bs-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left"
                                data-bs-toggle="modal" href="#modaldemo8">Rotate Left</a>
                        </div>
                    </div>
                    <div class="modal fade" id="modaldemo8">
                        <div class="modal-dialog modal-dialog-centered text-center" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h4 class="modal-title">Message Preview</h4><button aria-label="Close"
                                        class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <h6>Why We Use Electoral College, Not Popular Vote</h6>
                                    <p class="text-muted mb-0">It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking at its layout. The point
                                        of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                        as opposed to using 'Content here, content here', making it look like readable
                                        English.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary">Save changes</button>
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Modal Animation Effects -->


        <!-- Modal Animation Effects -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body card-buttons">
                    <h4 class="header-title">Varying Modal Content</h4>
                    <p>Example of Animation Effects</p>
                    <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                        data-bs-target="#formmodal" data-bs-whatever="@mdo">Open modal for
                        @mdo</button>
                    <button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
                        data-bs-target="#formmodal" data-bs-whatever="@fat">Open modal for
                        @fat</button>
                    <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                        data-bs-target="#formmodal" data-bs-whatever="@getbootstrap">Open modal for
                        @getbootstrap</button>
                    <div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Modal Animation Effects -->

    </div>

    <div class="row">

        <!-- Vertically Centered Modal -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Vertically Centered Modal</h4>
                    <p>Example of Vertically Centered Modal</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalScrollable2">
                        Vertically centered modal
                    </button>
                    <div class="modal fade" id="exampleModalScrollable2" tabindex="-1"
                        aria-labelledby="exampleModalScrollable2" data-bs-keyboard="false" aria-hidden="true">
                        <!-- Scrollable modal -->
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="staticBackdropLabel2">Modal title
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Libero
                                        ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                                        nisi
                                        ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Vertically Centered Modal -->

        <!-- Vertically Centered Scrollable -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Vertical Centered Scrollable</h4>
                    <p>Scrollbale content in modal</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalScrollable3">
                        Vertically centered scrollable modal
                    </button>
                    <div class="modal fade" id="exampleModalScrollable3" tabindex="-1"
                        aria-labelledby="exampleModalScrollable3" data-bs-keyboard="false" aria-hidden="true">
                        <!-- Scrollable modal -->
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="staticBackdropLabel3">Modal title
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                                        voluptatibus, ipsam quo est rerum modi quos expedita facere,
                                        ex
                                        tempore fuga similique ipsa blanditiis et accusamus
                                        temporibus
                                        commodi voluptas! Nobis veniam illo architecto expedita quam
                                        ratione quaerat omnis. In, recusandae eos! Pariatur,
                                        deleniti
                                        quis ad nemo ipsam officia temporibus, doloribus fuga
                                        asperiores
                                        ratione distinctio velit alias hic modi praesentium aperiam
                                        officiis eaque, accusamus aut. Accusantium assumenda,
                                        commodi
                                        nulla provident asperiores fugit inventore iste amet aut
                                        placeat
                                        consequatur reprehenderit. Ratione tenetur eligendi, quis
                                        aperiam dolores magni iusto distinctio voluptatibus minus a
                                        unde
                                        at! Consequatur voluptatum in eaque obcaecati, impedit
                                        accusantium ea soluta, excepturi, quasi quia commodi
                                        blanditiis?
                                        Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                                        consequuntur quod quo veniam? Labore dignissimos reiciendis
                                        accusamus recusandae est consequuntur iure.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Vertically Centered Scrollable -->

        <!-- Tooltips and popovers -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Tooltips and popovers</h4>
                    <p>Tooltips and popovers in modal</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalScrollable4">
                        Launch demo modal
                    </button>
                    <div class="modal fade" id="exampleModalScrollable4" tabindex="-1"
                        aria-labelledby="exampleModalScrollable4" data-bs-keyboard="false" aria-hidden="true">
                        <!-- Scrollable modal -->
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="staticBackdropLabel4">Modal title
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Popover in a modal</h5>
                                    <p>This <a href="#" role="button" class="btn btn-secondary"
                                            data-bs-toggle="popover" title="Popover title"
                                            data-bs-content="Popover body content is set in this attribute.">button</a>
                                        triggers a popover on click.</p>
                                    <hr>
                                    <h5>Tooltips in a modal</h5>
                                    <p><a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            title="Tooltip">This
                                            link</a> and <a href="#" class="text-primary"
                                            data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on
                                        hover.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Tooltips and popovers -->

    </div>
@endsection
