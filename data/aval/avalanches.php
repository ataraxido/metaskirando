<?php
	function updateMF() {
		$token='__Wj7dVSTjV9YGu1guveLyDq0g7S7TfTjaHBTPTpO0kj8__';
		$buf=[];

		for ($i=1; $i<75; ++$i)
		{
			$textall=file_get_contents("https://rwg.meteofrance.com/internet2018client/2.0/snow?massif=$i&token=$token");
			$obj = json_decode($textall, true);
			$massif = $obj['properties']['massif_name'];
			if($massif != '')
			{
				$riskmax = $obj['properties']['massif_avalanche_risk']['avalanche_risk_max'];
				$nmin_nord = $obj['properties']['total_snow_per_exposition'][0]['snow_limit'];
				$nmin_sud = $obj['properties']['total_snow_per_exposition'][1]['snow_limit'];
				$textall = "$massif|$riskmax|$nmin_nord|$nmin_sud|$i\n";
				$buf[]=$textall;
			}
			if ($i==23)$i=39;// sauter à la corse
			if ($i==41)$i=63;// sauter aux pyrenees
		}

		file_put_contents(__DIR__ . "/donnees.txt", implode($buf));

		return $buf;
	}

	$fichier = __DIR__ . '/donnees.txt';
	$lastM = (int) filemtime($fichier);
	$now = time();
	$hour = date('G');

	if ($lastM == 0 || ($now - $lastM >= 3600 && ($hour < 12 || $hour >= 16))) {
		$lignes = updateMF();
		$updateTime = $now;
	}
	else {
		$lignes = file($fichier);
		$updateTime = $lastM;
	}

	echo "<p style='text-align:right;font-style:italic;font-size:0.7em'>Mise à jour du ". date('l j F Y à G:i:s', $updateTime)."</p>";
	echo '<div class="x2x"><div class="tab">';
	echo '<table class="nivo">';
	echo '<tr><th>Alpes</th><th>Risque</th><th>Nord</th><th>Sud</th></tr>';

	if (count($lignes) == 34) {
		$cIndex = -1;
		$pIndex = 23;
	}
	else {
		$cIndex = 23;
		$pIndex = 25;
	}
 
	foreach($lignes as $ligne_num => $ligne) {
		$array = explode('|', $ligne);

		$ind = $array[4];

		if ($ind == 71) {
			continue;
		}

		$array[1]=str_replace('-1','nc',$array[1]);
		$array[2]=str_replace('-1','Sec',$array[2]);
		$array[3]=str_replace('-1','Sec',$array[3]);

		if ($ligne_num == $cIndex){
			echo '</table></div><div class="tab2"><table class="nivo">';
			echo '<tr><th>Corse</th><th>Risque</th><th>Nord</th><th>Sud</th></tr>';
		}
		elseif($ligne_num == $pIndex){
			echo '</table><table class="nivo">';
			echo '<tr><th>Pyrénées</th><th>Risque</th><th>Nord</th><th>Sud</th></tr>';
		}

		switch($array[1]) {
			case '1' : $color='bgcolor="#58FA58"';
				break;
			case '2' : $color='bgcolor="#F7FE2E"';
				break;
			case '3' : $color='bgcolor="#FF8000"';
				break;
			case '4' : $color='bgcolor="#FF0000"';
				break;
			case '5' : $color='bgcolor="#610B0B"';
				break;
			default : $color='';
		}
		
		echo '<tr>';
		
		$nurlbra = "data/aval/showbra.php?bra=" . $ind;
		echo '<td><a target="bra" href="'.$nurlbra.'">'. $array[0] .'</a>';
		echo '</td>';
		echo '<td align="center" '.$color.'><b>'. $array[1] .'</b></td>';
		echo '<td align="center">'.$array[2].'</td>';
		echo '<td align="center">'.$array[3].'</td>';
		echo '</tr>';
	}
	echo '</table></div></div>';
?>
