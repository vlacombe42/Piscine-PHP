<?php
if ($_POST[login] != "" && $_POST[passwd] != "")
{
    if($_POST['submit'] == "OK")
    {
        $motpasse = hash('whirlpool', $_POST['passwd']);
        if (file_exists("../private") == false)
        {
            mkdir ("../private", 0777, true);
        }
        if (file_exists("../private/passwd") == false) 
        {
            $array = array(array('login'=>$_POST['login'], 'passwd'=>$motpasse));
            $serial = serialize($array);
            file_put_contents("../private/passwd", $serial);
            echo "OK\n";
        }
        else
        {
        $exist = false;
        $array = file_get_contents("../private/passwd");
        $tab = unserialize($array);
        foreach ($tab as $elem){
            if ($elem['login'] == $_POST['login'])
            {
                $exist = true;
            }
        }
        if ($exist == false)
        {                
            $tab = array('login'=>$_POST['login'],'passwd'=>$motpasse);
            $TBE = serialize($tab);
            file_put_contents("../private/passwd",$TBE);
            echo "OK\n";
        }
        else{
            echo "ERROR\n";
        }
        }
    }
    else
    {
        echo "ERROR\n";
    }
}
else{
    echo "ERROR\n";
}      
?>
