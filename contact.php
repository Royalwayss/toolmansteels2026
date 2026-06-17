<?php 
include 'include/header.php';
require_once('include/config.php');
$counties = get_counties($conn ); 
$state_options = get_state_options($conn,'101');  
?>
<main>
  <section class="inner-banners">
    <div class="about-banner">
    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d4073.414123774491!2d75.95372469662755!3d30.849733306146632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d30.850535299999997!2d75.9569956!5e0!3m2!1sen!2sin!4v1721814266911!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <section class="container">
      <div class="row mx-2 my-5 ">
        <div class="col-12 col-md-6 col-lg-6  mt-5" data-aos="fade-right">
           <!-- <p>Let us know how we can help you.</p> -->
          <div class="heading">
                  <h2 class="heading-color mb-3">Corporate Office / Manufacturing Unit</h2>
                  <h2 class="heading-owner-name my-2">Mr. Vikram Dhingra</h2>
                
          </div>
              <div class="contact-info mt-3">
                  <p class="contact-add">
                      <i class="fa-solid fa-mobile-button font-color-contact"></i><a class="ml-2  text-black" href="tel:+91 9815525326">+91 9815525326</a>
                      
                  </p>
                  <p class="contact-add">
                      <i class="fa-solid fa-mobile-button font-color-contact"></i><a class="ml-2  text-black" href="tel:+91 9501853532">+91 9501853532</a>
                      
                  </p>
                  </a>
                  <p class="contact-add">
                      <i class="fa-solid fa-envelope font-color-contact"></i><a class="ml-2  text-black " href="mailto:indiatoolman@gmail.com">indiatoolman@gmail.com</a>
                  </p>
                  <p class="contact-add">
                      <i class="fa-solid fa-location-dot font-color-contact mr-2 pl-0"></i>Toolman Special Steels Pvt. Ltd, Opp. Ludhiana Airport, Sahnewal, Ludhiana, Punjab, India.
                  </p>
                  <p class="contact-add">

                  </p>
              </div>

         
        </div>
        <div class="col-12 col-md-6 col-lg-6 form-groups mt-5" >
          <div class="heading">
            
            <h2 class="heading-color">Get In<span class="heading-colors">Touch</span></h2>

          </div>
          <div id="form-result">
              <form id="contact-form" class="row"  action="save-contact.php" method="post" onsubmit="setPhoneValues();">
                  <div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
              <input type="text" class="form-control" id="your-name" placeholder="Name" name="name" >
                  </div>
                  <div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
              <input type="email" class="form-control" id="your-email" placeholder="Email Id" name="email" >
                  </div>
                 
				  
				  
				  <div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
							  <input type="tel" id="iti_phone_input"  class="iti-phone-input" placeholder="Phone no *" name="phone">
							   <input type="hidden" id="iti_country_code" name="country_code">
							   <input type="hidden" id="iti_mobile_number" name="mobile_number">
							</div>
				  
				  
				  
				  
				  <div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
              <select id="country" name="country" class="form-dropdown" onchange="get_state_city('1')">
               <option value="" disabled selected>Select your country</option>
			   <?php foreach($counties as $country){ ?>
				<option data-id="<?php echo $country['id']; ?>" value="<?php echo $country['country']; ?>" <?php if($country['country'] == 'India') { echo 'selected'; }?>><?php echo $country['country']; ?></option>
			   <?php } ?>
              </select>
            </div>
			
			<div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
              <select id="state" name="state" class="form-dropdown" onchange="get_state_city('2')">
              
			   <?php echo $state_options; ?>
              </select>
            </div>
			
			
			<div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
              <select id="city" name="city" class="form-dropdown">
               <option value="" disabled selected>Select your city</option>
              </select>
            </div>
				  
				  
				  
				  
				  
				  
				  
				  
                  <div class="col-md-12 col-lg-6 contact-input mb-3 pl-0">
              <input type="text" class="form-control" id="your-subject" placeholder="Subject" name="subject">
                  </div>
                  <div class="col-md-12 contact-input mb-3 pl-0">
              <textarea class="form-control" id="your-message" name="message" placeholder="Message" rows="4"></textarea>
                  </div>
                  
                  
                <div class="col-md-12 contact-input pl-0">
                    
                      <div style="" class="g-recaptcha" data-sitekey="<?php echo  SITE_KEY; ?>" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                  
                    <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden"/>
                     </div>
                  
                  
                  
                  
                  <div class="col-md-12 contact-input pl-0">
              <button type="submit" class="product-button "> <!--data-bs-toggle="modal" data-bs-target="#exampleModal" --> Send</button>
                  </div>
             </form>
          </div> 
        </div>
        
      </div>
    </section>
</main>
<?php include 'include/footer.php'; ?>
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
					subject: {
					  required: true,
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
					subject: {
					  required: "Enter your subject", 
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
   