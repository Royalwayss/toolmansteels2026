<?php  



require_once('include/config.php'); 

$count =1;
                              $sql = "SELECT `id`,`title`,`blog_url`,`meta_title`,`meta_description`,`meta_keywords` FROM `blogs` ORDER BY `published_date` DESC ";
                              
                              $result= mysqli_query($conn, $sql);
                              
                              while ($row = mysqli_fetch_assoc($result)) {
                              
												$url = "https://www.toolmansteels.com/".$row['blog_url']; 

												
												
												
												
												$file_name = $row['blog_url'];
												
												
												$oldName = $file_name;
												
												$newName = 'old-'.$file_name;

												if (rename($oldName, $newName)) {
													echo "File renamed successfully!";
												} else {
													echo "Failed to rename file.";
												}
												echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>"; 
												echo $newName; echo "<br>"; 
												
												
												
												
												
												
												
												/*
												
												// fetch the page HTML
												$html = file_get_contents($url);

												// if fetching fails
												if ($html === FALSE) {
													die("Could not fetch the URL!");
												}

												// load into DOMDocument
												$doc = new DOMDocument();

												// ignore HTML errors/warnings
												libxml_use_internal_errors(true);
												$doc->loadHTML($html);
												libxml_clear_errors();

												// get title
												$title = "";
												$nodes = $doc->getElementsByTagName('title');
												if ($nodes->length > 0) {
													$title = $nodes->item(0)->nodeValue;
												}

												// get meta description & meta keywords
												$description = "";
												$keywords = "";
												$metas = $doc->getElementsByTagName('meta');

												foreach ($metas as $meta) {
													if ($meta->getAttribute('name') === 'description') {
														$description = $meta->getAttribute('content');
													}
													if ($meta->getAttribute('name') === 'keywords') {
														$keywords = $meta->getAttribute('content');
													}
												}

												
												echo $row['id']; echo "<br>";echo "<br>";
												echo "Title: " . $title . "\n"; echo "<br>";echo "<br>";
												echo "Meta Description: " . $description . "\n";echo "<br>";echo "<br>";
												echo "Meta Keywords: " . $keywords . "\n";echo "<br>";echo "<br>";

                                                

                                                $meta_title = mysqli_real_escape_string($conn, $title); 
                                                $meta_description = mysqli_real_escape_string($conn, $description); 
                                                $meta_keywords = mysqli_real_escape_string($conn, $keywords); 






												
												$update_query  = "UPDATE  blogs SET meta_title = '".$meta_title."', meta_description = '".$meta_description."',meta_keywords = '".$meta_keywords."' WHERE id = ".$row['id']." "; 
												  
												mysqli_query($conn,$update_query);  
												  
												  
												  echo "<br>";echo "<br>";echo "<br>";echo "<br>";
																					  
									  
													*/			  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  
									  $count++;
                              } 
                              mysqli_free_result($result);
                              
                              
                              ?>