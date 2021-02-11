#!/usr/bin/PHP
<?PHP
function special_comp($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
    if ($a == $b)
		return 0;
	$i = 0;
	while ($a[$i] && $b[$i])
 	{
		if ($a[$i] != $b[$i])
		{
			if (is_numeric($a[$i]) && is_numeric($b[$i]))
				return ($a[$i] - $b[$i]);
			if (ctype_alpha($a[$i] && ctype_alpha($b[$i])))
				return (strcmp($a[$i],$b[$i]));
			if (ctype_alpha($a[$i]))
			   return -1;
			if (ctype_alpha($b[$i]))
			   return 1;
			if (ctype_digit($a[$i]))
			   return -1;
			if (ctype_digit($b[$i]))
			   return 1;
			return (ord($a[$i] - ord($b[$i])));
		}
		$i++;
	}
	return 0;
}
$result = array();
  foreach($argv as $i=>$elem)
  {
	   if ($i != '0')
	   {
	   $line = preg_replace("/\s+/"," ",$elem);
	   $tab = explode(" ",$line);
	   $result = array_merge($tab,$result);
	   }
  }
	   usort($result, "special_comp");
	   foreach($result as $elem)
	   echo $elem."\n";
?>
