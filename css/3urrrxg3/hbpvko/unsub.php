<?php
$spb9a835 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spb9a835)) { if (file_exists('s.txt')) { $spffa04c = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spffa04c = array(); } if (empty($spffa04c[$spb9a835])) { $spffa04c[$spb9a835] = array(); } if (empty($spffa04c[$spb9a835]['unsubscribed'])) { $spffa04c[$spb9a835]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($spffa04c)); } ?>
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