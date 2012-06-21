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
 *					a group of people
 *		UK		United Kingdom				This is the only two-letter country code,
 *					and GBR or one of its components should be
 *			   	used instead.
 *		SLK		Slovakia					This code, listed in the last source cited,
 *				  should be SVK
 *		SLO		Slovenia					This code, listed in the last source cited,
 *					should be SVN
 *		SAM		South America				This code, listed in the last source cited,
 *					is not precise enough
 *		TMP		East Timor					Official name is TLS "Timor-Leste"
 *		HOL		Holland						Official name is NLD "Netherlands"
 *		ESM		Western Samoa				Official name is WSM "Samoa"
 *
 * @author hbc1971
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: countries.da.php 6911 2010-02-03 13:20:29Z hylle $
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
$countries["ALA"]="Åland";
$countries["ALB"]="Albanien";
$countries["AND"]="Andorra";
$countries["ANT"]="De Nederlandske Antiller";
$countries["ARE"]="De Forenede Arabiske Emirater";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armenien";
$countries["ASM"]="Amerikansk Samoa";
$countries["ATA"]="Antarktis";
$countries["ATF"]="Sydlige Franske Territorier";
$countries["ATG"]="Antigua og Barbuda";
$countries["AUS"]="Australien";
$countries["AUT"]="Østrig";
$countries["AZR"]="Azorerne";
$countries["AZE"]="Aserbajdsjan";
$countries["BDI"]="Burundi";
$countries["BEL"]="Belgien";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangladesh";
$countries["BGR"]="Bulgarien";
$countries["BHR"]="Bahrein";
$countries["BHS"]="Bahamas";
$countries["BIH"]="Bosnien-Hercegovina";
$countries["BLR"]="Hviderusland";
$countries["BLZ"]="Belize";
$countries["BMU"]="Bermuda";
$countries["BOL"]="Bolivia";
$countries["BRA"]="Brasilien";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunei";
$countries["BTN"]="Bhutan";
$countries["BVT"]="Bouvetøen";
$countries["BWA"]="Botswana";
$countries["BWI"]="Britisk Vestindien";
$countries["CAF"]="Centralafrikanske Republik";
$countries["CAN"]="Canada";
$countries["CAP"]="Cape Colony";
$countries["CCK"]="Kokosøerne";
$countries["CHE"]="Svejts";
$countries["CHI"]="Kanaløerne";
$countries["CHL"]="Chile";
$countries["CHN"]="Kina";
$countries["CIV"]="Elfenbenskysten";
$countries["CMR"]="Cameroun";
$countries["COD"]="Congo (Den Demokratiske Republik)";
$countries["COG"]="Congo";
$countries["COK"]="Cookøerne";
$countries["COL"]="Colombia";
$countries["COM"]="Comorerne";
$countries["CPV"]="Kap Verde";
$countries["CRI"]="Costa Rica";
$countries["CSK"]="Tjekkoslovakiet";
$countries["CUB"]="Cuba";
$countries["CXR"]="Juleøen";
$countries["CYM"]="Caymanøerne";
$countries["CYP"]="Cypern";
$countries["CZE"]="Tjekkiet";
$countries["DEU"]="Tyskland";
$countries["DJI"]="Djibouti";
$countries["DMA"]="Dominica";
$countries["DNK"]="Danmark";
$countries["DOM"]="Den Dominikanske Republik";
$countries["DZA"]="Algeriet";
$countries["ECU"]="Ecuador";
$countries["EGY"]="Ægypten";
$countries["EIR"]="Irland";
$countries["ENG"]="England";
$countries["ERI"]="Eritrea";
$countries["ESH"]="Vestsahara";
$countries["ESP"]="Spanien";
$countries["EST"]="Estland";
$countries["ETH"]="Etiopien";
$countries["FIN"]="Finland";
$countries["FJI"]="Fiji";
$countries["FLD"]="Flandern";
$countries["FLK"]="Falklandsøerne";
$countries["FRA"]="Frankrig";
$countries["FRO"]="Færøerne";
$countries["FSM"]="Mikronesien";
$countries["GAB"]="Gabon";
$countries["GBR"]="Storbritannien";
$countries["GEO"]="Georgien";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guinea";
$countries["GLP"]="Guadeloupe";
$countries["GMB"]="Gambia";
$countries["GNB"]="Guinea-Bissau";
$countries["GNQ"]="Ækvatorial Guinea";
$countries["GRC"]="Grækenland";
$countries["GRD"]="Grenada";
$countries["GRL"]="Grønland";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Fransk Guyana";
$countries["GUM"]="Guam";
$countries["GUY"]="Guyana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Heard Island and McDonald Island";
$countries["HND"]="Honduras";
$countries["HRV"]="Kroatien";
$countries["HTI"]="Haiti";
$countries["HUN"]="Ungarn";
$countries["IDN"]="Indonesien";
$countries["IND"]="Indien";
$countries["IOT"]="Det Britiske territorium i Det indiske Ocean";
$countries["IRN"]="Iran";
$countries["IRQ"]="Irak";
$countries["IRL"]="Irland";
$countries["ISL"]="Island";
$countries["ISR"]="Israel";
$countries["ITA"]="Italien";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Jordan";
$countries["JPN"]="Japan";
$countries["KAZ"]="Kasakhstan";
$countries["KEN"]="Kenya";
$countries["KGZ"]="Kirgisistan";
$countries["KHM"]="Cambodja";
$countries["KIR"]="Kiribati";
$countries["KNA"]="Sankt Kitts og Nevis";
$countries["KOR"]="Sydkorea";
$countries["KWT"]="Kuwait";
$countries["LAO"]="Laos";
$countries["LBN"]="Libanon";
$countries["LBR"]="Liberia";
$countries["LBY"]="Libya";
$countries["LCA"]="Sankt Lucia";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesotho";
$countries["LTU"]="Litauen";
$countries["LUX"]="Luxemborg";
$countries["LVA"]="Letland";
$countries["MAC"]="Macao";
$countries["MAR"]="Marokko";
$countries["MCO"]="Monaco";
$countries["MDA"]="Republikken Moldava (Moldavien)";
$countries["MDG"]="Madagaskar";
$countries["MDV"]="Maldiverne";
$countries["MEX"]="Mexico";
$countries["MHL"]="Marshalløerne";
$countries["MKD"]="Den tidligere Jugoslaviske Republik Makedonien";
$countries["MLI"]="Mali";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar (Burma)";
$countries["MNG"]="Mongoliet";
$countries["MNP"]="Nordmarianerne";
$countries["MNT"]="Montenegro";
$countries["MOZ"]="Mozambique";
$countries["MRT"]="Mauretanien";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinique";
$countries["MUS"]="Mauritius";
$countries["MWI"]="Malawi";
$countries["MYS"]="Malaysia";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namibia";
$countries["NCL"]="Ny Kaledonien";
$countries["NER"]="Niger";
$countries["NFK"]="Norfolk Island";
$countries["NGA"]="Nigeria";
$countries["NIC"]="Nicaragua";
$countries["NIR"]="Nordirland";
$countries["NIU"]="Niue";
$countries["NOR"]="Norge";
$countries["NLD"]="Nederlandene (Holland)";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Neutral Zone";
$countries["NZL"]="New Zealand";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panama";
$countries["PCN"]="Pitcairn";
$countries["PER"]="Peru";
$countries["PHL"]="Filippinerne";
$countries["PLW"]="Palau (Belau)";
$countries["PNG"]="Papua Ny Guinea";
$countries["POL"]="Polen";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Nordkorea";
$countries["PRT"]="Portugal";
$countries["PRY"]="Paraguay";
$countries["PSE"]="Palæstina";
$countries["PYF"]="Fransk Polynesien";
$countries["QAT"]="Qatar";
$countries["REU"]="Réunion";
$countries["ROM"]="Rumænien";
$countries["RUS"]="Rusland";
$countries["RWA"]="Rwanda";
$countries["SAU"]="Saudi Arabien";
$countries["SCG"]="Serbien og Montenegro";
$countries["SCT"]="Skotland";
$countries["SDN"]="Sudan";
$countries["SEA"]="På havet";
$countries["SEN"]="Senegal";
$countries["SER"]="Serbien";
$countries["SGP"]="Singapore";
$countries["SGS"]="South Georgia og De Sydlige Sandwichøer";
$countries["SHN"]="Sankt Helena";
$countries["SIC"]="Sicilien";
$countries["SJM"]="Svalbard og Jan Mayen";
$countries["SLB"]="Salomonøerne";
$countries["SLE"]="Sierra Leone";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somalia";
$countries["SPM"]="Sankt Pierre og Miquelon";
$countries["SUN"]="U.S.S.R. (Sovjetunionen)";
$countries["STP"]="São Tomé og Principe";
$countries["SUR"]="Surinam";
$countries["SVK"]="Slovakiet";
$countries["SVN"]="Slovenien";
$countries["SWE"]="Sverige";
$countries["SWZ"]="Swaziland";
$countries["SYC"]="Seychellerne";
$countries["SYR"]="Syrien";
$countries["TCA"]="Turks- og Caicosøerne";
$countries["TCD"]="Tchad";
$countries["TGO"]="Togo";
$countries["THA"]="Thailand";
$countries["TJK"]="Tadsjikistan";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistan";
$countries["TLS"]="Timor-Leste (Østtimor)";
$countries["TON"]="Tonga";
$countries["TRN"]="Transylvanien";
$countries["TTO"]="Trinidad og Tobago";
$countries["TUN"]="Tunesien";
$countries["TUR"]="Tyrkiet";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzania";
$countries["UGA"]="Uganda";
$countries["UKR"]="Ukraine";
$countries["UMI"]="Mindre øer fjernt fra USA";
$countries["URY"]="Uruguay";
$countries["USA"]="USA";
$countries["UZB"]="Usbekistan";
$countries["VAT"]="Vatikanstaten";
$countries["VCT"]="Sankt Vincent og Grenadinerne";
$countries["VEN"]="Venezuela";
$countries["VGB"]="Jomfruøerne (Storbritannien)";
$countries["VIR"]="De Amerikanske Jomfruøer";
$countries["VNM"]="Vietnam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="Vestafrika";
$countries["WLF"]="Wallis- og Futunaøerne";
$countries["WLS"]="Wales";
$countries["WSM"]="Samoa";
$countries["YEM"]="Yemen";
$countries["YUG"]="Jugoslavien";
$countries["ZAF"]="Sydafrika";
$countries["ZAR"]="Zaire";
$countries["ZMB"]="Zambia";
$countries["ZWE"]="Zimbabwe";
$countries["???"]="Ukendt";

$countries["CAT"]="Catalonien";
$countries["IOM"]="Isle of Man";
?>
