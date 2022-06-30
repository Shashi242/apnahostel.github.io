<script type="text/javascript">
  function validateForm() {
    var a = document.forms["Form"]["firstfield"].value;
    var b = document.forms["Form"]["secondfield"].value;
    var c = document.forms["Form"]["thirdfield"].value;
    var d = document.forms["Form"]["fourthfield"].value;
	var e = document.forms["Form"]["fifthfield"].value;
    if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d =="",e==null "") {
      alert("Please Fill All Required Field");
      return false;
    }
  }
</script>      


		  <div class="row register-form py-md-5">
                <!-- register details -->
                
                </div>
                <div class="offset-lg-2"></div>
                <div class="container my-5">
      <div class="col-12 text-center my-5">
        <h1><b>Post your Hostel</b></h1>
      </div>
      <form action="register.php" method="post" name="Form" onsubmit="return validateForm()">
        <input
          type="hidden"
          id="fname"
          name="processform"
          value="1"
        />
		
		<label for="field">First Name</label>
         <input type="text" id="field1" name="firstfield" placeholder="Enter Your First Name">
		 <label for="field">Last Name</label>
         <input type="text" id="field5" name="fifthfield" placeholder="Enter Your Last Name">
        <label for="email">Mobile number</label>
        <input type="text" id="field2" name="secondfield" placeholder="Enter Your Mobile Number">

        <label for="email">Hostel Locality</label>
        <input type="text" id="field3" name="thirdfield" placeholder="Enter Hostel Area">
        <label for="locality">Hostel Details</label>
        <input type="text" id="field4" name="fourthfield" placeholder="Enter Name and Details of Hostel">
        
        

        <input type="submit" value="Submit" class="gradient" />
      </form>
    </div>

            </div>
            <!-- //register details container -->
        </div>