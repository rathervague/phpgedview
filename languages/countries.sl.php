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
 * @version $Id: countries.sl.php 4843 2009-01-19 08:34:29Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$countries["ALB"]="Albanija";
$countries["AND"]="Andora";
$countries["ARG"]="Argentina";
$countries["ARM"]="Armenija";
$countries["AUS"]="Avstralija";
$countries["AUT"]="Avstrija";
$countries["BEL"]="Belgija";
$countries["BFA"]="Burkina Faso";
$countries["BGR"]="Bolgarija";
$countries["BIH"]="Bosna in Hercegovina";
$countries["BRA"]="Brazilija";
$countries["CAN"]="Kanada";
$countries["CHE"]="Švica";
$countries["CHL"]="Čile";
$countries["CHN"]="Kitajska";
$countries["CSK"]="Češkoslovaška";
$countries["CUB"]="Kuba";
$countries["CYP"]="Ciper";
$countries["CZE"]="Češka";
$countries["DEU"]="Nemčija";
$countries["DJI"]="Džbuti";
$countries["DNK"]="Danska";
$countries["EGY"]="Egipt";
$countries["ENG"]="Anglija";
$countries["ERI"]="Eritreja";
$countries["ESP"]="Španija";
$countries["EST"]="Estonija";
$countries["FIN"]="Finska";
$countries["FRA"]="Francija";
$countries["GBR"]="Velika britanija";
$countries["GRC"]="Grčija";
$countries["HRV"]="Hrvaška";
$countries["HUN"]="Madžarska";
$countries["IND"]="Indija";
$countries["IRL"]="Irska";
$countries["IRN"]="Iran";
$countries["IRQ"]="Irak";
$countries["ISR"]="Izrael";
$countries["ITA"]="Italija";
$countries["JAM"]="Jamajka";
$countries["JPN"]="Japonska";
$countries["LBY"]="Libija";
$countries["LVA"]="Latvija";
$countries["MAR"]="Maroko";
$countries["MCO"]="Monako";
$countries["MEX"]="Mehika";
$countries["MKD"]="Makedonija";
$countries["NZL"]="Nova zelandija";
$countries["OMN"]="Oman";
$countries["PAK"]="Pakistan";
$countries["PAN"]="Panama";
$countries["PER"]="Peru";
$countries["PHL"]="Filipini";
$countries["POL"]="Poljska";
$countries["PRT"]="Portugalska";
$countries["ROM"]="Romunija";
$countries["RUS"]="Rusija";
$countries["SCG"]="Srbija in Črna gorao";
$countries["SCT"]="Škotska";
$countries["SER"]="Srbija";
$countries["SMR"]="San Marino";
$countries["SVK"]="Slovaška";
$countries["SVN"]="Slovenija";
$countries["SWE"]="Švedska";
$countries["USA"]="ZDA";
$countries["UZB"]="Uzbekistan";
$countries["VEN"]="Venezuela";
$countries["YUG"]="Jugoslavija";
$countries["???"]="Neznano";

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
$altCountryNames["DEU"]="Vzhodna nemčija; Zahodna nemčija; GDR; FRG";
$altCountryNames["GBR"]="Velika britanija";
$altCountryNames["SUN"]="Sovjetska zveza";

?>
