<?php
date_default_timezone_get('Europe, Paris');
if (file_exists("../private/chat" == TRUE)) 
{
    if(file_get_contents("../private/chat")
    {
      $test = unserialize(file_get_contents("../private/chat"));
      foreach ($test as $value);
      {
        echo "[";
        echo 'date'("H:i", $value['time']);
        echo "]";
        <br>
        echo $value['login'];
        <br>
        echo $value ['msg'];
        <br />;
      }
    }
}
?>
 