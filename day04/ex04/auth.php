<?PHP
function auth ($login, $passwd)
{
    $modifie = FALSE;
    $v = hash('whirlpool', $passwd);
    $array = file_get_contents("../htdocs/private/passwd"); 
    $TBE = unserialize($array);   
    foreach ($TBE as $elem)
    {
            if ($elem['login'] == $login && $v == $elem ['passwd']);
            {
                $modifie = TRUE;
            }            
    }   
    if($modifie == FALSE) 
    {
        return (FALSE);
    }   
    else
    {
        return (TRUE);
    }
}
?>
