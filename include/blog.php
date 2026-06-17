<?php include 'include/header.php'; ?>
<style>
.blog-list {
    padding: 0rem 2rem;

}

.blog-list img {
    border-radius: 10px;
}

.blog-heading {
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1px;
}

/* Pagination container */
.pagination {
    margin: 0;
}

/* Default page link */
.pagination .page-link {
    color: #106a8d;
    background-color: #ffffff;
    border: 1px solid #ddd;
    margin: 0 3px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

/* Hover effect */
.pagination .page-link:hover {
    background-color: #f1f1f1;
    color: #106a8d;
}

/* Active page */
.pagination .active .page-link {
    background-color: #106a8d !important;
    border-color: #106a8d !important;
    color: #fff!important;
    font-weight: bold;
    margin:0px 10px 10px;
}
.blog-list .small {
    font-weight: 700;
}

@media (max-width: 576px) {
    .pagination .page-link {
        padding: 4px 8px;
        font-size: 14px;
    }
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

    <section id="about1" class="about about-1 sec-space-top">
        <div class="container">
            <div class="row">
                   
                <?php  $count =1;
                              $sql = "SELECT `id`,`title`,`blog_url`,`short_description`,`image`,`published_date`,`meta_title`,`meta_description`,`meta_keywords` FROM `blogs` ORDER BY `published_date` DESC ";
                              
                              $result= mysqli_query($conn, $sql);
                              
                              while ($row = mysqli_fetch_assoc($result)) { 
                              
                              $title = mb_convert_encoding($row['title'], 'UTF-8', 'UTF-8');
                              $short_description = mb_convert_encoding($row['short_description'], 'UTF-8', 'UTF-8');
							  
							   $title = cleanBlogText($row['title']);
                               $short_description = cleanBlogText($row['short_description']);
							  
							  ?>

				   <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
									<?php if($row['image'] != ''){?>
									<img src="<?php echo BASEURL.'assets/img/blogs/'.$row['image']; ?>" alt="<?php echo $row['title']; ?>" class="img-fluid mb-3 w-100">
							       <?php } ?>
									<div class="">
										<p class="text-muted small">Published on: <?php echo date('M d, Y',strtotime($row['published_date'])); ?></p>
									   <h2 class="blog-heading"><?php echo $title; ?></h2>
										<p><?php echo $short_description; ?>...</p>
										<a class="blog-view-button"
											href="<?php echo $row['blog_url']; ?>">View</a>
									</div>
                    </div>
				
				
				<?php $count++;
                              } 
                              mysqli_free_result($result);
                              
                              
                              ?>
				
				
              
			  
               
	


                <div class="col-12 d-flex justify-content-center mt-4">
                    <ul class="pagination" id="pagination"></ul>
                </div>
            </div>
    </section>
    <!-- /.About 1 -->



</main>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".blog-list");
    const perPage = 6,
        total = items.length,
        pages = Math.ceil(total / perPage);
    const pag = document.getElementById("pagination");

    const show = (p) => {
        // show only current page items
        items.forEach((el, i) => 
            el.style.display = (i >= (p - 1) * perPage && i < p * perPage) ? "block" : "none"
        );

        // reset all pagination buttons
        [...pag.children].forEach(li => li.classList.remove("active"));

        // activate the correct one (adjusted index)
        pag.children[p - 1]?.classList.add("active");
    };

    for (let i = 1; i <= pages; i++) {
        const li = document.createElement("li");
        li.className = `page-item${i === 1 ? " active" : ""}`;
        li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
        
        li.onclick = (e) => {
            e.preventDefault();
            show(i);
        };
        pag.appendChild(li);
    }

    show(1);
});
</script>

<?php include 'include/footer.php'; ?>