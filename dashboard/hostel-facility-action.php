
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-hostel")
  {

		if(!empty($_POST['hostel']))
		{
			$hostel=$_POST['hostel'];
			
			       $sql="INSERT INTO tbl_hostel_facility(facility_name)VALUES('$hostel')";
					//echo $sql;
					//exit();
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
						echo"<div class='alert alert-info'><strong>Successfully</strong> Hostel Facility Added.</div>";
				    echo "Hostel Facility Successfully Submitted ";
			       }
			       else
			       {
						echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Empty! or Hostel Facility!!</strong>  Already  Registerd.</div>";
		}
		
  }
    else if($action=="view-hostel")
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
											<th>FACILITY</th>
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									
									$sql1="select * from tbl_hostel_facility";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['facility_name'].'</td>';
											
																				 
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