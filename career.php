<?php 
include 'include/header.php';
require_once('include/config.php');
$counties = get_counties($conn ); 
$state_options = get_state_options($conn,'101'); 
?> 
<main>
    <section class="inner-banners">
      <!-- <div class="about-banner">
        <img class="w-100" src="assets/img/banners/career-banner.jpg">
      </div> -->
      <div class="container-fluid p-0">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-inner banner-top-mobile">
            <div class="carousel-item active">
              <img src="assets/img/banners/career-banner.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption  product-detail-heading-banner">
                <div class="banners-head">
                  <h5>CAREER
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="conatiner career-form my-5">
      <!-- <div class="main-paragraph">
         <p class="mb-5 para-width"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laboriosam id neque! Totam non qui commodi, delectus, temporibus impedit facilis, enim sunt voluptatum laboriosam nihil quam voluptates perspiciatis quisquam provident?</p>
      </div> -->
  <div class="career-job forms ">       
        <div id="form-result" class="career-form-heading">
        <div class="heading  career-form-head">
              <h2 class="color-career mb-3 ml-1">
                <span class="colors-career"><span>
              </h2>
            </div>
           <form id="contact-form" class="row " action="save-career.php" method="post"  onsubmit="setPhoneValues();" enctype="multipart/form-data">
            
            <div class="col-md-12 col-lg-6 contact-input mb-3">
              <input type="text" class="form-control" id="your-name" placeholder="Name" name="name" 
                >
              <!-- <small>Enter a valid name.</small> -->
            </div>
            <div class="col-md-12 col-lg-6 contact-input mb-3">
              <input type="email" class="form-control" id="your-email" placeholder="Email Id" name="email"
               >
            </div>
           
			
			<div class="col-md-6">
							  <input type="tel" id="iti_phone_input"  class="iti-phone-input" placeholder="Phone no *" name="phone">
							   <input type="hidden" id="iti_country_code" name="country_code">
							   <input type="hidden" id="iti_mobile_number" name="mobile_number">
							</div>
			
			
			
            <div class="col-md-12 col-lg-6 contact-input mb-3">
              <input type="number" class="form-control" placeholder="Age" id="age" name="age" 
                >

            </div>
            <div class="col-md-12 col-lg-6 contact-input mb-3">
              <select id="country" name="country" class="form-dropdown" onchange="get_state_city('1')">
               <option value="" disabled selected>Select your country</option>
			   <?php foreach($counties as $country){ ?>
				<option data-id="<?php echo $country['id']; ?>" value="<?php echo $country['country']; ?>" <?php if($country['country'] == 'India') { echo 'selected'; }?>><?php echo $country['country']; ?></option>
			   <?php } ?>
              </select>
            </div>
			
			<div class="col-md-12 col-lg-6 contact-input mb-3">
              <select id="state" name="state" class="form-dropdown" onchange="get_state_city('2')">
              
			   <?php echo $state_options; ?>
              </select>
            </div>
			
			
			<div class="col-md-12 col-lg-6 contact-input mb-3">
              <select id="city" name="city" class="form-dropdown">
               <option value="" disabled selected>Select your city</option>
              </select>
            </div>
          
            <div class="col-md-12 col-lg-6 contact-input mb-3">
              <input type="text" class="form-control" id="experience" placeholder="Experience (in years)" name="experience"
               >
            </div>
			
			<div class="col-md-12 col-lg-6 contact-input mb-3">
              <!-- <input type="text" class="form-control" id="your-phone" placeholder="Number" name="phone" pattern="[0-9]{10}" required> -->
              <select id="education" name="education" class="form-dropdown">
                <option value="" disabled selected>Select your education</option>
                <option value="High School">High School</option>
                <option value="College">College</option>
                <option value="Bachelors Degree">Bachelor's Degree</option>
                <option value="Masters Degree">Master's Degree</option>
                <option value="Doctorate">Doctorate</option>
              </select>
            </div>
			
			
			
			
			
			
            <div class="col-md-12 col-lg-6 contact-input mb-3">
            <input type="file" name="resume" id="resume" />
          <label for="file">
          </label>
            </div>
            <div class="col-md-12 col-lg-12 contact-input mb-3">
              <textarea class="form-control" id="your-message" name="message" placeholder="Message" rows="4"></textarea>
            </div>
            
            <div class="col-md-12 col-lg-12 contact-input mb-3">
                    
                      <div style="" class="g-recaptcha" data-sitekey="<?php echo  SITE_KEY; ?>" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                  
                    <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden"/>
                     </div>
            
            
            
            <div class="col-12 contact-input">
              <button type="submit" class="document-btn product-button">Send</button>
            </div>
          </form>
        </div>
      
  </div>

</section>
  </main>
<?php include 'include/footer.php'; ?>

<script src="assets/js/additional-methods.min.js"></script>	
	<script>
			 $(document).ready(function(){
			    $('#country').select2();
			    $('#state').select2();
				$('#contact-form').validate({ 
				  rules: {
					name: {
					  required: true,
					},
					email: {
					  required: true,
					  email: true
					},
					phone: {
                      required: true,
   					  minlength: 8,
   					  maxlength:15,
                    },
					age: {
					  required: true,
					},
					education: {
					  required: true,
					  
					},
					resume: {
					  required: true,
					  extension: "pdf",
					},
					message: {
					  required: true,
					},
					
					 "hidden-grecaptcha": {
                        required: true,
                     }	
				  },
				  messages: {
					name: {
					  required: "Enter your name", 
					},
					email: {
					  required: "Enter your email",
					  email: "Enter a valid email address",
					},
					phone:{
   						  required: "Enter your mobile no",
   						  minlength: "Enter 8 digits mobile number",
   						  maxlength: "Enter maximum 15 digits mobile number including country code",
   						},
					age: {
					  required: "Enter your age", 
					},
					education: {
					  required: "Enter your education", 
					},
					resume: {
					  required: "Upload your resume", 
					},
					message: {
					  required: "Enter your message", 
					},
					"hidden-grecaptcha": {
			         	required: "reCAPTCHA is mandatory."
		        	} 
					
				}, 
			   
				});
			   });
			   
   
	</script>  