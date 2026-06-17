<footer class="footer-bg bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mb-5">
          <div class="footer-logo">
            <img src="assets/img/logo/tooman-logo.png">
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-5">
          <div class="footer-heading">
            <h2 class="f-headings">Quick Links</h2>
            <ul class="footer-points">
              <li><a href="<?php echo BASEURL; ?>">Home</a></li>
              <li><a href="about.php">About us</a></li>
              <li><a href="products.php">Products</a></li>
              <!-- <li><a href="infra.php">Infrastructure</a></li> -->
              <li><a href="certi.php">Certifications</a></li>
              <li><a href="career.php">Career</a></li>
              <li><a href="export.php">Exports</a></li>
              <!-- <li><a href="production-flow-chart.php">Flow Chart</a></li> -->
              <li><a href="blog">Blog</a></li>
              <li><a href="contact.php">Contact us</a></li>

            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-5">
          <div class="footer-heading">
            <h2 class="f-headings">Corporate Office</h2>
            <ul class="footer-points">
              <li>Toolman Special Steels Pvt. Ltd, Opp. Ludhiana Airport, Sahnewal, Ludhiana, Punjab, India.</li>
              <li class="footer-space">T:<a class="ml-2" href="tel:+91 9815525326"> +91 9815525326</a></li>
              <li class="footer-space">T:<a class="ml-2" href="tel:+91 9501853532"> +91 9501853532</a></li>
              <li class="footer-space">M: <a class="ml-2" href="mailto:indiatoolman@gmail.com"> indiatoolman@gmail.com</a>
              </li>
              <!-- <li class="footer-space"><i class="fa-solid fa-envelope font-color"></i><a
                class="ml-2 text-black " href="mailto:indiatoolman@gmail.com">indiatoolman@gmail.com</a>
        </li> -->

            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 ">
          <div class="footer-heading">
            <h2 class="f-headings">Follow us</h2>
            <ul class="footer-social-media ">
              <li><a rel="nofollow" href="https://www.linkedin.com/company/toolmanspecialsteels/" target="_blank"><i class="fa-brands fa-linkedin-in font-color"></i></a></li>
              <li><a rel="nofollow" href="https://www.instagram.com/toolmanspecialsteels/" target="_blank"><i class="fa-brands fa-instagram font-color"></i></a></li>
              <li><a rel="nofollow" href="https://www.facebook.com/toolmanspecialsteels/" target="_blank"><i class="fa-brands fa-facebook-f font-color"></i></a></li>
              <!-- <li><a href="#" target="_blank"><i class="fa-brands fa-youtube font-color"></i></a></li> -->



            </ul>
          </div>
        </div>
        <div class="col-12 text-center py-1">
            <p class="copyright-text mb-0" style="font-size: 12px;"> 
            Copyright © <?php echo date('Y'); ?> <span>Toolman Special Steels</span>, All rights reserved.
            <!--    <span class="" style="font-size: 14px; ">Designed By -->
            <!--    <a href="http://royalways.com/" target="_blank" style="color: #000; font-size: 14px; font-weight:500">Royalways</a>-->
              
                
            <!--</span>-->
            </p>
        </div>
      </div>
    </div>
  </footer>
  <div class="popup-btn">
			<a href="contact.php">Request A Quote</a>
</div>
<div class="row">
	
	<div class="col-2 text-end whatsapp-bottom">
		<a class="wp-size" href="https://wa.me/919815170285" target="_blank">
			<img src="assets/img/whatsapp.png">
		</a>
	</div>
</div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="assets/js/select2.min.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $(function () {
      // Owl Carousel
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 9000,
        responsive: {
          0: {
            items: 1 // Display one item on small screens
          },
          425: {
            items: 1 // Display three items on screens larger than 600px
          },
          767: {
            items: 2 // Display three items on screens larger than 600px
          },
          768: {
            items: 2 // Display three items on screens larger than 600px
          },
          992: {
            items: 3 // Display three items on screens larger than 600px
          },
          1024: {
            items: 3 // Display three items on screens larger than 600px
          },
          // 1199: {
          //   items: 3 
          // },

          // Add more breakpoints and items as needed
        }
      });
    });
  </script>
  <script>

    $.fn.jQuerySimpleCounter = function (options) {
      var settings = $.extend({
        start: 0,
        end: 100,
        easing: 'swing',
        duration: 400,
        complete: ''
      }, options);

      var thisElement = $(this);

      $({ count: settings.start }).animate({ count: settings.end }, {
        duration: settings.duration,
        easing: settings.easing,
        step: function () {
          var mathCount = Math.ceil(this.count);
          thisElement.text(mathCount);
        },
        complete: settings.complete
      });
    };


    $('#number1').jQuerySimpleCounter({ end: 1957, duration: 3000 });
    $('#number2').jQuerySimpleCounter({ end: 12, duration: 3000 });
    $('#number3').jQuerySimpleCounter({ end: 50, duration: 5000 });
    $('#number4').jQuerySimpleCounter({ end: 250, duration: 4000 });
    $('#number5').jQuerySimpleCounter({ end: 100, duration: 4000 });



    /* AUTHOR LINK */
    $('.about-me-img').hover(function () {
      $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
    }, function () {
      $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
    });

  </script>
  <script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,
        centeredSlides: true,
        autoplay: true,
        // Navigation arrows
        //   navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        //   },
        breakpoints: {
          320: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 320px
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 480px
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            // when window width is >= 640px
            1280: {
                slidesPerView: 5,
                spaceBetween: 50
            }
        }
    });


	
$( document ).ready(function() {
     var product_enquire = $('#product_enquire_button').length;
     if(product_enquire > 0){
		 $('#country').select2({dropdownParent: $('#exampleModal')});
		 $('#state').select2({dropdownParent: $('#exampleModal')});
		 $('#productname').val($('.product-detail-main-heading').text());
		 $('#product_enqiure_form').validate({ 
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
			   
	 }
});	





      function recaptchaCallback() {
						var response = grecaptcha.getResponse(),
							$button = jQuery(".button-register");
						jQuery("#hidden-grecaptcha").val(response);
						console.log(jQuery("#registerForm").valid());
						if (jQuery("#registerForm").valid()) {
							$button.attr("disabled", false);
						}
						else {
							$button.attr("disabled", "disabled");
						}
				}
				        	/*====================

		Preloader JS

	======================*/

	$(window).on('load', function() {

$('.preloader').addClass('preloader-deactivate');

});


function get_state_city(action){  
	     $('.loadingDiv').show();
		var country = $('#country').find(":selected").attr("data-id"); 
		if(action == 2){
		    var state = $('#state').find(":selected").attr("data-id"); 
		}else{
			var state = '';
		} 
	    $.ajax({
				 url: "get-state-city.php",
				 type:'POST',
				 data: { country:country,state:state,action:action },
			     success:function(resp){ 
		    	 $('.loadingDiv').hide();
				 
					         if(action =='1'){ 
								 $("#state").html(resp);
								 $("#city").html('');
							 }

                             if(action =='2'){
								 if($("#city").attr('data-page') == 'popup'){
								     $('#city').select2({dropdownParent: $('#exampleModal')});
								 }else{
									 $('#city').select2(); 
								 }
								 
								 $("#city").html(resp);
							 }								 
										
				 
				 
		    },error:function(){
		    	$('.loadingDiv').hide();
				
		    }	
		});
	
	
	
}	



</script>
<script src="assets/js/intlTelInput.min.js"></script>
<script src="assets/js/utils.js"></script>
<script>
    const itiInput = document.getElementById("iti_phone_input");
    const countryNameDisplay = document.getElementById("country_name_display");


    // Get all country data, sort by name alphabetically
    const allCountries = window.intlTelInputGlobals.getCountryData();
    allCountries.sort((a, b) => a.name.localeCompare(b.name));

    // Extract ISO2 codes in sorted order
    const sortedCountryCodes = allCountries.map(c => c.iso2);


    // Initialize intl-tel-input
    const iti = window.intlTelInput(itiInput, {
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.5/js/utils.js",
        onlyCountries: sortedCountryCodes // this preserves alphabetical order
    });

    // Update hidden fields before submit
    function setPhoneValues() {
        const countryData = iti.getSelectedCountryData();
        document.getElementById("iti_country_code").value = "+" + countryData.dialCode;
        document.getElementById("iti_mobile_number").value = itiInput.value;
    }

    // Update country name and hidden country code dynamically on country change
    itiInput.addEventListener("countrychange", function() {
        const countryData = iti.getSelectedCountryData(); 
		var country_name = countryData.name; 
		//$("#country").val(country_name);
		$('#country').val(country_name).trigger('change');

        get_state_city(1);
    });
</script>
</body>

</html>