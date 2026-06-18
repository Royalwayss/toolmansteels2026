<?php 
require_once('include/config.php');
$sql = "SELECT *  FROM blogs where status = '1' and blog_url='".@$_REQUEST['slug']."'"; 
$result =mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result); 
if(empty($row)){
	http_response_code(404);
	include '404.php';
	exit;
}else{
	$blog = $row;
}
include 'include/header.php';
 ?>
 <style>
 #blog_details ul { margin-bottom: 10px !important; }
 #blog_details .mt-4 {
    margin-top: 10px !important;
} 
#blog_details .mt-5 {
    margin-top: 1rem !important;
}

#blog_details a {
    text-decoration: none !important;
}

#blog_details .mb-5 {
    margin-bottom: 1rem !important;
}
.blog-meta{
    display:flex;
    gap:20px;
    font-size:14px;
    color:#555;
    margin-bottom:15px;
}

.meta-item{
    display:flex;
    align-items:center;
}

.meta-item i{
    margin-right:6px;
    color:rgb(59 56 108);
}


.blog-table tr:first-child th,
.blog-table tr:first-child td {
    background-color: #106d91; /* your desired background */
    color: #fff;               /* your desired text color */
}


 </style>
<main>
      <section class="inner-banners">
        <!-- <div class="about-banner">
      <img class="w-100" src="assets/img/banners/infra-banner.jpg">
    </div> -->
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
            <div class="row" id="blog_details">
                <div class="blog-meta">
               <span class="meta-item">
               <i class="fa fa-calendar"></i>
               Published on: <?php echo  date("M-d, Y", strtotime($blog['published_date'])); ?>
			   </span>
               <span class="meta-item">
               <i class="fas fa-clock"></i>
               <?php echo  $blog['read_time']; ?>
			   </span>
            </div>
				<div class="col-12">
                    <div class="heading">
                        <h6><?php echo $blog['title']; ?></h6>
                    </div>
                </div>
                <?php 
				$blog_content = base64_decode($blog['blog_content']);
				
				echo $blog_content;
				?>
				 <div class="col-12 col-lg-4 d-flex justify-content-end">
                    <div class="contact-card text-center">
                        <p class="mt-3 mb-4">Ready to upgrade? Contact our team today for expert guidance and support.
                        </p>
                        <a href="contact.php" class="btn btn-contact px-4 py-2">Contact</a>
                    </div>
                </div>
           
            </div>
        </div>
    </section>
</main>
<?php include 'include/footer.php'; ?>