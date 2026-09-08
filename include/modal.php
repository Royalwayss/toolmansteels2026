 <?php
 require_once('include/config.php');
 $counties = get_counties($conn ); 
 $state_options = get_state_options($conn,'101'); 
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){   
         $page_link = "https://";   
    }else{  
         $page_link = "http://";   
    }
    $page_link.= $_SERVER['HTTP_HOST'];   
    $page_link.= $_SERVER['REQUEST_URI'];   

   $productSlug = basename(trim($page_link, '/'));

	$faqs = [];
	
	$faq_sql = "SELECT * FROM `faqs` WHERE `slug` = '".$productSlug."' order by id asc";
	
	$faq_result = $conn->query($faq_sql); 
    
    if ($faq_result->num_rows > 0) { 
    
        while ($faq_row = $faq_result->fetch_assoc()) { 
        
            $faqs[] = $faq_row;
        }
    }

   
	
 ?>
 
 <?php if(!empty($faqs)) { ?>
 <div class="mb-5">
   <h3 class="mt-4 product-detail-sub-heading">Frequently Asked Questions</h3>
   <?php foreach ($faqs as $index => $faq) { $collapseId = 'd3FaqAnswer' . $index; $headingId = 'd3FaqHeading' . $index; ?>
   <div class="accordion-item">
     <h2 class="accordion-header" id="<?php echo $headingId; ?>">
       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="false" aria-controls="<?php echo $collapseId; ?>">
         <?php echo $faq['question']; ?>
       </button>
     </h2>
     <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $headingId; ?>" data-bs-parent="#d3FaqAccordion">
       <div class="accordion-body">
         <?php echo $faq['answer']; ?>
       </div>
     </div>
   </div>
   <?php } ?>

   <div class="accordion faq-section" id="d<?php echo $faq['id']; ?>FaqAccordion">
     <div class="accordion-item">
       <h2 class="accordion-header" id="d3FaqHeadingOne">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#d3FaqAnswerOne" aria-expanded="false" aria-controls="d3FaqAnswerOne">
           What is D3 tool steel, and what are its main advantages for manufacturers?
         </button>
       </h2>
       <div id="d3FaqAnswerOne" class="accordion-collapse collapse" aria-labelledby="d3FaqHeadingOne" data-bs-parent="#d3FaqAccordion">
         <div class="accordion-body">
           <p>We manufacture D3 / DIN 1.2080 / AISI D3 as a high-carbon, high-chromium cold work tool steel. Its main characteristics include superior wear resistance, high compressive strength, good dimensional stability, deep-hardening response, fine grain size, uniform carbide distribution and good cleanliness. It hardens with only a slight dimensional change, which is important for precision tooling.</p>
         </div>
       </div>
     </div>

   </div>

   <?php } ?>

   <div class="row">
     <div class="col-12 text-center pb-5">
       <div class="product-detail-button">
         <button type="button" class="btn products-button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" id="product_enquire_button">ENQUIRE NOW</button>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Enquire Now</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                 <form id="product_enqiure_form" method="post" action="save-product-enqiure.php" onsubmit="setPhoneValues();">
                   <input type="hidden" name="product_name" id="productname">
                   <input type="hidden" name="page_link" value="<?php echo $page_link; ?>">
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
                       <input type="tel" id="iti_phone_input" class="iti-phone-input" placeholder="Phone no *" name="phone">
                       <!-- Hidden fields -->
                       <input type="hidden" id="iti_country_code" name="country_code">
                       <input type="hidden" id="iti_mobile_number" name="mobile_number">
                     </div>

                     <div class="col-12 col-lg-6 text-start">
                       <label for="country" class="col-form-label">Country</label>
                       <select id="country" name="country" class="form-control" style="width:100%" onchange="get_state_city('1')">
                         <option value="" disabled selected>Select your country</option>
                         <?php foreach($counties as $country){ ?>
                         <option data-id="<?php echo $country['id']; ?>" value="<?php echo $country['country']; ?>" <?php if($country['country'] == 'India') { echo 'selected'; }?>><?php echo $country['country']; ?></option>
                         <?php } ?>
                       </select>
                     </div>

                     <div class="col-12 col-lg-6 text-start">
                       <label for="country" class="col-form-label">State</label>
                       <select id="state" name="state" class="form-control" style="width:100%" onchange="get_state_city('2')">

                         <?php echo $state_options; ?>
                       </select>
                     </div>

                     <div class="col-12 col-lg-6 text-start">
                       <label for="country" class="col-form-label">City</label>
                       <select id="city" name="city" class="form-control" style="width:100%" data-page="popup">
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
                       <input type="number" class="form-control" id="recipient-quantity" name="quantity">
                     </div>
                     <div class="col-12 col-lg-6 text-start">
                       <label for="recipient-name" class="col-form-label">Company Name *</label>
                       <input type="text" class="form-control" id="recipient-company_name" name="company_name">
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

                       <div style="" class="g-recaptcha" data-sitekey="<?php echo  SITE_KEY; ?>" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>

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
         </div>
       </div>
     </div>
   </div>

   <script>

   </script>