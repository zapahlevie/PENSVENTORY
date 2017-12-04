<!DOCTYPE html>
<html>
    <head>
    	<title>PENSVENTORY</title>

    	<!--bootstrap-->
        <link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

        <!--js-->
        <script src="<?php echo base_url('bootstrap/js/jquery-2.1.4.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

        <!--css ku-->
        <link href="<?php echo base_url('css/pensventory.css'); ?>" rel="stylesheet" type="text/css">

        <!--font awesome-->
        <link href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        
        <!--icon-->
        <link href="<?php echo base_url('img/icon.ico'); ?>" rel="shortcut icon">
            
    </head>
    <body background="<?php echo base_url('img/bgpens.jpg'); ?>" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="<?php if (isset($message)){ echo 'modal()';}?>">
    	<!--START NAVBAR FIXED TOP-->
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand page-scroll" href="home">
                            <i id="tblue" class="fa fa-inbox"></i> <span class="tblue">PENS</span><span class="twhite">VENTORY</span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a class="page-scroll" href="#"><i id="tblue" class="fa fa-arrow-circle-down"></i>  PINJAM</a></li> -->
                            <li><a id="navlog" class="page-scroll" data-toggle="modal" data-target="#myModal"><i id="tblue" class="fa fa-sign-in"></i>  SIGN UP</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- AKHIR NAVBAR -->

        <!-- LANDING PAGE -->
            <div class="bungkus1">
                <div class="container">
                    <div class="col-md-9">
                        <div class="row"><br /></div>
                        <div class="row"><br/></div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-6 pv-font">
                                <h1 class="pv-font"><span class="lpdark">Hello <small>Civitas</small> PENS!</span></h1>
                            </div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding">
                                <img class="box-pv" src="<?php echo base_url('img/pv1.png'); ?>">
                            </div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                        </div>
                    </div>
                    
                    <?php echo form_open('verifylogin'); ?>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <br />
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-8">
                              <label for="usr">Username:</label>
                              <input type="text" class="input-control" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-8">
                              <label for="pswd">Password:</label>
                              <input type="password" class="input-control" id="passowrd" name="password" required>
                              <div class='cek'>
                                <?php if (isset($error)){ echo $error; } ?> &nbsp;
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-8" align="left">
                                <input type="submit" value="Login" class="btn btn-default btn-mdl">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-1 padding"></div>
                            <div class="col-md-8">
                              <p align="center" class="alert-login">don't have an account? <a href="" data-toggle="modal" data-target="#myModal">sign up</a> here.</p>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
        <!-- END LANDING PAGE -->

                    <!-- Modal -->
                    <?php echo form_open('verifysignup'); ?>
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Create New Account</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="usr">Username:</label>
                              <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                              <label for="usr">Email:</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                              <label for="hp">No Telepon:</label>
                              <input type="number" class="form-control" id="hp" name="hp" required>
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="password" name="password" required>
                              <div class='cek'>
                                <?php if (isset($message)){ echo $message; } ?> &nbsp;
                              </div>
                            </div>
                            <div class="form-control">
                                <p align="center" class="alert-login"> have an account? <a href="login">login</a> </p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" value="Create" class="btn btn-default btn-mdl">
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                    <!-- End Modal -->
                </div>
                
            </div>
            <script type="text/javascript">
            function modal(){
                    $('#myModal').modal('show');
            };
            </script>
    </body>
</html>
