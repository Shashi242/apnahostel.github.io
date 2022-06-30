<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zoyozo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<script>
			 $(document).ready(function(){
			     
			     
			     function check()
				{
					var atype=document.getElementsByName("optradio");
					var len=atype.length
					for(i=0;i<len;i++)
					{
						if(atype[i].checked)
						{
							var rat = atype[i].value;
								return rat;
							
						}
					 }
                }
			     
			     
				 
				 $("#btnAdd").click(function(){
					
					var name=$("#txtName").val();
					var mob=$("#txtNum").val();
					var rat=check();
					var message=$("#txtSugg").val();
					
					
						$.ajax({
							 type:'post',
							 url: 'feed_action.php',
							 data: {'action':'add-fee','name':name,'mob':mob,'rat':rat,'message':message},
							 success: function(data)
							 {    
								alert(data);
									 
								location.reload();
								
							 }
							
						 });
					
				});
				
			 });
				</script>
<body>

<div class="container">
    
    <br><br>
    <div class="panel panel-default">
    <div class="panel-body">
 <center> <h2>Feedback Form</h2></center>
 
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="txtName" placeholder="Enter Name" name="txtName">
    </div>
    <div class="form-group">
      <label for="pwd">Mobile Number</label>
      <input type="text" class="form-control" id="txtNum" placeholder="Enter Mobile Number" name="txtNum">
    </div>
      <div class="form-group">
      <label for="pwd">Rate Zoyozo Service</label>
      <br>
    <label class="radio-inline">
      <input type="radio" name="optradio"  id="optradio1" onclick="check();" value="1">1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio2" onclick="check();" value="2">2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio3" onclick="check();" value="3">3
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"  id="optradio4" onclick="check();" value="4" checked>4
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio5" onclick="check();" value="5">5
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio6" onclick="check();" value="6">6
    </label>
     </div>
      <div class="form-group">
      <label for="pwd">Any Suggestion</label>
      <input type="text" class="form-control" id="txtSugg" placeholder="Enter Any Suggestion" name="txtSugg">
    </div>
   <center>   <button type="submit" class="btn btn-success" id="btnAdd">Submit</button></center>
   
   
  </div>
</div>

</div>

</body>
</html>
