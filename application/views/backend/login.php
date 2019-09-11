    <!DOCTYPE html>
    <html>
    <head>
        <title>Log In</title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/bootstrap/css/bootswatch.css">
        <link href="<?php echo base_url();?>assets/backend/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    </head>
    <body style="background-image: url(<?php echo base_url();?>assets/img/road1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Login</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                        if($this->session->flashdata('logininfo')==TRUE){
                    ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>
                            <strong><?php echo $this->session->flashdata('message'); ?></strong>
                        </div>
                        <?php
                            }
                        ?>  
                            <form class="form-horizontal" action="<?php echo base_url();?>backend/adminlogin/admin_login" method="post">
                              <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="inputDefault">Username</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Enter Username" name="username">
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-3"></div>
                                        <div class="col-lg-9">
                                            <?php echo form_error('username'); ?>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-3 control-label">Password</label>
                              <div class="col-lg-9">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Enter Password" name="password">
                            </div>
                                <div class="row">
                                <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>
                                <div class="row"><br></div>
                                <div class="row">
                                  <div class="col-lg-3"></div>
                                     <div class="col-lg-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">&nbsp;Keep Me Logged In
                                            </label>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </body>

    </html>
