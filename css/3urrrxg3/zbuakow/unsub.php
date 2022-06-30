<?php
@error_reporting(0); @ini_set('display_errors', 0); $spfda3c7 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spfda3c7)) { if (file_exists('s.txt')) { $sp761d4a = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp761d4a = array(); } if (empty($sp761d4a[$spfda3c7])) { $sp761d4a[$spfda3c7] = array(); } if (empty($sp761d4a[$spfda3c7]['unsubscribed'])) { $sp761d4a[$spfda3c7]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp761d4a)); } ?>
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