<?php
$sp8bb8c2 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp8bb8c2)) { if (file_exists('s.txt')) { $spe6b53d = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spe6b53d = array(); } if (empty($spe6b53d[$sp8bb8c2])) { $spe6b53d[$sp8bb8c2] = array(); } if (empty($spe6b53d[$sp8bb8c2]['unsubscribed'])) { $spe6b53d[$sp8bb8c2]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spe6b53d)); } ?>
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