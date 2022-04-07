<?php 
    include("header.php");

    include("page-hero.php");
    
?>

<div class="container">
    <div class="row">
        <div class="wrapper">
        <h2>Payment Form</h2>
        <form menthod="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name"><i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name"><i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Address" required class="name"><i class="fa fa-envelope icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <h4>Date of Birth</h4>
                    <input type="text" placeholder="DD" required class="dob">
                    <input type="text" placeholder="MM" required class="dob">
                    <input type="text" placeholder="YYYY" required class="dob">
                </div>
            </div>
            

            <div class="input-group">
                <div class="input-box">
                     <h4>Gender</h4>
                    <input type="radio" id="b1" required name="gender" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" required name="gender" checked class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay"  id="bc1" class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
                    <input type="radio" name="pay"  id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel"  placeholder="Card Number" required class="name"><i class="fa fa-credit-card icon"></i>
                </div>
            </div>
              
            <div class="input-group">
                <div class="input-box">
                    <input type="tel"  placeholder="Card CVC" required class="name"><i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>01 June</option>
                        <option>02 June</option>
                        <option>03 June</option>
                    </select>
                    <select>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                    </select>
                </div>
            </div>
             
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
<br><br><br>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>

    


<?php include("footer.php")?>