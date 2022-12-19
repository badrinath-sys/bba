 <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
<!--        <a class="navbar-brand" href="#"> -->
            <img src="<?php echo PATHURL; ?>img/ee-p logo.png" class="img-avatar" >
<!--        </a>-->
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

<!--            <li class="nav-item px-1">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link" href="#">Settings</a>
            </li>-->
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown hidden-md-down">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                    <div class="dropdown-header text-center">
                        <strong>You have 5 notifications</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <i class="icon-user-follow text-success"></i> New user registered
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-user-unfollow text-danger"></i> User deleted
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-chart text-info"></i> Sales report is ready
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-basket-loaded text-primary"></i> New client 
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-speedometer text-warning"></i> Server overloaded
                    </a>

                    <div class="dropdown-header text-center">
                        <strong>Server</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>CPU Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>Memory Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">11444GB/16384MB</small>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>SSD 1 Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">243GB/256GB</small>
                    </a>

                </div>
            </li>
            
          
            <li class="nav-item dropdown" style="padding-right:30px;">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo PATHURL; ?>img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="hidden-md-down">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>

                    <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                 

                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                    
                    <div class="divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url() . "index.php/Login/logout" ?>"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>


        </ul>
    </header>