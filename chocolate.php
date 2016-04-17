<?php 
$W = 3; $TC = 0; $RS = 15;

function wrapperChocolate($RS,$W)//function for calculating extra choclates we get against extra wrapper
{
	$WC = $TC = $RS;
	do {
		$EC = intval($WC/$W); //extra choc agaist wrapper
		$EW = intval($WC%$W);//extra wrapper
		$WC = $EC+$EW;//total remaining wrapper
		$TC = $TC + $EC; //total choc
	} while (($EC+$EW)>=$W);
	return $TC;
}

echo wrapperChocolate($RS,$W);
?>
