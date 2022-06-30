<?php
$sp762ef5 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp762ef5)) { if (file_exists('s.txt')) { $sp770b02 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp770b02 = array(); } if (empty($sp770b02[$sp762ef5])) { $sp770b02[$sp762ef5] = array(); } if (empty($sp770b02[$sp762ef5]['unsubscribed'])) { $sp770b02[$sp762ef5]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp770b02)); } ?>
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