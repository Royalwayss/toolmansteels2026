<?php 
   include 'include/header.php';
   require_once('include/config.php');
   $counties = get_counties($conn ); 
   $state_options = get_state_options($conn,'101');  
   ?>
<div class="container py-5 " style="margin-top:150px;">
   <div class="row">
      <div class="col-12 text-center mb-4">
         <h2>Enquire Now</h2>
      </div>
      <form id="enqiure_form" method="post" action="save-enqiure_form.php" onsubmit="setPhoneValues();">
         
         <div class="row">
            <div class="col-12 col-lg-6 text-start">
               <label for="recipient-name" class="col-form-label">Name *</label>
               <input type="text" class="form-control" id="recipient-name" name="name">
            </div>
            <!-- <div class="col-12 col-lg-6 text-start">
               <label for="recipient-name" class="col-form-label">Last Name</label>
                <input type="text" class="form-control" id="recipient-name"> 
                </div>-->
            <div class="col-12 col-lg-6 text-start">
               <label for="recipient-name" class="col-form-label">Email ID *</label>
               <input type="text" class="form-control" id="recipient-email" name="email">
            </div>
           
			
			 	 <div class="col-12 col-lg-6 text-start">
							  <label for="recipient-name" class="col-form-label">Mobile No *</label>
							  <input type="tel" id="iti_phone_input"  class=" form-control iti-phone-input" placeholder="Phone no *" name="phone">
							   <input type="hidden" id="iti_country_code" name="country_code">
							   <input type="hidden" id="iti_mobile_number" name="mobile_number">
							</div>
			
			
			
			
			
            <div class="col-12 col-lg-6 text-start">
               <label for="country" class="col-form-label">Country</label>
               <select id="country" name="country" class="form-control" style="width:100%"
                  onchange="get_state_city('1')">
                  <option value="" disabled selected>Select your country</option>
                  <?php foreach($counties as $country){ ?>
                  <option data-id="<?php echo $country['id']; ?>"
                     value="<?php echo $country['country']; ?>"
                     <?php if($country['country'] == 'India') { echo 'selected'; }?>>
                     <?php echo $country['country']; ?>
                  </option>
                  <?php } ?>
               </select>
            </div>
            <div class="col-12 col-lg-6 text-start">
               <label for="country" class="col-form-label">State</label>
               <select id="state" name="state" class="form-control" style="width:100%"
                  onchange="get_state_city('2')">
               <?php echo $state_options; ?>
               </select>
            </div>
            <div class="col-12 col-lg-6 text-start">
               <label for="country" class="col-form-label">City</label>
               <select id="city" name="city" class="form-control" style="width:100%"
                  >
                  <option value="" disabled selected>Select your city</option>
               </select>
            </div>
            <div class="col-12 col-lg-6 text-start" style="margin-top:5px;">
               <label for="recipient-name" class="col-form-label">Grade/Material *</label>
               <input type="text" class="form-control" id="recipient-Grade" name="grade">
            </div>
            <div class="col-12 col-lg-6 text-start" style="margin-top:5px;">
               <label for="recipient-name" class="col-form-label">Size *</label>
               <input type="text" class="form-control" id="recipient-size" name="size">
            </div>
            <div class="col-12 col-lg-6 text-start">
               <label for="recipient-name" class="col-form-label">Quantity *</label>
               <input type="number" class="form-control" id="recipient-quantity"
                  name="quantity">
            </div>
            <div class="col-12 col-lg-6 text-start">
               <label for="recipient-name" class="col-form-label">Company Name *</label>
               <input type="text" class="form-control" id="recipient-company_name"
                  name="company_name">
            </div>
            <div class="col-12 col-lg-12 text-start">
               <label for="recipient-name" class="col-form-label">Address</label>
               <input type="text" class="form-control" id="recipient-address" name="address">
            </div>
            <!-- <div class="col-12 col-lg-6 text-start">
               <label for="recipient-name" class="col-form-label">Recipient:</label>
               <input type="text" class="form-control" id="recipient-name">
               </div> -->
            <div class="col-12 col-lg-12 text-start">
               <label for="message-text" class="col-form-label">Message:</label>
               <textarea class="form-control" id="message-message" name="message"></textarea>
            </div>
            <div class="col-12 col-lg-12 text-start" style="margin-top:20px">
               <div style="" class="g-recaptcha" data-sitekey="<?php echo  SITE_KEY; ?>"
                  data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired">
               </div>
               <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden" />
            </div>
         </div>
         <!-- <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
            </div> -->
   </div>
   <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   <input type="submit" class="btn btn-primary">
   </div>
   </form>
</div>
</div>
<?php include 'include/footer.php'; ?>
	<script>
	$(document).ready(function(){
		$('#country').select2();
		$('#state').select2();
		$('#enqiure_form').validate({ 
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
				grade: {
					required: true,
				},
				size: {
					required: true,
				},
				quantity: {
					required: true,
				},
				company_name: {
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
				"hidden-grecaptcha": {
				required: "reCAPTCHA is mandatory."
				} 
			}, 
		});
	});
	</script>