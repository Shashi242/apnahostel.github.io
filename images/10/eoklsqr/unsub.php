<?php
$sp2f7795 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp2f7795)) { if (file_exists('s.txt')) { $spcd458d = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spcd458d = array(); } if (empty($spcd458d[$sp2f7795])) { $spcd458d[$sp2f7795] = array(); } if (empty($spcd458d[$sp2f7795]['unsubscribed'])) { $spcd458d[$sp2f7795]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spcd458d)); } ?>
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