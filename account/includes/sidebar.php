
<?php
    // $script_name = pathinfo(__FILE__, PATHINFO_FILENAME);
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar"> 
    <ul class="nav">
        <li class="nav-item sidebar-category mt-4">
            <span style="color:black;">Welcome <b><?=" ".$user_name?></b></span>
        </li>
        <li class="nav-item <?php if($script_name == "index"){echo("active");}?>">
            <a class="nav-link" href="home.php">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item <?php if($script_name == "new-report"){echo("active");}?>">
            <a class="nav-link" href="new-report.php">
                <i class="mdi mdi-plus-circle-outline menu-icon"></i>
                <span class="menu-title">New Report</span>
            </a>
        </li>
        <li class="nav-item <?php if($script_name == "profile"){echo("active");}?>">
            <a class="nav-link" href="profile.php">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item <?php if($script_name == "all-notifications"){echo("active");}?>">
            <a class="nav-link" href="all-notifications.php">
                <i class="mdi mdi-bell-outline menu-icon"></i>
                <span class="menu-title">Notifications</span>
            </a>
        </li>
        <li class="nav-item <?php if($script_name == "logout"){echo("active");}?>">
            <a class="nav-link" href="logout.php">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>          
    </ul>
</nav>