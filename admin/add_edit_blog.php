<?php session_start();   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width initial-scale=1.0">
      <title >Design Category Add/Edit | Madhavkrggroup</title>
      <?php include('header.php');  ?>
       <script src="https://cdn.tiny.cloud/1/25frry9xpp0pwadfxnz8fm1lm6x3eipjqdkhhu3qggd33413/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      <?Php
         if(isset($_GET['id']) && $_GET['id'] != ''){
          $title="Edit";
			  $id= $_GET['id'];
			  $sql = "SELECT *  FROM blogs where id='".$_GET['id']."'"; 
			  $result =mysqli_query($conn, $sql);
			  $row = mysqli_fetch_assoc($result); 
			  $blog_sort = $row['blog_sort'];  
			  $action = 'save-blog.php?mode=update&id='.$row['id'].'';
         }else {
			$title="Add";
			  $sql = "SELECT MAX(id) AS max_id FROM blogs;";
              $result =mysqli_query($conn, $sql);
			  $row1 = mysqli_fetch_assoc($result);  
			  $blog_sort= $row1['max_id'] +1;
			  $action = 'save-blog.php?mode=add';
          $id= '';
         }	
         ?>
      <style> 
         input[type="text"],input[type="date"],input[type="number"],input[type="file"],select {
         width: 100%;
         padding: 10px 12px;
         margin: 8px 0 20px;
         border: 1px solid #ccc;
         border-radius: 5px;
         font-size: 16px;
         }
		 #preview{ margin-top: 79px; }
		 #preview img{ max-width:150px; max-height:150px; }
         #editor {
			 width: 100%;
			 min-height: 400px;
			 border-radius: 5px;
			 border: 1px solid #ccc;
			 padding: 10px;
			 font-size: 16px;
         }
		 #short_description {
			 width: 100%;
			 min-height: 100px;
			 border-radius: 5px;
			 border: 1px solid #ccc;
			 padding: 10px;
			 font-size: 16px;
         }
         button {
         background-color: #007BFF;
         color: white;
         padding: 12px 24px;
         font-size: 16px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: all 0.3s ease;
         }
         button:hover {
         background-color: #0056b3;
         }
         @media (max-width: 600px) {
         .container {
         padding: 15px 20px;
         margin: 20px;
         }
         button {
         width: 100%;
         }
         }
		 .tox-statusbar__branding{ display:none; }
		 
		 .upload-container {
  width: 100%;
  
  max-width: 450px;
  margin: 50px auto;
  padding: 10px;
  border: 3px dashed #007BFF;
  border-radius: 12px;
  text-align: center;
  transition: border-color 0.3s, background-color 0.3s;
  cursor: pointer;
  background-color: #f9f9f9;
  color: #333;
  font-family: Arial, sans-serif;
}

.upload-container:hover {
  border-color: #0056b3;
  background-color: #f1f7ff;
}

.upload-container input[type="file"] {
  display: none;
}

.upload-text {
  font-size: 16px;
  margin-bottom: 10px;
}

.upload-btn {
  display: inline-block;
  padding: 5px 15px;
  background-color: #007BFF;
  color: #fff;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  transition: background-color 0.3s;
  text-decoration: none;
}

.upload-btn:hover {
  background-color: #0056b3;
}

.file-name {
  margin-top: 15px;
  font-style: italic;
  font-size: 14px;
  color: #555;
}
		 
		 
		 
		 
      </style>
      <div class="wrapper content-wrapper">
         <div id="result_message" class="message">
         </div>
         <!--START PAGE CONTENT-->
        
		 
		 <div class="row">
						<div class="col-md-6">
							   <div class="page-heading">
									<h1 class="page-title"><?php echo $title ?> Blog  </h1>
								</div>
		 
						</div>
						<div class="col-md-6" style="margin-top:20px;text-align:right;">
						      <a class="btn btn-success" id="preview-blog" href="javascript:;">Preview</a>
							  <form id="preview-blog-form" action="../preview.php" method="post" target="_blank" style="display:none">
								  <input type="text"  name="title" >
								  <input type="text"  name="editor" >
								  <input type="submit">
							  </form>
						</div>
		</div>
		 
		 
		 
		 
		 
		 
		 
		 
         </h4></a> </center>
         <div class="page-content fade-in-up">
            <div class="page-heading">
            </div>
          
                  <div class="ibox-body">
                     <p style="color:green"><?php if(isset($_SESSION['_Msg'])) {  echo $_SESSION['_Msg']; unset($_SESSION['_Msg']); } ?></p>
                     <form method="POST"   action="<?php echo $action ; ?>" id="addEdit_blog" enctype="multipart/form-data">
                        <div class="row">
						<div class="col-md-12">
							<label for="title">Title:</label><br>
							<input type="text" id="title" name="title" value="<?php if(!empty($id)){ echo $row['title']; } ?>">
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<label for="blog_url">Blog URL:</label><br>
							<input type="text" id="blog_url" name="blog_url" value="<?php if(!empty($id)){ echo $row['blog_url']; } ?>">
						</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="blog_url">Image:</label><br>
								<div class="upload-container" id="uploadContainer">
								 
								  <label class="upload-btn" for="fileInput">Choose File</label>
								  <input type="file" id="fileInput" name="file">
								  <div class="file-name" id="fileName">No file selected</div>
								</div>
							</div>
							<div class="col-md-6">
									<div class="preview" id="preview">
										<?php if(!empty($id) && !empty($row['image'])){ ?>
										<img src="<?php echo BASEURL.'assets/img/blogs/'.$row['image']; ?>">
										<?php } ?>
									</div>
							</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<label for="short_description">Short Description:</label><br>
							<textarea id="short_description" name="short_description" ><?php if(!empty($id)){ echo $row['short_description']; } ?></textarea>
                        </div>
                        </div>
						<div class="row">
						<div class="col-md-12">
							<label for="editor">Content:</label>
							<textarea id="editor" name="blog_content"><?php if(!empty($id)){ echo $row['blog_content']; } ?></textarea>
						</div>
						</div>
						
						<div class="row">
								<div class="col-md-12">
									<label for="meta_title">Meta Title:</label><br>
									<input type="text" id="meta_title" name="meta_title" value="<?php if(!empty($id)){ echo $row['meta_title']; } ?>">
								</div>
								<div class="col-md-12">
									<label for="meta_description">Meta Description:</label><br>
									<input type="text" id="meta_description" name="meta_description" value="<?php if(!empty($id)){ echo $row['meta_description']; } ?>">
								</div>
								<div class="col-md-12">
									<label for="meta_keywords">Meta Keywords:</label><br>
									<input type="text" id="meta_keywords" name="meta_keywords" value="<?php if(!empty($id)){ echo $row['meta_keywords']; } ?>">
								</div>
						   </div>
							
							
						<div class="row" style="margin-top:10px;">
							<div class="col-md-3" style="display:none">
								<label for="blog_sort">Sort:</label><br>
								<input type="number" id="blog_sort" name="blog_sort"  value="<?php  echo $blog_sort;  ?>">
							</div>
							<div class="col-md-3">
								<label for="published_date">Published Date:</label><br>
								<input type="date" id="published_date" name="published_date" value="<?php if(!empty($id)){ echo $row['published_date']; }else{ echo date('Y-m-d'); } ?>">
							</div>
							<div class="col-md-3">
								<label for="read_time">Read Time:</label><br>
								<input type="text" id="read_time" name="read_time" value="<?php if(!empty($id)){ echo $row['read_time']; } ?>">
							</div>
							
							
							
							<div class="col-md-3">
								<label for="status">Status:</label><br>
								<select  id="status" name="status" >
									<option value="1" <?php if(!empty($id) && $row['status'] == '1'){ echo 'selected'; } ?>>Active</option>
									<option value="0" <?php if(!empty($id) && $row['status'] == '0'){ echo 'selected'; } ?>>Inactive</option>
								</select>
							</div>
							</div>
						</div>
						
                        <button type="submit">Save Blog</button>
                     </form>
                    
                  </div>
              
         </div>
        
          <footer class="page-footer" id="footer">
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            <div class="pull-right"><a class="link-blue" href="javascript:;"></a></div>
            <?php echo date('Y'); ?> © <b><?php echo WEBSITE_NAME; ?></b>
         </footer>
      </div>
      </div>
      <!-- START SEARCH PANEL-->  
      <!-- END SEARCH PANEL-->
      <!-- BEGIN PAGA BACKDROPS-->
      
      <?php include('js-files.php'); ?>
     
      <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
      <!-- PAGE LEVEL SCRIPTS-->
      <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
		<script>
		$(document).ready(function(){  
			$("#addEdit_blog").validate({
				rules: {
					title: {
						required:true,  
					}, 
					blog_url: {
						required: true 
					},
					<?php if($id =='') {?>
					image: {
						required: true 
					},
					<?php } ?>
					short_description: {
						required: true 
					},
					blog_sort: {
						required: true 
					},
					published_date: {
						required: true 
					},
					read_time: {
						required: true 
					},
					
				},
				messages: {
					title: "Enter the title ",
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
			
			
			 tinymce.init({
				  selector: '#editor',
				  height: 500,
				  plugins: 'advlist autolink lists link image charmap print preview anchor \
				searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount \
				textpattern emoticons directionality',
				  toolbar: 'undo redo | fontfamily fontsize  | styleselect | bold italic underline strikethrough | \
				alignleft aligncenter alignright alignjustify | \
				bullist numlist outdent indent | link image media | \
				forecolor backcolor emoticons | \
				print preview code fullscreen',
			    
				  menubar: 'file edit view insert format tools table help',
				 
			}); 
			
			
			
			
			
			
			
			
			
			
			$('#title').on('input', function() {
				var title = $(this).val();
				// Convert title to slug
				var slug = title.toLowerCase()
                    .trim()
                    .replace(/\./g, '-')         // Replace dots with hyphens
                    .replace(/[^a-z0-9\s-]/g, '')  // Remove other invalid chars
                    .replace(/\s+/g, '-')          // Replace spaces with hyphens
                    .replace(/-+/g, '-');          // Collapse multiple hyphens

				 $('#blog_url').val(slug+'.php');
			
			});
			
			
			$('#preview-blog').on('click', function () {

				 $('#preview-blog-form input[name="title"]').val($("#title").val());
				 $('#preview-blog-form input[name="editor"]').val(tinymce.get('editor').getContent());

				 $('#preview-blog-form').trigger('submit');

			});
			
			
			

		
		});
		</script>
        <script>
const fileInput = document.getElementById('fileInput');
const fileName = document.getElementById('fileName');
const uploadContainer = document.getElementById('uploadContainer');
const preview = document.getElementById('preview');
// Update file name on selection
fileInput.addEventListener('change', function() {
  if (this.files.length > 0) {
    fileName.textContent = this.files[0].name;
	
	
	
		preview.innerHTML = ''; // Clear previous image
		const file = this.files[0];

	  if (file && file.type.startsWith('image/')) { 
		const reader = new FileReader();
		reader.onload = function(e) {
		  const img = document.createElement('img');
		  img.src = e.target.result;
		  preview.appendChild(img);
		}
		reader.readAsDataURL(file);
	  } else {
		
	  }
	
	
	
	
	
	
	
	
	
	
  } else {
    fileName.textContent = 'No file selected';
  }
});

// Optional: drag & drop highlight effect
uploadContainer.addEventListener('dragover', (e) => {
  e.preventDefault();
  uploadContainer.style.borderColor = '#0056b3';
  uploadContainer.style.backgroundColor = '#f1f7ff';
});

uploadContainer.addEventListener('dragleave', (e) => {
  e.preventDefault();
  uploadContainer.style.borderColor = '#007BFF';
  uploadContainer.style.backgroundColor = '#f9f9f9';
});

uploadContainer.addEventListener('drop', (e) => {
  e.preventDefault();
  const files = e.dataTransfer.files;
  if (files.length > 0) {
    fileInput.files = files;
    fileName.textContent = files[0].name;
  }
  uploadContainer.style.borderColor = '#007BFF';
  uploadContainer.style.backgroundColor = '#f9f9f9';
});
</script>
      </body> 
</html>