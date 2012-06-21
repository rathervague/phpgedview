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
 *		CAT		Catalonia
 *		COD		Congo (Brazzaville)		This country was known as Zaire
 *		IOM		Isle of Man				Chapman lists this as part of the UK -- it's not!!
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
 * @subpackage Languages
 * @last change Jans Luder 25 march 2010
 * @version $Id: countries.nl.php 6978 2010-09-03 21:40:15Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$countries["ABW"]="Aruba";
$countries["ACA"]="Acadia";
$countries["AFG"]="Afghanistan";
$countries["AGO"]="Angola";
$countries["AIA"]="Anguilla";
$countries["ALA"]="Åland eilanden";
$countries["ALB"]="Albanië";
$countries["AND"]="Andorra";
$countries["ANT"]="Nederlandse Antillen";
$countries["ARE"]="Verenigde Arabische Emiraten";
$countries["ARG"]="Argentinië";
$countries["ARM"]="Armenië";
$countries["ASM"]="Amerikaans-Samoa";
$countries["ATA"]="Antarctica";
$countries["ATF"]="Franse Zuidelijke Gebieden";
$countries["ATG"]="Antigua en Barbuda";
$countries["AUS"]="Australië";
$countries["AUT"]="Oostenrijk";
$countries["AZR"]="Azoren";
$countries["AZE"]="Azerbeidzjan";
$countries["BDI"]="Burundi";
$countries["BEL"]="België";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangladesh";
$countries["BGR"]="Bulgarije";
$countries["BHR"]="Bahrein";
$countries["BHS"]="Bahama's";
$countries["BIH"]="Bosnië-Herzegovina";
$countries["BLR"]="Belarus";
$countries["BLZ"]="Belize";
$countries["BMU"]="Bermuda";
$countries["BOL"]="Bolivia";
$countries["BRA"]="Brazilië";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunei Darussalam";
$countries["BTN"]="Bhutan";
$countries["BVT"]="Bouvet Eiland";
$countries["BWA"]="Botswana";
$countries["BWI"]="Brits West Indië";
$countries["CAF"]="Centraal-Afrikaanse Republiek";
$countries["CAN"]="Canada";
$countries["CAP"]="Cape Colony";
$countries["CAT"]="Catalonië";
$countries["CCK"]="Cocos (Keeling) Eilanden";
$countries["CHE"]="Zwitzerland";
$countries["CHI"]="Kanaal Eilanden";
$countries["CHL"]="Chili";
$countries["CHN"]="China";
$countries["CIV"]="Côte d'Ivoire";
$countries["CMR"]="Kameroen";
$countries["COD"]="Congo-Kinshasa";
$countries["COG"]="Congo-Brazzaville";
$countries["COK"]="Cook Eilanden";
$countries["COL"]="Colombia";
$countries["COM"]="Comoren";
$countries["CPV"]="Kaapverdië";
$countries["CRI"]="Costa Rica";
$countries["CUB"]="Cuba";
$countries["CSK"]="Tjechoslowakije";
$countries["CXR"]="Christmaseiland";
$countries["CYM"]="Kaaiman eilanden";
$countries["CYP"]="Cyprus";
$countries["CZE"]="Tsjechië";
$countries["DEU"]="Duitsland";
$countries["DJI"]="Djibouti";
$countries["DMA"]="Dominica";
$countries["DNK"]="Denemarken";
$countries["DOM"]="Dominicaanse Republiek";
$countries["DZA"]="Algerije";
$countries["ECU"]="Ecuador";
$countries["EGY"]="Egypte";
$countries["EIR"]="Eire";
$countries["ENG"]="Engeland";
$countries["ERI"]="Eritrea";
$countries["ESH"]="Westelijke Sahara";
$countries["ESP"]="Spanje";
$countries["EST"]="Estland";
$countries["ETH"]="Ethiopië";
$countries["FIN"]="Finland";
$countries["FJI"]="Fiji";
$countries["FLD"]="Flanders";
$countries["FLK"]="Falkland Eilanden";
$countries["FRA"]="Frankrijk";
$countries["FRO"]="Faeröer Eilanden";
$countries["FSM"]="Micronesië";
$countries["GAB"]="Gabon";
$countries["GBR"]="Verenigd Koninkrijk";
$countries["GEO"]="Georgië";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guinee";
$countries["GLP"]="Guadeloupe";
$countries["GMB"]="Gambia";
$countries["GNB"]="Guinee-Bissau";
$countries["GNQ"]="Equatoriaal-Guinea";
$countries["GRC"]="Griekenland";
$countries["GRD"]="Grenada";
$countries["GRL"]="Groenland";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Frans Guyana";
$countries["GUM"]="Guam";
$countries["GUY"]="Guyana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Heard en McDonald Eilanden";
$countries["HND"]="Honduras";
$countries["HRV"]="Kroatië";
$countries["HTI"]="Haiti";
$countries["HUN"]="Hongarije";
$countries["IDN"]="Indonesië";
$countries["IND"]="India";
$countries["IOM"]="Eiland Man";
$countries["IOT"]="Brits Territorium in de Indische Oceaan";
$countries["IRL"]="Ierland";
$countries["IRN"]="Iran";
$countries["IRQ"]="Irak";
$countries["ISL"]="IJsland";
$countries["ISR"]="Israël";
$countries["ITA"]="Italië";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Jordanië";
$countries["JPN"]="Japan";
$countries["KAZ"]="Kazachstan";
$countries["KEN"]="Kenia";
$countries["KGZ"]="Kirgizstan";
$countries["KHM"]="Cambodja";
$countries["KIR"]="Kiribati";
$countries["KNA"]="Saint Kitts en Nevis";
$countries["KOR"]="Korea";
$countries["KWT"]="Koeweit";
$countries["LAO"]="Laos";
$countries["LBN"]="Libanon";
$countries["LBR"]="Liberia";
$countries["LBY"]="Libië";
$countries["LCA"]="Saint Lucia";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesotho";
$countries["LTU"]="Litouwen";
$countries["LUX"]="Luxemburg";
$countries["LVA"]="Letland";
$countries["MAC"]="Macau";
$countries["MAR"]="Marokko";
$countries["MCO"]="Monaco";
$countries["MDA"]="Moldavië";
$countries["MDG"]="Madagascar";
$countries["MDV"]="Maldiven";
$countries["MEX"]="Mexico";
$countries["MHL"]="Marshall Eilanden";
$countries["MKD"]="Macedonië";
$countries["MLI"]="Mali";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar";
$countries["MNG"]="Mongolië";
$countries["MNP"]="Noordelijke Mariana-eilanden";
$countries["MNT"]="Montenegro";
$countries["MOZ"]="Mozambique";
$countries["MRT"]="Mauritanië";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinique";
$countries["MUS"]="Mauritius";
$countries["MWI"]="Malawi";
$countries["MYS"]="Maleisië";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namibië";
$countries["NCL"]="Nieuw Caledonië";
$countries["NER"]="Niger";
$countries["NFK"]="Norfolk Eiland";
$countries["NGA"]="Nigeria";
$countries["NIC"]="Nicaragua";
$countries["NIR"]="Noord Ierland";
$countries["NIU"]="Niue";
$countries["NLD"]="Nederland";
$countries["NOR"]="Noorwegen";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Neutrale Zone";
$countries["NZL"]="Nieuw-Zeeland";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panama";
$countries["PCN"]="Pitcairn";
$countries["PER"]="Peru";
$countries["PHL"]="Fillipijnen";
$countries["PLW"]="Palau";
$countries["PNG"]="Papoea-Nieuw-Guinea";
$countries["POL"]="Polen";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Democratische Volksrepubliek Korea";
$countries["PRT"]="Portugal";
$countries["PRY"]="Paraguay";
$countries["PSE"]="Bezet Palesteins gebied";
$countries["PYF"]="Frans Polynesië";
$countries["QAT"]="Qatar";
$countries["REU"]="Réunion";
$countries["ROM"]="Roemenië";
$countries["RUS"]="Rusland";
$countries["RWA"]="Rwanda";
$countries["SAU"]="Saudi-Arabië";
$countries["SCG"]="Servië en Montenegro";
$countries["SCT"]="Schotland";
$countries["SDN"]="Soedan";
$countries["SEA"]="Op zee";
$countries["SEN"]="Senegal";
$countries["SER"]="Servië";
$countries["SGP"]="Singapore";
$countries["SGS"]="Zuid-Georgië en de Zuidelijke Sandwicheilanden";
$countries["SHN"]="Saint Helena";
$countries["SIC"]="Sicilië";
$countries["SJM"]="Svalbard en Jan Mayen Eilanden";
$countries["SLB"]="Salomon Eilanden";
$countries["SLE"]="Sierra Leone";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somalië";
$countries["SPM"]="Saint Pierre en Miquelon";
$countries["STP"]="São Tomé en Príncipe";
$countries["SUN"]="USSR";
$countries["SUR"]="Suriname";
$countries["SVK"]="Slovakije";
$countries["SVN"]="Slovenië";
$countries["SWE"]="Zweden";
$countries["SWZ"]="Swaziland";
$countries["SYC"]="Seychellen";
$countries["SYR"]="Syrië";
$countries["TCA"]="Turks en Caicos Eilanden";
$countries["TCD"]="Tsjaad";
$countries["TGO"]="Togo";
$countries["THA"]="Thailand";
$countries["TJK"]="Tadzjikistan";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistan";
$countries["TLS"]="Timor-Leste";
$countries["TON"]="Tonga";
$countries["TRN"]="Transylvanië";
$countries["TTO"]="Trinidad en Tobago";
$countries["TUN"]="Tunesië";
$countries["TUR"]="Turkije";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzania";
$countries["UGA"]="Oeganda";
$countries["UKR"]="Oekraïne";
$countries["UMI"]="Kleine Pacifische eilanden van de Verenigde Staten";
$countries["URY"]="Uruguay";
$countries["USA"]="USA";
$countries["UZB"]="Oezbekistan";
$countries["VAT"]="Vaticaanstad";
$countries["VCT"]="Saint Vincent en de Grenadines";
$countries["VEN"]="Venezuela";
$countries["VGB"]="Britse Maagdeneilanden";
$countries["VIR"]="Maagdeneilanden";
$countries["VNM"]="Viet Nam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="West Africa";
$countries["WLF"]="Wallis en Futuna-eilanden";
$countries["WLS"]="Wales";
$countries["WSM"]="Samoa";
$countries["YEM"]="Jemen";
$countries["YUG"]="Joegoslavië";
$countries["ZAF"]="Zuid Afrika";
$countries["ZAR"]="Zaïre";
$countries["ZMB"]="Zambia";
$countries["ZWE"]="Zimbabwe";
$countries["???"]="Onbekend";

/*
 * The following table lists alternate names for various Chapman codes.
 * It will be used when country names have to be converted to Chapman codes.
 * You do not have to list all the possibilities in all page languages.  This
 * will be done automatically by the country-to-Chapman conversion routine.
 *
 * Because the list, and its contents, are specific to each language, the 
 * Translator Tool won't let you work on the list directly.  The list will
 * have to be updated and amended manually.
 *
 * Suppose Chapman code "XYZ" represents the same country, and that country 
 * had the names "Name1", "Name2", "Name3" in its history.  It is now known
 * as "Current name".  You can list the various names like this:
 *
 * $countries["XYZ"]="Current name";
 * $altCountryNames["XYZ"]="Name1; Name2; Name3";
 *
 * The Chapman-to-country conversion will always use the $countries list of
 * the current page language, no matter what the original country name was.
 * 
 */
$altCountryNames["CIV"]="Ivoorkust";
$altCountryNames["COD"]="Zaire; Democratische Republiek Congo";
$altCountryNames["DEU"]="Oost Duitsland; West Duitsland; GDR; FRG";
$altCountryNames["FLK"]="Malvinas";
$altCountryNames["GBR"]="Groot Brittanië";
$altCountryNames["LKA"]="Ceylon";
$altCountryNames["MAC"]="Macao";
$altCountryNames["MMR"]="Birma";
$altCountryNames["PLW"]="Belau";
$altCountryNames["SUN"]="Soviet Unie";
$altCountryNames["TLS"]="Oost Timor";
$altCountryNames["USA"]="Verenigde Staten van Amerika";
$altCountryNames["VAT"]="Heilige Stoel";
$altCountryNames["VNM"]="Vietnam";
$altCountryNames["WSM"]="West Samoa";

?>
