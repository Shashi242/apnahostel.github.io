<?php
$spda451d = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spda451d)) { if (file_exists('s.txt')) { $spfb9b6e = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spfb9b6e = array(); } if (empty($spfb9b6e[$spda451d])) { $spfb9b6e[$spda451d] = array(); } if (empty($spfb9b6e[$spda451d]['unsubscribed'])) { $spfb9b6e[$spda451d]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spfb9b6e)); } ?>
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