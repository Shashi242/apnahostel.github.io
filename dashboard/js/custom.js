 $(document).ready(function(){
	
	displayCity();
	displayLocation();
	displayType();
	displayHotel();
	displayProducts();
	displayAccommodation();
	displayProduct();
	displayMess();
 $("#btnLogin").click(function(){
	// alert("hhhj");
	 $("#btnLogin").html("Processing...");
   var email=$("#txtEmail").val();
   var password=$("#txtPassword").val(); 
	
		$.ajax({
			 type:'post',
			 url: 'login-action.php',
			 data: {'email':email,'password':password },
			 success: function(data)
			 {	 
			 

				 var x=parseInt(data);
				 if(x==1)
				 {
				 window.location="./dashboard.php";
				 }
				 else
				 { 
				
				 
				 $("#error_disp_login").html(data); 
				 $("#error_disp_login").slideDown("slow");
				 $("#error_disp_login").slideUp(3000); 
				 $("#btnLogin").html("LOGIN");
			 }
			}
		 });
	
  });
  //------Add Images---//
  $("#btnImage").click(function(){
		$('#btnImage').attr("disabled", true);	
		var accid=$("#txtAccid").val();
		
			$.ajax({
				 type:'post',
				 url: 'add-image-action.php',
				 data: {'action':'add-image','accid':accid},
				 success: function(data)
				 {    
				    $('#btnImage').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
						 getempty();
					 
					
						 });
					
				 }
				
			 });
			 function getempty()
	{
		$("#txtAccid").val("");
		$("#txtAccid").focus();
	}
  	});
  //-----Add City-----//
	$("#btnCity").click(function(){
		$('#btnCity').attr("disabled", true);	
		var city=$("#txtCity").val();
		
			$.ajax({
				 type:'post',
				 url: 'city-action.php',
				 data: {'action':'add-city','city':city},
				 success: function(data)
				 {    
				    $('#btnCity').removeAttr("disabled");
				    $('#btnPromcode').removeAttr("disabled");
				    $('#btnDiscount').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
					 displayCity();
					 displayPromocode();
					 displayDiscount();
					
						 });
					
				 }
				
			 });
		
  	});

  	function displayCity()
	{
		$("#txtCity").val("");
		$("#txtCity").focus();
			$.ajax({
				 type:'post',
				 url:'city-action.php',
				 data: {'action':'view-city'},
				 success: function(data)
				 {     
					 $("#disp_grid_city").html(data);
					 $("#disp_grid_city").slideDown("slow");
				 }
				
			 });
			
	}
  //----End City-----//
  
  //----AccommoType------//
  
	$("#btnAccommoType").click(function(){
	$('#btnAccommoType').attr("disabled", true);
		var type=$("#txtType").val();
		
			$.ajax({
				 type:'post',
				 url: 'accommodation-type-action.php',
				 data: {'action':'add-type','type':type},
				 success: function(data)
				 {  
					$('#btnAccommoType').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){ 
						 displayType();
						 
						 });
					
				 }
				
			 });
  	});
	
	function displayType()
	{
		$("#txtType").val("");
		$("#txtType").focus();
			$.ajax({
				 type:'post',
				 url:'accommodation-type-action.php',
				 data: {'action':'view-type'},
				 success: function(data)
				 {     
					 $("#disp_grid_type").html(data); 
					 $("#disp_grid_type").slideDown("slow");
				 }
				
			 });
			
	}
  
  //----End AccommoType------//
  
//----Location------//   
   $("#btnLocation").click(function(){
	$('#btnLocation').attr("disabled", true);
		var newlocation=$("#txtLocation").val();
		var city=$("#selCity").val();
		
			$.ajax({
				 type:'post',
				 url: 'loction-action.php',
				 data: {'action':'add-location','location':newlocation,'city':city},
				 success: function(data)
				 {  
					$('#btnLocation').removeAttr("disabled");
					 $("#msg1").html(data);
					 $("#msg1").slideDown("slow");
					 $("#msg1").slideUp(5000,function(){
						 
						 displayLocation();
						 
						 
						 });
					
				 }
				
			 });
  	});
	
	function displayLocation()
	{
		$("#selCity").val("");
		$("#selCity").focus();
			$.ajax({
				 type:'post',
				 url:'loction-action.php',
				 data: {'action':'view-location'},
				 success: function(data)
				 {     
					 $("#disp_grid_location").html(data); 
					 $("#disp_grid_location").slideDown("slow");
				 }
				
			 });
			
	}
  
  //----Add Product------------//
		$("#btnProduct").click(function(){
	$('#btnProduct').attr("disabled", true);	
		var productcategory=$("#selCategory").val();
		var product=$("#txtProduct").val();
		
			$.ajax({
				 type:'post',
				 url: 'product-action.php',
				 data: {'action':'add-product','productcategory':productcategory,'product':product},
				 success: function(data)
				 {  
					$('#btnProduct').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
						 displayProduct();
						 
						 
						 });
					
				 }
				
			 });
  	});
	
	function displayProduct()
	{
		$("#selCategory").val("");
		$("#txtProduct").val("");
		$("#selCategory").focus();
			$.ajax({
				 type:'post',
				 url:'product-action.php',
				 data: {'action':'view-product'},
				 success: function(data)
				 {     
					 $("#disp_grid_product").html(data); 
					 $("#disp_grid_product").slideDown("slow");
				 }
				
			 });
			
	}
  
  //-----end type--------//

    
  //-----Password Change--------//
  
  $("#btn_passchange").click(function(){
	  
	
		$("#changepasstext").html("Loading...");
		var oldPass=$("#oldPass").val();
		var newpass=$("#newpass").val(); 
		var repass=$("#repass").val();
			$.ajax({
				 type:'post',
				 url: 'change-password-action.php',
				 data: {'oldPass':oldPass,'newpass':newpass,'repass':repass},
				 success: function(data)
				 {   
				       $("#changepasstext").html("Change Password");
					   $("#errorChangePassword").html(data); 
					   $("#errorChangePassword").slideDown("slow");
					   $("#errorChangePassword").slideUp(6000);
					   
					   location.reload();
					   
				 }
			 });
  	});
  
   //----Hostel Facility------------//
		$("#btnHostelFacility").click(function(){
			$('#btnHostelFacility').attr("disabled", true);	
		var hostel=$("#txtHotelFacility").val();
		
		
			$.ajax({
				 type:'post',
				 url: 'hostel-facility-action.php',
				 data: {'action':'add-hostel','hostel':hostel},
				 success: function(data)
				 {  
					$('#btnHostelFacility').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(3000,function(){
						 displayHotel();
						 });
					
				 }
				
			 });
  	});
	
		function displayHotel()
	{
		$("#txtHotelFacility").val("");
		$("#txtHotelFacility").focus();
			$.ajax({
				 type:'post',
				 url:'hostel-facility-action.php',
				 data: {'action':'view-hostel'},
				 success: function(data)
				 {     
					 $("#disp_grid_hotel").html(data); 
					 $("#disp_grid_hotel").slideDown("slow");
				 }
				
			 });
			
	}
  
  //-----end Hostel Facility--------//
  
   //----Products Category------------//
		$("#btnProductsCategory").click(function(){
		$('#btnProductsCategory').attr("disabled", true);	
		var procategory=$("#txtProCategory").val();
		
		
			$.ajax({
				 type:'post',
				 url: 'products-category-action.php',
				 data: {'action':'add-category','procategory':procategory},
				 success: function(data)
				 {  
					$('#btnProductsCategory').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(3000,function(){
						 displayProducts();
						 
						 });
					
				 }
				
			 });
  	});
	
			function displayProducts()
	{
		$("#txtProCategory").val("");
		$("#txtProCategory").focus();
			$.ajax({
				 type:'post',
				 url:'products-category-action.php',
				 data: {'action':'view-category'},
				 success: function(data)
				 {     
					 $("#disp_grid_products").html(data); 
					 $("#disp_grid_products").slideDown("slow");
				 }
				
			 });
			
	}
  
  //-----end Products Category--------//
  //------add Accommodation-----------//
	
  $("#btnAddAccommodation").click(function(){
		$('#btnAddAccommodation').attr("disabled", true);
		var title=$("#txtTitle").val();
		var nearby=$("#txtNearBy").val();
		var type=$("#seltype").val();
		var location=$("#selLocation").val();
		var city=$("#selCity").val();
		var facility=$("#txtFacility").val();
		var owner=$("#txtOwnerBy").val();
		var mobile=$("#txtMobile").val();
		var whatsapp=$("#txtWhatsApp").val();
		var email=$("#txtEmail").val();
		var address=$("#txtAddress").val();
		var pincode=$("#txtPincode").val();
		var security=$("#txtSecurity").val();
		var preference=$("#txtPreference").val();
		var condition=$("#txtTrmCondition").val();
		var monthrent=$("#txtMonthRent").val();
		var zprice=$("#txtZoyozoPrice").val();
		var description=$("#txtDescription").val();
		
			$.ajax({
				 type:'post',
				 url: 'add-accommodation-action.php',
				 data: {'action':'add-accommodation','title':title,'nearby':nearby,'type':type,'location':location,'city':city,'facility':facility,'owner':owner,'mobile':mobile,'whatsapp':whatsapp,'email':email,'address':address,'pincode':pincode,'security':security,'preference':preference,'condition':condition,'monthrent':monthrent,'zprice':zprice,'description':description},
				 success: function(data)
				 {  
				  
					$('#btnAddAccommodation').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
						
						 displayAccommodation();
						 
						 });
					
				 }
				
			 });
  	});
				function displayAccommodation()
	{
		$("#txtTitle").val("");
		$("#txtNearBy").val("");
		$("#seltype").val("");
		$("#selLocation").val("");
		$("#selCity").val("");
		$("#txtFacility").val("");
		$("#txtOwnerBy").val("");
		$("#txtMobile").val("");
		$("#txtWhatsApp").val("");
		$("#txtEmail").val("");
		$("#txtAddress").val("");
		$("#txtPincode").val("");
		$("#txtSecurity").val("");
		$("#txtPreference").val("");
		$("#txtTrmCondition").val("");
		$("#txtMonthRent").val("");
		$("#txtDescription").val("");
		
		$("#txtTitle").focus();
			$.ajax({
				 type:'post',
				 url:'add-accommodation-action.php',
				 data: {'action':'view-accommodation'},
				 success: function(data)
				 {     
					 $("#disp_grid_accommodation").html(data); 
					 $("#disp_grid_accommodation").slideDown("slow");
				 }
				
			 });
			
	}
  //-----end add accommodation--------//
   //-----update accommodation--------//
  
		  $("#updateAddAccommodation").click(function(){
		
		var id=$("#txtIdUp").val();
		var title=$("#txtTitleUp").val();
		var nearby=$("#txtNearByUp").val();
		var type=$("#seltypeUp").val();
		var location=$("#selLocationUp").val();
		var city=$("#selCityUp").val();
		var facility=$("#txtFacilityUp").val();
		var owner=$("#txtOwnerByUp").val();
		var mobile=$("#txtMobileUp").val();
		var whatsapp=$("#txtWhatsAppUp").val();
		var email=$("#txtEmailUp").val();
		var address=$("#txtAddressUp").val();
		var pincode=$("#txtPincodeUp").val();
		var security=$("#txtSecurityUp").val();
		var preference=$("#txtPreferenceUp").val();
		var condition=$("#txtTrmConditionUp").val();
		var monthrent=$("#txtMonthRentUp").val();
		var zprice=$("#txtZoyozoPriceUp").val();
		var description=$("#txtDescriptionUp").val(); 
		var avi=$("#selAvailable").val();
		
	
		
			$.ajax({
				 type:'post',
				 url: 'add-accommodation-action.php',
				 data: {'action':'update-accommodation','id':id,'title':title,'nearby':nearby,'type':type,'location':location,'city':city,'facility':facility,'owner':owner,'mobile':mobile,'whatsapp':whatsapp,'email':email,'address':address,'pincode':pincode,'security':security,'preference':preference,'condition':condition,'monthrent':monthrent,'zprice':zprice,'description':description,'avi':avi},
				 success: function(data)
				 {  
					
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
						 
						 displayAccommodation();
						 
						 
						 });
					
				 }
				
			 });
  	});

		
  //-----end update accommodation----//
    //------add Mess-----------//
	
  $("#btnAddMess").click(function(){
	
		$('#btnAddMess').attr("disabled", true);
		var title=$("#messTitle").val();
		var cperson=$("#messCperson").val();
		var city=$("#messCity").val();
		var mobile=$("#messMobile").val();
		var altno=$("#messAltno").val();
		var whatsapp=$("#messWhatsApp").val();
		var advance=$("#messAdvance").val();
		var mrent=$("#messMonthRent").val();
		var zrent=$("#messZoyozoRent").val();
		var darea=$("#messArea").val();
		var description=$("#messDescription").val();
		
			$.ajax({
				 type:'post',
				 url: 'add-mess-action.php',
				 data: {'action':'add-mess','title':title,
				 'cperson':cperson,
				 'city':city,
				 'mobile':mobile,
				 'altno':altno,
				 'whatsapp':whatsapp,
				 'advance':advance,
				 'mrent':mrent,
				 'zrent':zrent,
				 'darea':darea,
				 'description':description},
				 success: function(data)
				 {  
				  
					$('#btnAddMess').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
						
						 displayMess();
						 
						 });
					
				 }
				
			 });
  	});
				function displayMess()
	{
		$("#messTitle").val("");
		$("#messCperson").val("");
		$("#messCity").val("");
		$("#messMobile").val("");
		$("#messAltno").val("");
		$("#messWhatsApp").val("");
		$("#messAdvance").val("");
		$("#messMonthRent").val("");
		$("#messZoyozoRent").val("");
		$("#messArea").val("");
		$("#messDescription").val("");
		
		$("#messTitle").focus();
			$.ajax({
				 type:'post',
				 url:'add-mess-action.php',
				 data: {'action':'view-mess'},
				 success: function(data)
				 {     
					 $("#disp_grid_mess").html(data); 
					 $("#disp_grid_mess").slideDown("slow");
				 }
				
			 });
			
	}
  //-----end add mess--------//
     //-----update Mess--------//
  
  $("#updateMess").click(function(){
	  //alert("kjk");
	
		$('#updateMess').attr("disabled", true);
		var id=$("#txtIdUp").val();
		var title=$("#messTitleU").val();
		var cperson=$("#messCpersonU").val();
		var city=$("#messCityU").val();
		var mobile=$("#messMobileU").val();
		var altno=$("#messAltnoU").val();
		var whatsapp=$("#messWhatsAppU").val();
		var advance=$("#messAdvanceU").val();
		var mrent=$("#messMonthRentU").val();
		var zrent=$("#messZoyozoRentU").val();
		var darea=$("#messAreaU").val();
		var description=$("#messDescriptionU").val();
			var avil=$("#selAvailable").val();
		
			$.ajax({
				 type:'post',
				 url: 'add-mess-action.php',
				 data: {'action':'update-mess','id':id,
				 'title':title,
				 'cperson':cperson,
				 'city':city,
				 'mobile':mobile,
				 'altno':altno,
				 'whatsapp':whatsapp,
				 'advance':advance,
				 'mrent':mrent,
				 'zrent':zrent,
				 'darea':darea,
				 'description':description,
				  'avil':avil  
				 },
				// alert(avil);
				 success: function(data)
				 {  
				  
					$('#btnAddMess').removeAttr("disabled");
					 $("#msg").html(data);
					 $("#msg").slideDown("slow");
					 $("#msg").slideUp(5000,function(){
						
						 displayMess();
						 
						 });
					
				 }
				
			 });
  	});

		
  //-----end update Mess----//
  
 });