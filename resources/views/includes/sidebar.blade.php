<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-text mx-3">Employee Management System</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @if(session('user') && session('user')->user_type == "admin")
        <!-- Nav Item - Home -->
        <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        {{-- <div class="sidebar-heading">
            Heading
        </div> --}}

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users"></i>
                <span>Employees</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Employees:</h6>
                    <a class="collapse-item" href="/employees/list">Employees List</a>
                    <a class="collapse-item" href="/employees/current">Current Employees</a>
                    <a class="collapse-item" href="/employees/past">Former Employees</a>
                    <a class="collapse-item" href="/employees/past">Dissmiss Employee</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-users"></i>
                <span>Users</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Users:</h6>
                    <a class="collapse-item" href="/users/list">Users List</a>
                    <a class="collapse-item" href="/users/admins">Admins</a>
                    <a class="collapse-item" href="/users/employees">Employees</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLeaves"
                aria-expanded="true" aria-controls="collapseLeaves">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Leaves</span>
            </a>
            <div id="collapseLeaves" class="collapse" aria-labelledby="headingLeaves"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Leaves:</h6>
                    <a class="collapse-item" href="leaves-color.html">Requests</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Payroll</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                    <a class="collapse-item" href="utilities-other.html">Other</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/attendance" data-toggle="collapse" data-target="#collapseAttendance"
                aria-expanded="true" aria-controls="collapseAttendance">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Attendance</span>
            </a>
            <div id="collapseAttendance" class="collapse" aria-labelledby="headingAttendance"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom attendance:</h6>
                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                </div>
            </div>
        </li>
    @else
    <li class="nav-item">
        <a class="nav-link collapsed" href="/request leave" data-toggle="collapse" data-target="#collapseLeave"
            aria-expanded="true" aria-controls="collapseLeave">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Request Leave</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/personal_info" data-toggle="collapse" data-target="#collapsePersonalInfo"
            aria-expanded="true" aria-controls="collapsePersonalInfo">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Personal Info</span>
        </a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
