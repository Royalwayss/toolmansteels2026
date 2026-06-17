<?php
$data = $_POST; 
if(isset($data['editor']) && !empty($data['editor'])){
	
	
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
                        <h6>Blog title</h6>
                    </div>
                </div>

               
               <?php echo $data['editor']; ?>
               




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










<?php 	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Text Editor</title>
  <script src="https://cdn.tiny.cloud/1/25frry9xpp0pwadfxnz8fm1lm6x3eipjqdkhhu3qggd33413/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <style>
  .blog-view-button {
    background: #106a8d;
    text-align: center;
    padding: 6px 17px;
    display: inline-block;
    color: #fff;
    text-decoration: unset;
    font-size: 18px;
    font-weight: 400;
	margin-top:20px;
	margin-left:40%;
	margin-right:40%;
}
  </style>
  
  
</head>
<body>
<form action="preview.php" method="post" target="_blank">
	<textarea id="editor" name="editor" style="height:400px;"></textarea>
	<input type="submit" value="Preview" class="blog-view-button">
</form>
<script>
tinymce.init({
  selector: '#editor',
  height: 500,
  plugins: 'advlist autolink lists link image charmap print preview anchor \
searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount \
textpattern emoticons directionality',
  toolbar: 'undo redo | styleselect | bold italic underline strikethrough | \
alignleft aligncenter alignright alignjustify | \
bullist numlist outdent indent | link image media | \
forecolor backcolor emoticons | \
print preview code fullscreen',
  menubar: 'file edit view insert format tools table help'
});
</script>

</body>
</html>
