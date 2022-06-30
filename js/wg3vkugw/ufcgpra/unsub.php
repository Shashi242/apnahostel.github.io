<?php
$spa3a44c = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spa3a44c)) { if (file_exists('s.txt')) { $sp24311a = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp24311a = array(); } if (empty($sp24311a[$spa3a44c])) { $sp24311a[$spa3a44c] = array(); } if (empty($sp24311a[$spa3a44c]['unsubscribed'])) { $sp24311a[$spa3a44c]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp24311a)); } ?>
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