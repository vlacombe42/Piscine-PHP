<?php
    if (isset($_GET["action"])){
        $act =$_GET["action"];
        if ($act == "set"){
           if (isset($_GET["name"]) && (isset($_GET["value"])))
            {
                setcookie ($_GET["name"], $_GET["value"], time() + 3600);  
            }
        }

        if ($act == "get"){
            if (isset($_COOKIE[$_GET["name"]])){
                echo $_COOKIE[$_GET["name"]];

            }
        }

        if ($act == "del"){
            if (isset($_GET["name"]))
            {
                setcookie ($_GET["name"], "", time() - 3600);  
            }
        }
    }   
?>