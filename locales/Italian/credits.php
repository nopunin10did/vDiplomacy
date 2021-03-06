<?php
/*
    Copyright (C) 2004-2010 Kestas J. Kuliukas

	This file is part of webDiplomacy.

    webDiplomacy is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    webDiplomacy is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with webDiplomacy.  If not, see <http://www.gnu.org/licenses/>.
 */

defined('IN_CODE') or die('This script can not be run by itself.');

/**
 * @package Base
 * @subpackage Static
 */
?>
<div>
<?php
$credits = array(
	array('
		<a href="http://www.wizards.com/default.asp?x=ah/prod/diplomacy">Avalon Hill</a>
	','
		Diplomacy the board game<br />
		If you like webDiplomacy get the board game
	')

	,array('<a href="http://kestas.kuliukas.com/">Kestas Kuliukas</a>
	','Creator &amp; developer')

	,array('Unknown
	','Tank + Battleship icons<br />
	Released under the <a href="http://www.opensource.org/licenses/gpl-license.php" class="light">GNU Public License</a>')

	,array('Unknown
	','Fullscreen diplomacy map image')

	,array('Algis Kuliukas
	','SQL guru')

	,array('<a href="https://sourceforge.net/sendmessage.php?touser=1295433">paranoidjpn</a>
	','Japanese translation, testing, UTF-8 support, developing the small PNG map')

	,array('Bitstream
	','Font used in the fullscreen map.<br />
	Released under the <a href="contrib/BVFL.txt" class="light">Bitsream Vera Fonts License</a>')

	,array('<a href="http://www.xcelco.on.ca/~ravgames/dipmaps/">Rob Addison</a>
	','Small diplomacy map image')

	,array('mrlachette, Magilla, arning
	','Pre-0.72 debugging + testing')

	,array('The regulars, the donators
	','Making suggestions, reporting bugs, helping people in the forums, donating')

	,array('Lucas Kruijswijk
	','Authoring the DATC adjudicator tests')

	,array('figlesquidge
	','SVG map developer, coast fix patch')

	,array('<a href="http://sourceforge.net/users/fallingrock/">Chris Hughes</a>
	','webDiplomacy Facebook dev, variable game phase lengths, gamelistings pagination')

	,array('<a href="http://www.webdiplomacy.net/profile.php?userID=3013">thewonderllama</a>
	','Unit placement orders fix, designing and running the GFDT tournaments')

	,array('Chrispminis, figlesquidge, dangermouse, thewonderllama, TheGhostMaker
	','Tireless webdiplomacy.net moderators, wrote the list of rules')

	,array('TheGhostMaker
	','Designing and running the Ghost-rating system, helping with the GFDT, home page mock-up')

	,array('jayp
	','Many new features for 0.91, regarding extra game settings. Multi-variant code developer')

	,array('Carey Jensen (gilgatex)
	','Variant developer, goondip.com developer')

	,array('Oliver Auth (Sleepcap)
	','Variant creator'),

	array('
		The <a href="http://www.prototypejs.org/">Prototype</a> JavaScript framework team
	','
		Our JavaScript utility library
	')
	);

	$leftColumn=array();
	$rightColumn=array();

	$half=ceil(count($credits)/2);
	for($i=0;$i<$half;$i++)
	{
		$leftColumn[]=$credits[$i];
		if ( isset($credits[$i+$half]) )
			$rightColumn[]=$credits[$i+$half];
	}

	print '<div class="rightHalf"><ul class="formlist">';
	foreach($rightColumn as $credit)
		print '<li class="formlisttitle">'.$credit[0].'</li><li class="formlistdesc">'.$credit[1].'</li>';
	print '</ul></div>';

	print '<div class="leftHalf"><ul class="formlist">';
	foreach($leftColumn as $credit)
		print '<li class="formlisttitle">'.$credit[0].'</li><li class="formlistdesc">'.$credit[1].'</li>';
	print '</ul></div>';

?>
<div style="clear:both"></div>
</div>