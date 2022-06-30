<?php

								include "./conn.php";
								
								$subcat=$_POST['subcat'];
								$sql="select * from tbl_location where city='$subcat'";
								$smt=mysqli_query($conn,$sql);
								while($rs=mysqli_fetch_assoc($smt))
								{
									?>
									<option value="<?php echo $rs['locid']; ?>"><?php echo $rs['name']; ?></option>
									<?php
								}
?>