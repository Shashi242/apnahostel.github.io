
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-city")
  {

		if(!empty($_POST['city']))
		{
			
			$city=strtoupper($_POST['city']);
			
			       $sql="INSERT INTO tbl_city(name)VALUES('$city')";
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
					echo"<div class='alert alert-info'><strong>Successfully</strong> City Added.</div>";
				    
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
				   
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Empty or City!</strong>  Already  Registerd.</div>";
		}
		
  }
  else if($action=="view-city")
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
											 <th>CITY NAME</th>
											 <th>Promocode</th>
											 <th>Discount</th>
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									
									$sql1="select * from tbl_city";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['name'].'</td>';
										    echo'<td>'.$row['promocode'].'</td>';
										    echo'<td>'.$row['discount'].'</td>';
																				 
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