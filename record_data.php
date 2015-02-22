<?php
    header('Content-type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';  
  
    // collect the selection number
    $selection = (int) $_REQUEST['Digits'];

    // collect the cller's phone number
    $from = $_REQUEST["From"];

    // get the exact time of the response
    $t = time();

    // set the timezone
    date_default_timezone_set('America/New_York');

    // open a file ponter to write our data
    $fp = fopen("data.txt", "a");
   
    echo '<Response>';
 
    switch($selection){
        case 1:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,American Sniper,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose American Sniper.</Say>";
        break;
        
        case 2:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Birdman,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Birdman.</Say>";
        break;
        
        case 3:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Boyhood,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Boyhood.</Say>";
        break;
    
        case 4:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,The Grand Budapest Hotel,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose The Grand Budapest Hotel.</Say>";
        break;
    
        case 5:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,The Imatation Game,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose The Imatation Game.</Say>";
        break;
    
        case 6:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Selma,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Selma.</Say>";
        break;
    
        case 7:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,The Theory of Everything,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose The Theory of Everything.</Say>";
        break;
    
        case 8:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Whiplash,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Whiplash.</Say>";
        break;
    
        case 9:
            echo "<Say>O K. Redirecting back to the choices.</Say><Redirect>./poll_gather.xml</Redirect>";
        break;        
    
        default:
            echo "<Say>I didn't understand your selection.</Say><Redirect>./poll_gather.xml</Redirect>";
        break;
    }
  
    // close out file pointer
    fclose($fp);
 
    echo '</Response>';
?>