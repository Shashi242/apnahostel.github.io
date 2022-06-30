
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-mess")
  {
		if(!empty($_POST['title']) && !empty($_POST['cperson']) && !empty($_POST['mobile']) && !empty($_POST['mrent']) 
			&& !empty($_POST['zrent']) && !empty($_POST['darea']) && !empty($_POST['description']))
		{
		
			session_start();
			$image=$_SESSION['file-url'];
			
			$title=$_POST['title'];
			$cperson=$_POST['cperson'];
			$city=$_POST['city'];
			$mobile=$_POST['mobile'];
			$altno=$_POST['altno'];
			$whatsapp=$_POST['whatsapp'];
			$advance=$_POST['advance'];
			$mrent=$_POST['mrent'];
			$zrent=$_POST['zrent'];
			$darea=$_POST['darea'];
			$description=$_POST['description'];
			
			
			 
			       $sql="INSERT INTO tbl_mess(title,
				   contact_person,
				   description,
				   mobile,
				   alt_mobile,
				   whatsapp,
				   menu_url,
				   advance_money,
				   monthly_rate,
				   zoyozo_rate,
				   delivery_area,
				   city,
				   status)
				   
				   VALUES('$title',
				   '$cperson',
				   '$description',
				   '$mobile',
				   '$altno',
				   '$whatsapp',
				   '$image',
				   '$advance',
				   '$mrent',
				   '$zrent',
				   '$darea',
				   '$city',
				   '1')";
					
				
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
						echo"<div class='alert alert-success'><strong>Successfully</strong> Accommodation Added.</div>";
						$_SESSION['file-url']="null";
			       }
			       else
			       {
						echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
			       }
			}
		else
		{
			echo "<div class='alert alert-danger'><strong>Please!!</strong> Complete Form.</div>";
		}
  }
  
		
 

	   
 if($action=="update-mess")
	 
  {
		
			session_start();
			$image=$_SESSION['file-url'];
			$id=$_POST['id'];
			$title=$_POST['title'];
			$cperson=$_POST['cperson'];
			$city=$_POST['city'];
			$mobile=$_POST['mobile'];
			$altno=$_POST['altno'];
			$whatsapp=$_POST['whatsapp'];
			$advance=$_POST['advance'];
			$mrent=$_POST['mrent'];
			$zrent=$_POST['zrent'];
			$darea=$_POST['darea'];
			$description=$_POST['description'];
			$availability=$_POST['avil'];
			 
			       $sql="update tbl_mess set 
				   title='$title',
				   contact_person='$cperson',
				   description='$description',
				   mobile='$mobile',
				   alt_mobile='$altno',
				   whatsapp='$whatsapp',
				   menu_url='$image',
				   advance_money='$advance',
				   monthly_rate='$mrent',
				   zoyozo_rate='$zrent',
				   delivery_area='$darea',
				   city='$city',
				   availability='$availability',
				   status='1' 
				   where id=$id";
				   
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
						echo"<div class='alert alert-success'><strong>Successfully</strong> Updated.</div>";
						//$_SESSION['file-url']="null";
			       }
			       else
			       {
						echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
			       }
			}

  
 else if($action=="view-mess")
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
											 <th>CONTACT PERSON</th>
											  <th>DESCRIPTION</th>
                                            <th>MOBILE</th>
											 <th>ALT NO</th>
											  <th>WHATSAPP</th>
											<th>ADVANCE MONEY</th>
											<th>MONTHLY RATE</th>
                                           <th>ZOYOZO RATE</th>
											<th>DELIVERY AREA</th>
											<th>CITY</th>
											
											<th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									session_start();
			                         
									$sql1="select * from   tbl_mess order by id desc";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['title'].'</td>';
											echo'<td>'.$row['contact_person'].'</td>';
											echo'<td>'.$row['description'].'</td>';
											echo'<td>'.$row['mobile'].'</td>';
											echo'<td>'.$row['alt_mobile'].'</td>';
											echo'<td>'.$row['whatsapp'].'</td>';
											echo'<td>'.$row['advance_money'].'</td>';
											echo'<td>'.$row['monthly_rate'].'</td>';
											echo'<td>'.$row['zoyozo_rate'].'</td>';
											echo'<td>'.$row['delivery_area'].'</td>';
											echo'<td>'.$row['city'].'</td>';
											?>
											<td><a href="update-mess.php?id=<?php echo $row['id'] ?>">Update</a></td>
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