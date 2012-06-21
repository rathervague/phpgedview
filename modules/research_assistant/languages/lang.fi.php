<?php
/**
 * phpGedView Research Assistant Tool - Form Loader Engine.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  John Finlay and Others
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
 * @version $Id: lang.fi.php 4203 2008-10-31 13:44:03Z meliza $
 * @translator Matti Valve, Marko Kohtala
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"] 	= "Lisää puolison sukunimi:";
$pgv_lang["autosearch_sgivennames"] = "Lisää puolison etunimet:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Genealogy-Search-Help.com lisäke";

$pgv_lang["add_task_inst"]		= "Mikäli tutkimustuloksiasi varten ei vielä ole luotu tehtävää, sinun tulisi ensin luoda tehtävä ja sitten valita vaihtoehto tallentaa ja suorittaa tehtävä loppuun."; 
$pgv_lang["complete_task_inst"]	= "Valitse tehtävä allaolevasta tehtäväluettelosta suorittaaksesi sen lopuun ja lisää tulokset:";
$pgv_lang["enter_results"]		= "Lisää tulokset";
$pgv_lang["auto_gen_inst"]		= "Jotkin ohjelmat sallivat tutkimustehtävien lisäyksen TODO-obekteina GEDCOM-tiedostoosi. Tämä vaihtoehto käy läpi GEDCOM-tiedostosi ja muuttaa automaattisesti TODO-objektin tutkimustehtäväksi.";
$pgv_lang["choose_search_site"]	= "Valitse hakusivusto"; 
$pgv_lang["pid_search_for"]		= "Ketä haluat hakea?"; 
$pgv_lang["manage_research_inst"]	= "Nämä objektit auttavat hallitsemaan tutkimustehtäviäsi. Tutkimustehtävät auttavat sinua seuraamaan tutkimustasi sekä yhteistyössä muiden tutkijoiden kanssa.";
$pgv_lang["manage_research"]	= "Hallitse tutkimusta"; 
$pgv_lang["manage_sources"]		= "Hallitse lähteitä"; 
$pgv_lang["part_of"]			= "Osa (vaihtoehtoinen)"; 
$pgv_lang["search_fhl"]			= "Hae perhehistoriakirjastoluettelosta"; 
$pgv_lang["determine_sources"]	= "Päättele mahdolliset lähteet"; 
$pgv_lang["analyze_database"]	= "Analysoi tietokantaa"; 
$pgv_lang["pid_know_more"]		= "Kenestä haluat enemmän tietoja?"; 
$pgv_lang["analyze_people"]		= "Analysoi henkilöitä"; 
$pgv_lang["analyze_data"]		= "Analysoi tietojani"; 

$pgv_lang["missing_info"] 		= "Puuttuva tieto";
$pgv_lang["auto_search"]		= "Tämä ominaisuus suorittaa automaattisen esipolvihaun ja perhehaun, voit hakea nimen ja syntymä-/kuolinpäivän mukaan<br />";
$pgv_lang["auto_search_text"]	= "Automaattihaku";
$pgv_lang["task_list"]			= "Tehtävät";
$pgv_lang["task_list_text"]		= "Tällä alueella näytetään luomasi tehtävät. Näpäytä nähdäksesi tehtävän";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]						= "Tehtäväni";
$pgv_lang["add_task"]						= "Lisää tehtävä";
$pgv_lang["view_folders"]					= "Näytä kansiot";
$pgv_lang["view_probabilities"]				= "Näytä todennäköisyydet";
$pgv_lang["up_folder"]						= "Ylempi kansiotaso";
$pgv_lang["gen_tasks"]						= "Luo automaattisesti tehtäviä";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]						= "Muokkaa tehtävää";
$pgv_lang["completed"]						= "Valmis";
$pgv_lang["complete"]						= "Lopeta";
$pgv_lang["incomplete"]						= "Kesken";
$pgv_lang["created"]						= "Luotu";
$pgv_lang["details"]						= "Yksityiskohdat";
$pgv_lang["result"]                     	= "Tulos";
$pgv_lang["okay"]                           = "OK";
$pgv_lang["editform"]						= "Muokkaa lomaketietoa";
$pgv_lang["FilterBy"]						= "Suodata";
$pgv_lang["Recalculate"]					= "Laske uudelleen";
$pgv_lang["LocalData"]						= "Paikallinen tieto";
$pgv_lang["RelatedRecord"]					= "Asiaan liittyvä tietue";
$pgv_lang["RelatedData"]					= "Asiaan liittyvä tieto";
$pgv_lang["Percent"]						= "Prosenttia";
$pgv_lang["Fields"]							= "Kenttien lukumäärä";
$pgv_lang["FieldName"]						= "Kentän nimi";
$pgv_lang["InputType"]						= "Syötteen tyyppi";
$pgv_lang["Values"]							= "Arvot";
$pgv_lang["FormBuilder"]					= "Lomakkeen luontity?kalu"; 
$pgv_lang["FormName"]						= "Anna lomakkeen nimi";
$pgv_lang["MultiplePeople"]					= "Koskeeko lomake ueampaa henkilöä?";
$pgv_lang["EnterGEDCOMExtension"]			= "Anna GEDCOM-tiedoston tunniste lomakkeen tietotyypin mukaisesti";
$pgv_lang["FormDesciption"]					= "Anna lomakkeen kuvaus";
$pgv_lang["FormGeneration"]					= "Lomakkeen luonti valmis!";
$pgv_lang["CustomField"]					= "Mukautettu kentän nimi";
$pgv_lang["txt"]							= "Teksti"; 
$pgv_lang["checkbox"]						= "Valintaruutu"; 
$pgv_lang["radiobutton"]					= "Valintapainike";
$pgv_lang["EnterResults"]					= "Lisä tulokset"; 
$pgv_lang["ra_submit"]						= "Lähetä"; 
$pgv_lang["ra_generate_tasks"]				= "Luo tehtävät TODOsista"; 
$pgv_lang["TaskDescription"]				= "Tehtäväkuvaus"; 
$pgv_lang["SelectFolder"]                   = "Valitse kansio:"; 
$pgv_lang["ra_done"]						= "Valmis"; 
$pgv_lang["ra_generate"]					= "Luo"; 

$pgv_lang["LocalPercent"]						= "Paikallinen prosenttiosuus";
$pgv_lang["GlobalPercent"]						= "Globaali prosenttiosuus"; 
$pgv_lang["Average"]							= "Keksiarvo"; 
$pgv_lang["NoData"]								= "Tieto puuttuu!"; 
$pgv_lang["NotEnoughData"]						= "Ei riittävästi tietoa!"; 
$pgv_lang["InferIndvBirthPlac"]					= "%PERCENT% prosentin todennköisyydellä syntymäpaikka on:";
$pgv_lang["InferIndvDeathPlac"]					= "%PERCENT% prosentin todennköisyydellä kuolinpaikka on:"; 
$pgv_lang["InferIndvSurn"]						= "%PERCENT% prosentin todennköisyydellä sukunimi on:"; 
$pgv_lang["InferIndvMarriagePlace"]				= "%PERCENT% prosentin todennköisyydellä vihkimispaikka on:"; 
$pgv_lang["InferIndvGivn"]						= "%PERCENT% prosentin todennköisyydellä etunimi on:"; 
$pgv_lang["All"]								= "Kaikki"; 
$pgv_lang["More"]								= "Lisää"; 
$pgv_lang["ThereIsChance"]						= "Mahdolliset lähteet saattavat sisältää:"; 
$pgv_lang["TheMostLikely"]						= "Tämän lähteen todennäköisin paikka on:"; 

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]				= "Tietojen Yhteydet";  
$pgv_lang["ViewProbExplanation"]			= "Tällä sivulla analysoidaan aktiivisen GEDCOM-tiedoston datajoukkoa ja näytetään eri muuttujien välisiä yhteyksiä. Esimerkiksi paikallisen tietueen ja isän tietueen sukunimien välillä voi olla 95 prosentin korrelaatio. Se voi merkitä, että 95 prosentilla tässä GEDCOM tietojoukossa olevilla henkilöillä on sama sukunimi kuin heidän isällään. Tässä tutkimusavustajan versiossa näitä laskelmia ei käytetä ohjelman muissa osissa ja ne ovat vain avustamassa omaa tutkimustasi. Tulevaisuudessa suunnittelemme tämän tiedon käyttämistä osoittamaan mihin suuntaan sinun kannattaisi keskittää tulevia tutkimuksia.";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                         = "Kansio:";
$pgv_lang["Edit_Gen_Task"]                 	= "Muokkaa luotua tehtävää"; 
$pgv_lang["Start_Date"]                 	= "Aloituspäivämäärä";
$pgv_lang["Task_Name"]                		= "Tehtävän nimi";
$pgv_lang["Folder_Name"]                	= "Kansion nimi";
$pgv_lang["Folder_View"]                	= "Kansionäkymä";
$pgv_lang["Task_View"]                  	= "Tehtävänäkymä";
$pgv_lang["page_header"]					= "Tutkimusavustajakansiot";
$pgv_lang["no_folder_name"]             	= "Kansion nimi on pakollinen";
$pgv_lang["add_folder"]                 	= "Lisää kansio";
$pgv_lang["edit_folder"]                	= "Muokkaa kansiota";
$pgv_lang["folder_name"]                	= "Kansion nimi:";
$pgv_lang["Parent_Folder:"]             	= "Pääkansio:";
$pgv_lang["No_Parent"]                  	= "Ei pääkansiota";
$pgv_lang["Folder_Description:"]        	= "Kansion kuvaus:";
$pgv_lang["Folder_names_must_be_unique"]	= "Ei samoja kansionimiä.";
$pgv_lang["folder_submitted"]          		= "Kansiosi on lähetetty";
$pgv_lang["folder_problem"]             	= "Kansiosi lisääminen ei onnistunut, yritä uudelleen";

// -- Missing Information Help
$pgv_lang["ra_missing_info_help"]			= "Tällä alueella näytetään mitkä tiedot puuttuvat tietueesta . Valitse valintaruutu ja kansio ja paina Lisää tehtävä luodaksesi tehtävän puuttuvalle kohteelle. Jo luodut tehtävät näyttävät 'näytä' valintaruudun asemesta <br />";
$pgv_lang["task_entry"]						= "Luo uusi tehtävä.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "Yhtään kansiota ei vielä ole. Luo ensin uusi kansio.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]				= "~Kansionäkymä~<ul><li><b>Kansion nimi:</b> Tällä palstalla ovat kaikkien luomiesi kansioiden nimet.</li><li><b>Kuvaus:</b> Tällä palstalla ovat kansioiden kuvaukset.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~Lisää uusi tehtävä~<ul><li><b>Otsikko:</b>Tässä pitäisi olla lisäämäsi tehtävän otsikko.</li><li><b>Kansio:</b>Tähän kenttään voit merkitä, mihin kansioon uusi tehtävä tulee.</li><li><b>Kuvaus:</b> Lisää tehtävääsi kuvaava kuvaus.</li><li><b>Lähteet:</b> Lisää tehtävääsi liittyvät lähteet.</li><li><b>Henkilöt:</b> Lisää tehtävään liittyvät henkilöt.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "~Muokkaa kansiota:~<ul><li><b>Kansion nimi:</b> Lisää tähän muokattavan kansion nimi.</b></li><li><b>Pääkansio:</b> Voit määrittää muokattavan kansion pääkansioksi.</b></li><li><b>Kansion kuvaus:</b> Lisää kansiosi kuvaus.</b></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "~Lisää kansio:~<ul><li><b>Kansion nimi:</b> Lisää tähän lisättävän kansion nimi.</b></li><li><b>Pääkansio:</b> Voit määrittää muokattavan kansion pääkansioksi.</b></li><li><b>Kansion kuvaus:</b> Lisää kansiosi kuvaus.</b></li></ul>";
$pgv_lang["ra_view_task_help"]				= "~Tehtävänäkymä:~<ul><li><b>Tehtävän nimi:</b> Tällä palstalla ovat kaikkien luomiesi tehtävien nimet.</b></li><li><b>Kuvaus:</b> Tällä palstalla ovat tehtäviesi kuvaukset.</li><li><b>Aloituspäivämäärä:</b> Tässä ovat kaikkien tehtävien aloituspäivämäärät.</li><li><b>Valmis:</b>Tässä näkyy, onko tehtävä suoritettu valmiiksi.</li><li><b>Yksityiskohdat:</b>Tässä näkyvät tehtävien yksityiskohdat.</li><li><b>Poista:</b>Tässä poistetaan tehtävä.</li></ul>";
$pgv_lang["ra_task_view_help"]				= "~Näytä tehtävä:~<ul><li><b>Otsikko:</b>Tässä pitäisi olla lisäämäsi tehtävän otsikko.</li><li><b>Henkilöt:</b> Liitä henkilö, joka liittyy tehtävään</li><li><b>Kuvaus:</b> Lisää tehtävääsi kuvaava kuvaus.</li><li><b>Lähteet:</b> Lisää tehtävääsi liittyvät lähteet.</li><li>Näpäytä 'Muokkaa tehtävää'-painiketta muokataksesi tehtävän yksityiskohtia.</li></ul>";
$pgv_lang["ra_comments_help"]				= "~Kommentit:~<ul><li>Tähän tulevat tehtävään liittyvät kommentit. Näpäytä 'Lisää uusi kommentti'-painiketta lisätäksesi kommentin.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "~Luo tehtäviä:~<p>Tämä lomake luo tehtäviä _TODO-merkitsimistä GEDCOM-tiedostossasi.</p><ul><li><b>Luo:</b> Tarkista jokainen luotava tehtävä, kun painat 'Luo tehtävä'-painiketta.</li><li><b>Tehtävän nimi:</b> Tämä nimi annetaan tehtävälle.  This defaults to the text in the actual _TODO tag, excluding any CONT tag&quot;s</li><li><b>Tehtävän kuvaus:</b> Tehtävälle annettava kuvaus. Se luodaan _TODO-merkitsimen tekstistä sekä kaikesta, joka on liittynyt CONT-merkitsimiin.  </li><li><b>Muokkaa:</b> näpäytä linkkiä muokataksesi tehtävää.</li><li><b>Valitse kansio:</b> valitse se kansio, johon tehtävä sijoitetaan.</li><li><b>Luo:</b> luom rastitetut tehtävät.</li><li><b>Valmis:</b> vie sinut kansionäkymäsivulle.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "~Muokkaa luotuja tehtäviä:~<p>Tällä lomakkeella voit muokata tehtäviä, jotka on luotu _TODO-merkitsimistä GEDCOM-tiedostossasi.</p><ul><li><b>Tehtävän nimi:</b> Tämä nimi annetaan tehtävälle.  </li><li><b>Tehtävän kuvaus:</b> Tehtävän kuvaus annetaan. </li><li><b>Henkilö:</b> näpäytä linkkiä valitaksesi henkilön, joka liitetään tehtävään.</li><li><b>Lähde:</b> näpäytä linkkiä valitaksesi lähde, joka liitetään tehtävään..</li><li><b>Tallenna:</b> tallentaa kaikki muutokset ja vie sinut 'Luo tehtävä'-sivulle.</li><li><b>Peruuta:</b> peruuttaa kaikki muutokset ja vie sinut 'Luo tehtävä'-sivulle.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "~Konfiguroi yksityisyysasetuksia:~<ul><li><b>Näytä kaikille:</b> Näyttää määritellyt tehtävät kaikille.</li><li><b>Näytä autentikoiduille käyttäjille:</b> Näyttää määritellyt tehtävät vain autentikoiduille käyttäjille.</li><li><b> Näytä ylläpitäjille:</b> Näyttää määritellyt tehtävät vain ylläpitäjille.</li><li><b> Piilota myös ylläpitäjiltä:</b> Kukaan ei näe määriteltyjä tehtäviä.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Muokkaa tehtävää:~<ul><li><b>Otsikko:</b> Tässä tulee olla muokattavan tehtävän otsikko.</li><li><b>Kansio:</b> Tähän voit merkitä, mihin kansioon uusi tehtävä tulee.</li><li><b>Kuvaus:</b> Lisää muokattavan tehtävän kuvaus.</li><li><b>Lähteet:</b> Määrittele tai muokkaa tehtävään kuuluvat lähteet.</li><li><b>Henkilöt:</b> Määrittele tai muokkaa tehtävään kuuluvat henkilöt.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]						= "Näytä tehtävä";
$pgv_lang["add_new_comment"]				= "Lisää uusi kommentti";
$pgv_lang["no_indi_tasks"]					= "Tähän tehtävään ei ole liitetty yhtään henkilöä.";
$pgv_lang["no_sour_tasks"]					= "No tasks associated with this ssource.";
$pgv_lang["edit_comment"]					= "Muokkaa kommenttia";
$pgv_lang["comment_success"]				= "Kommenttisi on lisätty.";
$pgv_lang["comment_body"]					= 'Kommentti';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]			= "Haluatko varmasti poistaa tämän kommentin?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]					= "Lisää uusi tehtävä";
$pgv_lang["submit"]							= "Lähetä";
$pgv_lang["save_and_complete"]         		= "Tallenna ja lopeta";
$pgv_lang["assign_task"]					= "Luovuta tehtävä"; 
$pgv_lang["AddTask"]						= "Lisää tehtävä";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]		    	= "Konfiguroi yksityisyysasetuksia";
$pgv_lang["show_my_tasks"]         		    = "Näytä tehtäväni";
$pgv_lang["show_add_task"]		        	= "Näytä Lisää tehtävä";
$pgv_lang["show_auto_gen_task"]         	= "Näytä Luo tehtävä automaattisesti";
$pgv_lang["show_view_folders"]		    	= "Näytä Näytä kansio";
$pgv_lang["show_add_folder"]		    	= "Näytä Lisää kansio";
$pgv_lang["show_add_unlinked_source"]   	= "Näytä Lisää linkittämätön lähde";
$pgv_lang["show_view_probabilities"]		= "Näytä Näytä todennäköisyydet";

//-- Census Forms
$pgv_lang["rows"]                       	= "Rivien lukumäärä";
$pgv_lang["state"]                      	= "Tila";
$pgv_lang["call/url"]                   	= "Soita numeroon/URL:ään";
$pgv_lang["enumDate"]                   	= "Numerointipäiväys";
$pgv_lang["county"]                     	= "Maa";
$pgv_lang["city"]                       	= "Kaupunki";
$pgv_lang["complete_title"]					= "Viimeistele tehtävä";
$pgv_lang["select_form"]					= "Valitse lomake";
$pgv_lang["choose_form_label"]				= "Valitse yleinen tutkimuslomake:";
$pgv_lang["book"]                 			= "Kirja";
$pgv_lang["folio"]                   		= "Folio"; 
$pgv_lang["uk_county"]						= "Maakunta";
$pgv_lang["uk_boro"]						= "Kaupunki tai kunta";
$pgv_lang["uk_place"]						= "Paikka";

$pgv_lang["AssIndiFacts"]				= "Liitä henkilön tiedot"; 
$pgv_lang["AssFamFacts"]				= "Liitä perheen tiedot"; 
$pgv_lang["ra_facts"]					= "Tiedot";   
$pgv_lang["ra_fact"]					= "Tieto";   
$pgv_lang["ra_remove"]					= "poista";  
$pgv_lang["ra_inferred_facts"]			= "Päätellyt tiedot"; 
$pgv_lang["ra_person"]					= "Henkilö";
$pgv_lang["ra_reason"]					= "Syy"; 
$pgv_lang["success"]					= "Onnistui!"; 

$pgv_lang["registration_no"]			= "Rekisteröintinumero:"; 
$pgv_lang["serial_no"]					= "Sarjanumero:"; 
$pgv_lang["ra_no"]						= "Numero:"; 
$pgv_lang["order_no"]					= "Tilausnumero:"; 

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]				= "Omat tehtävät alue osoittaa nykyisen käyttäjän tehtävän ja voidaan konfiguroida näyttämään valmiit tehtävät tai tehtävät joita toistaiseksi ei ole luovutettu"; 
$pgv_lang["mytasks_block"] 						= "Omat tehtävät alue";
$pgv_lang["mytasks_edit"]               		= "Muokkaa";
$pgv_lang["mytasks_unassigned"]					= "Ei osoitettu"; 
$pgv_lang["mytasks_takeOn"]						= "Omaksu";  
$pgv_lang["mytasks_help"]						= "~OMA TEHTÄVÄ ALUE~<br /><br />Oma tehtävä alue näyttää nykyisen käyttäjän tehtävän ja voidaan konfiguroida näyttämään valmiit<br />tehtävät tai tehtävät joita toistaiseksi ei ole osoitettu";
$pgv_lang["mytask_show_tasks"]   				= "Näytetäänkö osoittamattomat tehtävät?"; 
$pgv_lang["mytask_show_completed"]				= "Näytetäänkö valmiit tehtävät?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		   	 		= "Lisää sukunimi:";
$pgv_lang["autosearch_givenname"]	    		= "Lisää etunimet:";
$pgv_lang["autosearch_byear"]		    		= "Lisää syntymävuosi:";
$pgv_lang["autosearch_bloc"]		    		= "Lisää syntymäpaikka:";  
$pgv_lang["autosearch_dyear"]		    		= "Lisää kuolinvuosi:"; 
$pgv_lang["autosearch_dloc"]		    		= "Lisää kuolinpaikka:";
$pgv_lang["autosearch_gender"]          		= "Lisää sukupuoli:";
$pgv_lang["autosearch_plugin_name"]     		= "";  
$pgv_lang["autosearch_fsurname"]				= "Lisää isän sukunimi:";
$pgv_lang["autosearch_fgivennames"]				= "Lisää isän etunimet:";
$pgv_lang["autosearch_msurname"]				= "Lisää äidin sukunimi:";
$pgv_lang["autosearch_mgivennames"]	    		= "Lisää äidin etunimet:"; 
$pgv_lang["autosearch_country"]  	    		= "Lisää maa:"; 
$pgv_lang["autosearch_plugin_name_ancestry"] 	= "Ancestry.com lisäohjelma";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] = "Ancestry.co.uk lisäohjelma";
$pgv_lang["autosearch_plugin_name_ellisIsland"] = "EllisIslandRecords.org lisäohjelma";
$pgv_lang["autosearch_plugin_name_genNet"] 		= "GeneaNet.com lisäohjelma";
$pgv_lang["autosearch_plugin_name_gen"]  		= "Genealogy.com lisäohjelma"; 
$pgv_lang["autosearch_plugin_name_fs"]   		= "FamilySearch.org lisäohjelma";
$pgv_lang["autosearch_plugin_name_werelate"]   	= "Werelate.org lisäohjelma";
$pgv_lang["autosearch_search"]           		= "Hae";
$pgv_lang["autosearch_keywords"] 				= "Avainsanat:"; 

//Folder deletion error messages
$pgv_lang["has_tasks"]                 			="Kansio sisältää tehtäviä eikä sitä voi poistaa";
$pgv_lang["has_folders"]               			="Kansio sisältää alikansioita eikä sitä voi poistaa";
?>
