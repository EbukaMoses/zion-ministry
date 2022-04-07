<?php 
    include("header.php");

    
?>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="card ml-5 mr-5">
                <div class="card-header"  id="bg-info">
                    <h4 class="font-weight-bold text-white float-left">Create an Account</h4> 
                </div>
                <div class="card-body pl-5 pr-5">
                    <form action="" method="POST">
                        
                        <div class="row"> 
                            
                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;First Name:</span>
                                    </div>
                                    <input type="text"  class="form-control" placeholder="First Name" name="fname" >
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>  &nbsp;Last Name:</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name" name="lname" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email:</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" name="email" >
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-square" aria-hidden="true"></i>&nbsp;Phone No.:</span>
                                    </div>                            
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" aria-label="Username" aria-describedby="basic-addon1">
                                </div>                                
                                
                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-male" aria-hidden="true"></i>&nbsp;Gender</span>
                                    </div>
                                    <select name="gender"  class="form-control">
                                        <option value="">--Select--</option>
                                        <option> Male</option>
                                        <option>Female</option>
                                    </select>                                    
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-flag"></i>&nbsp;Nationality:</span>
                                    </div>                            
                                    <input type="text" class="form-control" placeholder="Nationality" name="nationality" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-globe"></i>&nbsp;State:</span>
                                    </div>                            
                                    <input type="text" class="form-control" placeholder="State" name="state" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-city"></i>&nbsp;City:</span>
                                    </div>                            
                                    <input type="text" class="form-control" placeholder="City" name="city" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Password:</span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Confirm Password:</span>
                                    </div>
                                    <input type="password" autocomplete="off" class="form-control" placeholder="Confirm Password" name="cpassword" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                
                            <div class="col-md-12 col-sm-12 col-xs-12 mt-4 d-flex justify-content-center">
                                <button type="submit" name="register"  id="bg-info" class="text-white btn w-100">Sign up</button>
                            </div>
                            <center><span class="text-dark ml-3"> <span style="font-size: 12px">Already have an account? </span><a href="login.php" class="text-decoration-none font-weight-bold text-dark" style="font-size: 12px">Log In</a></span></center>
                        </div>
                        
                    </form>
                </div>
                <!-- <div class="card-footer mb-5">
                    <span class="text-center">Desgined by Ebukamoses</span>
                </div> -->
            </div>
        </div>

        <div class="col-md-2"></div>
    </div>
     <br>
     <br>
     <br>
</div>
<?php
include("footer.php");

?>