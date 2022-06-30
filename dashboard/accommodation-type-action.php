
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-type")
  {

		if(!empty($_POST['type']))
		{
			$type=strtoupper($_POST['type']);
			
			       $sql="INSERT INTO tbl_type(type)VALUES('$type')";
					//echo $sql;
					//exit();
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
		           
				    echo"<div class='alert alert-info'><strong>Successfully</strong> Accommodation Type Added.</div>";
			       }
			       else
			       {
						echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Empty!! Or </strong> Already Registerd.</div>";
		}
		
  }
   else if($action=="view-type")
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
											<th>TYPE</th>
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									
									$sql1="select * from tbl_type";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['type'].'</td>';
											
																				 
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