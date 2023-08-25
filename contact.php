<?php
  include_once 'header.php';
  include_once 'includes/connect.inc.php';
?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
        (function(){
        emailjs.init("PoP7J_YCxY7CufEyE");
        })();
</script>

<div class="container col-xl-10 col-xxl-8 px-4">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h4 class="display-5 fw-bold lh-1 mb-3">CONTACT INFORMATION</h4>
      <p class="col-lg-10 fs-6">
          Bookings for The Resort are available online. 
          Our Reservation Team is here to assist you from 9 AM to 10 PM daily with booking enquiries and personal requests.
          <br><br>
          Let us know if we can help you with any further information.
          Looking forward to hearing from you!
      </p>
    </div>
    <div class="col-md-10 mx-auto col-lg-5 shadow-lg border rounded-3">
      <div class="p-4">
        <div class="text-center mb-4">
          <h2 class="fw-bold">SEND US A MESSAGE</h2>
        </div>
        <input type="hidden" class="form-control" id="email" placeholder="name@example.com" value="cyril.taps@gmail.com">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="name" placeholder="name@example.com" required>
          <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="mobileno" placeholder="name@example.com" required>
          <label for="floatingInput">Phone Number</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 150px" required></textarea>
          <label for="message">Message</label>
        </div>
        <div class="mt-4 text-center">
         <button onclick="sendMail()" type="submit" class="btn btn-primary text">Send Message</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container col-xl-10 col-xxl-8 px-4 py-1">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-md-10 mx-auto col-lg-7 shadow-lg border rounded-3">
      <div>
        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=siquijor&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" class="w-100" style="border:0; height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="col-lg-5 text-center text-lg-start">
      <h1 class="display-5 fw-bold lh-1 mb-3 pt-3">LOCATION</h1>
      <p class="col-lg-10 fs-6">
        <span class="fw-bold">Address: </span> Phillipines
        <br>
        <span class="fw-bold">Text or Call: </span>0912-3456-789 or 421-1223
        <br>
        <span class="fw-bold">Email: </span>theresort@gmail.com
      </p>
    </div>
  </div>
</div>
   
<script src="js/email.js"></script>

<?php
  include_once 'footer.php';
?>