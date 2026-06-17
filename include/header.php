<!DOCTYPE html>
<html lang="en">
   <?php 
      require_once('include/config.php');
      $pageName = basename($_SERVER['PHP_SELF']); 
      
      $products = [
      
                       ['page'=>'product-h13.php','name'=>'H13 / DIN 1.2344 / AISI H13 Steel Grade'],
                       ['page'=>'product-h11.php','name'=>'H11 / DIN 1.2343 / AISI H11 Steel Grade'],
                       ['page'=>'product-h12.php','name'=>'H12 / DIN 1.2606 / AISI H12 Steel Grade'],
                       ['page'=>'product-h10.php','name'=>'H10 / DIN 1.12365 / AISI H10 Steel Grade'],
                       ['page'=>'product-h21.php','name'=>'H21, / DIN 1.2581 / AISI H21 Steel Grade'],
                       ['page'=>'product-db6.php','name'=>'DB6 / DIN 1.12714 / AISI L6 Steel Grade'],
                       ['page'=>'product-1.2367.php','name'=>'1.2367 / DIN 1.2367 / AISI 1.2367 Steel Grade: Steel Grade'],
                       ['page'=>'product-d2.php','name'=>'D2 / DIN 1.2379 / AISI D2 Steel Grade'],
                       ['page'=>'product-d3.php','name'=>'D3 / DIN 1.2080 / AISI D3 Steel Grade'],
                       ['page'=>'product-o1.php','name'=>'O1 / DIN 1.2510 / AISI O1 Steel Grade'],
                       ['page'=>'product-S1.php','name'=>'S1 / DIN 1.2550 / AISI S1 Steel Grade'],
                       ['page'=>'product-A2.php','name'=>'A2 / DIN 1.12363 / AISI A2 Steel Grade'],
                       ['page'=>'product-1.2767.php','name'=>'1.2767 / DIN 1.12767 / 1.2767 Steel Grade'],
                       ['page'=>'product-D2-1.2601.php','name'=>'D2 1.2601 / DIN 1.2601 / D2 1.2601 Steel Grade'],
                       ['page'=>'product-S7-1.2357.php','name'=>'S7 1.2357 / DIN 1.2357 / AISI S7 Steel Grade'],
                       ['page'=>'product-A8-M.php','name'=>'A8 M / AISI A8 MOD Steel Grade'],
                       ['page'=>'product-dc-53.php','name'=>'DC 53 Steel Grade'],
                       ['page'=>'product-m2.php','name'=>'M2 / DIN 1.3343 / AISI M2 Steel Grade'],
                       ['page'=>'product-m3.php','name'=>'M3 / DIN 1.3344 / AISI M3 Steel Grade'],
                       ['page'=>'product-m7.php','name'=>'M7 / DIN 1.3348 / AISI M7 Steel Grade'],
                       ['page'=>'product-m35.php','name'=>'M35 / DIN 1.3243 / AISI M35 Steel Grade'],
                       ['page'=>'product-m42.php','name'=>'M42 / DIN 1.3247 / AISI M42 Steel Grade'],
                       ['page'=>'product-abc-3.php','name'=>'ABC III / DIN 1.3333 / AISI ABC III Steel Grade'],
                       ['page'=>'product-t1.php','name'=>'T1 / DIN 1.3355 / AISI T1 Steel Grade'],
                       ['page'=>'product-t4.php','name'=>'T4 / DIN 1.3255 / AISI T4 Steel Grade'],
                       ['page'=>'product-t15.php','name'=>'T15 / DIN 1.3202 / AISI T15 Steel Grade'],
                       ['page'=>'product-t42.php','name'=>'T42 / DIN 1.3207 / AISI T42 Steel Grade']
                      
      
      ];
      $product_pages = array_column($products, 'page');
      
      $product_list = [];
      
      foreach($products  as $pro){
      	$product_list[$pro['page']] =$pro['name'];
      }
      
      
     
      
      ?>
   <head>
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-C6751J6JZ5"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag(){dataLayer.push(arguments);}
         
         gtag('js', new Date());
         
         
         
         gtag('config', 'G-C6751J6JZ5');
         
      </script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta property="og:site_name" content="Toolman Special Steels"/>
      <?php if($pageName == 'index.php'){ ?>
      <title>High Speed Steel Manufacturers - Special Steel, Hot Work Steel, PM Steel, Die Blocks, Cold Work Steel Manufacturer, Exporters & Suppliers in India</title>
      <meta name="description" content="Toolman is one of the leading high speed steel manufacturer, exporters and suppliers in India. Get a quote for special steel, hot work steel PM steel, die block, cold work steel & knives making steel. We are specialize in h10, h11, h12, h13, h21, db6, m35, m42, t1, m2, m35, m42, t1, din 2379, din 2080, din 2738, din 2311, din 2379, din 2080, din 2738, din 2311, din 2379, aisi h11,aisi h21,aisi h12, aisi m2, aisi m35, aisi m42, aisi t1, aisi m2, aisi m35, aisi m42, din 2080, din 2311, din 2714, din 2344, din 2343, din 2581, din 2365, din 2606, din 2714 , din 2344, din 2343, din 2581, din 2365, din 2606, din 3343, din 3243, din 3247, din 3355, din 3343, din 3243, din 3247, din 3355 and all types of high speed steel.">
      <meta name="keywords" content="pm steel, die block, cold work steel & knives making steel. We are specialize in h10, h11, h12, h13, h21, db6, m35, m42, t1, m2, m35, m42, t1, din 2379, din 2080, din 2738, din 2311, din 2379, din 2080, din 2738, din 2311, din 2379, aisi h11,aisi h21,aisi h12, aisi m2, aisi m35, aisi m42, aisi t1, aisi m2, aisi m35, aisi m42, din 2080, din 2311, din 2714, din 2344, din 2343, din 2581, din 2365, din 2606, din 2714 , din 2344, din 2343, din 2581, din 2365, din 2606, din 3343, din 3243, din 3247, din 3355, din 3343, din 3243, din 3247, high speed steel">
      <?php }else if($pageName == 'about.php'){ ?>
      <title>About - Toolman - Special Steel Manufacturer in India</title>
      <meta name="description" content="Toolman specializes in the manufacturing of high quality special steel grades of high speed steel, tool and die steel, mould steel and alloy steel.">
      <meta name="keywords" content="about, toolman, special steel">
      <?php }else if($pageName == 'timeline.php'){ ?>
      <title>Our Journey - Toolman</title>
      <meta name="description" content="Experience Toolman's transformative journey. Our growth story has been fueled by a relentless pursuit of excellence and innovation. We are proud to be at the forefront of the steel industry, offering end to end solutions that add value to our customers operations.">
      <meta name="keywords" content="journey, toolman">
      <?php }else if($pageName == 'products.php'){ ?>
      <title>Hot Work Steels, Cold Work Steels & High Speed Steels Products Manufacturer, Exporters & Suppliers in India</title>
      <meta name="description" content="Toolman is one of the leading hot work steels, cold work steels & high speed steels products manufacturer, exporters & suppliers in India.">
      <meta name="keywords" content="hot work steels, cold work steels & high speed steels products">
      <?php }else if($pageName == 'melting-casting.php'){ ?>
      <title>Melting, Casting And Remelting</title>
      <meta name="description" content="Discover our state-of-the-art melting, casting, and remelting processes.">
      <meta name="keywords" content="melting, casting, remelting">
      <?php }else if($pageName == 'forging.php'){ ?>
      <title>Best Forging Industry & Solution - Infrastructure - Toolman</title>
      <meta name="description" content="Experience the legacy of Toolman. Toolman has over 67 years of experience in forging high-quality steel grades. Our advanced techniques enable us to produce forgings of various sizes and specifications including rounds, squares, flats, blanks and upset forging.">
      <meta name="keywords" content="forging, infrastructure, toolman">
      <?php }else if($pageName == 'rolling-mill.php'){ ?>
      <title>Best Rolling Mill Solutions - Infrastructure - Toolman</title>
      <meta name="description" content="Discover Toolman's cutting-edge rolling mill technology. Our advanced infrastructure ensures precision and efficiency in every process.">
      <meta name="keywords" content="rolling mill, infrastructure">
      <?php }else if($pageName == 'heat-treatment.php'){ ?>
      <title>Heat Treatment Solutions - Toolman</title>
      <meta name="description" content="Toolman offers a comprehensive range of heat treatment. Our state-of-the-art facilities ensure precise and consistent results.">
      <meta name="keywords" content="heat treatment, toolman">
      <?php }else if($pageName == 'machining.php'){ ?>
      <title>Precision Machining Services - Toolman</title>
      <meta name="description" content="Toolman's advanced machining capabilities deliver superior quality and accuracy.">
      <meta name="keywords" content="machining services, toolman">
      <?php }else if($pageName == 'production-flow-chart.php'){ ?>
      <title>Understanding Our Production Process - Production Flow Chart - Toolman</title>
      <meta name="description" content="Gain insights into our efficient production process. Explore our detailed flowchart to understand how we deliver quality products.">
      <meta name="keywords" content="flow chart, toolman">
      <?php }else if($pageName == 'export.php'){ ?>
      <title>Export - Global Market, USA, Japan, China, and Europe - Toolman</title>
      <meta name="description" content="Toolman - Your global partner for high-quality products. We are exporting to the USA, Japan, China, Europe, Turkey and other countries.">
      <meta name="keywords" content="export, toolman">
      <?php }else if($pageName == 'events.php'){ ?>
      <title>Events - Industry trends and Innovations - Toolman</title>
      <meta name="description" content="Stay updated on the latest industry trends and innovations. Discover where you can meet the Toolman team at upcoming events. Also, view our past events.">
      <meta name="keywords" content="events, toolman">
      <?php }else if($pageName == 'career.php'){ ?>
      <title>Jobs and Careers - Join Our Team and Shape the Future of Steel</title>
      <meta name="description" content="Explore exciting career opportunities at Toolman. If you are looking for jobs in steel industry then apply at Toolman.">
      <meta name="keywords" content="jobs, toolman">
      <?php }else if($pageName == 'contact.php'){ ?>
      <title>Contact - Toolman</title>
      <meta name="description" content="Toolman is one of the leading hot work steels, cold work steels & high speed steels manufacturer, exporters and suppliers in India. If you have any query related to our products or services then you can contact us at any time.">
      <meta name="keywords" content="conntact, toolman">
      <?php }else if($pageName == 'blog.php'){ ?>
      <title>Toolman Steels Blog - High-Speed, Hot/Cold Work & PM Steel Insights</title>
     <meta name="description" content="Explore the Toolman Steels blog for expert insights on high-speed steel, hot work steel, cold work steel, and PM steel. Stay informed about industry trends and product applications.">
      <?php }else if($pageName == 'cold-work-toolsteel-crafted-for-perfection.php'){ ?>
      <title>Cold Work Tool Steel: High-Performance Steel for Precision - Toolman Steels</title>
     <meta name="description" content="Discover high-carbon cold work tool steel designed for extreme wear and pressure. Partner with Toolman Special Steels for precision and reliability. Build extraordinary tools and components.">
      <?php }else if($pageName == 'leading-the-way-in-high-speed-steel.php'){ ?>
      <title>High-Speed Steel - Leading Manufacturer & Supplier - Toolman Steels</title>
      <meta name="description" content="Toolman Steels is a leading manufacturer, supplier, and exporter of high-speed steel. We build lasting partnerships by delivering top-quality products and reliable service.">
      <?php }else if($pageName == 'high-quality-steel-for-every-industry.php'){ ?>
      <title>Toolman Special Steels - Premium Steel Solutions for Diverse Industries</title>
    <meta name="description" content="Toolman Special Steels delivers high-quality steel products using advanced technology and expert supervision. We prioritize customer satisfaction, providing top-grade steel solutions across India and globally.">
      <?php }else if($pageName == 'hot-work-tool-steel.php'){ ?>
      <title>Hot Work Tool Steel - High-Temperature Steel Solutions - Toolman Steels</title>
      <meta name="description" content="Toolman Special Steels, established in 1957, manufactures high-performance hot work tool steel designed for extreme temperature applications. Discover durable steel for cutting and shaping.">
      <?php }else if($pageName == 'forging-strength-with-special-steel.php'){ ?>
      <title>Special Steel Solutions - High-Speed, Hot/Cold Work & PM Steel - Toolman Steels</title>
      <title> DIN 1.2379 Cold Work Tool Steel by Toolman Special Steels</title>
      <meta name="description" content="In the realm of cold work tool steels, DIN 1.2379 -also known as AISI D2 or X153CrMoV12 -stands out for its exceptional wear resistance and dimensional stability. At Toolman Special Steels, we specialize in supplying this high-performance steel, tailored to meet the rigorous demands of various industrial applications.">
      <?php }else if($pageName == 'din-12379-cold-work-tool-steel.php'){ ?>
      <title>DIN 1.2379 Cold Work Tool Steel by Toolman Special Steels</title>
      <meta name="description" content="In the realm of cold work tool steels, DIN 1.2379 -also known as AISI D2 or X153CrMoV12 -stands out for its exceptional wear resistance and dimensional stability. At Toolman Special Steels, we specialize in supplying this high-performance steel, tailored to meet the rigorous demands of various industrial applications.">
      <?php }else if($pageName == 'why-a2-tool-steel-is-the-secret-weapon-of-precision-manufacturing.php'){ ?>
      <title> Why A2 Tool Steel is the Secret Weapon of Precision Manufacturing</title>
      <meta name="description" content=" A2 tool steel is a workhorse alloy that combines toughness, wear resistance, and dimensional stability. If you’re a machinist, engineer, or metallurgist, A2 is a solid choice for tools that last longer and perform better.">
      
        <!-- blog 1 19-08 -->
       <?php }else if($pageName == 'din-1-2714-hot-work-tool-steel-properties-applications-processing.php'){ ?>
        <title>DIN 1.2714 Hot Work Tool Steel - Properties, Applications, and Processing</title>
         <meta name="description" content=" Explore DIN 1.2714 hot work tool steel — its properties, applications, and processing. Toolman Special Steels delivers high-performance forging-grade steel worldwide..">
  
       <!-- blog 2 19-08 -->
        <?php }else if($pageName == 'h13-tool-steel-high-performanc-mold-die-production.php'){ ?>
         <title>H13 Tool Steel - High-Performance Mold & Die Production</title>
         <meta name="description" content= "Learn why H13 tool steel is the industry standard for mold and die applications. Toolman Special Steels supplies precision-grade H13 with global compliance.">

        <!-- blog 3 19-08 -->
        <?php }else if($pageName == 'high-speed-steel-precision-performance.php'){ ?>
         <title>High-Speed Steel Precision and Performance by Toolman</title>
        <meta name="description" content= "Discover Toolman’s high-speed steel range, engineered for durability, precision cutting, and global industry needs. Trusted supplier for manufacturers worldwide.">

         <!-- blog 4 19-08 -->
         <?php }else if($pageName == 'm42-high-speed-steel-precision-performance.php'){ ?>
        <title>M42 High-Speed Steel Precision and Performance</title>
        <meta name="description" content="M42 high-speed steel delivers superior wear resistance and toughness. Toolman Special Steels provides export-quality M42 for cutting tools and industrial use.">

  <!-- blog 5 20-08 -->
          <?php }else if($pageName == 't1-high-speed-steel-the-original-workhorse-of-hss.php'){ ?>
          <title>T1 High Speed Steel – The Original Workhorse of HSS</title>
          <meta name="description" content="Looking for reliable T1 high speed steel suppliers? Toolman Special Steels provides export-ready tungsten HSS with high hardness and performance.">

    <!-- blog 1 20-11 -->
    <?php }else if($pageName == 'din-1-2714-55nicrmov7-hot-work-steel-the-forging-grade-built-to-endure.php'){ ?>
   <title> DIN 1.2714: 55NiCrMoV7 Hot Work Steel – The Forging Grade Built to Endure</title>
<meta name="description" content="DIN 1.2714 (55NiCrMoV7) is engineered for forging strength, toughness and durability. Toolman Special Steels supplies export-grade hot work steel trusted worldwide.">



    <!-- blog 2 20-11 -->
    <?php }else if($pageName == 'from-forge-to-finish-the-steel-behind-premium-knives.php'){ ?>
   <title>From Forge to Finish – The Steel Behind Premium Knives</title>
<meta name="description" content=" Discover the steel behind premium knives, from D2 to 440B and 440C. Toolman Special Steels provides high-quality knife-making steels for global manufacturers.">



    <!-- blog 3 20-11 -->
    <?php }else if($pageName == 'din-1-2344-aisi-h13-tool-steel-hot-work-champion-for-die-casting-extrusion-molds.php'){ ?>
   <title>DIN 1.2344: AISI H13 Tool Steel – The Hot Work Champion for Die Casting, Extrusion & Molds </title> 

<meta name="description" content="AISI H13 (DIN 1.2344) offers heat resistance, toughness and stability for die-casting and extrusion. Toolman Special Steels delivers certified hot work steel worldwide.">



    <!-- blog 4 20-11 -->
    <?php }else if($pageName == '440b-stainless-balanced-choice-for-industrial-precision.php'){ ?>
    <title>440B Stainless: The Balanced Choice for Industrial Precision</title>
<meta name="description" content="440B stainless steel delivers strength, corrosion resistance and clean machinability. Toolman Special Steels exports reliable stainless grades for industrial precision.">

    <!-- blog 4 20-11 -->
    <?php }else if($pageName == 'toolman-special-steels-imrc-2026-sustainable-tool-steel.php'){ ?>
   <title>Toolman Special Steels at IMRC 2026 | Sustainable Tool Steel</title>
<meta name="description" content="Meet Toolman Special Steels at IMRC 2026 in Jaipur. Discover our H13, HSS, and recycled high-performance tool steels powering sustainable tooling solutions.">



      <?php }else if($pageName == '404.php'){ ?>
      <title>Page not Found - Toolman</title>
      <?php }else if($pageName == 'blog_detail.php'){  ?>
	  <title><?php echo $blog['meta_title']; ?></title>
	  <meta name="description" content="<?php echo $blog['meta_description']; ?>">
	  <?php }else if(in_array($pageName,$product_pages)){ 
	  
	  $GET_PRODUCT_NAME = $product_list[$pageName];
	  
	  ?>
      
	  
	   <title>Toolman Special Steels -  <?php echo $GET_PRODUCT_NAME; ?> Exporters & Suppliers in India - USA, Europe, Australia & Asia</title>
      <meta name="description" content="Toolman Special Steels is manufacturer & exporter in USA, Europe, Australia & Asia of high quality <?php echo $GET_PRODUCT_NAME; ?>. We are one of the best hot work steel, cold work steel and high speed steel manufacturer, exporters & suppliers in India. Get a quote now.">
      
	  <?php } else{ ?>
      <title>Toolman</title>
      <?php } ?>
      <link href="assets/img/favicon.png" rel="shortcut icon">
      <!-- <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'> -->
      <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
         rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
         integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="./style.css?v=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	  <link href="assets/css/select2.min.css" rel="stylesheet" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.3.5/css/intlTelInput.css"/>
<style>
.iti-phone-input {
width: 100%;
padding: 10px;
box-sizing: border-box;
margin-top: 10px;
}

/* Make the intl-tel-input wrapper full width */
.iti.iti--separate-dial-code {
width: 100%;
}
.error{ color:red; }

    
	 
	  .select2-container--default .select2-selection--single .select2-selection__rendered {
		color: #444;
		line-height: 36px;
		background-color: #fff !important;
		background-clip: padding-box !important;
		border: 1px solid #ced4da !important;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered {
		color: #444;
		line-height: 38px!important;
	}
	.select2-container--default .select2-selection--single {
		border: none!important;
	}
	  </style>
      <?php if($pageName == 'index.php'){ ?>
      <script type="application/ld+json">
         {
         
           "@context" : "https://schema.org",
         
           "@type" : "WebSite",
         
           "name" : "Toolman Special Steels",
         
           "url" : "https://www.toolmansteels.com"
         
         }
         
      </script>
      <?php } ?>
   </head>
<!--   <div class="preloader">-->

<!--   <div class="loader desktop-view-loader">-->
<!--<img src="assets/img/latest-loader-desktop.gif">-->


<!--   </div>-->
<!--      <div class="loader mobile-view-loader">-->
<!--<img src="assets/img/latest-loader-mobile.gif">-->


<!--   </div>-->

<!--</div>-->
   <body>
      <header class="header-section fixed-top">
         <div class="top-social">
            <div class="container-fluid f-position">
               <div class="row">
                  <div class="col-12 col-lg-6">
                     <div class="top-social-media ">
                        <ul class="d-flex">
                           <li> <a rel="nofollow" href="https://www.linkedin.com/company/toolmanspecialsteels/" data-wpel-link="external" target="_blank"><i class="fa-brands fa-linkedin media-color "></i></a></li>
                           <li> <a rel="nofollow" href="https://www.instagram.com/toolmanspecialsteels/" data-wpel-link="external" target="_blank"><i class="fa-brands fa-instagram media-color "></i></a></li>
                           <li> <a rel="nofollow" href="https://www.facebook.com/toolmanspecialsteels/" data-wpel-link="external" target="_blank"><i class="fa-brands fa-facebook-f media-color "></i></a></li>
                           <!-- <li> <a rel="nofollow" href="" data-wpel-link="external" target="_blank"><i class="fa-brands fa-x-twitter media-color"></i></a></li>
                              <li> <a rel="nofollow" href="" target="_blank"><i class="fa-brands fa-whatsapp media-color"></i></a></li> -->
                        </ul>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 text-end">
                     <ul class="footer-points my-2">
                        <li class="footer-space text-white"><a class=" text-white mx-3" href="mailto:indiatoolman@gmail.com"> indiatoolman@gmail.com</a>
                        </li>
                        <!-- <li class="footer-space"><i class="fa-solid fa-envelope font-color"></i><a
                           class="ml-2 text-black " href="mailto:indiatoolman@gmail.com">indiatoolman@gmail.com</a>
                           </li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               <div class="container-fluid p-0">
                  <a class="navbar-brand" href="<?php echo BASEURL; ?>">
                     <div class="logo">
                        <img src="assets/img/logo/tooman-logo.png" title="Hot Work Steel, Cold Work Steel and High Speed Steel Manufacturers, Exporters and Suppliers in India" alt="Hot Work Steel, Cold Work Steel and High Speed Steel Manufacturers, Exporters and Suppliers in India">
                     </div>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse header-toolman" id="navbarSupportedContent">
                     <ul class="navbar-nav mb-2 mb-lg-0 wsmenu-list">
                        <!-- <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                           </li> -->
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="about.php">About Us</a>
                           </li> -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle drop-point" id="navbarDropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">About Us</a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li class="dropdown-submenu"><a class="dropdown-item " href="about.php">
                                 Overview
                                 </a>
                              </li>
                              <li class="dropdown-submenu"><a class="dropdown-item " href="timeline.php">
                                 Timeline
                                 </a>
                              </li>
                              <!-- <li class="dropdown-submenu"><a class="dropdown-item " href="production-flow-chart.php">
                                 Flow Chart
                                 </a>
                                 </li> -->
                           </ul>
                        </li>
                        <li class="pro d-md-block nav-item">
                           <!-- <span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span> -->
                           <a href="products.php" class="nav-link">Products</a>
                           <div class="megamenu clearfix">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">
                                    <img class="flag-size" src="assets/img/logo/india.png" alt="india"> India
                                    </a>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="menu1-tab" data-bs-toggle="tab" href="#menu1" role="tab"
                                       aria-controls="menu1" aria-selected="false">
                                    <img class="flag-size" src="assets/img/logo/eu.png" alt="europe"> Europe
                                    </a>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="menu2-tab" data-bs-toggle="tab" href="#menu2" role="tab"
                                       aria-controls="menu2" aria-selected="false">
                                    <img class="flag-size" src="assets/img/logo/usa.png" alt="usa"> USA
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                 <div id="home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="typography-text clearfix">
                                       <div class="row my-3">
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">Hot Work Steels</a></li>
                                                <li><a href="h13-din-1.2344-aisi-h13-steel-grade">H13 </a></li>
                                                <li><a href="h11-din-1.2343-aisi-h11-steel-grade">H11 </a></li>
                                                <li><a href="h12-din-1.2606-aisi-h12-steel-grade">H12 </a></li>
                                                <li><a href="h10-din-1.12365-aisi-h10-steel-grade">H10 </a></li>
                                                <li><a href="h21-din-1.2581-aisi-h21-steel-grade">H21 </a></li>
                                                <li><a href="db6-din-1.12714-aisi-l6-steel-grade">DB6 </a></li>
                                                <li><a href="1.2367-din-1.2367-aisi-1.2367-steel-grade-steel-grade">1.2367 </a></li>
                                             </ul>
                                             <!-- <ul class="link-list">
                                                <li class="title"><a href="plastic-mould-steel.html">Plastic Mould Steel</a></li>
                                                <li><a href="p20ni.html">P20+Ni</a></li>
                                                <li><a href="p20.html">P20</a></li>
                                                </ul> -->
                                          </div>
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">Cold Work Steels</a></li>
                                                <li><a href="d2-din-1.2379-aisi-d2-steel-grade">D2 </a></li>
                                                <li><a href="d3-din-1.2080-aisi-d3-steel-grade">D3 </a></li>
                                                <li><a href="o1-din-1.2510-aisi-o1-steel-grade">O1 </a></li>
                                                <li><a href="s1-din-1.2550-aisi-s1-steel-grade">S1 </a></li>
                                                <li><a href="a2-din-1.12363-aisi-a2-steel-grade">A2 </a></li>
                                                <li><a href="1.2767-din-1.12767-1.2767-steel-grade">1.2767 </a></li>
                                                <li><a href="d2-1.2601-din-1.2601-d2-1.2601-steel-grade">D2 1.2601 </a></li>
                                                <!-- <li><a href="product-1.php">1.2767  </a></li> -->
                                                <li><a href="s7-1.2357-din-1.2357-aisi-s7-steel-grade">S7 1.2357 </a></li>
                                                <li><a href="a8-m-aisi-a8-mod-steel-grade">A8 M </a></li>
                                                <li><a href="dc-53-steel-grade">DC 53</a></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">High Speed Steels</a></li>
                                                <li><a href="m2-din-1.3343-aisi-m2-steel-grade">M2 </a></li>
                                                <li><a href="product-m3.php">M3 </a></li>
                                                <li><a href="m7-din-1.3348-aisi-m7-steel-grade">M7 </a></li>
                                                <li><a href="m35-din-1.3243-aisi-m35-steel-grade">M35 </a></li>
                                                <li><a href="m42-din-1.3247-aisi-m42-steel-grade">M42 </a></li>
                                                <li><a href="abc-iii-din-1.3333-aisi-abc-iii-steel-grade">ABC III </a></li>
                                                <li><a href="t1-din-1.3355-aisi-t1-steel-grade">T1 </a></li>
                                                <li><a href="t4-din-1.3255-aisi-t4-steel-grade">T4 </a></li>
                                                <li><a href="t15-din-1.3202-aisi-t15-steel-grade">T15 </a></li>
                                                <li><a href="t42-din-1.3207-aisi-t42-steel-grade">T42 </a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="menu1" class="tab-pane fade" role="tabpanel" aria-labelledby="menu1-tab">
                                    <div class="typography-text clearfix">
                                       <div class="row my-3">
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">Hot Work Steels</a></li>
                                                <li><a href="h13-din-1.2344-aisi-h13-steel-grade">DIN 1.2344</a></li>
                                                <li><a href="h11-din-1.2343-aisi-h11-steel-grade">DIN 1.2343</a></li>
                                                <li><a href="h12-din-1.2606-aisi-h12-steel-grade">DIN 1.2606</a></li>
                                                <li><a href="h10-din-1.12365-aisi-h10-steel-grade">DIN 1.2365</a></li>
                                                <li><a href="h21-din-1.2581-aisi-h21-steel-grade
                                                
                                                ">DIN 1.2581</a></li>
                                                <li><a href="db6-din-1.12714-aisi-l6-steel-grade">DIN 1.2714</a></li>
                                                <li><a href="1.2367-din-1.2367-aisi-1.2367-steel-grade-steel-grade">DIN 1.2367</a></li>
                                             </ul>
                                             <!-- <ul class="link-list">
                                                <li class="title"><a href="plastic-mould-steel.html">Plastic Mould Steel</a></li>
                                                <li><a href="p20ni.html">P20+Ni</a></li>
                                                <li><a href="p20.html">P20</a></li>
                                                </ul> -->
                                          </div>
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">Cold Work Steels</a></li>
                                                <li><a href="d2-din-1.2379-aisi-d2-steel-grade">DIN 1.2379</a></li>
                                                <li><a href="d3-din-1.2080-aisi-d3-steel-grade">DIN 1.2080</a></li>
                                                <li><a href="o1-din-1.2510-aisi-o1-steel-grade">DIN 1.2510</a></li>
                                                <li><a href="s1-din-1.2550-aisi-s1-steel-grade">DIN 1.2550</a></li>
                                                <li><a href="a2-din-1.12363-aisi-a2-steel-grade">DIN 1.2363</a></li>
                                                <li><a href="1.2767-din-1.12767-1.2767-steel-grade">DIN 1.2767</a></li>
                                                <li><a href="d2-1.2601-din-1.2601-d2-1.2601-steel-grade">DIN 1.2601</a></li>
                                                <li><a href="s7-1.2357-din-1.2357-aisi-s7-steel-grade">DIN 1.2357</a></li>
                                                <li><a href="a8-m-aisi-a8-mod-steel-grade">A8 M </a></li>
                                                <li><a href="dc-53-steel-grade">DC 53</a></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">High Speed Steels</a></li>
                                                <li><a href="m2-din-1.3343-aisi-m2-steel-grade">DIN 1.3343</a></li>
                                                <li><a href="product-m3.php">DIN 1.3344</a></li>
                                                <li><a href="m7-din-1.3348-aisi-m7-steel-grade">DIN 1.3348</a></li>
                                                <li><a href="m35-din-1.3243-aisi-m35-steel-grade">DIN 1.3243</a></li>
                                                <li><a href="m42-din-1.3247-aisi-m42-steel-grade">DIN 1.3247</a></li>
                                                <li><a href="abc-iii-din-1.3333-aisi-abc-iii-steel-grade">DIN 1.3333</a></li>
                                                <li><a href="t1-din-1.3355-aisi-t1-steel-grade">DIN 1.3355</a></li>
                                                <li><a href="t4-din-1.3255-aisi-t4-steel-grade">DIN 1.3255</a></li>
                                                <li><a href="t15-din-1.3202-aisi-t15-steel-grade">DIN 1.3202</a></li>
                                                <li><a href="t42-din-1.3207-aisi-t42-steel-grade">DIN 1.3207</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="menu2" class="tab-pane fade" role="tabpanel" aria-labelledby="menu2-tab">
                                    <div class="typography-text clearfix">
                                       <div class="row my-3">
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">Hot Work Steels</a></li>
                                                <li><a href="h13-din-1.2344-aisi-h13-steel-grade">AISI H13</a></li>
                                                <li><a href="h11-din-1.2343-aisi-h11-steel-grade">AISI H11</a></li>
                                                <li><a href="h12-din-1.2606-aisi-h12-steel-grade">AISI H12</a></li>
                                                <li><a href="h10-din-1.12365-aisi-h10-steel-grade">AISI H10</a></li>
                                                <li><a href="h21-din-1.2581-aisi-h21-steel-grade">AISI H21</a></li>
                                                <li><a href="db6-din-1.12714-aisi-l6-steel-grade">AISI L6</a></li>
                                                <li><a href="1.2367-din-1.2367-aisi-1.2367-steel-grade-steel-grade">1.2367 </a></li>
                                             </ul>
                                             <!-- <ul class="link-list">
                                                <li class="title"><a href="plastic-mould-steel.html">Plastic Mould Steel</a></li>
                                                <li><a href="p20ni.html">P20+Ni</a></li>
                                                <li><a href="p20.html">P20</a></li>
                                                </ul> -->
                                          </div>
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">Cold Work Steels</a></li>
                                                <li><a href="d2-din-1.2379-aisi-d2-steel-grade">AISI D2</a></li>
                                                <li><a href="d3-din-1.2080-aisi-d3-steel-grade">AISI D3</a></li>
                                                <li><a href="o1-din-1.2510-aisi-o1-steel-grade">AISI O1</a></li>
                                                <li><a href="s1-din-1.2550-aisi-s1-steel-grade">AISI S1</a></li>
                                                <li><a href="a2-din-1.12363-aisi-a2-steel-grade">AISI A2</a></li>
                                                <li><a href="1.2767-din-1.12767-1.2767-steel-grade">1.2767</a></li>
                                                <li><a href="d2-1.2601-din-1.2601-d2-1.2601-steel-grade">D2-1.2601</a></li>
                                                <li><a href="s7-1.2357-din-1.2357-aisi-s7-steel-grade">AISI S7</a></li>
                                                <li><a href="a8-m-aisi-a8-mod-steel-grade">AISI A8 MOD</a></li>
                                                <li><a href="dc-53-steel-grade">DC 53</a></li>
                                             </ul>
                                          </div>
                                          <div class="col-md-4">
                                             <ul class="link-list">
                                                <li class="title"><a href="products.php">High Speed Steels</a></li>
                                                <li><a href="m2-din-1.3343-aisi-m2-steel-grade">AISI M2</a></li>
                                                <li><a href="product-m3.php">AISI M3</a></li>
                                                <li><a href="m7-din-1.3348-aisi-m7-steel-grade">AISI M7</a></li>
                                                <li><a href="m35-din-1.3243-aisi-m35-steel-grade">AISI M35</a></li>
                                                <li><a href="m42-din-1.3247-aisi-m42-steel-grade">AISI M42</a></li>
                                                <li><a href="abc-iii-din-1.3333-aisi-abc-iii-steel-grade">1.2767</a></li>
                                                <li><a href="t1-din-1.3355-aisi-t1-steel-grade">AISI T1</a></li>
                                                <li><a href="t4-din-1.3255-aisi-t4-steel-grade">AISI T4</a></li>
                                                <li><a href="t15-din-1.3202-aisi-t15-steel-grade">AISI T15</a></li>
                                                <li><a href="t42-din-1.3207-aisi-t42-steel-grade">AISI T42</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Infrastructure</a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li class="dropdown-submenu">
                                 <a class="dropdown-item dropdown-toggle" >Capabilities</a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="melting-casting.php">Melting, Casting and Remelting</a></li>
                                    <li><a class="dropdown-item" href="forging.php">Forging</a></li>
                                    <li><a class="dropdown-item" href="rolling-mill.php">Rolling Mill</a></li>
                                    <li><a class="dropdown-item" href="heat-treatment.php"> Heat Treatment</a></li>
                                    <li><a class="dropdown-item" href="machining.php">Machining</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown-submenu"><a class="dropdown-item " href="flow.php">
                                 Process Flow Chart
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle drop-point" id="navbarDropdownMenuLink" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">Infrastructure</a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <li class="dropdown-submenu"><a class="dropdown-item " href="melting-casting.php">
                              Melting, Casting and Remelting
                               </a>
                             </li>
                             <li class="dropdown-submenu"><a class="dropdown-item " href="forging.php">
                             Forge
                               </a>
                             </li>
                             <li class="dropdown-submenu"><a class="dropdown-item " href="rolling-mill.php">
                                Rolling Mill
                               </a>
                             </li>
                             <li class="dropdown-submenu"><a class="dropdown-item " href="heat-treatment.php">
                             Heat Treatment
                               </a>
                             </li>
                             <li class="dropdown-submenu"><a class="dropdown-item " href="machining.php">
                             Machining
                               </a>
                             </li>
                             <li class="dropdown-submenu"><a class="dropdown-item " href="production-flow-chart.php">
                                 Process Flow Chart
                               </a>
                             </li>
                           </ul>
                           </li> -->
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="infra.php">Infrastructure</a>
                           </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="eia.php">EIA</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="export.php">Exports</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="events.php">Events</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="career.php">Career </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <!-- <main> -->