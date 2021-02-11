#!/usr/bin/PHP
<?php
	date_default_timezone_set('Europe/Paris');
	$result = array(
		1 => "janvier",
		2 => "fevrier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "aout",
		8 => "août",
		9 => "septembre",
		10 => "octobre", 
		11 => "novembre",
		12 => "decembre",
		12 => "décembre");

	if ($argc == 2)
	{
		preg_match('/^((?i)l(?-i)undi|(?i)m(?-i)ardi|(?i)m(?-i)ercredi|(?i)j(?-i)eudi|(?i)v(?-i)endredi|(?i)s(?-i)amedi|(?i)d(?-i)imanche)\s(\d?\d)\s((?i)j(?-i)anvier|(?i)f(?-i)evrier|(?i)f(?-i)évrier|(?i)m(?-i)ars|(?i)a(?-i)vril|(?i)m(?-i)ai|(?i)j(?-i)uin|(?i)j(?-i)uillet|(?i)a(?-i)out|(?i)a(?-i)oût|(?i)s(?-i)eptembre|(?i)o(?-i)ctobre|(?i)n(?-i)ovembre|(?i)d(?-i)ecembre|(?i)d(?-i)écembre)\s(\d\d\d\d)\s(\d\d):(\d\d):(\d\d)$/', $argv[1], $tab);

		if($tab[0]){
	
			$month = array_search($tab[3], $result);
			$day = $tab[2];
			$hour = $tab[5];
			$minute = $tab[6];
			$second = $tab[7];
			$year = $tab [4];
			$timewatch = mktime ($hour, $minute, $second, $month , $day, $year);
			echo $timewatch."\n";
		}
		else{
			echo "wrong format"."\n";
		}
	}
?>
