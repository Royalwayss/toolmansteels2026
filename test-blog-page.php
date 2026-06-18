<?php  



require_once('include/config.php'); 

$count =1;
                              $sql = "SELECT `id`,`title`,`blog_url`,`meta_title`,blog_content,`meta_description`,`meta_keywords` FROM `blogs` ORDER BY `published_date` DESC ";
                              
                              $result= mysqli_query($conn, $sql);
                              
                              while ($row = mysqli_fetch_assoc($result)) {
                              
												
												
												
										$blog_content = $row['blog_content'];
									 
									 
									    $blog_content = base64_encode($blog_content);
										$blog_content = mysqli_real_escape_string($conn, $blog_content);
									  
									  $id = $row['id'];
									$update_query = "UPDATE blogs SET 
										
										
										blog_content = '$blog_content'
										
										WHERE id = $id";

							mysqli_query($conn, $update_query);
									  
									   
									  
									  
									  
									  
									  $count++;
                              } 
                              mysqli_free_result($result);
                              
                              
                              ?>