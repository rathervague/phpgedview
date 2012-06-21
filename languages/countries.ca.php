<?php
/**
 * see http://unstats.un.org/unsd/methods/m49/m49alpha.htm
 * see http://www.foreignword.com/countries/  for a comprehensive list, with translations
 * see http://susning.nu/Landskod  (list #7) for another list, taken from ISO standards
 * see http://helpdesk.rootsweb.com/codes for a comprehensive list of Chapman codes.
 * see http://www.rootsweb.com/~wlsgfhs/ChapmanCodes.htm for another list of Chapman codes
 *
 * The list that follows is the list of Chapman country codes, with additions from the
 * other sources mentioned above.
 *
 * These codes do not appear in the two Chapman lists cited:
 *		ALA		Åland Islands
 *		COD		Congo (Brazzaville)		This country was known as Zaire
 *		NFK		Norfolk Island
 *		PRI		Puerto Rico				Chapman lists this as a state of the USA
 *		SCG		Serbia and Montenegro	Chapman lists these separately
 *		TLS		Timor-Leste
 *		UMI		US Minor Outlying Islands
 *		VIR		US Virgin Islands		Chapman lists this as a state of the USA
 *
 * These Chapman country codes do not appear in the list following:
 *		UEL		United Empire Loyalist		This is NOT a country or region, it's
 *											a group of people
 *		UK		United Kingdom				This is the only two-letter country code,
 *											and GBR or one of its components should be
 *											used instead.
 *		SLK		Slovakia					This code, listed in the last source cited,
 *											should be SVK
 *		SLO		Slovenia					This code, listed in the last source cited,
 *											should be SVN
 *		SAM		South America				This code, listed in the last source cited,
 *											is not precise enough
 *		TMP		East Timor					Official name is TLS "Timor-Leste"
 *		HOL		Holland						Official name is NLD "Netherlands"
 *		ESM		Western Samoa				Official name is WSM "Samoa"
 *
 * @package PhpGedView
 * @author Antoni Planas i Vilà
 * @created 2006-12-16
 * @version $Id: countries.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$countries["ABW"]="Aruba";
$countries["ACA"]="Arcàdia";
$countries["AFG"]="Afganistan";
$countries["AGO"]="Angola";
$countries["AIA"]="Anguilla";
$countries["ALA"]="Illes Åland";
$countries["ALB"]="Albània";
$countries["AND"]="Andorra";
$countries["ANT"]="Antilles Holandeses";
$countries["ARE"]="Emirats Àrabs Units";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armènia";
$countries["ASM"]="Samoa";
$countries["ATA"]="Antàrtida";
$countries["ATF"]="Terres Australs i Antàrtiques Franceses";
$countries["ATG"]="Antigua i Barbuda";
$countries["AUS"]="Austràlia";
$countries["AUT"]="Austria";
$countries["AZR"]="Azores";
$countries["AZE"]="Azerbaidjan";
$countries["BDI"]="Burundi";
$countries["BEL"]="Bèlgica";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangla Desh";
$countries["BGR"]="Bulgària";
$countries["BHR"]="Bahrein";
$countries["BHS"]="Bahames";
$countries["BIH"]="Bòsnia i Herzegovina";
$countries["BLR"]="Bielorússia";
$countries["BLZ"]="Belize";
$countries["BMU"]="Bermudes";
$countries["BOL"]="Bolívia";
$countries["BRA"]="Brasil";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunei";
$countries["BTN"]="Bhutan";
$countries["BVT"]="Bouvet";
$countries["BWA"]="Botswana";
$countries["BWI"]="Antilles britàniques";
$countries["CAF"]="República Centreafricana";
$countries["CAN"]="Canadà";
$countries["CAP"]="Colònia del Cap";
$countries["CAT"]="Catalunya";
$countries["CCK"]="Illes Cocos (Keeling)";
$countries["CHE"]="Suïssa";
$countries["CHI"]="Illes Anglonormandes";
$countries["CHL"]="Xile";
$countries["CHN"]="Xina";
$countries["CIV"]="Costa d'Ivori";
$countries["CMR"]="Camerun";
$countries["COD"]="Congo (Kinshasa)";
$countries["COG"]="Congo (Brazzaville)";
$countries["COK"]="Illes Cook";
$countries["COL"]="Colòmbia";
$countries["COM"]="Comores";
$countries["CPV"]="Cap Verd";
$countries["CRI"]="Costa Rica";
$countries["CSK"]="Txecoslovàquia";
$countries["CUB"]="Cuba";
$countries["CXR"]="Illa Christmas";
$countries["CYM"]="Illes Caiman";
$countries["CYP"]="Xipre";
$countries["CZE"]="República Txeca";
$countries["DEU"]="Alemanya";
$countries["DJI"]="Djibouti";
$countries["DMA"]="Dominica";
$countries["DNK"]="Dinamarca";
$countries["DOM"]="República Dominicana";
$countries["DZA"]="Algèria";
$countries["ECU"]="Ecuador";
$countries["EGY"]="Egipte";
$countries["EIR"]="Irlanda";
$countries["ENG"]="Anglaterra";
$countries["ERI"]="Eritrea";
$countries["ESH"]="Sàhara Occidental";
$countries["ESP"]="Espanya";
$countries["EST"]="Estònia";
$countries["ETH"]="Etiòpia";
$countries["FIN"]="Finlàndia";
$countries["FJI"]="Fiji";
$countries["FLD"]="Flandes";
$countries["FLK"]="Illes Malvines";
$countries["FRA"]="França";
$countries["FRO"]="Illes Fèroe";
$countries["FSM"]="Micronèsia";
$countries["GAB"]="Gabon";
$countries["GBR"]="Regne Unit";
$countries["GEO"]="Geòrgia";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guinea";
$countries["GLP"]="Guadalupe";
$countries["GMB"]="Gàmbia";
$countries["GNB"]="Guinea Bissau";
$countries["GNQ"]="Guinea Equatorial";
$countries["GRC"]="Grècia";
$countries["GRD"]="Granada";
$countries["GRL"]="Groenlàndia";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Guaiana Francesa";
$countries["GUM"]="Guam";
$countries["GUY"]="Guaiana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Illes Heard i McDonald";
$countries["HND"]="Hondures";
$countries["HRV"]="Croàcia";
$countries["HTI"]="Haití";
$countries["HUN"]="Hongria";
$countries["IDN"]="Indonèsia";
$countries["IND"]="India";
$countries["IOT"]="Territori Britànic de l'Oceà Índic";
$countries["IRL"]="Irlanda";
$countries["IRN"]="Iran";
$countries["IRQ"]="Iraq";
$countries["ISL"]="Islàndia";
$countries["ISR"]="Israel";
$countries["ITA"]="Italia";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Jordània";
$countries["JPN"]="Japan";
$countries["KAZ"]="Kazakhstan";
$countries["KEN"]="Kenya";
$countries["KGZ"]="Kirguizistan";
$countries["KHM"]="Cambodja";
$countries["KIR"]="Kiribati";
$countries["KNA"]="Sant Cirstòfol i Neus";
$countries["KOR"]="República de Corea";
$countries["KWT"]="Kuwait";
$countries["LAO"]="Laos";
$countries["LBN"]="Líban";
$countries["LBR"]="Libèria";
$countries["LBY"]="Líbia";
$countries["LCA"]="Saint Lucia";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesotho";
$countries["LTU"]="Lituània";
$countries["LUX"]="Luxemburg";
$countries["LVA"]="Latònia";
$countries["MAC"]="Macau";
$countries["MAR"]="Marroc";
$countries["MCO"]="Mònaco";
$countries["MDA"]="República de Moldàvia";
$countries["MDG"]="Madagascar";
$countries["MDV"]="Maldives";
$countries["MEX"]="Mèxic";
$countries["MHL"]="Illes Marshall";
$countries["MKD"]="Macedònia";
$countries["MLI"]="Mali";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar";
$countries["MNG"]="Mongòlia";
$countries["MNP"]="Illes Mariannes Septentrionals";
$countries["MNT"]="Montenegro";
$countries["MOZ"]="Moçambic";
$countries["MRT"]="Mauritània";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinica";
$countries["MUS"]="Maurici";
$countries["MWI"]="Malawi";
$countries["MYS"]="Malàisia";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namíbia";
$countries["NCL"]="Nova Caledònia";
$countries["NER"]="Níger";
$countries["NFK"]="Illa Norfolk";
$countries["NGA"]="Nigèria";
$countries["NIC"]="Nicaragua";
$countries["NIR"]="Irlanda del Nord";
$countries["NIU"]="Niue";
$countries["NLD"]="Holanda";
$countries["NOR"]="Noruega";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Zona Neutral";
$countries["NZL"]="Nova Zelanda";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panamà";
$countries["PCN"]="Pitcairn";
$countries["PER"]="Perú";
$countries["PHL"]="Filipines";
$countries["PLW"]="Illes Palau";
$countries["PNG"]="Papua Nova Guinea";
$countries["POL"]="Polònia";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Corea del Nord";
$countries["PRT"]="Portugal";
$countries["PRY"]="Paraguai";
$countries["PSE"]="Palestina";
$countries["PYF"]="Polinèsia Francesa";
$countries["QAT"]="Qatar";
$countries["REU"]="Illa de la Reunió";
$countries["ROM"]="Romania";
$countries["RUS"]="Rússia";
$countries["RWA"]="Rwanda";
$countries["SAU"]="Aràbia Saudita";
$countries["SCG"]="Sèrbia i Montenegro";
$countries["SCT"]="Escòcia";
$countries["SDN"]="Sudan";
$countries["SEA"]="Al Mar";
$countries["SEN"]="Senegal";
$countries["SER"]="Sèrbia";
$countries["SGP"]="Singapur";
$countries["SGS"]="Illes Geòrgia del Sud i Sandwich del Sud";
$countries["SHN"]="Santa Helena";
$countries["SIC"]="Sicília";
$countries["SJM"]="Illes Svalbard i Jan Mayen";
$countries["SLB"]="Illes Salomó";
$countries["SLE"]="Sierra Leone";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somàlia";
$countries["SPM"]="Saint Pierre i Miquelon";
$countries["STP"]="São Tomé i Príncipe";
$countries["SUN"]="U.S.S.R. (Unió Soviètica)";
$countries["SUR"]="Surinam";
$countries["SVK"]="Eslovàquia";
$countries["SVN"]="Eslovènia";
$countries["SWE"]="Suècia";
$countries["SWZ"]="Swazilàndia";
$countries["SYC"]="Seychelles";
$countries["SYR"]="Síria";
$countries["TCA"]="Illes Turks i Caicos";
$countries["TCD"]="Txad";
$countries["TGO"]="Togo";
$countries["THA"]="Thailàndia";
$countries["TJK"]="Tadjikistan";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistan";
$countries["TLS"]="Timor Oriental";
$countries["TON"]="Tonga";
$countries["TRN"]="Transilvània";
$countries["TTO"]="Trinitat i Tobago";
$countries["TUN"]="Tunísia";
$countries["TUR"]="Turquia";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzània";
$countries["UGA"]="Uganda";
$countries["UKR"]="Ucraïna";
$countries["UMI"]="Illes Perifèriques Menors dels EUA";
$countries["URY"]="Uruguai";
$countries["USA"]="USA";
$countries["UZB"]="Uzbekistan";
$countries["VAT"]="Ciutat del Vaticà";
$countries["VCT"]="Saint Vincent i les Grenadines";
$countries["VEN"]="Veneçuela";
$countries["VGB"]="Illes Verges Britàniques";
$countries["VIR"]="Illes Verges Nord-americanes";
$countries["VNM"]="Vietnam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="Àfrica Occidental";
$countries["WLF"]="Wallis i Futuna";
$countries["WLS"]="Gal·les";
$countries["WSM"]="Samoa";
$countries["YEM"]="Iemen";
$countries["YUG"]="Iugoslàvia";
$countries["ZAF"]="Sud-àfrica";
$countries["ZAR"]="Zaire";
$countries["ZMB"]="Zàmbia";
$countries["ZWE"]="Zimbabwe";
$countries["???"]="Desconegut";

$countries["IOM"]="Illa de Man";
?>
