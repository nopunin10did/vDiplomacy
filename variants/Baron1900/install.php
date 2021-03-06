<?php
// This is the file that installs the map data for the 1900 variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
    array('Adriatic Sea {Adr}', 'Sea', 'No', 0, 793, 893, 396, 446),
    array('Aegean Sea {Aeg}', 'Sea', 'No', 0, 1025, 1021, 512, 510),
    array('Algeria {Alg}', 'Coast', 'Yes', 3, 536, 1101, 268, 550),
    array('Alsace {Als}', 'Land', 'No', 4, 650, 723, 325, 362),
    array('Apulia {Apu}', 'Coast', 'No', 5, 826, 955, 413, 478),
    array('Arabia {Ara}', 'Land', 'No', 0, 1390, 1203, 695, 602),
    array('Armenia {Arm}', 'Coast', 'No', 7, 1318, 921, 659, 460),
    array('Baltic Sea {Bal}', 'Sea', 'No', 0, 862, 505, 431, 252),
    array('Barents Sea {Bar}', 'Sea', 'No', 0, 1088, 31, 544, 16),
    array('Belgium {Bel}', 'Coast', 'Yes', 0, 591, 651, 296, 326),
    array('Black Sea {Bla}', 'Sea', 'No', 0, 1173, 853, 586, 426),
    array('Bohemia {Boh}', 'Land', 'No', 1, 781, 691, 390, 346),
    array('Bosnia {Bos}', 'Coast', 'No', 1, 861, 885, 430, 442),
    array('Bulgaria {Bul}', 'Coast', 'Yes', 0, 1046, 893, 523, 446),
    array('Burgundy {Bur}', 'Land', 'No', 3, 606, 740, 303, 370),
    array('Clyde {Cly}', 'Coast', 'No', 2, 500, 420, 250, 210),
    array('Cyrenaica {Cyr}', 'Coast', 'No', 0, 964, 1257, 482, 628),
    array('Denmark {Den}', 'Coast', 'Yes', 0, 696, 506, 348, 253),
    array('Eastern Mediterranean Sea {Eas}', 'Sea', 'No', 0, 1192, 1136, 596, 568),
    array('Egypt {Egy}', 'Coast', 'Yes', 2, 1241, 1272, 620, 636),
    array('English Channel {Eng}', 'Sea', 'No', 0, 466, 652, 233, 326),
    array('Finland {Fin}', 'Coast', 'No', 6, 945, 295, 472, 148),
    array('Galicia {Gal}', 'Land', 'No', 1, 986, 700, 493, 350),
    array('Gascony {Gas}', 'Coast', 'No', 3, 498, 794, 249, 397),
    array('Gibraltar {Gib}', 'Strait', 'No', 2, 311, 1019, 156, 510),
    array('Greece {Gre}', 'Coast', 'Yes', 0, 953, 1013, 476, 506),
    array('Gulf of Bothnia {GBo}', 'Sea', 'No', 0, 888, 410, 444, 205),
    array('Gulf of Lyon {GLy}', 'Sea', 'No', 0, 579, 902, 290, 451),
    array('Hejaz {Hej}', 'Coast', 'No', 7, 1389, 1316, 694, 658),
    array('Helgoland Bight {Hel}', 'Sea', 'No', 0, 665, 554, 332, 277),
    array('Iceland {Ice}', 'Coast', 'No', 0, 434, 144, 217, 72),
    array('Ionian Sea {Ion}', 'Sea', 'No', 0, 880, 1118, 440, 559),
    array('Ireland {Ire}', 'Coast', 'No', 2, 415, 534, 208, 267),
    array('Irish Sea {Iri}', 'Sea', 'No', 0, 409, 589, 204, 294),
    array('Konya {Kon}', 'Coast', 'No', 7, 1197, 1028, 598, 514),
    array('Livonia {Lvo}', 'Coast', 'No', 6, 954, 498, 477, 249),
    array('Macedonia {Mac}', 'Coast', 'No', 7, 927, 928, 464, 464),
    array('Macedonia {Mac} (East Coast)', 'Coast', 'No', 7, 991, 953, 496, 476),
    array('Macedonia {Mac} (West Coast)', 'Coast', 'No', 7, 919, 971, 460, 486),
    array('Mid-Atlantic Ocean {Mid}', 'Sea', 'No', 0, 80, 764, 40, 382),
    array('Morocco {Mor}', 'Coast', 'Yes', 0, 282, 1144, 141, 572),
    array('Netherlands {Net}', 'Coast', 'Yes', 0, 641, 593, 320, 296),
    array('North Atlantic Ocean {NAt}', 'Sea', 'No', 0, 258, 289, 129, 144),
    array('North Sea {Nth}', 'Sea', 'No', 0, 601, 476, 300, 238),
    array('Norwegian Sea {Nwg}', 'Sea', 'No', 0, 625, 166, 312, 83),
    array('Norway {Nwy}', 'Coast', 'Yes', 0, 722, 354, 361, 177),
    array('Palestine {Pal}', 'Coast', 'No', 7, 1326, 1168, 663, 584),
    array('Picardy {Pic}', 'Coast', 'No', 3, 538, 684, 269, 342),
    array('Piedmont {Pie}', 'Coast', 'No', 5, 646, 837, 323, 418),
    array('Portugal {Por}', 'Coast', 'Yes', 0, 310, 866, 155, 433),
    array('Prussia {Pru}', 'Coast', 'No', 4, 889, 565, 444, 282),
    array('Rumania {Rum}', 'Coast', 'Yes', 0, 1063, 837, 532, 418),
    array('Serbia {Ser}', 'Land', 'Yes', 0, 935, 866, 468, 433),
    array('Siberia {Sib}', 'Land', 'No', 6, 1361, 344, 680, 172),
    array('Silesia {Sil}', 'Land', 'No', 4, 833, 655, 416, 328),
    array('Skagerrak {Ska}', 'Sea', 'No', 0, 731, 464, 366, 232),
    array('Southern Algeria {Sou}', 'Land', 'No', 3, 422, 1267, 211, 634),
    array('Spain {Spa}', 'Coast', 'Yes', 0, 419, 893, 210, 446),
    array('Spain {Spa} (East Coast)', 'Coast', 'No', 0, 439, 949, 220, 474),
    array('Spain {Spa} (North Coast)', 'Coast', 'No', 0, 364, 833, 182, 416),
    array('Spain {Spa} (West Coast)', 'Coast', 'No', 0, 313, 977, 156, 488),
    array('Sweden {Swe}', 'Coast', 'Yes', 0, 804, 385, 402, 192),
    array('Switzerland {Swi}', 'Land', 'Yes', 0, 673, 773, 336, 386),
    array('Tripolitania {Trp}', 'Coast', 'Yes', 0, 799, 1261, 400, 630),
    array('Tunisia {Tun}', 'Coast', 'No', 3, 660, 1127, 330, 564),
    array('Tyrolia {Tyr}', 'Land', 'No', 1, 728, 782, 364, 391),
    array('Tyrrhenian Sea {TyS}', 'Sea', 'No', 0, 718, 982, 359, 491),
    array('Ukraine {Ukr}', 'Land', 'No', 6, 1085, 659, 542, 330),
    array('Venetia {Ven}', 'Coast', 'No', 5, 726, 839, 363, 420),
    array('Wales {Wal}', 'Coast', 'No', 2, 477, 564, 238, 282),
    array('Western Mediterranean Sea {Wes}', 'Sea', 'No', 0, 550, 1000, 275, 500),
    array('Yorkshire {Yor}', 'Coast', 'No', 2, 530, 567, 265, 284)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}

unset($territoryRawData);

// Territories Part 2: Eligible build locations

$austriaHungaryFlag =   1 << 1;
$britainFlag =          1 << 2;
$franceFlag =           1 << 3;
$germanyFlag =          1 << 4;
$italyFlag =            1 << 5;
$russiaFlag =           1 << 6;
$turkeyFlag =           1 << 7;

$territoryRawData=array(
    array('Ankara {Ank}', 'Coast', 'Yes', 7, 1203, 917, 602, 458, $turkeyFlag),
    array('Berlin {Ber}', 'Coast', 'Yes', 4, 790, 603, 395, 302, $germanyFlag),
    array('Brest {Bre}', 'Coast', 'Yes', 3, 470, 706, 235, 353, $franceFlag),
    array('Budapest {Bud}', 'Land', 'Yes', 1, 936, 775, 468, 388, $austriaHungaryFlag),
    array('Cologne {Col}', 'Land', 'Yes', 4, 669, 665, 334, 332, $germanyFlag),
    array('Constantinople {Con}', 'Coast', 'Yes', 7, 1122, 986, 561, 493, $turkeyFlag),
    array('Damascus {Dam}', 'Coast', 'Yes', 7, 1333, 1078, 666, 539, $turkeyFlag),
    array('Edinburgh {Edi}', 'Coast', 'Yes', 2, 531, 441, 266, 220, $britainFlag),
    array('Kiel {Kie}', 'Coast', 'Yes', 4, 692, 601, 346, 300, $germanyFlag),
    array('Liverpool {Lvp}', 'Coast', 'Yes', 2, 505, 518, 252, 259, $britainFlag),
    array('London {Lon}', 'Coast', 'Yes', 2, 512, 613, 256, 306, $britainFlag),
    array('Marseilles {Mar}', 'Coast', 'Yes', 3, 599, 837, 300, 418, $franceFlag),
    array('Milan {Mil}', 'Land', 'Yes', 5, 695, 803, 348, 402, $italyFlag),
    array('Moscow {Mos}', 'Land', 'Yes', 6, 1139, 541, 570, 270, $russiaFlag),
    array('Munich {Mun}', 'Land', 'Yes', 4, 731, 713, 366, 356, $germanyFlag),
    array('Naples {Nap}', 'Coast', 'Yes', 5, 840, 1010, 420, 505, $italyFlag),
    array('Paris {Par}', 'Land', 'Yes', 3, 554, 756, 277, 378, $franceFlag),
    array('Rome {Rom}', 'Coast', 'Yes', 5, 709, 885, 354, 442, $italyFlag),
    array('Sevastopol {Sev}', 'Coast', 'Yes', 6, 1200, 749, 600, 374, $russiaFlag),
    array('St. Petersburg {StP}', 'Coast', 'Yes', 6, 1148, 282, 574, 141, $russiaFlag),
    array('St. Petersburg {StP} (North Coast)', 'Coast', 'No', 6, 1056, 132, 528, 66, $russiaFlag),
    array('St. Petersburg {StP} (South Coast)', 'Coast', 'No', 6, 1019, 404, 510, 202, $russiaFlag),
    array('Trieste {Tri}', 'Coast', 'Yes', 1, 804, 825, 402, 412, $austriaHungaryFlag),
    array('Vienna {Vie}', 'Land', 'Yes', 1, 803, 776, 402, 388, $austriaHungaryFlag),
    array('Warsaw {War}', 'Land', 'Yes', 6, 877, 631, 438, 316, $russiaFlag)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy, $buildEligibilityFlags)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy, $buildEligibilityFlags);
}

unset($territoryRawData);

$bordersRawData=array(
    array('Adriatic Sea {Adr}', 'Venetia {Ven}', 'Yes', 'No'),
    array('Adriatic Sea {Adr}', 'Trieste {Tri}', 'Yes', 'No'),
    array('Adriatic Sea {Adr}', 'Bosnia {Bos}', 'Yes', 'No'),
    array('Adriatic Sea {Adr}', 'Macedonia {Mac} (West Coast)', 'Yes', 'No'),
    array('Adriatic Sea {Adr}', 'Ionian Sea {Ion}', 'Yes', 'No'),
    array('Adriatic Sea {Adr}', 'Apulia {Apu}', 'Yes', 'No'),
    array('Aegean Sea {Aeg}', 'Constantinople {Con}', 'Yes', 'No'),
    array('Aegean Sea {Aeg}', 'Konya {Kon}', 'Yes', 'No'),
    array('Aegean Sea {Aeg}', 'Eastern Mediterranean Sea {Eas}', 'Yes', 'No'),
    array('Aegean Sea {Aeg}', 'Ionian Sea {Ion}', 'Yes', 'No'),
    array('Aegean Sea {Aeg}', 'Greece {Gre}', 'Yes', 'No'),
    array('Aegean Sea {Aeg}', 'Macedonia {Mac} (East Coast)', 'Yes', 'No'),
    array('Algeria {Alg}', 'Morocco {Mor}', 'Yes', 'Yes'),
    array('Algeria {Alg}', 'Western Mediterranean Sea {Wes}', 'Yes', 'No'),
    array('Algeria {Alg}', 'Tyrrhenian Sea {TyS}', 'Yes', 'No'),
    array('Algeria {Alg}', 'Tunisia {Tun}', 'Yes', 'Yes'),
    array('Algeria {Alg}', 'Southern Algeria {Sou}', 'No', 'Yes'),
    array('Alsace {Als}', 'Belgium {Bel}', 'No', 'Yes'),
    array('Alsace {Als}', 'Cologne {Col}', 'No', 'Yes'),
    array('Alsace {Als}', 'Munich {Mun}', 'No', 'Yes'),
    array('Alsace {Als}', 'Switzerland {Swi}', 'No', 'Yes'),
    array('Alsace {Als}', 'Burgundy {Bur}', 'No', 'Yes'),
    array('Ankara {Ank}', 'Constantinople {Con}', 'Yes', 'Yes'),
    array('Ankara {Ank}', 'Black Sea {Bla}', 'Yes', 'No'),
    array('Ankara {Ank}', 'Armenia {Arm}', 'Yes', 'Yes'),
    array('Ankara {Ank}', 'Konya {Kon}', 'No', 'Yes'),
    array('Apulia {Apu}', 'Ionian Sea {Ion}', 'Yes', 'No'),
    array('Apulia {Apu}', 'Naples {Nap}', 'Yes', 'Yes'),
    array('Apulia {Apu}', 'Rome {Rom}', 'No', 'Yes'),
    array('Apulia {Apu}', 'Venetia {Ven}', 'Yes', 'Yes'),
    array('Arabia {Ara}', 'Hejaz {Hej}', 'No', 'Yes'),
    array('Arabia {Ara}', 'Palestine {Pal}', 'No', 'Yes'),
    array('Arabia {Ara}', 'Damascus {Dam}', 'No', 'Yes'),
    array('Armenia {Arm}', 'Black Sea {Bla}', 'Yes', 'No'),
    array('Armenia {Arm}', 'Sevastopol {Sev}', 'Yes', 'Yes'),
    array('Armenia {Arm}', 'Damascus {Dam}', 'No', 'Yes'),
    array('Armenia {Arm}', 'Konya {Kon}', 'No', 'Yes'),
    array('Baltic Sea {Bal}', 'Gulf of Bothnia {GBo}', 'Yes', 'No'),
    array('Baltic Sea {Bal}', 'Livonia {Lvo}', 'Yes', 'No'),
    array('Baltic Sea {Bal}', 'Prussia {Pru}', 'Yes', 'No'),
    array('Baltic Sea {Bal}', 'Berlin {Ber}', 'Yes', 'No'),
    array('Baltic Sea {Bal}', 'Kiel {Kie}', 'Yes', 'No'),
    array('Baltic Sea {Bal}', 'Denmark {Den}', 'Yes', 'No'),
    array('Baltic Sea {Bal}', 'Sweden {Swe}', 'Yes', 'No'),
    array('Barents Sea {Bar}', 'St. Petersburg {StP} (North Coast)', 'Yes', 'No'),
    array('Barents Sea {Bar}', 'Norway {Nwy}', 'Yes', 'No'),
    array('Barents Sea {Bar}', 'Norwegian Sea {Nwg}', 'Yes', 'No'),
    array('Belgium {Bel}', 'North Sea {Nth}', 'Yes', 'No'),
    array('Belgium {Bel}', 'Netherlands {Net}', 'Yes', 'Yes'),
    array('Belgium {Bel}', 'Cologne {Col}', 'No', 'Yes'),
    array('Belgium {Bel}', 'Burgundy {Bur}', 'No', 'Yes'),
    array('Belgium {Bel}', 'Picardy {Pic}', 'Yes', 'Yes'),
    array('Belgium {Bel}', 'English Channel {Eng}', 'Yes', 'No'),
    array('Berlin {Ber}', 'Prussia {Pru}', 'Yes', 'Yes'),
    array('Berlin {Ber}', 'Silesia {Sil}', 'No', 'Yes'),
    array('Berlin {Ber}', 'Munich {Mun}', 'No', 'Yes'),
    array('Berlin {Ber}', 'Kiel {Kie}', 'Yes', 'Yes'),
    array('Black Sea {Bla}', 'Constantinople {Con}', 'Yes', 'No'),
    array('Black Sea {Bla}', 'Bulgaria {Bul}', 'Yes', 'No'),
    array('Black Sea {Bla}', 'Rumania {Rum}', 'Yes', 'No'),
    array('Black Sea {Bla}', 'Sevastopol {Sev}', 'Yes', 'No'),
    array('Bohemia {Boh}', 'Silesia {Sil}', 'No', 'Yes'),
    array('Bohemia {Boh}', 'Galicia {Gal}', 'No', 'Yes'),
    array('Bohemia {Boh}', 'Budapest {Bud}', 'No', 'Yes'),
    array('Bohemia {Boh}', 'Vienna {Vie}', 'No', 'Yes'),
    array('Bohemia {Boh}', 'Tyrolia {Tyr}', 'No', 'Yes'),
    array('Bohemia {Boh}', 'Munich {Mun}', 'No', 'Yes'),
    array('Bosnia {Bos}', 'Trieste {Tri}', 'Yes', 'Yes'),
    array('Bosnia {Bos}', 'Serbia {Ser}', 'No', 'Yes'),
    array('Bosnia {Bos}', 'Macedonia {Mac}', 'No', 'Yes'),
    array('Bosnia {Bos}', 'Macedonia {Mac} (West Coast)', 'Yes', 'No'),
    array('Brest {Bre}', 'English Channel {Eng}', 'Yes', 'No'),
    array('Brest {Bre}', 'Picardy {Pic}', 'Yes', 'Yes'),
    array('Brest {Bre}', 'Paris {Par}', 'No', 'Yes'),
    array('Brest {Bre}', 'Gascony {Gas}', 'Yes', 'Yes'),
    array('Brest {Bre}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('Budapest {Bud}', 'Galicia {Gal}', 'No', 'Yes'),
    array('Budapest {Bud}', 'Rumania {Rum}', 'No', 'Yes'),
    array('Budapest {Bud}', 'Serbia {Ser}', 'No', 'Yes'),
    array('Budapest {Bud}', 'Trieste {Tri}', 'No', 'Yes'),
    array('Budapest {Bud}', 'Vienna {Vie}', 'No', 'Yes'),
    array('Bulgaria {Bul}', 'Constantinople {Con}', 'Yes', 'Yes'),
    array('Bulgaria {Bul}', 'Macedonia {Mac}', 'No', 'Yes'),
    array('Bulgaria {Bul}', 'Serbia {Ser}', 'No', 'Yes'),
    array('Bulgaria {Bul}', 'Rumania {Rum}', 'Yes', 'Yes'),
    array('Burgundy {Bur}', 'Switzerland {Swi}', 'No', 'Yes'),
    array('Burgundy {Bur}', 'Marseilles {Mar}', 'No', 'Yes'),
    array('Burgundy {Bur}', 'Gascony {Gas}', 'No', 'Yes'),
    array('Burgundy {Bur}', 'Paris {Par}', 'No', 'Yes'),
    array('Burgundy {Bur}', 'Picardy {Pic}', 'No', 'Yes'),
    array('Clyde {Cly}', 'Norwegian Sea {Nwg}', 'Yes', 'No'),
    array('Clyde {Cly}', 'Edinburgh {Edi}', 'Yes', 'Yes'),
    array('Clyde {Cly}', 'Liverpool {Lvp}', 'Yes', 'Yes'),
    array('Clyde {Cly}', 'Ireland {Ire}', 'Yes', 'Yes'),
    array('Clyde {Cly}', 'North Atlantic Ocean {NAt}', 'Yes', 'No'),
    array('Cologne {Col}', 'Netherlands {Net}', 'No', 'Yes'),
    array('Cologne {Col}', 'Kiel {Kie}', 'No', 'Yes'),
    array('Cologne {Col}', 'Munich {Mun}', 'No', 'Yes'),
    array('Constantinople {Con}', 'Konya {Kon}', 'Yes', 'Yes'),
    array('Constantinople {Con}', 'Macedonia {Mac}', 'No', 'Yes'),
    array('Constantinople {Con}', 'Macedonia {Mac} (East Coast)', 'Yes', 'No'),
    array('Cyrenaica {Cyr}', 'Tripolitania {Trp}', 'Yes', 'Yes'),
    array('Cyrenaica {Cyr}', 'Ionian Sea {Ion}', 'Yes', 'No'),
    array('Cyrenaica {Cyr}', 'Eastern Mediterranean Sea {Eas}', 'Yes', 'No'),
    array('Cyrenaica {Cyr}', 'Egypt {Egy}', 'Yes', 'Yes'),
    array('Damascus {Dam}', 'Palestine {Pal}', 'Yes', 'Yes'),
    array('Damascus {Dam}', 'Eastern Mediterranean Sea {Eas}', 'Yes', 'No'),
    array('Damascus {Dam}', 'Konya {Kon}', 'Yes', 'Yes'),
    array('Denmark {Den}', 'Skagerrak {Ska}', 'Yes', 'No'),
    array('Denmark {Den}', 'Sweden {Swe}', 'Yes', 'Yes'),
    array('Denmark {Den}', 'Kiel {Kie}', 'Yes', 'Yes'),
    array('Denmark {Den}', 'Helgoland Bight {Hel}', 'Yes', 'No'),
    array('Denmark {Den}', 'North Sea {Nth}', 'Yes', 'No'),
    array('Eastern Mediterranean Sea {Eas}', 'Palestine {Pal}', 'Yes', 'No'),
    array('Eastern Mediterranean Sea {Eas}', 'Egypt {Egy}', 'Yes', 'No'),
    array('Eastern Mediterranean Sea {Eas}', 'Ionian Sea {Ion}', 'Yes', 'No'),
    array('Eastern Mediterranean Sea {Eas}', 'Konya {Kon}', 'Yes', 'No'),
    array('Edinburgh {Edi}', 'Norwegian Sea {Nwg}', 'Yes', 'No'),
    array('Edinburgh {Edi}', 'North Sea {Nth}', 'Yes', 'No'),
    array('Edinburgh {Edi}', 'Yorkshire {Yor}', 'Yes', 'Yes'),
    array('Edinburgh {Edi}', 'Liverpool {Lvp}', 'No', 'Yes'),
    array('Egypt {Egy}', 'Palestine {Pal}', 'Yes', 'Yes'),
    array('Egypt {Egy}', 'Hejaz {Hej}', 'Yes', 'Yes'),
    array('Egypt {Egy}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('English Channel {Eng}', 'London {Lon}', 'Yes', 'No'),
    array('English Channel {Eng}', 'North Sea {Nth}', 'Yes', 'No'),
    array('English Channel {Eng}', 'Picardy {Pic}', 'Yes', 'No'),
    array('English Channel {Eng}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('English Channel {Eng}', 'Irish Sea {Iri}', 'Yes', 'No'),
    array('English Channel {Eng}', 'Wales {Wal}', 'Yes', 'No'),
    array('Finland {Fin}', 'Norway {Nwy}', 'No', 'Yes'),
    array('Finland {Fin}', 'St. Petersburg {StP}', 'No', 'Yes'),
    array('Finland {Fin}', 'St. Petersburg {StP} (South Coast)', 'Yes', 'No'),
    array('Finland {Fin}', 'Gulf of Bothnia {GBo}', 'Yes', 'No'),
    array('Finland {Fin}', 'Sweden {Swe}', 'Yes', 'Yes'),
    array('Galicia {Gal}', 'Warsaw {War}', 'No', 'Yes'),
    array('Galicia {Gal}', 'Ukraine {Ukr}', 'No', 'Yes'),
    array('Galicia {Gal}', 'Rumania {Rum}', 'No', 'Yes'),
    array('Galicia {Gal}', 'Silesia {Sil}', 'No', 'Yes'),
    array('Gascony {Gas}', 'Paris {Par}', 'No', 'Yes'),
    array('Gascony {Gas}', 'Marseilles {Mar}', 'No', 'Yes'),
    array('Gascony {Gas}', 'Spain {Spa}', 'No', 'Yes'),
    array('Gascony {Gas}', 'Spain {Spa} (North Coast)', 'Yes', 'No'),
    array('Gascony {Gas}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('Gibraltar {Gib}', 'Western Mediterranean Sea {Wes}', 'Yes', 'No'),
    array('Gibraltar {Gib}', 'Morocco {Mor}', 'Yes', 'Yes'),
    array('Gibraltar {Gib}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('Gibraltar {Gib}', 'Spain {Spa}', 'No', 'Yes'),
    array('Gibraltar {Gib}', 'Spain {Spa} (East Coast)', 'Yes', 'No'),
    array('Gibraltar {Gib}', 'Spain {Spa} (West Coast)', 'Yes', 'No'),
    array('Greece {Gre}', 'Ionian Sea {Ion}', 'Yes', 'No'),
    array('Greece {Gre}', 'Macedonia {Mac}', 'No', 'Yes'),
    array('Greece {Gre}', 'Macedonia {Mac} (East Coast)', 'Yes', 'No'),
    array('Greece {Gre}', 'Macedonia {Mac} (West Coast)', 'Yes', 'No'),
    array('Gulf of Bothnia {GBo}', 'Sweden {Swe}', 'Yes', 'No'),
    array('Gulf of Bothnia {GBo}', 'St. Petersburg {StP} (South Coast)', 'Yes', 'No'),
    array('Gulf of Bothnia {GBo}', 'Livonia {Lvo}', 'Yes', 'No'),
    array('Gulf of Lyon {GLy}', 'Marseilles {Mar}', 'Yes', 'No'),
    array('Gulf of Lyon {GLy}', 'Piedmont {Pie}', 'Yes', 'No'),
    array('Gulf of Lyon {GLy}', 'Rome {Rom}', 'Yes', 'No'),
    array('Gulf of Lyon {GLy}', 'Tyrrhenian Sea {TyS}', 'Yes', 'No'),
    array('Gulf of Lyon {GLy}', 'Western Mediterranean Sea {Wes}', 'Yes', 'No'),
    array('Gulf of Lyon {GLy}', 'Spain {Spa} (East Coast)', 'Yes', 'No'),
    array('Hejaz {Hej}', 'Palestine {Pal}', 'No', 'Yes'),
    array('Hejaz {Hej}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('Helgoland Bight {Hel}', 'Kiel {Kie}', 'Yes', 'No'),
    array('Helgoland Bight {Hel}', 'Netherlands {Net}', 'Yes', 'No'),
    array('Helgoland Bight {Hel}', 'North Sea {Nth}', 'Yes', 'No'),
    array('Iceland {Ice}', 'North Atlantic Ocean {NAt}', 'Yes', 'No'),
    array('Iceland {Ice}', 'Norwegian Sea {Nwg}', 'Yes', 'No'),
    array('Ionian Sea {Ion}', 'Macedonia {Mac} (West Coast)', 'Yes', 'No'),
    array('Ionian Sea {Ion}', 'Tripolitania {Trp}', 'Yes', 'No'),
    array('Ionian Sea {Ion}', 'Tunisia {Tun}', 'Yes', 'No'),
    array('Ionian Sea {Ion}', 'Tyrrhenian Sea {TyS}', 'Yes', 'No'),
    array('Ionian Sea {Ion}', 'Naples {Nap}', 'Yes', 'No'),
    array('Ireland {Ire}', 'North Atlantic Ocean {NAt}', 'Yes', 'No'),
    array('Ireland {Ire}', 'Irish Sea {Iri}', 'Yes', 'No'),
    array('Ireland {Ire}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('Irish Sea {Iri}', 'North Atlantic Ocean {NAt}', 'Yes', 'No'),
    array('Irish Sea {Iri}', 'Liverpool {Lvp}', 'Yes', 'No'),
    array('Irish Sea {Iri}', 'Wales {Wal}', 'Yes', 'No'),
    array('Irish Sea {Iri}', 'Mid-Atlantic Ocean {Mid}', 'Yes', 'No'),
    array('Kiel {Kie}', 'Munich {Mun}', 'No', 'Yes'),
    array('Kiel {Kie}', 'Netherlands {Net}', 'Yes', 'Yes'),
    array('Liverpool {Lvp}', 'Yorkshire {Yor}', 'No', 'Yes'),
    array('Liverpool {Lvp}', 'Wales {Wal}', 'Yes', 'Yes'),
    array('Liverpool {Lvp}', 'North Atlantic Ocean {NAt}', 'Yes', 'No'),
    array('Livonia {Lvo}', 'St. Petersburg {StP}', 'No', 'Yes'),
    array('Livonia {Lvo}', 'St. Petersburg {StP} (South Coast)', 'Yes', 'No'),
    array('Livonia {Lvo}', 'Moscow {Mos}', 'No', 'Yes'),
    array('Livonia {Lvo}', 'Warsaw {War}', 'No', 'Yes'),
    array('Livonia {Lvo}', 'Prussia {Pru}', 'Yes', 'Yes'),
    array('London {Lon}', 'Wales {Wal}', 'Yes', 'Yes'),
    array('London {Lon}', 'Yorkshire {Yor}', 'Yes', 'Yes'),
    array('London {Lon}', 'North Sea {Nth}', 'Yes', 'No'),
    array('Macedonia {Mac}', 'Serbia {Ser}', 'No', 'Yes'),
    array('Marseilles {Mar}', 'Spain {Spa}', 'No', 'Yes'),
    array('Marseilles {Mar}', 'Spain {Spa} (East Coast)', 'Yes', 'No'),
    array('Marseilles {Mar}', 'Switzerland {Swi}', 'No', 'Yes'),
    array('Marseilles {Mar}', 'Piedmont {Pie}', 'Yes', 'Yes'),
    array('Mid-Atlantic Ocean {Mid}', 'North Atlantic Ocean {NAt}', 'Yes', 'No'),
    array('Mid-Atlantic Ocean {Mid}', 'Spain {Spa} (North Coast)', 'Yes', 'No'),
    array('Mid-Atlantic Ocean {Mid}', 'Spain {Spa} (West Coast)', 'Yes', 'No'),
    array('Mid-Atlantic Ocean {Mid}', 'Portugal {Por}', 'Yes', 'No'),
    array('Mid-Atlantic Ocean {Mid}', 'Morocco {Mor}', 'Yes', 'No'),
    array('Milan {Mil}', 'Switzerland {Swi}', 'No', 'Yes'),
    array('Milan {Mil}', 'Tyrolia {Tyr}', 'No', 'Yes'),
    array('Milan {Mil}', 'Venetia {Ven}', 'No', 'Yes'),
    array('Milan {Mil}', 'Rome {Rom}', 'No', 'Yes'),
    array('Milan {Mil}', 'Piedmont {Pie}', 'No', 'Yes'),
    array('Morocco {Mor}', 'Western Mediterranean Sea {Wes}', 'Yes', 'No'),
    array('Morocco {Mor}', 'Southern Algeria {Sou}', 'No', 'Yes'),
    array('Moscow {Mos}', 'St. Petersburg {StP}', 'No', 'Yes'),
    array('Moscow {Mos}', 'Siberia {Sib}', 'No', 'Yes'),
    array('Moscow {Mos}', 'Sevastopol {Sev}', 'No', 'Yes'),
    array('Moscow {Mos}', 'Ukraine {Ukr}', 'No', 'Yes'),
    array('Moscow {Mos}', 'Warsaw {War}', 'No', 'Yes'),
    array('Munich {Mun}', 'Silesia {Sil}', 'No', 'Yes'),
    array('Munich {Mun}', 'Tyrolia {Tyr}', 'No', 'Yes'),
    array('Munich {Mun}', 'Switzerland {Swi}', 'No', 'Yes'),
    array('Naples {Nap}', 'Tyrrhenian Sea {TyS}', 'Yes', 'No'),
    array('Naples {Nap}', 'Rome {Rom}', 'Yes', 'Yes'),
    array('Netherlands {Net}', 'North Sea {Nth}', 'Yes', 'No'),
    array('North Atlantic Ocean {NAt}', 'Norwegian Sea {Nwg}', 'Yes', 'No'),
    array('North Sea {Nth}', 'Norwegian Sea {Nwg}', 'Yes', 'No'),
    array('North Sea {Nth}', 'Norway {Nwy}', 'Yes', 'No'),
    array('North Sea {Nth}', 'Skagerrak {Ska}', 'Yes', 'No'),
    array('North Sea {Nth}', 'Yorkshire {Yor}', 'Yes', 'No'),
    array('Norwegian Sea {Nwg}', 'Norway {Nwy}', 'Yes', 'No'),
    array('Norway {Nwy}', 'Sweden {Swe}', 'Yes', 'Yes'),
    array('Norway {Nwy}', 'Skagerrak {Ska}', 'Yes', 'No'),
    array('Norway {Nwy}', 'St. Petersburg {StP}', 'No', 'Yes'),
    array('Norway {Nwy}', 'St. Petersburg {StP} (North Coast)', 'Yes', 'No'),
    array('Paris {Par}', 'Picardy {Pic}', 'No', 'Yes'),
    array('Piedmont {Pie}', 'Switzerland {Swi}', 'No', 'Yes'),
    array('Piedmont {Pie}', 'Rome {Rom}', 'Yes', 'Yes'),
    array('Portugal {Por}', 'Spain {Spa}', 'No', 'Yes'),
    array('Portugal {Por}', 'Spain {Spa} (North Coast)', 'Yes', 'No'),
    array('Portugal {Por}', 'Spain {Spa} (West Coast)', 'Yes', 'No'),
    array('Prussia {Pru}', 'Warsaw {War}', 'No', 'Yes'),
    array('Prussia {Pru}', 'Silesia {Sil}', 'No', 'Yes'),
    array('Rome {Rom}', 'Venetia {Ven}', 'No', 'Yes'),
    array('Rome {Rom}', 'Tyrrhenian Sea {TyS}', 'Yes', 'No'),
    array('Rumania {Rum}', 'Ukraine {Ukr}', 'No', 'Yes'),
    array('Rumania {Rum}', 'Sevastopol {Sev}', 'Yes', 'Yes'),
    array('Rumania {Rum}', 'Serbia {Ser}', 'No', 'Yes'),
    array('Serbia {Ser}', 'Trieste {Tri}', 'No', 'Yes'),
    array('Sevastopol {Sev}', 'Ukraine {Ukr}', 'No', 'Yes'),
    array('Sevastopol {Sev}', 'Siberia {Sib}', 'No', 'Yes'),
    array('Siberia {Sib}', 'St. Petersburg {StP}', 'No', 'Yes'),
    array('Silesia {Sil}', 'Warsaw {War}', 'No', 'Yes'),
    array('Skagerrak {Ska}', 'Sweden {Swe}', 'Yes', 'No'),
    array('Southern Algeria {Sou}', 'Tunisia {Tun}', 'No', 'Yes'),
    array('Southern Algeria {Sou}', 'Tripolitania {Trp}', 'No', 'Yes'),
    array('Spain {Spa} (East Coast)', 'Western Mediterranean Sea {Wes}', 'Yes', 'No'),
    array('Switzerland {Swi}', 'Tyrolia {Tyr}', 'No', 'Yes'),
    array('Trieste {Tri}', 'Tyrolia {Tyr}', 'No', 'Yes'),
    array('Trieste {Tri}', 'Vienna {Vie}', 'No', 'Yes'),
    array('Trieste {Tri}', 'Venetia {Ven}', 'Yes', 'Yes'),
    array('Tripolitania {Trp}', 'Tunisia {Tun}', 'Yes', 'Yes'),
    array('Tunisia {Tun}', 'Tyrrhenian Sea {TyS}', 'Yes', 'No'),
    array('Tyrolia {Tyr}', 'Vienna {Vie}', 'No', 'Yes'),
    array('Tyrolia {Tyr}', 'Venetia {Ven}', 'No', 'Yes'),
    array('Tyrrhenian Sea {TyS}', 'Western Mediterranean Sea {Wes}', 'Yes', 'No'),
    array('Ukraine {Ukr}', 'Warsaw {War}', 'No', 'Yes'),
    array('Wales {Wal}', 'Yorkshire {Yor}', 'No', 'Yes')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);

// Copy the smallmap-sample to the cache-directory
//if (!file_exists('variants/'.$this->name.'/cache/sampleMap.png'))
//	copy ('variants/'.$this->name.'/resources/sampleMap.png','variants/'.$this->name.'/cache/sampleMap.png');