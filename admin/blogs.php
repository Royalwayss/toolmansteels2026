<?php session_start();   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width initial-scale=1.0">
      <title >Blogs </title>
      <?php include('header.php');  ?>
      <!-- END SIDEBAR-->
      <div class="wrapper content-wrapper">
         <div id="result_message" class="message">
         </div>
         <!--START PAGE CONTENT-->
         
         
		  <div class="row">
						<div class="col-md-6">
							   <div class="page-heading">
									<h1 class="page-title">Blogs</h1>
								</div>
		 
						</div>
						<div class="col-md-6" style="margin-top:20px;text-align:right">
						      <a class="btn btn-success" href="add_edit_blog.php">Add Blog</a>
						</div>
		</div>
		 
		 
		 
		 
		 <div class="page-content fade-in-up">
            <div class="ibox">
               <div class="ibox-body">
                  <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover example-table1" >
                        <thead>
                           <tr>
                              <th  style="width:5%">ID </th>
                              <th  style="width:35%">Title</th>
                              <th  style="width:5%">Image</th>
                              <th  style="width:15%">Published Date</th>
                              
                              <th  style="width:5%">Status</th>
                              <th  style="width:20%">Created At</th>
                              <th  style="width:10%">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php  $count =1;
                               $sql = "SELECT `id`,`title`,`blog_url`,`short_description`,`image`,`status`,`published_date`,`meta_title`,`meta_description`,`meta_keywords`,`created_at` FROM `blogs` ORDER BY `published_date` DESC ";
                              
                              
                              $result= mysqli_query($conn, $sql);
                              
                              while ($row = mysqli_fetch_assoc($result)) {
                              
                              ?>
                           <tr>
                              <td style="width:1%!important"><?php echo $count; ?></td>
                              <td style=""><a style="color: #18c5a9;" href="<?php echo BASEURL.''.$row['blog_url']; ?>" target="_blank"><?php echo $row['title']; ?></a></td>
                              <td><img src="<?php echo BASEURL.'assets/img/blogs/'.$row['image']; ?>"></td>
                              <td><?php echo date('d-m-Y',strtotime($row['published_date'])); ?></td>
                              
                              <td> 
                                 <?php
                                    if($row['status'] == '1'){
                                       $view_btn_class = 'btn btn-success';
                                       $view_btn_name = 'Active';
                                    }else{
                                     $view_btn_class = 'btn btn-danger';
                                     $view_btn_name = 'InActive';
                                    }
                                    ?>
                                 <a href="javascript:;" class="<?php echo $view_btn_class; ?>" style=""><?php echo $view_btn_name;  ?></a>
                              </td>
                              <td><?php echo date('d-m-Y H:i:s',strtotime($row['created_at'])); ?></td>
                              <td> 
                                 <a href="add_edit_blog.php?id=<?php echo $row['id']; ?>" class="btn btn-success" >
                                 Edit
                                 </a>
                              </td>
                           </tr>
                           <?php $count++;
                              } 
                              mysqli_free_result($result);
                              
                              
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <style type="text/css">
            #results { padding:20px; border:1px solid; background:#ccc; }
         </style>
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
      <div class="sidenav-backdrop backdrop"></div>
      <div class="preloader-backdrop">
         <div class="page-preloader">Loading</div>
      </div>
      <!-- END PAGA BACKDROPS-->
      <!-- Session-timeout modal-->
      <div class="modal fade" id="session-dialog">
         <div class="modal-dialog" style="width:400px;" role="document">
            <div class="modal-content">
               <div class="modal-header bg-silver-100">
                  <h4 class="modal-title">AUTOLOGOUT</h4>
                  <button class="close" data-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="text-center m-b-20"><i class="ti-lock" style="font-size:90px"></i></div>
                  <p class="text-center m-b-20">You are about to be signed out due to inactivity.</p>
                  <div id="timeout-reset-box" style="display:none;">
                     <div class="form-group"><button class="btn btn-danger btn-block" id='timeout-reset'>Deactivate</button></div>
                  </div>
                  <div id="timeout-activate-box">
                     <div class="form-group">
                        <label>Minutes</label>
                        <input class="form-control" type="text" placeholder="Minutes" id="timeout-count">
                     </div>
                     <div class="form-group"><button class="btn btn-success btn-block" id='timeout-activate'>Activate</button></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Session-timeout modal-->
      <!-- CORE PLUGINS-->
      <?php include('js-files.php'); ?>
      <script type="text/javascript">
         $('.example-table1,.example-tablebill').DataTable({
                 pageLength: 10,
                 fixedHeader: true,
                 responsive: true,
                 dom: '<"html5buttons"B>lTfgitp',
                 buttons: [
         
                /*  'copyHtml5',
         
                   'excelHtml5',
         
                   'csvHtml5',  */
         
                   'print',
         
                   'excelHtml5'
         
                 ],
         
         
         
                 language: {
                   buttons: {
                     colvis: '<i class="ti-view-grid"></i>'
         
                   }
         
                 }
         
             });
         
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
      </body> 
</html>