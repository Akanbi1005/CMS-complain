<!-- Page Wrapper -->
<?php
echo $this->session->flashdata('msg');
?>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">CMS Admin </div>
            <!--            <sup>2</sup>-->
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->

        <li class="nav-item active">
            <a class="nav-link" href="<?=site_url("admin")?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Complain Interface
        </div>


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Complains</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?=site_url("admin/lodgecomplaint")?>">Lodge New Complaint</a>
                    <a class="collapse-item" href="<?=site_url("admin/solvedcomplaint")?>">View Solved Complains</a>
                    <a class="collapse-item" href="<?=site_url("admin/pendingcomplaint")?>">View Pending Complains</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Query Interface
        </div>
        <!-- Nav Item - Utilities Collapse Menu -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">-->
<!--                <i class="fas fa-fw fa-wrench"></i>-->
<!--                <span>Utilities</span>-->
<!--            </a>-->
<!--            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">-->
<!--                <div class="bg-white py-2 collapse-inner rounded">-->
<!--                    <a class="collapse-item" href="utilities-color.html">Colors</a>-->
<!--                    <a class="collapse-item" href="utilities-border.html">Borders</a>-->
<!--                    <a class="collapse-item" href="utilities-animation.html">Animations</a>-->
<!--                    <a class="collapse-item" href="utilities-other.html">Other</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Password Reset</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <!--                    <a class="collapse-item" href="login.html">Login</a>-->
                    <!--                    <a class="collapse-item" href="register.html">Register</a>-->
                    <a class="collapse-item" href="<?=site_url("admin/forgot-password")?>">Forgot Password</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->








    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">


            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    <div class="topbar-divider d-none d-sm-block"></div>


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$info['fname'].' '.$info['lname']?></span>

                            <img class="img-profile rounded-circle" src="<?=base_url("assets/MALE.png")?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=site_url("login/logout")?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            <div class="container-fluid">

<!--                <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>-->
                <div class="card mb-2 py-3 border-bottom-primary">
                    <div class="card-body">
                        <h1 class="h3 mb-4 text-gray-800">Log Complain</h1>
                        <?=form_open('admin/insert_complain', array('class' => 'user'))?>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Complainer's Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Full Name" required>
<!--                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>

                                <div class="input-group mb-3">
                                    <select name="location" class="custom-select"  id="inputGroupSelect02" required>
                                        <option selected>Choose...</option>
                                        <?php foreach ($location as $item){?>
                                        <?php
                                            $locations = $item['states']?>
                                        <option  value="<?=$locations?>"><?=$locations?></option>

                                        <?php }?>

                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Location</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="cellnumber" placeholder="Cell Number" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <?php $ref = 'ID'.rand(0001,1111111111) ?>
                                    <label for="exampleInputPassword1">Complainer's Id</label>
                                    <input type="text" name="" class="form-control" id="exampleInputPassword1" value="<?=$ref?>" placeholder="<?=$ref?>">
                                </div>
<!--                                <div class="form-group form-check">-->
<!--                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                                </div>-->
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Complains</label>
                                    <textarea class="form-control" name="complains" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <input type="radio" name="status" value="1" checked> Pending
                                    <input type="radio" name="status" value="2" checked> Resolved<br>
                                </div>
                                    <?php $full = $info['fname'].' '.$info['lname']?>
                                <input type="hidden" name="treated" value="<?=$full?>">
                                <button type="submit" class="btn btn-primary">Resolved</button>

                        <?=form_close()?>
                    </div>
                </div>


             </div>