
<?php
$in = $this->session->flashdata('msg');
?>
<?php if (empty($in)) { ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 info d-flex align-items-center">
                            <div class="p-5">
                                <div class="contentful">
                                    <div class="logo">
                                        <h1>Dashboard</h1>
                                    </div>
                                    <p>Welcome back to CMS <h4>Complaint Management System </h4> </p>
                                    <p>Just a click away from getting your complaint resolve ..........</p>
                                    <h4>Login Detail:</h4>
                                    <p> Password are  Case Sensitive</br>Username: Email or Complainant ID </br>Password: Phone number</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <?=form_open('login/process_login', array('class' => 'user'))?>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="userid" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="pwd" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>


                                <?=form_close()?>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?=site_url("Login/Register")?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php }else{ ?>
<div class="container">
    <div class="alert alert-danger "style="size: -100px" role="alert">
        <?= $in; ?>
    </div>

<!--    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">-->
<!--        <div class="toast" style="position: absolute; top: 0; right: 0;" data-autohide="false">-->
<!--            <div class="toast-header">-->
<!--                <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"-->
<!--                     focusable="false" role="img">-->
<!--                    <rect fill="#007aff" width="100%" height="100%" /></svg>-->
<!--                <strong class="mr-auto">--><?//= $in; ?><!--</strong>-->
<!--                <small>11 mins ago</small>-->
<!--                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="toast-body">-->
<!--                Hello, world! This is a toast message.-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 info d-flex align-items-center">
                            <div class="p-5">
                                <div class="contentful">
                                    <div class="logo">
                                        <h1>Dashboard</h1>
                                    </div>
                                    <p>Welcome back to CMS <h4>Complaint Management System </h4> </p>
                                    <p>Just a click away from getting your complaint resolve ..........</p>
                                    <h4>Login Detail:</h4>
                                    <p> Password are Case Sensitive</br>Username: Email or Complainant ID </br>Password:
                                        Phone number</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <?= form_open('login/process_login', array('class' => 'user')) ?>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                           name="userid" aria-describedby="emailHelp"
                                           placeholder="Enter Email Address..." required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" name="pwd" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>

                                <?= form_close() ?>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= site_url("Login/Register") ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php
}?>
