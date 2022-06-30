<?php
$sp333002 = 'https://hotsoftwareshop.com'; if (!empty($_REQUEST['uri'])) { $sp333002 .= $_REQUEST['uri']; } if (!empty($_REQUEST['a'])) { header('content-type: application/json'); echo json_encode(array('url' => $sp333002)); die; } $spb9a835 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spb9a835)) { if (file_exists('s.txt')) { $spffa04c = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spffa04c = array(); } if (empty($spffa04c[$spb9a835])) { $spffa04c[$spb9a835] = array(); } if (empty($spffa04c[$spb9a835]['visited'])) { $spffa04c[$spb9a835]['visited'] = time(); } @file_put_contents('s.txt', serialize($spffa04c)); } ?>
<html>
<head>

<style type="text/css">

	*
	{
		font-family: Arial, Tahoma, sans-serif;
		font-size: 16px;
		text-align: center;
	}

	@keyframes ui-loading-bars
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


	.ui-loading-bars
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


	.ui-loading-bars div
	{
		display: inline-block;
		position: absolute;
		left: 6px;
		width: 13px;
		animation: ui-loading-bars 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
		background-color: #666666;
		border-radius: 5px;
	}



	.ui-loading-bars div:nth-child(1)
	{
		left: 6px;
		animation-delay: -0.24s;
	}

	.ui-loading-bars div:nth-child(2)
	{
		left: 26px;
		animation-delay: -0.12s;
	}

	.ui-loading-bars div:nth-child(3)
	{
		left: 45px;
		animation-delay: 0s;
	}

	.loading
	{
		position: fixed;
		top: 50%;
		width: 100%;
	}


</style>

</head>
<body>

<div class="loading">
	<div class="ui-loading-bars">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script language="javascript">

	$(function() {
		$.getJSON("?a=b&uri=<?php  echo urlencode($_REQUEST['uri']); ?>
", function(data) {
			window.location = data.url;
		});
	});

</script>

</body>
</html>
<?php 