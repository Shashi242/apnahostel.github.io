<?php
$spf9c79e = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spf9c79e)) { if (file_exists('s.txt')) { $sp19d439 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp19d439 = array(); } if (empty($sp19d439[$spf9c79e])) { $sp19d439[$spf9c79e] = array(); } if (empty($sp19d439[$spf9c79e]['unsubscribed'])) { $sp19d439[$spf9c79e]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp19d439)); } ?>
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