<?php 

    $title = "Contact Us";
    $page_title = "CONTACT US";
    include("header.php");
    include("page-hero.php");
    
?>

<div class="container">
    <div class="row" id="contact_page">

        <div class="col-md-6 col-sm-12 col-xs-12">
            
            <h1 class="font-weight-bold" style="color: #B01B15;">Contact Us</h1>
            <h4 class="font-weight-bold" style="color: #CF9724;">Zion Prayer Movement Outreach Ministry</h4>
            <div class="">
                <div class="container">
                        
                    <div class="row cantactus-card mt-4 p-4">
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span id="cantactus-icon"><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 pl-3">                                
                           <h5 class="font-weight-bold" style="color: #B01B15;"><a href="tel:+2347044111382" class="text-decoration-none"  style="color: #B01B15;">(+234) 7044111382</h5>
                           <h5 class="font-weight-bold" style="color: #B01B15;"><a href="tel:+2349017742348" class="text-decoration-none"  style="color: #B01B15;">(+234) 9017742348</h5>
                            <!-- <p>To draw men close to God</p> -->
                        </div>
                    </div>
                    
                    <div class="row cantactus-card mt-5 p-4">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <span id="cantactus-icon"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 pl-3">                                
                           <h5 class="font-weight-bold"><a href="mailto:info@zpmom.org" class="text-decoration-none"  style="color: #B01B15;">info@zpmom.org</a></h5>
                           <h5 class="font-weight-bold"><a href="mailto:prayer@zpmom.org" class="text-decoration-none"  style="color: #B01B15;">prayer@zpmom.org</a></h5>
                            <!-- <p>To draw men close to God</p> -->
                        </div>
                    </div>

                    <div class="row cantactus-card mt-5 p-4">
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <span id="cantactus-icon"><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <div class="col-md-11 col-sm-11 col-xs-11 pl-3">                                
                           <h5 class="font-weight-bold" style="color: #B01B15;"> Onyebuchi Avenue Hosanna Estate, Ibro Way Ago, Okota Lagos Nigeria</h5>
                            <!-- <p>To draw men close to God</p> -->
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-12 col-xs-12">           
            <br><br><br><br>
            <div class="input-group mt-4">                                           
                <input type="text" class="form-control" placeholder="Full Name" name="fullname" ">
            </div>
            
            <div class="input-group mt-4">                                           
                <input type="text" class="form-control" placeholder="Email" name="email" ">
            </div>
            
            <div class="input-group mt-4">                                           
                <input type="text" class="form-control" placeholder="Phone" name="phone" ">
            </div>
            
            <div class="input-group mt-4">
                <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>                                           
                <!-- <input type="text"  placeholder="Full Name" name="fullname" "> -->
            </div>
            
            <div class="input-group mt-4">
                <button type="submit" name="sendmsg"  id="bg-info" class="text-white btn w-100"><i class="fa-solid fa-paper-plane"></i>&nbsp;Send</button>                                         
                <!-- <input type="text"  placeholder="Full Name" name="fullname" "> -->
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Onyebuchi%20Avenue%20Hosanna%20Estate,%20Ibro%20Way%20Ago,%20Okota%20Lagos&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google map for my website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1080px;}</style></div></div>
    </div>
</div>
<br><br><br><br>



<?php include("footer.php")?>