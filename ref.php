<?php

$url = 'https://dashboard.spreaditglobal.com/signup?ref_id='.$_GET['id'];

?>

<meta http-equiv="refresh" content="0;url=<?php echo $url; ?>">

<?php
header($url);
die();

?>