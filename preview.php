<?php
$data = $_POST;// echo "<pre>"; print_r($data ); exit;
$content = '';
$title = '';
if(isset($data['editor']) && !empty($data['editor'])){
	$content = $data['editor'];
}	
if(isset($data['title']) && !empty($data['title'])){
	$title = $data['title'];
}
?>	



<?php include 'include/header.php'; ?>
<main>

    <section class="inner-banners">
        <div class="container-fluid p-0">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-inner banner-top-mobile">
                    <div class="carousel-item active">
                        <img src="assets/img/banners/infra-banner.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption  product-detail-heading-banner">
                            <div class="banners-head">
                                <h5>Blogs
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="capability my-5 blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h6> <?php echo $title; ?></h6>
                    </div>
                </div>

               
               <?php echo $content; ?>
               



            
              <!--  <div class="col-12 col-lg-4 d-flex justify-content-end">
                    <div class="contact-card text-center">
                        <p class="mt-3 mb-4">Ready to upgrade? Contact our team today for expert guidance and support.
                        </p>
                        <a href="contact.php" class="btn btn-contact px-4 py-2">Contact</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</main>

<?php include 'include/footer.php'; ?>


