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
 * # $Id: countries.no.php 4944 2009-01-29 03:04:28Z canajun2eh $
 *
 * @translator Geir Håkon Eikland
 * @translator Thomas Rindal
 * @package PhpGedView
 * @subpackage Languages
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$countries["ABW"]="Aruba";
$countries["ACA"]="Akadia";
$countries["AFG"]="Afghanistan";
$countries["AGO"]="Angola";
$countries["AIA"]="Anguilla";
$countries["ALA"]="Åland";
$countries["ALB"]="Albania";
$countries["AND"]="Andorra";
$countries["ANT"]="De nederlandske antiller";
$countries["ARE"]="De forente arabiske emirater";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armenia";
$countries["ASM"]="Amerikansk Samoa";
$countries["ATA"]="Antarktis";
$countries["ATF"]="De franske sørterritorier";
$countries["ATG"]="Antigua og Barbuda";
$countries["AUS"]="Australia";
$countries["AUT"]="Østerrike";
$countries["AZR"]="Asorene";
$countries["AZE"]="Aserbajdsjan";
$countries["BDI"]="Burundi";
$countries["BEL"]="Belgia";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangladesh";
$countries["BGR"]="Bulgaria";
$countries["BHR"]="Bahrain";
$countries["BHS"]="Bahamas";
$countries["BIH"]="Bosnia-Hercegovina";
$countries["BLR"]="Hviterussland";
$countries["BLZ"]="Belize";
$countries["BMU"]="Bermuda";
$countries["BOL"]="Bolivia";
$countries["BRA"]="Brasil";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunei";
$countries["BTN"]="Bhutan";
$countries["BVT"]="Bouvetøya";
$countries["BWA"]="Botswana";
$countries["BWI"]="Britisk Vestindia";
$countries["CAF"]="Den sentralafrikanske republikk";
$countries["CAN"]="Canada";
$countries["CAP"]="Kappkolonien";
$countries["CAT"]="Catalonia";
$countries["CCK"]="Kokosøyene";
$countries["CHE"]="Sveits";
$countries["CHI"]="Kanaløyene";
$countries["CHL"]="Chile";
$countries["CHN"]="Kina";
$countries["CIV"]="Elfenbeinskysten";
$countries["CMR"]="Kamerun";
$countries["COD"]="Kongo";
$countries["COG"]="Kongo-Brazaville";
$countries["COK"]="Cookøyene";
$countries["COL"]="Colombia";
$countries["COM"]="Komorene";
$countries["CPV"]="Kapp Verde";
$countries["CRI"]="Costa Rica";
$countries["CSK"]="Tsjekkoslovakia";
$countries["CUB"]="Cuba";
$countries["CXR"]="Juløya";
$countries["CYM"]="Caymanøyene";
$countries["CYP"]="Kypros";
$countries["CZE"]="Tsjekkia";
$countries["DEU"]="Tyskland";
$countries["DJI"]="Djibouti";
$countries["DMA"]="Dominica";
$countries["DNK"]="Danmark";
$countries["DOM"]="Den dominikanske republikk";
$countries["DZA"]="Algerie";
$countries["ECU"]="Ecuador";
$countries["EGY"]="Egypt";
$countries["EIR"]="Eire";
$countries["ENG"]="England";
$countries["ERI"]="Eritrea";
$countries["ESH"]="Vest-Sahara";
$countries["ESP"]="Spania";
$countries["EST"]="Estland";
$countries["ETH"]="Etiopia";
$countries["FIN"]="Finland";
$countries["FJI"]="Fiji";
$countries["FLD"]="Flandern";
$countries["FLK"]="Falklandsøyene";
$countries["FRA"]="Frankrike";
$countries["FRO"]="Færøyene";
$countries["FSM"]="Mikronesiaføderasjonen";
$countries["GAB"]="Gabon";
$countries["GBR"]="Storbritannia";
$countries["GEO"]="Georgia";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guinea";
$countries["GLP"]="Guadeloupe";
$countries["GMB"]="Gambia";
$countries["GNB"]="Guinea Bissau";
$countries["GNQ"]="Ekvatorial-Guinea";
$countries["GRC"]="Hellas";
$countries["GRD"]="Grenada";
$countries["GRL"]="Grønland";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Fransk Guyana";
$countries["GUM"]="Guam";
$countries["GUY"]="Guyana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Heard- og McDonald-øyene";
$countries["HND"]="Honduras";
$countries["HRV"]="Kroatia";
$countries["HTI"]="Haiti";
$countries["HUN"]="Ungarn";
$countries["IDN"]="Indonesia";
$countries["IND"]="India";
$countries["IOT"]="Britisk territorium i Indiahavet";
$countries["IRL"]="Irland";
$countries["IRN"]="Iran";
$countries["IRQ"]="Irak";
$countries["ISL"]="Island";
$countries["ISR"]="Israel";
$countries["ITA"]="Italia";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Jordan";
$countries["JPN"]="Japan";
$countries["KAZ"]="Kazakstan";
$countries["KEN"]="Kenya";
$countries["KGZ"]="Kirgizistan";
$countries["KHM"]="Kambodja";
$countries["KIR"]="Kiribati";
$countries["KNA"]="St. Kitts og Nevis";
$countries["KOR"]="Sør-Korea";
$countries["KWT"]="Kuwait";
$countries["LAO"]="Laos";
$countries["LBN"]="Libanon";
$countries["LBR"]="Liberia";
$countries["LBY"]="Libya";
$countries["LCA"]="St. Lucia";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesotho";
$countries["LTU"]="Litauen";
$countries["LUX"]="Luxemburg";
$countries["LVA"]="Latvia";
$countries["MAC"]="Macao";
$countries["MAR"]="Marokko";
$countries["MCO"]="Monaco";
$countries["MDA"]="Moldavia";
$countries["MDG"]="Madagaskar";
$countries["MDV"]="Maldivane";
$countries["MEX"]="Mexiko";
$countries["MHL"]="Marshalløyene";
$countries["MKD"]="Makedonia";
$countries["MLI"]="Mali";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar";
$countries["MNG"]="Mongolia";
$countries["MNP"]="Nord-Marianene";
$countries["MNT"]="Montenegro";
$countries["MOZ"]="Mosambik";
$countries["MRT"]="Mauretania";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinique";
$countries["MUS"]="Mauritius";
$countries["MWI"]="Malawi";
$countries["MYS"]="Malaysia";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namibia";
$countries["NCL"]="Ny-Caledonia";
$countries["NER"]="Niger";
$countries["NFK"]="Norfolkøya";
$countries["NGA"]="Nigeria";
$countries["NIC"]="Nicaragua";
$countries["NIR"]="Nord-Irland";
$countries["NIU"]="Niue";
$countries["NLD"]="Nederland";
$countries["NOR"]="Norge";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Nøytralsonen";
$countries["NZL"]="New Zealand";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panama";
$countries["PCN"]="Pitcairnøyene";
$countries["PER"]="Peru";
$countries["PHL"]="Filippinene";
$countries["PLW"]="Palau";
$countries["PNG"]="Papua Ny-Guinea";
$countries["POL"]="Polen";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Nord-Korea";
$countries["PRT"]="Portugal";
$countries["PRY"]="Paraguay";
$countries["PSE"]="Palestina";
$countries["PYF"]="Fransk Polynesia";
$countries["QAT"]="Qatar";
$countries["REU"]="Reunion";
$countries["ROM"]="Romania";
$countries["RUS"]="Russland";
$countries["RWA"]="Rwanda";
$countries["SAU"]="Saudi-Arabia";
$countries["SCG"]="Serbia og Montenegro";
$countries["SCT"]="Skottland";
$countries["SDN"]="Sudan";
$countries["SEA"]="Til sjøs";
$countries["SEN"]="Senegal";
$countries["SER"]="Serbia";
$countries["SGP"]="Singapore";
$countries["SGS"]="Sør-Georgia og Sør-Sandwichøyene";
$countries["SHN"]="St. Helena";
$countries["SIC"]="Sicilia";
$countries["SJM"]="Svalbard og Jan Mayen";
$countries["SLB"]="Salomonyene";
$countries["SLE"]="Sierra Leone";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somalia";
$countries["SPM"]="St. Pierre og Miquelon";
$countries["STP"]="São Tomé og Príncipe";
$countries["SUN"]="USSR";
$countries["SUR"]="Surinam";
$countries["SVK"]="Slovakia";
$countries["SVN"]="Slovenia";
$countries["SWE"]="Sverige";
$countries["SWZ"]="Swaziland";
$countries["SYC"]="Seychellene";
$countries["SYR"]="Syria";
$countries["TCA"]="Turks- og Caicosøyene";
$countries["TCD"]="Tsjad";
$countries["TGO"]="Togo";
$countries["THA"]="Thailand";
$countries["TJK"]="Tajikistan";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistan";
$countries["TLS"]="Øst-Timor";
$countries["TON"]="Tonga";
$countries["TRN"]="Transylvania";
$countries["TTO"]="Trinidad og Tobago";
$countries["TUN"]="Tunisia";
$countries["TUR"]="Turkia";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzania";
$countries["UGA"]="Uganda";
$countries["UKR"]="Ukraina";
$countries["UMI"]="USA mindre utenforliggende øyer";
$countries["URY"]="Uruguay";
$countries["USA"]="USA";
$countries["UZB"]="Usbekistan";
$countries["VAT"]="Vatikanstaten";
$countries["VCT"]="St. Vincent og Grenadinene";
$countries["VEN"]="Venezuela";
$countries["VGB"]="Jomfruøyene (UK)";
$countries["VIR"]="Jomfruøyene (USA)";
$countries["VNM"]="Vietnam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="Vest-Afrika";
$countries["WLF"]="Wallis- og Futunaøyene";
$countries["WLS"]="Wales";
$countries["WSM"]="Samoa";
$countries["YEM"]="Jemen";
$countries["YUG"]="Jugoslavia";
$countries["ZAF"]="Sør-Afrika";
$countries["ZAR"]="Zaire";
$countries["ZMB"]="Zambia";
$countries["ZWE"]="Zimbabwe";
$countries["???"]="Ukjent";

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
 * ##$countries["XYZ"]="Current name";
 * $altCountryName["XYZ"]="Name1; Name2; Name3";
 *
 * The Chapman-to-country conversion will always use the $countries list of
 * the current page language, no matter what the original country name was.
 *
 */
$altCountryNames["COD"]="Zaïre";
$altCountryNames["DEU"]="Øst-Tyskland; Vest-Tyskland; DDR; GER";
$altCountryNames["FLK"]="Malvinene";
$altCountryNames["GBR"]="Storbritania";
$altCountryNames["LKA"]="Ceylon";
$altCountryNames["MAC"]="Macao";
$altCountryNames["MMR"]="Burma";
$altCountryNames["NLD"]="Holland";
$altCountryNames["PLW"]="Belau";
$altCountryNames["SUN"]="Sovjetunionen";
$altCountryNames["TLS"]="Øst-Timor";
$altCountryNames["VAT"]="Vatikanet";
$altCountryNames["WSM"]="Vest-Samoa";

?>
