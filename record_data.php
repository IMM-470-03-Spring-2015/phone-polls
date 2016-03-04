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
            fwrite($fp, $from . ',Best Picture,The Big Short,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose The Big Short.</Say>";
        break;
        
        case 2:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Bridge of Spies,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Bridge of Spies.</Say>";
        break;
        
        case 3:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Brooklyn,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Brooklyn.</Say>";
        break;
    
        case 4:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Mad Max Fury Road,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Mad Max Fury Road.</Say>";
        break;
    
        case 5:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,The Martian,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose The Martian.</Say>";
        break;
    
        case 6:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,The Revenant,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose The Revenant.</Say>";
        break;
    
        case 7:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Room,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Room.</Say>";
        break;
    
        case 8:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',Best Picture,Spotlight,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Spotlight.</Say>";
        break;
    
        case 9:
            echo "<Say>O K. Redirecting back to the choices.</Say><Redirect>./poll_gather_data.xml</Redirect>";
        break;        
    
        default:
            echo "<Say>I didn't understand your selection.</Say><Redirect>./poll_gather_data.xml</Redirect>";
        break;
    }
  
    // close out file pointer
    fclose($fp);
 
    echo '</Response>';
?>
