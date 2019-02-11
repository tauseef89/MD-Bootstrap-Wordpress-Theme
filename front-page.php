<?php  
/**
* Template Name: Front Page
*
*/

get_header(); 
require_once('components/navbar.inc.php'); 
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
?>
<!--Carousel Wrapper-->
<div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#home-carousel" data-slide-to="1"></li>
    <li data-target="#home-carousel" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
<!-- Section: Features v.1 -->
<div class="container-fluid">
<div class="container">
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Why is it so great?</h2>
  <!-- Section description -->
  <p class="lead grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4">

      <i class="fa fa-comments fa-3x red-text"></i>
      <h5 class="font-weight-bold my-4">Analytics</h5>
      <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <i class="fa fa-book fa-3x cyan-text"></i>
      <h5 class="font-weight-bold my-4">Tutorials</h5>
      <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
        maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <i class="fa fa-comments fa-3x orange-text"></i>
      <h5 class="font-weight-bold my-4">Support</h5>
      <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
        aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>    
</div>    
</div>
<!-- Section: Features v.1 -->

<div class="container-fluid bg-info text-white py-5">
    <div class="container">
        <!-- Section: Team v.3 -->
<section class="team-section my-5">

<!-- Section heading -->
<h2 class="h1-responsive font-weight-bold text-center my-5">Our amazing team</h2>
<!-- Section description -->
<p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
  adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
  nostrum quisquam eum porro a pariatur veniam.</p>

<!-- Grid row-->
<div class="row text-center text-md-left">

  <!-- Grid column -->
  <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
    <div class="avatar mb-md-0 mb-4 mx-4">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded z-depth-1" alt="Sample avatar">
    </div>
    <div class="mx-4">
      <h4 class="font-weight-bold mb-3">John Doe</h4>
      <h6 class="font-weight-bold mb-3">Web Designer</h6>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
        tenetur.</p>
      <!-- Facebook-->
      <a class="p-2 fa-lg fb-ic">
        <i class="fa fa-facebook-f"> </i>
      </a>
      <!-- Twitter -->
      <a class="p-2 fa-lg tw-ic">
        <i class="fa fa-twitter"> </i>
      </a>
      <!--Dribbble -->
      <a class="p-2 fa-lg dribbble-ic">
        <i class="fa fa-dribbble"> </i>
      </a>
    </div>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
    <div class="avatar mb-md-0 mb-4 mx-4">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded z-depth-1" alt="Sample avatar">
    </div>
    <div class="mx-4">
      <h4 class="font-weight-bold mb-3">Maria Kate</h4>
      <h6 class="font-weight-bold mb-3">Photographer</h6>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
        tenetur.</p>
      <!-- Facebook-->
      <a class="p-2 fa-lg fb-ic">
        <i class="fa fa-facebook-f"> </i>
      </a>
      <!--YouTube -->
      <a class="p-2 fa-lg yt-ic">
        <i class="fa fa-youtube"> </i>
      </a>
      <!--Instagram-->
      <a class="p-2 fa-lg ins-ic">
        <i class="fa fa-instagram"> </i>
      </a>
    </div>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row-->

<!-- Grid row-->
<div class="row text-center text-md-left">

  <!-- Grid column -->
  <div class="col-xl-6 col-lg-12 mb-xl-0 mb-5 d-md-flex justify-content-between">
    <div class="avatar mb-md-0 mb-4 mx-4">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="rounded z-depth-1" alt="Sample avatar">
    </div>
    <div class="mx-4">
      <h4 class="font-weight-bold mb-3">Anna Deynah</h4>
      <h6 class="font-weight-bold mb-3">Web Developer</h6>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
        tenetur.</p>
      <!-- Facebook-->
      <a class="p-2 fa-lg fb-ic">
        <i class="fa fa-facebook-f"> </i>
      </a>
      <!-- Twitter -->
      <a class="p-2 fa-lg tw-ic">
        <i class="fa fa-twitter"> </i>
      </a>
      <!-- GitHub-->
      <a class="p-2 fa-lg git-ic">
        <i class="fa fa-github"> </i>
      </a>
    </div>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-xl-6 col-lg-12 d-md-flex justify-content-between">
    <div class="avatar mb-md-0 mb-4 mx-4">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" class="rounded z-depth-1 img-fluid"
        alt="Sample avatar">
    </div>
    <div class="mx-4">
      <h4 class="font-weight-bold mb-3">Sarah Melyah</h4>
      <h6 class="font-weight-bold mb-3">Front-end Developer</h6>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic
        tenetur.</p>
      <!-- Facebook-->
      <a class="p-2 fa-lg fb-ic">
        <i class="fa fa-facebook-f"> </i>
      </a>
      <!-- Twitter -->
      <a class="p-2 fa-lg tw-ic">
        <i class="fa fa-twitter"> </i>
      </a>
      <!-- GitHub-->
      <a class="p-2 fa-lg git-ic">
        <i class="fa fa-github"> </i>
      </a>
    </div>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row-->

</section>
<!-- Section: Team v.3 -->
    </div>
</div>

<div class="container-fluid">
    <div class="container">
<!-- Section: Features v.4 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-flag-checkered deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">International</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
            nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-flask deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Experimental</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
            nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-md-0 mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-heart deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Relaxing</h5>
          <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
            maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 text-center">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png"
        alt="Sample image">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-heart deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Beloved</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
            nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-bolt deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Rapid</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
            nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-magic deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Magical</h5>
          <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
            maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.4 -->
    </div>
</div>
<div class="container-fluid bg-info text-white py-4">
    <div class="container">
        <!-- Section: Contact v.2 -->
<section class="my-5">

<!-- Section heading -->
<h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
<!-- Section description -->
<p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
  Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
  eum porro a pariatur veniam.</p>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-9 mb-md-0 mb-5">

    <form>

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6">
          <div class="md-form mb-0">
            <input type="text" id="contact-name" class="form-control">
            <label for="contact-name" class="">Your name</label>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
          <div class="md-form mb-0">
            <input type="text" id="contact-email" class="form-control">
            <label for="contact-email" class="">Your email</label>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12">
          <div class="md-form mb-0">
            <input type="text" id="contact-Subject" class="form-control">
            <label for="contact-Subject" class="">Subject</label>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12">
          <div class="md-form">
            <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
            <label for="contact-message">Your message</label>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </form>

    <div class="text-center text-md-left">
      <a class="btn btn-secondary btn-md">Send</a>
    </div>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 text-center">
    <ul class="list-unstyled mb-0">
      <li>
        <i class="fa fa-map-marker fa-2x"></i>
        <p>San Francisco, CA 94126, USA</p>
      </li>
      <li>
        <i class="fa fa-phone fa-2x mt-4"></i>
        <p>+ 01 234 567 89</p>
      </li>
      <li>
        <i class="fa fa-envelope fa-2x mt-4"></i>
        <p class="mb-0">contact@example.com</p>
      </li>
    </ul>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</section>
<!-- Section: Contact v.2 -->
    </div>
</div>
</main>
<!--Main layout-->
<?php
} // end while
} // end if
get_footer(); 
?>