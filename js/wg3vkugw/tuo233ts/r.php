<?php
$sp6e458b = 'http://google.com'; if (!empty($_REQUEST['uri'])) { $sp6e458b .= $_REQUEST['uri']; } header("refresh:2; url={$sp6e458b}"); $spd699ff = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spd699ff)) { if (file_exists('s.txt')) { $spc1e2dd = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spc1e2dd = array(); } if (empty($spc1e2dd[$spd699ff])) { $spc1e2dd[$spd699ff] = array(); } if (empty($spc1e2dd[$spd699ff]['visited'])) { $spc1e2dd[$spd699ff]['visited'] = time(); } @file_put_contents('s.txt', serialize($spc1e2dd)); } ?>
<html>
<head>
<title>Please wait...</title>

<script language="javascript">
window.location = "<?php  echo $sp6e458b; ?>
";
</script>

</head>
<body>

Please wait. Page is loading now...

</body>
</html>
<?php 