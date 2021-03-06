<?php
// This is file installs the map data for the Mars variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Olympus', 'Coast', 'Yes', 2, 198, 124, 195, 148),
	array('Arctica Station', 'Coast', 'Yes', 0, 398, 27, 368, 31),
	array('Grand Arctic Glacial', 'Coast', 'No', 0, 457, 38, 466, 41),
	array('Sea of Utopia - Nth Est', 'Sea', 'No', 0, 181, 43, 721, 37),
	array('Sea of Utopia - Sth Est', 'Sea', 'No', 0, 106, 117, 814, 150),
	array('Sea of Utopia - Sth Wst', 'Sea', 'No', 0, 722, 169, 743, 167),
	array('Sea of Utopia - Nth Wst', 'Sea', 'No', 0, 686, 98, 686, 99),
	array('Sea of Utopia', 'Sea', 'No', 0, 733, 94, 734, 95),
	array('Arctic Wastes', 'Coast', 'No', 0, 566, 54, 565, 51),
	array('North Lyot Coast', 'Coast', 'Yes', 0, 622, 74, 575, 89),
	array('South Nilo Coast', 'Sea', 'No', 0, 637, 134, 635, 131),
	array('North Nilo Coast', 'Sea', 'No', 0, 542, 81, 543, 81),
	array('South Lyot Coast', 'Coast', 'Yes', 0, 555, 141, 554, 140),
	array('Acidalian Sea - Sth Est', 'Sea', 'No', 0, 457, 109, 456, 105),
	array('Acidalian Sea - Nth Est', 'Sea', 'No', 0, 439, 77, 402, 62),
	array('Acidalian Sea', 'Sea', 'No', 0, 379, 93, 379, 91),
	array('Acidalian Sea - Nth Wst', 'Sea', 'No', 0, 337, 46, 342, 52),
	array('Acidalian Sea - Sth Wst', 'Sea', 'No', 0, 329, 102, 332, 107),
	array('Arcadian Sound', 'Sea', 'No', 0, 236, 44, 232, 53),
	array('Near Mars 1', 'Land', 'No', 0, 45, 53, 46, 50),
	array('Near Mars 2', 'Land', 'No', 0, 861, 53, 862, 51),
	array('Mils Island', 'Coast', 'No', 0, 152, 85, 152, 85),
	array('Arcadian Shallows', 'Sea', 'No', 0, 105, 202, 111, 193),
	array('Orcus Islands', 'Coast', 'Yes', 0, 868, 234, 870, 237),
	array('Mareotis Fossae', 'Coast', 'No', 2, 266, 114, 269, 118),
	array('Tempe', 'Coast', 'Yes', 2, 299, 135, 305, 133),
	array('Lake Uranius', 'Coast', 'No', 2, 319, 188, 320, 188),
	array('Mt. Tharsis', 'Coast', 'No', 0, 260, 377, 264, 380),
	array('Kasei', 'Coast', 'Yes', 2, 274, 287, 279, 291),
	array('Tharsis Bulge', 'Land', 'No', 2, 219, 246, 219, 299),
	array('Chryse Gulf', 'Sea', 'No', 0, 406, 197, 412, 198),
	array('Chryse Gulf - Nth Est', 'Sea', 'No', 0, 444, 161, 444, 163),
	array('Chryse Gulf - Nth Wst', 'Sea', 'No', 0, 374, 155, 374, 153),
	array('Chryse Gulf - Sth Est', 'Sea', 'No', 0, 436, 207, 436, 204),
	array('Chryse Gulf - Sth Wst', 'Sea', 'No', 0, 351, 193, 357, 193),
	array('Kaś Inlet', 'Sea', 'No', 0, 340, 259, 342, 266),
	array('Chryse', 'Coast', 'Yes', 0, 394, 275, 393, 273),
	array('Lunae Planum', 'Coast', 'Yes', 0, 306, 352, 305, 350),
	array('Xanthe', 'Coast', 'No', 0, 365, 385, 365, 381),
	array('Xanś Bay', 'Sea', 'No', 0, 392, 347, 387, 349),
	array('North Chaos', 'Coast', 'Yes', 0, 422, 349, 423, 354),
	array('Cydonia', 'Coast', 'No', 4, 443, 301, 442, 300),
	array('Syrtis - Elysiumn Cape', 'Sea', 'No', 0, 714, 218, 708, 222),
	array('Aeolian Teeth', 'Sea', 'No', 0, 760, 311, 760, 312),
	array('Apolinaris Sound', 'Sea', 'No', 0, 850, 317, 856, 321),
	array('Isidis Bay', 'Sea', 'No', 0, 671, 343, 672, 343),
	array('Isidis Bay - Nth Est', 'Sea', 'No', 0, 710, 310, 711, 316),
	array('Isidis Bay - Nth Wst', 'Sea', 'No', 0, 646, 295, 646, 294),
	array('Isidis Bay - Sth Wst', 'Sea', 'No', 0, 630, 382, 628, 380),
	array('Isidis Bay - Sth Est', 'Sea', 'No', 0, 715, 354, 712, 353),
	array('Mariner Canyons', 'Sea', 'No', 0, 303, 422, 307, 426),
	array('Amazon Coast', 'Sea', 'No', 0, 77, 283, 77, 285),
	array('Nirgal Straits', 'Sea', 'No', 0, 370, 453, 371, 419),
	array('Nirś Lake', 'Sea', 'No', 0, 411, 419, 407, 418),
	array('The Chaos Terrain', 'Coast', 'No', 0, 392, 436, 393, 438),
	array('Near Mars 3', 'Land', 'No', 0, 46, 768, 47, 770),
	array('Near Mars 4', 'Land', 'No', 0, 873, 770, 870, 772),
	array('Mars Orbit 1', 'Sea', 'No', 0, 46, 110, 49, 112),
	array('Mars Orbit 2', 'Sea', 'No', 0, 813, 770, 809, 771),
	array('Argye Sea', 'Sea', 'No', 0, 333, 605, 330, 610),
	array('Hellas Sea', 'Sea', 'No', 0, 584, 613, 588, 612),
	array('Hellas Sea - Nth Est', 'Sea', 'No', 0, 611, 580, 614, 582),
	array('Hellas Sea - Nth Wst', 'Sea', 'No', 0, 558, 548, 559, 546),
	array('Hellas Sea - Sth Est', 'Sea', 'No', 0, 578, 657, 592, 657),
	array('Hellas Sea - Sth Wst', 'Sea', 'No', 0, 539, 644, 529, 610),
	array('Amazonis', 'Coast', 'No', 1, 103, 345, 104, 349),
	array('Cape Lucus', 'Coast', 'Yes', 1, 30, 345, 37, 347),
	array('Noctis Labyrinthius', 'Coast', 'Yes', 0, 238, 447, 242, 445),
	array('Nirgal Valley', 'Coast', 'No', 0, 342, 471, 341, 472),
	array('Mt. Arsia', 'Land', 'No', 0, 136, 405, 131, 405),
	array('Araby Inlet', 'Coast', 'Yes', 4, 498, 179, 499, 192),
	array('Cassini Crater Bay', 'Coast', 'No', 4, 573, 194, 573, 208),
	array('Antoniadi Crater', 'Coast', 'No', 4, 636, 268, 625, 263),
	array('Mt. Nili', 'Coast', 'Yes', 4, 562, 296, 603, 306),
	array('Mt. Albor', 'Coast', 'No', 6, 813, 290, 817, 293),
	array('Iaypygian Sink', 'Coast', 'No', 0, 583, 372, 582, 379),
	array('Schiaparelli Crater', 'Coast', 'No', 0, 450, 419, 452, 420),
	array('North Noachia', 'Coast', 'Yes', 0, 448, 458, 450, 468),
	array('West Noachia', 'Coast', 'Yes', 3, 381, 566, 375, 559),
	array('South Noachia', 'Coast', 'No', 3, 416, 624, 377, 614),
	array('Gaile', 'Coast', 'Yes', 3, 382, 648, 377, 647),
	array('Hellespont Depression', 'Coast', 'Yes', 3, 381, 699, 378, 699),
	array('South Cap', 'Land', 'No', 3, 504, 770, 467, 779),
	array('Hellas Mountains', 'Coast', 'Yes', 0, 524, 672, 534, 674),
	array('Malea Plain', 'Coast', 'No', 3, 486, 705, 481, 707),
	array('ChaoNochia', 'Coast', 'Yes', 0, 472, 665, 472, 664),
	array('East Noachia', 'Land', 'No', 0, 468, 588, 470, 583),
	array('Hellespont', 'Coast', 'No', 0, 512, 589, 504, 632),
	array('Huygens Crater', 'Coast', 'No', 0, 542, 502, 544, 503),
	array('Meridian Steppe', 'Land', 'Yes', 0, 537, 410, 528, 412),
	array('Araby Highlands', 'Land', 'No', 4, 517, 293, 518, 296),
	array('Schiaparelli Plateau', 'Coast', 'Yes', 4, 481, 300, 488, 286),
	array('Schiaparelli Plateau (North Coast)', 'Coast', 'No', 0, 457, 234, 456, 239),
	array('Schiaparelli Plateau (South Coast)', 'Coast', 'No', 0, 451, 361, 452, 363),
	array('Icarus Desert', 'Land', 'No', 0, 218, 520, 228, 526),
	array('Aonia Desert', 'Coast', 'No', 0, 309, 562, 304, 569),
	array('Mangala Valley', 'Coast', 'Yes', 1, 52, 447, 45, 453),
	array('Hesperia', 'Coast', 'Yes', 1, 845, 509, 851, 509),
	array('Lake Gusev', 'Coast', 'Yes', 0, 846, 391, 843, 395),
	array('Hersdhiel', 'Coast', 'No', 0, 816, 428, 821, 422),
	array('Aeolian Coast', 'Coast', 'Yes', 6, 749, 348, 756, 379),
	array('Hadriaca Highlands', 'Coast', 'Yes', 0, 744, 422, 744, 425),
	array('Nepenthe Valley', 'Coast', 'Yes', 0, 702, 378, 701, 378),
	array('Boon\\\'s Bane', 'Coast', 'No', 0, 720, 507, 718, 503),
	array('Boon\\\'s Bane (West Coast)', 'Coast', 'No', 0, 685, 455, 685, 456),
	array('Boon\\\'s Bane (South Coast)', 'Coast', 'No', 0, 722, 510, 724, 514),
	array('Dao Valley', 'Coast', 'No', 5, 688, 492, 687, 493),
	array('North Harmakis', 'Coast', 'Yes', 5, 661, 582, 665, 584),
	array('South Harmarkis', 'Coast', 'No', 5, 728, 566, 725, 567),
	array('Kepler', 'Land', 'Yes', 0, 821, 565, 825, 569),
	array('Haimesriaca', 'Land', 'No', 0, 772, 490, 776, 531),
	array('North Tyrrhena Plateau', 'Coast', 'Yes', 0, 616, 413, 653, 434),
	array('South Tyrrhena Plateau', 'Coast', 'Yes', 0, 638, 502, 642, 531),
	array('Lowell', 'Coast', 'Yes', 0, 288, 671, 291, 668),
	array('Daedalus Plateau', 'Land', 'Yes', 0, 131, 587, 135, 586),
	array('West Cimmerian Desert', 'Land', 'Yes', 1, 73, 561, 73, 560),
	array('East Cimmerian Desert', 'Land', 'No', 0, 802, 603, 802, 608),
	array('Noctia', 'Coast', 'Yes', 5, 749, 597, 749, 595),
	array('Burroughs', 'Coast', 'Yes', 5, 683, 613, 684, 612),
	array('Sirenia Desert', 'Land', 'No', 0, 204, 718, 201, 714),
	array('Arkady', 'Coast', 'No', 5, 644, 641, 645, 644),
	array('Mt. Elysium', 'Coast', 'Yes', 6, 786, 227, 788, 230),
	array('Mt. Elysium (East Coast)', 'Coast', 'No', 0, 787, 228, 792, 231),
	array('Mt. Elysium (West Coast)', 'Coast', 'No', 0, 756, 243, 755, 243),
	array('Elysium Massiv', 'Coast', 'No', 6, 839, 265, 837, 264),
	array('Cape Phlegra', 'Coast', 'Yes', 6, 798, 179, 799, 179),
	array('Cape Phlegra (North Coast)', 'Coast', 'No', 0, 798, 179, 805, 185),
	array('Cape Phlegra (South Coast)', 'Coast', 'No', 0, 799, 209, 798, 211),
	array('Medusa Valley', 'Coast', 'Yes', 0, 117, 274, 116, 298),
	array('Promenthea', 'Land', 'No', 0, 748, 717, 748, 711)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Olympus','Arcadian Sound','Yes','No'),
	array('Olympus','Arcadian Shallows','Yes','No'),
	array('Olympus','Mareotis Fossae','Yes','Yes'),
	array('Olympus','Tharsis Bulge','No','Yes'),
	array('Olympus','Medusa Valley','Yes','Yes'),
	array('Arctica Station','Grand Arctic Glacial','Yes','Yes'),
	array('Arctica Station','Sea of Utopia - Nth Est','Yes','No'),
	array('Arctica Station','Sea of Utopia','Yes','No'),
	array('Arctica Station','Acidalian Sea - Nth Est','Yes','No'),
	array('Arctica Station','Acidalian Sea','Yes','No'),
	array('Arctica Station','Acidalian Sea - Nth Wst','Yes','No'),
	array('Arctica Station','Arcadian Sound','Yes','No'),
	array('Grand Arctic Glacial','Arctic Wastes','Yes','Yes'),
	array('Grand Arctic Glacial','North Nilo Coast','Yes','No'),
	array('Grand Arctic Glacial','Acidalian Sea - Nth Est','Yes','No'),
	array('Grand Arctic Glacial','Acidalian Sea','Yes','No'),
	array('Sea of Utopia - Nth Est','Sea of Utopia - Sth Est','Yes','No'),
	array('Sea of Utopia - Nth Est','Sea of Utopia - Sth Wst','Yes','No'),
	array('Sea of Utopia - Nth Est','Sea of Utopia - Nth Wst','Yes','No'),
	array('Sea of Utopia - Nth Est','Sea of Utopia','Yes','No'),
	array('Sea of Utopia - Nth Est','Arctic Wastes','Yes','No'),
	array('Sea of Utopia - Nth Est','Arcadian Sound','Yes','No'),
	array('Sea of Utopia - Nth Est','Mils Island','Yes','No'),
	array('Sea of Utopia - Sth Est','Sea of Utopia - Sth Wst','Yes','No'),
	array('Sea of Utopia - Sth Est','Sea of Utopia - Nth Wst','Yes','No'),
	array('Sea of Utopia - Sth Est','Sea of Utopia','Yes','No'),
	array('Sea of Utopia - Sth Est','Mils Island','Yes','No'),
	array('Sea of Utopia - Sth Est','Arcadian Shallows','Yes','No'),
	array('Sea of Utopia - Sth Est','Orcus Islands','Yes','No'),
	array('Sea of Utopia - Sth Est','Elysium Massiv','Yes','No'),
	array('Sea of Utopia - Sth Est','Cape Phlegra (North Coast)','Yes','No'),
	array('Sea of Utopia - Sth Wst','Sea of Utopia - Nth Wst','Yes','No'),
	array('Sea of Utopia - Sth Wst','Sea of Utopia','Yes','No'),
	array('Sea of Utopia - Sth Wst','South Nilo Coast','Yes','No'),
	array('Sea of Utopia - Sth Wst','Syrtis - Elysiumn Cape','Yes','No'),
	array('Sea of Utopia - Sth Wst','Antoniadi Crater','Yes','No'),
	array('Sea of Utopia - Sth Wst','Cape Phlegra (North Coast)','Yes','No'),
	array('Sea of Utopia - Nth Wst','Sea of Utopia','Yes','No'),
	array('Sea of Utopia - Nth Wst','Arctic Wastes','Yes','No'),
	array('Sea of Utopia - Nth Wst','North Lyot Coast','Yes','No'),
	array('Sea of Utopia - Nth Wst','South Nilo Coast','Yes','No'),
	array('Sea of Utopia','Arctic Wastes','Yes','No'),
	array('Sea of Utopia','North Lyot Coast','Yes','No'),
	array('Sea of Utopia','South Nilo Coast','Yes','No'),
	array('Sea of Utopia','Arcadian Sound','Yes','No'),
	array('Sea of Utopia','Mils Island','Yes','No'),
	array('Sea of Utopia','Arcadian Shallows','Yes','No'),
	array('Sea of Utopia','Orcus Islands','Yes','No'),
	array('Sea of Utopia','Syrtis - Elysiumn Cape','Yes','No'),
	array('Sea of Utopia','Antoniadi Crater','Yes','No'),
	array('Sea of Utopia','Elysium Massiv','Yes','No'),
	array('Sea of Utopia','Cape Phlegra (North Coast)','Yes','No'),
	array('Arctic Wastes','North Lyot Coast','Yes','No'),
	array('Arctic Wastes','North Nilo Coast','Yes','No'),
	array('North Lyot Coast','South Nilo Coast','Yes','No'),
	array('North Lyot Coast','North Nilo Coast','Yes','No'),
	array('South Nilo Coast','North Nilo Coast','Yes','No'),
	array('South Nilo Coast','South Lyot Coast','Yes','No'),
	array('South Nilo Coast','Cassini Crater Bay','Yes','No'),
	array('South Nilo Coast','Antoniadi Crater','Yes','No'),
	array('North Nilo Coast','South Lyot Coast','Yes','No'),
	array('North Nilo Coast','Acidalian Sea - Sth Est','Yes','No'),
	array('North Nilo Coast','Acidalian Sea - Nth Est','Yes','No'),
	array('North Nilo Coast','Acidalian Sea','Yes','No'),
	array('South Lyot Coast','Acidalian Sea - Sth Est','Yes','No'),
	array('South Lyot Coast','Acidalian Sea','Yes','No'),
	array('South Lyot Coast','Chryse Gulf','Yes','No'),
	array('South Lyot Coast','Chryse Gulf - Nth Est','Yes','No'),
	array('South Lyot Coast','Araby Inlet','Yes','No'),
	array('South Lyot Coast','Cassini Crater Bay','Yes','No'),
	array('Acidalian Sea - Sth Est','Acidalian Sea - Nth Est','Yes','No'),
	array('Acidalian Sea - Sth Est','Acidalian Sea','Yes','No'),
	array('Acidalian Sea - Sth Est','Acidalian Sea - Nth Wst','Yes','No'),
	array('Acidalian Sea - Sth Est','Acidalian Sea - Sth Wst','Yes','No'),
	array('Acidalian Sea - Sth Est','Chryse Gulf','Yes','No'),
	array('Acidalian Sea - Sth Est','Chryse Gulf - Nth Est','Yes','No'),
	array('Acidalian Sea - Sth Est','Chryse Gulf - Nth Wst','Yes','No'),
	array('Acidalian Sea - Nth Est','Acidalian Sea','Yes','No'),
	array('Acidalian Sea - Nth Est','Acidalian Sea - Nth Wst','Yes','No'),
	array('Acidalian Sea - Nth Est','Acidalian Sea - Sth Wst','Yes','No'),
	array('Acidalian Sea','Acidalian Sea - Nth Wst','Yes','No'),
	array('Acidalian Sea','Acidalian Sea - Sth Wst','Yes','No'),
	array('Acidalian Sea','Arcadian Sound','Yes','No'),
	array('Acidalian Sea','Mareotis Fossae','Yes','No'),
	array('Acidalian Sea','Tempe','Yes','No'),
	array('Acidalian Sea','Lake Uranius','Yes','No'),
	array('Acidalian Sea','Chryse Gulf','Yes','No'),
	array('Acidalian Sea','Chryse Gulf - Nth Est','Yes','No'),
	array('Acidalian Sea','Chryse Gulf - Nth Wst','Yes','No'),
	array('Acidalian Sea - Nth Wst','Acidalian Sea - Sth Wst','Yes','No'),
	array('Acidalian Sea - Nth Wst','Arcadian Sound','Yes','No'),
	array('Acidalian Sea - Sth Wst','Arcadian Sound','Yes','No'),
	array('Acidalian Sea - Sth Wst','Mareotis Fossae','Yes','No'),
	array('Acidalian Sea - Sth Wst','Tempe','Yes','No'),
	array('Acidalian Sea - Sth Wst','Lake Uranius','Yes','No'),
	array('Acidalian Sea - Sth Wst','Chryse Gulf','Yes','No'),
	array('Acidalian Sea - Sth Wst','Chryse Gulf - Nth Wst','Yes','No'),
	array('Arcadian Sound','Mils Island','Yes','No'),
	array('Arcadian Sound','Arcadian Shallows','Yes','No'),
	array('Arcadian Sound','Mareotis Fossae','Yes','No'),
	array('Near Mars 1','Near Mars 2','No','Yes'),
	array('Near Mars 1','Mareotis Fossae','No','Yes'),
	array('Near Mars 1','Cydonia','No','Yes'),
	array('Near Mars 1','Near Mars 3','No','Yes'),
	array('Near Mars 1','Near Mars 4','No','Yes'),
	array('Near Mars 1','Amazonis','No','Yes'),
	array('Near Mars 1','Mt. Albor','No','Yes'),
	array('Near Mars 1','South Noachia','No','Yes'),
	array('Near Mars 1','Arkady','No','Yes'),
	array('Near Mars 2','Mareotis Fossae','No','Yes'),
	array('Near Mars 2','Cydonia','No','Yes'),
	array('Near Mars 2','Near Mars 3','No','Yes'),
	array('Near Mars 2','Near Mars 4','No','Yes'),
	array('Near Mars 2','Amazonis','No','Yes'),
	array('Near Mars 2','Mt. Albor','No','Yes'),
	array('Near Mars 2','South Noachia','No','Yes'),
	array('Near Mars 2','Arkady','No','Yes'),
	array('Mils Island','Arcadian Shallows','Yes','No'),
	array('Arcadian Shallows','Orcus Islands','Yes','No'),
	array('Arcadian Shallows','Amazon Coast','Yes','No'),
	array('Arcadian Shallows','Medusa Valley','Yes','No'),
	array('Orcus Islands','Apolinaris Sound','Yes','No'),
	array('Orcus Islands','Amazon Coast','Yes','No'),
	array('Orcus Islands','Elysium Massiv','Yes','No'),
	array('Mareotis Fossae','Tempe','Yes','Yes'),
	array('Mareotis Fossae','Lake Uranius','No','Yes'),
	array('Mareotis Fossae','Tharsis Bulge','No','Yes'),
	array('Mareotis Fossae','Near Mars 3','No','Yes'),
	array('Mareotis Fossae','Near Mars 4','No','Yes'),
	array('Mareotis Fossae','Mars Orbit 1','Yes','No'),
	array('Mareotis Fossae','Mars Orbit 2','Yes','No'),
	array('Tempe','Lake Uranius','Yes','Yes'),
	array('Lake Uranius','Kasei','Yes','Yes'),
	array('Lake Uranius','Tharsis Bulge','No','Yes'),
	array('Lake Uranius','Chryse Gulf','Yes','No'),
	array('Lake Uranius','Chryse Gulf - Nth Wst','Yes','No'),
	array('Lake Uranius','Chryse Gulf - Sth Wst','Yes','No'),
	array('Lake Uranius','Kaś Inlet','Yes','No'),
	array('Mt. Tharsis','Kasei','Yes','Yes'),
	array('Mt. Tharsis','Tharsis Bulge','No','Yes'),
	array('Mt. Tharsis','Lunae Planum','Yes','Yes'),
	array('Mt. Tharsis','Mariner Canyons','Yes','No'),
	array('Mt. Tharsis','Noctis Labyrinthius','Yes','Yes'),
	array('Kasei','Tharsis Bulge','No','Yes'),
	array('Kasei','Kaś Inlet','Yes','No'),
	array('Kasei','Lunae Planum','Yes','No'),
	array('Tharsis Bulge','Noctis Labyrinthius','No','Yes'),
	array('Tharsis Bulge','Medusa Valley','No','Yes'),
	array('Chryse Gulf','Chryse Gulf - Nth Est','Yes','No'),
	array('Chryse Gulf','Chryse Gulf - Nth Wst','Yes','No'),
	array('Chryse Gulf','Chryse Gulf - Sth Est','Yes','No'),
	array('Chryse Gulf','Chryse Gulf - Sth Wst','Yes','No'),
	array('Chryse Gulf','Kaś Inlet','Yes','No'),
	array('Chryse Gulf','Chryse','Yes','No'),
	array('Chryse Gulf','Xanś Bay','Yes','No'),
	array('Chryse Gulf','North Chaos','Yes','No'),
	array('Chryse Gulf','Cydonia','Yes','No'),
	array('Chryse Gulf','Araby Inlet','Yes','No'),
	array('Chryse Gulf','Schiaparelli Plateau (North Coast)','Yes','No'),
	array('Chryse Gulf - Nth Est','Chryse Gulf - Nth Wst','Yes','No'),
	array('Chryse Gulf - Nth Est','Chryse Gulf - Sth Est','Yes','No'),
	array('Chryse Gulf - Nth Est','Chryse Gulf - Sth Wst','Yes','No'),
	array('Chryse Gulf - Nth Est','Araby Inlet','Yes','No'),
	array('Chryse Gulf - Nth Wst','Chryse Gulf - Sth Est','Yes','No'),
	array('Chryse Gulf - Nth Wst','Chryse Gulf - Sth Wst','Yes','No'),
	array('Chryse Gulf - Sth Est','Chryse Gulf - Sth Wst','Yes','No'),
	array('Chryse Gulf - Sth Est','Chryse','Yes','No'),
	array('Chryse Gulf - Sth Est','Xanś Bay','Yes','No'),
	array('Chryse Gulf - Sth Est','North Chaos','Yes','No'),
	array('Chryse Gulf - Sth Est','Cydonia','Yes','No'),
	array('Chryse Gulf - Sth Est','Araby Inlet','Yes','No'),
	array('Chryse Gulf - Sth Est','Schiaparelli Plateau (North Coast)','Yes','No'),
	array('Chryse Gulf - Sth Wst','Kaś Inlet','Yes','No'),
	array('Chryse Gulf - Sth Wst','Chryse','Yes','No'),
	array('Kaś Inlet','Chryse','Yes','No'),
	array('Kaś Inlet','Lunae Planum','Yes','No'),
	array('Kaś Inlet','Xanthe','Yes','No'),
	array('Kaś Inlet','Xanś Bay','Yes','No'),
	array('Chryse','Xanthe','Yes','Yes'),
	array('Chryse','Xanś Bay','Yes','No'),
	array('Lunae Planum','Xanthe','Yes','Yes'),
	array('Lunae Planum','Mariner Canyons','Yes','No'),
	array('Lunae Planum','Nirgal Straits','Yes','No'),
	array('Xanthe','Xanś Bay','Yes','No'),
	array('Xanthe','North Chaos','Yes','Yes'),
	array('Xanthe','Nirgal Straits','Yes','No'),
	array('Xanś Bay','North Chaos','Yes','No'),
	array('Xanś Bay','Nirgal Straits','Yes','No'),
	array('North Chaos','Cydonia','Yes','No'),
	array('North Chaos','Nirgal Straits','Yes','No'),
	array('North Chaos','Nirś Lake','Yes','No'),
	array('North Chaos','The Chaos Terrain','Yes','No'),
	array('North Chaos','Schiaparelli Crater','Yes','Yes'),
	array('North Chaos','Schiaparelli Plateau','No','Yes'),
	array('North Chaos','Schiaparelli Plateau (South Coast)','Yes','No'),
	array('Cydonia','Near Mars 3','No','Yes'),
	array('Cydonia','Near Mars 4','No','Yes'),
	array('Cydonia','Mars Orbit 1','Yes','No'),
	array('Cydonia','Mars Orbit 2','Yes','No'),
	array('Cydonia','Schiaparelli Plateau','No','Yes'),
	array('Cydonia','Schiaparelli Plateau (North Coast)','Yes','No'),
	array('Cydonia','Schiaparelli Plateau (South Coast)','Yes','No'),
	array('Syrtis - Elysiumn Cape','Aeolian Teeth','Yes','No'),
	array('Syrtis - Elysiumn Cape','Isidis Bay','Yes','No'),
	array('Syrtis - Elysiumn Cape','Isidis Bay - Nth Est','Yes','No'),
	array('Syrtis - Elysiumn Cape','Isidis Bay - Nth Wst','Yes','No'),
	array('Syrtis - Elysiumn Cape','Antoniadi Crater','Yes','No'),
	array('Syrtis - Elysiumn Cape','Mt. Elysium (West Coast)','Yes','No'),
	array('Syrtis - Elysiumn Cape','Cape Phlegra (North Coast)','Yes','No'),
	array('Aeolian Teeth','Apolinaris Sound','Yes','No'),
	array('Aeolian Teeth','Isidis Bay','Yes','No'),
	array('Aeolian Teeth','Isidis Bay - Nth Est','Yes','No'),
	array('Aeolian Teeth','Mt. Albor','Yes','No'),
	array('Aeolian Teeth','Hersdhiel','Yes','No'),
	array('Aeolian Teeth','Aeolian Coast','Yes','No'),
	array('Aeolian Teeth','Mt. Elysium (West Coast)','Yes','No'),
	array('Apolinaris Sound','Amazon Coast','Yes','No'),
	array('Apolinaris Sound','Mt. Albor','Yes','No'),
	array('Apolinaris Sound','Lake Gusev','Yes','No'),
	array('Apolinaris Sound','Hersdhiel','Yes','No'),
	array('Apolinaris Sound','Elysium Massiv','Yes','No'),
	array('Isidis Bay','Isidis Bay - Nth Est','Yes','No'),
	array('Isidis Bay','Isidis Bay - Nth Wst','Yes','No'),
	array('Isidis Bay','Isidis Bay - Sth Wst','Yes','No'),
	array('Isidis Bay','Isidis Bay - Sth Est','Yes','No'),
	array('Isidis Bay','Antoniadi Crater','Yes','No'),
	array('Isidis Bay','Mt. Nili','Yes','No'),
	array('Isidis Bay','Iaypygian Sink','Yes','No'),
	array('Isidis Bay','Aeolian Coast','Yes','No'),
	array('Isidis Bay','Nepenthe Valley','Yes','No'),
	array('Isidis Bay','North Tyrrhena Plateau','Yes','No'),
	array('Isidis Bay - Nth Est','Isidis Bay - Nth Wst','Yes','No'),
	array('Isidis Bay - Nth Est','Isidis Bay - Sth Wst','Yes','No'),
	array('Isidis Bay - Nth Est','Isidis Bay - Sth Est','Yes','No'),
	array('Isidis Bay - Nth Est','Aeolian Coast','Yes','No'),
	array('Isidis Bay - Nth Wst','Isidis Bay - Sth Wst','Yes','No'),
	array('Isidis Bay - Nth Wst','Isidis Bay - Sth Est','Yes','No'),
	array('Isidis Bay - Nth Wst','Antoniadi Crater','Yes','No'),
	array('Isidis Bay - Nth Wst','Mt. Nili','Yes','No'),
	array('Isidis Bay - Sth Wst','Isidis Bay - Sth Est','Yes','No'),
	array('Isidis Bay - Sth Wst','Mt. Nili','Yes','No'),
	array('Isidis Bay - Sth Wst','Iaypygian Sink','Yes','No'),
	array('Isidis Bay - Sth Wst','North Tyrrhena Plateau','Yes','No'),
	array('Isidis Bay - Sth Est','Aeolian Coast','Yes','No'),
	array('Isidis Bay - Sth Est','Nepenthe Valley','Yes','No'),
	array('Isidis Bay - Sth Est','North Tyrrhena Plateau','Yes','No'),
	array('Mariner Canyons','Nirgal Straits','Yes','No'),
	array('Mariner Canyons','Noctis Labyrinthius','Yes','No'),
	array('Mariner Canyons','Nirgal Valley','Yes','No'),
	array('Amazon Coast','Amazonis','Yes','No'),
	array('Amazon Coast','Cape Lucus','Yes','No'),
	array('Amazon Coast','Lake Gusev','Yes','No'),
	array('Amazon Coast','Medusa Valley','Yes','No'),
	array('Nirgal Straits','The Chaos Terrain','Yes','No'),
	array('Nirgal Straits','Nirgal Valley','Yes','No'),
	array('Nirś Lake','The Chaos Terrain','Yes','No'),
	array('Nirś Lake','Schiaparelli Crater','Yes','No'),
	array('Nirś Lake','North Noachia','Yes','No'),
	array('The Chaos Terrain','Nirgal Valley','Yes','No'),
	array('The Chaos Terrain','North Noachia','Yes','Yes'),
	array('The Chaos Terrain','West Noachia','Yes','Yes'),
	array('Near Mars 3','Near Mars 4','No','Yes'),
	array('Near Mars 3','Amazonis','No','Yes'),
	array('Near Mars 3','Mt. Albor','No','Yes'),
	array('Near Mars 3','South Noachia','No','Yes'),
	array('Near Mars 3','Arkady','No','Yes'),
	array('Near Mars 4','Amazonis','No','Yes'),
	array('Near Mars 4','Mt. Albor','No','Yes'),
	array('Near Mars 4','South Noachia','No','Yes'),
	array('Near Mars 4','Arkady','No','Yes'),
	array('Mars Orbit 1','Mars Orbit 2','Yes','No'),
	array('Mars Orbit 1','Amazonis','Yes','No'),
	array('Mars Orbit 1','Mt. Albor','Yes','No'),
	array('Mars Orbit 1','South Noachia','Yes','No'),
	array('Mars Orbit 1','Arkady','Yes','No'),
	array('Mars Orbit 2','Amazonis','Yes','No'),
	array('Mars Orbit 2','Mt. Albor','Yes','No'),
	array('Mars Orbit 2','South Noachia','Yes','No'),
	array('Mars Orbit 2','Arkady','Yes','No'),
	array('Argye Sea','West Noachia','Yes','No'),
	array('Argye Sea','South Noachia','Yes','No'),
	array('Argye Sea','Gaile','Yes','No'),
	array('Argye Sea','Hellespont Depression','Yes','No'),
	array('Argye Sea','Aonia Desert','Yes','No'),
	array('Argye Sea','Lowell','Yes','No'),
	array('Hellas Sea','Hellas Sea - Nth Est','Yes','No'),
	array('Hellas Sea','Hellas Sea - Nth Wst','Yes','No'),
	array('Hellas Sea','Hellas Sea - Sth Est','Yes','No'),
	array('Hellas Sea','Hellas Sea - Sth Wst','Yes','No'),
	array('Hellas Sea','Hellas Mountains','Yes','No'),
	array('Hellas Sea','ChaoNochia','Yes','No'),
	array('Hellas Sea','Hellespont','Yes','No'),
	array('Hellas Sea','Huygens Crater','Yes','No'),
	array('Hellas Sea','North Harmakis','Yes','No'),
	array('Hellas Sea','South Tyrrhena Plateau','Yes','No'),
	array('Hellas Sea','Burroughs','Yes','No'),
	array('Hellas Sea','Arkady','Yes','No'),
	array('Hellas Sea - Nth Est','Hellas Sea - Nth Wst','Yes','No'),
	array('Hellas Sea - Nth Est','Hellas Sea - Sth Est','Yes','No'),
	array('Hellas Sea - Nth Est','Hellas Sea - Sth Wst','Yes','No'),
	array('Hellas Sea - Nth Est','North Harmakis','Yes','No'),
	array('Hellas Sea - Nth Est','South Tyrrhena Plateau','Yes','No'),
	array('Hellas Sea - Nth Est','Burroughs','Yes','No'),
	array('Hellas Sea - Nth Est','Arkady','Yes','No'),
	array('Hellas Sea - Nth Wst','Hellas Sea - Sth Est','Yes','No'),
	array('Hellas Sea - Nth Wst','Hellas Sea - Sth Wst','Yes','No'),
	array('Hellas Sea - Nth Wst','Hellespont','Yes','No'),
	array('Hellas Sea - Nth Wst','Huygens Crater','Yes','No'),
	array('Hellas Sea - Nth Wst','South Tyrrhena Plateau','Yes','No'),
	array('Hellas Sea - Sth Est','Hellas Sea - Sth Wst','Yes','No'),
	array('Hellas Sea - Sth Est','Hellas Mountains','Yes','No'),
	array('Hellas Sea - Sth Est','Arkady','Yes','No'),
	array('Hellas Sea - Sth Wst','Hellas Mountains','Yes','No'),
	array('Hellas Sea - Sth Wst','ChaoNochia','Yes','No'),
	array('Hellas Sea - Sth Wst','Hellespont','Yes','No'),
	array('Amazonis','Cape Lucus','Yes','No'),
	array('Amazonis','Mt. Arsia','No','Yes'),
	array('Amazonis','Mangala Valley','Yes','Yes'),
	array('Amazonis','Medusa Valley','Yes','Yes'),
	array('Cape Lucus','Mangala Valley','Yes','Yes'),
	array('Cape Lucus','Hesperia','Yes','Yes'),
	array('Cape Lucus','Lake Gusev','Yes','Yes'),
	array('Noctis Labyrinthius','Nirgal Valley','Yes','Yes'),
	array('Noctis Labyrinthius','Mt. Arsia','No','Yes'),
	array('Nirgal Valley','West Noachia','Yes','Yes'),
	array('Nirgal Valley','Icarus Desert','No','Yes'),
	array('Nirgal Valley','Aonia Desert','Yes','Yes'),
	array('Mt. Arsia','Icarus Desert','No','Yes'),
	array('Mt. Arsia','Mangala Valley','No','Yes'),
	array('Mt. Arsia','Medusa Valley','No','Yes'),
	array('Araby Inlet','Cassini Crater Bay','Yes','Yes'),
	array('Araby Inlet','Araby Highlands','No','Yes'),
	array('Araby Inlet','Schiaparelli Plateau','No','Yes'),
	array('Araby Inlet','Schiaparelli Plateau (North Coast)','Yes','No'),
	array('Cassini Crater Bay','Antoniadi Crater','Yes','Yes'),
	array('Cassini Crater Bay','Mt. Nili','No','Yes'),
	array('Cassini Crater Bay','Araby Highlands','No','Yes'),
	array('Antoniadi Crater','Mt. Nili','Yes','Yes'),
	array('Mt. Nili','Iaypygian Sink','Yes','Yes'),
	array('Mt. Nili','Araby Highlands','No','Yes'),
	array('Mt. Albor','Mt. Elysium','No','Yes'),
	array('Mt. Albor','Mt. Elysium (East Coast)','Yes','No'),
	array('Mt. Albor','Mt. Elysium (West Coast)','Yes','No'),
	array('Mt. Albor','Elysium Massiv','Yes','Yes'),
	array('Iaypygian Sink','Huygens Crater','Yes','Yes'),
	array('Iaypygian Sink','Meridian Steppe','No','Yes'),
	array('Iaypygian Sink','Araby Highlands','No','Yes'),
	array('Iaypygian Sink','North Tyrrhena Plateau','Yes','Yes'),
	array('Iaypygian Sink','South Tyrrhena Plateau','Yes','Yes'),
	array('Schiaparelli Crater','North Noachia','Yes','Yes'),
	array('Schiaparelli Crater','Meridian Steppe','No','Yes'),
	array('Schiaparelli Crater','Schiaparelli Plateau','No','Yes'),
	array('Schiaparelli Crater','Schiaparelli Plateau (South Coast)','Yes','No'),
	array('North Noachia','West Noachia','No','Yes'),
	array('North Noachia','South Noachia','No','Yes'),
	array('North Noachia','East Noachia','No','Yes'),
	array('North Noachia','Huygens Crater','No','Yes'),
	array('West Noachia','South Noachia','Yes','Yes'),
	array('West Noachia','Aonia Desert','Yes','Yes'),
	array('South Noachia','Gaile','Yes','Yes'),
	array('South Noachia','ChaoNochia','No','Yes'),
	array('South Noachia','East Noachia','No','Yes'),
	array('Gaile','Hellespont Depression','Yes','Yes'),
	array('Gaile','Malea Plain','Yes','Yes'),
	array('Gaile','ChaoNochia','Yes','Yes'),
	array('Hellespont Depression','South Cap','No','Yes'),
	array('Hellespont Depression','Malea Plain','Yes','Yes'),
	array('Hellespont Depression','Lowell','Yes','Yes'),
	array('South Cap','Hellas Mountains','No','Yes'),
	array('South Cap','Malea Plain','No','Yes'),
	array('South Cap','Sirenia Desert','No','Yes'),
	array('South Cap','Promenthea','No','Yes'),
	array('Hellas Mountains','Malea Plain','Yes','Yes'),
	array('Hellas Mountains','ChaoNochia','Yes','No'),
	array('Hellas Mountains','Arkady','Yes','Yes'),
	array('Hellas Mountains','Promenthea','No','Yes'),
	array('Malea Plain','ChaoNochia','Yes','Yes'),
	array('ChaoNochia','East Noachia','No','Yes'),
	array('ChaoNochia','Hellespont','Yes','Yes'),
	array('East Noachia','Hellespont','No','Yes'),
	array('East Noachia','Huygens Crater','No','Yes'),
	array('Hellespont','Huygens Crater','Yes','Yes'),
	array('Huygens Crater','Meridian Steppe','No','Yes'),
	array('Huygens Crater','South Tyrrhena Plateau','Yes','Yes'),
	array('Meridian Steppe','Araby Highlands','No','Yes'),
	array('Meridian Steppe','Schiaparelli Plateau','No','Yes'),
	array('Araby Highlands','Schiaparelli Plateau','No','Yes'),
	array('Icarus Desert','Aonia Desert','No','Yes'),
	array('Icarus Desert','Mangala Valley','No','Yes'),
	array('Icarus Desert','Daedalus Plateau','No','Yes'),
	array('Aonia Desert','Lowell','Yes','Yes'),
	array('Aonia Desert','Daedalus Plateau','No','Yes'),
	array('Aonia Desert','Sirenia Desert','No','Yes'),
	array('Mangala Valley','Hesperia','No','Yes'),
	array('Mangala Valley','Daedalus Plateau','No','Yes'),
	array('Mangala Valley','West Cimmerian Desert','No','Yes'),
	array('Hesperia','Lake Gusev','Yes','Yes'),
	array('Hesperia','Hersdhiel','No','Yes'),
	array('Hesperia','Kepler','No','Yes'),
	array('Hesperia','Haimesriaca','No','Yes'),
	array('Hesperia','East Cimmerian Desert','No','Yes'),
	array('Lake Gusev','Hersdhiel','Yes','Yes'),
	array('Hersdhiel','Aeolian Coast','Yes','Yes'),
	array('Hersdhiel','Hadriaca Highlands','No','Yes'),
	array('Hersdhiel','Haimesriaca','No','Yes'),
	array('Aeolian Coast','Hadriaca Highlands','Yes','Yes'),
	array('Aeolian Coast','Nepenthe Valley','Yes','No'),
	array('Hadriaca Highlands','Nepenthe Valley','Yes','Yes'),
	array('Hadriaca Highlands','Boon\\\'s Bane','No','Yes'),
	array('Hadriaca Highlands','Haimesriaca','No','Yes'),
	array('Nepenthe Valley','Boon\\\'s Bane','No','Yes'),
	array('Nepenthe Valley','Boon\\\'s Bane (West Coast)','Yes','No'),
	array('Nepenthe Valley','North Tyrrhena Plateau','Yes','Yes'),
	array('Boon\\\'s Bane','Dao Valley','No','Yes'),
	array('Boon\\\'s Bane','North Harmakis','No','Yes'),
	array('Boon\\\'s Bane','South Harmarkis','No','Yes'),
	array('Boon\\\'s Bane','Haimesriaca','No','Yes'),
	array('Boon\\\'s Bane (West Coast)','Dao Valley','Yes','No'),
	array('Boon\\\'s Bane (West Coast)','North Tyrrhena Plateau','Yes','No'),
	array('Boon\\\'s Bane (South Coast)','Dao Valley','Yes','No'),
	array('Boon\\\'s Bane (South Coast)','North Harmakis','Yes','No'),
	array('Boon\\\'s Bane (South Coast)','South Harmarkis','Yes','No'),
	array('Dao Valley','North Harmakis','Yes','No'),
	array('Dao Valley','North Tyrrhena Plateau','Yes','Yes'),
	array('Dao Valley','South Tyrrhena Plateau','Yes','Yes'),
	array('North Harmakis','South Harmarkis','Yes','Yes'),
	array('North Harmakis','South Tyrrhena Plateau','Yes','No'),
	array('North Harmakis','Burroughs','Yes','Yes'),
	array('South Harmarkis','Kepler','No','Yes'),
	array('South Harmarkis','Haimesriaca','No','Yes'),
	array('South Harmarkis','Noctia','Yes','Yes'),
	array('South Harmarkis','Burroughs','Yes','No'),
	array('Kepler','Haimesriaca','No','Yes'),
	array('Kepler','East Cimmerian Desert','No','Yes'),
	array('Kepler','Noctia','No','Yes'),
	array('North Tyrrhena Plateau','South Tyrrhena Plateau','Yes','Yes'),
	array('Lowell','Sirenia Desert','No','Yes'),
	array('Daedalus Plateau','West Cimmerian Desert','No','Yes'),
	array('Daedalus Plateau','Sirenia Desert','No','Yes'),
	array('Daedalus Plateau','Promenthea','No','Yes'),
	array('West Cimmerian Desert','East Cimmerian Desert','No','Yes'),
	array('West Cimmerian Desert','Promenthea','No','Yes'),
	array('East Cimmerian Desert','Noctia','No','Yes'),
	array('East Cimmerian Desert','Promenthea','No','Yes'),
	array('Noctia','Burroughs','Yes','Yes'),
	array('Noctia','Promenthea','No','Yes'),
	array('Burroughs','Arkady','Yes','Yes'),
	array('Sirenia Desert','Promenthea','No','Yes'),
	array('Arkady','Promenthea','No','Yes'),
	array('Mt. Elysium','Elysium Massiv','No','Yes'),
	array('Mt. Elysium','Cape Phlegra','No','Yes'),
	array('Mt. Elysium (East Coast)','Elysium Massiv','Yes','No'),
	array('Mt. Elysium (East Coast)','Cape Phlegra (South Coast)','Yes','No'),
	array('Mt. Elysium (West Coast)','Cape Phlegra (North Coast)','Yes','No'),
	array('Elysium Massiv','Cape Phlegra','No','Yes'),
	array('Elysium Massiv','Cape Phlegra (North Coast)','Yes','No'),
	array('Elysium Massiv','Cape Phlegra (South Coast)','Yes','No')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
