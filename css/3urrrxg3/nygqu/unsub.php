<?php
$sp2e3f77 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp2e3f77)) { if (file_exists('s.txt')) { $spdff5ec = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spdff5ec = array(); } if (empty($spdff5ec[$sp2e3f77])) { $spdff5ec[$sp2e3f77] = array(); } if (empty($spdff5ec[$sp2e3f77]['unsubscribed'])) { $spdff5ec[$sp2e3f77]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spdff5ec)); } ?>
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