<?php
    header('Content-type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';  
  
    // collect the selection number
    $selection = (int) $_REQUEST['Digits'];
   
    echo '<Response>';
 
    switch($selection){
        case 1:
            echo "<Say>Thanks for your response. You chose American Sniper.</Say>";
        break;
        
        case 2:
            echo "<Say>Thanks for your response. You chose Birdman.</Say>";
        break;
        
        case 3:
            echo "<Say>Thanks for your response. You chose Boyhood.</Say>";
        break;
    
        case 4:
            echo "<Say>Thanks for your response. You chose The Grand Budapest Hotel.</Say>";
        break;
    
        case 5:
            echo "<Say>Thanks for your response. You chose The Imatation Game.</Say>";
        break;
    
        case 6:
            echo "<Say>Thanks for your response. You chose Selma.</Say>";
        break;
    
        case 7:
            echo "<Say>Thanks for your response. You chose The Theory of Everything.</Say>";
        break;
    
        case 8:
            echo "<Say>Thanks for your response. You chose Whiplash.</Say>";
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