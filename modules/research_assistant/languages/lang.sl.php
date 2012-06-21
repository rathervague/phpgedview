<?php
/**
 * phpGedView Research Assistant Tool - Form Loader Engine.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package PhpGedView
 * @subpackage Research_Assistant
 * @translator Leon Kos
 * @version $Id: lang.sl.php 4843 2009-01-19 08:34:29Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"]	= "Vključi priimek zakonca:";
$pgv_lang["autosearch_sgivennames"] 	= "Vključi ime zakonca:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Vstavek Genealogy-Search-Help.com";

$pgv_lang["add_task_inst"]		= "Če naloga za vaše rezultate raziskav še ni bila ustvajena, jo morate najprej ustvariti in šele nato izrati možnost za shranitev in zaključek naloge.";
$pgv_lang["complete_task_inst"]		= "Izberite nalogo s seznama spodaj in nesite svoje izsledke za zaključek naloge:";
$pgv_lang["enter_results"]		= "Vnesi rezultate";
$pgv_lang["auto_gen_inst"]		= "Nekateri programi omogočajo vnos izsledkov kot enote TODO v GEDCOM datoteki.  Ta možnost bo pregledala vašo GEDCOM datoteko in avtomatsko pretvorila zapise TODO v raziskovalne naloge.";
$pgv_lang["choose_search_site"]		= "Izberite spletno stran za iskanje";
$pgv_lang["pid_search_for"]		= "Koga želite poiskati?";
$pgv_lang["manage_research_inst"]	= "Ti deli vam bodo pomagali pri nadzoru vaših raziskovalnih nalog. Raziskovalne naloge pomagajo pri sledenju in sodelovanju z drigimi raziskovalci.";
$pgv_lang["manage_research"]		= "Upravljaj raziskovanje";
$pgv_lang["manage_sources"]		= "Upravljaj vire";
$pgv_lang["part_of"]			= "Del od (neobvezno)";
$pgv_lang["search_fhl"]			= "Preiskuj Family History Library Catalog"; 
$pgv_lang["determine_sources"]		= "Določi možne vire";
$pgv_lang["analyze_database"]		= "Analiziraj bazo podatkov";
$pgv_lang["pid_know_more"]		= "O kom želite izvedeti več?";
$pgv_lang["analyze_people"]		= "Analiziraj osebe";
$pgv_lang["analyze_data"]		= "Analiziraj moje podatke";
$pgv_lang["missing_info"] 		= "Manjkajoče informacije";
$pgv_lang["auto_search"]		= "Ta dodatek bo samodejno preiskal Ancestry and FamilySearch. Za iskanje lahko izberete ime, datum rojstva ali smrti.<br />";
$pgv_lang["auto_search_text"]		= "Samodejno iskanje";
$pgv_lang["task_list"]			= "Naloge";
$pgv_lang["task_list_text"]		= "To področje prikazuje vaše naloge. Kliknite <b>Poglej</b> za pregled nalog.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]			= "Moje naloge";
$pgv_lang["add_task"]			= "Dodaj nalogo";
$pgv_lang["view_folders"]		= "Poglej mapo";
$pgv_lang["view_probabilities"]		= "Poglej verjetnosti";
$pgv_lang["up_folder"]			= "Mapa višje";
$pgv_lang["edit_folder"]		= "Dodaj/Uredi mapo";
$pgv_lang["gen_tasks"]			= "Samodejno izdelaj naloge";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]			= "Uredi nalogo";
$pgv_lang["completed"]			= "Zaključeno";
$pgv_lang["complete"]			= "Narejeno";
$pgv_lang["incomplete"]			= "Nedokončano";
$pgv_lang["created"]			= "Izdelano";
$pgv_lang["details"]			= "Podrobnosti";
$pgv_lang["result"]                     = "Rezultat";
$pgv_lang["okay"]                       = "Potrdi";
$pgv_lang["editform"]			= "Uredi podatke obrazca";
$pgv_lang["FilterBy"]			= "Filtriraj po";
$pgv_lang["Recalculate"]		= "Poračunaj";
$pgv_lang["LocalData"]			= "Lokalni podatki";
$pgv_lang["RelatedRecord"]		= "Sorodni zapis";
$pgv_lang["RelatedData"]		= "Sorodni podatki";
$pgv_lang["Percent"]			= "Odstotkov";
$pgv_lang["Fields"]			= "Število polj";
$pgv_lang["FieldName"]			= "Ime polja";
$pgv_lang["InputType"]			= "Tip vnosa";
$pgv_lang["Values"]			= "Vrednosti";
$pgv_lang["FormBuilder"]		= "Izdelovalec obrazca"; 
$pgv_lang["FormName"]			= "Vnesi ime obrazca";
$pgv_lang["MultiplePeople"]		= "Ali ta obrazec velja za več oseb?";
$pgv_lang["EnterGEDCOMExtension"]	= "Vnesite GEDCOM razširitev za dejstvo v obrazcu";
$pgv_lang["FormDesciption"]		= "Vnesite opis za obrazec";
$pgv_lang["FormGeneration"]		= "Izdelava obrazca je zaključena!";
$pgv_lang["CustomField"]		= "Ime uporabniškega polja";
$pgv_lang["txt"]			= "Besedilo";
$pgv_lang["checkbox"]			= "Kontrolni okvirček";
$pgv_lang["radiobutton"]		= "Radio gumb";
$pgv_lang["EnterResults"]		= "Vnesi rezultate"; 
$pgv_lang["ra_submit"]			= "Pošlji";
$pgv_lang["ra_generate_tasks"]		= "Izdelaj naloge s seznama TODO";
$pgv_lang["TaskDescription"]		= "Opis naloge";
$pgv_lang["SelectFolder"]               = "Izberi mapo";
$pgv_lang["ra_done"]			= "Narejeno";
$pgv_lang["ra_generate"]		= "Izdelaj";
$pgv_lang["LocalPercent"]		= "Posamezni odstotek";
$pgv_lang["GlobalPercent"]		= "Celotni odstotek";
$pgv_lang["Average"]			= "Povprečje";
$pgv_lang["NoData"]			= "Ni podatkov!";
$pgv_lang["NotEnoughData"]		= "Ni dovolj podatkov!";
$pgv_lang["InferIndvBirthPlac"]		= "Obstaja %PERCENT% možnosti, da je kraj rojstva:";
$pgv_lang["InferIndvDeathPlac"]		= "Obstaja %PERCENT% možnosti, da je kraj smrti:";
$pgv_lang["InferIndvSurn"]		= "Obstaja %PERCENT% možnosti, da je priimek:";
$pgv_lang["InferIndvMarriagePlace"]	= "Obstaja %PERCENT% možnosti, da je kraj poroke:";
$pgv_lang["InferIndvGivn"]		= "There is a %PERCENT% chance that the given name is:";
$pgv_lang["All"]			= "Vse";
$pgv_lang["More"]			= "Več";
$pgv_lang["ThereIsChance"]		= "Možni viri alhko vsebujejo:";
$pgv_lang["TheMostLikely"]		= "Najverjetnejše mesto za ta vir je:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]		= "Povezanost podatkov";
$pgv_lang["ViewProbExplanation"]	= "Ta stran analizira podatke za aktivni GEDCOM in kaže korelacijo med posameznimi podatki. Na primer: Ostaja lahko 95% korelacija, da je priimek v zapisu enak očetovem priimku. To pomeni, da 95% osev v tem GEDCOM-u deli isti očetov priimek. V tej različici raziskovalne pomoči se ti izračuni ne uporabljajo na drugih področjih programa in so le kot pomoč pri vaših raziskavah. V prihodnosti pa bodo verjetno ti podatki rabili za uporabne namige na kaj bi bilo koristno posvetiti pozornost v raziskovalnem delu. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]				= "Mapa:";
$pgv_lang["Edit_Gen_Task"]              	= "Uredi izdelano nalogo";
$pgv_lang["Start_Date"]                 	= "Začetni datum";
$pgv_lang["Task_Name"]                		= "Ime naloge";
$pgv_lang["Folder_Name"]                	= "Mapa";
$pgv_lang["Folder_View"]			= "Pregled mape";
$pgv_lang["Task_View"]                  	= "Pregled nalog";
$pgv_lang["page_header"]			= "Mape raziskovalne pomoči";
$pgv_lang["no_folder_name"]             	= "Polje za ime mape mora biti izpolnjeno.";
$pgv_lang["add_folder"]                 	= "Dodaj mapo";
$pgv_lang["folder_name"]                	= "Ime mape:";
$pgv_lang["Parent_Folder:"]             	= "Izhodiščna mapa:";
$pgv_lang["No_Parent"]                  	= "Ni lastnika";
$pgv_lang["Folder_Description:"]        	= "Opis mape:";
$pgv_lang["Folder_names_must_be_unique"]	= "Imena map morajo biti enoznačna.";
$pgv_lang["folder_submitted"]          		= "Mapa je bila poslana"; 
$pgv_lang["folder_problem"]             	= "Težave pri dodajanju vaše mape. Poskusite ponovno.";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] = "To področje prikazuje manjkajoče podatke zapisa. Izberite kontrolni okvirček in imenik ter kliknite <b>Dodaj nalogo</b> za izdelavo naloge manjkajočega dela.Obstoječe naloge bodo prikazane z <b>Poglej</b> namesto s kontrolnim okvirčkom.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]						= "Dodaj novo nalogo.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "Nobena mapa ne obstaja. Najprej izdelajte novo mapo.";

//-- HELP MESSAGES

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]				= "Poglej nalogo";
$pgv_lang["add_new_comment"]			= "Dodaj nov komentar";
$pgv_lang["no_indi_tasks"]			= "Nobena naloga ni poveyana s to osebo.";
$pgv_lang["no_sour_tasks"]			= "Nobena naloga ni povezana s tem virom.";
$pgv_lang["edit_comment"]			= "Uredi komentar";
$pgv_lang["comment_success"]			= "Vaši komentarji so bili uspešno dodani.";
$pgv_lang["comment_body"]			= 'Komentar';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Res želite izbrisati ta komentar?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]			= "Dodaj novo nalogo";
$pgv_lang["submit"]				= "Pošlji";
$pgv_lang["save_and_complete"]          	= "Shrani in končaj";
$pgv_lang["assign_task"]			= "Dodeli nalogo";
$pgv_lang["AddTask"]				= "Dodaj nalogo";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]			= "Nastavi zasebnost";
$pgv_lang["show_my_tasks"]              	= "Pokaži Moje naloge";
$pgv_lang["show_add_task"]		        = "Pokaži Dodaj nalogo";
$pgv_lang["show_auto_gen_task"]         	= "Pokaži Samodejno izdelaj nalogo";
$pgv_lang["show_view_folders"]		   	= "Pokaži Poglej mape";
$pgv_lang["show_add_folder"]		    	= "Pokaži Dodaj mapo";
$pgv_lang["show_add_unlinked_source"]   	= "Pokaži Dodaj nepovezan vir";
$pgv_lang["show_view_probabilities"]		= "Pokaži poglej verjetnosti";

//-- Census Forms
$pgv_lang["rows"]                       = "Število vrstic";
$pgv_lang["state"]                      = "Država";
$pgv_lang["call/url"]                   = "Klicna številka/URL";
$pgv_lang["enumDate"]                   = "Datum številčenja";
$pgv_lang["county"]                     = "Dežela";
$pgv_lang["city"]                       = "Mesto";
$pgv_lang["complete_title"]		= "Zaključi nalogo";
$pgv_lang["select_form"]		= "Izberi obrazec";
$pgv_lang["choose_form_label"]		= "Izberi splošni obrazec za raziskavo:";
$pgv_lang["book"]                 	= "Knjiga";
$pgv_lang["folio"]                   	= "Folija";
$pgv_lang["uk_county"]			= "Dežela";
$pgv_lang["uk_boro"]			= "Mesto ali kraj";
$pgv_lang["uk_place"]			= "Kraj";

$pgv_lang["AssIndiFacts"]		= "Povezana dejstva osebe"; 
$pgv_lang["AssFamFacts"]		= "Pridružena dejstva družine";  
$pgv_lang["ra_facts"]					= "Dejstva"; 	
$pgv_lang["ra_fact"]					= "Dejstvo"; 
$pgv_lang["ra_remove"]					= "Odstrani";   
$pgv_lang["ra_inferred_facts"]				= "Izpeljana dejstva"; 
$pgv_lang["ra_person"]					= "Oseba"; 
$pgv_lang["ra_reason"]					= "Vzrok"; 
$pgv_lang["success"]					= "Uspelo!"; 

$pgv_lang["registration_no"]				= "Številka prijave:";
$pgv_lang["serial_no"]					= "Serijska št.:";
$pgv_lang["ra_no"]					= "Številka:";
$pgv_lang["order_no"]					= "Številka naročila:";

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "Sklop #pgv_lang[my_tasks]# kaže naloge za trenutnega uporabnika. Nastavljen je lahko tako, da kaže zaključene laoge ali da kaže naloge, ki še niso dodeljene.";
$pgv_lang["mytasks_block"] 				= "Raziskovalna pomoč";
$pgv_lang["mytasks_edit"]               		= "Uredi";
$pgv_lang["mytasks_unassigned"]				= "Nedodeljeno";
$pgv_lang["mytasks_takeOn"]				= "Prevzemi";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   		= "Pokaži nedodeljene naloge?";
$pgv_lang["mytask_show_completed"]		= "Pokaži zaključene naloge?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		    = "Uporabi priimek:";
$pgv_lang["autosearch_givenname"]	    = "Uporabi imena:";
$pgv_lang["autosearch_byear"]		    = "Uporabi rojstno leto:";
$pgv_lang["autosearch_bloc"]		    = "Uporabi kraj rojstva:";  
$pgv_lang["autosearch_myear"]		    = "Uporabi leto poroke:";
$pgv_lang["autosearch_mloc"]		    = "Uporabi kraj poroke:";
$pgv_lang["autosearch_dyear"]		    = "Uporabi leto smrti:";
$pgv_lang["autosearch_dloc"]		    = "Uporabi kraj smrti:";
$pgv_lang["autosearch_gender"]              = "Uporabi spol:";
$pgv_lang["autosearch_plugin_name"]         = "";  
$pgv_lang["autosearch_fsurname"]		= "Uporabi priimek očeta:";
$pgv_lang["autosearch_fgivennames"]		= "Uporabi ime očeta:";
$pgv_lang["autosearch_msurname"]		= "Uporabi priimek matere:";
$pgv_lang["autosearch_mgivennames"]	    = "Uporabi ime matere:"; 
$pgv_lang["autosearch_country"]  	    = "Uporabi državo:"; 
$pgv_lang["autosearch_plugin_name_ancestry"]  	       = "Vstavek Ancestry.com";
$pgv_lang["autosearch_plugin_name_ancestrycouk"]       = "Vstavek Ancestry.co.uk";
$pgv_lang["autosearch_plugin_name_ellisisland"]        = "Vstavek EllisIslandRecords.org";
$pgv_lang["autosearch_plugin_name_geneanet"] 	       = "Vstavek GeneaNet.com";
$pgv_lang["autosearch_plugin_name_genealogy"]  		= "Vstavek Genealogy.com"; 
$pgv_lang["autosearch_plugin_name_familysearch"]   	= "Vstavek FamilySearch.org";
$pgv_lang["autosearch_plugin_name_werelate"]   	   	= "Vstavek Werelate.org";
$pgv_lang["autosearch_search"]           = "Išči";
$pgv_lang["autosearch_keywords"] 	 = "Ključne besede:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 = "Mapa trenutno vsebuje naloge in zato ne more biti izbrisana.";
$pgv_lang["has_folders"]               = "Mapa trenutno vsebuje mape in zato ne more biti izbrisana.";
?>
