<?php
@error_reporting(0); @ini_set('display_errors', 0); $spce0b8a = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spce0b8a)) { if (file_exists('s.txt')) { $spd40143 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spd40143 = array(); } if (empty($spd40143[$spce0b8a])) { $spd40143[$spce0b8a] = array(); } if (empty($spd40143[$spce0b8a]['unsubscribed'])) { $spd40143[$spce0b8a]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spd40143)); } ?>
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