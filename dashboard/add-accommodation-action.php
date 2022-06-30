
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-accommodation")
  {
		if(!empty($_POST['title']) && !empty($_POST['nearby']) && !empty($_POST['type']) && !empty($_POST['location']) 
			&& !empty($_POST['nearby']) && !empty($_POST['facility']) && !empty($_POST['owner']) && !empty($_POST['mobile']))
		{
		
			session_start();
			$image=$_SESSION['file-url'];
			
			$title=$_POST['title'];
			$nearby=$_POST['nearby'];
			$type=$_POST['type'];
			$location=$_POST['location'];
			$city=$_POST['city'];
			$facility=$_POST['facility'];
			$owner=$_POST['owner'];
			$mobile=$_POST['mobile'];
			$whatsapp=$_POST['whatsapp'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$pincode=$_POST['pincode'];
			$security=$_POST['security'];
			$preference=$_POST['preference'];
			$condition=$_POST['condition'];
			$monthrent=$_POST['monthrent'];
			$zprice=$_POST['zprice'];
			$description=$_POST['description'];
			
			 
			       $sql="INSERT INTO tbl_accomodation(title,
				   near_by,
				   type,
				   img_url,
				   locid,
				   city,
				   facility,
				   own_by,
				   mobile,
				   whatsapp,
				   email,
				   full_address,
				   pincode,
				   security_deposit,
				   preference,
				   terms_and_conditions,
				   monthly_rent,
				   zoyozo_rent,
				   description,
				   availability,
				   status)
				   
				   VALUES('$title',
				   '$nearby',
				   '$type',
				   '$image',
				   '$location',
				   '$city',
				   '$facility',
				   '$owner',
				   '$mobile',
				   '$whatsapp',
				   '$email',
				   '$address',
				   '$pincode',
				   '$security',
				   '$preference',
				   '$condition',
				   '$monthrent',
				   '$zprice',
				   '$description',
				   'AVAILABLE',
				   '1')";
					
				
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
						echo"<div class='alert alert-success'><strong>Successfully</strong> Accommodation Added.</div>";
						$_SESSION['file-url']="null";
			       }
			       else
			       {
						echo mysqli_error($conn);
			       }
			}
		else
		{
			echo "<div class='alert alert-danger'><strong>Please!!</strong> Complete Form.</div>";
		}
  }
  
		
 

	   
 if($action=="update-accommodation")
	 
  {
		
			session_start();
			$image=$_SESSION['file-url'];
			$id=$_POST['id'];
			$title=$_POST['title'];
			$nearby=$_POST['nearby'];
			$type=$_POST['type'];
			$location=$_POST['location'];
			$city=$_POST['city'];
			$facility=$_POST['facility'];
			$owner=$_POST['owner'];
			$mobile=$_POST['mobile'];
			$whatsapp=$_POST['whatsapp'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$pincode=$_POST['pincode'];
			$security=$_POST['security'];
			$preference=$_POST['preference'];
			$condition=$_POST['condition'];
			$monthrent=$_POST['monthrent'];
			$zprice=$_POST['zprice'];
			$description=$_POST['description'];
			$availability=$_POST['avi'];
			 
			       $sql="update tbl_accomodation set title='$title',near_by='$nearby',type='$type',img_url='$image',locid='$location',city='$city',facility='$facility',own_by='$owner',mobile='$mobile',whatsapp='$whatsapp',email='$email',full_address='$address',pincode='$pincode',security_deposit='$security',preference='$preference',terms_and_conditions='$condition',monthly_rent='$monthrent',zoyozo_rent='$zprice',description='$description',availability='$availability',status='1' where accid=$id";
				   
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
						echo"<div class='alert alert-success'><strong>Successfully</strong> Accommodation Updated.</div>";
						//$_SESSION['file-url']="null";
			       }
			       else
			       {
						echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>".mysqli_error($conn);
			       }
			}

  
 else if($action=="view-accommodation")
	{
		?>
		<script>
$('#dataTables-example').dataTable();
</script>
        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
										    <th>SL NO</th>
											 <th>TITLE</th>
											  <th>NEAR BY</th>
                                            <th>TYPE</th>
											 <th>LOCATION</th>
											  <th>CITY</th>
											<th>FACILITY</th>
											<th>OWNER BY</th>
                                           <th>MOBILE NO</th>
											<th>WHAT'S APP NO</th>
											<th>EMAIL</th>
											<th>ADDRESS</th>
											<th>PIN CODE</th>
											<th>DEPOSITE SECURITY</th>
											<th>PREFERENCE</th>
											<th>TERM & CONDITION</th>
											<th>MONTHLY RENT</th>
											<th>ZOYOZO PRICE</th>
											<th>DESCRIPTION</th>
											
											<th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									session_start();
			                         
									$sql1="select * from   tbl_accomodation order by accid desc";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['title'].'</td>';
											echo'<td>'.$row['near_by'].'</td>';
											echo'<td>'.$row['type'].'</td>';
											?>
											<?php
											   $sqllocid="select * from tbl_location where locid=".$row['locid'];
											   $querylocid=mysqli_query($conn,$sqllocid);
											   $rowlocid=mysqli_fetch_assoc($querylocid);
											?>
											<?php
											echo'<td>'.$rowlocid['name'].'</td>';
											echo'<td>'.$row['city'].'</td>';
											echo'<td>'.$row['facility'].'</td>';
											echo'<td>'.$row['own_by'].'</td>';
											echo'<td>'.$row['mobile'].'</td>';
											echo'<td>'.$row['whatsapp'].'</td>';
											echo'<td>'.$row['email'].'</td>';
											echo'<td>'.$row['full_address'].'</td>';
											echo'<td>'.$row['pincode'].'</td>';
											echo'<td>'.$row['security_deposit'].'</td>';
											echo'<td>'.$row['preference'].'</td>';
											echo'<td>'.$row['terms_and_conditions'].'</td>';
											echo'<td>'.$row['monthly_rent'].'</td>';
											echo'<td>'.$row['zoyozo_rent'].'</td>';
											echo'<td>'.$row['description'].'</td>';
											?>
											<td><a href="update-accommodation.php?id=<?php echo $row['accid'] ?>">Update</a></td>
											<?php
                                        echo"</tr>";
										$sl++;
									  }
									  ?>
                                        </tbody>
                                        </table>
                                        </div>
        
        <?php
	
	}
		
?>