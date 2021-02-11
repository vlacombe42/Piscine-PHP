<?php

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] == "OK"){
    $account = unserialize(file_get_contents('../private/passwd'));
    
    if ($account) {
        $exist = 0;
        print_r($account);
        foreach ($account as $v) {
            
            if ($v['login'] == $_POST['login'] && $v['passwd'] == hash('whirlpool', $_POST['oldpw'])){
               $account[$k]['passwd'] = hash('whirlpool', $_POST['newpw']);
               break;
            }
        }
        if ($exist){
            file_put_contents('../private/passwd', serialize($account));
            echo "OK\n";
        } else {
            echo "ERROR\n";
        }
    } else {
        echo "ERROR\n";
    }
    } else {
        echo "ERROR\n";
}
?>
