
<?php
require "dashboard/conn.php";
 
  

		
			session_start();
			$city=$_SESSION['city'];
			
			$location=$_POST['location'];
			$type=$_POST['type'];
			
			 
			       $sql="select * from tbl_accomodation where city='$city' && locid='$location' && type='$type'";
					$smt=mysqli_query($conn,$sql);
			      
			       
			

while($rs=mysqli_fetch_assoc($smt))
                                    {
			
		
		
  
?>
    <section class="section bg-light">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade">Search Results</h2>
            <p data-aos="fade">The relevent search results as your requirement are below, Just submit your "Request" for the room and we will reach you in few moments :-</p>
          </div>
        </div>
      
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
		<?php 
                                            $filename="dashboard/uploads/no-img.png"; 
                                            if (file_exists("dashboard/uploads/".$rs['img_url'])&&$rs['img_url']!=""&&$rs['img_url']!=null) 
                                                {
                                                    $filename="dashboard/uploads/".$rs['img_url']; 
                                                } else {
                                                    $filename="./dashboard/uploads/no-img.png"; 
                                                }
                                            ?>
          <a href="#" class="image d-block bg-image-2" style="background-image: url(<?php echo $filename;  ?>);"></a>
          <div class="text">
            <span class="d-block mb-4"><span class="display-4 text-primary"><?php echo $rs['title']; ?></span>  </span>
            <h2 class="mb-4"><?php echo $rs['type']; ?></h2>
            <p><?php echo $rs['facility']; ?></p></br>
			<p><?php echo $rs['preference']; ?> </p></br>
			<p><?php echo $rs['terms_and_conditions']; ?> </p></br>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Send Request</button></p>
          </div>
        </div>

		<!-- Modal-->
		<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
         
          <h4 class="modal-title">Submit Your Details</h4>
        </div>
        <div class="modal-body">
          
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtName">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtMobile">Mobile:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="txtMobile" placeholder="Enter Mobile" name="pwd">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

      </div>
    </section>
<?php
                                       
                                    }
                                    ?>