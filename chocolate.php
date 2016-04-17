<?php 
$W = 3; $TC = 0; $RS = 15;

function wrapperChocolate($RS,$W)
{
	$WC = $TC = $RS;
	do {
		$EC = intval($WC/$W);
		$EW = intval($WC%$W);
		$WC = $EC+$EW;
		$TC = $TC + $EC;
	} while (($EC+$EW)>=$W);
	return $TC;
}

echo wrapperChocolate($RS,$W);
?>