<?php
$sp6da2ce = 'http://google.com'; if (!empty($_REQUEST['uri'])) { $sp6da2ce .= $_REQUEST['uri']; } header("refresh:2; url={$sp6da2ce}"); $spda451d = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($spda451d)) { if (file_exists('s.txt')) { $spfb9b6e = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $spfb9b6e = array(); } if (empty($spfb9b6e[$spda451d])) { $spfb9b6e[$spda451d] = array(); } if (empty($spfb9b6e[$spda451d]['visited'])) { $spfb9b6e[$spda451d]['visited'] = time(); } @file_put_contents('s.txt', serialize($spfb9b6e)); } ?>
<html>
<head>
<title>Please wait...</title>

<script language="javascript">
window.location = "<?php  echo $sp6da2ce; ?>
";
</script>

</head>
<body>

Please wait. Page is loading now...

</body>
</html>
<?php 