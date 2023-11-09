<?php
require_once './../template/header.php';
require_once './../template/footer.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12" style="object-fit: cover;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./../images/Nmain-building.jpg" class="d-block w-100" alt="Image 1" style="height: 20rem;">
        </div>
        <div class="carousel-item">
            <img src="./../images/Nmeeting.jpg" class="d-block w-100" alt="Image 2" style="height: 20rem;">
        </div>
        <div class="carousel-item">
            <img src="./../images/pexels-los-muertos-crew-8460159.jpg" class="d-block w-100" alt="Image 3" style="height: 20rem; ">
        </div>
    </div>
</div>
 </div>
    </div>
</div>
<script>
    // Enable the carousel to change images every 5 seconds
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000, // Set the interval between slides in milliseconds
            pause: false // Set to true if you want to pause on hover
        });
    });

    // Fade transition between slides
    $('.carousel').on('slide.bs.carousel', function () {
        $('.carousel-item').css('opacity', '0.5'); // Set the opacity for the transition
    });

    $('.carousel').on('slid.bs.carousel', function () {
        $('.carousel-item').css('opacity', '1'); // Reset the opacity after the transition
    });
</script>

<div class="container-fluid bg-success p-2 d-flex justify-content-center align-items-center" >
    <div class="row pt-3">
        <div class="mb-1 col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
            <div class="search" style="color: black;">
                <input type="text" class="form-control search-input bg-danger text-dark" placeholder="Find a Doctor" style="width: 20rem; color: black;">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>

        <div class="mb-1 col-lg-4 col-md-6 col-sm-12 text-light  d-flex justify-content-center align-items-center">
    
            <p><img src="./../images/icons8-calendar (1).gif" style="height:30px" alt=""> MAKE AN APPOINTMENT</p>
            
        </div>

        <div class=" mb-1 col-lg-4 col-md-6 col-sm-12 text-light d-flex justify-content-center align-items-center ">
        <p><img src="./../images/icons8-location-24.png" alt="">Getting Around Our Enviroment</p>
        </div>
    </div>
</div>


    <!-- container here -->
    <div class="container">
    <div  style="margin-top:3%">
        <div class="row">
    <h4 class="text-dark mt-5">LATEST NEWS AND EVENTS</h4>
        <div class="col-lg-8 col-sm-12" style="width: 30%">
            
             
                <h5 style="color: black; ">Testimonies</h5>
                <p style="border-bottom: solid black 1px; color: black">July21,2023</p> 
            
                <p style="color: black">WEEKLY ACTIVITIES</p>
            
                <P style="border-bottom: solid black 1px; color: black">August 9, 2021</P>
            

           <p style="border-bottom: solid black 1px; color: blak">Servicom/Public Relation Series <br>june 15, 2020
        </p>
        <p style="cursor: pointer">Read more...</p>
               
        </div>
    </div>
    </div>
<!-- <ends here> -->


<!-- container -->
<div class="container mt-3">
    <div class="row">
    <div class="col-lg-6 col-sm-12">
    <h1 class="bg-success text-light" style="font-size:30px">Testimonials</h1>

    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: 22rem;">
            <div class="carousel-item active">
                <div class="card">
                    <img src="./../images/patient1.jpg" class="card-img-top" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <img src="./../images/patient4.webp" class="card-img-top" alt="Second slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <img src="./../images/patient3.jpg" class="card-img-top" alt="Third slide">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

  <div class="col-lg-6 col-sm-12" >
  <h1 class="bg-success text-light" style=" font-size:30px">Kids operating thearter</h1>
        <div class="card" style="position:relative">
    <img src="./../images/Nkids.webp" alt="">
    <img src="./../images/5296521_play_video_vlog_youtube_youtube logo_icon.png" alt="YouTube Icon" style="position: absolute; top: 47%; left: 50%; transform: translate(-50%, -50%);">
</div>
 </div>
   </div>
  </div>
</div>
</div>
<!-- end -->

<!-- container-4 -->
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
<h1 style=" font-size: 23px; border-radius: 6px" class=" bg-success text-center text-light">24 <br><span style="font-size: 17px"> years of experience</span></h1>     

</div>

        <div class="col-3">

        <h1 style=" font-size: 23px; border-radius: 6px" class="bg-success text-center text-light">2,000 + <br><span style="font-size: 17px"> Staff Strength</span></h1>     

        </div>

        <div class="col-3">
        <h1 style=" font-size: 23px; border-radius: 6px" class="bg-success text-center text-light">100 %<br><span style="font-size: 17px">Professionalism</span></h1>     
     </div>

        <div class="col-3">
        <h1 style=" font-size: 23px; border-radius: 6px" class="bg-success text-center text-light">100 %<br><span style="font-size: 17px">Quality</span></h1>     
    </div>
</div>
</div>
<!-- end -->


<!-- container -->
<div class="container mb-5">
    <div class="row" style="height: 60%">
        <div class="col-lg-12 bg-success mt-3" style=" border-radius: 6px ">
<!-- dfkgkremkdfkldfkldf -->
        </div>
    </div>
</div>

<!-- footer -->
<div class="container-fluid bg-success mt-5">
    <div class="row">

<div class="col-lg-4 col-sm-12 text-light mt-5">
<h3>contact information</h3>
<p>  <img src="./../images/icons8-location-24.png" style="width: 20px; color: white;" alt=""><span >Plot 132 Central Business Districts PMB 425 Garki Abuja.</span></p>
<p>  <img src="./../images/icons8-globe-50.png" style="width: 18px; color: white;" alt=""><span > contact@pnuHealthhospital.gov.ng.</span></p>
<p>  <img src="./../images/icons8-google-mobile-30.png" style="width: 18px; color: white;" alt=""><span >08087654321, 090876543212.</span></p>

</div>

<div class="col-lg-4 col-sm-12 text-light mt-5">
<h3>Useful Links</h3>
<p>
    <ul>
        <li>about us</li>
        <li>Quality of Care Polity</li>
        <li>Patients and Visitors Angle</li>
        <li>Testimonials</li>
    </ul>
</p>
</div>

<div class="col-lg-4 col-sm-12 text-light mt-5">
<h3>Trainings</h3>
<ul>
    <p>
    <li>Post Fellowship Training in Trauma and Surgical Critical Care</li>
    <li>Post Basic Nursing in Nephrology and Oncology</li>
    </p>
</ul>
</div>
</div>
</div>

<div class="container-fluid bg-danger mt-1 px-auto"style="height:50px">
   <div class="row">
    <div class="col-lg1-2 col-sm-12 text-light">
    <p>©2023. PnuHealth Hospital Abuja. All Rights Reserved.</p>
    </div>
   </div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


