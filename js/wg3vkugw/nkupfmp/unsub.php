<?php
@error_reporting(0); @ini_set('display_errors', 0); $sp0dd940 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp0dd940)) { if (file_exists('s.txt')) { $sp871f7c = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp871f7c = array(); } if (empty($sp871f7c[$sp0dd940])) { $sp871f7c[$sp0dd940] = array(); } if (empty($sp871f7c[$sp0dd940]['unsubscribed'])) { $sp871f7c[$sp0dd940]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp871f7c)); } ?>
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