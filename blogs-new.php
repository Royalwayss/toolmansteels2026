<?php include 'include/header.php'; ?>
<style>
  .blog-list{
    padding:0rem 2rem;

  }
  .blog-list img {
    border-radius:10px;
  }
  .blog-heading {
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1px;
}
  /* Pagination Container */
/* Pagination Container */
.pagination {
  display: flex;
  gap: 6px;
  padding: 0;
}

.pagination .page-item {
  list-style: none;
  margin-right: 8px;
}

.page-link:focus {
  z-index: 3;
  color: #0a58ca;
  background-color: #e9ecef;
  outline: 0;
  box-shadow: 0 0 0 0rem rgba(13, 110, 253, 0.25);
}

.pagination .page-link {
  color: #106a8d;
  background-color: #ffffff; /* Default inactive background */
  border: 1px solid #106a8d;
  border-radius: 4px;
  padding: 6px 12px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.2s ease-in-out;
}

.pagination .page-link:hover {
  background-color: #f0f0f0; /* Light grey on hover */
  color: #106a8d;
}

.pagination .page-item.active .page-link {
  background-color: #106a8d !important; /* Active background */
  color: #ffffff !important;
  border-color: #106a8d;
}
.blog-list .small{ font-weight:700; }
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
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
          <img src="assets/img/blog-1.jpg" alt="DIN 1.2379" class="img-fluid mb-3 w-100">
          <div class="">
          <p class="text-muted small">Published on: July 20, 2025</p>
          <h2 class="blog-heading">DIN 1.2379 Cold Work Tool Steel by Toolman Special Steels</h2>
          <p>In the realm of cold work tool steels, DIN 1.2379—also known as AISI D2 or X153CrMoV12—stands out for its
            exceptional ...</p>
          <a class="blog-view-button" href="din-12379-cold-work-tool-steel.php">View</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
        <img src="assets/img/blog-1.jpg" alt="A2 Tool Steel" class="img-fluid mb-3 w-100">
          <p class="text-muted small">Published on: July 18, 2025</p>
          <h2 class="blog-heading">Why A2 Tool Steel is the Secret Weapon of Precision Manufacturing</h2>
          <p>If you're in manufacturing, tooling, or engineering, you've likely heard whispers about A2 tool steel...
          </p>
          <a class="blog-view-button"
            href="why-a2-tool-steel-is-the-secret-weapon-of-precision-manufacturing.php">View</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
        <img src="assets/img/blog-1.jpg" alt="Cold Work Steel" class="img-fluid mb-3 w-100">
          <p class="text-muted small">Published on: July 16, 2025</p>
          <h2 class="blog-heading">Cold Work Tool Steel Crafted for Perfection</h2>
          <p>At Toolman Special Steels, we don’t just make steel—we engineer perfection. As a fully integrated steel business...</p>
          <a class="blog-view-button" href="cold-work-toolsteel-crafted-for-perfection">View</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
        <img src="assets/img/blog-1.jpg" alt="High-Speed Steel" class="img-fluid mb-3 w-100">
          <p class="text-muted small">Published on: July 14, 2025</p>
          <h2 class="blog-heading">Leading the Way in High-Speed Steel</h2>
          <p>Back in 1957, we started as a small trading division for high-speed steel-cutting tools...</p>
          <a class="blog-view-button" href="leading-the-way-in-high-speed-steel">View</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
        <img src="assets/img/blog-1.jpg" alt="High-Quality Steel" class="img-fluid mb-3 w-100">
          <p class="text-muted small">Published on: July 12, 2025</p>
          <h2 class="blog-heading">Toolman Special Steels: High-Quality Steel for Every Industry</h2>
          <p>Toolman Special Steels is a leading manufacturer, supplier, and exporter of high-quality steel...</p>
          <a class="blog-view-button" href="high-quality-steel-for-every-industry">View</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
        <img src="assets/img/blog-1.jpg" alt="Hot Work Tool Steel" class="img-fluid mb-3 w-100">
          <p class="text-muted small">Published on: July 10, 2025</p>
          <h2 class="blog-heading">Hot Work Tool Steel: Built to Handle Extreme Temperatures</h2>
          <p>At Toolman Special Steels, we’ve been in the game since 1957, crafting some of the toughest steels...</p>
          <a class="blog-view-button" href="hot-work-tool-steel">View</a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 blog-list mb-5">
        <img src="assets/img/blog-1.jpg" alt="Forging Strength Steel" class="img-fluid mb-3 w-100" >
          <p class="text-muted small">Published on: July 8, 2025</p>
          <h2 class="blog-heading">Forging Strength with Special Steel</h2>
          <p>At Toolman Special Steels, we’ve been in the steel business since 1957, perfecting our craft...</p>
          <a class="blog-view-button" href="forging-strength-with-special-steel">View</a>
        </div>
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
    const perPage = 6, total = items.length, pages = Math.ceil(total / perPage);
    const pag = document.getElementById("pagination");

    const show = (p) => {
      items.forEach((el, i) => el.style.display = (i >= (p - 1) * perPage && i < p * perPage) ? "block" : "none");
      [...pag.children].forEach(li => li.classList.remove("active"));
      pag.children[p]?.classList.add("active");
    };

    for (let i = 1; i <= pages; i++) {
      const li = document.createElement("li");
      li.className = `page-item${i === 1 ? " active" : ""}`;
      li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
      li.onclick = (e) => { e.preventDefault(); show(i); };
      pag.appendChild(li);
    }

    show(1);
  });
</script>
<?php include 'include/footer.php'; ?>