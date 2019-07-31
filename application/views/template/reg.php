<?php

$in = $this->session->flashdata('msg');

?>

<?php if (empty($in)) { ?>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!--                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
                    <div class="col-lg-5 info d-flex align-items-center">
                        <div class="p-5">
                            <div class="contentful">
                                <div class="logo">
                                    <h1>Dashboard</h1>
                                </div>
                                <h4>Sign Up Tip:</h4>
                                <p> All information should be inputted with Care ..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <?= form_open('login/process_signup', array('class' => 'user')) ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                               name="fname" placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                               name="lname" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                               name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="exampleLastName"
                                               name="pnumber" placeholder="Phone Number" required>
                                    </div>
                                </div>

<!--                                <div class="form-group row">-->
<!---->
<!---->
<!--                                    <div class="col-sm-6 mb-3 mb-sm-0">-->
<!--                                        <select id="inputState" class="form-control form-control-user">-->
<!--                                            <option selected>Gender</option>-->
<!--                                            <option>Male</option>-->
<!--                                            <option>Female</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-6">-->
<!--                                        <select id="inputState" class="form-control form-control-user">-->
<!--                                            <option selected>Nationality</option>-->
<!--                                            <option>Male</option>-->
<!--                                            <option>Female</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                </div>-->
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" name="pwd" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleRepeatPassword" name="pwdr" placeholder="Repeat Password"
                                           required>
                                </div>

                            </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            <?= form_close() ?>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url("Login") ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php }else{ ?>

    <div class="container">
    <div class="container">
        <div class="alert alert-danger col " style="size: -100px" role="alert">
            <?= $in; ?>
        </div>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!--                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
                    <div class="col-lg-5 info d-flex align-items-center">
                        <div class="p-5">
                            <div class="contentful">
                                <div class="logo">
                                    <h1>Dashboard</h1>
                                </div>
                                <h4>Sign Up Tip:</h4>
                                <p> All information should be inputted with Care ..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <?= form_open('login/process_signup', array('class' => 'user')) ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                               name="fname" placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                               name="lname" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                               name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="exampleLastName"
                                               name="pnumber" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleInputPassword" name="pwd" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                               id="exampleRepeatPassword" name="pwdr" placeholder="Repeat Password"
                                               required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            <?= form_close() ?>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url("Login") ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php }?>