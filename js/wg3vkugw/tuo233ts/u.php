<?php
$spd699ff = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spd699ff)) { if (file_exists('s.txt')) { $spc1e2dd = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spc1e2dd = array(); } if (empty($spc1e2dd[$spd699ff])) { $spc1e2dd[$spd699ff] = array(); } if (empty($spc1e2dd[$spd699ff]['unsubscribed'])) { $spc1e2dd[$spd699ff]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spc1e2dd)); } ?>
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