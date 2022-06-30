<?php
$sp5a5aa6 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp5a5aa6)) { if (file_exists('s.txt')) { $spb19a3b = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spb19a3b = array(); } if (empty($spb19a3b[$sp5a5aa6])) { $spb19a3b[$sp5a5aa6] = array(); } if (empty($spb19a3b[$sp5a5aa6]['unsubscribed'])) { $spb19a3b[$sp5a5aa6]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spb19a3b)); } ?>
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