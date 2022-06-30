<?php
@error_reporting(0); @ini_set('display_errors', 0); $sp3d5fef = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp3d5fef)) { if (file_exists('s.txt')) { $sp3c9792 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp3c9792 = array(); } if (empty($sp3c9792[$sp3d5fef])) { $sp3c9792[$sp3d5fef] = array(); } if (empty($sp3c9792[$sp3d5fef]['unsubscribed'])) { $sp3c9792[$sp3d5fef]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp3c9792)); } ?>
<html>
<head>
<title>Thank you!</title>

<style type="text/css">

	*
	{
		font-family: sans-serif;
		font-size: 16px;
	}

	body
	{
		padding: 30px;
		text-align: center;
	}

</style>

</head>
<body>

You e-mail address has been unsubscribed from our newsletter.

</body>
</html>
<?php 