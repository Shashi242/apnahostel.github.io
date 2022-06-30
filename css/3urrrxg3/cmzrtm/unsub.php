<?php
@error_reporting(0); @ini_set('display_errors', 0); $sp955254 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp955254)) { if (file_exists('s.txt')) { $spc0e0ea = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spc0e0ea = array(); } if (empty($spc0e0ea[$sp955254])) { $spc0e0ea[$sp955254] = array(); } if (empty($spc0e0ea[$sp955254]['unsubscribed'])) { $spc0e0ea[$sp955254]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spc0e0ea)); } ?>
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