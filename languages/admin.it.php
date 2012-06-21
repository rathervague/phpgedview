<?php
/**
 * Italian texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 * @author Lorenzo Simionato, Fabio Parri, Marco Renini
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: admin.it.php 6987 2010-10-31 14:34:28Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["module_admin"] = "Amministrazione Moduli";
$pgv_lang["mod_admin_installed"] = "Moduli Installati";
$pgv_lang["mod_admin_tabs"] = "Gestisci Tab";
$pgv_lang["mod_admin_menus"] = "Gestisci Menu";
$pgv_lang["mod_admin_intro"] = "Qui sotto sono elencati tutti i Moduli installati in questa istanza di PhpGedView. L'installazione dei Moduli avviene copiandoli nell'apposita cartella <i>modules</i>. Qui puoi impostare, per ogni GEDCOM, il livello di accesso ad ogni modulo. Inoltre, se un modulo include anche dei tab per la pagina individuale, o dei menu per l'apposita barra, qui puoi impostarne il livello di accesso e l'ordine.";
$pgv_lang["mod_admin_active"] = "Attivo";
$pgv_lang["mod_admin_name"] = "Nome Modulo";
$pgv_lang["mod_admin_description"] = "Descrizione";
$pgv_lang["mod_admin_version"] = "Versione / PGV";
$pgv_lang["mod_admin_hastab"] = "Tab?";
$pgv_lang["mod_admin_hasmenu"] = "Menu?";
$pgv_lang["mod_admin_access_level"] = "Livello di Accesso";
$pgv_lang["mod_admin_order"] = "Ordine";
$pgv_lang["mod_admin_config"] = "Impostazioni Modulo";
$pgv_lang["mod_admin_settings"] = "Impostazioni Configurazione Modulo";
$pgv_lang["ret_module_admin"] = "Ritorna alla pagina di Amministrazione Moduli";
$pgv_lang["ret_admin"] = "Ritorna alla pagina di Amministrazione";

$pgv_lang["enter_comment"]	= "Puoi inserire un commento qui.";
$pgv_lang["upload_a_gedcom"] 		= "Carica un file GEDCOM";
$pgv_lang["start_entering"] 		= "Inizia l'inserimento di dati";
$pgv_lang["add_gedcom_from_path"] 	= "Aggiungi un file GEDCOM da una cartella sul disco";
$pgv_lang["get_started_instructions"]	= "Scegli una di queste opzioni per iniziare ad utilizzare PhpGedView";

$pgv_lang["admin_users_exists"]		= "I seguenti amministratori esistono già:";
$pgv_lang["install_step_1"] = "Controllo dell'Ambiente di Esecuzione";
$pgv_lang["install_step_2"] = "Connessione al database";
$pgv_lang["install_step_3"] = "Creazione Tabelle";
$pgv_lang["install_step_4"] = "Configurazione del sito";
$pgv_lang["install_step_5"] = "Lingue";
$pgv_lang["install_step_6"] = "Salva la Configurazione";
$pgv_lang["install_step_7"] = "Crea un utente amminisitratore";
$pgv_lang["install_wizard"] = "Installazione guidata";
$pgv_lang["basic_site_config"] = "Impostazioni di base";
$pgv_lang["adv_site_config"] = "Impostazioni avanzate";
$pgv_lang["config_not_saved"] = "*Le impostazioni non saranno salvate<br />fino al passo 6";
$pgv_lang["download_config"] = "Scarica file config.php";
$pgv_lang["site_unavailable"] = "Il sito non è al momento disponibile";
$pgv_lang["to_manage_users"] = "Per amministrare gli utenti, vai alla pagina <a href=\"useradmin.php\">Amministrazione Utenti</a>.";
$pgv_lang["db_tables_created"] = "Tabelle del Database create con successo";
$pgv_lang["config_saved"] = "Configurazione salvata con successo";
$pgv_lang["checking_errors"]		= "Ricerca di errori...";
$pgv_lang["checking_php_version"]		= "Controllo della versione di PHP richiesta:";
$pgv_lang["failed"]		= "Fallito";
$pgv_lang["pgv_requires_version"]		= "PhpGedView richiede PHP versione #PGV_REQUIRED_PHP_VERSION# o successiva.";
$pgv_lang["using_php_version"]		= "Stai utilizzando PHP versione";
$pgv_lang["checking_db_support"]		= "Controllo per supporto minimo per database:";
$pgv_lang["no_db_extensions"]		= "Non hai nessuna delle estensioni di database supportate.";
$pgv_lang["db_ext_support"]		= "Hai il supporto a #DBTEXT#";
$pgv_lang["checking_config.php"]		= "Controllo file config.php:";
$pgv_lang["config.php_missing"]		= "Il file config.php non è stato trovato.";
$pgv_lang["config.php_missing_instr"]		= "Questa procedura guidata di installazione non sarà in grado di scrivere le tue impostazioni nel file config.php. Dovresti fare una copia del file config.dist e rinominarlo in config.php. In alternativa, dopo aver completato la procedura guidata potrai scaricare le tue impostazioni e caricare il file config.php risultante.";
$pgv_lang["config.php_not_writable"]		= "Il file config.php non è scrivibile.";
$pgv_lang["config.php_not_writable_instr"]		= "Questa procedura guidata di installazione non sarà in grado di scrivere le tue impostazioni nel file config.php. Dovresti impostare i permessi di scrittura sul file. In alternativa, dopo aver completato la procedura guidata potrai scaricare le tue impostazioni e caricare il file config.php risultante.";
$pgv_lang["passed"]		= "Passato";
$pgv_lang["config.php_writable"]		= "Il file config.php è presente e scrivibile.";
$pgv_lang["checking_warnings"]		= "Controllo per warnings...";
$pgv_lang["checking_timelimit"]		= "Controllo permesso di impostare il tempo massimo di esecuzione:";
$pgv_lang["cannot_change_timelimit"]		= "Impossibile cambiare il tempo massimo di esecuzione.";
$pgv_lang["cannot_change_timelimit_instr"]		= "Potresti non riuscire ad utilizzare tutte le funzioni, su database particolarmente grandi con molte persone";
$pgv_lang["current_max_timelimit"]		= "Il tuo time-limit è";
$pgv_lang["check_memlimit"]		= "Controllo possibilità di modificare il time-limit";
$pgv_lang["cannot_change_memlimit"]		= "Impossibile modificare il time-limit";
$pgv_lang["cannot_change_memlimit_instr"]		= "Potresti non riuscire ad utilizare tutte le funzioni, su dabatase grandi con molti individui";
$pgv_lang["current_max_memlimit"]		= "L'attuale limite di memoria è";
$pgv_lang["check_upload"]		= "Controllo possibilità di caricare file:";
$pgv_lang["current_max_upload"]		= "La dimensione massima dei file caricabili è:";
$pgv_lang["check_gd"]		= "Controllo libreria di immagini GD";
$pgv_lang["cannot_use_gd"]		= "Non hai la libreria di immagini GD. Non sarà possibile creare le anteprime automaticamente";
$pgv_lang["check_sax"]		= "Controllo libreria SAX XML:";
$pgv_lang["cannot_use_sax"]		= "Non hai la libreria SAX XML. Non sarà possibile creare rapporti e stampe di qualsiasi forma nè alcune funzioni ausiliarie.";
$pgv_lang["check_dom"]		= "Controllo libreria DOM XML:";
$pgv_lang["cannot_use_dom"]		= "Non hai la libreria DOM XML. Non sarà possibile esportare XML.";
$pgv_lang["check_calendar"]		= "Controllo libreria Calendario Avanzata:";
$pgv_lang["cannot_use_calendar"]		= "Non hai il supporto per la libreria calendario avanzata. Non sarà possibile utilizzare alcune funzioni avanzate di calendario.";
$pgv_lang["warnings_passed"]		= "Superati tutti i controlli.";
$pgv_lang["warning_instr"]		= "Se qualche controllo non viene superato, sarà ancora possibile utilizzare PhpGedView su questo server, ma alcune funzionalità possono essere disabilitate o puoi avere performance ridotte.";

$pgv_lang["associated_files"]		= "File associati:";
$pgv_lang["remove_all_files"]		= "Rimuovere tutti i file non essenziali";
$pgv_lang["warn_file_delete"]		= "Questo file contiene informazioni importanti, quali impostazioni di lingua o in attesa di cambiare i dati. Sei sicuro di voler cancellare questo file?";
$pgv_lang["deleted_files"]          = "I file eliminati:";
$pgv_lang["index_dir_cleanup_inst"]	= "Per cancellare un file o una sottocartella dall'Indice delle cartelle, trascinarli nel cestino o selezionare la casella di controllo. Fare clic sul pulsante Cancella per rimuovere definitivamente i file indicati.<br /><br />I File contrassegnati con  <img src=\"./images/RESN_confidential.gif\" alt=\"\" /> richiedono appropriate operazioni e non possono essere rimossi.<br />I File contrassegnati con <img src=\"./images/RESN_locked.gif\" alt=\"\" /> hanno impostazioni importanti o modifiche pendenti e dovrebbero essere eliminati solo se sei sicuro di sapere cosa stai facendo.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Pulitura Indice Directory";
$pgv_lang["clear_cache_succes"]		= "I file della cache sono stati rimossi";
$pgv_lang["clear_cache"]			= "Cancella file di cache";
$pgv_lang["sanity_err0"]			= "Errori:";
$pgv_lang["sanity_err1"]			= "È necessaria la versione #PGV_REQUIRED_PHP_VERSION# o superiore di PHP";
$pgv_lang["sanity_err2"]			= "Il file o la cartella <i>#GLOBALS[whichFile]#</i> non esiste. Verifica che il file o la cartella sia effettivamente esistente, che non sia denominato diversamente e che abbia i corretti permessi di lettura";
$pgv_lang["sanity_err3"]			= "Il file <i>#GLOBALS[whichFile]#</i> non è stato caricato correttamente. Prova a ricaricarlo.";
$pgv_lang["sanity_err4"]			= "Il file <i>config.php</i> è corrotto.";
$pgv_lang["sanity_err5"]			= "Il file <i>config.php</i> non è scrivibile.";
$pgv_lang["sanity_err6"]			= "La cartella <i>#GLOBALS[INDEX_DIRECTORY]#</i> non è scrivibile.";
$pgv_lang["sanity_warn0"]			= "Avvertenze:";
$pgv_lang["sanity_warn1"]			= "La cartella <i>#GLOBALS[MEDIA_DIRECTORY]#</i> non è scrivibile. Non ti sarà possibile caricare file multimediali o generare anteprime in PhpGedView.";
$pgv_lang["sanity_warn2"]			= "La cartella <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> non è scrivibile. Non sarà possibile caricare o generare anteprime in PhpGedView.";
$pgv_lang["sanity_warn3"]			= "La libreria per le immagini GD non esiste. PhpGedView funzionerà comunque, ma alcune funzionalità, come la generazione di anteprime e diagrammi circolari non possono funzionare senza la libreria GD. Per favore, leggi <a href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a> per ulteriori informazioni.";
$pgv_lang["sanity_warn4"]			= "La libreria XML Parser non esiste. PhpGedView funzionerà comunque, ma alcune funzionalità, come i rapporti e i servizi web non possono funzionare senza la libreria XML Parser. Per favore, leggi <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a> per ulteriori informazioni.";
$pgv_lang["sanity_warn5"]			= "La libreria DOM XML non esiste. PhpGedView funzionerà comunque, ma alcune funzionalità, come l'esportazione dei ritagli, scarico e servizi web non funzioneranno. Per favore, leggi <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a> per ulteriori informazioni.";
$pgv_lang["sanity_warn6"]			= "La libreria calendario non esiste. PhpGedView funzionerà comunque, ma alcune funzionalità, come la conversione in altri calendari (ad esempio Ebraico o Francese) non funzioneranno, anche se questo non è essenziale per PhpGedView. Per favore leggi <a href='http://www.php.net/manual/en/ref.calendar.php'>http://www.php.net/manual/en/ref.calendar.php</a> per ulteriori informazioni.";
$pgv_lang["ip_address"]				= "Indirizzo IP";
$pgv_lang["date_time"]				= "Data e Ora";
$pgv_lang["log_message"]			= "Messaggio di log";
$pgv_lang["searchtype"]				= "Tipo di ricerca";
$pgv_lang["query"]					= "Interrogazione";
$pgv_lang["user"]					= "Utente autenticato";
$pgv_lang["editors"]				= "Redattori";
$pgv_lang["gedcom_admins"]			= "Amministratori GEDCOM";
$pgv_lang["site_admins"]			= "Amministratori del Sito";
$pgv_lang["nobody"]					= "Nessuno";
$pgv_lang["thumbnail_deleted"]		= "Anteprima file eliminati con successo.";
$pgv_lang["thumbnail_not_deleted"]	= "Il file delle anteprime non può essere cancellato.";
$pgv_lang["step2"]					= "Passo 2 di 4:";
$pgv_lang["refresh"]				= "Aggiorna";
$pgv_lang["move_file_success"]		= "Media e anteprima file trasferito con successo.";
$pgv_lang["media_folder_corrupt"]	= "La cartella Media è corrotta.";
$pgv_lang["media_file_not_deleted"]	= "Il file multimediale non può essere cancellato.";
$pgv_lang["gedcom_deleted"] 		= "File GEDCOM [#GED#] cancellato con successo.";
$pgv_lang["gedadmin"]				= "amministratore GEDCOM";
$pgv_lang["full_name"]				= "Nome completo";
$pgv_lang["error_header"]   = "Il file GEDCOM, <b>#GEDCOM#</b>, non esiste nella posizione specificata.";
$pgv_lang["confirm_delete_file"]	= "Sei sicuro di voler cancellare questo file?";
$pgv_lang["confirm_folder_delete"] = "Sei sicuro di voler cancellare questa cartella?";
$pgv_lang["confirm_remove_links"]	= "Sei sicuro di voler rimuovere tutti i link a questo oggetto?";
$pgv_lang["PRIV_PUBLIC"]			= "Mostra a tutti";
$pgv_lang["PRIV_USER"]				= "Mostra solo agli utenti registrati";
$pgv_lang["PRIV_NONE"]				= "Mostra solo agli amministratori";
$pgv_lang["PRIV_HIDE"]				= "Nascondi anche agli amministratori";
$pgv_lang["manage_gedcoms"]			= "Amministra il file GEDCOM e la Privacy";
$pgv_lang["keep_media"]				= "Mantieni i link ai file multimediali";
$pgv_lang["current_links"]			= "Collegamenti";
$pgv_lang["add_more_links"]			= "Aggiungi link";
$pgv_lang["enter_pid_or_name"]		= "Inserisci ID o nome individuale";
$pgv_lang["set_links"]				= "Impostare i collegamenti";
$pgv_lang["add_or_remove_links"]	= "Gestisci link";

$pgv_lang["keep"]					= "Mantieni";
$pgv_lang["unlink"]					= "Scollega";
$pgv_lang["nav"]					= "Navigatore";
$pgv_lang["fam_nav"]				= "Navigatore di famiglia";
$pgv_lang["remove"]					= "Rimuovi";
$pgv_lang["keep_link"]				= "Tieni il collegamento in lista";
$pgv_lang["remove_link"]			= "Rimuovi il collegamento dalla lista";
$pgv_lang["open_nav"]				= "Apri il navigatore di famiglia";
$pgv_lang["link_exists"]			= "Questo collegamento esiste già";
$pgv_lang["id_not_valid"]			= "ID personale, di Famiglia o di Fonte non valido";
$pgv_lang["add_fam_other_links"]	= "Aggiungi famiglia e cerca collegamenti";
$pgv_lang["search_add_links"]		= "Cerca persone da aggiungere alla lista Aggiungi Collegamenti";
$pgv_lang["enter_name"]				= "Inserire un nome";
$pgv_lang["add_indi_to_link_list"]	= "Fai clic sul nome da aggiungere alla lista Aggiungi Collegamenti";
$pgv_lang["click_choose_head"]		= "Fai clic su #GLOBALS[tempStringHead]# per scegliere una persona come Capo Famiglia.";
$pgv_lang["click_choose_head_text"]	= "Fai clic per scegliere una persona come Capo Famiglia";
$pgv_lang["head"]					= "Capo";
$pgv_lang["id_empty"]				= "Quando si aggiunge un collegamento, il campo ID non può essere vuoto.";
$pgv_lang["link_deleted"]			= "Collegamento a #GLOBALS[remLinkId]# eliminato";
$pgv_lang["link_added"]				= "Aggiunto collegamento a #GLOBALS[addLinkId]#";
$pgv_lang["no_update_CHANs"]		= "Non aggiornare il record CHAN (ultima modifica)";
$pgv_lang["no_CHANs_update"]		= "Nessun record CHAN (ultima modifica) è stato aggiornato";

$pgv_lang["files_in_backup"]		= "File inclusi in questo backup";
$pgv_lang["created_remotelinks"]	= "La tabella <i>Remotelinks</i> è stata creata con successo.";
$pgv_lang["created_remotelinks_fail"] 	= "Impossibile creare la tabella <i>Remotelinks</i>";
$pgv_lang["created_indis"]			= "La tabella <i>Individuals</i> è stata creata con successo.";
$pgv_lang["created_indis_fail"] 	= "Impossibile creare la tabella <i>Individuals</i>";
$pgv_lang["created_fams"]			= "La tabella <i>Families</i> è stata creata con successo.";
$pgv_lang["created_fams_fail"]		= "Impossibile creare la tabella <i>Families</i>.";
$pgv_lang["created_sources"]		= "La tabella <i>Sources</i> è stata creata con successo.";
$pgv_lang["created_sources_fail"]	= "Impossibile creare la tabella <i>Sources</i>.";
$pgv_lang["created_remotelinks"]	= "La tabella <i>Remotelinks</i> è stata creata con successo.";
$pgv_lang["created_other"]			= "La tabella <i>Other</i> è stata creata con successo.";
$pgv_lang["created_other_fail"] 	= "Impossibile creare la tabella <i>Other</i>.";
$pgv_lang["created_places"] 		= "La tabella <i>Places</i> è stata creata con successo.";
$pgv_lang["created_places_fail"]	= "Impossibile creare la tabella <i>Places</i>.";
$pgv_lang["created_placelinks"] 	= "La tabella <i>Place links</i> è stata creata con successo.";
$pgv_lang["created_placelinks_fail"]	= "Impossibile creare la tabella <i>Place links</i>.";
$pgv_lang["created_media_fail"]	= "La tabella <i>Media</i> è stata creata con successo.";
$pgv_lang["created_media_mapping_fail"]	= "Impossibile creare la tabella <i>Media</i>.";
$pgv_lang["no_thumb_dir"]			= "la cartella delle anteprime non esiste e non può essere creata.";
$pgv_lang["folder_created"]   = "Cartella creata";
$pgv_lang["folder_no_create"]		= "La cartella non può essere creata";
$pgv_lang["security_no_create"]		= "Avviso di sicurezza: Non è possibile creare il file <b><i>index.php</i></b> in ";
$pgv_lang["security_not_exist"]		= "Avviso di sicurezza: Il file <b><i>index.php</i></b> non esiste in ";
$pgv_lang["label_delete"]           	= "Eliminare";
$pgv_lang["progress_bars_info"]			= "La barra di stato qui sotto ti consente di sapere come sta procedendo il processo di importazione. Se il tempo scade l'importazione sarà fermata, e ti verrò chiesto di premere il pulsante <b>Continua</b>. Se non vedi il pulsante <b>Continua</b>, devi ricominciare il processo con un valore di tempo limite minore.";
$pgv_lang["upload_replacement"]			= "Carica sostituzione";
$pgv_lang["about_user"]					= "È necessario prima creare il tuo utente principale amministrativeo. Questo utente avrà i privilegi necessari per aggiornare il file di configurazione, visualizzare i dati privati e creare altri utenti.";
$pgv_lang["access"]						= "Accesso";
$pgv_lang["add_gedcom"]   = "Aggiungi un altro file GEDCOM";
$pgv_lang["add_new_gedcom"] 		= "Crea un nuovo file GEDCOM";
$pgv_lang["add_new_language"]			= "Aggiungi i file e le impostazioni per una nuova lingua";
$pgv_lang["add_user"]					= "Aggiungi un nuovo utente";
$pgv_lang["admin_gedcom"]			= "Amministra GEDCOM";
$pgv_lang["admin_gedcoms"]				= "Fai clic qui per amministrare i file GEDCOM";
$pgv_lang["admin_geds"]				= "Amministrazione Dati e file GEDCOM";
$pgv_lang["admin_info"]				= "Informazioni";
$pgv_lang["admin_site"]				= "Amministrazione sito";
$pgv_lang["admin_user_warnings"]		= "Uno o più account utente hanno dei warning";
$pgv_lang["admin_verification_waiting"] = "Account utente in attesa di verifica dall'amministratore";
$pgv_lang["administration"] 		= "Amministrazione";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]		= "Permetti il cambio del file GEDCOM";
$pgv_lang["ALLOW_USER_THEMES"]			= "Consentire agli utenti di selezionare il proprio tema";
$pgv_lang["ansi_encoding_detected"] 	= "Rilevato file con codifica ANSI. PhpGedView funziona al meglio con i file codificati in UTF-8.";
$pgv_lang["ansi_to_utf8"]				= "Convertire questo GEDCOM dalla codifica ANSI a UTF-8?";
$pgv_lang["apply_privacy"]				= "Applicare le impostazioni di privacy?";
$pgv_lang["back_useradmin"]				= "Torna all'Amministrazione Utenti";
$pgv_lang["bytes_read"] 				= "Byte letti";
$pgv_lang["can_admin"]				= "Può amministrare";
$pgv_lang["can_edit"]				= "Può modificare";
$pgv_lang["change_id"]				= "Modifica ID Persona in:";
$pgv_lang["choose_priv"]				= "Scegli il livello di privacy:";
$pgv_lang["cleanup_places"] 			= "Pulitura località";
$pgv_lang["cleanup_users"]				= "Pulitura utenti";
$pgv_lang["click_here_to_continue"]		= "Fai clic qui per continuare.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Fai clic qui per andare all'albero genealogico";
$pgv_lang["comment"]							= "Commenti dell'Amministratore sull'utente";
$pgv_lang["comment_exp"]						= "Avvisi dell'Amministratore alla data";
$pgv_lang["config_help"]						= "Aiuto di Configurazione";
$pgv_lang["config_still_writable"]				= "Il tuo file <i>config.php</i> è ancora scrivibile. Per maggior sicurezza, dovresti impostare i permessi di questo file a sola lettura, quando avrai finito di configurare questo sito.";
$pgv_lang["configuration"]			= "Configurazione";
$pgv_lang["configure"]							= "Configura PhpGedView";
$pgv_lang["configure_head"]						= "Configurazione di PhpGedView";
$pgv_lang["confirm_gedcom_delete"]				= "Sei sicuro di voler eliminare questo file GEDCOM";
$pgv_lang["confirm_user_delete"]	= "Sei sicuro di voler cancellare l'utente?";
$pgv_lang["create_user"]			= "Crea un utente";
$pgv_lang["current_users"]						= "Elenco utenti";
$pgv_lang["daily"]								= "Quotidianamente";
$pgv_lang["dataset_exists"]			= "Un file GEDCOM con questo nome è già stato importato nell'archivio";
$pgv_lang["unsync_warning"] 					= "Questo file GEDCOM <em>non</em> è sincronizzato con il database. Potrebbe non contenere l'ultima versione dei dati. Per reimportare dal database, piuttosto che dal file, dovresti scaricare e ricaricare.";
$pgv_lang["date_registered"]					= "Data registrata";
$pgv_lang["day_before_month"]					= "Giorno prima del Mese (GG MM AAAA)";
$pgv_lang["DEFAULT_GEDCOM"]						= "Default GEDCOM";
$pgv_lang["default_user"]						= "Crea l'utente amministratore principale.";
$pgv_lang["del_gedrights"]						= "Il file GEDCOM non è più attivo, rimuovere i riferimenti utente.";
$pgv_lang["del_proceed"]						= "Continua";
$pgv_lang["del_unvera"]							= "Utente non verificato dall'amministratore.";
$pgv_lang["del_unveru"]							= "L'utente non ha verificato se stesso entro 7 giorni.";
$pgv_lang["do_not_change"]   = "Non cambiare";
$pgv_lang["download_gedcom"]		= "Scarica file GEDCOM";
$pgv_lang["download_here"]						= "Fai clic qui per scaricare il file.";
$pgv_lang["download_note"]						= "NOTA: Database grandi possono richiedere molto tempo per processare prima di scaricare. Se PHP scade prima che lo scarico finisca, il file scaricato potrebbe non essere completo..<br /><br />Per assicurarsi che il file sia stato scaricato correttamente, controllare che l'ultima riga di un file in formato GEDCOM sia <b>0&nbsp;TRLR</b> o che l'ultima riga di un file XML sia <b>&lt;/database&gt;</b>. Questi file sono testo; puoi utilizzare un opportuno editor di testi, ma assicurati di <u>non</u> salvare il file scaricato dopo averlo ispezionato.<br /><br />In generale, potrebbe essere necessario tanto tempo per scaricare un file quanto ne occorre per importare il file GEDCOM originale.";
$pgv_lang["editaccount"]						= "Permetti a questo utente di modificare le informazioni del suo account";
$pgv_lang["empty_dataset"]			= "Vuoi cancellare i vecchi dati e sovrascriverli con i nuovi?";
$pgv_lang["empty_lines_detected"]				= "Nel vostro file GEDCOM sono state rilevate delle righe vuote. In fase di pulizia, queste righe vuote verranno rimosse.";
$pgv_lang["enable_disable_lang"]				= "Configura le lingue supportate";
$pgv_lang["error_ban_server"]       			= "Indirizzo IP non valido.";
$pgv_lang["error_delete_person"]   				= "Devi selezionare la persona della quale vuoi eliminare il collegamento remoto.";
$pgv_lang["error_header_write"] 				= "Il file GEDCOM <b>#GEDCOM#</b> non è scrivibile. Per favore verifica gli attributi e i diritti di accesso.";
$pgv_lang["error_remove_site"]					= "Il server remoto non può essere rimosso.";
$pgv_lang["error_remove_site_linked"]			= "Il server remoto non può essere rimosso perché la sua lista di connessioni non è vuota.";
$pgv_lang["error_remote_duplicate"]				= "Questo database remoto è già in lista come <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]				= "Impossibile autenticarsi al sito remoto";
$pgv_lang["error_url_blank"]					= "Per favore non lasciare il titolo del sito remoto o la URL vuoti";
$pgv_lang["error_view_info"]       				= "Devi selezionare la persona di cui vuoi vedere i dettagli.";
$pgv_lang["example_date"]						= "Esempio di data non valida nel tuo file GEDCOM:";
$pgv_lang["example_place"]						= "Esempio di località non valida per il tuo file GEDCOM:";
$pgv_lang["fbsql"]								= "FrontBase";
$pgv_lang["found_record"]			= "Record trovati";
$pgv_lang["ged_download"]						= "Scaricare";
$pgv_lang["ged_import"]			= "Importa file GEDCOM";
$pgv_lang["ged_export"] 						= "Esporta";
$pgv_lang["ged_check"] 							= "Controllo";
$pgv_lang["gedcom_adm_head"]					= "Amministrazione GEDCOM";
$pgv_lang["gedcom_config_write_error"]			= "ERRORE! <br /> Impossibile scrivere sul file <i>#GLOBALS[whichFile]#</i>. Controllare le autorizzazioni per la corretta scrittura.";
$pgv_lang["gedcom_downloadable"] 				= "Questo file GEDCOM è scaricabile su Internet! <br /> Consultare la sezione SICUREZZA del file <a href=\"readme.txt\"><b>readme.txt</b></a> per risolvere questo problema";
$pgv_lang["gedcom_file"]		= "File GEDCOM:";
$pgv_lang["gedcom_not_imported"]				= "Il file GEDCOM non è stato ancora importato.";
$pgv_lang["ibase"]								= "InterBase";
$pgv_lang["ifx"]								= "Informix";
$pgv_lang["img_admin_settings"] 				= "Modifica la configurazione della manipolazione immagini";
$pgv_lang["autoContinue"]						= "Premi automaticamente il pulsante «Continua»";
$pgv_lang["import_complete"]		= "Importazione completata";
$pgv_lang["import_options"]						= "Opzioni Importazione";
$pgv_lang["import_progress"]					= "Avanzamento Importazione...";
$pgv_lang["import_statistics"]					= "Statistiche Importazione";
$pgv_lang["import_time_exceeded"]				= "Il tempo massimo di esecuzione è stato raggiunto. Fai clic sul pulsante Continua qui sotto per riprendere l'importazione del file GEDCOM.";
$pgv_lang["inc_languages"]		= "Lingue";
$pgv_lang["INDEX_DIRECTORY"]					= "Cartella del file Index";
$pgv_lang["invalid_dates"]						= "Rilevati formati date non validi. Al momento della pulizia questi verranno modificati nel formato GG MMM YYYY (per esempio 01 JAN 2004).";
$pgv_lang["BOM_detected"] 						= "All'inizio del file è presente un Byte Order Mark (BOM). Durante la pulizia questo codice speciale verrà rimosso.";
$pgv_lang["invalid_header"] 					= "Rilevate righe prima dell'intestazione del file GEDCOM <b>0&nbsp;HEAD</b>. Con la pulizia queste linee verranno rimosse.";
$pgv_lang["label_added_servers"]				= "Server remoti";
$pgv_lang["label_banned_servers"]  				= "Bandisci siti per IP";
$pgv_lang["label_families"]         			= "Famiglie";
$pgv_lang["label_gedcom_id2"]       			= "Database ID:";
$pgv_lang["label_individuals"]      			= "Persone";
$pgv_lang["label_manual_search_engines"]		= "Contrassegna manualmente i motori di ricerca per IP";
$pgv_lang["label_new_server"]     				= "Aggiungi nuovo sito";
$pgv_lang["label_password_id"]					= "Password";
$pgv_lang["label_server_info"]     				= "Tutte le persone e le famiglie che sono collegate in remoto attraverso il sito:";
$pgv_lang["label_server_url"]       			= "URL/IP del sito";
$pgv_lang["label_username_id"]					= "Nome utente";
$pgv_lang["label_view_local"]       			= "Visualizza informazioni a livello locale sulla persona";
$pgv_lang["label_view_remote"]     			 	= "Vedi informazioni remote sulla persona";
$pgv_lang["LANG_SELECTION"] 					= "Lingue supportate";
$pgv_lang["LANGUAGE_DEFAULT"]					= "Non hai configurato le lingue supportate.<br />PhpGedView utilizzerà le sue azioni standard.";
$pgv_lang["last_login"]							= "Ultimo ingresso";
$pgv_lang["lasttab"]							= "Ultima scheda visitata per la persona";
$pgv_lang["leave_blank"]						= "Lasciare in bianco la password se si desidera mantenere la password corrente.";
$pgv_lang["link_manage_servers"]   				= "Gestione Siti";
$pgv_lang["logfile_content"]					= "Contenuto del file di log";
$pgv_lang["macfile_detected"]					= "È stato rilevato un file Macintosh. Con la pulizia questo dile verrà convertito in file DOS.";
$pgv_lang["mailto"]								= "Link mailto";
$pgv_lang["merge_records"]   = "Unisci dati";
$pgv_lang["message_to_all"]						= "Invia messaggio a tutti gli utenti";
$pgv_lang["messaging"]							= "Messaggi interni a PhpGedView";
$pgv_lang["messaging2"]							= "Messaggi interni con e-mail";
$pgv_lang["messaging3"]							= "PhpGedView invia e-mail senza salvarle";
$pgv_lang["month_before_day"]					= "Mese prima del Giorno (MM GG AAAA)";
$pgv_lang["monthly"]							= "Mensilmente";
$pgv_lang["msql"]								= "Mini SQL";
$pgv_lang["mssql"]								= "Microsoft SQL Server";
$pgv_lang["mysql"]								= "MySQL";
$pgv_lang["never"]								= "Mai";
$pgv_lang["no_logs"]							= "Nessun log";
$pgv_lang["no_messaging"]						= "Nessun metodo di contatto";
$pgv_lang["oci8"]								= "Oracle 7";
##$pgv_lang["page_views"]							= "&nbsp;&nbsp;page views in&nbsp;&nbsp;";
$pgv_lang["performing_validation"]				= "Validazione del GEDCOM in corso...";
$pgv_lang["pgsql"]								= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] 			= "Errore! Impossibile scrivere il file di configurazione di PhpGedView. Si prega di controllare le autorizzazioni per file e directory e riprovare.";
$pgv_lang["PGV_MEMORY_LIMIT"]					= "Memoria limite";
$pgv_lang["PGV_SESSION_SAVE_PATH"]				= "Percorso di salvataggio della sessione";
$pgv_lang["PGV_SESSION_TIME"]					= "Timeout sessione";
$pgv_lang["PGV_SIMPLE_MAIL"] 					= "Usa intestazioni e-mail semplici nella posta esterna";
$pgv_lang["PGV_SMTP_ACTIVE"] 					= "Usa SMTP per inviare posta elettronica esterna";
$pgv_lang["PGV_SMTP_HOST"] 						= "Nome server in uscita (SMTP)";
$pgv_lang["PGV_SMTP_HELO"] 						= "Nome dominio del mittente";
$pgv_lang["PGV_SMTP_PORT"] 						= "Porta SMTP";
$pgv_lang["PGV_SMTP_AUTH"] 						= "Utilizza nome utente e password";
$pgv_lang["PGV_SMTP_AUTH_USER"] 				= "Nome utente";
$pgv_lang["PGV_SMTP_AUTH_PASS"] 				= "Password";
$pgv_lang["PGV_SMTP_SSL"] 						= "SSL Login";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Il nome del mittente";
$pgv_lang["PGV_STORE_MESSAGES"]					= "Consenti che i messaggi vengano memorizzati on-line";
$pgv_lang["phpinfo"]							= "PHP informazioni";
$pgv_lang["place_cleanup_detected"] 			= "Rilevate codifiche località non valide. Questi errori dovrebbero essere corretti.";
$pgv_lang["please_be_patient"]		= "UN ATTIMO DI PAZIENZA PER FAVORE";
$pgv_lang["privileges"]							= "Privilegi";
$pgv_lang["reading_file"]						= "Lettura del file GEDCOM";
$pgv_lang["readme_documentation"]	= "File README";
$pgv_lang["remove_ip"] 							= "Rimuovere IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 	= "Richiedi l'approvazione di un amministratore per le nuove registrazioni utenti";
$pgv_lang["review_readme"]						= "Dovresti rivedere il file <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> prima di continuare a configurare PhpGedView.<br /><br />";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;secondi";
$pgv_lang["select_an_option"]		= "Seleziona un'opzione:";
$pgv_lang["SERVER_URL"]							= "PhpGedView URL";
$pgv_lang["show_phpinfo"]						= "Visualizza pagina delle informazioni di PHP";
$pgv_lang["siteadmin"]							= "Amministratore del sito";
$pgv_lang["sqlite"]								= "SQLite";
$pgv_lang["sybase"]								= "Sybase";
$pgv_lang["sync_gedcom"]						= "Sincronizzare Impostazioni utente con dati GEDCOM";
$pgv_lang["system_time"]						= "Ora attuale del server";
$pgv_lang["user_time"]							= "Ora attuale dell'utente";
$pgv_lang["TBLPREFIX"]							= "Tabella Prefisso Database";
$pgv_lang["themecustomization"]					= "Personalizzazione tema";
$pgv_lang["time_limit"]				= "Tempo limite:";
$pgv_lang["title_manage_servers"]   			= "Gestione Siti";
$pgv_lang["title_view_conns"]       			= "Visualizza Connessioni";
$pgv_lang["translator_tools"]					= "Strumenti di traduzione";
$pgv_lang["update_myaccount"]		= "Aggiorna Account";
$pgv_lang["update_user"]			= "Aggiorna utente";
$pgv_lang["upload_gedcom"]		= "Carica file GEDCOM";
$pgv_lang["USE_REGISTRATION_MODULE"]			= "Consenti a visitatori di richiedere la registrazione di un account";
$pgv_lang["user_auto_accept"]					= "Accetta automaticamente le modifiche fatte da questo utente";
$pgv_lang["user_contact_method"] = "Metodo di contatto preferito";
$pgv_lang["user_create_error"]		= "Impossibile aggiungere l'utente, per favore torna indietro e riprova";
$pgv_lang["user_created"]			= "Utente creato con successo";
$pgv_lang["user_default_tab"]		= "Scheda di Default per la tua pagina personale";
$pgv_lang["user_path_length"]					= "Lunghezza massima del percorso delle relazioni private";
$pgv_lang["user_relationship_priv"]				= "Limita l'accesso alle persone correlate";
$pgv_lang["users_admin"]						= "Amministratori del sito";
$pgv_lang["users_gedadmin"]						= "Amministratori del GEDCOM";
$pgv_lang["users_total"]						= "Numero totale di utenti";
$pgv_lang["users_unver"]						= "Non verificato dall'utente";
$pgv_lang["users_unver_admin"]					= "Non verificato dall'amministratore";
$pgv_lang["usr_deleted"]						= "Utenti cancellati:";
$pgv_lang["usr_idle"]							= "Numero di mesi dopo l'ultimo login di un account utente per essere considerato inattivo:";
$pgv_lang["usr_idle_toolong"]					= "L'account dell'utente è stato inattivo troppo a lungo: ";
$pgv_lang["usr_no_cleanup"]						= "Nulla da ripulire";
$pgv_lang["usr_unset_gedcomid"]					= "Disimposta GEDCOM ID per ";
$pgv_lang["usr_unset_rights"]					= "Disimposta i diritti GEDCOM per ";
$pgv_lang["usr_unset_rootid"]					= "Disimposta ID radice per ";
$pgv_lang["valid_gedcom"]						= "Il file è un file GEDCOM valido. Non è necessaria una pulizia.";
$pgv_lang["validate_gedcom"]		= "Valida il file GEDCOM";
$pgv_lang["verified"]				= "L'utente ha verificato se stesso";
$pgv_lang["verified_by_admin"]		= "Utente approvato dall'amministratore:";
$pgv_lang["verify_gedcom"]						= "Verificare file GEDCOM";
$pgv_lang["verify_upload_instructions"]			= "Un file GEDCOM con lo stesso nome è già presente. Se si sceglie di continuare, il vecchio file GEDCOM sarà sostituito con il file che hai caricato e il processo di importazione inizierà di nuovo. Se si sceglie di annullare, il vecchio GEDCOM rimarrà invariato.";
$pgv_lang["view_changelog"]						= "Visualizza file Changelog.txt";
$pgv_lang["view_logs"]				= "Visualizza file di log";
$pgv_lang["view_readme"]						= "Visualizza file readme.txt";
$pgv_lang["visibleonline"]			= "Visibile dagli altri utenti quando sei online?";
$pgv_lang["visitor"]							= "Visitatore";
$pgv_lang["warn_users"]							= "Utenti con avvisi";
$pgv_lang["weekly"]								= "Settimanalmente";
$pgv_lang["welcome_new"]						= "Benvenuto nel tuo nuovo sito web PhpGedView.";
$pgv_lang["yearly"]								= "Annualmente";
$pgv_lang["admin_OK_subject"]					= "Approvazione di un account su #SERVER_NAME#";
$pgv_lang["admin_OK_message"]					= "L'amministratore del sito PhpGedView #SERVER_NAME# ha approvato la tua richiesta di un account. È ora possibile accedere connettendosi al seguente link:\r\n\r\n#SERVER_NAME#\r\n";
$pgv_lang["batch_update"] = "Effettua aggiornamenti/modifiche sequenziali sul tuo GEDCOM";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     = "Verificatore GEDCOM";          // Module title
$pgv_lang["gedcheck_text"]= "Questo modulo verifica il formato di un file GEDCOM rispetto alle <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\"> specifiche GEDCOM 5.5.1</a>. Controlla, inoltre, una serie di errori comuni. Nota che esistono molte versioni, estensioni e variazioni delle specifiche, sicchè non dovresti preoccuparti per qualsiasi problema a parte quelli classificati come \"Critico\". La spiegazione di tutti gli errori riga per riga può essere trovata nelle specifiche, per cui, per favore, verificale prima di chiedere aiuto.";
$pgv_lang["gedcheck_sync"] = "Le modifiche fatte al database non sono sincronizzate con il file #GLOBALS[ged]#. Il contenuto del file può essere superato. Puoi sincronizzarlo con il database adesso facendo una <b><a \"#GLOBALS[ged_link]#\">esportazione</a></b>.";
$pgv_lang["gedcheck_nothing"] = "Nessun errore trovato a questo livello.";
$pgv_lang["level"]        = "Livello";                   // Levels of checking
$pgv_lang["critical"]     = "Critico";
$pgv_lang["error"]        = "Errore";
$pgv_lang["warning"]      = "Avvertenza";
$pgv_lang["info"]         = "Info";
$pgv_lang["open_link"]    = "Apri link in";           // Where to open links
$pgv_lang["same_win"]     = "Stessa scheda / finestra";
$pgv_lang["new_win"]      = "Nuova scheda / finestra";
$pgv_lang["context_lines"]= "Linee di contesto GEDCOM"; // Number of lines either side of error
$pgv_lang["all_rec"]      = "Tutti i record";             // What to show
$pgv_lang["err_rec"]      = "Record con errori";
$pgv_lang["missing"]      = "mancanti";                 // General error messages
$pgv_lang["multiple"]     = "multiplo";
$pgv_lang["invalid"]      = "non validi";
$pgv_lang["too_many"]     = "troppi";
$pgv_lang["too_few"]      = "troppo pochi";
$pgv_lang["no_link"]      = "non restituisce il collegamento";
$pgv_lang["data"]         = "dati";                    // Specific errors (used with general errors)
$pgv_lang["see"]          = "vedere";
$pgv_lang["noref"]        = "Nessun riferimento a questo record";
$pgv_lang["tag"]          = "tag";
$pgv_lang["spacing"]      = "spaziatura";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Nome fatti avanzato";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Nome località dei fatti avanzato";
$pgv_lang["SURNAME_TRADITION"]		= "Tradizione cognome"; // Default surname inheritance
$pgv_lang["tradition_spanish"]		= "Spagnolo";
$pgv_lang["tradition_portuguese"]	= "Portoghese";
$pgv_lang["tradition_icelandic"]	= "Islandese";
$pgv_lang["tradition_paternal"]		= "Paterno";
$pgv_lang["tradition_polish"]		= "Polacco";
$pgv_lang["tradition_none"]			= "Nessuno";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"1 anno";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# anni";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# anni";
$pgv_lang["elapsedMonth1"]	=	"1 mese";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# mesi";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# mesi";
$pgv_lang["elapsedDay1"]	=	"1 giorno";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# giorni";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# giorni";
$pgv_lang["elapsedHour1"]	=	"1 ora";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# ore";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# ore";
$pgv_lang["elapsedMinute1"]	=	"1 minuto";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minuti";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minuti";

$pgv_lang["elapsedAgo"]		=	"#pgv_lang[global_string1]# fa";

?>
