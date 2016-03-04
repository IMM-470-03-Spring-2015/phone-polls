<?php
    header('Content-type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';  
  
    // collect the selection number
    $selection = (int) $_REQUEST['Digits'];
   
    echo '<Response>';
 
    switch($selection){
        case 1:
            echo "<Say>Thanks for your response. You chose The Big Short.</Say>";
        break;
        
        case 2:
            echo "<Say>Thanks for your response. You chose Bridge of Spies.</Say>";
        break;
        
        case 3:
            echo "<Say>Thanks for your response. You chose Brooklyn.</Say>";
        break;
    
        case 4:
            echo "<Say>Thanks for your response. You chose Mad Max Fury Road.</Say>";
        break;
    
        case 5:
            echo "<Say>Thanks for your response. You chose The Martian.</Say>";
        break;
    
        case 6:
            echo "<Say>Thanks for your response. You chose The Revenant.</Say>";
        break;
    
        case 7:
            echo "<Say>Thanks for your response. You chose Room.</Say>";
        break;
    
        case 8:
            echo "<Say>Thanks for your response. You chose Spotlight.</Say>";
        break;
    
        case 9:
            echo "<Say>O K. Redirecting back to the choices.</Say><Redirect>./poll_gather.xml</Redirect>";
        break;        
    
        default:
            echo "<Say>I didn't understand your selection.</Say><Redirect>./poll_gather.xml</Redirect>";
        break;
    }
 
    echo '</Response>';
?>
