#!/usr/bin/php
<?PHP
while (1)
{
	echo "Entrez un nombre:";
	$line = trim (fgets(STDIN));
	if (feof(STDIN))
	{
		echo "\n";
		exit();
	}
	if (is_numeric($line))
	{
		if($line % 2 == 0)
			echo "Le chiffre ".$line." est Pair\n";
		else 
			echo "Le chiffre ".$line." est Impair\n";
	}
	else
		echo"'".$line."'"." n'est pas un chiffre\n";
}
?>
