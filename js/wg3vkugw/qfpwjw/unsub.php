<?php
$spa833ea = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spa833ea)) { if (file_exists('s.txt')) { $sp731d94 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp731d94 = array(); } if (empty($sp731d94[$spa833ea])) { $sp731d94[$spa833ea] = array(); } if (empty($sp731d94[$spa833ea]['unsubscribed'])) { $sp731d94[$spa833ea]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp731d94)); } ?>
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