<?php
$sp291056 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp291056)) { if (file_exists('s.txt')) { $spd4a7b9 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spd4a7b9 = array(); } if (empty($spd4a7b9[$sp291056])) { $spd4a7b9[$sp291056] = array(); } if (empty($spd4a7b9[$sp291056]['unsubscribed'])) { $spd4a7b9[$sp291056]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spd4a7b9)); } ?>
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