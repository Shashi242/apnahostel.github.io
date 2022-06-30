<?php
@error_reporting(0); @ini_set('display_errors', 0); $spd6c96f = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spd6c96f)) { if (file_exists('s.txt')) { $spee0198 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spee0198 = array(); } if (empty($spee0198[$spd6c96f])) { $spee0198[$spd6c96f] = array(); } if (empty($spee0198[$spd6c96f]['unsubscribed'])) { $spee0198[$spd6c96f]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spee0198)); } ?>
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