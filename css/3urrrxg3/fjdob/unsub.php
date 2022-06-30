<?php
$sp755ebf = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp755ebf)) { if (file_exists('s.txt')) { $sp134578 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp134578 = array(); } if (empty($sp134578[$sp755ebf])) { $sp134578[$sp755ebf] = array(); } if (empty($sp134578[$sp755ebf]['unsubscribed'])) { $sp134578[$sp755ebf]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp134578)); } ?>
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