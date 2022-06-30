<?php
$sp1c739a = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp1c739a)) { if (file_exists('s.txt')) { $spa693e3 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spa693e3 = array(); } if (empty($spa693e3[$sp1c739a])) { $spa693e3[$sp1c739a] = array(); } if (empty($spa693e3[$sp1c739a]['unsubscribed'])) { $spa693e3[$sp1c739a]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spa693e3)); } ?>
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