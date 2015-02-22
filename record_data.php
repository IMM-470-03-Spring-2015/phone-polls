<?php
// open a file ponter
$fp = fopen("data.txt", "a");

// write our data
fwrite($fp, '1');
// close out file pointer
fclose($fp);
?>
