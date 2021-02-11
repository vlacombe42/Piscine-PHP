#!/usr/bin/php
<?PHP
function ft_is_sort($tab)
{
	$oldtab = $tab;
	sort($tab); 
	return($oldtab == $tab);
}
?>
