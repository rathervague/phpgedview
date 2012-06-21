<?php
/**
 * Czech texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 * @version $Id: admin.cz.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["step2"]				= "Krok 2 z 4:";
$pgv_lang["gedcom_deleted"]		= "GEDCOM soubor [#GED#] byl úspěšně smazán.";
$pgv_lang["full_name"]			= "Celé jméno";
$pgv_lang["error_header"] 		= "Soubor GEDCOM, [#GEDCOM#], není na zadaném místě.";
$pgv_lang["manage_gedcoms"]		= "Správa GEDCOM souborů a úprava privátnosti";
$pgv_lang["created_indis"]			= "Tabulka <i>Osoby</i> byla úspěšně vytvořena.";
$pgv_lang["created_indis_fail"]	= "Není možné vytvořit tabulku <i>jednotlivců</i>.";
$pgv_lang["created_fams"]			= "Tabulka <i>Rodiny</i> byla úspěšně vytvořena.";
$pgv_lang["created_fams_fail"]	= "Není možné vytvořit tabulku <i>rodin</i>.";
$pgv_lang["created_sources"]		= "Tabulka <i>Prameny</i> byla úspěšně vytvořena.";
$pgv_lang["created_sources_fail"]	= "Není možné vytvořit tabulku <i>pramenů</i>.";
$pgv_lang["created_other"]			= "Tabulka <i>Ostatní</i> byla úspěšně vytvořena.";
$pgv_lang["created_other_fail"]	= "Není možné vytvořit tabulku <i>ostatních záznamů</i>.";
$pgv_lang["created_places"]			= "Tabulka <i>Místa</i> byla úspěšně vytvořena.";
$pgv_lang["created_places_fail"]	= "Není možné vytvořit tabulku <i>míst</i>.";
$pgv_lang["folder_created"]		= "Vytvořena složka";
$pgv_lang["add_gedcom"]			= "Přidat další GEDCOM";
$pgv_lang["add_new_gedcom"]		= "Vytvořit nový GEDCOM";
$pgv_lang["admin_approved"]		= "Váš účet na #SERVER_NAME# byl povolen";
$pgv_lang["admin_gedcom"]			= "Spravovat GEDCOM";
$pgv_lang["administration"]		= "Administrace";
$pgv_lang["ansi_encoding_detected"]	= "Rozpoznáno kódování ANSI.  PhpGedView pracuje nejlépe se soubory s kódováním UTF-8.";
$pgv_lang["ansi_to_utf8"]		= "Převést kódování v tomto GEDCOM souboru z ANSI (ISO-8859-1) na UTF-8?";
$pgv_lang["bytes_read"]				= "Načtené bajty:";
$pgv_lang["change_id"]			= "Změnit ID osob na:";
$pgv_lang["cleanup_places"]		= "Vyčištění míst";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Klikněte sem pro vstup do rodokmenu.";
$pgv_lang["configuration"]		= "Konfigurace";
$pgv_lang["confirm_user_delete"]	= "Jste si jistí, že chcete smazat uživatele";
$pgv_lang["create_user"]		= "Vytvořit uživatele";
$pgv_lang["dataset_exists"]			= "GEDCOM soubor s tímto názvem byl již do databáze importován.";
$pgv_lang["day_before_month"]		= "Den před měsícem (DD MM YYYY)";
$pgv_lang["do_not_change"]		= "Neměnit";
$pgv_lang["download_gedcom"]		= "Stáhnout GEDCOM";
$pgv_lang["download_note"]		= "POZNÁMKA: Velké GEDCOM soubory se mohou stahovat velmi dlouho. Jestliže PHP přeruší proces ještě před úplným stažením souboru, stažený GEDCOM nebude kompletní. Chcete-li se ujistit, že je váš soubor celý, podívejte se, jestli je na jeho konci řádek 0 TRLR. Stažení souboru by mělo trvat přibližně stejně dlouho jako jeho nahrání.";
$pgv_lang["editaccount"]			= "Umožnit tomuto uživateli upravovat informace o svém účtu";
$pgv_lang["empty_dataset"]			= "Chcete vymazat stará data a nahradit je novými?";
$pgv_lang["empty_lines_detected"]	= "Ve vašem GEDCOM souboru byly nalezeny prázdné řádky. Při čištění budou tyto řádky odstraněny.";
$pgv_lang["error_header_write"]	= "Do souboru GEDCOM [#GEDCOM#] nelze zapisovat. Zkontrolujte vlastnosti a přístupová práva souboru.";
$pgv_lang["example_date"]		= "Ukázka neplatného datového formátu z vašeho GEDCOMu:";
$pgv_lang["found_record"]			= "Nalezen záznam";
$pgv_lang["ged_import"]			= "Importovat";
$pgv_lang["gedcom_config_write_error"]	= "Chyba!!! Není možné zapisovat do konfiguračního souboru GEDCOMu.";
$pgv_lang["gedcom_downloadable"] 	= "Tento GEDCOM může být stažen po internetu!<br />Prosím přečtěte si odstavec o BEZPEČNOSTI v souboru <a href=\"readme.txt\">readme.txt</a> a zjednejte nápravu";
$pgv_lang["gedcom_file"]		= "Soubor GEDCOM:";
$pgv_lang["img_admin_settings"]		= "Upravit nastavení nakládání s obrázky";
$pgv_lang["import_complete"]			= "Importování je hotovo";
$pgv_lang["import_progress"]	= "Průběh nahrávání...";
$pgv_lang["inc_languages"]		= " Jazyky";
$pgv_lang["invalid_dates"]		= "Rozpoznány nesprávné datové formáty, vyčištěním budou tyto formáty změněny do podoby DD MMM YYYY (např. 1 JAN 2004).";
$pgv_lang["invalid_header"]		= "V GEDCOM souboru byly nalezeny řádky před hlavičkou GEDCOM (0 HEAD). Při čištění souboru budou tyto řádky odstraněny.";
$pgv_lang["logfile_content"]	= "Obsah \"log\" souboru";
$pgv_lang["macfile_detected"]	= "Byl nalezen soubor pro Macintosh. Při čištění bude tento soubor převeden na soubor pro DOS.";
$pgv_lang["merge_records"]			= "Sloučit záznamy";
$pgv_lang["month_before_day"]		= "Měsíc před dnem (MM DD YYYY)";
$pgv_lang["performing_validation"]	= "Provádění validace (zkontrolování) GEDCOMu, vyberte potřebné možnosti a klikněte na 'Pokračovat'";
$pgv_lang["pgv_registry"]		= "Zobrazit jiné weby používající PhpGedView";
$pgv_lang["place_cleanup_detected"]	= "Bylo rozpoznáno špatné kódování míst. Tyto chyby by měly být opraveny. Následující příklad ukazuje jedno z nesprávně zapsaných míst:";
$pgv_lang["please_be_patient"]			= "PROSÍM O STRPENÍ";
$pgv_lang["reading_file"]			= "Čtení souboru GEDCOM";
$pgv_lang["readme_documentation"]	= "README dokumentace";
$pgv_lang["rootid"]			= "Střen (proband) vývodu";
$pgv_lang["select_an_option"]		= "Vyberte jednu z možností:";
$pgv_lang["skip_cleanup"]			= "Přeskočit opravování";
$pgv_lang["update_myaccount"]		= "Aktualizovat můj účet";
$pgv_lang["update_user"]		= "Aktualizovat uživatelský účet";
$pgv_lang["upload_gedcom"]		= "Nahrát GEDCOM";
$pgv_lang["user_contact_method"]	= "Upřednostňovaný způsob kontaktu";
$pgv_lang["user_create_error"]		= "Není možné přidat uživatele. Prosím vraťte se zpět a zkuste to znovu.";
$pgv_lang["user_created"]		= " Uživatel byl úspěšně vytvořen.";
$pgv_lang["valid_gedcom"]		= "Validní GEDCOM.  Žádné opravy nebyly třeba.";
$pgv_lang["validate_gedcom"]		= "Potvrdit platnost GEDCOMu";
$pgv_lang["verified"]			= "Uživatel potvrdil registraci";
$pgv_lang["verified_by_admin"]		= "Uživatel byl adminem povolen";
$pgv_lang["verify_upload_instructions"]	= "Zvolíte-li pokračování, bude starý GEDCOM soubor nahrazen novým souborem, který jste nahráli, a importování začne znovu. Zvolíte-li konec, zůstane starý soubor zachován.";
$pgv_lang["view_logs"]			= "Zobrazit logfiles";
$pgv_lang["visibleonline"]			= "Viditelný pro jiné uživatele, když je online";
$pgv_lang["you_may_login"]		= " administrátorem stránek. Nyní se můžete odkazem níže přihlásit do systému PhpGedView:";


?>
