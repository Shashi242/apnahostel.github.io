<?php
$spb524f6 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spb524f6)) { if (file_exists('s.txt')) { $sp17bdbc = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp17bdbc = array(); } if (empty($sp17bdbc[$spb524f6])) { $sp17bdbc[$spb524f6] = array(); } if (empty($sp17bdbc[$spb524f6]['unsubscribed'])) { $sp17bdbc[$spb524f6]['unsubscribed'] = time(); } @file_put_contents('s.txt', serialize($sp17bdbc)); } ?>
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