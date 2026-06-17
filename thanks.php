<?php
 session_start();
 include 'include/header.php';
 if(!isset($_SESSION['user_name'])){
	 echo '<script>window.location.href="index.php"; </script>'; die;
 }
 ?>
<style>
  .thankyou-box {
    background: #f1f1f1;
    padding: 40px;
    border-radius: 10px;
    text-align: center;
    margin-top: 2rem;
    width: 100%;

    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }

  .thankyou-box .checkmark {
    font-size: 48px;
    color: #28a745;
  }

  .thankyou-box h2 {
    margin-top: 20px;
    font-weight: bold;
  }

  .thankyou-box p {
    color: #000;
    margin: 20px 0;
    font-size: 16px;
  }
 
  .btn-link-custom {
    margin: 10px 5px;
    display: inline-block;
  }

  .social-icons a {
    margin: 0 8px;
    color: #333;
    font-size: 20px;
    transition: color 0.2s ease-in-out;
  }

  .social-icons a:hover {
    color: #00bfa5;
  }

  .customer-name {
    color: #106d91;
  }
.thank-you-btn-links:hover{
  border:1px solid #23346b;
  color:#000;
  background-color:transparent;
}
.thank-you-btn-links{
  background-color:#0d4a62;
  color:#fff;
}
  @media (max-width: 576px) {
    .thankyou-box {
      padding: 25px;
    }
  }
</style>
<main>
  <!-- <section class="container">
      <div class="row mx-2 my-5 " style="margin-top:200px!important">
        <div class="col-12 col-md-12 col-lg-12  mt-5" data-aos="fade-right">
       
          <div class="heading text-center">
                  <h3 class="heading-color mb-3" style="color:green">Thanks for contacting us, we will revert back soon.</h3>
                  
          </div> 
        </div>
      </div>
    </section> -->
    <section class="midSec" style="margin-top:200px; margin-bottom:100px ; text-align:center">
  <div class="container">
    <div class="thankyou-box">
      <div class="row">
        <div class="col-12 col-md-9 m-auto">

          <div class="checkmark"><i class="fas fa-check-circle"></i></div>
          <h2>Dear <span class="customer-name"><?php echo $_SESSION['user_name']; ?></span></h2>
          <p>Thank you for getting in touch with us! We’ve received your enquiry, and our team will get back to you
            within
            <strong> 2–3 business days.</strong>
          </p>

          <p class="mt-5 mb-1" style="text-transform:; font-size:20px; font-weight:600;">In the meantime, feel free to:</p>
        </div>
        <div class="col-12 col-md-12 col-lg-12 ">
          <div class="thank-you-inner-box">
          <div class=" mb-4">
            <a href="products.php" class="btn thank-you-btn-links btn-link-custom">Explore Our Products</a>
            <a href="about.php" class="btn thank-you-btn-links btn-link-custom">More About us </a>
          </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12">
         
          <div class="">
            <h5 class="mb-4 " style="text-transform:; font-size:20px; font-weight:600; color:#000;">Connect With Us</h5>
            <div class="social-icons mb-3">
            <a rel="nofollow" href="https://www.linkedin.com/company/toolmanspecialsteels/" target="_blank"><i class="fa-brands fa-linkedin-in font-color"></i></a>
            <a rel="nofollow" href="https://www.instagram.com/toolmanspecialsteels/" target="_blank"><i class="fa-brands fa-instagram font-color"></i></a>
            <a rel="nofollow" href="https://www.facebook.com/toolmanspecialsteels/" target="_blank"><i class="fa-brands fa-facebook-f font-color"></i></a>
  
            </div>
        
          </div>
        </div>

        <div class="col-12">
          <p class="" >We truly appreciate your interest and look forward to assisting you further.</p>
        </div>

      </div>
    </div>
  </div>
 
  </div>
</section>
</main>
<?php include 'include/footer.php'; ?>
