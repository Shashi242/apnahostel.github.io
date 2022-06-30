<?php session_start() ?>	
<script>
$(".book-now-hostel").click(function()
		{	
            var id=$(this).attr("id");
			$("#selected-hostel-id").val(id);
			
		});
</script>
	<?php 
                                    include "./conn.php";
									
									$city=$_POST['city'];
									$location=$_POST['location'];
									$type=$_POST['type'];
                                    $sl=1;
                                    if($type=="All")
                                    {
                                       $sql="select * from tbl_accomodation where availability IN('AVAILABLE','NOT AVAILABLE','FILLING FAST') and city='$city' and locid='$location' order by accid desc limit 8"; 
                                    }
                                    else
                                    {
                                    $sql="select * from tbl_accomodation where availability IN('AVAILABLE','NOT AVAILABLE','FILLING FAST') and city='$city' and locid='$location' and type='$type' order by accid desc limit 8";
                                    }
                                    $smt=mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_assoc($smt))
                                    {
                                        
                                    ?>
                <div class="col-lg-3">
                    <div class="card" style="width:100%">
					<?php
					$filename="dashboard/uploads/".$rs['img_url']; 
					?>					
							<img class="card-img-top" src="<?php echo $filename;  ?>"  alt="Card image" class="img-responsive" width="100%" style="height:308px"/>
							<div class="card-body">
							  <h4 class="card-title"><?php echo $rs['accid']."-".$rs['title'] ?></h4>
							  <p class="card-text"><b>Near By</b> -<?php echo $rs['near_by'] ?></p>
							  <p class="card-text"><b>Monthly Rent</b> -<?php echo $rs['monthly_rent'] ?></p>
							  <p class="card-text"><b>ZOYOZO Price</b> -<?php echo $rs['zoyozo_rent'] ?></p>
							  <p class="card-text" style="color:#067c06"> <b><span style="color:#000">Availability</span>-<?php echo $rs['availability'] ?></b></p>
							  <p class="card-text" style="color:red"><b><?php echo $rs['monthly_rent']-$rs['zoyozo_rent']?> Rs. Discount</b></p>
							 <?php
							  if(isset($_SESSION['cid']) && (trim($_SESSION['cid']) != null))
                             	{
                             	    ?>
                             	    <button id="<?php echo $rs['accid']; ?>" type="button" class="btn btn-success book-now-hostel" data-toggle="modal" data-target="#myModal">Book Now
                                    </button>
                             	    
                             	    <?php
                             	}
                             	else
                             	{
							 ?>
			
									<a href="apnaHostel-login.php"><button  type="button" class="btn btn-primary details-hostel" >
									 Book Now
                                    </button></a>
    
							       <?php
                             	}
                             	?>
  <a href="acc-details.php?id=<?php echo $rs['accid'];  ?>"><button  type="button" class="btn btn-primary details-hostel" >
    Details
  </button></a>
							</div>
						 </div>
                </div>
				<?php
                                       
                                       $sl++;
                                    }
                                    ?>