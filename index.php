<?php
  include_once 'header.php';
?>

<div class="home-carousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="10000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
           
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
           
          </div>
          <div class="carousel-item">
            <img src="img/carousel4.jpg" class="d-block w-100" alt="...">
            
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div class="container col-xl-10 col-xxl-8 px-4">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-5 fw-bold lh-1 mb-3">A PLACE YOUR HEART DESIRES</h1>
      <p class="col-lg-10 fs-6">
      Nestled between rolling hills and the azure waters of the coast, "The Resort" stands as a serene haven for those seeking an escape from the ordinary. 
      Surrounded by lush tropical gardens, the resort offers a harmonious blend of modern luxury and natural beauty.
      </p>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <img src="img/resort_logo.png" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-6 bg-body rounded mt-5" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
  </div>
</div>

<div class="container-fluid bg-dark py-4">
    <div class="text-center pb-3">
      <h1 class="display-5 fw-bold lh-1 mb-3 text-white">OUR ROOMS</h1>
    </div>
    <div class="text-center">
      <a href="accommodation.php">
        <button type="button" class="btn btn-primary btn-lg fw-bold rounded-3">LEARN MORE</button>
      </a>
    </div>
</div>

<div class="container col-xl-10 col-xxl-8 px-4 py-3">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-md-10 mx-auto col-lg-7">
      <video autoplay muted loop class="w-100">
        <source src="img/video/beach_video.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-5 text-center text-lg-start">
      <h1 class="display-5 fw-bold lh-1 mb-3">Discover Breathtaking Place</h1>
      <p class="col-lg-12 fs-6">
        We invite you to make memories, embrace serenity, and bask in the natural beauty that surrounds us. Let the gentle ocean breeze and the soothing sound of waves carry your worries away.
        <br><br>
        Your escape to paradise begins here. Let us create a story you'll cherish forever.
      </p>
      <div class="pt-2">
        <a href="facilityservices.php">
          <button type="button" class="btn btn-primary btn-lg fw-bold rounded-3">THINGS TO DO</button>
        </a>
      </div>
    </div>
  </div>
</div>
        
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "126513953867688");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>        
        
   
<?php
  include_once 'footer.php';
?>