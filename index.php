<html lang="en">
    <head>
        <title>Form Validations</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="page-header">
                        
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Signup Form</h3>
                        </div>
                        <div class="panel-body">
                            <form id="signupForm" name="signup" method="post" class="form-horizontal" action="">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="firstname">First name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="lastname">Last name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="username">Username</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="email">Email</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Phone Number</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number"  />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Profile pic</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" id="profile_pic" name="profile_pic" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="password">Password</label>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="confirm_password">Confirm password</label>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-5 col-sm-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="agree" name="agree" value="agree" />Please agree to our policy
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-4">
                                        <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</html>