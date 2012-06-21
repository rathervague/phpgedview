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
 * @subpackage Languages
 * @version $Id: countries.es.php 5502 2009-05-12 17:19:07Z jsanchez $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$countries["ABW"]="Aruba";
$countries["ACA"]="Acadia";
$countries["AFG"]="Afganistán";
$countries["AGO"]="Angola";
$countries["AIA"]="Anguila";
$countries["ALA"]="Islas Åland";
$countries["ALB"]="Albania";
$countries["AND"]="Andorra";
$countries["ANT"]="Antillas Holandesas";
$countries["ARE"]="Emiratos Árabes Unidos";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armenia";
$countries["ASM"]="Samoa Americana";
$countries["ATA"]="Antártica";
$countries["ATF"]="Territorios Australes Franceses";
$countries["ATG"]="Antigua y Barbuda";
$countries["AUS"]="Australia";
$countries["AUT"]="Austria";
$countries["AZR"]="Azores";
$countries["AZE"]="Azerbaiyán";
$countries["BDI"]="Burundi";
$countries["BEL"]="Bélgica";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangladesh";
$countries["BGR"]="Bulgaria";
$countries["BHR"]="Bahréin";
$countries["BHS"]="Bahamas";
$countries["BIH"]="Bosnia y Herzegovina";
$countries["BLR"]="Belarrusia";
$countries["BLZ"]="Belice";
$countries["BMU"]="Bermudas";
$countries["BOL"]="Bolivia";
$countries["BRA"]="Brasil";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunéi";
$countries["BTN"]="Bután";
$countries["BVT"]="Isla Bouvet";
$countries["BWA"]="Botsuana";
$countries["BWI"]="Indias Occidentales Británicas";
$countries["CAF"]="República Centro-africana";
$countries["CAN"]="Canadá";
$countries["CAP"]="Colonia del Cabo";
$countries["CAT"]="Cataluña";
$countries["CCK"]="Islas Cocos";
$countries["CHE"]="Suiza";
$countries["CHI"]="Islas del Canal";
$countries["CHL"]="Chile";
$countries["CHN"]="China";
$countries["CIV"]="Costa de Marfil";
$countries["CMR"]="Camerún";
$countries["COD"]="República Democrática del Congo";
$countries["COG"]="República del Congo";
$countries["COK"]="Islas Cook";
$countries["COL"]="Colombia";
$countries["COM"]="Comoras";
$countries["CPV"]="Cabo Verde";
$countries["CRI"]="Costa Rica";
$countries["CSK"]="Checoslovaquia";
$countries["CUB"]="Cuba";
$countries["CXR"]="Isla de Navidad";
$countries["CYM"]="Islas Caimán";
$countries["CYP"]="Chipre";
$countries["CZE"]="República Checa";
$countries["DEU"]="Alemania";
$countries["DJI"]="Yibuti";
$countries["DMA"]="Dominica";
$countries["DNK"]="Dinamarca";
$countries["DOM"]="República Dominicana";
$countries["DZA"]="Argelia";
$countries["ECU"]="Ecuador";
$countries["EGY"]="Egipto";
$countries["EIR"]="Eire";
$countries["ENG"]="Inglaterra";
$countries["ERI"]="Eritrea";
$countries["ESH"]="Sahara Occidental";
$countries["ESP"]="España";
$countries["EST"]="Estonia";
$countries["ETH"]="Etiopía";
$countries["FIN"]="Finlandia";
$countries["FJI"]="Fiyi";
$countries["FLD"]="Flandes";
$countries["FLK"]="Islas Malvinas";
$countries["FRA"]="Francia";
$countries["FRO"]="Islas Feroe";
$countries["FSM"]="Micronesia";
$countries["GAB"]="Gabón";
$countries["GBR"]="Reino Unido";
$countries["GEO"]="Georgia";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guinea";
$countries["GLP"]="Guadalupe";
$countries["GMB"]="Gambia";
$countries["GNB"]="Guinea-Bissau";
$countries["GNQ"]="Guinea Ecuatorial";
$countries["GRC"]="Grecia";
$countries["GRD"]="Granada";
$countries["GRL"]="Groenlandia";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Guayana Francesa";
$countries["GUM"]="Guam";
$countries["GUY"]="Guyana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Islas Heard y McDonald";
$countries["HND"]="Honduras";
$countries["HRV"]="Croacia";
$countries["HTI"]="Haití";
$countries["HUN"]="Hungría";
$countries["IDN"]="Indonesia";
$countries["IND"]="India";
$countries["IOM"]="Isla de Man";
$countries["IOT"]="Territorio Británico del Océano Índico";
$countries["IRL"]="Irlanda";
$countries["IRN"]="Irán";
$countries["IRQ"]="Irak";
$countries["ISL"]="Islandia";
$countries["ISR"]="Israel";
$countries["ITA"]="Italia";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Jordania";
$countries["JPN"]="Japón";
$countries["KAZ"]="Kazajistán";
$countries["KEN"]="Kenia";
$countries["KGZ"]="Kirguistán";
$countries["KHM"]="Camboya";
$countries["KIR"]="Kiribati";
$countries["KNA"]="San Cristóbal y Nevis";
$countries["KOR"]="Corea";
$countries["KWT"]="Kuwait";
$countries["LAO"]="Laos";
$countries["LBN"]="Líbano";
$countries["LBR"]="Liberia";
$countries["LBY"]="Libia";
$countries["LCA"]="Santa Lucía";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesoto";
$countries["LTU"]="Lituania";
$countries["LUX"]="Luxemburgo";
$countries["LVA"]="Letonia";
$countries["MAC"]="Macao";
$countries["MAR"]="Marruecos";
$countries["MCO"]="Monaco";
$countries["MDA"]="Moldavia";
$countries["MDG"]="Madagascar";
$countries["MDV"]="Maldivas";
$countries["MEX"]="México";
$countries["MHL"]="Islas Marshall";
$countries["MKD"]="ARY Macedonia";
$countries["MLI"]="Malí";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar";
$countries["MNG"]="Mongolia";
$countries["MNP"]="Islas Marianas del Norte";
$countries["MNT"]="Montenegro";
$countries["MOZ"]="Mozambique";
$countries["MRT"]="Mauritania";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinica";
$countries["MUS"]="Mauricio";
$countries["MWI"]="Malawi";
$countries["MYS"]="Malasia";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namibia";
$countries["NCL"]="Nueva Caledonia";
$countries["NER"]="Niger";
$countries["NFK"]="Norfolk";
$countries["NGA"]="Nigeria";
$countries["NIC"]="Nicaragua";
$countries["NIR"]="Irlanda del Norte";
$countries["NIU"]="Niue";
$countries["NLD"]="Países Bajos";
$countries["NOR"]="Noruega";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Zona Neutral";
$countries["NZL"]="Nueva Zelanda";
$countries["OMN"]="Omán";
$countries["PAK"]="Paquistán";
$countries["PAN"]="Panamá";
$countries["PCN"]="Islas Pitcairn";
$countries["PER"]="Perú";
$countries["PHL"]="Filipinas";
$countries["PLW"]="Palau";
$countries["PNG"]="Papúa Nueva Guinea";
$countries["POL"]="Polonia";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Corea del Norte";
$countries["PRT"]="Portugal";
$countries["PRY"]="Paraguay";
$countries["PSE"]="Palestina";
$countries["PYF"]="Polinesia Francesa";
$countries["QAT"]="Qatar";
$countries["REU"]="Reunión";
$countries["ROM"]="Rumanía";
$countries["RUS"]="Rusia";
$countries["RWA"]="Ruanda";
$countries["SAU"]="Arabia Saudí";
$countries["SCG"]="Serbia y Montenegro";
$countries["SCT"]="Escocia";
$countries["SDN"]="Sudán";
$countries["SEA"]="Alta mar";
$countries["SEN"]="Senegal";
$countries["SER"]="Serbia";
$countries["SGP"]="Singapur";
$countries["SGS"]="Islas Georgias del Sur y Sandwich del Sur";
$countries["SHN"]="Santa Helena";
$countries["SIC"]="Sicilia";
$countries["SJM"]="Svalbard y Jan Mayen";
$countries["SLB"]="Islas Salomón";
$countries["SLE"]="Sierra Leona";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somalia";
$countries["SPM"]="San Pedro y Miquelón";
$countries["STP"]="Santo Tomé y Príncipe";
$countries["SUN"]="U.R.S.S.";
$countries["SUR"]="Surinam";
$countries["SVK"]="Eslovaquia";
$countries["SVN"]="Eslovenia";
$countries["SWE"]="Suecia";
$countries["SWZ"]="Suazilandia";
$countries["SYC"]="Seychelles";
$countries["SYR"]="Siria";
$countries["TCA"]="Islas Turcas y Caicos";
$countries["TCD"]="Chad";
$countries["TGO"]="Togo";
$countries["THA"]="Tailandia";
$countries["TJK"]="Tayikistán";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistán";
$countries["TLS"]="Timor-Leste";
$countries["TON"]="Tonga";
$countries["TRN"]="Transilvania";
$countries["TTO"]="Trinidad y Tobago";
$countries["TUN"]="Túnez";
$countries["TUR"]="Turquía";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzania";
$countries["UGA"]="Uganda";
$countries["UKR"]="Ucrania";
$countries["UMI"]="Islas ultramarinas de Estados Unidos";
$countries["URY"]="Uruguay";
$countries["USA"]="EE.UU.";
$countries["UZB"]="Uzbekistan";
$countries["VAT"]="Ciudad del Vaticano";
$countries["VCT"]="San Vicente y las Granadinas";
$countries["VEN"]="Venezuela";
$countries["VGB"]="Islas Vírgenes Británicas";
$countries["VIR"]="Islas Vírgenes Estadounidenses";
$countries["VNM"]="Vietnam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="África occidental";
$countries["WLF"]="Wallis y Futuna";
$countries["WLS"]="Gales";
$countries["WSM"]="Samoa";
$countries["YEM"]="Yemen";
$countries["YUG"]="Yugoslavia";
$countries["ZAF"]="Sudáfrica";
$countries["ZAR"]="Zaire";
$countries["ZMB"]="Zambia";
$countries["ZWE"]="Zimbabue";
$countries["???"]="Desconocido";

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
 * $altCountryName["XYZ"]="Name1; Name2; Name3";
 *
 * The Chapman-to-country conversion will always use the $countries list of
 * the current page language, no matter what the original country name was.
 *
 */
$altCountryNames["CHI"]="Islas Anglonormandas";
$altCountryNames["COD"]="Zaire";
$altCountryNames["DEU"]="Alemania Oriental; Alemania Occidental";
$altCountryNames["FLK"]="Islas Falkland";
$altCountryNames["GBR"]="Gran Bretaña";
$altCountryNames["LKA"]="Ceilán";
$altCountryNames["MEX"]="Estados Unidos Mexicanos; EE.UU.MM.";
$altCountryNames["MMR"]="Birmania";
$altCountryNames["NLD"]="Holanda";
$altCountryNames["SUN"]="Unión Soviética";
$altCountryNames["TLS"]="Timor Oriental";
$altCountryNames["USA"]="Estados Unidos; Estados Unidos de América; EE.UU.AA.";
$altCountryNames["VAT"]="Santa Sede";
$altCountryNames["WSM"]="Samoa Occidental";
$altCountryNames["YEM"]="Yemén";

?>
