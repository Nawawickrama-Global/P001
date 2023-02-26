
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            My<span> Mobile</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/brand" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Brand</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Send Email</span>
                </a>
            </li>
            <li class="nav-item nav-category">Student Management</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#leads" role="button" aria-expanded="false" aria-controls="emails" id="req-ex">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Leads</span>
                    <i class="link-arrow" data-feather="chevron-down" id="toggle-indicater"></i>
                </a>
                <div class="collapse" id="leads">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">My Leads</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pending Leads</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Priority Leads</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">All Leads</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails" id="req-ex">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">CPF Requests</span> &nbsp;
                    <div class="text-white invisible pending-header-req" role="status">
                        <span class="badge badge-light badge-pill bg-warning text-black text-header-indicater"></span>
                    </div>
                    <i class="link-arrow" data-feather="chevron-down" id="toggle-indicater"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pending Requests
                                &nbsp;
                                <div class="text-white invisible pending-sub-req" role="status">
                                    <span class="badge badge-light badge-pill bg-danger text-white text-sub-indicater"></span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Selected
                                Requests</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Selected Under
                                Condition</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Rejected
                                Requests</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">User Management</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#userser" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">User Settings</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="userser">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Role Management</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Permission
                                Management</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">User Management</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Agents Details</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Web Settings</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Settings</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">SMTP Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Course Settings</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>