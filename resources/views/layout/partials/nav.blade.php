@if (
    !Route::is(['chat','voice-call','video-call','outgoing-call','incoming-call','inbox','tasks',
    'settings','localization','theme-settings','roles-permissions','email-settings','performance-setting','approval-setting','invoice-settings','salary-settings','notifications-settings','change-password','leave-type','toxbox-setting','cron-setting','compose']))

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <nav class="greedys sidebar-horizantal">
                <ul class="list-inline-item list-unstyled links">
                    <li class="menu-title"> 
                        <span>Main</span>
                    </li>
                    <li class="submenu" >
                        <a href="#"><i class="la la-dashcube"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a   class="{{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{ url('admin-dashboard') }}">Admin Dashboard</a></li>
                            <li><a   class="{{ Request::is('employee-dashboard') ? 'active' : '' }}" href="{{url('employee-dashboard')}}">Employee Dashboard</a></li>
                            <li><a   class="{{ Request::is('deals-dashboard') ? 'active' : '' }}" href="{{url('deals-dashboard')}}">Deals Dashboard</a></li>
                            <li><a   class="{{ Request::is('leads-dashboard') ? 'active' : '' }}" href="{{url('leads-dashboard')}}">Leads Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a   class="{{ Request::is('chat') ? 'active' : '' }}" href="{{ url('chat')}}">Chat</a></li>
                            <li class="submenu">
                                <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a   class="{{ Request::is('voice-call') ? 'active' : '' }}"href="{{ url('voice-call')}}">Voice Call</a></li>
                                    <li><a   class="{{ Request::is('video-call') ? 'active' : '' }}" href="{{ url('video-call')}}">Video Call</a></li>
                                    <li><a  class="{{ Request::is('outgoing-call') ? 'active' : '' }}" href="{{ url('outgoing-call')}}">Outgoing Call</a></li>
                                    <li><a   class="{{ Request::is('incoming-call') ? 'active' : '' }}"  href="{{ url('incoming-call')}}">Incoming Call</a></li>
                                </ul>
                            </li>
                            <li><a class="{{ Request::is('events') ? 'active' : '' }}" href="{{ url('events')}}">Calendar</a></li>
                            <li><a  class="{{ Request::is('contacts') ? 'active' : '' }}" href="{{ url('contacts')}}">Contacts</a></li>
                            <li><a  class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{ url('inbox')}}">Email</a></li>
                            <li><a   class="{{ Request::is('file-manager') ? 'active' : '' }}" href="{{ url('file-manager')}}">File Manager</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>Employees</span>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="{{ Request::is('employees','employees-list') ? 'active' : '' }}" href="{{ url('employees')}}">All Employees</a></li>
                            <li><a  class="{{ Request::is('holidays') ? 'active' : '' }}" href="{{ url('holidays')}}">Holidays</a></li>
                            <li><a   class="{{ Request::is('leaves') ? 'active' : '' }}" href="{{ url('leaves')}}">Leaves (Admin) <span class="badge rounded-pill bg-primary float-end">1</span></a></li>
                            <li><a class="{{ Request::is('leaves-employee') ? 'active' : '' }}" href="{{ url('leaves-employee')}}">Leaves (Employee)</a></li>
                            <li><a  class="{{ Request::is('leave-settings') ? 'active' : '' }}" href="{{ url('leave-settings')}}">Leave Settings</a></li>
                            <li><a   class="{{ Request::is('attendance') ? 'active' : '' }}" href="{{ url('attendance')}}">Attendance (Admin)</a></li>
                            <li><a  class="{{ Request::is('attendance-employee') ? 'active' : '' }}" href="{{ url('attendance-employee')}}">Attendance (Employee)</a></li>
                            <li><a    class="{{ Request::is('departments') ? 'active' : '' }}" href="{{ url('departments')}}">Departments</a></li>
                            <li><a  class="{{ Request::is('designations') ? 'active' : '' }}" href="{{ url('designations')}}">Designations</a></li>
                            <li><a  class="{{ Request::is('timesheet') ? 'active' : '' }}" href="{{ url('timesheet')}}">Timesheet</a></li>
                            <li><a class="{{ Request::is('shift-scheduling','shift-list') ? 'active' : '' }}" href="{{ url('shift-scheduling')}}">Shift & Schedule</a></li>
                            <li><a  class="{{ Request::is('overtime') ? 'active' : '' }}" href="{{ url('overtime')}}">Overtime</a></li>
                        </ul>
                    </li>
                    <li> 
                        <a class="{{ Request::is('clients','clients-list') ? 'active' : '' }}" href="{{ url('clients')}}"><i class="la la-users"></i> <span>Clients</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a   class="{{ Request::is('projects','project-list') ? 'active' : '' }}" href="{{ url('projects')}}">Projects</a></li>
                            <li><a   class="{{ Request::is('tasks') ? 'active' : '' }}" href="{{ url('tasks')}}">Tasks</a></li>
                            <li><a  class="{{ Request::is('task-board') ? 'active' : '' }}" href="{{ url('task-board')}}">Task Board</a></li>
                        </ul>
                    </li>
                    <li class="submenu"> 
                        <a href="#"><i class="la la-ticket"></i> <span>Crm</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="{{ Request::is('contact-list','contact-grid','contact-details') ? 'active subdrop' : '' }}">
                                <a href="{{ url('contact-list')}}"> Contacts</a>
                            </li>
                            <li class="{{ Request::is('companies','companies-grid','company-details') ? 'active' : '' }}">
                                <a href="{{ url('companies')}}">Companies</a>
                            </li>
                            <li class="{{ Request::is('deals','deals-details','deals-kanban') ? 'active' : '' }}">
                                <a href="{{ url('deals')}}">  Deals</a>
                            </li>
                            <li class="{{ Request::is('leads','leads-details','leads-kanban') ? 'active' : '' }}">
                                <a href="{{ url('leads')}}"> Leads </a>
                            </li>
                            <li class="{{ Request::is('pipeline') ? 'active' : '' }}">
                                <a href="{{ url('pipeline')}}">Pipeline </a>
                            </li>
                            <li class="{{ Request::is('analytics') ? 'active' : '' }}">
                                <a href="{{ url('analytics')}}">Analytics</a>
                            </li>
                            <li class="{{ Request::is('activities') ? 'active' : '' }}">
                                <a href="{{ url('activities')}}"> Activities </a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu"> 
                        <a href="#"><i class="la la-ticket"></i> <span>Tickets</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a   class="{{ Request::is('tickets') ? 'active' : '' }}" href="{{ url('tickets')}}">Tickets</a></li>
                            <li><a class="{{ Request::is('ticket-details') ? 'active' : '' }}" href="{{ url('ticket-details')}}">Tickets Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>HR</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="{{ Request::is('estimates','create-estimate','edit-estimate') ? 'active' : '' }}" href="{{ url('estimates')}}">Estimates</a></li>
                            <li><a  class="{{ Request::is('invoices','create-invoice','edit-invoice') ? 'active' : '' }}" href="{{ url('invoices')}}">Invoices</a></li>
                            <li><a class="{{ Request::is('payments') ? 'active' : '' }}" href="{{ url('payments')}}">Payments</a></li>
                            <li><a  class="{{ Request::is('expenses') ? 'active' : '' }}" href="{{ url('expenses')}}">Expenses</a></li>
                            <li><a  class="{{ Request::is('provident-fund') ? 'active' : '' }}" href="{{ url('provident-fund')}}">Provident Fund</a></li>
                            <li><a  class="{{ Request::is('taxes') ? 'active' : '' }}" href="{{ url('taxes')}}">Taxes</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="viewmoremenu">More Menu</button>
                <ul class="hidden-links hidden">
                    <li class="submenu">
                        <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('categories','sub-category') ? 'active' : '' }}" href="{{ url('categories')}}">Categories</a></li>
                            <li><a  class="{{ Request::is('budgets') ? 'active' : '' }}" href="{{ url('budgets')}}">Budgets</a></li>
                            <li><a  class="{{ Request::is('budget-expenses') ? 'active' : '' }}" href="{{ url('budget-expenses')}}">Budget Expenses</a></li>
                            <li><a  class="{{ Request::is('budget-revenues') ? 'active' : '' }}" href="{{ url('budget-revenues')}}">Budget Revenues</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('salary') ? 'active' : '' }}" href="{{ url('salary')}}"> Employee Salary </a></li>
                            <li><a  class="{{ Request::is('salary-view') ? 'active' : '' }}" href="{{ url('salary-view')}}"> Payslip </a></li>
                            <li><a  class="{{ Request::is('payroll-items') ? 'active' : '' }}" href="{{ url('payroll-items')}}"> Payroll Items </a></li>
                        </ul>
                    </li>
                    <li> 
                        <a class="{{ Request::is('policies') ? 'active' : '' }}" href="{{ url('policies')}}"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('expense-reports') ? 'active' : '' }}" href="{{ url('expense-reports')}}"> Expense Report </a></li>
                            <li><a  class="{{ Request::is('invoice-reports') ? 'active' : '' }}" href="{{ url('invoice-reports')}}"> Invoice Report </a></li>
                            <li><a  class="{{ Request::is('payments-reports') ? 'active' : '' }}" href="{{ url('payments-reports')}}"> Payments Report </a></li>
                            <li><a  class="{{ Request::is('project-reports') ? 'active' : '' }}" href="{{ url('project-reports')}}"> Project Report </a></li>
                            <li><a  class="{{ Request::is('task-reports') ? 'active' : '' }}" href="{{ url('task-reports')}}"> Task Report </a></li>
                            <li><a  class="{{ Request::is('user-reports') ? 'active' : '' }}" href="{{ url('user-reports')}}"> User Report </a></li>
                            <li><a  class="{{ Request::is('employee-reports') ? 'active' : '' }}" href="{{ url('employee-reports')}}"> Employee Report </a></li>
                            <li><a  class="{{ Request::is('payslip-reports') ? 'active' : '' }}" href="{{ url('payslip-reports')}}"> Payslip Report </a></li>
                            <li><a  class="{{ Request::is('attendance-reports') ? 'active' : '' }}" href="{{ url('attendance-reports')}}"> Attendance Report </a></li>
                            <li><a  class="{{ Request::is('leave-reports') ? 'active' : '' }}" href="{{ url('leave-reports')}}"> Leave Report </a></li>
                            <li><a  class="{{ Request::is('daily-reports') ? 'active' : '' }}" href="{{ url('daily-reports')}}"> Daily Report </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>Performance</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('performance-indicator') ? 'active' : '' }}" href="{{ url('performance-indicator')}}"> Performance Indicator </a></li>
                            <li><a  class="{{ Request::is('performance') ? 'active' : '' }}" href="{{ url('performance')}}"> Performance Review </a></li>
                            <li><a  class="{{ Request::is('performance-appraisal') ? 'active' : '' }}" href="{{ url('performance-appraisal')}}"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('goal-tracking') ? 'active' : '' }}" href="{{ url('goal-tracking')}}"> Goal List </a></li>
                            <li><a  class="{{ Request::is('goal-type') ? 'active' : '' }}" href="{{ url('goal-type')}}"> Goal Type </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('training') ? 'active' : '' }}" href="{{ url('training')}}"> Training List </a></li>
                            <li><a  class="{{ Request::is('trainers') ? 'active' : '' }}" href="{{ url('trainers')}}"> Trainers</a></li>
                            <li><a  class="{{ Request::is('training-type') ? 'active' : '' }}" href="{{ url('training-type')}}"> Training Type </a></li>
                        </ul>
                    </li>
                    <li><a  class="{{ Request::is('promotion') ? 'active' : '' }}" href="{{ url('promotion')}}"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                    <li><a  class="{{ Request::is('resignation') ? 'active' : '' }}" href="{{ url('resignation')}}"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
                    <li><a  class="{{ Request::is('termination') ? 'active' : '' }}" href="{{ url('termination')}}"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
                    <li class="menu-title"> 
                        <span>Administration</span>
                    </li>
                    <li> 
                        <a  class="{{ Request::is('assets1') ? 'active' : '' }}" href="{{ url('assets1')}}"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('user-dashboard','user-all-jobs','saved-jobs','applied-jobs','interviewing','offered-jobs','visited-jobs','archived-jobs','job-aptitude','questions') ? 'active' : '' }}" href="{{ url('user-dashboard')}}"> User Dasboard </a></li>
                            <li><a  class="{{ Request::is('jobs-dashboard') ? 'active' : '' }}" href="{{ url('jobs-dashboard')}}"> Jobs Dasboard </a></li>
                            <li><a  class="{{ Request::is('jobs') ? 'active' : '' }}" href="{{ url('jobs')}}"> Manage Jobs </a></li>
                            <li><a  class="{{ Request::is('manage-resumes') ? 'active' : '' }}" href="{{ url('manage-resumes')}}"> Manage Resumes </a></li>
                            <li><a  class="{{ Request::is('shortlist-candidates') ? 'active' : '' }}" href="{{ url('shortlist-candidates')}}"> Shortlist Candidates </a></li>
                            <li><a  class="{{ Request::is('interview-questions') ? 'active' : '' }}" href="{{ url('interview-questions')}}"> Interview Questions </a></li>
                            <li><a  class="{{ Request::is('offer_approvals') ? 'active' : '' }}" href="{{ url('offer_approvals')}}"> Offer Approvals </a></li>
                            <li><a  class="{{ Request::is('experiance-level') ? 'active' : '' }}" href="{{ url('experiance-level')}}"> Experience Level </a></li>
                            <li><a  class="{{ Request::is('candidates') ? 'active' : '' }}" href="{{ url('candidates')}}"> Candidates List </a></li>
                            <li><a  class="{{ Request::is('schedule-timing') ? 'active' : '' }}" href="{{ url('schedule-timing')}}"> Schedule timing </a></li>
                            <li><a  class="{{ Request::is('apptitude-result') ? 'active' : '' }}" href="{{ url('apptitude-result')}}"> Aptitude Results </a></li>
                        </ul>
                    </li>
                    <li> 
                        <a  class="{{ Request::is('knowledgebase','knowledgebase-view') ? 'active' : '' }}" href="{{ url('knowledgebase')}}"><i class="la la-question"></i> <span>Knowledgebase</span></a>
                    </li>
                    <li> 
                        <a class="{{ Request::is('activities') ? 'active' : '' }}" href="{{ url('activities')}}"><i class="la la-bell"></i> <span>Activities</span></a>
                    </li>
                    <li> 
                        <a  class="{{ Request::is('users') ? 'active' : '' }}"href="{{ url('users')}}"><i class="la la-user-plus"></i> <span>Users</span></a>
                    </li>
                    <li> 
                        <a  class="{{ Request::is('settings','localization','theme-settings','roles-permissions','email-settings','performance-setting','approval-setting','invoice-settings','salary-settings','notifications-settings','change-password','leave-type','toxbox-setting','cron-setting') ? 'active' : '' }}"href="{{ url('settings')}}"><i class="la la-cog"></i> <span>Settings</span></a>
                    </li>
                    <li class="menu-title"> 
                        <span>Pages</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('profile','user-asset-details') ? 'active' : '' }}" href="{{ url('profile')}}"> Employee Profile </a></li>
                            <li><a  class="{{ Request::is('client-profile') ? 'active' : '' }}" href="{{ url('client-profile')}}"> Client Profile </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index')}}"> Login </a></li>
                            <li><a  class="{{ Request::is('register') ? 'active' : '' }}" href="{{ url('register')}}"> Register </a></li>
                            <li><a  class="{{ Request::is('forgot-password') ? 'active' : '' }}" href="{{ url('forgot-password')}}"> Forgot Password </a></li>
                            <li><a  class="{{ Request::is('otp') ? 'active' : '' }}" href="{{ url('otp')}}"> OTP </a></li>
                            <li><a  class="{{ Request::is('lock-screen') ? 'active' : '' }}" href="{{ url('lock-screen')}}"> Lock Screen </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('error-404') ? 'active' : '' }}" href="{{ url('error-404')}}">404 Error </a></li>
                            <li><a  class="{{ Request::is('error-500') ? 'active' : '' }}" href="{{ url('error-500')}}">500 Error </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('subscriptions') ? 'active' : '' }}" href="{{ url('subscriptions')}}"> Subscriptions (Admin) </a></li>
                            <li><a  class="{{ Request::is('subscriptions-company') ? 'active' : '' }}" href="{{ url('subscriptions-company')}}"> Subscriptions (Company) </a></li>
                            <li><a  class="{{ Request::is('subscribed-companies') ? 'active' : '' }}" href="{{ url('subscribed-companies')}}"> Subscribed Companies</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('search') ? 'active' : '' }}" href="{{ url('search')}}"> Search </a></li>
                            <li><a  class="{{ Request::is('faq') ? 'active' : '' }}" href="{{ url('faq')}}"> FAQ </a></li>
                            <li><a  class="{{ Request::is('terms') ? 'active' : '' }}" href="{{ url('terms')}}"> Terms </a></li>
                            <li><a  class="{{ Request::is('privacy-policy') ? 'active' : '' }}" href="{{ url('privacy-policy')}}"> Privacy Policy </a></li>
                            <li><a  class="{{ Request::is('blank-page') ? 'active' : '' }}" href="{{ url('blank-page')}}"> Blank Page </a></li>
                            <li><a  class="{{ Request::is('coming-soon') ? 'active' : '' }}" href="{{ url('coming-soon')}}"> Coming Soon </a></li>
                            <li><a  class="{{ Request::is('under-maintenance') ? 'active' : '' }}" href="{{ url('under-maintenance')}}"> Under Maintanance </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>UI Interface</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fa-brands fa-get-pocket"></i> <span>Base UI</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('ui-alerts') ? 'active' : '' }}" href="{{ url('ui-alerts')}}">Alerts</a></li>
                            <li><a  class="{{ Request::is('ui-accordion') ? 'active' : '' }}" href="{{ url('ui-accordion')}}">Accordion</a></li>
                            <li><a  class="{{ Request::is('ui-avatar') ? 'active' : '' }}" href="{{ url('ui-avatar')}}">Avatar</a></li>
                            <li><a  class="{{ Request::is('ui-badges') ? 'active' : '' }}" href="{{ url('ui-badges')}}">Badges</a></li>
                            <li><a  class="{{ Request::is('ui-borders') ? 'active' : '' }}" href="{{ url('ui-borders')}}">Border</a></li>
                            <li><a  class="{{ Request::is('ui-buttons') ? 'active' : '' }}" href="{{ url('ui-buttons')}}">Buttons</a></li>
                            <li><a  class="{{ Request::is('ui-buttons-group') ? 'active' : '' }}" href="{{ url('ui-buttons-group')}}">Button Group</a></li>
                            <li><a  class="{{ Request::is('ui-breadcrumb') ? 'active' : '' }}" href="{{ url('ui-breadcrumb')}}">Breadcrumb</a></li>
                            <li><a  class="{{ Request::is('ui-cards') ? 'active' : '' }}" href="{{ url('ui-cards')}}">Card</a></li>
                            <li><a  class="{{ Request::is('ui-carousel') ? 'active' : '' }}" href="{{ url('ui-carousel')}}">Carousel</a></li>
                            <li><a  class="{{ Request::is('ui-colors') ? 'active' : '' }}" href="{{ url('ui-colors')}}">Colors</a></li>
                            <li><a  class="{{ Request::is('ui-dropdowns') ? 'active' : '' }}" href="{{ url('ui-dropdowns')}}">Dropdowns</a></li>
                            <li><a  class="{{ Request::is('ui-grid') ? 'active' : '' }}" href="{{ url('ui-grid')}}">Grid</a></li>
                            <li><a  class="{{ Request::is('ui-images') ? 'active' : '' }}" href="{{ url('ui-images')}}">Images</a></li>
                            <li><a  class="{{ Request::is('ui-lightbox') ? 'active' : '' }}" href="{{ url('ui-lightbox')}}">Lightbox</a></li>
                            <li><a  class="{{ Request::is('ui-media') ? 'active' : '' }}" href="{{ url('ui-media')}}">Media</a></li>
                            <li><a  class="{{ Request::is('ui-modals') ? 'active' : '' }}" href="{{ url('ui-modals')}}">Modals</a></li>
                            <li><a  class="{{ Request::is('ui-notification') ? 'active' : '' }}" href="{{ url('ui-notification')}}">Notification</a></li>
                            <li><a  class="{{ Request::is('ui-offcanvas') ? 'active' : '' }}" href="{{ url('ui-offcanvas')}}">Offcanvas</a></li>
                            <li><a  class="{{ Request::is('ui-pagination') ? 'active' : '' }}" href="{{ url('ui-pagination')}}">Pagination</a></li>
                            <li><a  class="{{ Request::is('ui-popovers') ? 'active' : '' }}" href="{{ url('ui-popovers')}}">Popovers</a></li>
                            <li><a  class="{{ Request::is('ui-progress') ? 'active' : '' }}" href="{{ url('ui-progress')}}">Progress</a></li>
                            <li><a  class="{{ Request::is('ui-placeholders') ? 'active' : '' }}" href="{{ url('ui-placeholders')}}">Placeholders</a></li>
                            <li><a  class="{{ Request::is('ui-rangeslider') ? 'active' : '' }}" href="{{ url('ui-rangeslider')}}">Range Slider</a></li>
                            <li><a  class="{{ Request::is('ui-spinner') ? 'active' : '' }}" href="{{ url('ui-spinner')}}">Spinner</a></li>
                            <li><a  class="{{ Request::is('ui-sweetalerts') ? 'active' : '' }}" href="{{ url('ui-sweetalerts')}}">Sweet Alerts</a></li>
                            <li><a  class="{{ Request::is('ui-nav-tabs') ? 'active' : '' }}" href="{{ url('ui-nav-tabs')}}">Tabs</a></li>
                            <li><a  class="{{ Request::is('ui-toasts') ? 'active' : '' }}" href="{{ url('ui-toasts')}}">Toasts</a></li>
                            <li><a  class="{{ Request::is('ui-tooltips') ? 'active' : '' }}" href="{{ url('ui-tooltips')}}">Tooltips</a></li>
                            <li><a  class="{{ Request::is('ui-typography') ? 'active' : '' }}" href="{{ url('ui-typography')}}">Typography</a></li>
                            <li><a  class="{{ Request::is('ui-video') ? 'active' : '' }}" href="{{ url('ui-video')}}">Video</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dropbox"></i> <span> Advanced UI </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('ui-ribbon') ? 'active' : '' }}" href="{{ url('ui-ribbon')}}">Ribbon</a></li>
                            <li><a  class="{{ Request::is('ui-clipboard') ? 'active' : '' }}" href="{{ url('ui-clipboard')}}">Clipboard</a></li>
                            <li><a  class="{{ Request::is('ui-drag-drop') ? 'active' : '' }}" href="{{ url('ui-drag-drop')}}">Drag & Drop</a></li>
                            <li><a  class="{{ Request::is('ui-rangeslider') ? 'active' : '' }}" href="{{ url('ui-rangeslider')}}">Range Slider</a></li>
                            <li><a  class="{{ Request::is('ui-rating') ? 'active' : '' }}" href="{{ url('ui-rating')}}">Rating</a></li>
                            <li><a  class="{{ Request::is('ui-text-editor') ? 'active' : '' }}" href="{{ url('ui-text-editor')}}">Text Editor</a></li>
                            <li><a  class="{{ Request::is('ui-counter') ? 'active' : '' }}" href="{{ url('ui-counter')}}">Counter</a></li>
                            <li><a  class="{{ Request::is('ui-scrollbar') ? 'active' : '' }}" href="{{ url('ui-scrollbar')}}">Scrollbar</a></li>
                            <li><a  class="{{ Request::is('ui-stickynote') ? 'active' : '' }}" href="{{ url('ui-stickynote')}}">Sticky Note</a></li>
                            <li><a  class="{{ Request::is('ui-timeline') ? 'active' : '' }}" href="{{ url('ui-timeline')}}">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-chart-bar"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="{{ url('chart-apex')}}">Apex Charts</a></li>
                            <li><a  class="{{ Request::is('chart-js') ? 'active' : '' }}" href="{{ url('chart-js')}}">Chart Js</a></li>
                            <li><a  class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="{{ url('chart-morris')}}">Morris Charts</a></li>
                            <li><a  class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="{{ url('chart-flot')}}">Flot Charts</a></li>
                            <li><a  class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="{{ url('chart-peity')}}">Peity Charts</a></li>
                            <li><a  class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="{{ url('chart-c3')}}">C3 Charts</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-icons"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="{{ url('icon-fontawesome')}}">Fontawesome Icons</a></li>
                            <li><a  class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="{{ url('icon-feather')}}">Feather Icons</a></li>
                            <li><a  class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="{{ url('icon-ionic')}}">Ionic Icons</a></li>
                            <li><a  class="{{ Request::is('icon-material') ? 'active' : '' }}" href="{{ url('icon-material')}}">Material Icons</a></li>
                            <li><a  class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="{{ url('icon-pe7')}}">Pe7 Icons</a></li>
                            <li><a  class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="{{ url('icon-simpleline')}}">Simpleline Icons</a></li>
                            <li><a  class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="{{ url('icon-themify')}}">Themify Icons</a></li>
                            <li><a  class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="{{ url('icon-weather')}}">Weather Icons</a></li>
                            <li><a  class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="{{ url('icon-typicon')}}">Typicon Icons</a></li>
                            <li><a  class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="{{ url('icon-flag')}}">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs')}}">Basic Inputs </a></li>
                            <li><a  class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups')}}">Input Groups </a></li>
                            <li><a  class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal')}}">Horizontal Form </a></li>
                            <li><a  class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical')}}"> Vertical Form </a></li>
                            <li><a  class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask')}}"> Form Mask </a></li>
                            <li><a  class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation')}}"> Form Validation </a></li>
                            <li><a  class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2')}}">Form Select2 </a></li>
                            <li><a  class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload')}}">File Upload </a></li>
                            <li><a  class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="{{ url('horizontal-timeline')}}">Horizontal Timeline</a></li>
                            <li><a  class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="{{ url('form-wizard')}}">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a  class="{{ Request::is('tables-basic') ? 'active' : '' }}" href="{{ url('tables-basic')}}">Basic Tables </a></li>
                            <li><a  class="{{ Request::is('data-tables') ? 'active' : '' }}" href="{{ url('data-tables')}}">Data Table </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span>Extras</span>
                    </li>
                    <li> 
                        <a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
                    </li>
                    <li> 
                        <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ms-auto">v4.0</span></a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a  href="javascript:void(0);"><span>Level 2</span></a></li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a  href="javascript:void(0);">Level 3</a></li>
                                            <li><a   href="javascript:void(0);">Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a  href="javascript:void(0);"> <span>Level 2</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <ul class="sidebar-vertical">
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashcube"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{ url('admin-dashboard')}}" class="active">Admin Dashboard</a></li>
                        <li><a  class="{{ Request::is('employee-dashboard') ? 'active' : '' }}"  href="{{ url('employee-dashboard')}}">Employee Dashboard</a></li>
                        <li><a  class="{{ Request::is('deals-dashboard') ? 'active' : '' }}" href="{{ url('deals-dashboard')}}">Deals Dashboard</a></li>
                        <li><a  class="{{ Request::is('leads-dashboard') ? 'active' : '' }}" href="{{ url('leads-dashboard')}}">Leads Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{ url('chat')}}">Chat</a></li>
                        <li class="submenu">
                            <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a  class="{{ Request::is('voice-call') ? 'active' : '' }}" href="{{ url('voice-call')}}">Voice Call</a></li>
                                <li><a  class="{{ Request::is('video-call') ? 'active' : '' }}" href="{{ url('video-call')}}">Video Call</a></li>
                                <li><a  class="{{ Request::is('outgoing-call') ? 'active' : '' }}" href="{{ url('outgoing-call')}}">Outgoing Call</a></li>
                                <li><a  class="{{ Request::is('incoming-call') ? 'active' : '' }}" href="{{ url('incoming-call')}}">Incoming Call</a></li>
                            </ul>
                        </li>
                        <li><a  class="{{ Request::is('events') ? 'active' : '' }}" href="{{ url('events')}}">Calendar</a></li>
                        <li><a  class="{{ Request::is('contacts') ? 'active' : '' }}" href="{{ url('contacts')}}">Contacts</a></li>
                        <li><a  class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{ url('inbox')}}">Email</a></li>
                        <li><a  class="{{ Request::is('file-manager') ? 'active' : '' }}" href="{{ url('file-manager')}}">File Manager</a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>Employees</span>
                </li>
                <li class="submenu">
                    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('employees','employees-list') ? 'active' : '' }}" href="{{ url('employees')}}">All Employees</a></li>
                        <li><a  class="{{ Request::is('holidays') ? 'active' : '' }}" href="{{ url('holidays')}}">Holidays</a></li>
                        <li><a  class="{{ Request::is('leaves') ? 'active' : '' }}" href="{{ url('leaves')}}">Leaves (Admin) <span class="badge rounded-pill bg-primary float-end">1</span></a></li>
                        <li><a  class="{{ Request::is('leaves-employee') ? 'active' : '' }}" href="{{ url('leaves-employee')}}">Leaves (Employee)</a></li>
                        <li><a  class="{{ Request::is('leave-settings') ? 'active' : '' }}" href="{{ url('leave-settings')}}">Leave Settings</a></li>
                        <li><a  class="{{ Request::is('attendance') ? 'active' : '' }}" href="{{ url('attendance')}}">Attendance (Admin)</a></li>
                        <li><a  class="{{ Request::is('attendance-employee') ? 'active' : '' }}" href="{{ url('attendance-employee')}}">Attendance (Employee)</a></li>
                        <li><a  class="{{ Request::is('departments') ? 'active' : '' }}" href="{{ url('departments')}}">Departments</a></li>
                        <li><a  class="{{ Request::is('designations') ? 'active' : '' }}" href="{{ url('designations')}}">Designations</a></li>
                        <li><a  class="{{ Request::is('timesheet') ? 'active' : '' }}" href="{{ url('timesheet')}}">Timesheet</a></li>
                        <li><a  class="{{ Request::is('shift-scheduling','shift-list') ? 'active' : '' }}" href="{{ url('shift-scheduling')}}">Shift & Schedule</a></li>
                        <li><a  class="{{ Request::is('overtime') ? 'active' : '' }}" href="{{ url('overtime')}}">Overtime</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('clients','clients-list') ? 'active' : '' }}"> 
                    <a href="{{ url('clients')}}"><i class="la la-users"></i> <span>Clients</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('projects','project-list') ? 'active' : '' }}" href="{{ url('projects')}}">Projects</a></li>
                        <li><a  class="{{ Request::is('tasks') ? 'active' : '' }}" href="{{ url('tasks')}}">Tasks</a></li>
                        <li><a  class="{{ Request::is('task-board') ? 'active' : '' }}" href="{{ url('task-board')}}">Task Board</a></li>
                    </ul>
                </li>
                <li class="submenu"> 
                    <a href="#"><i class="la la-ticket"></i> <span>Tickets</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('tickets') ? 'active' : '' }}" href="{{ url('tickets')}}">Tickets</a></li>
                        <li><a  class="{{ Request::is('ticket-details') ? 'active' : '' }}" href="{{ url('ticket-details')}}">Tickets Detail</a></li> 
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>CRM</span>
                    <small class="newly-added-features">New</small>
                </li>
                <li class="{{ Request::is('contact-list','contact-grid','contact-details') ? 'active' : '' }}">
                    <a href="{{ url('contact-list')}}"><i class="la la-user-shield"></i> <span> Contacts </span></a>
                </li>
                <li class="{{ Request::is('companies','companies-grid','company-details') ? 'active' : '' }}">
                    <a href="{{ url('companies')}}"><i class="la la-building"></i> <span> Companies </span></a>
                </li>
                <li class="{{ Request::is('deals','deals-details','deals-kanban') ? 'active' : '' }}">
                    <a href="{{ url('deals')}}"><i class="la la-cubes"></i> <span> Deals </span></a>
                </li>
                <li class="{{ Request::is('leads','leads-details','leads-kanban') ? 'active' : '' }}">
                    <a href="{{ url('leads')}}"><i class="la la-chart-area"></i> <span> Leads </span></a>
                </li>
                <li class="{{ Request::is('pipeline') ? 'active' : '' }}">
                    <a href="{{ url('pipeline')}}"><i class="la la-exchange-alt"></i> <span> Pipeline </span></a>
                </li>
                <li class="{{ Request::is('analytics') ? 'active' : '' }}">
                    <a href="{{ url('analytics')}}"><i class="la la-dice"></i> <span> Analytics </span></a>
                </li>
                <li class="{{ Request::is('activities') ? 'active' : '' }}">
                    <a href="{{ url('activities')}}"><i class="la la-directions"></i> <span> Activities </span></a>
                </li>
                <li class="menu-title"> 
                    <span>HR</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('estimates','create-estimate','edit-estimate') ? 'active' : '' }}" href="{{ url('estimates')}}">Estimates</a></li>
                        <li><a  class="{{ Request::is('invoices','create-invoice','edit-invoice') ? 'active' : '' }}" href="{{ url('invoices')}}">Invoices</a></li>
                        <li><a  class="{{ Request::is('payments') ? 'active' : '' }}" href="{{ url('payments')}}">Payments</a></li>
                        <li><a  class="{{ Request::is('expenses') ? 'active' : '' }}" href="{{ url('expenses')}}">Expenses</a></li>
                        <li><a  class="{{ Request::is('provident-fund') ? 'active' : '' }}" href="{{ url('provident-fund')}}">Provident Fund</a></li>
                        <li><a  class="{{ Request::is('taxes') ? 'active' : '' }}" href="{{ url('taxes')}}">Taxes</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-file-alt"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('categories','sub-category') ? 'active' : '' }}" href="{{ url('categories')}}">Categories</a></li>
                        <li><a  class="{{ Request::is('budgets') ? 'active' : '' }}" href="{{ url('budgets')}}">Budgets</a></li>
                        <li><a  class="{{ Request::is('budget-expenses') ? 'active' : '' }}" href="{{ url('budget-expenses')}}">Budget Expenses</a></li>
                        <li><a  class="{{ Request::is('budget-revenues') ? 'active' : '' }}" href="{{ url('budget-revenues')}}">Budget Revenues</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-money-bill-wave"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('salary') ? 'active' : '' }}" href="{{ url('salary')}}"> Employee Salary </a></li>
                        <li><a  class="{{ Request::is('salary-view') ? 'active' : '' }}" href="{{ url('salary-view')}}"> Payslip </a></li>
                        <li><a  class="{{ Request::is('payroll-items') ? 'active' : '' }}" href="{{ url('payroll-items')}}"> Payroll Items </a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('policies') ? 'active' : '' }}"> 
                    <a href="{{ url('policies')}}"><i class="la la-file-pdf"></i> <span>Policies</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-chart-pie"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('expense-reports') ? 'active' : '' }}" href="{{ url('expense-reports')}}"> Expense Report </a></li>
                        <li><a  class="{{ Request::is('invoice-reports') ? 'active' : '' }}" href="{{ url('invoice-reports')}}"> Invoice Report </a></li>
                        <li><a  class="{{ Request::is('payments-reports') ? 'active' : '' }}" href="{{ url('payments-reports')}}"> Payments Report </a></li>
                        <li><a  class="{{ Request::is('project-reports') ? 'active' : '' }}" href="{{ url('project-reports')}}"> Project Report </a></li>
                        <li><a  class="{{ Request::is('task-reports') ? 'active' : '' }}" href="{{ url('task-reports')}}"> Task Report </a></li>
                        <li><a  class="{{ Request::is('user-reports') ? 'active' : '' }}" href="{{ url('user-reports')}}"> User Report </a></li>
                        <li><a  class="{{ Request::is('employee-reports') ? 'active' : '' }}" href="{{ url('employee-reports')}}"> Employee Report </a></li>
                        <li><a  class="{{ Request::is('payslip-reports') ? 'active' : '' }}" href="{{ url('payslip-reports')}}"> Payslip Report </a></li>
                        <li><a  class="{{ Request::is('attendance-reports') ? 'active' : '' }}" href="{{ url('attendance-reports')}}"> Attendance Report </a></li>
                        <li><a  class="{{ Request::is('leave-reports') ? 'active' : '' }}" href="{{ url('leave-reports')}}"> Leave Report </a></li>
                        <li><a  class="{{ Request::is('daily-reports') ? 'active' : '' }}" href="{{ url('daily-reports')}}"> Daily Report </a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>Performance</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-laptop-medical"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('performance-indicator') ? 'active' : '' }}" href="{{ url('performance-indicator')}}"> Performance Indicator </a></li>
                        <li><a  class="{{ Request::is('performance') ? 'active' : '' }}" href="{{ url('performance')}}"> Performance Review </a></li>
                        <li><a  class="{{ Request::is('performance-appraisal') ? 'active' : '' }}" href="{{ url('performance-appraisal')}}"> Performance Appraisal </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('goal-tracking') ? 'active' : '' }}" href="{{ url('goal-tracking')}}"> Goal List </a></li>
                        <li><a  class="{{ Request::is('goal-type') ? 'active' : '' }}" href="{{ url('goal-type')}}"> Goal Type </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('training') ? 'active' : '' }}" href="{{ url('training')}}"> Training List </a></li>
                        <li><a  class="{{ Request::is('trainers') ? 'active' : '' }}" href="{{ url('trainers')}}"> Trainers</a></li>
                        <li><a  class="{{ Request::is('training-type') ? 'active' : '' }}" href="{{ url('training-type')}}"> Training Type </a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('promotion') ? 'active' : '' }}"><a href="{{ url('promotion')}}"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="la la-external-link-square"></i> <span>Resignation</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('resignation') ? 'active' : '' }}" href="{{ url('resignation')}}"> Resignation </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user-times"></i> <span>Termination</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('termination') ? 'active' : '' }}" href="{{ url('termination')}}"> Termination </a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>Administration</span>
                </li>
                <li class="{{ Request::is('assets1') ? 'active' : '' }}"> 
                    <a href="{{ url('assets1')}}"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('user-dashboard','user-all-jobs','saved-jobs','applied-jobs','interviewing','offered-jobs','visited-jobs','archived-jobs','job-aptitude','questions') ? 'active' : '' }}" href="{{ url('user-dashboard')}}"> User Dasboard </a></li>
                        <li><a  class="{{ Request::is('jobs-dashboard') ? 'active' : '' }}" href="{{ url('jobs-dashboard')}}"> Jobs Dasboard </a></li>
                        <li><a  class="{{ Request::is('jobs') ? 'active' : '' }}" href="{{ url('jobs')}}"> Manage Jobs </a></li>
                        <li><a  class="{{ Request::is('manage-resumes') ? 'active' : '' }}" href="{{ url('manage-resumes')}}"> Manage Resumes </a></li>
                        <li><a  class="{{ Request::is('shortlist-candidates') ? 'active' : '' }}" href="{{ url('shortlist-candidates')}}"> Shortlist Candidates </a></li>
                        <li><a  class="{{ Request::is('interview-questions') ? 'active' : '' }}" href="{{ url('interview-questions')}}"> Interview Questions </a></li>
                        <li><a  class="{{ Request::is('offer_approvals') ? 'active' : '' }}" href="{{ url('offer_approvals')}}"> Offer Approvals </a></li>
                        <li><a  class="{{ Request::is('experiance-level') ? 'active' : '' }}" href="{{ url('experiance-level')}}"> Experience Level </a></li>
                        <li><a  class="{{ Request::is('candidates') ? 'active' : '' }}" href="{{ url('candidates')}}"> Candidates List </a></li>
                        <li><a  class="{{ Request::is('schedule-timing') ? 'active' : '' }}" href="{{ url('schedule-timing')}}"> Schedule timing </a></li>
                        <li><a  class="{{ Request::is('apptitude-result') ? 'active' : '' }}" href="{{ url('apptitude-result')}}"> Aptitude Results </a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('knowledgebase','knowledgebase-view') ? 'active' : '' }}"> 
                    <a href="{{ url('knowledgebase')}}"><i class="la la-question"></i> <span>Knowledgebase</span></a>
                </li>
                <li class="{{ Request::is('users') ? 'active' : '' }}"> 
                    <a href="{{ url('users')}}"><i class="la la-users-cog"></i> <span>Users</span></a>
                </li>
                <li> 
                    <a class="{{ Request::is('settings','localization','theme-settings','roles-permissions','email-settings','performance-setting','approval-setting','invoice-settings','salary-settings','notifications-settings','change-password','leave-type','toxbox-setting','cron-setting') ? 'active' : '' }}" href="{{ url('settings')}}"><i class="la la-cog"></i> <span>Settings</span></a>
                </li>
                <li class="menu-title"> 
                    <span>Pages</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user-tag"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('profile','user-asset-details') ? 'active' : '' }}" href="{{ url('profile')}}"> Employee Profile </a></li>
                        <li><a  class="{{ Request::is('client-profile') ? 'active' : '' }}" href="{{ url('client-profile')}}"> Client Profile </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('index') ? 'active' : '' }}" href="{{ url('index')}}"> Login </a></li>
                        <li><a  class="{{ Request::is('register') ? 'active' : '' }}" href="{{ url('register')}}"> Register </a></li>
                        <li><a  class="{{ Request::is('forgot-password') ? 'active' : '' }}" href="{{ url('forgot-password')}}"> Forgot Password </a></li>
                        <li><a  class="{{ Request::is('otp') ? 'active' : '' }}" href="{{ url('otp')}}"> OTP </a></li>
                        <li><a  class="{{ Request::is('lock-screen') ? 'active' : '' }}" href="{{ url('lock-screen')}}"> Lock Screen </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('error-404') ? 'active' : '' }}" href="{{ url('error-404')}}">404 Error </a></li>
                        <li><a  class="{{ Request::is('error-500') ? 'active' : '' }}" href="{{ url('error-500')}}">500 Error </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-history"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('subscriptions') ? 'active' : '' }}" href="{{ url('subscriptions')}}"> Subscriptions (Admin) </a></li>
                        <li><a  class="{{ Request::is('subscriptions-company') ? 'active' : '' }}" href="{{ url('subscriptions-company')}}"> Subscriptions (Company) </a></li>
                        <li><a  class="{{ Request::is('subscribed-companies') ? 'active' : '' }}" href="{{ url('subscribed-companies')}}"> Subscribed Companies</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('search') ? 'active' : '' }}" href="{{ url('search')}}"> Search </a></li>
                        <li><a  class="{{ Request::is('faq') ? 'active' : '' }}" href="{{ url('faq')}}"> FAQ </a></li>
                        <li><a  class="{{ Request::is('terms') ? 'active' : '' }}" href="{{ url('terms')}}"> Terms </a></li>
                        <li><a  class="{{ Request::is('privacy-policy') ? 'active' : '' }}" href="{{ url('privacy-policy')}}"> Privacy Policy </a></li>
                        <li><a  class="{{ Request::is('blank-page') ? 'active' : '' }}" href="{{ url('blank-page')}}"> Blank Page </a></li>
                        <li><a  class="{{ Request::is('coming-soon') ? 'active' : '' }}" href="{{ url('coming-soon')}}"> Coming Soon </a></li>
                        <li><a  class="{{ Request::is('under-maintenance') ? 'active' : '' }}" href="{{ url('under-maintenance')}}"> Under Maintanance </a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>UI Interface</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="lab la-uikit"></i> <span> Base UI </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('ui-alerts') ? 'active' : '' }}" href="{{ url('ui-alerts')}}">Alerts</a></li>
                        <li><a  class="{{ Request::is('ui-accordion') ? 'active' : '' }}" href="{{ url('ui-accordion')}}">Accordion</a></li>
                        <li><a  class="{{ Request::is('ui-avatar') ? 'active' : '' }}" href="{{ url('ui-avatar')}}">Avatar</a></li>
                        <li><a  class="{{ Request::is('ui-badges') ? 'active' : '' }}" href="{{ url('ui-badges')}}">Badges</a></li>
                        <li><a  class="{{ Request::is('ui-borders') ? 'active' : '' }}" href="{{ url('ui-borders')}}">Border</a></li>
                        <li><a  class="{{ Request::is('ui-buttons') ? 'active' : '' }}" href="{{ url('ui-buttons')}}">Buttons</a></li>
                        <li><a  class="{{ Request::is('ui-buttons-group') ? 'active' : '' }}" href="{{ url('ui-buttons-group')}}">Button Group</a></li>
                        <li><a  class="{{ Request::is('ui-breadcrumb') ? 'active' : '' }}" href="{{ url('ui-breadcrumb')}}">Breadcrumb</a></li>
                        <li><a  class="{{ Request::is('ui-cards') ? 'active' : '' }}" href="{{ url('ui-cards')}}">Card</a></li>
                        <li><a  class="{{ Request::is('ui-carousel') ? 'active' : '' }}" href="{{ url('ui-carousel')}}">Carousel</a></li>
                        <li><a  class="{{ Request::is('ui-colors') ? 'active' : '' }}" href="{{ url('ui-colors')}}">Colors</a></li>
                        <li><a  class="{{ Request::is('ui-dropdowns') ? 'active' : '' }}" href="{{ url('ui-dropdowns')}}">Dropdowns</a></li>
                        <li><a  class="{{ Request::is('ui-grid') ? 'active' : '' }}" href="{{ url('ui-grid')}}">Grid</a></li>
                        <li><a  class="{{ Request::is('ui-images') ? 'active' : '' }}" href="{{ url('ui-images')}}">Images</a></li>
                        <li><a  class="{{ Request::is('ui-lightbox') ? 'active' : '' }}" href="{{ url('ui-lightbox')}}">Lightbox</a></li>
                        <li><a  class="{{ Request::is('ui-media') ? 'active' : '' }}" href="{{ url('ui-media')}}">Media</a></li>
                        <li><a  class="{{ Request::is('ui-modals') ? 'active' : '' }}" href="{{ url('ui-modals')}}">Modals</a></li>
                        <li><a  class="{{ Request::is('ui-notification') ? 'active' : '' }}" href="{{ url('ui-notification')}}">Notification</a></li>
                        <li><a  class="{{ Request::is('ui-offcanvas') ? 'active' : '' }}" href="{{ url('ui-offcanvas')}}">Offcanvas</a></li>
                        <li><a  class="{{ Request::is('ui-pagination') ? 'active' : '' }}" href="{{ url('ui-pagination')}}">Pagination</a></li>
                        <li><a  class="{{ Request::is('ui-popovers') ? 'active' : '' }}" href="{{ url('ui-popovers')}}">Popovers</a></li>
                        <li><a  class="{{ Request::is('ui-progress') ? 'active' : '' }}" href="{{ url('ui-progress')}}">Progress</a></li>
                        <li><a  class="{{ Request::is('ui-placeholders') ? 'active' : '' }}" href="{{ url('ui-placeholders')}}">Placeholders</a></li>
                        <li><a  class="{{ Request::is('ui-rangeslider') ? 'active' : '' }}" href="{{ url('ui-rangeslider')}}">Range Slider</a></li>
                        <li><a  class="{{ Request::is('ui-spinner') ? 'active' : '' }}" href="{{ url('ui-spinner')}}">Spinner</a></li>
                        <li><a  class="{{ Request::is('ui-sweetalerts') ? 'active' : '' }}" href="{{ url('ui-sweetalerts')}}">Sweet Alerts</a></li>
                        <li><a  class="{{ Request::is('ui-nav-tabs') ? 'active' : '' }}" href="{{ url('ui-nav-tabs')}}">Tabs</a></li>
                        <li><a  class="{{ Request::is('ui-toasts') ? 'active' : '' }}" href="{{ url('ui-toasts')}}">Toasts</a></li>
                        <li><a  class="{{ Request::is('ui-tooltips') ? 'active' : '' }}" href="{{ url('ui-tooltips')}}">Tooltips</a></li>
                        <li><a  class="{{ Request::is('ui-typography') ? 'active' : '' }}" href="{{ url('ui-typography')}}">Typography</a></li>
                        <li><a  class="{{ Request::is('ui-video') ? 'active' : '' }}" href="{{ url('ui-video')}}">Video</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-eject"></i> <span> Advanced UI </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('ui-ribbon') ? 'active' : '' }}" href="{{ url('ui-ribbon')}}">Ribbon</a></li>
                        <li><a  class="{{ Request::is('ui-clipboard') ? 'active' : '' }}" href="{{ url('ui-clipboard')}}">Clipboard</a></li>
                        <li><a  class="{{ Request::is('ui-drag-drop') ? 'active' : '' }}" href="{{ url('ui-drag-drop')}}">Drag & Drop</a></li>
                        <li><a  class="{{ Request::is('ui-rangeslider') ? 'active' : '' }}" href="{{ url('ui-rangeslider')}}">Range Slider</a></li>
                        <li><a  class="{{ Request::is('ui-rating') ? 'active' : '' }}" href="{{ url('ui-rating')}}">Rating</a></li>
                        <li><a  class="{{ Request::is('ui-text-editor') ? 'active' : '' }}" href="{{ url('ui-text-editor')}}">Text Editor</a></li>
                        <li><a  class="{{ Request::is('ui-counter') ? 'active' : '' }}" href="{{ url('ui-counter')}}">Counter</a></li>
                        <li><a  class="{{ Request::is('ui-scrollbar') ? 'active' : '' }}" href="{{ url('ui-scrollbar')}}">Scrollbar</a></li>
                        <li><a  class="{{ Request::is('ui-stickynote') ? 'active' : '' }}" href="{{ url('ui-stickynote')}}">Sticky Note</a></li>
                        <li><a  class="{{ Request::is('ui-timeline') ? 'active' : '' }}" href="{{ url('ui-timeline')}}">Timeline</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-chart-line"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="{{ url('chart-apex')}}">Apex Charts</a></li>
                        <li><a  class="{{ Request::is('chart-js') ? 'active' : '' }}" href="{{ url('chart-js')}}">Chart Js</a></li>
                        <li><a  class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="{{ url('chart-morris')}}">Morris Charts</a></li>
                        <li><a  class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="{{ url('chart-flot')}}">Flot Charts</a></li>
                        <li><a  class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="{{ url('chart-peity')}}">Peity Charts</a></li>
                        <li><a  class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="{{ url('chart-c3')}}">C3 Charts</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-icons"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="{{ url('icon-fontawesome')}}">Fontawesome Icons</a></li>
                        <li><a  class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="{{ url('icon-feather')}}">Feather Icons</a></li>
                        <li><a  class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="{{ url('icon-ionic')}}">Ionic Icons</a></li>
                        <li><a  class="{{ Request::is('icon-material') ? 'active' : '' }}" href="{{ url('icon-material')}}">Material Icons</a></li>
                        <li><a  class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="{{ url('icon-pe7')}}">Pe7 Icons</a></li>
                        <li><a  class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="{{ url('icon-simpleline')}}">Simpleline Icons</a></li>
                        <li><a  class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="{{ url('icon-themify')}}">Themify Icons</a></li>
                        <li><a  class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="{{ url('icon-weather')}}">Weather Icons</a></li>
                        <li><a  class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="{{ url('icon-typicon')}}">Typicon Icons</a></li>
                        <li><a  class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="{{ url('icon-flag')}}">Flag Icons</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-wpforms"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{ url('form-basic-inputs')}}">Basic Inputs </a></li>
                        <li><a  class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{ url('form-input-groups')}}">Input Groups </a></li>
                        <li><a  class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{ url('form-horizontal')}}">Horizontal Form </a></li>
                        <li><a  class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{ url('form-vertical')}}"> Vertical Form </a></li>
                        <li><a  class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{ url('form-mask')}}"> Form Mask </a></li>
                        <li><a  class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{ url('form-validation')}}"> Form Validation </a></li>
                        <li><a  class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{ url('form-select2')}}">Form Select2 </a></li>
                        <li><a  class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{ url('form-fileupload')}}">File Upload </a></li>
                        <li><a  class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}" href="{{ url('horizontal-timeline')}}">Horizontal Timeline</a></li>
                        <li><a  class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="{{ url('form-wizard')}}">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a  class="{{ Request::is('tables-basic') ? 'active' : '' }}" href="{{ url('tables-basic')}}">Basic Tables </a></li>
                        <li><a  class="{{ Request::is('data-tables') ? 'active' : '' }}" href="{{ url('data-tables')}}">Data Table </a></li>
                    </ul>
                </li>
                <li class="menu-title"> 
                    <span>Extras</span>
                </li>
                <li> 
                    <a href="#"><i class="la la-file-alt"></i> <span>Documentation</span></a>
                </li>
                <li> 
                    <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ms-auto">v4.0</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="la la-level-up-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a  href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a   href="javascript:void(0);">Level 3</a></li>
                                        <li><a   href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a  href="javascript:void(0);"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
</div>
<!-- /Sidebar -->
@endif

@if (
    Route::is(['chat','voice-call','video-call','outgoing-call','incoming-call']))

	<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                    
                <nav class="greedy">
                    <ul class="link-item">
                        <li> 
                            <a  class="{{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{url('admin-dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span></a>
                        </li>
                        <li class="menu-title"><span>Chat Groups</span> <a href="#" data-bs-toggle="modal" data-bs-target="#add_group"><i class="fa-solid fa-plus"></i></a></li>
                        <li> 
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/user.jpg')}}" alt="User Image" >
                                </span> 
                                <span class="chat-user">#General</span>
                            </a>
                        </li>
                        <li> 
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/user.jpg')}}" alt="User Image" >
                                </span> 
                                <span class="chat-user">#Video Responsive Survey</span>
                            </a>
                        </li>
                        <li> 
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/user.jpg')}}" alt="User Image')}}" >
                                </span> 
                                <span class="chat-user">#500rs</span>
                            </a>
                        </li>
                        <li> 
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/user.jpg')}}" alt="User Image" >
                                </span> 
                                <span class="chat-user">#warehouse</span>
                            </a>
                        </li>
                        <li class="menu-title">Direct Chats <a href="#" data-bs-toggle="modal" data-bs-target="#add_chat_user"><i class="fa-solid fa-plus"></i></a></li>
                        <li>
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"><span class="status online"></span>
                                </span> 
                                <span class="chat-user">John Doe</span> <span class="badge rounded-pill bg-danger">1</span>
                            </a>
                        </li>
                        <li>
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"><span class="status offline"></span>
                                </span> 
                                <span class="chat-user">Richard Miles</span> <span class="badge rounded-pill bg-danger">7</span>
                            </a>
                        </li>
                        <li>
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"><span class="status away"></span>
                                </span> 
                                <span class="chat-user">John Smith</span>
                            </a>
                        </li>
                        <li class="active">
                            <a  class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"><span class="status online"></span>
                                </span> 
                                <span class="chat-user">Mike Litorus</span> <span class="badge rounded-pill bg-danger">2</span>
                            </a>
                        </li>
                    </ul>
                </nav>	
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    @endif

@if(Route::is(['inbox']))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                    
                <ul>
                    <li> 
                        <a  class="{{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{url('admin-dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span></a>
                    </li>
                    <li class="active"> 
                        <a  class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{url('inbox')}}">Inbox <span class="mail-count">(21)</span></a>
                    </li>
                    <li> 
                        <a href="#">Starred</a>
                    </li>
                    <li> 
                        <a href="#">Sent Mail</a>
                    </li>
                    <li> 
                        <a href="#">Trash</a>
                    </li>
                    <li> 
                        <a href="#">Draft <span class="mail-count">(8)</span></a>
                    </li>
                    <li class="menu-title">Label <a href="#"><i class="fa-solid fa-plus"></i></a></li>
                    <li> 
                        <a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
                    </li>
                    <li> 
                        <a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
                    </li>
                    <li> 
                        <a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    @endif
@if(Route::is(['tasks']))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                    
                <ul>
                    <li> 
                        <a class="{{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{url('admin-dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span></a>
                    </li>
                    <li class="menu-title">Projects <a href="#" data-bs-toggle="modal" data-bs-target="#create_project"><i class="fa-solid fa-plus"></i></a></li>
                    <li> 
                        <a class="{{ Request::is('tasks') ? 'active' : '' }}" href="{{url('tasks')}}">Project Management</a>
                    </li>
                    <li class="active"> 
                        <a class="{{ Request::is('tasks') ? 'active' : '' }}" href="{{url('tasks')}}">Hospital Administration</a>
                    </li>
                    <li> 
                        <a  class="{{ Request::is('tasks') ? 'active' : '' }}" href="{{url('tasks')}}">Video Calling App</a>
                    </li>
                    <li> 
                        <a class="{{ Request::is('tasks') ? 'active' : '' }}" href="{{url('tasks')}}">Office Management</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    @endif

@if(Route::is(['settings','localization','theme-settings','roles-permissions','email-settings','performance-setting','approval-setting','invoice-settings','salary-settings','notifications-settings','change-password','leave-type','toxbox-setting','cron-setting']))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                    
                <ul>
                    <li> 
                        <a  class="{{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{url('admin-dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span></a>
                    </li>
                    <li class="menu-title">Settings</li>
                    <li class="{{ Request::is('settings') ? 'active' : '' }}"> 
                        <a href="{{url('settings')}}"><i class="la la-building"></i> <span>Company Settings</span></a>
                    </li>
                    <li class="{{ Request::is('localization') ? 'active' : '' }}"> 
                        <a href="{{url('localization')}}"><i class="la la-clock-o"></i> <span>Localization</span></a>
                    </li>
                    <li class="{{ Request::is('theme-settings') ? 'active' : '' }}"> 
                        <a href="{{url('theme-settings')}}"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                    </li>
                    <li class="{{ Request::is('roles-permissions') ? 'active' : '' }}"> 
                        <a href="{{url('roles-permissions')}}"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
                    </li>
                    <li class="{{ Request::is('email-settings') ? 'active' : '' }}"> 
                        <a href="{{url('email-settings')}}"><i class="la la-at"></i> <span>Email Settings</span></a>
                    </li>
                    <li class="{{ Request::is('performance-setting') ? 'active' : '' }}"> 
                        <a href="{{url('performance-setting')}}"><i class="la la-chart-bar"></i> <span>Performance Settings</span></a>
                    </li>
                    <li class="{{ Request::is('approval-setting') ? 'active' : '' }}"> 
                        <a href="{{url('approval-setting')}}"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                    </li>
                    <li class="{{ Request::is('invoice-settings') ? 'active' : '' }}"> 
                        <a href="{{url('invoice-settings')}}"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                    </li>
                    <li class="{{ Request::is('salary-settings') ? 'active' : '' }}"> 
                        <a href="{{url('salary-settings')}}"><i class="la la-money"></i> <span>Salary Settings</span></a>
                    </li>
                    <li class="{{ Request::is('notifications-settings') ? 'active' : '' }}"> 
                        <a href="{{url('notifications-settings')}}"><i class="la la-globe"></i> <span>Notifications</span></a>
                    </li>
                    <li class="{{ Request::is('change-password') ? 'active' : '' }}"> 
                        <a href="{{url('change-password')}}"><i class="la la-lock"></i> <span>Change Password</span></a>
                    </li>
                    <li class="{{ Request::is('leave-type') ? 'active' : '' }}"> 
                        <a href="{{url('leave-type')}}"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                    </li>
                    <li class="{{ Request::is('toxbox-setting') ? 'active' : '' }}"> 
                        <a href="{{url('toxbox-setting')}}"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                    </li>
                    <li class="{{ Request::is('cron-setting') ? 'active' : '' }}"> 
                        <a href="{{url('cron-setting')}}"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sidebar -->
    @endif


    @if(Route::is(['compose']))
    	<!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                        
                    <ul>
                        <li> 
                            <a class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{url('inbox')}}"><i class="la la-home"></i> <span>Back to Inbox</span></a>
                        </li>
                        <li> 
                            <a class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{url('inbox')}}">Inbox <span class="mail-count">(21)</span></a>
                        </li>
                        <li> 
                            <a href="#">Starred</a>
                        </li>
                        <li> 
                            <a href="#">Sent Mail</a>
                        </li>
                        <li> 
                            <a href="#">Draft <span class="mail-count">(8)</span></a>
                        </li>
                        <li> 
                            <a href="#">Trash</a>
                        </li>
                        <li class="menu-title">Label <a href="#"><i class="fa-solid fa-plus"></i></a></li>
                        <li> 
                            <a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
                        </li>
                        <li> 
                            <a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
                        </li>
                        <li> 
                            <a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
        @endif