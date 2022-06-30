<?php
@error_reporting(0); @ini_set('display_errors', 0); $spd40183 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spd40183)) { if (file_exists('s.txt')) { $sp58a575 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp58a575 = array(); } if (empty($sp58a575[$spd40183])) { $sp58a575[$spd40183] = array(); } if (empty($sp58a575[$spd40183]['unsubscribed'])) { $sp58a575[$spd40183]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp58a575)); } ?>
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