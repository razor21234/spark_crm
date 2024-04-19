<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('admin-dashboard', [CustomAuthController::class, 'admin-dashboard']); 
Route::get('index', [CustomAuthController::class, 'index'])->name('index');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Activity Management Routes
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');


Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
})->name('admin-dashboard');
Route::get('/employee-dashboard', function () {
    return view('employee-dashboard');
})->name('employee-dashboard');
Route::get('/user-asset-details', function () {
    return view('user-asset-details');
})->name('user-asset-details');
Route::get('/assets-reports', function () {
    return view('assets-reports');
})->name('assets-reports');
Route::get('/assets-details', function () {
    return view('assets-details');
})->name('assets-details');
Route::get('/attend-reports', function () {
    return view('attend-reports');
})->name('attend-reports');
Route::get('/attance-reports', function () {
    return view('attance-reports');
})->name('attance-reports');
Route::get('/assets-new', function () {
    return view('assets-new');
})->name('assets-new');
Route::get('/assets-category', function () {
    return view('assets-category');
})->name('assets-category');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/outgoing-call', function () {
    return view('outgoing-call');
})->name('outgoing-call');
Route::get('/incoming-call', function () {
    return view('incoming-call');
})->name('incoming-call');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');
Route::get('/file-manager', function () {
    return view('file-manager');
})->name('file-manager');
Route::get('/employees', function () {
    return view('employees');
})->name('employees');
Route::get('/holidays', function () {
    return view('holidays');
})->name('holidays');
Route::get('/leaves', function () {
    return view('leaves');
})->name('leaves');
Route::get('/leaves-employee', function () {
    return view('leaves-employee');
})->name('leaves-employee');
Route::get('/leave-settings', function () {
    return view('leave-settings');
})->name('leave-settings');
Route::get('/attendance', function () {
    return view('attendance');
})->name('attendance');
Route::get('/attendance-employee', function () {
    return view('attendance-employee');
})->name('attendance-employee');
Route::get('/departments', function () {
    return view('departments');
})->name('departments');
Route::get('/designations', function () {
    return view('designations');
})->name('designations');
Route::get('/timesheet', function () {
    return view('timesheet');
})->name('timesheet');
Route::get('/overtime', function () {
    return view('overtime');
})->name('overtime');
Route::get('/clients', function () {
    return view('clients');
})->name('clients');
Route::get('/projects', function () {
    return view('projects');
})->name('projects');
Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');
Route::get('/task-board', function () {
    return view('task-board');
})->name('task-board');
Route::get('/leads', function () {
    return view('leads');
})->name('leads');
Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');
Route::get('/estimates', function () {
    return view('estimates');
})->name('estimates');
Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');
Route::get('/payments', function () {
    return view('payments');
})->name('payments');
Route::get('/expenses', function () {
    return view('expenses');
})->name('expenses');
Route::get('/provident-fund', function () {
    return view('provident-fund');
})->name('provident-fund');
Route::get('/taxes', function () {
    return view('taxes');
})->name('taxes');
Route::get('/salary', function () {
    return view('salary');
})->name('salary');
Route::get('/salary-view', function () {
    return view('salary-view');
})->name('salary-view');
Route::get('/payroll-items', function () {
    return view('payroll-items');
})->name('payroll-items');
Route::get('/policies', function () {
    return view('policies');
})->name('policies');
Route::get('/expense-reports', function () {
    return view('expense-reports');
})->name('expense-reports');
Route::get('/invoice-reports', function () {
    return view('invoice-reports');
})->name('invoice-reports');
Route::get('/performance-indicator', function () {
    return view('performance-indicator');
})->name('performance-indicator');
Route::get('/performance', function () {
    return view('performance');
})->name('performance');
Route::get('/performance-appraisal', function () {
    return view('performance-appraisal');
})->name('performance-appraisal');
Route::get('/goal-tracking', function () {
    return view('goal-tracking');
})->name('goal-tracking');
Route::get('/goal-type', function () {
    return view('goal-type');
})->name('goal-type');
Route::get('/training', function () {
    return view('training');
})->name('training');
Route::get('/trainers', function () {
    return view('trainers');
})->name('trainers');
Route::get('/training-type', function () {
    return view('training-type');
})->name('training-type');
Route::get('/promotion', function () {
    return view('promotion');
})->name('promotion');
Route::get('/resignation', function () {
    return view('resignation');
})->name('resignation');
Route::get('/termination', function () {
    return view('termination');
})->name('termination');
Route::get('/assets1', function () {
    return view('assets1');
})->name('assets1');
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');
Route::get('/job-applicants', function () {
    return view('job-applicants');
})->name('job-applicants');
Route::get('/knowledgebase', function () {
    return view('knowledgebase');
})->name('knowledgebase');
Route::get('/activities', function () {
    return view('activities');
})->name('activities');
Route::get('/users', function () {
    return view('users');
})->name('users');
Route::get('/settings', function () {
    return view('settings');
})->name('settings');
Route::get('/localization', function () {
    return view('localization');
})->name('localization');
Route::get('/theme-settings', function () {
    return view('theme-settings');
})->name('theme-settings');
Route::get('/roles-permissions', function () {
    return view('roles-permissions');
})->name('roles-permissions');
Route::get('/email-settings', function () {
    return view('email-settings');
})->name('email-settings');
Route::get('/invoice-settings', function () {
    return view('invoice-settings');
})->name('invoice-settings');
Route::get('/salary-settings', function () {
    return view('salary-settings');
})->name('salary-settings');
Route::get('/notifications-settings', function () {
    return view('notifications-settings');
})->name('notifications-settings');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/leave-type', function () {
    return view('leave-type');
})->name('leave-type');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/client-profile', function () {
    return view('client-profile');
})->name('client-profile');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/otp', function () {
    return view('otp');
})->name('otp');
Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/subscriptions', function () {
    return view('subscriptions');
})->name('subscriptions');
Route::get('/subscriptions-company', function () {
    return view('subscriptions-company');
})->name('subscriptions-company');
Route::get('/subscribed-companies', function () {
    return view('subscribed-companies');
})->name('subscribed-companies');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');

Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');
Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');
Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');
Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');
Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');
Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');
Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');
Route::get('/create-estimate', function () {
    return view('create-estimate');
})->name('create-estimate');
Route::get('/create-invoice', function () {
    return view('create-invoice');
})->name('create-invoice');
Route::get('/clients-list', function () {
    return view('clients-list');
})->name('clients-list');
Route::get('/compose', function () {
    return view('compose');
})->name('compose');
Route::get('/edit-estimate', function () {
    return view('edit-estimate');
})->name('edit-estimate');
Route::get('/edit-invoice', function () {
    return view('edit-invoice');
})->name('edit-invoice');
Route::get('/estimate-view', function () {
    return view('estimate-view');
})->name('estimate-view');
Route::get('/job-view', function () {
    return view('job-view');
})->name('job-view');
Route::get('/job-list', function () {
    return view('job-list');
})->name('job-list');
Route::get('/job-details', function () {
    return view('job-details');
})->name('job-details');
Route::get('/knowledgebase-view', function () {
    return view('knowledgebase-view');
})->name('knowledgebase-view');
Route::get('/mail-view', function () {
    return view('mail-view');
})->name('mail-view');
Route::get('/project-list', function () {
    return view('project-list');
})->name('project-list');
Route::get('/project-view', function () {
    return view('project-view');
})->name('project-view');
Route::get('/ticket-details', function () {
    return view('ticket-details');
})->name('ticket-details');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/employees-list', function () {
    return view('employees-list');
})->name('employees-list');
Route::get('/shift-scheduling', function () {
    return view('shift-scheduling');
})->name('shift-scheduling');
Route::get('/shift-list', function () {
    return view('shift-list');
})->name('shift-list');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/budgets', function () {
    return view('budgets');
})->name('budgets');
Route::get('/budget-expenses', function () {
    return view('budget-expenses');
})->name('budget-expenses');
Route::get('/budget-revenues', function () {
    return view('budget-revenues');
})->name('budget-revenues');
Route::get('/payments-reports', function () {
    return view('payments-reports');
})->name('payments-reports');
Route::get('/project-reports', function () {
    return view('project-reports');
})->name('project-reports');
Route::get('/task-reports', function () {
    return view('task-reports');
})->name('task-reports');
Route::get('/user-reports', function () {
    return view('user-reports');
})->name('user-reports');
Route::get('/employee-reports', function () {
    return view('employee-reports');
})->name('employee-reports');
Route::get('/payslip-reports', function () {
    return view('payslip-reports');
})->name('payslip-reports');
Route::get('/attendance-reports', function () {
    return view('attendance-reports');
})->name('attendance-reports');
Route::get('/leave-reports', function () {
    return view('leave-reports');
})->name('leave-reports');
Route::get('/daily-reports', function () {
    return view('daily-reports');
})->name('daily-reports');
Route::get('/user-dashboard', function () {
    return view('user-dashboard');
})->name('user-dashboard');
Route::get('/jobs-dashboard', function () {
    return view('jobs-dashboard');
})->name('jobs-dashboard');
Route::get('/manage-resumes', function () {
    return view('manage-resumes');
})->name('manage-resumes');
Route::get('/shortlist-candidates', function () {
    return view('shortlist-candidates');
})->name('shortlist-candidates');
Route::get('/interview-questions', function () {
    return view('interview-questions');
})->name('interview-questions');
Route::get('/offer_approvals', function () {
    return view('offer_approvals');
})->name('offer_approvals');
Route::get('/experiance-level', function () {
    return view('experiance-level');
})->name('experiance-level');
Route::get('/candidates', function () {
    return view('candidates');
})->name('candidates');
Route::get('/schedule-timing', function () {
    return view('schedule-timing');
})->name('schedule-timing');
Route::get('/apptitude-result', function () {
    return view('apptitude-result');
})->name('apptitude-result');
Route::get('/toxbox-setting', function () {
    return view('toxbox-setting');
})->name('toxbox-setting');
Route::get('/cron-setting', function () {
    return view('cron-setting');
})->name('cron-setting');
Route::get('/performance-setting', function () {
    return view('performance-setting');
})->name('performance-setting');
Route::get('/approval-setting', function () {
    return view('approval-setting');
})->name('approval-setting');
Route::get('/user-all-jobs', function () {
    return view('user-all-jobs');
})->name('user-all-jobs');
Route::get('/saved-jobs', function () {
    return view('saved-jobs');
})->name('saved-jobs');
Route::get('/applied-jobs', function () {
    return view('applied-jobs');
})->name('applied-jobs');
Route::get('/interviewing', function () {
    return view('interviewing');
})->name('interviewing');
Route::get('/offered-jobs', function () {
    return view('offered-jobs');
})->name('offered-jobs');
Route::get('/visited-jobs', function () {
    return view('visited-jobs');
})->name('visited-jobs');
Route::get('/archived-jobs', function () {
    return view('archived-jobs');
})->name('archived-jobs');
Route::get('/sub-category', function () {
    return view('sub-category');
})->name('sub-category');
Route::get('/job-aptitude', function () {
    return view('job-aptitude');
})->name('job-aptitude');
Route::get('/questions', function () {
    return view('questions');
})->name('questions');
Route::get('/ui-alerts', function () {
    return view('ui-alerts');
})->name('ui-alerts');
Route::get('/ui-accordion', function () {
    return view('ui-accordion');
})->name('ui-accordion');
Route::get('/ui-avatar', function () {
    return view('ui-avatar');
})->name('ui-avatar');
Route::get('/ui-badges', function () {
    return view('ui-badges');
})->name('ui-badges');
Route::get('/ui-borders', function () {
    return view('ui-borders');
})->name('ui-borders');
Route::get('/ui-buttons', function () {
    return view('ui-buttons');
})->name('ui-buttons');
Route::get('/ui-buttons-group', function () {
    return view('ui-buttons-group');
})->name('ui-buttons-group');
Route::get('/ui-breadcrumb', function () {
    return view('ui-breadcrumb');
})->name('ui-breadcrumb');
Route::get('/ui-cards', function () {
    return view('ui-cards');
})->name('ui-cards');
Route::get('/ui-carousel', function () {
    return view('ui-carousel');
})->name('ui-carousel');
Route::get('/ui-colors', function () {
    return view('ui-colors');
})->name('ui-colors');
Route::get('/ui-dropdowns', function () {
    return view('ui-dropdowns');
})->name('ui-dropdowns');
Route::get('/ui-grid', function () {
    return view('ui-grid');
})->name('ui-grid');
Route::get('/ui-images', function () {
    return view('ui-images');
})->name('ui-images');
Route::get('/ui-lightbox', function () {
    return view('ui-lightbox');
})->name('ui-lightbox');
Route::get('/ui-media', function () {
    return view('ui-media');
})->name('ui-media');
Route::get('/ui-modals', function () {
    return view('ui-modals');
})->name('ui-modals');
Route::get('/ui-offcanvas', function () {
    return view('ui-offcanvas');
})->name('ui-offcanvas');
Route::get('/ui-pagination', function () {
    return view('ui-pagination');
})->name('ui-pagination');
Route::get('/ui-popovers', function () {
    return view('ui-popovers');
})->name('ui-popovers');
Route::get('/ui-progress', function () {
    return view('ui-progress');
})->name('ui-progress');
Route::get('/ui-placeholders', function () {
    return view('ui-placeholders');
})->name('ui-placeholders');
Route::get('/ui-rangeslider', function () {
    return view('ui-rangeslider');
})->name('ui-rangeslider');
Route::get('/ui-spinner', function () {
    return view('ui-spinner');
})->name('ui-spinner');
Route::get('/ui-sweetalerts', function () {
    return view('ui-sweetalerts');
})->name('ui-sweetalerts');
Route::get('/ui-nav-tabs', function () {
    return view('ui-nav-tabs');
})->name('ui-nav-tabs');
Route::get('/ui-toasts', function () {
    return view('ui-toasts');
})->name('ui-toasts');
Route::get('/ui-tooltips', function () {
    return view('ui-tooltips');
})->name('ui-tooltips');
Route::get('/ui-typography', function () {
    return view('ui-typography');
})->name('ui-typography');
Route::get('/ui-video', function () {
    return view('ui-video');
})->name('ui-video');
Route::get('/ui-ribbon', function () {
    return view('ui-ribbon');
})->name('ui-ribbon');
Route::get('/ui-clipboard', function () {
    return view('ui-clipboard');
})->name('ui-clipboard');
Route::get('/ui-drag-drop', function () {
    return view('ui-drag-drop');
})->name('ui-drag-drop');
Route::get('/ui-rating', function () {
    return view('ui-rating');
})->name('ui-rating');
Route::get('/ui-text-editor', function () {
    return view('ui-text-editor');
})->name('ui-text-editor');
Route::get('/ui-counter', function () {
    return view('ui-counter');
})->name('ui-counter');
Route::get('/ui-scrollbar', function () {
    return view('ui-scrollbar');
})->name('ui-scrollbar');
Route::get('/ui-notification', function () {
    return view('ui-notification');
})->name('ui-notification');
Route::get('/ui-stickynote', function () {
    return view('ui-stickynote');
})->name('ui-stickynote');
Route::get('/ui-timeline', function () {
    return view('ui-timeline');
})->name('ui-timeline');
Route::get('/horizontal-timeline', function () {
    return view('horizontal-timeline');
})->name('horizontal-timeline');
Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');
Route::get('/chart-apex', function () {
    return view('chart-apex');
})->name('chart-apex');
Route::get('/chart-js', function () {
    return view('chart-js');
})->name('chart-js');
Route::get('/chart-morris', function () {
    return view('chart-morris');
})->name('chart-morris');
Route::get('/chart-flot', function () {
    return view('chart-flot');
})->name('chart-flot');
Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');
Route::get('/chart-c3', function () {
    return view('chart-c3');
})->name('chart-c3');
Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
})->name('icon-fontawesome');
Route::get('/icon-feather', function () {
    return view('icon-feather');
})->name('icon-feather');
Route::get('/icon-ionic', function () {
    return view('icon-ionic');
})->name('icon-ionic');
Route::get('/icon-material', function () {
    return view('icon-material');
})->name('icon-material');
Route::get('/icon-pe7', function () {
    return view('icon-pe7');
})->name('icon-pe7');
Route::get('/icon-simpleline', function () {
    return view('icon-simpleline');
})->name('icon-simpleline');
Route::get('/icon-themify', function () {
    return view('icon-themify');
})->name('icon-themify');
Route::get('/icon-weather', function () {
    return view('icon-weather');
})->name('icon-weather');
Route::get('/icon-typicon', function () {
    return view('icon-typicon');
})->name('icon-typicon');
Route::get('/icon-flag', function () {
    return view('icon-flag');
})->name('icon-flag');
Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');
Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/contact-details', function () {
    return view('contact-details');
})->name('contact-details');
Route::get('/contact-grid', function () {
    return view('contact-grid');
})->name('contact-grid');
Route::get('/contact-list', function () {
    return view('contact-list');
})->name('contact-list');
Route::get('/deals-dashboard', function () {
    return view('deals-dashboard');
})->name('deals-dashboard');
Route::get('/analytics', function () {
    return view('analytics');
})->name('analytics');
Route::get('/companies', function () {
    return view('companies');
})->name('companies');
Route::get('/companies-grid', function () {
    return view('companies-grid');
})->name('companies-grid');
Route::get('/company-details', function () {
    return view('company-details');
})->name('company-details');
Route::get('/leads-dashboard', function () {
    return view('leads-dashboard');
})->name('leads-dashboard');
Route::get('/leads-details', function () {
    return view('leads-details');
})->name('leads-details');
Route::get('/leads-kanban', function () {
    return view('leads-kanban');
})->name('leads-kanban');
Route::get('/under-maintenance', function () {
    return view('under-maintenance');
})->name('under-maintenance');
Route::get('/pipeline', function () {
    return view('pipeline');
})->name('pipeline');
Route::get('/deals', function () {
    return view('deals');
})->name('deals');
Route::get('/deals-details', function () {
    return view('deals-details');
})->name('deals-details');
Route::get('/deals-kanban', function () {
    return view('deals-kanban');
})->name('deals-kanban');


