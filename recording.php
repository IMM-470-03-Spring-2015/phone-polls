<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    
    // collect the cller's phone number
    $from = $_REQUEST["From"];

    // get the exact time of the response
    $t = time();

    // set the timezone
    date_default_timezone_set('America/New_York');

    // open a file ponter to write our data
    $fp = fopen("data.txt", "a");
    
    // get the url to the voice recording
    $recording = $_REQUEST['RecordingUrl'];

    // get the duration of the voice recording
    $duration = $_REQUEST['RecordingDuration'];

    // write the data file
    fwrite($fp, $from . ',Favorite Movie this year,' . $recording . ',' . $duration . ',' . date("c", $t) . "\n");

    // close out file pointer
    fclose($fp);
?>
<Response>
    <Say>Thanks for taking our poll. Your favorite movie this year was</Say>
    <Play><?php echo $recording; ?></Play>
</Response>