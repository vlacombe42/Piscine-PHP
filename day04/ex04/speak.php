<?php
    session_start();
    if ($_SESSION['loggued_on_user'] != "")
    {
        if (isset($_POST['submit']))
        {
        if ($_POST['submit'] == "ENVOYER")
        {
            if (file_exists("../private/chat") == FALSE)
            {
                    $array = array(array('time'=>time(), 'login'=>$_SESSION['loggued_on_user'], 'msg'=>$_POST['msg']));
                    $seri = serialize($array);
                    file_put_contents("../private/chat", $seri);
            }
            else
            {
                $fp = fopen("../private/chat", "c+");
                flock($fd, LOCK_EX | LOCK_SH);
                $array = file_get_contents("../private/chat");
                $test = unserialize($array);
                $test[] = array('time'=>time(), 'login'=>$_SESSION['loggued_on_user'], 'msg'=>$_POST['msg']);
                $te = serialize($test);
                file_put_contents("../private/chat", $te);
                flock($fp, LOCK_UN);
            }
        }
    }
?>
<html>
    <script langage ="javascript">top.frame['chat'].location = 'chat.php';</script>
    <head></head>
    <body>
        <form method="post" action="">
            <input type="text" name="mgs" value="" />
            <input type="submit" value="Envoyer">
        </form>

    </body>
</html>

<?php
        }
?>
