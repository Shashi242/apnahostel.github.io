<?php
@error_reporting(0); @ini_set('display_errors', 0); $sp2385fe = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp2385fe)) { if (file_exists('s.txt')) { $sp26ee26 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp26ee26 = array(); } if (empty($sp26ee26[$sp2385fe])) { $sp26ee26[$sp2385fe] = array(); } if (empty($sp26ee26[$sp2385fe]['unsubscribed'])) { $sp26ee26[$sp2385fe]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp26ee26)); } ?>
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