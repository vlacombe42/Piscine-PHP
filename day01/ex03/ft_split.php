#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$test = explode(' ', $str); 
		$tab = array_filter($test);
		sort($tab);
		print_r($tab);
	}
?>
