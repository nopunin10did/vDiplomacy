<?php
// This is file installs the map data for the AtlanticColonies variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Scotland', 'Coast', 'No', 3, 830, 49, 613, 38),
	array('London', 'Coast', 'Yes', 3, 845, 96, 621, 73),
	array('Bristol', 'Coast', 'Yes', 3, 814, 108, 616, 55),
	array('Ireland', 'Coast', 'No', 3, 794, 87, 586, 62),
	array('Northern Atlantic', 'Sea', 'No', 0, 716, 73, 517, 24),
	array('English Channel', 'Sea', 'No', 0, 812, 123, 599, 88),
	array('European Atlantic', 'Sea', 'No', 0, 714, 190, 541, 146),
	array('Paris', 'Coast', 'No', 1, 885, 145, 652, 92),
	array('Brest', 'Coast', 'Yes', 1, 851, 137, 628, 92),
	array('Bordeaux', 'Coast', 'No', 1, 855, 169, 628, 123),
	array('Marseilles', 'Coast', 'Yes', 1, 869, 172, 656, 126),
	array('Northwestern Atlantic', 'Sea', 'No', 0, 543, 89, 402, 64),
	array('Portugal', 'Coast', 'Yes', 4, 800, 215, 588, 167),
	array('Catalan', 'Coast', 'No', 2, 854, 186, 644, 140),
	array('Gulf of Lion', 'Sea', 'No', 0, 943, 215, 691, 162),
	array('Valencia', 'Coast', 'Yes', 2, 841, 221, 618, 165),
	array('Ionian Sea', 'Sea', 'No', 0, 986, 230, 728, 177),
	array('Gibraltar', 'Coast', 'Yes', 2, 825, 236, 609, 172),
	array('Castilla y Leon', 'Coast', 'No', 2, 807, 184, 604, 149),
	array('Andalucia', 'Coast', 'No', 2, 810, 229, 597, 168),
	array('Tunisia', 'Coast', 'Yes', 0, 911, 256, 669, 188),
	array('Tripoli', 'Coast', 'Yes', 0, 968, 302, 714, 225),
	array('Algeria', 'Coast', 'No', 0, 873, 256, 643, 193),
	array('North Morocco', 'Coast', 'Yes', 0, 835, 281, 619, 196),
	array('Strait of Gibraltar', 'Sea', 'No', 0, 857, 241, 596, 184),
	array('Baeleric Sea', 'Sea', 'No', 0, 872, 219, 645, 166),
	array('Mazagon', 'Coast', 'Yes', 4, 817, 266, 599, 196),
	array('South Morocco', 'Coast', 'No', 0, 798, 316, 595, 221),
	array('Azores Islands', 'Coast', 'Yes', 4, 686, 235, 513, 166),
	array('Madeira', 'Coast', 'Yes', 0, 739, 270, 544, 198),
	array('Canary Islands', 'Coast', 'Yes', 2, 754, 311, 547, 228),
	array('West Sahara', 'Coast', 'No', 0, 784, 338, 565, 257),
	array('Middle Sahara', 'Land', 'No', 0, 856, 332, 623, 245),
	array('East Sahara', 'Land', 'No', 0, 949, 376, 704, 251),
	array('Senegal', 'Coast', 'Yes', 0, 749, 398, 556, 312),
	array('Canaries Sea', 'Sea', 'No', 0, 680, 338, 500, 237),
	array('Nigrita', 'Land', 'No', 0, 820, 432, 595, 297),
	array('Sudan', 'Land', 'Yes', 0, 929, 426, 721, 349),
	array('Cape Verde', 'Coast', 'Yes', 0, 685, 395, 505, 292),
	array('Gor&eacute;e', 'Coast', 'Yes', 1, 743, 439, 547, 325),
	array('Grain Coast', 'Coast', 'No', 0, 786, 446, 577, 331),
	array('Gold Coast', 'Coast', 'No', 0, 845, 451, 623, 337),
	array('Slave Coast', 'Coast', 'Yes', 0, 937, 496, 689, 358),
	array('Soyo', 'Coast', 'Yes', 0, 965, 538, 708, 399),
	array('East Africa', 'Land', 'No', 0, 1029, 603, 759, 453),
	array('Angola', 'Coast', 'Yes', 4, 960, 629, 710, 431),
	array('Namib Desert', 'Coast', 'No', 0, 982, 710, 717, 485),
	array('Cape of Good Hope', 'Coast', 'Yes', 3, 1012, 740, 750, 545),
	array('Greater Gulf of Guinea', 'Sea', 'No', 0, 855, 516, 619, 388),
	array('Sea of Angola', 'Sea', 'No', 0, 905, 680, 654, 443),
	array('Southern Atlantic', 'Sea', 'No', 0, 735, 595, 539, 446),
	array('Southern Ocean', 'Sea', 'No', 0, 799, 826, 639, 620),
	array('Southwestern Atlantic', 'Sea', 'No', 0, 635, 441, 472, 324),
	array('Coast of Brazil', 'Sea', 'No', 0, 564, 716, 433, 515),
	array('Drake\\\'s Passage', 'Sea', 'No', 0, 455, 827, 343, 604),
	array('Argentina', 'Coast', 'No', 0, 394, 801, 284, 614),
	array('Buenos Aires', 'Coast', 'Yes', 0, 435, 712, 324, 524),
	array('Santiago', 'Land', 'Yes', 2, 415, 659, 309, 487),
	array('Lima', 'Land', 'Yes', 2, 330, 523, 243, 391),
	array('Central Brazil', 'Land', 'No', 0, 473, 679, 351, 500),
	array('Santa Anna', 'Land', 'No', 0, 447, 630, 330, 465),
	array('Rio De Janeiro', 'Coast', 'Yes', 4, 507, 701, 381, 496),
	array('Goyaz', 'Land', 'No', 0, 482, 552, 383, 425),
	array('Bogota', 'Land', 'No', 0, 416, 480, 299, 356),
	array('Cayenne', 'Coast', 'Yes', 1, 480, 484, 353, 358),
	array('Caracas', 'Coast', 'No', 2, 407, 441, 312, 339),
	array('Surinam', 'Coast', 'Yes', 0, 455, 472, 330, 346),
	array('New Granada', 'Coast', 'No', 2, 351, 447, 281, 331),
	array('Belize', 'Coast', 'No', 2, 274, 420, 202, 309),
	array('Merida', 'Coast', 'Yes', 2, 241, 376, 178, 277),
	array('Mexico City', 'Coast', 'Yes', 2, 171, 335, 127, 246),
	array('Sierra Madre', 'Land', 'No', 2, 144, 351, 104, 253),
	array('Bel&eacute;m', 'Coast', 'No', 4, 497, 500, 366, 369),
	array('Maranh&atilde;o', 'Coast', 'Yes', 4, 540, 526, 397, 391),
	array('S&atilde;o Salvador', 'Coast', 'Yes', 4, 589, 561, 436, 411),
	array('Santa Fe', 'Coast', 'Yes', 0, 120, 254, 135, 210),
	array('Mid-Atlantic', 'Sea', 'No', 0, 527, 349, 387, 223),
	array('Bermuda', 'Coast', 'Yes', 0, 407, 276, 299, 203),
	array('Trinidad', 'Coast', 'No', 2, 452, 432, 332, 321),
	array('Barbados', 'Coast', 'No', 3, 464, 423, 341, 312),
	array('Windward Islands', 'Coast', 'Yes', 1, 449, 414, 328, 306),
	array('Antigua', 'Coast', 'No', 3, 456, 386, 336, 285),
	array('Leeward Islands', 'Coast', 'Yes', 0, 430, 377, 322, 284),
	array('Jamaica', 'Coast', 'Yes', 3, 329, 382, 242, 282),
	array('Cuba', 'Coast', 'No', 2, 320, 352, 236, 262),
	array('Bahamas', 'Coast', 'Yes', 0, 330, 328, 249, 251),
	array('Western Caribbean', 'Sea', 'No', 0, 306, 403, 224, 294),
	array('Eastern Caribbean', 'Sea', 'No', 0, 359, 405, 297, 310),
	array('Gulf of Mexico', 'Sea', 'No', 0, 235, 344, 195, 239),
	array('Florida', 'Coast', 'No', 2, 300, 318, 221, 233),
	array('Georgia', 'Coast', 'Yes', 3, 283, 270, 215, 184),
	array('Appalachian Mountains', 'Land', 'No', 1, 293, 217, 209, 166),
	array('Lousiana', 'Land', 'No', 0, 168, 221, 121, 163),
	array('New Orleans', 'Coast', 'Yes', 0, 223, 277, 161, 219),
	array('St. Louis', 'Land', 'Yes', 1, 232, 223, 172, 164),
	array('Upper Mississippi', 'Land', 'No', 1, 213, 195, 158, 137),
	array('California', 'Land', 'No', 0, 63, 264, 25, 171),
	array('Oregon', 'Land', 'Yes', 0, 65, 201, 52, 130),
	array('Detroit', 'Land', 'Yes', 0, 275, 190, 203, 145),
	array('Ontario', 'Land', 'No', 1, 279, 130, 203, 95),
	array('Pennsylvania', 'Coast', 'No', 3, 344, 180, 239, 157),
	array('New England', 'Coast', 'Yes', 3, 375, 165, 271, 127),
	array('Bermuda Triangle', 'Sea', 'No', 0, 356, 275, 284, 238),
	array('Iroquois Territory', 'Coast', 'No', 0, 322, 179, 243, 121),
	array('Nova Scotia', 'Coast', 'Yes', 0, 427, 161, 313, 120),
	array('Montreal', 'Coast', 'Yes', 1, 375, 108, 276, 82),
	array('Newfoundland', 'Coast', 'Yes', 0, 465, 124, 349, 91),
	array('East Rupert\\\'s Land', 'Coast', 'No', 3, 336, 84, 251, 57),
	array('Moose Fort', 'Coast', 'Yes', 3, 222, 112, 165, 77),
	array('West Rupert\\\'s Land', 'Land', 'No', 3, 145, 76, 106, 77),
	array('The North West', 'Coast', 'No', 3, 186, 13, 148, 21),
	array('Hudson Bay', 'Sea', 'No', 0, 300, 41, 217, 32),
	array('Western Atlantic', 'Sea', 'No', 0, 541, 192, 403, 137),
	array('Eastern Seaboard', 'Sea', 'No', 0, 418, 206, 325, 149),
	array('Falkland Islands', 'Coast', 'Yes', 0, 464, 917, 345, 674),
	array('Hispaniola', 'Coast', 'No', 0, 371, 376, 272, 277),
	array('Georgia (East Coast)', 'Coast', 'No', 3, 299, 273, 238, 184),
	array('Georgia (South Coast)', 'Coast', 'No', 3, 265, 279, 198, 209),
	array('Caribbean Atlantic', 'Sea', 'No', 0, 531, 440, 453, 296),
	array('Irish Sea', 'Sea', 'No', 0, 785, 108, 577, 80),
	array('Kongo', 'Coast', 'No', 0, 951, 520, 735, 416)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Scotland','London','Yes','Yes'),
	array('Scotland','Bristol','Yes','Yes'),
	array('Scotland','Northern Atlantic','Yes','No'),
	array('Scotland','Irish Sea','Yes','No'),
	array('London','Bristol','Yes','Yes'),
	array('London','Northern Atlantic','Yes','No'),
	array('London','English Channel','Yes','No'),
	array('Bristol','English Channel','Yes','No'),
	array('Bristol','Irish Sea','Yes','No'),
	array('Ireland','Northern Atlantic','Yes','No'),
	array('Ireland','Irish Sea','Yes','No'),
	array('Northern Atlantic','English Channel','Yes','No'),
	array('Northern Atlantic','European Atlantic','Yes','No'),
	array('Northern Atlantic','Northwestern Atlantic','Yes','No'),
	array('Northern Atlantic','Western Atlantic','Yes','No'),
	array('Northern Atlantic','Irish Sea','Yes','No'),
	array('English Channel','European Atlantic','Yes','No'),
	array('English Channel','Paris','Yes','No'),
	array('English Channel','Brest','Yes','No'),
	array('English Channel','Irish Sea','Yes','No'),
	array('European Atlantic','Brest','Yes','No'),
	array('European Atlantic','Bordeaux','Yes','No'),
	array('European Atlantic','Portugal','Yes','No'),
	array('European Atlantic','Castilla y Leon','Yes','No'),
	array('European Atlantic','Andalucia','Yes','No'),
	array('European Atlantic','Strait of Gibraltar','Yes','No'),
	array('European Atlantic','Mazagon','Yes','No'),
	array('European Atlantic','South Morocco','Yes','No'),
	array('European Atlantic','Azores Islands','Yes','No'),
	array('European Atlantic','Madeira','Yes','No'),
	array('European Atlantic','Canary Islands','Yes','No'),
	array('European Atlantic','Canaries Sea','Yes','No'),
	array('European Atlantic','Western Atlantic','Yes','No'),
	array('European Atlantic','Irish Sea','Yes','No'),
	array('Paris','Brest','Yes','Yes'),
	array('Paris','Bordeaux','No','Yes'),
	array('Paris','Marseilles','No','Yes'),
	array('Brest','Bordeaux','Yes','Yes'),
	array('Bordeaux','Marseilles','No','Yes'),
	array('Bordeaux','Catalan','No','Yes'),
	array('Bordeaux','Castilla y Leon','Yes','Yes'),
	array('Marseilles','Catalan','Yes','Yes'),
	array('Marseilles','Gulf of Lion','Yes','No'),
	array('Northwestern Atlantic','Iroquois Territory','Yes','No'),
	array('Northwestern Atlantic','Nova Scotia','Yes','No'),
	array('Northwestern Atlantic','Montreal','Yes','No'),
	array('Northwestern Atlantic','Newfoundland','Yes','No'),
	array('Northwestern Atlantic','Western Atlantic','Yes','No'),
	array('Northwestern Atlantic','Eastern Seaboard','Yes','No'),
	array('Portugal','Castilla y Leon','Yes','Yes'),
	array('Portugal','Andalucia','Yes','Yes'),
	array('Catalan','Gulf of Lion','Yes','No'),
	array('Catalan','Valencia','Yes','Yes'),
	array('Catalan','Castilla y Leon','No','Yes'),
	array('Catalan','Baeleric Sea','Yes','No'),
	array('Gulf of Lion','Ionian Sea','Yes','No'),
	array('Gulf of Lion','Tunisia','Yes','No'),
	array('Gulf of Lion','Tripoli','Yes','No'),
	array('Gulf of Lion','Baeleric Sea','Yes','No'),
	array('Valencia','Gibraltar','Yes','Yes'),
	array('Valencia','Castilla y Leon','No','Yes'),
	array('Valencia','Andalucia','No','Yes'),
	array('Valencia','Strait of Gibraltar','Yes','No'),
	array('Valencia','Baeleric Sea','Yes','No'),
	array('Ionian Sea','Tripoli','Yes','No'),
	array('Gibraltar','Andalucia','Yes','Yes'),
	array('Gibraltar','Strait of Gibraltar','Yes','No'),
	array('Castilla y Leon','Andalucia','No','Yes'),
	array('Andalucia','Strait of Gibraltar','Yes','No'),
	array('Tunisia','Tripoli','Yes','Yes'),
	array('Tunisia','Algeria','Yes','Yes'),
	array('Tunisia','Baeleric Sea','Yes','No'),
	array('Tunisia','Middle Sahara','No','Yes'),
	array('Tunisia','East Sahara','No','Yes'),
	array('Tripoli','East Sahara','No','Yes'),
	array('Algeria','North Morocco','Yes','Yes'),
	array('Algeria','Strait of Gibraltar','Yes','No'),
	array('Algeria','Baeleric Sea','Yes','No'),
	array('Algeria','Middle Sahara','No','Yes'),
	array('North Morocco','Strait of Gibraltar','Yes','No'),
	array('North Morocco','Mazagon','Yes','Yes'),
	array('North Morocco','South Morocco','No','Yes'),
	array('North Morocco','Middle Sahara','No','Yes'),
	array('Strait of Gibraltar','Baeleric Sea','Yes','No'),
	array('Strait of Gibraltar','Mazagon','Yes','No'),
	array('Mazagon','South Morocco','Yes','Yes'),
	array('South Morocco','Canary Islands','Yes','Yes'),
	array('South Morocco','West Sahara','Yes','Yes'),
	array('South Morocco','Middle Sahara','No','Yes'),
	array('Azores Islands','Canaries Sea','Yes','No'),
	array('Azores Islands','Western Atlantic','Yes','No'),
	array('Madeira','Canary Islands','Yes','Yes'),
	array('Madeira','Canaries Sea','Yes','No'),
	array('Canary Islands','West Sahara','Yes','Yes'),
	array('Canary Islands','Canaries Sea','Yes','No'),
	array('West Sahara','Middle Sahara','No','Yes'),
	array('West Sahara','Senegal','Yes','Yes'),
	array('West Sahara','Canaries Sea','Yes','No'),
	array('West Sahara','Nigrita','No','Yes'),
	array('West Sahara','Cape Verde','Yes','Yes'),
	array('Middle Sahara','East Sahara','No','Yes'),
	array('Middle Sahara','Nigrita','No','Yes'),
	array('Middle Sahara','Sudan','No','Yes'),
	array('East Sahara','Sudan','No','Yes'),
	array('Senegal','Nigrita','No','Yes'),
	array('Senegal','Cape Verde','Yes','Yes'),
	array('Senegal','Gor&eacute;e','Yes','Yes'),
	array('Senegal','Grain Coast','Yes','Yes'),
	array('Canaries Sea','Cape Verde','Yes','No'),
	array('Canaries Sea','Mid-Atlantic','Yes','No'),
	array('Canaries Sea','Western Atlantic','Yes','No'),
	array('Nigrita','Sudan','No','Yes'),
	array('Nigrita','Grain Coast','No','Yes'),
	array('Nigrita','Gold Coast','No','Yes'),
	array('Nigrita','Slave Coast','No','Yes'),
	array('Sudan','Slave Coast','No','Yes'),
	array('Sudan','East Africa','No','Yes'),
	array('Sudan','Kongo','No','Yes'),
	array('Cape Verde','Gor&eacute;e','Yes','Yes'),
	array('Cape Verde','Greater Gulf of Guinea','Yes','No'),
	array('Cape Verde','Southwestern Atlantic','Yes','No'),
	array('Cape Verde','Mid-Atlantic','Yes','No'),
	array('Cape Verde','Caribbean Atlantic','Yes','No'),
	array('Gor&eacute;e','Grain Coast','Yes','Yes'),
	array('Gor&eacute;e','Greater Gulf of Guinea','Yes','No'),
	array('Grain Coast','Gold Coast','Yes','Yes'),
	array('Grain Coast','Greater Gulf of Guinea','Yes','No'),
	array('Gold Coast','Slave Coast','Yes','Yes'),
	array('Gold Coast','Greater Gulf of Guinea','Yes','No'),
	array('Slave Coast','Greater Gulf of Guinea','Yes','No'),
	array('Slave Coast','Sea of Angola','Yes','No'),
	array('Slave Coast','Kongo','Yes','Yes'),
	array('Soyo','Angola','Yes','Yes'),
	array('Soyo','Sea of Angola','Yes','No'),
	array('Soyo','Kongo','Yes','Yes'),
	array('East Africa','Namib Desert','No','Yes'),
	array('East Africa','Cape of Good Hope','No','Yes'),
	array('East Africa','Kongo','No','Yes'),
	array('Angola','Namib Desert','Yes','Yes'),
	array('Angola','Sea of Angola','Yes','No'),
	array('Angola','Kongo','No','Yes'),
	array('Namib Desert','Cape of Good Hope','Yes','Yes'),
	array('Namib Desert','Sea of Angola','Yes','No'),
	array('Namib Desert','Southern Ocean','Yes','No'),
	array('Namib Desert','Kongo','No','Yes'),
	array('Cape of Good Hope','Southern Ocean','Yes','No'),
	array('Greater Gulf of Guinea','Sea of Angola','Yes','No'),
	array('Greater Gulf of Guinea','Southern Atlantic','Yes','No'),
	array('Greater Gulf of Guinea','Southwestern Atlantic','Yes','No'),
	array('Sea of Angola','Southern Atlantic','Yes','No'),
	array('Sea of Angola','Southern Ocean','Yes','No'),
	array('Sea of Angola','Kongo','Yes','No'),
	array('Southern Atlantic','Southern Ocean','Yes','No'),
	array('Southern Atlantic','Southwestern Atlantic','Yes','No'),
	array('Southern Atlantic','Coast of Brazil','Yes','No'),
	array('Southern Atlantic','S&atilde;o Salvador','Yes','No'),
	array('Southern Ocean','Coast of Brazil','Yes','No'),
	array('Southern Ocean','Drake\\\'s Passage','Yes','No'),
	array('Southern Ocean','Falkland Islands','Yes','No'),
	array('Southwestern Atlantic','Bel&eacute;m','Yes','No'),
	array('Southwestern Atlantic','Maranh&atilde;o','Yes','No'),
	array('Southwestern Atlantic','S&atilde;o Salvador','Yes','No'),
	array('Southwestern Atlantic','Caribbean Atlantic','Yes','No'),
	array('Coast of Brazil','Drake\\\'s Passage','Yes','No'),
	array('Coast of Brazil','Buenos Aires','Yes','No'),
	array('Coast of Brazil','Rio De Janeiro','Yes','No'),
	array('Coast of Brazil','S&atilde;o Salvador','Yes','No'),
	array('Drake\\\'s Passage','Argentina','Yes','No'),
	array('Drake\\\'s Passage','Buenos Aires','Yes','No'),
	array('Drake\\\'s Passage','Falkland Islands','Yes','No'),
	array('Argentina','Buenos Aires','Yes','Yes'),
	array('Argentina','Santiago','No','Yes'),
	array('Buenos Aires','Santiago','No','Yes'),
	array('Buenos Aires','Central Brazil','No','Yes'),
	array('Buenos Aires','Rio De Janeiro','Yes','Yes'),
	array('Santiago','Lima','No','Yes'),
	array('Santiago','Central Brazil','No','Yes'),
	array('Santiago','Santa Anna','No','Yes'),
	array('Lima','Santa Anna','No','Yes'),
	array('Lima','Bogota','No','Yes'),
	array('Lima','New Granada','No','Yes'),
	array('Central Brazil','Santa Anna','No','Yes'),
	array('Central Brazil','Rio De Janeiro','No','Yes'),
	array('Santa Anna','Rio De Janeiro','No','Yes'),
	array('Santa Anna','Goyaz','No','Yes'),
	array('Santa Anna','S&atilde;o Salvador','No','Yes'),
	array('Rio De Janeiro','S&atilde;o Salvador','Yes','Yes'),
	array('Goyaz','Cayenne','No','Yes'),
	array('Goyaz','Bel&eacute;m','No','Yes'),
	array('Goyaz','Maranh&atilde;o','No','Yes'),
	array('Goyaz','S&atilde;o Salvador','No','Yes'),
	array('Bogota','Caracas','No','Yes'),
	array('Bogota','Surinam','No','Yes'),
	array('Bogota','New Granada','No','Yes'),
	array('Cayenne','Surinam','Yes','Yes'),
	array('Cayenne','Bel&eacute;m','Yes','Yes'),
	array('Cayenne','Caribbean Atlantic','Yes','No'),
	array('Caracas','Surinam','Yes','Yes'),
	array('Caracas','New Granada','Yes','Yes'),
	array('Caracas','Trinidad','Yes','Yes'),
	array('Caracas','Windward Islands','Yes','Yes'),
	array('Caracas','Eastern Caribbean','Yes','No'),
	array('Surinam','Trinidad','Yes','Yes'),
	array('Surinam','Caribbean Atlantic','Yes','No'),
	array('New Granada','Belize','Yes','Yes'),
	array('New Granada','Western Caribbean','Yes','No'),
	array('New Granada','Eastern Caribbean','Yes','No'),
	array('Belize','Merida','Yes','Yes'),
	array('Belize','Sierra Madre','No','Yes'),
	array('Belize','Western Caribbean','Yes','No'),
	array('Merida','Mexico City','Yes','Yes'),
	array('Merida','Sierra Madre','No','Yes'),
	array('Merida','Western Caribbean','Yes','No'),
	array('Merida','Gulf of Mexico','Yes','No'),
	array('Mexico City','Sierra Madre','No','Yes'),
	array('Mexico City','Santa Fe','Yes','Yes'),
	array('Mexico City','Gulf of Mexico','Yes','No'),
	array('Sierra Madre','Santa Fe','No','Yes'),
	array('Sierra Madre','California','No','Yes'),
	array('Bel&eacute;m','Maranh&atilde;o','Yes','Yes'),
	array('Bel&eacute;m','Caribbean Atlantic','Yes','No'),
	array('Maranh&atilde;o','S&atilde;o Salvador','Yes','Yes'),
	array('Santa Fe','Gulf of Mexico','Yes','No'),
	array('Santa Fe','Lousiana','No','Yes'),
	array('Santa Fe','New Orleans','Yes','Yes'),
	array('Santa Fe','California','No','Yes'),
	array('Mid-Atlantic','Bermuda','Yes','No'),
	array('Mid-Atlantic','Antigua','Yes','No'),
	array('Mid-Atlantic','Leeward Islands','Yes','No'),
	array('Mid-Atlantic','Bermuda Triangle','Yes','No'),
	array('Mid-Atlantic','Western Atlantic','Yes','No'),
	array('Mid-Atlantic','Caribbean Atlantic','Yes','No'),
	array('Bermuda','Bermuda Triangle','Yes','No'),
	array('Bermuda','Western Atlantic','Yes','No'),
	array('Bermuda','Eastern Seaboard','Yes','No'),
	array('Trinidad','Barbados','Yes','Yes'),
	array('Trinidad','Windward Islands','Yes','Yes'),
	array('Trinidad','Eastern Caribbean','Yes','No'),
	array('Trinidad','Caribbean Atlantic','Yes','No'),
	array('Barbados','Windward Islands','Yes','Yes'),
	array('Barbados','Caribbean Atlantic','Yes','No'),
	array('Windward Islands','Antigua','Yes','Yes'),
	array('Windward Islands','Leeward Islands','Yes','Yes'),
	array('Windward Islands','Eastern Caribbean','Yes','No'),
	array('Windward Islands','Caribbean Atlantic','Yes','No'),
	array('Antigua','Leeward Islands','Yes','Yes'),
	array('Antigua','Caribbean Atlantic','Yes','No'),
	array('Leeward Islands','Eastern Caribbean','Yes','No'),
	array('Leeward Islands','Bermuda Triangle','Yes','No'),
	array('Leeward Islands','Hispaniola','Yes','Yes'),
	array('Jamaica','Cuba','Yes','Yes'),
	array('Jamaica','Western Caribbean','Yes','No'),
	array('Jamaica','Eastern Caribbean','Yes','No'),
	array('Jamaica','Bermuda Triangle','Yes','No'),
	array('Jamaica','Hispaniola','Yes','Yes'),
	array('Cuba','Bahamas','Yes','Yes'),
	array('Cuba','Western Caribbean','Yes','No'),
	array('Cuba','Gulf of Mexico','Yes','No'),
	array('Cuba','Florida','Yes','Yes'),
	array('Cuba','Bermuda Triangle','Yes','No'),
	array('Bahamas','Gulf of Mexico','Yes','No'),
	array('Bahamas','Florida','Yes','Yes'),
	array('Bahamas','Bermuda Triangle','Yes','No'),
	array('Western Caribbean','Eastern Caribbean','Yes','No'),
	array('Western Caribbean','Gulf of Mexico','Yes','No'),
	array('Eastern Caribbean','Hispaniola','Yes','No'),
	array('Gulf of Mexico','Florida','Yes','No'),
	array('Gulf of Mexico','New Orleans','Yes','No'),
	array('Gulf of Mexico','Georgia (South Coast)','Yes','No'),
	array('Florida','Georgia','No','Yes'),
	array('Florida','Bermuda Triangle','Yes','No'),
	array('Florida','Georgia (East Coast)','Yes','No'),
	array('Florida','Georgia (South Coast)','Yes','No'),
	array('Georgia','Appalachian Mountains','No','Yes'),
	array('Georgia','New Orleans','No','Yes'),
	array('Georgia','Pennsylvania','No','Yes'),
	array('Appalachian Mountains','New Orleans','No','Yes'),
	array('Appalachian Mountains','St. Louis','No','Yes'),
	array('Appalachian Mountains','Detroit','No','Yes'),
	array('Appalachian Mountains','Pennsylvania','No','Yes'),
	array('Appalachian Mountains','Iroquois Territory','No','Yes'),
	array('Lousiana','New Orleans','No','Yes'),
	array('Lousiana','St. Louis','No','Yes'),
	array('Lousiana','Upper Mississippi','No','Yes'),
	array('Lousiana','California','No','Yes'),
	array('Lousiana','Oregon','No','Yes'),
	array('Lousiana','West Rupert\\\'s Land','No','Yes'),
	array('New Orleans','St. Louis','No','Yes'),
	array('New Orleans','Georgia (South Coast)','Yes','No'),
	array('St. Louis','Upper Mississippi','No','Yes'),
	array('St. Louis','Detroit','No','Yes'),
	array('Upper Mississippi','Detroit','No','Yes'),
	array('Upper Mississippi','Ontario','No','Yes'),
	array('Upper Mississippi','West Rupert\\\'s Land','No','Yes'),
	array('California','Oregon','No','Yes'),
	array('Oregon','West Rupert\\\'s Land','No','Yes'),
	array('Detroit','Ontario','No','Yes'),
	array('Detroit','Iroquois Territory','No','Yes'),
	array('Ontario','Iroquois Territory','No','Yes'),
	array('Ontario','Montreal','No','Yes'),
	array('Ontario','East Rupert\\\'s Land','No','Yes'),
	array('Ontario','Moose Fort','No','Yes'),
	array('Ontario','West Rupert\\\'s Land','No','Yes'),
	array('Pennsylvania','New England','Yes','Yes'),
	array('Pennsylvania','Iroquois Territory','No','Yes'),
	array('Pennsylvania','Eastern Seaboard','Yes','No'),
	array('Pennsylvania','Georgia (East Coast)','Yes','No'),
	array('New England','Iroquois Territory','No','Yes'),
	array('New England','Nova Scotia','Yes','Yes'),
	array('New England','Eastern Seaboard','Yes','No'),
	array('Bermuda Triangle','Eastern Seaboard','Yes','No'),
	array('Bermuda Triangle','Hispaniola','Yes','No'),
	array('Bermuda Triangle','Georgia (East Coast)','Yes','No'),
	array('Iroquois Territory','Nova Scotia','Yes','Yes'),
	array('Iroquois Territory','Montreal','Yes','Yes'),
	array('Nova Scotia','Eastern Seaboard','Yes','No'),
	array('Montreal','Newfoundland','Yes','Yes'),
	array('Montreal','East Rupert\\\'s Land','Yes','Yes'),
	array('Newfoundland','Western Atlantic','Yes','No'),
	array('Newfoundland','Eastern Seaboard','Yes','No'),
	array('East Rupert\\\'s Land','Moose Fort','Yes','Yes'),
	array('East Rupert\\\'s Land','Hudson Bay','Yes','No'),
	array('Moose Fort','West Rupert\\\'s Land','No','Yes'),
	array('Moose Fort','The North West','Yes','Yes'),
	array('Moose Fort','Hudson Bay','Yes','No'),
	array('West Rupert\\\'s Land','The North West','No','Yes'),
	array('The North West','Hudson Bay','Yes','No'),
	array('Western Atlantic','Eastern Seaboard','Yes','No'),
	array('Eastern Seaboard','Georgia (East Coast)','Yes','No')
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
