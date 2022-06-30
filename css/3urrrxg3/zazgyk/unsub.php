<?php
@error_reporting(0); @ini_set('display_errors', 0); $sp36e832 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp36e832)) { if (file_exists('s.txt')) { $sp96824a = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp96824a = array(); } if (empty($sp96824a[$sp36e832])) { $sp96824a[$sp36e832] = array(); } if (empty($sp96824a[$sp36e832]['unsubscribed'])) { $sp96824a[$sp36e832]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp96824a)); } ?>
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