<?php /*
    Copyright (C) Nathanael Schaeffer

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once('./settings.inc.php');

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Meta-Skirando : Nivoses et Météo dans les Alpes.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="description" content="Le moteur de recherche du Ski de Rando. Les nivoses de météo france et les bulletins d'avalanche. Prévisions météo montagne dans les Alpes" />
<meta name="keywords" content="ski de rando, ski alpinisme, ski extrême, pente raide, alpes, pyrénées, neige, météo" />
<link rel="canonical" href="http://metaskirando.camptocamp.org/Nivo.php" />
</head>
<body>

<?php include 'menu.inc'; ?>

<h1>Nivologie et précautions</h1>

<p><b>En ski de rando, on s'expose à des risques.</b> Une bonne expérience de la montagne, de la neige et un équipement spécial (Arva/Pelle/Sonde) sont nécessaires pour évoluer avec un minimum de sécurité.
Consultez les conseils pratiques et le petit traité de nivologie de l'<a target="_meteo" href="http://www.anena.org/">Anena</a>.</p>
<p>Le site camptocamp.org a regroupé beaucoup d'infos sur la neige et les avalanches, en particulier des <a target="_meteo"  href="http://www.camptocamp.org/articles/107439/fr/neige-et-avalanches-les-ressources-du-net">témoignages d'accidents</a>.<br>
N'hésitez pas à sortir avec des organismes spécialisés (comme le CAF), qui vous formeront à être autonomes.<br>
Consulter aussi la base de donnée des avalanches et observations du manteau sur <a target="dataval" href="http://www.data-avalanche.org/now">le site www.data-avalanche.org</a> ou <a target="_ava" href="data/aval/latestaval.php">le Feed des dernières avalanches</a> déclarées </p>

<h1><a name="meteo"></a>Prévisions et Observations</h1>

<ul>
<li>Prévisions météo : <a target="_meteo"  href="https://www.meteoalpes.fr/bulletin/alpes-du-nord/">MétéoAlpes</a>, <a target="_meteo"  href="http://mto38.free.fr/">Caplain</a>, <a target="_meteo"  href="http://www.meteo-villes.com/">Meteo-villes</a>, <a target="_meteo"  href="https://chamonix-meteo.com/">Chamonix</a>, et <a target="_meteo"  href="https://meteofrance.com/meteo-montagne">Meteo France</a>.</li>
<li>Analyse multimodel sur <a target="_meteo"  href="https://www.meteoblue.com/fr/meteo/prevision/multimodel">meteoblue</a>.</li>
<li>Observations Météo en temps réel : <a target="_meteo"  href="http://www.meteociel.fr/">Météociel</a> et <a target="_meteo"  href="http://www.infoclimat.fr/accueil/">infoclimat</a>.
</li>
<li><a target="_ava" href="data/aval/latestaval.php">Feed des dernières avalanches</a> déclarées dans data-avalanches.org</li>
</ul>
<h1>Risque &amp; Bera hors France</h1>
<p>Pour la <b>Suisse</b>, consultez le <a target="_meteo"  href="https://www.slf.ch/fr/bulletin-davalanches-et-situation-nivologique.html#dangeravalanche">bulletin d'avalanches du SLF</a>. 
<br/>
<p>Pour l'<b>Italie</b>, consultez le <a target="_meteo"  href="https://bollettini.aineva.it/bulletin/latest">bulletin d'avalanches de l'AINEVA</a>. 
<br/>
Coté sud des Pyrénées, pour <b>l'Andorre</b> consultez le <a target="_meteo"  href="https://www.meteo.ad/fr/etatneige">bulletin d'avalanches d'Andorre</a>, 
<br/>
pour le <b>Val d'Aran (ES)</b> consultez le <a target="_meteo"  href="https://fr.lauegi.report/bulletin/latest">bulletin d'avalanches du CG val d'aran</a> 
<br/>
 pour la <b>Catalogne</b> consultez le <a target="_meteo"  href="https://bpa.icgc.cat/">bulletin d'avalanches de l'ICGC (en)</a>,
 <br/>
 et pour le reste du <b>sud des pyrenées</b> <a target="_meteo"  href="https://www.aemet.es/es/eltiempo/prediccion/montana/boletin_peligro_aludes">bulletin d'avalanches de l'EAMET</a></p>

<p>Tous les bulletins sur <b>l'Europe</b> à partir de <a target="_meteo"  href="https://www.avalanches.org/">Avalanches.org</a></p>
<h1>Risque &amp; Bera Météo France</h1>
	<p><i>Le tableau ci-dessous est un résumé du risque avalanche publié par Meteo France pour chaque massif. Le résumé est collecté par Metaskirando à intervalle régulier. Visitez <a target="_meteo"  href="https://meteofrance.com/meteo-montagne">le site de Meteo France</a> pour des informations plus fraîches.</i></p>
	
<?php include './data/aval/avalanches.php'; ?>

<h1><a name="nivo"></a>Stations automatiques</h1>

Les stations automatiques de Météo France sont disséminées dans les montagnes et donnent de précieuses informations sur les chutes de neige, les températures et le vent, en différents endroits :
<ul>
<li><b>Autour de Grenoble</b> : <a href="#Bel">Belledonne</a>, <a href="#Ver">Vercors</a>, <a href="#Cha">Chartreuse</a>, <a href="#GdR">Grandes-Rousses</a></li>
<li><b>Autour de Chamonix</b> : <a href="#MtB">Mont-Blanc</a>, <a href="#Aig">Aiguilles Rouges</a>
<li><b>Autour de La Grave</b> : <a href="#Ecr">Ecrins</a>, <a href="#Tha">Thabor / Galibier</a></li>
<li><b>Alpes du Nord</b> : <a href="#Chb">Chablais</a>, <a href="#Ara">Aravis</a>, <a href="#Bau">Bauges</a>, <a href="#Bea">Beaufortain</a>, <a href="#Van">Vanoise</a>, <a href="#Mau">Haute-Maurienne</a>, <a href="#Tar">Haute-Tarentaise</a>
<li><b>Alpes du Sud</b> : <a href="#Ech">Champsaur</a>, <a href="#Que">Queyras</a>, <a href="#Par">Parpaillon</a>, <a href="#Uba">Ubaye</a>, <a href="#Mer">Mercantour</a></li>
<li><b>Auvergne</b> : <a href="#Frz">Forez</a>, <a href="#Snc">Sancy</a>, <a href="#Cnt">Cantal</a></li>
<li><b>Grand-Est</b> : <a href="#Jur">Jura</a>, <a href="#Vge">Vosges</a>
<li><b>Pyrénées</b> : <a href="#PyE">Orientales</a>, <a href="#PyA">Ariège</a>, <a href="#PyW">Occidentales</a></li>
<li><b>Corse</b> : <a href="#Cor">Cinto-Rotondo</a></li>
</ul>

<?php
  function getNivoseLink($tag, $full = false) {
  	$link = 'https://rwg.meteofrance.com/internet2018client/2.0/files/mountain/observations/';
  	$link .= strtoupper($tag);
  	$link .= $full ? '' : 'S';
  	$link .= '.gif';

  	return $link;
  }
?>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Belledonne</b>, Chamrousse
			(<a name="Bel" href="<?php echo getNivoseLink('CHAMR', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('CHAMR'); ?>"><img src="<?php echo getNivoseLink('CHAMR'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Belledonne</b>, sur le Plat du Pin, en montant vers le Pic de la Belle Etoile
			(<a name="Pin" href="<?php echo getNivoseLink('AIGLE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('AIGLE'); ?>"><img src="<?php echo getNivoseLink('AIGLE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Vercors</b>, Villard-de-Lans
			(<a name="Ver" href="<?php echo getNivoseLink('VILLA', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('VILLA'); ?>"><img src="<?php echo getNivoseLink('VILLA'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Vercors</b>, commune de Le Gua (à côté du couloir des Sultanes)
			(<a name="Gua" href="<?php echo getNivoseLink('LEGUA', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('LEGUA'); ?>"><img src="<?php echo getNivoseLink('LEGUA'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Chartreuse</b>, commune de St-Hilaire du Touvet
			(<a name="Cha" href="<?php echo getNivoseLink('STHIL', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('STHIL'); ?>"><img src="<?php echo getNivoseLink('STHIL'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Chartreuse</b>, Centre d'Etude de la Neige (Col de Porte)  
			(<a name="Cha2" href="<?php echo getNivoseLink('COLPO', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('COLPO'); ?>"><img src="<?php echo getNivoseLink('COLPO'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Grandes-Rousses</b>, Alpe-d'Huez
			(<a name="GdR" href="<?php echo getNivoseLink('DHUEZ', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('DHUEZ'); ?>"><img src="<?php echo getNivoseLink('DHUEZ'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Mont-Blanc</b>, commune de Chamonix
			(<a name="MtB" href="<?php echo getNivoseLink('CHAMO', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('CHAMO'); ?>"><img src="<?php echo getNivoseLink('CHAMO'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Mont-Blanc</b>, au dessus du refuge du Couvercle
			(<a  href="<?php echo getNivoseLink('COUVE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('COUVE'); ?>"><img src="<?php echo getNivoseLink('COUVE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Mont-Blanc</b>, lieu-dit Le Tour
			(<a href="<?php echo getNivoseLink('LTOUR', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('LTOUR'); ?>"><img src="<?php echo getNivoseLink('LTOUR'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Aiguilles Rouges</b>, en face du Mont Blanc
			(<a name="Aig" href="<?php echo getNivoseLink('AIGRG', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('AIGRG'); ?>"><img src="<?php echo getNivoseLink('AIGRG'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Meije</b>, en rive droite du glacier du Vallon
			(<a name="Ecr" href="<?php echo getNivoseLink('MEIJE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('MEIJE'); ?>"><img src="<?php echo getNivoseLink('MEIJE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Ecrins</b>, sur la morraine du glacier de Bonnepierre
			(<a href="<?php echo getNivoseLink('ECRIN', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ECRIN'); ?>"><img src="<?php echo getNivoseLink('ECRIN'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Thabor</b>, Camp des Rochilles
			(<a name="Tha" href="<?php echo getNivoseLink('ROCHI', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ROCHI'); ?>"><img src="<?php echo getNivoseLink('ROCHI'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Galibier</b>, vallon de Roche Noire (Versant Sud des Trois Evêchés)
			(<a name="Gal" href="<?php echo getNivoseLink('GALIB', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('GALIB'); ?>"><img src="<?php echo getNivoseLink('GALIB'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Chablais</b>, le Pleney
			(<a name="Chb" href="<?php echo getNivoseLink('PLENE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PLENE'); ?>"><img src="<?php echo getNivoseLink('PLENE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Aravis</b>, commune du Grand-Bornand
			(<a name="Ara" href="<?php echo getNivoseLink('GDBOR', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('GDBOR'); ?>"><img src="<?php echo getNivoseLink('GDBOR'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Bauges</b>, plan de la Limace
			(<a name="Bau" href="<?php echo getNivoseLink('ALLAN', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ALLAN'); ?>"><img src="<?php echo getNivoseLink('ALLAN'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Beaufortain</b>, Cote d'Aime, au lieu-dit de la Portette
			(<a name="Bea" href="<?php echo getNivoseLink('PAREI', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PAREI'); ?>"><img src="<?php echo getNivoseLink('PAREI'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Beaufortain</b>, col des Saisies
			(<a name="Sai" href="<?php echo getNivoseLink('SAISI', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('SAISI'); ?>"><img src="<?php echo getNivoseLink('SAISI'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Vanoise</b>, La Plagne
			(<a name="Van" href="<?php echo getNivoseLink('BELLE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('BELLE'); ?>"><img src="<?php echo getNivoseLink('BELLE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haute Tarentaise</b>, lac du Chevril
			(<a name="Tar" href="<?php echo getNivoseLink('CHEVR', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('CHEVR'); ?>"><img src="<?php echo getNivoseLink('CHEVR'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haute Tarentaise</b>, Val d'Isère
			(<a name="Val" href="<?php echo getNivoseLink('ISERE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ISERE'); ?>"><img src="<?php echo getNivoseLink('ISERE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haute-Maurienne</b>, Bonneval-sur-Arc
			(<a name="Mau" href="<?php echo getNivoseLink('BONNE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('BONNE'); ?>"><img src="<?php echo getNivoseLink('BONNE'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Champsaur</b>, Orcières
			(<a name="Ech" href="<?php echo getNivoseLink('ORCIE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ORCIE'); ?>"><img src="<?php echo getNivoseLink('ORCIE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Queyras</b>, col Agnel
			(<a name="Que" href="<?php echo getNivoseLink('AGNEL', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('AGNEL'); ?>"><img src="<?php echo getNivoseLink('AGNEL'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Parpaillon</b>, lieu-dit Les Montagnettes, près du col de Parpaillon
			(<a name="Par" href="<?php echo getNivoseLink('PARPA', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PARPA'); ?>"><img src="<?php echo getNivoseLink('PARPA'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Ubaye</b>, Restefond
			(<a name="Uba" href="<?php echo getNivoseLink('RESTE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('RESTE'); ?>"><img src="<?php echo getNivoseLink('RESTE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Mercantour</b>, lac des Millefonts
			(<a name="Mer" href="<?php echo getNivoseLink('MILLE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('MILLE'); ?>"><img src="<?php echo getNivoseLink('MILLE'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Forez</b>, Saint-Anthème
			(<a name="Frz" href="<?php echo getNivoseLink('ANTHE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ANTHE'); ?>"><img src="<?php echo getNivoseLink('ANTHE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Sancy</b>, Super-Besse
			(<a name="Snc" href="<?php echo getNivoseLink('BESSE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('BESSE'); ?>"><img src="<?php echo getNivoseLink('BESSE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Cantal</b>, Prat-de-Bouc
			(<a name="Cnt" href="<?php echo getNivoseLink('PBOUC', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PBOUC'); ?>"><img src="<?php echo getNivoseLink('PBOUC'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Haut-Jura</b>, La Pesse
			(<a name="Jur" href="<?php echo getNivoseLink('PESSE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PESSE'); ?>"><img src="<?php echo getNivoseLink('PESSE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haut-Doubs</b>, Rochejean
			(<a name="Snc" href="<?php echo getNivoseLink('ROCHE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ROCHE'); ?>"><img src="<?php echo getNivoseLink('ROCHE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Vosges</b>, Markstein
			(<a name="Vge" href="<?php echo getNivoseLink('MARKS', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('MARKS'); ?>"><img src="<?php echo getNivoseLink('MARKS'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Pyrénées Orientales</b>, Canigou
			(<a name="PyE" href="<?php echo getNivoseLink('CANIG',true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('CANIG'); ?>"><img src="<?php echo getNivoseLink('CANIG'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Pyrénées Orientales</b>, Puigmal
			(<a name="Puig" href="<?php echo getNivoseLink('PUIGN', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PUIGN'); ?>"><img src="<?php echo getNivoseLink('PUIGN'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Pyrénées Orientales</b>, Targasonne
			(<a name="Trg" href="<?php echo getNivoseLink('TARGA', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('TARGA'); ?>"><img src="<?php echo getNivoseLink('TARGA'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Ariège</b>, Hospitalet 
			(<a name="PyA" href="<?php echo getNivoseLink('HOSPI', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('HOSPI'); ?>"><img src="<?php echo getNivoseLink('HOSPI'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Ariège</b>, Aston
			(<a name="Ast" href="<?php echo getNivoseLink('ASTON', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('ASTON'); ?>"><img src="<?php echo getNivoseLink('ASTON'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Ariège</b>, Couserans (Port d'Aula)
			(<a name="Paul" href="<?php echo getNivoseLink('PAULA', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('PAULA'); ?>"><img src="<?php echo getNivoseLink('PAULA'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haute Pyrénées</b>, lac d'Ardiden
			(<a name="PyW" href="<?php echo getNivoseLink('LARDI', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('LARDI'); ?>"><img src="<?php echo getNivoseLink('LARDI'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haute Pyrénées</b>, Loudervielle
			(<a name="Lou" href="<?php echo getNivoseLink('LOUDE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('LOUDE'); ?>"><img src="<?php echo getNivoseLink('LOUDE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Haute Pyrénées</b>, tunnel de Bielsa (Aiguillettes)
			(<a name="Bil" href="<?php echo getNivoseLink('AIGTE', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('AIGTE'); ?>"><img src="<?php echo getNivoseLink('AIGTE'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Pyrénées Atlantiques</b>, Aspe-Ossau (Soum Couy).
			(<a name="Soum" href="<?php echo getNivoseLink('SOUMC', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('SOUMC'); ?>"><img src="<?php echo getNivoseLink('SOUMC'); ?>"></a>
		</div>
	</div>
</div>
<div class="nivs">
	<div class="nivb">
		<div class="nivt">
			<b>Corse (Cinto-Rotondo)</b>, Sponde 
			(<a name="Cor" href="<?php echo getNivoseLink('SPOND', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('SPOND'); ?>"><img src="<?php echo getNivoseLink('SPOND'); ?>"></a>
		</div>
	</div>
	<div class="nivb">
		<div class="nivt">
			<b>Corse (Cinto-Rotondo)</b>, Maniccia 
			(<a name="Mani" href="<?php echo getNivoseLink('MANIC', true); ?>" target="_blank">saison</a>)
		</div>
		<div class="nivi">
			<a href="<?php echo getNivoseLink('MANIC'); ?>"><img src="<?php echo getNivoseLink('MANIC'); ?>"></a>
		</div>
	</div>
</div>

<?php include 'bottom.inc'; ?>

</body></html>