

 <?php
 require "conn.php";
 $action=$_POST['action'];
 if($action=="add-location")
  {

		if(!empty($_POST['location'])&&!empty($_POST['city']))
		{
			$location=strtoupper($_POST['location']);
			$city=$_POST['city'];
			
			echo"$location";
			echo"$city";
			        $sql="INSERT INTO tbl_location(name,city)VALUES('$location','$city')";
			
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
					echo"<div class='alert alert-info'><strong>Successfully</strong> Location Added.</div>";
				    
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
				   
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Error!!, Or Location!</strong>  Already  Registerd.</div>";
		}
		
  }


  else if($action=="view-location")
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
											<th>NAME</th>
											 <th>CITY NAME</th>
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									
									$sql1="select * from tbl_location";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['name'].'</td>';
											echo'<td>'.$row['city'].'</td>';
																				 
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