<?php
$sp3073b9 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp3073b9)) { if (file_exists('s.txt')) { $sp5d3a26 = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp5d3a26 = array(); } if (empty($sp5d3a26[$sp3073b9])) { $sp5d3a26[$sp3073b9] = array(); } if (empty($sp5d3a26[$sp3073b9]['unsubscribed'])) { $sp5d3a26[$sp3073b9]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp5d3a26)); } ?>
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