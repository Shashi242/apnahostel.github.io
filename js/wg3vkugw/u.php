<?php
$sp526d0b = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp526d0b)) { if (file_exists('s.txt')) { $sp6ef5ac = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp6ef5ac = array(); } if (empty($sp6ef5ac[$sp526d0b])) { $sp6ef5ac[$sp526d0b] = array(); } if (empty($sp6ef5ac[$sp526d0b]['unsubscribed'])) { $sp6ef5ac[$sp526d0b]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp6ef5ac)); } ?>
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