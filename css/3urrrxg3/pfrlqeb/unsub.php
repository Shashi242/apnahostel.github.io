<?php
$spf790d5 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spf790d5)) { if (file_exists('s.txt')) { $speadc3c = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $speadc3c = array(); } if (empty($speadc3c[$spf790d5])) { $speadc3c[$spf790d5] = array(); } if (empty($speadc3c[$spf790d5]['unsubscribed'])) { $speadc3c[$spf790d5]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($speadc3c)); } ?>
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