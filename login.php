<?php 
    include("header.php");

?>
<br><br><br>
<div class="container ">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="card ml-5 mr-5">
                <div class="card-header" id="bg-info">
                    <h4 class="font-weight-bold text-white float-left">Access your Account</h4> 
                </div>
                <div class="card-body pl-5 pr-5">
                    <form action="" method="POST">
                        
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">                   
                                
                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email:</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" name="email" >
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Password:</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>                       
                                
                            </div>

                            <div class="mt-4 mr-2 ml-auto">
                                <span class="text-dark" style="font-size: 12px" ><a href="forgot.php" class="text-decoration-none font-weight-bold text-red">Forgotten Password?</a></span>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12  d-flex justify-content-center">
                                <button type="submit" id="bg-info" name="login" class="btn text-white w-100">Log In</button>
                                
                            </div>
                            <div class="">
                                <div class="">
                                    <span class="text-dark ml-3" style="font-size: 12px" >Don't have an account?<a href="register.php" class="text-decoration-none font-weight-bold text-dark">Sign Up</a></span>
                                </div>
                                
                            </div>
                        </div>
                        
                    </form>
                </div>
                <!-- <div class="card-footer mb-5">
                    <span class="text-center">Desgined by Ebukamoses</span>
                </div> -->
            </div>
        </div>

        <div class="col-md-3"></div>
    </div>
     <br>
     <br>
     <br>
</div>
<?php
include("footer.php");

?>