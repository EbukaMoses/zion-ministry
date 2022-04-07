<?php 
    $title = "Our Gallery";
    $page_title = "GALLERY";
    include("header.php");
    include("page-hero.php");
    
?>
<div class="container">
    <div class="row d-flex flex-wrap align-items-center justify-contents-center" data-toggle="modal" data-target="#lightbox">
        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="0" alt="" /> 
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="1" alt="" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="2"  alt="" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="3" alt="" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="3"  alt="" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="4" alt="" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="4" alt="" />
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <img src="image/gallery/5.jpg" data-target="#indicators" data-slide-to="4" alt="" />
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <div id="indicators" class="carousel slide" data-interval="false">
                    <ol class="carousel-indicators">
                        <li data-target="#indicators" data-slide-to="0" class="active"></li>
                        <li data-target="#indicators" data-slide-to="1"></li>
                        <li data-target="#indicators" data-slide-to="2"></li>
                        <li data-target="#indicators" data-slide-to="3"></li>
                        <li data-target="#indicators" data-slide-to="4"></li>
                        <li data-target="#indicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="First slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Second slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Third slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Fourth slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Fifth slide">
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Sixth slide">
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Sixth slide">
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block w-100" src="image/gallery/5.jpg" alt="Sixth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>    
<br><br><br>

<?php include("footer.php")?>