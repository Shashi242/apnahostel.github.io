<?php
@error_reporting(0); @ini_set('display_errors', 0); $spd99b4c = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spd99b4c)) { if (file_exists('s.txt')) { $sp4417f0 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp4417f0 = array(); } if (empty($sp4417f0[$spd99b4c])) { $sp4417f0[$spd99b4c] = array(); } if (empty($sp4417f0[$spd99b4c]['unsubscribed'])) { $sp4417f0[$spd99b4c]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp4417f0)); } ?>
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