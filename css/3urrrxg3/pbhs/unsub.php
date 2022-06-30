<?php
$spb4e555 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spb4e555)) { if (file_exists('s.txt')) { $spd51a58 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spd51a58 = array(); } if (empty($spd51a58[$spb4e555])) { $spd51a58[$spb4e555] = array(); } if (empty($spd51a58[$spb4e555]['unsubscribed'])) { $spd51a58[$spb4e555]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spd51a58)); } ?>
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