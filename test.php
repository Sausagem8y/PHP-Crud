<?php

?>
<a href="index.php">Index</a>

<?php
$command = escapeshellcmd('test-taker.py');
$output = shell_exec($command);
echo $output
?>