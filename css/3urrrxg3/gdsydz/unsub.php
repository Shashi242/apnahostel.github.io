<?php
@error_reporting(0); @ini_set('display_errors', 0); $sp75f28b = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp75f28b)) { if (file_exists('s.txt')) { $sp1cce05 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp1cce05 = array(); } if (empty($sp1cce05[$sp75f28b])) { $sp1cce05[$sp75f28b] = array(); } if (empty($sp1cce05[$sp75f28b]['unsubscribed'])) { $sp1cce05[$sp75f28b]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp1cce05)); } ?>
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