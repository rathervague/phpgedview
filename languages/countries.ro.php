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
 * @author Uifălean Mircea
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: countries.ro.php 4222 2008-11-02 01:33:01Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$countries["ABW"]="Aruba";
$countries["ACA"]="Acadia";
$countries["AFG"]="Afganistan";
$countries["AGO"]="Angola";
$countries["AIA"]="Anguilla";
$countries["ALA"]="Insulele Åland";
$countries["ALB"]="Albania";
$countries["AND"]="Andora";
$countries["ANT"]="Antilele Olandeze";
$countries["ARE"]="Emiratele Arabe Unite";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armenia";
$countries["ASM"]="Samoa Americană";
$countries["ATA"]="Antarctica";
$countries["ATF"]="Teritoriile Franceze de Sud";
$countries["ATG"]="Antigua şi Barbuda";
$countries["AUS"]="Australia";
$countries["AUT"]="Austria";
$countries["AZR"]="Azore";
$countries["AZE"]="Azerbaidjan";
$countries["BDI"]="Burundi";
$countries["BEL"]="Belgia";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangladesh";
$countries["BGR"]="Bulgaria";
$countries["BHR"]="Bahrain";
$countries["BHS"]="Bahamas";
$countries["BIH"]="Bosnia şi Herţegovina";
$countries["BLR"]="Belarus";
$countries["BLZ"]="Belize";
$countries["BMU"]="Bermuda";
$countries["BOL"]="Bolivia";
$countries["BRA"]="Brazilia";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunei Darussalam";
$countries["BTN"]="Bhutan";
$countries["BVT"]="Insula Bouvet";
$countries["BWA"]="Botswana";
$countries["BWI"]="Indiile de Vest Britanice";
$countries["CAF"]="Republica Africană Centrală";
$countries["CAN"]="Canada";
$countries["CAP"]="Capul Colonia";
$countries["CCK"]="Insulele Cocos (Keeling)";
$countries["CHE"]="Elveţia";
$countries["CHI"]="Channel Islands";
$countries["CHL"]="Chile";
$countries["CHN"]="China";
$countries["CIV"]="Coasta de Fildeş";
$countries["CMR"]="Camerun";
$countries["COD"]="Congo (Kinshasa)";
$countries["COG"]="Congo (Brazzaville)";
$countries["COK"]="Insulele Cook";
$countries["COL"]="Columbia";
$countries["COM"]="Comore";
$countries["CPV"]="Capul Verde";
$countries["CRI"]="Costa Rica";
$countries["CSK"]="Cehoslovacia";
$countries["CUB"]="Cuba";
$countries["CXR"]="Insula Christmas";
$countries["CYM"]="Insulele Cayman";
$countries["CYP"]="Cipru";
$countries["CZE"]="Republica Cehă";
$countries["DEU"]="Germania";
$countries["DJI"]="Djibouti";
$countries["DMA"]="Dominica";
$countries["DNK"]="Danemarca";
$countries["DOM"]="Republica Dominicană";
$countries["DZA"]="Algeria";
$countries["ECU"]="Ecuador";
$countries["EGY"]="Egipt";
$countries["EIR"]="Eire";
$countries["ENG"]="Anglia";
$countries["ERI"]="Eritreea";
$countries["ESH"]="Sahara Occidentală";
$countries["ESP"]="Spania";
$countries["EST"]="Estonia";
$countries["ETH"]="Etiopia";
$countries["FIN"]="Finlanda";
$countries["FJI"]="Fiji";
$countries["FLD"]="Flandra";
$countries["FLK"]="Insulele Falkland";
$countries["FRA"]="Franţa";
$countries["FRO"]="Insulele Feroe";
$countries["FSM"]="Micronezia";
$countries["GAB"]="Gabon";
$countries["GBR"]="Regatul Unit";
$countries["GEO"]="Georgia";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guineea";
$countries["GLP"]="Guadelupa";
$countries["GMB"]="Gambia";
$countries["GNB"]="Guineea-Bissau";
$countries["GNQ"]="Guineea Ecuatorială";
$countries["GRC"]="Grecia";
$countries["GRD"]="Grenada";
$countries["GRL"]="Groenlanda";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Guiana Franceză";
$countries["GUM"]="Guam";
$countries["GUY"]="Guyana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Insula Heard şi Insulele McDonald";
$countries["HND"]="Honduras";
$countries["HRV"]="Croaţia";
$countries["HTI"]="Haiti";
$countries["HUN"]="Ungaria";
$countries["IDN"]="Indonezia";
$countries["IND"]="India";
$countries["IOT"]="Teritoriul Britanic din Oceanul Indian";
$countries["IRL"]="Irlanda";
$countries["IRN"]="Iran";
$countries["IRQ"]="Irak";
$countries["ISL"]="Islanda";
$countries["ISR"]="Israel";
$countries["ITA"]="Italia";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Iordania";
$countries["JPN"]="Japonia";
$countries["KAZ"]="Kazahstan";
$countries["KEN"]="Kenya";
$countries["KGZ"]="Kârgâzstan";
$countries["KHM"]="Cambodgia";
$countries["KIR"]="Kiribati";
$countries["KNA"]="Sfântul Kitts şi Nevis";
$countries["KOR"]="Coreea";
$countries["KWT"]="Kuweit";
$countries["LAO"]="Laos";
$countries["LBN"]="Liban";
$countries["LBR"]="Liberia";
$countries["LBY"]="Libia";
$countries["LCA"]="Sfânta Lucia";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesotho";
$countries["LTU"]="Lituania";
$countries["LUX"]="Luxemburg";
$countries["LVA"]="Letonia";
$countries["MAC"]="Macau";
$countries["MAR"]="Maroc";
$countries["MCO"]="Monaco";
$countries["MDA"]="Moldova";
$countries["MDG"]="Madagascar";
$countries["MDV"]="Maldive";
$countries["MEX"]="Mexic";
$countries["MHL"]="Insulele Marshall";
$countries["MKD"]="Macedonia";
$countries["MLI"]="Mali";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar";
$countries["MNG"]="Mongolia";
$countries["MNP"]="Insulele Mariane de Nord";
$countries["MNT"]="Muntenegru";
$countries["MOZ"]="Mozambic";
$countries["MRT"]="Mauritania";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinica";
$countries["MUS"]="Mauritius";
$countries["MWI"]="Malawi";
$countries["MYS"]="Malaiezia";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namibia";
$countries["NCL"]="Noua Caledonie";
$countries["NER"]="Niger";
$countries["NFK"]="Insula Norfolk";
$countries["NGA"]="Nigeria";
$countries["NIC"]="Nicaragua";
$countries["NIR"]="Irlanda de Nord";
$countries["NIU"]="Niue";
$countries["NLD"]="Olanda";
$countries["NOR"]="Norvegia";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Zona Neutră";
$countries["NZL"]="Noua Zeelandă";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panama";
$countries["PCN"]="Pitcairn";
$countries["PER"]="Peru";
$countries["PHL"]="Filipine";
$countries["PLW"]="Palau";
$countries["PNG"]="Papua Noua Guinee";
$countries["POL"]="Polonia";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Coreea de Nord";
$countries["PRT"]="Portugalia";
$countries["PRY"]="Paraguay";
$countries["PSE"]="Teritoriul Palestinian Ocupat";
$countries["PYF"]="Polinezia franceză";
$countries["QAT"]="Qatar";
$countries["REU"]="Réunion";
$countries["ROM"]="România";
$countries["RUS"]="Rusia";
$countries["RWA"]="Ruanda";
$countries["SAU"]="Arabia Saudita";
$countries["SCG"]="Serbia şi Muntenegru";
$countries["SCT"]="Scoţia";
$countries["SDN"]="Sudan";
$countries["SEA"]="La Mare";
$countries["SEN"]="Senegal";
$countries["SER"]="Serbia";
$countries["SGP"]="Singapore";
$countries["SGS"]="Georgia de Sud şi Insulele Sandwich de Sud";
$countries["SHN"]="Sfânta Elena";
$countries["SIC"]="Sicilia";
$countries["SJM"]="Insulele Svalbard şi Jan Mayen";
$countries["SLB"]="Insulele Solomon";
$countries["SLE"]="Sierra Leone";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somalia";
$countries["SPM"]="Saint Pierre şi Miquelon";
$countries["STP"]="São Tomé şi Príncipe";
$countries["SUN"]="URSS";
$countries["SUR"]="Surinam";
$countries["SVK"]="Slovacia";
$countries["SVN"]="Slovenia";
$countries["SWE"]="Suedia";
$countries["SWZ"]="Swaziland";
$countries["SYC"]="Seychelles";
$countries["SYR"]="Republica Arabă Siriană";
$countries["TCA"]="Insulele Turks şi Caicos";
$countries["TCD"]="Ciad";
$countries["TGO"]="Togo";
$countries["THA"]="Tailanda";
$countries["TJK"]="Tadjikistan";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistan";
$countries["TLS"]="Timor-Leste";
$countries["TON"]="Tonga";
$countries["TRN"]="Transilvania";
$countries["TTO"]="Trinidad şi Tobago";
$countries["TUN"]="Tunisia";
$countries["TUR"]="Turcia";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzania";
$countries["UGA"]="Uganda";
$countries["UKR"]="Ucraina";
$countries["UMI"]="SUA Insulele Minor Depărtate";
$countries["URY"]="Uruguay";
$countries["USA"]="SUA";
$countries["UZB"]="Uzbekistan";
$countries["VAT"]="Vatican City";
$countries["VCT"]="Sfântul Vincent şi Grenadine";
$countries["VEN"]="Venezuela";
$countries["VGB"]="Insulele Virgine Britanice";
$countries["VIR"]="US Virgin Islands";
$countries["VNM"]="Vietnam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="Africa de Vest";
$countries["WLF"]="Insulele Wallis şi Futuna";
$countries["WLS"]="Ţara Galilor";
$countries["WSM"]="Samoa";
$countries["YEM"]="Yemen";
$countries["YUG"]="Iugoslavia";
$countries["ZAF"]="Africa de Sud";
$countries["ZAR"]="Zair";
$countries["ZMB"]="Zambia";
$countries["ZWE"]="Zimbabwe";
$countries["???"]="Necunoscută";

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
$altCountryNames["COD"]="Zair";
$altCountryNames["DEU"]="Germania de Est; Germania de Vest; RDG; RFG";
$altCountryNames["FLK"]="Malvine";
$altCountryNames["GBR"]="Marea Britanie";
$altCountryNames["LKA"]="Ceylon";
$altCountryNames["MAC"]="Macao";
$altCountryNames["MMR"]="Birmania";
$altCountryNames["NLD"]="Olanda";
$altCountryNames["PLW"]="Belau";
$altCountryNames["SUN"]="Uniunea Sovietică";
$altCountryNames["TLS"]="Timorul de Est";
$altCountryNames["VAT"]="Marea Sfântă";
$altCountryNames["WSM"]="Samoa de Vest";

?>
