<?php
/**
 * Italian Language file
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @author Lorenzo Simionato, Fabio Parri
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: configure_help.it.php 6578 2009-12-20 09:51:08Z volschin $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

//-- CONFIGURE FILE MESSAGES
$pgv_lang["does_not_exist"]		= "non esiste";
$pgv_lang["DBTYPE"]			= "Tipo di Database";
$pgv_lang["DBHOST"] = "Database Host";
$pgv_lang["DBHOST_help"] = "Il DNS o l'indirizzo IP del computer che ospita il tuo database. Questo parametro è ignorato se utilizzi un database SQLite.";
$pgv_lang["DBUSER"] = "Database Username:";
$pgv_lang["DBUSER_help"] = "The MySQL database username required to login to your database.";
$pgv_lang["DBPASS"] = "Database Password";
$pgv_lang["DBPASS_help"] = "The MySQL database password for the user you entered in the Username field.";
$pgv_lang["DBNAME"] = "Nome Database";
$pgv_lang["server_url_note"]	= "Questo dovrebbe essere l'URL alla cartella di PhpGedView. Dovresti cambiarlo solo se sai quello che stai facendo. PhpGedView ha determinato che questo valore dovrebbe essere: <b>#GUESS_URL#</b>";
$pgv_lang["LANGUAGE"] = "Lingua";
$pgv_lang["LOGFILE_CREATE"]		= "Archivia file di log";
$pgv_lang["return_editconfig"]		= "Potrai tornare a questa configurazione in qualunque momento andando con il tuo browser su <i>edit_config.php</i> o cliccando il link per la <b>Configurazione</b> sulla pagina <b>#pgv_lang[gedcom_adm_head]#</b>.<br />";
$pgv_lang["save_config"] 	= "Salva configurazione";
$pgv_lang["save_changed_settings"]		= "Salva cambiamenti";

//-- edit privacy messages

//-- language edit utility
$pgv_lang["edit_langdiff"]	= "Modifica il contenuto dei file di linguaggio";
$pgv_lang["edit_lang_utility"]	= "Utility per editare i file di linguaggio";
$pgv_lang["edit_lang_utility_help"]	= "Puoi usare questa utility per modificare i contenuti di un file di linguaggio partendo dai contenuti di quello in lingua inglese.<br /><br />Vedrai i contenuti del file originale (in Inglese) e quelli dello stesso file (ce ne sono quattro) nella lingua scelta. Cliccando sul messaggio sotto la versione inglese, si aprirà una nuova finestra dove potrai modificare il testo. Potrai poi salvare i cambiamenti o annullarli.";
$pgv_lang["edit_lang_utility_warning"]	= "ATTENZIONE!<br /><br />Se premi il pulsante <b>#pgv_lang[close_window_without_refresh]#</b>, potresti non vedere i tuoi cambiamenti sullo schermo finché non ricaricherai la pagina manualmente. È possibile che il tuo file della lingua venga dsitrutto se aggiungi un messaggio che non è ancora apparso all'interno del file di linguaggio o se modifichi un messaggio ancora.<br /><br />Se non sai quello che stai facendo,  per favore non usare il pulsante <b>#pgv_lang[close_window_without_refresh]#</b>.";
$pgv_lang["language_to_edit"]	= "Lingua da modificare";
$pgv_lang["file_to_edit"]	= "Tipo del file di lingua da modificare";
$pgv_lang["check"]			= "Controlla";
$pgv_lang["lang_save"]		= "Salva";
$pgv_lang["contents"]		= "Contenuti";
$pgv_lang["editlang"]			= "Modifica";
$pgv_lang["no_content"]		= "Nessun contenuto";
$pgv_lang["editlang_help"]	= "Modifica il messaggio dal file del linguaggio";
$pgv_lang["savelang_help"]	= "Salva il messaggio modificato";
$pgv_lang["original_message"]	= "Messaggio originale";
$pgv_lang["message_to_edit"]	= "Messaggio modificato";
$pgv_lang["language_to_export"]	= "Linguaggio da esportare";
$pgv_lang["export"]		= "Esporta";
$pgv_lang["new_language"]	= "Nuovo linguaggio";
$pgv_lang["old_language"]	= "Vecchio linguaggio";
$pgv_lang["compare"]		= "Confronta";
$pgv_lang["comparing"]		= "File Linguaggio confrontati";
$pgv_lang["additions"]		= "Aggiunte";
$pgv_lang["no_additions"]	= "Nessuna aggiunta";
$pgv_lang["lang_name_italian"]		= "Italiano";
$pgv_lang["translation_forum"]		= "Forum Traduzioni di PhpGeView su SourceForge";
$pgv_lang["translation_forum_help"]	= "Questo <a href=\"http://sourceforge.net/forum/forum.php?forum_id=294245\" target=_blank><b>collegamento</b></a> apre una nuova finestra del browser. Sari reindirizzato al forum delle traduzioni di PhpGedView, dove potrai discutere su argomenti riguardo ad esse.";
$pgv_lang["add_new_lang_button"]	= "Aggiungi nuova lingua";
$pgv_lang["hide_translated"]		= "Nascondi tradotti";
$pgv_lang["um_files_exist"] = "Uno o più file esistono già. Vuoi sovrascriverli?";

$pgv_lang["welcome_new2"]			= "<br /><br />Se stai vedendo questa pagina, hai correttamente installato PhpGedView sul tuo server e sei pronto per iniziare a configurarlo secondo le tue esigenze.<br />";
$pgv_lang["welcome_new_help"]		= "~#pgv_lang[welcome_new]#~#pgv_lang[welcome_new2]#Questa pagina di Aiuto ti guiderà attraverso il processo di configurazione. Mentre completerai i diversi campi, questa finestra ti darà informazioni sul campo che stai completando. Puoi chiudere questa finestra; per aprire di nuovo fare clic su uno dei \"?\"  punti interrogativi accanto al nome del campo. <br />";
$pgv_lang["upload_path"]			= "File da caricare";
$pgv_lang["gedcom_path"]			= "Percorso e nome del GEDCOM sul server";
$pgv_lang["ged_title"]			= "Titolo del GEDCOM";
$pgv_lang["CHARACTER_SET"]		= "Codifica Caratteri";
$pgv_lang["CALENDAR_FORMAT"]		= "Formato Calendario";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT0"]	= "Nessun testo predefinito";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT1"]	= "Predefiniti testo afferma che tutti gli utenti possono richiedere un account utente";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT1"]	= "Testo predefinito: tutti gli utenti possono richiedere un nuovo account utente";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT2"]	= "Testo predefinito: l'amministratore deciderà su ogni richiesta di nuovi account utente";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT3"]	= "Testo predefinito: solo i parenti possono richiedere un account utente";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT4"]	= "Testo di benvenuto a scelta dell'utente, inserito qui sotto";
$pgv_lang["SEARCHLOG_CREATE"]		= "Archivia files di Log delle ricerche";
$pgv_lang["CHANGELOG_CREATE"]		= "Archivia files di Log delle modifiche";
$pgv_lang["HIDE_LIVE_PEOPLE"]		= "Attiva Privacy";
$pgv_lang["CHECK_CHILD_DATES"]		= "Controlla date di nascita";
$pgv_lang["MAX_ALIVE_AGE"]		= "Età a cui si assume che una persona sia morta";
$pgv_lang["WELCOME_TEXT_AUTH_MODE"]	= "Testo di Benvenuti sulla pagina di Login";
$pgv_lang["REQUIRE_AUTHENTICATION"]	= "Richiedi l'autenticazione degli utenti";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST_HEAD"] = "Usa l'intestazione standard per il testo di Benvenuto personalizzato";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST"]	= "Testo di Benvenuto personalizzato";
$pgv_lang["SHOW_DEAD_PEOPLE"]			= "Visualizza le persone morte";
$pgv_lang["SHOW_LIVING_NAMES"]			= "Mostra nomi dei viventi";
$pgv_lang["SHOW_SOURCES"]			= "Visualizza le fonti";
$pgv_lang["ENABLE_CLIPPINGS_CART"]	= "Abilita Carrello Ritagli";
?>
