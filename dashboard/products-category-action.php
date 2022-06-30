
<?php
require "conn.php";
 $action=$_POST['action'];
 if($action=="add-category")
  {

		if(!empty($_POST['procategory']))
		{
			$procategory=strtoupper($_POST['procategory']);
			
			       $sql="INSERT INTO tbl_product_cat(cat_name)VALUES('$procategory')";
					
			       $res=mysqli_query($conn,$sql);
			       if($res)
			      {	
					echo"<div class='alert alert-info'><strong>Successfully</strong> Catagory Added.</div>";
				    
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
				   
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Empty or </strong>  Already  Registerd.</div>";
		}
		
  }
   else if($action=="view-category")
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
											<th>products Category</th>
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									
									$sql1="select * from tbl_product_cat";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['cat_name'].'</td>';
											
																				 
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