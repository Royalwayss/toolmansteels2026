<?php // echo "<pre>"; print_r($_POST); exit; ?>

<?php
require_once('../include/config.php'); 
$current_time =  date('Y-m-d h:i:s');

if(isset($_GET['mode']) && $_GET['mode'] !=''){
	
	
	
	$title = $_POST['title'];
	$title = mysqli_real_escape_string($conn, $title); 
	$blog_url = $_POST['blog_url'];
	$short_description = trim($_POST['short_description']);
	$short_description = mysqli_real_escape_string($conn, $short_description); 
	$blog_content = trim($_POST['blog_content']);
	
	$meta_title =$_POST['meta_title'];
	$meta_title = mysqli_real_escape_string($conn, $meta_title); 
	$meta_description =$_POST['meta_description'];
	$meta_description = mysqli_real_escape_string($conn, $meta_description); 
	$meta_keywords =$_POST['meta_keywords'];
	$blog_sort =$_POST['blog_sort'];
	$read_time =$_POST['read_time'];
	
	$published_date =$_POST['published_date'];
	$status =@$_POST['status'];
	
	
	
	
	
	
	
	if($_GET['mode'] == 'update' && $_GET['id'] != '' && $title !='' && $blog_url !='' ){
		$blog_content = base64_encode($blog_content);
		$update_query  = "UPDATE  blogs SET title = '".$title."', blog_url = '".$blog_url."',short_description = '".$short_description."',blog_content = '".$blog_content."',blog_sort = '".$blog_sort."',read_time = '".$read_time."',meta_title = '".$meta_title."',meta_description = '".$meta_description."',meta_keywords = '".$meta_keywords."',published_date = '".$published_date."',status = '".$status."' WHERE id = ".$_GET['id']." "; 
		mysqli_query($conn,$update_query);
		if(isset($_FILES["file"]["name"])){
			
						$target_dir = "../assets/img/blogs/";
						$target_file = $target_dir . rand(11111,99999).'-'.basename($_FILES["file"]["name"]);
						if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
							$file_name = $_FILES["file"]["name"];
							$update_query  = "UPDATE blogs SET image = '".$file_name."' WHERE id = ".$_GET['id']." ";
							
							mysqli_query($conn,$update_query);
						}
					}
					
					
					
					
					
					
					
		$_SESSION['_msg']  ='Blog has been updated successfully';
	}
	
	if($_GET['mode'] == 'add' && $_POST['title'] != ''){
		
		$insert_query = "INSERT INTO blogs (title,blog_url,short_description,blog_content,published_date,blog_sort,read_time,meta_title,meta_description,meta_keywords,status,created_at) VALUES ('".$title."','".$blog_url."','".$short_description."','".$blog_content."','".$published_date."','".$blog_sort."','".$read_time."','".$meta_title."','".$meta_description."','".$meta_keywords."','".$status."','".$current_time."')";
		mysqli_query($conn,$insert_query); 
		$inser_id = mysqli_insert_id($conn);
		
		if($inser_id != ''){
			        if(isset($_FILES["file"]["name"])){
						
					    $target_dir = "../assets/img/blogs/";
						$target_file = $target_dir . rand(11111,99999).'-'.basename($_FILES["file"]["name"]);
						if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
							$file_name = $_FILES["file"]["name"];
							$update_query  = "UPDATE blogs SET image = '".$file_name."' WHERE id = ".$inser_id." ";
							
							mysqli_query($conn,$update_query);
						}
					}
					
					 
					
					
		}
          
		
		
		
	
		
		
		
		
		$_SESSION['_msg'] = 'Blog has been added successfully';
		
	}
	
	if($_GET['mode'] == 'delete' && $_GET['id'] != ''){
		
		$update_query  = "DELETE FROM blog WHERE id = ".$_GET['id']."";
		mysqli_query($conn,$update_query);
		$_SESSION['_msg']  ='Blog has been deleted successfully';
	}
	
	echo '<script>window.location.href="blogs.php"; </script>'; die;
}

?>
