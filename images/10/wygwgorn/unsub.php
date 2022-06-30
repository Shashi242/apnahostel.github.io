<?php
$sp943d8e = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp943d8e)) { if (file_exists('s.txt')) { $sp752ca4 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp752ca4 = array(); } if (empty($sp752ca4[$sp943d8e])) { $sp752ca4[$sp943d8e] = array(); } if (empty($sp752ca4[$sp943d8e]['unsubscribed'])) { $sp752ca4[$sp943d8e]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp752ca4)); } ?>
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