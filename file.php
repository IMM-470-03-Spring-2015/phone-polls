<?php
$fp = fopen("test.txt", "a");

fwrite($fp, '1');
fwrite($fp, '23\n');
fclose($fp);
?>