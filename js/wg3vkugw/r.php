<?php
$sp94c4ef = 'http://google.com'; if (!empty($_REQUEST['uri'])) { $sp94c4ef .= $_REQUEST['uri']; } header("refresh:2; url={$sp94c4ef}"); $sp526d0b = preg_replace('/[^0-9A-Za-z]/', '', $_REQUEST['id']); if (!empty($sp526d0b)) { if (file_exists('s.txt')) { $sp6ef5ac = @unserialize(@file_get_contents('s.txt')) ?: array(); } else { $sp6ef5ac = array(); } if (empty($sp6ef5ac[$sp526d0b])) { $sp6ef5ac[$sp526d0b] = array(); } if (empty($sp6ef5ac[$sp526d0b]['visited'])) { $sp6ef5ac[$sp526d0b]['visited'] = time(); } @file_put_contents('s.txt', serialize($sp6ef5ac)); } ?>
<html>
<head>
<title>Please wait...</title>

<script language="javascript">
window.location = "<?php  echo $sp94c4ef; ?>
";
</script>

</head>
<body>

Please wait. Page is loading now...

</body>
</html>
<?php 