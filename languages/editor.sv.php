<?php
/**
 * English texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  PGV Development Team
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: editor.sv.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"]		= "Acceptera / Förkasta ändringar";
$pgv_lang["replace"]			= "Ersätt post";
$pgv_lang["append"]				= "Lägg till post";
$pgv_lang["review_changes"]		= "Granska ändringar i GEDCOM-fil";
$pgv_lang["remove_object"]			= "Ta bort objekt";
$pgv_lang["remove_links"]			= "Ta bort länk";
$pgv_lang["media_not_deleted"]		= "Mediamappen togs inte bort.";
$pgv_lang["thumbs_not_deleted"]		= "Miniatyrbildsmappen togs inte bort.";
$pgv_lang["thumbs_deleted"]			= "Miniatyrbildsmappen togs bort.";
$pgv_lang["show_thumbnail"]		= "Visa miniatyrbilder";
$pgv_lang["link_media"]			= "Länka media";
$pgv_lang["to_person"]			= "Till person";
$pgv_lang["to_family"]			= "Till familj";
$pgv_lang["to_source"]			= "Till källa";
$pgv_lang["edit_fam"]			= "Redigera familj";
$pgv_lang["copy"]				= "Kopiera";
$pgv_lang["cut"]				= "Klipp ut";
$pgv_lang["sort_by_birth"]		= "Sortera efter födelsedatum";
$pgv_lang["reorder_children"]	= "Ändra ordning på barn";
$pgv_lang["add_from_clipboard"]	= "Lägg till urklippskorgen:";
$pgv_lang["record_copied"]		= "Post som är kopierad till urklippskorgen";
$pgv_lang["add_unlinked_person"]= "Lägg till en olänkad person";
$pgv_lang["add_unlinked_source"]	= "Lägg till en olänkad källa";
$pgv_lang["server_file"]				= "Filnamn på servern";
$pgv_lang["server_file_advice"]			= "Ändra inte för att behålla orginalfilnamnet.";
$pgv_lang["server_file_advice2"]		= "Du kan skriva in en URL som börjar med &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Du kan skriva in upp till #GLOBALS[MEDIA_DIRECTORY_LEVELS]# mappnamn som följer efter standard &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Skriv inte in &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; som del av målmappens namn.";
$pgv_lang["server_folder_advice2"]		= "Posten kommer att ignoreras om du skriver in en URL i Filnamnsfältet.";
$pgv_lang["add_linkid_advice"]			= "Slriv in eller sök efter Idt för personen, familjen eller källan till vilket detta mediaobjekt ska länkas.";
$pgv_lang["use_browse_advice"]			= "Använd  &laquo;Browse&raquo;-knappen för att söka på din lokala dator efter önskad fil.";
$pgv_lang["add_media_other_folder"]		= "Annan mapp.. Skriv in mappnamn";
$pgv_lang["add_media_file"]				= "Existerande mediafil på servern";
$pgv_lang["main_media_ok1"]				= "Huvudmediafilen <b>#GLOBALS[oldMediaName]#</b> fick det nya namnet <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]				= "Huvudmediafilen <b>#GLOBALS[oldMediaName]#</b> blev flyttad ifrån <b>#GLOBALS[oldMediaFolder]#</b> till <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]				= "Huvudmediafil blev flyttad och omdöpt från <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> till <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Huvudmediafilen <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> finns inte.";
$pgv_lang["main_media_fail1"]			= "huvudmediafilen <b>#GLOBALS[oldMediaName]#</b> kunde inte döpas om till <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Huvudmediafilen <b>#GLOBALS[oldMediaName]#</b> kunde inte flyttas ifrån <b>#GLOBALS[oldMediaFolder]#</b> till <b>#GLOBALS[newMediaFolder]#.";
$pgv_lang["main_media_fail3"]			= "Huvudmediafilen kunde inte flyttas och döpas om ifrån <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> till <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Obs: Du måste aktivera \'Används GEDCOM(RESN) integritetsrestriktioner\' för att denna inställning ska ha någon effekt. ";
$pgv_lang["thumb_media_ok1"]			= "Miniatyrbildsfilen b>#GLOBALS[oldMediaName]#</b> döptes om till <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "Miniatyrbildsfilen <b>#GLOBALS[oldMediaName]#</b> flyttades ifrån <b>#GLOBALS[oldThumbFolder]#</b> till <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "Miniatyrbildsfilen flyttades och döptes om ifrån <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> till <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]			= "Miniatyrsbildsfilen <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> finns inte.";
$pgv_lang["thumb_media_fail1"]			= "Miniatyrbildsfilen <b>#GLOBALS[oldMediaName]#</b> kunde inte döpas om till <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Miniatyrbildfilen <b>#GLOBALS[oldMediaName]#</b> kunde inte flyttas ifrån <b>#GLOBALS[oldThumbFolder]#</b> till <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Miniatyrbildsfiler kunde inte flyttas och döpas om ifrån <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> till <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]			= "Lägg till ny bekant";
$pgv_lang["edit_sex"]			= "Redigera kön";
$pgv_lang["add_obje"]			= "Lägg till ett nytt multimediaobjekt";
$pgv_lang["add_name"]			= "Lägg till nytt namn";
$pgv_lang["edit_raw"]			= "Redigera rå GEDCOM-post";
$pgv_lang["label_add_remote_link"]  = "Lägg till länk";
$pgv_lang["label_gedcom_id"]        = "Databas-ID";
$pgv_lang["label_local_id"]         = "Person-ID";
$pgv_lang["accept"]				= "Godkänn";
$pgv_lang["accept_all"]			= "Godkänn alla ändringar";
$pgv_lang["accept_gedcom"]		= "Bestäm för varje ändring att antingen godkänna eller underkänna den.<br /><br />För att godkänna alla ändringar på en gång, klicka <b>\"Accpetera alla ändringar\"</b> i boxen nedan.<br />För att få mer information om ändringar, <br />Klicka på <b>\"Visa Ändringar\"</b> för att se skillnaderna mellan den gamla och den nya posten, <br />eller klicka <b>\"Visa GEDCOM-post\"</b> för att se den nya datan i GEDCOM-format.";
$pgv_lang["accept_successful"]	= "Godkända ändringar införda i databasen";
$pgv_lang["add_child"]			= "Lägg till barn";
$pgv_lang["add_child_to_family"]= "Lägg till barn till denna familj";
$pgv_lang["add_fact"]			= "Lägg till ny fakta tag";
$pgv_lang["add_father"]			= "Lägg till en ny fader";
$pgv_lang["add_husb"]			= "Lägg till make";
$pgv_lang["add_husb_to_family"]	= "Lägg till en make till denna familj";
$pgv_lang["add_media"]			= "Lägg till ny mediaartikel";
$pgv_lang["add_media_lbl"]		= "Lägg till media";
$pgv_lang["add_mother"]			= "Lägg till en ny moder";
$pgv_lang["add_new_chil"] 		= "Lägg till ett nytt barn";
$pgv_lang["add_new_husb"]		= "Lägg till en ny make";
$pgv_lang["add_new_wife"]		= "Lägg till en ny maka";
$pgv_lang["add_note"]			= "Lägg till ny anteckning";
$pgv_lang["add_note_lbl"]		= "Lägg till en anteckning";
$pgv_lang["add_sibling"]		= "Lägg till en bror eller syster";
$pgv_lang["add_son_daughter"]	= "Lägg till en son eller dotter";
$pgv_lang["add_source"]			= "Lägg till nytt källcitat";
$pgv_lang["add_source_lbl"]		= "Lägg till källcitat";
$pgv_lang["add_wife"]			= "Lägg till maka";
$pgv_lang["add_wife_to_family"]	= "Lägg till en maka till denna familj";
$pgv_lang["advanced_search_discription"] = "Avancerad sajtsökning";
$pgv_lang["auto_thumbnail"]			= "Automatiska miniatyrbilder";
$pgv_lang["basic_search"]			= "sök";
$pgv_lang["basic_search_discription"] = "Standard sajtsökning";
$pgv_lang["birthdate_search"]		= "Födelsedatum: ";
$pgv_lang["birthplace_search"]		= "Födelseort: ";
$pgv_lang["change"]					= "Ändra";
$pgv_lang["change_family_instr"]	= "Använd denna sida att lägga till eller tabort familjemedlemmar.<br /><br />För varje medlem i familjen kan du använda ändra länken för att välja en annan person att ta platsen i familjen. Du kan också tabortlänken för att tabort personen från familjen.<br /><br />När du är klar med ändringarna av familjemedlemmarna ska du klicka på spara-knappen för att spara ändringarna.<br />";
$pgv_lang["change_family_members"]	= "Ändra familjemedlemmar";
$pgv_lang["changes_occurred"]	= "Följande ändringar har gjorts för denna person:";
$pgv_lang["confirm_remove"]			= "Är du säker på att du vill ta bort denna person ifrån familjen?";
$pgv_lang["confirm_remove_object"]	= "Är du säker på att du vill tabort detta objekt ifrån databasen?";
$pgv_lang["create_repository"]		= "Skapa arkiv";
$pgv_lang["create_source"]		= "Skapa en ny källa";
$pgv_lang["current_person"]         = "Samma som nuvarande";
$pgv_lang["date"]				= "Datum";
$pgv_lang["deathdate_search"]		= "Dödsdatum: ";
$pgv_lang["deathplace_search"]		= "Dödsort: ";
$pgv_lang["delete_dir_success"]		= "Media och miniatyrbildsmappen togs bort.";
$pgv_lang["delete_file"]			= "Radera fil";
$pgv_lang["delete_repo"]			= "Radera arkiv";
$pgv_lang["directory_not_empty"]	= "Mappen är inte tom.";
$pgv_lang["directory_not_exist"]	= "Mappen existerar inte.";
$pgv_lang["error_remote"]           = "Du har valt en sajt från en annan plats.";
$pgv_lang["error_same"]             = "Du har valt samma sajt.";
$pgv_lang["external_file"]			= "Detta mediaobjekt finns inte som file på denna server. Den kan inte flyttas, raderas eller döpas om.";
$pgv_lang["file_missing"]		= "Ingen fil mottogs. Ladda upp filen igen.";
$pgv_lang["file_partial"]		= "Filen blev endast delvis uppladdad, var god försök igen";
$pgv_lang["file_success"]		= "Filen laddades upp utan problem";
$pgv_lang["file_too_big"]		= "Uppladdad fil överskrider max tillåtna storlek";
$pgv_lang["folder"]		 		= "Mapp";
$pgv_lang["gedcom_editing_disabled"]	= "Redigering av denna GEDCOM har stängta av av administratören.";
$pgv_lang["gedcomid"]			= "GEDCOM personpostID";
$pgv_lang["gedrec_deleted"]		= "GEDCOM-post raderad.";
$pgv_lang["gen_thumb"]			= "Skapa miniatyrbilder";
$pgv_lang["gender_search"]			= "Kön: ";
$pgv_lang["generate_thumbnail"]	= "Generera miniatyrbilder automatiskt från ";
$pgv_lang["hebrew_givn"]			= "Hebreiskt förnamn";
$pgv_lang["hebrew_surn"]			= "Hebreiskt efternamn";
$pgv_lang["hide_changes"]		= "Klicka här för att dölja ändringar.";
$pgv_lang["highlighted"]			= "Framhäv bild";
$pgv_lang["illegal_chars"]		= "Otillåtna tecken i namnet";
$pgv_lang["invalid_search_multisite_input"] = "Var vänlig skriv in ett av följande: namn, födelsedatum, födelseort, dödsdatum, dödsort eller kön ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Var vänlig sök igen med mer information än kön";
$pgv_lang["label_diff_server"]      = "Annan sajt";
$pgv_lang["label_location"]         = "Sajtplats";
$pgv_lang["label_password_id2"]		= "Lösenord: ";
$pgv_lang["label_rel_to_current"]   = "Relation till vald person";
$pgv_lang["label_remote_id"]        = "Person-ID för person på annan sajt";
$pgv_lang["label_same_server"]      = "Samma sajt";
$pgv_lang["label_site"]             = "Sajt";
$pgv_lang["label_site_url"]         = "Sajt URL:";
$pgv_lang["label_username_id2"]		= "Användarnamn: ";
$pgv_lang["lbl_server_list"]        = "Använd en existerande sajt.";
$pgv_lang["lbl_type_server"]         = "Skriv in en ny sajt.";
$pgv_lang["link_as_child"]			= "Länka personen till existerande familj som barn";
$pgv_lang["link_as_husband"]		= "Länka personen till existerande familj som make";
$pgv_lang["link_success"]			= "Lyckades lägga till länk";
$pgv_lang["link_to_existing_media"]		= "Länka till en existerande mediaartikel";
$pgv_lang["max_media_depth"]		= "Du kan endast flytta #MEDIA_DIRECTORY_LEVELS#-mappar djupt";
$pgv_lang["max_upload_size"]	= "Max uppladdningsstorlek: ";
$pgv_lang["media_deleted"]			= "Mediamappen borttagen.";
$pgv_lang["media_exists"]			= "Mediafil existerar redan.";
$pgv_lang["media_file"]			= "Mediafiler";
$pgv_lang["media_file_deleted"]		= "Mediafiler raderades.";
$pgv_lang["media_file_moved"]			= "Mediafiler borttagna.";
$pgv_lang["media_file_not_moved"]	= "Mediafil kunde inte flyttas.";
$pgv_lang["media_file_not_renamed"]	= "Mediafil kunde inte flyttas eller döpas om.";
$pgv_lang["media_thumb_exists"]		= "Media-miniatyr existerar redan.";
$pgv_lang["multiple_gedcoms"]		= "Denna fil är länkad till en databas på denna server. Den kan inte raderas flyttas eller döpas om förrän dessa länkar är borttagna.";
$pgv_lang["must_provide"]		= "Du måste tillhandahålla";
$pgv_lang["name_search"]			= "Namn: ";
$pgv_lang["new_repo_created"]		= "Nytt arkiv skapat";
$pgv_lang["new_source_created"]	= "Ny källa skapades korrekt.";
$pgv_lang["no_changes"]			= "Det finns för närvarande inga ändringar som behöver granskas.";
$pgv_lang["no_known_servers"]		= "Inga kända servrar.<br />Inget resultat kommer att hittas.";
$pgv_lang["no_temple"]			= "Inget tempel - Living Ordinance";
$pgv_lang["no_upload"]			= "Uppladdning av media filer är inte tillåten eftersom multimediaartiklar är avstängt eller så är mediamappen inte skrivbar.";
$pgv_lang["paste_id_into_field"]= "Klistra in följande källid in i ditt redigeringsfält för att referera till denna källa  ";
$pgv_lang["paste_rid_into_field"]	= "Klistra in följande arkivid i ditt redigeringsfält för att referera till detta arkiv ";
$pgv_lang["photo_replace"] 		= "Vill du byta ut ett äldre foto med detta?";
$pgv_lang["privacy_not_granted"]= "Du har inte access till";
$pgv_lang["privacy_prevented_editing"]	= "Integritetsinställningarna hindrar dig från att redigera denna post.";
$pgv_lang["record_marked_deleted"]		= "Denna post har markerats för radering efter godkännande av administratören.";
$pgv_lang["replace_with"]			= "Ersätt med";
$pgv_lang["show_changes"]		= "Denna post har uppdaterats. Klicka här för att se ändringarna.";
$pgv_lang["thumb_genned"]		= "Miniatyrbilder #thumbnail# genererades automatiskt.";
$pgv_lang["thumbgen_error"]		= "Miniatyrbilden #thumbnail# kunde inte genereras automatiskt. ";
$pgv_lang["thumbnail"]			= "Miniatyrbild att ladda upp";
$pgv_lang["title_remote_link"]      = "Lägg till länk från annan plats";
$pgv_lang["undo"]				= "Ångra";
$pgv_lang["undo_all"]			= "Ångra alla ändringar";
$pgv_lang["undo_all_confirm"]	= "Är du säker på att du vill ångra alla ändringar gjorde på denna GEDCOM-fil?";
$pgv_lang["undo_successful"]	= "Ångra lyckades";
$pgv_lang["update_successful"]	= "Uppdatering genomförd";
$pgv_lang["upload"]					= "Ladda upp";
$pgv_lang["upload_error"]		= "Det uppstod ett fel vid uppladdningen av din fil.";
$pgv_lang["upload_media"]		= "Ladda upp mediafiler";
$pgv_lang["upload_media_help"]	= "~#pgv_lang[upload_media]#~<br /><br />Välj filer från din lokala dator som ska laddas upp till din server. Alla filer kommer att laddas upp till mappen <b>#MEDIA_DIRECTORY#</b> eller til en av dess undermappar.<br /><br />Mappnamnen som du angav kommer att läggas till #MEDIA_DIRECTORY#. T.ex. #MEDIA_DIRECTORY#myfamily. Om miniatyrbildsmappen inte finns kommer den att skapas automatiskt.";
$pgv_lang["upload_successful"]	= "Uppladdning lyckades";
$pgv_lang["view_change_diff"]	= "Visa förändringar";

$pgv_lang["advanced_name_fields"]	= "Övriga namn (smeknamn, vigselnamn etc.)";
$pgv_lang["select_events"]			= "Välj händelse";
$pgv_lang["source_events"]			= "Associera händelse med denna källa";
$pgv_lang["admin_override"]			= "Administratörsinställningar";
$pgv_lang["no_update_CHAN"]			= "Uppdatera inte CHAN (Senast ändrade) posten";

$pgv_lang["add_marriage"]			= "Lägg till en ny vigsel";
$pgv_lang["edit_concurrency_change"] = "Denna post ändrades senast av <i>#CHANGEUSER#</i> den #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Posten med id #PID# har ändrats av en annan användare sedan du senast  besökte den.";
$pgv_lang["edit_concurrency_msg1"]	= "Ett fel uppstod när redigeringsformuläret skapades. En annan användare kan ha ändrat posten sedan du senast tittade på den.";
$pgv_lang["edit_concurrency_reload"]	= "Använd ditt webprograms tillbaka-knapp för att ladda om sidan så att du är säker på att du arbetar med den senaste datan.";
?>
