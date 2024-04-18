<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ url('/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/plugins/fontawesome/css/all.min.css') }}">

@if (Route::is(['ui-alerts', 'ui-nav-tabs','ui-ribbon','contact-details','employee-dashboard','company-details','deals-details']))
<!-- Feathericon CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/feather.css')}}">
@endif

@if (!Route::is(['otp', 'register','companies','companies-grid']))
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ url('/assets/css/line-awesome.min.css')}}">
        @endif
@if (!Route::is(['otp', 'register']))
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/material.css') }}">
@endif
@if (Route::is(['deals','deals-details','deals-kanban']))
<!-- Lineawesome CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/material.css') }}">
@endif
@if (Route::is(['deals-dashboard','leads-dashboard','companies','companies-grid','company-details','deals','deals-details','deals-kanban']))
<!-- Daterangepikcer CSS -->
<link rel="stylesheet" href="{{ url('/assets/plugins/daterangepicker/daterangepicker.css') }}">
@endif

@if (Route::is(['admin-dashboard', 'assets-category', 'assets-new','deals-dashboard','leads-dashboard']))

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/morris/morris.css') }}">
@endif

@if(Route::is(['employee-dashboard']))
        <!-- Owl carousel CSS -->
		<link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.min.css')}}">
@endif

@if (Route::is([
        'applied-jobs',
        'apptitude-result',
        'archived-jobs',
        'assets-category',
        'assets-details',
        'assets-new',
        'assets-reports',
        'assets1',
        'attance-reports',
        'attendance-reports',
        'candidates',
        'clients-list',
        'daily-reports',
        'data-tables',
        'departments',
        'designations',
        'employee-reports',
        'employees-list',
        'expense-reports',
        'expenses',
        'experiance-level',
        'goal-tracking',
        'goal-type',
        'interview-questions',
        'interviewing',
        'invoice-reports',
        'job-applicants',
        'job-aptitude',
        'job-details',
        'job-list',
        'job-view',
        'jobs',
        'leads',
        'leave-reports',
        'leave-type',
        'leaves-employee',
        'leaves',
        'manage-resumes',
        'offer_approvals',
        'offered-jobs',
        'overtime',
        'payments-reports',
        'payments',
        'payroll-items',
        'payslip-reports',
        'performance-appraisal',
        'performance-indicator',
        'policies',
        'profile',
        'project-list',
        'project-reports',
        'promotion',
        'provident-fund',
        'questions',
        'resignation',
        'salary',
        'saved-jobs',
        'schedule-timing',
        'shift-list',
        'shift-scheduling',
        'shortlist-candidates',
        'subscribed-companies',
        'task-reports',
        'termination',
        'tickets',
        'timesheet',
        'trainers',
        'training-type',
        'training',
        'user-all-jobs',
        'user-reports',
        'users',
        'visited-jobs',
        'contact-list',
        'companies',
        'companies-grid',
        'contact-list','pipeline','activities','company-details','deals','deals-details','deals-kanban'
    ]))
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/dataTables.bootstrap4.min.css') }}">
@endif

@if (Route::is([
        'applied-jobs',
        'approval-setting',
        'apptitude-result',
        'archived-jobs',
        'assets-details',
        'assets-new',
        'assets-reports',
        'assets1',
        'attance-reports',
        'attend-reports',
        'attendance-employee',
        'attendance-reports',
        'attendance',
        'calendar',
        'candidates',
        'clients-list',
        'clients',
        'compose',
        'create-estimate',
        'create-invoice',
        'daily-reports',
        'designations',
        'edit-estimate',
        'edit-invoice',
        'email-settings',
        'employee-reports',
        'employees-list',
        'employees',
        'estimates',
        'events',
        'expense-reports',
        'expenses',
        'experiance-level',
        'form-horizontal',
        'form-vertical',
        'goal-tracking',
        'goal-type',
        'interview-questions',
        'invoice-reports',
        'invoices',
        'job-applicants',
        'job-aptitude',
        'job-details',
        'job-list',
        'job-view',
        'jobs',
        'jobs-dashboard',
        'leave-reports',
        'leave-settings',
        'leaves-employee',
        'leaves',
        'localization',
        'manage-resumes',
        'offer_approvals',
        'offered-jobs',
        'overtime',
        'payments-reports',
        'payroll-items',
        'payslip-reports',
        'performance-appraisal',
        'performance-indicator',
        'performance',
        'policies',
        'profile',
        'project-list',
        'project-reports',
        'project-view',
        'projects',
        'promotion',
        'provident-fund',
        'questions',
        'resignation',
        'salary',
        'saved-jobs',
        'schedule-timing',
        'settings',
        'shift-list',
        'shift-scheduling',
        'shortlist-candidates',
        'sub-category',
        'subscribed-companies',
        'subscriptions',
        'task-board',
        'task-reports',
        'tasks',
        'taxes',
        'termination',
        'ticket-details',
        'tickets',
        'timesheet',
        'trainers',
        'training-type',
        'training',
        'user-all-jobs',
        'user-asset-details',
        'user-reports',
        'users',
        'visited-jobs',
        'client-profile',
        'search',
        'budget-expenses',
        'budget-revenues',
        'interviewing',
        'contact-details',
        'contact-grid',
        'contact-list',
        'deals-dashboard',
        'leads-dashboard',
        'analytics',
        'companies',
        'companies-grid',
        
        'contact-list','leads-dashboard','leads-details','leads-kanban','pipeline','leads','activities','company-details','deals','deals-details','deals-kanban'
    ]))
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/select2.min.css') }}">
@endif
@if (Route::is(['leave-settings','companies','companies-grid','deals','deals-details','deals-kanban']))
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/line-awesome.min.css') }}">
@endif

@if (Route::is([
        'apptitude-result',
        'assets-category',
        'assets-new',
        'assets-reports',
        'assets1',
        'attance-reports',
        'attendance-employee',
        'attendance',
        'budget-expenses',
        'budget-revenues',
        'budgets',
        'calendar',
        'candidates',
        'categories',
        'create-estimate',
        'create-invoice',
        'daily-reports',
        'edit-estimate',
        'edit-invoice',
        'employee-reports',
        'employees-list',
        'employees',
        'estimates',
        'events',
        'expense-reports',
        'expenses',
        'experiance-level',
        'goal-tracking',
        'holidays',
        'interview-questions',
        'invoice-reports',
        'invoices',
        'job-applicants',
        'job-details',
        'job-list',
        'job-view',
        'jobs',
        'jobs-dashboard',
        'leave-reports',
        'leave-settings',
        'leaves-employee',
        'leaves',
        'manage-resumes',
        'offer_approvals',
        'overtime',
        'payments-reports',
        'payroll-items',
        'performance-appraisal',
        'performance-indicator',
        'profile',
        'project-list',
        'project-view',
        'projects',
        'promotion',
        'resignation',
        'salary',
        'schedule-timing',
        'shift-list',
        'shift-scheduling',
        'shortlist-candidates',
        'sub-category',
        'subscribed-companies',
        'task-board',
        'tasks',
        'termination',
        'tickets',
        'timesheet',
        'training',
        'user-asset-details',
        'users',
        'client-profile',
        'search',
        'contact-details',
        'contact-grid',
        'contact-list',
        'companies',
        'companies-grid',
        'contact-list','leads-details','pipeline','leads','activities','company-details','deals','deals-details','deals-kanban','analytics'
    ]))
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap-datetimepicker.min.css') }}">
@endif

@if (Route::is(['assets-category', 'assets-details', 'assets-new','leads-dashboard','pipeline','contact-list','contact-grid','leads','leads-kanban','activities','deals-kanban']))
    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/daterangepicker/daterangepicker.css') }}">
@endif

@if (Route::is(['calendar', 'events']))
    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{ url('/assets/css/fullcalendar.min.css') }}">
@endif

@if (Route::is(['compose', 'projects', 'tasks']))
    <!-- Ck Editor -->
    <link rel="stylesheet" href="{{ url('/assets/css/ckeditor.css') }}">
@endif
@if (Route::is(['ui-notification']))
    <link rel="stylesheet" href="{{ url('/assets/plugins/alertify/alertify.min.css') }}">
@endif
@if (Route::is(['ui-stickynote']))
    <!-- Sticky CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/stickynote/sticky.css') }}">
@endif
@if (Route::is(['ui-scrollbar']))
    <link rel="stylesheet" href="{{ url('/assets/plugins/scrollbar/scroll.min.css') }}">
@endif
@if (Route::is(['ui-toasts']))
    <!-- Toatr CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins//toastr/toatr.css') }}">
@endif
@if (Route::is(['chart-c3']))
    <link rel="stylesheet" href="{{ url('/assets/plugins/c3-chart/c3.min.css') }}">
@endif
@if (Route::is(['form-select2']))
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/select2/css/select2.min.css') }}">
@endif
@if (Route::is(['ui-lightbox']))
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/lightbox/glightbox.min.css') }}">
@endif
@if (Route::is(['employee-dashboard','icon-feather','icon-material']))
    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/feather/feather.css') }}">
@endif
@if (Route::is(['icon-flag']))
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/flags/flags.css') }}">
@endif
@if (Route::is(['icon-ionic']))
    <!-- Ionic CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/ionic/ionicons.css') }}">
@endif
@if (Route::is(['icon-material']))
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/material/materialdesignicons.css') }}">
@endif
@if (Route::is(['icon-pe7']))
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/pe7/pe-icon-7.css') }}">
@endif
@if (Route::is(['icon-simpleline']))
    <!-- Simpleline CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/simpleline/simple-line-icons.css') }}">
@endif
@if (Route::is(['icon-themify']))
    <!-- Themify CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/themify/themify.css') }}">
@endif
@if (Route::is(['icon-typicon']))
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/typicons/typicons.css') }}">
@endif
@if (Route::is(['icon-weather']))
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/icons/weather/weathericons.css') }}">
@endif
@if (Route::is(['ui-clipboard', 'ui-drag-drop']))
    <!-- Dragula CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/dragula/css/dragula.min.css') }}">
@endif
@if (Route::is(['ui-text-editor','contact-details','leads-details','company-details','deals-details']))
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/summernote/summernote-bs4.min.css') }}">
@endif
@if (Route::is(['ui-rangeslider']))
    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
@endif

@if (Route::is(['leave-settings', 'user-asset-details','contact-list','contact-grid','deals-details','deals-kanban','deals','leads-details','leads-kanban','leads','pipeline','contact-details','company-details','companies','companies-grid','activities','company-details','deals','deals-details','deals-kanban']))
    <!-- Tagsinput CSS -->
    <link rel="stylesheet" href="{{ url('/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endif
<!-- Main CSS -->
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
