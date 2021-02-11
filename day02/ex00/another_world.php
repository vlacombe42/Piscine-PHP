#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$regex = preg_replace('/[ \t]{1,}/', ' ', trim($argv[1]));
	echo $regex;
	echo "\n";
}
?>
