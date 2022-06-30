

 <?php
 require "conn.php";
 $action=$_POST['action'];
 if($action=="add-product")
  {

		if(!empty($_POST['product'])&&!empty($_POST['productcategory']))
		{
			$product=strtoupper($_POST['product']);
			$productcategory=$_POST['productcategory'];
			
			
			        $sql="INSERT INTO tbl_products(cat_name,title)VALUES('$productcategory','$product')";
			
			       $res=mysqli_query($conn,$sql);
			       if($res)
			       {	
					echo"<div class='alert alert-info'><strong>Successfully</strong>  Added.</div>";
				    
			       }
			       else
			       {
					   echo"<div class='alert alert-danger'><strong>Something!!</strong> wrong please check.</div>";
				   
			       }
			

		}
		else
		{
			echo "<div class='alert alert-danger'><strong>Location!</strong>  Already  Registerd.</div>";
		}
		
  }


  else if($action=="view-product")
	{
		?>
		<script>
$('#dataTables-example').dataTable();
</script>

                                  
                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr>
										    <th>Sl. No</th>
											<th>Product Name</th>
											 <th>Product Category</th>
											 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									require "conn.php";
									 $sl=1;
									
									$sql1="select * from tbl_products";
									  $rs1=mysqli_query($conn,$sql1);
									  while($row=mysqli_fetch_assoc($rs1))
									  {
										    echo'<td>'.$sl.'</td>';
										    echo'<td>'.$row['title'].'</td>';
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