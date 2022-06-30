<?php
$sp27135b = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp27135b)) { if (file_exists('s.txt')) { $sp0b8f8d = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp0b8f8d = array(); } if (empty($sp0b8f8d[$sp27135b])) { $sp0b8f8d[$sp27135b] = array(); } if (empty($sp0b8f8d[$sp27135b]['unsubscribed'])) { $sp0b8f8d[$sp27135b]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp0b8f8d)); } ?>
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