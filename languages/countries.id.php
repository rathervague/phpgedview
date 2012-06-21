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
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: countries.id.php 4933 2009-01-28 16:58:50Z canajun2eh $
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
$countries["ALA"]="Åland Islands";
$countries["ALB"]="Albania";
$countries["AND"]="Andorra";
$countries["ANT"]="Netherlands Antilles";
$countries["ARE"]="Uni Emirat Arab";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armenia";
$countries["ASM"]="Samoa Amerika";
$countries["ATA"]="Antartika";
$countries["ATF"]="Wilayah Perancis Selatan";
$countries["ATG"]="Antigua dan Barbuda";
$countries["AUS"]="Australia";
$countries["AUT"]="Austria";
$countries["AZR"]="Azores";
$countries["AZE"]="Azerbaijan";
$countries["BDI"]="Burundi";
$countries["BEL"]="Belgium";
$countries["BEN"]="Benin";
$countries["BFA"]="Burkina Faso";
$countries["BGD"]="Bangladesh";
$countries["BGR"]="Bulgaria";
$countries["BHR"]="Bahrain";
$countries["BHS"]="Bahamas";
$countries["BIH"]="Bosnia dan Herzegovina";
$countries["BLR"]="Belarus";
$countries["BLZ"]="Belize";
$countries["BMU"]="Bermuda";
$countries["BOL"]="Bolivia";
$countries["BRA"]="Brazil";
$countries["BRB"]="Barbados";
$countries["BRN"]="Brunei Darussalam";
$countries["BTN"]="Bhutan";
$countries["BVT"]="Bouvet Island";
$countries["BWA"]="Botswana";
$countries["BWI"]="British West Indies";
$countries["CAF"]="Republik Afrika Tengah";
$countries["CAN"]="Kanada";
$countries["CAP"]="Koloni Cape";
$countries["CAT"]="Katalonia";
$countries["CCK"]="Pulau Cocos (Keeling)";
$countries["CHE"]="Switzerland";
$countries["CHI"]="Kepulauan Channel";
$countries["CHL"]="Chili";
$countries["CHN"]="China";
$countries["CIV"]="Côte d'Ivoire";
$countries["CMR"]="Kamerun";
$countries["COD"]="Kongo (Kinshasa)";
$countries["COG"]="Kongo (Brazzaville)";
$countries["COK"]="Kepulauan Cook";
$countries["COL"]="Kolombia";
$countries["COM"]="Comoros";
$countries["CPV"]="Cape Verde";
$countries["CRI"]="Kosta Rica";
$countries["CSK"]="Czechoslovakia";
$countries["CUB"]="Kuba";
$countries["CXR"]="Pulau Christmas";
$countries["CYM"]="Kepulauan Cayman";
$countries["CYP"]="Siprus";
$countries["CZE"]="Republik Czech";
$countries["DEU"]="Jerman";
$countries["DJI"]="Djibouti";
$countries["DMA"]="Dominika";
$countries["DNK"]="Denmark";
$countries["DOM"]="Republik Dominika";
$countries["DZA"]="Algeria";
$countries["ECU"]="Ekuador";
$countries["EGY"]="Mesir";
$countries["EIR"]="Eire";
$countries["ENG"]="Inggris";
$countries["ERI"]="Eritrea";
$countries["ESH"]="Sahara Barat";
$countries["ESP"]="Spanyol";
$countries["EST"]="Estonia";
$countries["ETH"]="Ethiopia";
$countries["FIN"]="Finlandia";
$countries["FJI"]="Fiji";
$countries["FLD"]="Flanders";
$countries["FLK"]="Kepulauan Falkland";
$countries["FRA"]="Perancis";
$countries["FRO"]="Kepulauan Faeroe";
$countries["FSM"]="Mikronesia";
$countries["GAB"]="Gabon";
$countries["GBR"]="Kerajaan Inggris";
$countries["GEO"]="Georgia";
$countries["GHA"]="Ghana";
$countries["GIB"]="Gibraltar";
$countries["GIN"]="Guinea";
$countries["GLP"]="Guadeloupe";
$countries["GMB"]="Gambia";
$countries["GNB"]="Guinea-Bissau";
$countries["GNQ"]="Guinea Ekuator";
$countries["GRC"]="Yunani";
$countries["GRD"]="Grenada";
$countries["GRL"]="Greenland";
$countries["GTM"]="Guatemala";
$countries["GUF"]="Guiana Perancis";
$countries["GUM"]="Guam";
$countries["GUY"]="Guyana";
$countries["HKG"]="Hong Kong";
$countries["HMD"]="Pualu Heard dan Kepulauan McDonald";
$countries["HND"]="Honduras";
$countries["HRV"]="Kroatia";
$countries["HTI"]="Haiti";
$countries["HUN"]="Hungaria";
$countries["IDN"]="Indonesia";
$countries["IND"]="India";
$countries["IOT"]="Wilayah Laut India Inggris";
$countries["IRL"]="Irlandia";
$countries["IRN"]="Iran";
$countries["IRQ"]="Irak";
$countries["ISL"]="Islandian";
$countries["ISR"]="Israel";
$countries["ITA"]="Itali";
$countries["JAM"]="Jamaica";
$countries["JOR"]="Jordania";
$countries["JPN"]="Jepang";
$countries["KAZ"]="Kazakhstan";
$countries["KEN"]="Kenya";
$countries["KGZ"]="Kirgistan";
$countries["KHM"]="Kamboja";
$countries["KIR"]="Kiribati";
$countries["KNA"]="Saint Kitts dan Nevis";
$countries["KOR"]="Korea";
$countries["KWT"]="Kuwait";
$countries["LAO"]="Laos";
$countries["LBN"]="Lebanon";
$countries["LBR"]="Liberia";
$countries["LBY"]="Libya";
$countries["LCA"]="Saint Lucia";
$countries["LIE"]="Liechtenstein";
$countries["LKA"]="Sri Lanka";
$countries["LSO"]="Lesotho";
$countries["LTU"]="Lithuania";
$countries["LUX"]="Luxembourg";
$countries["LVA"]="Latvia";
$countries["MAC"]="Makau";
$countries["MAR"]="Maroko";
$countries["MCO"]="Monako";
$countries["MDA"]="Moldova";
$countries["MDG"]="Madagaskar";
$countries["MDV"]="Maladewa";
$countries["MEX"]="Meksico";
$countries["MHL"]="Kepulauan Marshall";
$countries["MKD"]="Macedonia";
$countries["MLI"]="Mali";
$countries["MLT"]="Malta";
$countries["MMR"]="Myanmar";
$countries["MNG"]="Mongolia";
$countries["MNP"]="Kepulauan Mariana Utara";
$countries["MNT"]="Montenegro";
$countries["MOZ"]="Mozambique";
$countries["MRT"]="Mauritania";
$countries["MSR"]="Montserrat";
$countries["MTQ"]="Martinique";
$countries["MUS"]="Mauritius";
$countries["MWI"]="Malawi";
$countries["MYS"]="Malaysia";
$countries["MYT"]="Mayotte";
$countries["NAM"]="Namibia";
$countries["NCL"]="Kaledonia Baru";
$countries["NER"]="Niger";
$countries["NFK"]="Kepulauan Norfolk";
$countries["NGA"]="Nigeria";
$countries["NIC"]="Nikaragua";
$countries["NIR"]="Irlandian Utara";
$countries["NIU"]="Niue";
$countries["NLD"]="Belanda";
$countries["NOR"]="Norwegia";
$countries["NPL"]="Nepal";
$countries["NRU"]="Nauru";
$countries["NTZ"]="Zona Netral";
$countries["NZL"]="Selandian Baru";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panama";
$countries["PCN"]="Pitcairn";
$countries["PER"]="Peru";
$countries["PHL"]="Filipina";
$countries["PLW"]="Palau";
$countries["PNG"]="Papua Nugini";
$countries["POL"]="Polandia";
$countries["PRI"]="Puerto Rico";
$countries["PRK"]="Korea Utara";
$countries["PRT"]="Portugal";
$countries["PRY"]="Paraguay";
$countries["PSE"]="Wilayah Pendudukan Palestina";
$countries["PYF"]="Polinesia Perancis";
$countries["QAT"]="Qatar";
$countries["REU"]="Réunion";
$countries["ROM"]="Romania";
$countries["RUS"]="Rusia";
$countries["RWA"]="Rwanda";
$countries["SAU"]="Arab Saudi";
$countries["SCG"]="Serbia dan Montenegro";
$countries["SCT"]="Skotlandia";
$countries["SDN"]="Sudan";
$countries["SEA"]="Di Laut";
$countries["SEN"]="Senegal";
$countries["SER"]="Serbia";
$countries["SGP"]="Singapura";
$countries["SGS"]="Georgia Selatan dan Kepulauan Sandwich Selatan";
$countries["SHN"]="Saint Helena";
$countries["SIC"]="Sisilia";
$countries["SJM"]="Svalbard dan Kepulauan Jan Mayen";
$countries["SLB"]="Kepulauan Solomon";
$countries["SLE"]="Sierra Leone";
$countries["SLV"]="El Salvador";
$countries["SMR"]="San Marino";
$countries["SOM"]="Somalia";
$countries["SPM"]="Saint Pierre dan Miquelon";
$countries["STP"]="São Tomé dan Príncipe";
$countries["SUN"]="USSR";
$countries["SUR"]="Suriname";
$countries["SVK"]="Slovakia";
$countries["SVN"]="Slovenia";
$countries["SWE"]="Swedia";
$countries["SWZ"]="Swaziland";
$countries["SYC"]="Seychelles";
$countries["SYR"]="Republik Arab Syiri";
$countries["TCA"]="Turki dan Kepulauan Kaikos";
$countries["TCD"]="Chad";
$countries["TGO"]="Togo";
$countries["THA"]="Thailand";
$countries["TJK"]="Tajikistan";
$countries["TKL"]="Tokelau";
$countries["TKM"]="Turkmenistan";
$countries["TLS"]="Timor-Leste";
$countries["TON"]="Tonga";
$countries["TRN"]="Transilvania";
$countries["TTO"]="Trinidad dan Tobago";
$countries["TUN"]="Tunisia";
$countries["TUR"]="Turki";
$countries["TUV"]="Tuvalu";
$countries["TWN"]="Taiwan";
$countries["TZA"]="Tanzania";
$countries["UGA"]="Uganda";
$countries["UKR"]="Ukraine";
$countries["UMI"]="Kepulauan Luar Minor AS";
$countries["URY"]="Uruguay";
$countries["USA"]="AS";
$countries["UZB"]="Uzbekistan";
$countries["VAT"]="Vatican City";
$countries["VCT"]="Saint Vincent dan Grenada";
$countries["VEN"]="Venezuela";
$countries["VGB"]="Kepulauan Virgin Inggris";
$countries["VIR"]="Kepulauan Virgin AS";
$countries["VNM"]="Viet Nam";
$countries["VUT"]="Vanuatu";
$countries["WAF"]="Afrika Barat";
$countries["WLF"]="Wallis dan Kepulauan Futuna";
$countries["WLS"]="Wales";
$countries["WSM"]="Samoa";
$countries["YEM"]="Yamen";
$countries["YUG"]="Yugoslavia";
$countries["ZAF"]="Afrika Selatan";
$countries["ZAR"]="Zaire";
$countries["ZMB"]="Zambia";
$countries["ZWE"]="Zimbabwe";
$countries["???"]="Tidak diketahui";

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
$altCountryNames["COD"]="Zaire";
$altCountryNames["DEU"]="Jerman Timur; Jerman Barat; GDR; FRG";
$altCountryNames["FLK"]="Malvinas";
$altCountryNames["GBR"]="Britania Raya";
$altCountryNames["LKA"]="Seylon";
$altCountryNames["MAC"]="Makao";
$altCountryNames["MMR"]="Burma";
$altCountryNames["NLD"]="Belanda";
$altCountryNames["PLW"]="Belau";
$altCountryNames["SUN"]="Serikat Soviet";
$altCountryNames["TLS"]="Timor Timur";
$altCountryNames["VAT"]="Holy See";
$altCountryNames["WSM"]="Samoa Barat";

?>
