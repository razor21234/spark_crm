@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">
                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="admin-dashboard.php"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>
                <!-- /Account Logo -->
                
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Register</h3>
                        <p class="account-subtitle">Access to our dashboard</p>
                        
                        <!-- Account Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-block mb-4">
                                <label class="col-form-label">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="input-block mb-4">
                                <label class="col-form-label">Email<span class="mandatory">*</span></label>
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="input-block mb-4">
                                <label class="col-form-label">Password<span class="mandatory">*</span></label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="input-block mb-4">
                                <label class="col-form-label">Repeat Password<span class="mandatory">*</span></label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                            </div>
                            <div class="input-block mb-4 text-center">
                                <button class="btn btn-primary account-btn" type="submit">Register</button>
                            </div>
                            <div class="account-footer">
                                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
