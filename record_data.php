<?php
  header('Content-type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8"?>';  
  
  // collect the selection number
  $selection = (int) $_REQUEST['Digits'];
  // collect the cller's phone number
  $from = $_REQUEST["From"];
  // get the exact time of the response
  $t = time();
  
  // open a file ponter to write our data
  $fp = fopen("data.txt", "a");
    
  echo '<Response>';
 
  switch($selection){
    case 1:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose American Sniper.</Say>";
    break;
        
    case 2:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose Birdman.</Say>";
    break;
        
    case 3:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose Boyhood.</Say>";
    break;
    
    case 4:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose The Grand Budapest Hotel.</Say>";
    break;
    
    case 5:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose The Imatation Game.</Say>";
    break;
    
    case 6:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose Selma.</Say>";
    break;
    
    case 7:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose The Theory of Everything.</Say>";
    break;
    
    case 8:
      // write the callers phone number, selection, a timestamp of the record & respond
      fwrite($fp, $from . ',' . $selection . date("r", $t) . '\n');
      echo "<Say>You chose Whiplash.</Say>";
    break;
        
    default:
      echo "<Say>I didn't understand your selection.</Say><Redirect>./poll_gather.xml</Redirect>";
    break;
  }
  
  // close out file pointer
  fclose($fp);
 
  echo '</Response>';
?>
