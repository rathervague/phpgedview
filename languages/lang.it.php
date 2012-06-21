<?php
/**
 * Italian Language file
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
 * @version $Id: lang.it.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["gedcomid"]				= "ID record GEDCOM INDI";
$pgv_lang["sortby"]						= "Sequenza";
$pgv_lang["exact"]					= "Esatto";
$pgv_lang["begins_with"]				= "Inizia con";
$pgv_lang["contains"]					= "Contiene";
$pgv_lang["sounds_like"]				= "Suona come";
$pgv_lang["advanced_search"]		= "Ricerca Avanzata";
$pgv_lang["more_fields"]			= "Aggiungi più campi";
$pgv_lang["install_step_8"] 		= "Inizia";
$pgv_lang["parent_family"]			= "Famiglia genitori";
$pgv_lang["step_parent_family"]		= "Genitori adottivi";
$pgv_lang["immediate_family"]		= "Famiglia prossima";

$pgv_lang["load_full_tree"]			= "Vedi questo albero nel formato interattivo a tutta pagina";
$pgv_lang["hide_show_spouses"]		= "Mostra o nascondi matrimoni multipli";
$pgv_lang["interactive_tree"]		= "Albero interattivo";
$pgv_lang["example"]				= "Esempio:";
$pgv_lang["tree"]					= "Albero";
$pgv_lang["ellipsis"]				= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]			= "Mostra sesso ignoto";
$pgv_lang["count"]					= "Conteggio";
$pgv_lang["age_differences"]		= "Mostra differenze date";
$pgv_lang["multi_site_search"] 		= "Ricerca multi-sito";
$pgv_lang["switch_lifespan"]		= "Visualizza grafico durata della vita";
$pgv_lang["switch_timeline"]		= "Visualizza grafico temporale";
$pgv_lang["differences"]			= "Differenze";
$pgv_lang["charts_block"]			= "Blocco grafici";
$pgv_lang["charts_block_descr"]		= "Il blocco prospetti permette di mettere un Prospetto nella pagina di Benvenuto o nella pagina del portale del File di Famiglia. Puoi anche configurare il blocco per mostrare una vista antenati, discendenti o a clessidra. Puoi anche scegliere la persona default del prospetto";
$pgv_lang["charts_click_box"]		= "Clicca su uno dei riquadri per ottenere ulteriori informazioni sulla persona";
$pgv_lang["chart_type"]				= "Tipo di prospetto";
$pgv_lang["changedate1"]			= "Fine dell'intervallo di cambio date";
$pgv_lang["changedate2"]			= "Inizio dell'intervallo di cambio date";
$pgv_lang["search_place_word"]		= "Solo parole intere";
$pgv_lang["invalid_search_input"] 	= "Per favore inserisci un nome, un cognome o una località in aggiunta all'anno";
$pgv_lang["duplicate_username"] 	= "Nome utente esistente. Per favore, scegli un altro nome utente";
$pgv_lang["cache_life"]				= "Durata del file di cache";
$pgv_lang["genealogy"]				= "Genealogia";
$pgv_lang["activate"]				= "Attiva";
$pgv_lang["deactivate"]				= "Disattiva";
$pgv_lang["play"]					= "Play";
$pgv_lang["stop"]					= "Stop";
$pgv_lang["random_media_start_slide"]	= "Avvia slideshow al caricamento della pagina?";
$pgv_lang["random_media_ajax_controls"]	= "Mostrare i controlli per lo slideshow?";
$pgv_lang["description"]			= "Descrizione";
$pgv_lang["current_dir"]			= "Directory corrente";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Visualizza i numeri ID accanto a nomi";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Mostra le immagini evidenziate nei riquadri delle persone";
$pgv_lang["view_img_details"]		= "Vedi dettagli delle immagini";
$pgv_lang["server_folder"]			= "Nome della cartella sul server";
$pgv_lang["medialist_recursive"]	= "Lista file contenuti nelle sotto-cartelle";
$pgv_lang["media_options"]			= "Opzioni media";
$pgv_lang["confirm_password"]		= "Devi confermare la password";
$pgv_lang["enter_email"]			= "Devi inserire un indirizzo email.";
$pgv_lang["enter_fullname"]			= "Devi immettere il nome completo";
$pgv_lang["name"]					= "Nome:";
$pgv_lang["names"]					= "Nomi";
$pgv_lang["children"]						= "Figli";
$pgv_lang["lchildren"]				= "figli";
$pgv_lang["child"]				= "Bambino";
$pgv_lang["grandchildren"] = "nipoti";
$pgv_lang["family"]				= "Famiglia";
$pgv_lang["as_child"]				= "Famiglia con i genitori";
$pgv_lang["shared_note_menu"]		= "Opzioni per note condivise";
$pgv_lang["source_menu"]			= "Opzioni per fonte";
$pgv_lang["repo_menu"]				= "Opzioni di deposito";
$pgv_lang["other_records"]			= "Altri Record che puntano alla Fonte:";
$pgv_lang["other_repo_records"]		= "Record che contengono link a questo Repository:";
$pgv_lang["repo_info"]				= "Informazioni Repository";
$pgv_lang["enter_terms"]			= "Inserire i termini della ricerca:";
$pgv_lang["search_asso_label"]		= "Associati";
$pgv_lang["search_asso_text"]		= "Visualizza persone/famiglie correlate";
$pgv_lang["search_DM"]				= "Daitch-Mokotoff";
$pgv_lang["search_fams"]			= "Famiglie";
$pgv_lang["search_gedcom"]			= "Cerca nel file GEDCOM";
$pgv_lang["search_geds"]			= "Banche dati in cui cercare";
$pgv_lang["search_indis"]			= "Individui";
$pgv_lang["search_notes"]			= "Note condivise";
$pgv_lang["search_inrecs"]			= "Cerca";
$pgv_lang["search_prtall"]			= "Tutti i nomi";
$pgv_lang["search_prthit"]			= "Nomi con hit";
$pgv_lang["results_per_page"]		= "Risultati per pagina";
$pgv_lang["firstname_search"]		= "Nome:";
$pgv_lang["search_prtnames"]		= "Nomi degli individui<br /> da stampare";
$pgv_lang["other_searches"]			= "Altre Ricerche";
$pgv_lang["add_to_cart"]		= "Aggiungi al<br />Carrello Ritagli";
$pgv_lang["view_gedcom"]	= "Visualizza il campo<br />GEDCOM";
$pgv_lang["welcome"]				= "Benvenuto";
$pgv_lang["son"]					= "Figlio";
$pgv_lang["daughter"]				= "Figlia";
$pgv_lang["welcome_page"]			= "Pagina di Benvenuto";
$pgv_lang["editowndata"]			= "Il mio account";
$pgv_lang["user_admin"]				= "Amministrazione utenti";
$pgv_lang["manage_media"]	= "Amministra Media";
$pgv_lang["search_general"]				= "Ricerca Generale";
$pgv_lang["clipping_privacy"]		= "Alcune voci non possono essere aggiunte per restrizioni privacy";
$pgv_lang["chart_new"]				= "Prospetto Albero di Famiglia";
$pgv_lang["loading"]				= "Caricamento in corso";
$pgv_lang["clear_chart"]			= "Cancella Prospetto";
$pgv_lang["file_information"]		= "Informazioni sui file";
$pgv_lang["choose_file_type"]		= "Scegli il tipo di file";
$pgv_lang["add_individual_by_id"]	= "Aggiungi individui per ID";
$pgv_lang["advanced_options"]		= "Opzioni avanzate";
$pgv_lang["zip_files"]				= "Zip File (s)";
$pgv_lang["include_media"]			= "Includi media (comprimi automaticamente i file)";
$pgv_lang["roman_surn"]				= "Cognome latinizzato";
$pgv_lang["roman_givn"]				= "Nome latinizzato";
$pgv_lang["include"]				= "Includi:";
$pgv_lang["page_x_of_y"]			= "Pagina #GLOBALS[currentPage]# di #GLOBALS[lastPage]#";
$pgv_lang["options"]				= "Opzioni:";
$pgv_lang["config_update_ok"] = "File di configurazione aggiornato con successo.";
$pgv_lang["page_size"]				= "Dimensioni pagina";
$pgv_lang["font"]					   = "Carattere";
$pgv_lang["use_colors"]				= "Usa colori";
$pgv_lang["record_not_found"]		= "Il richiesto record non è stato trovato. Potrebbe trattarsi di un collegamento a una persona non valida o a un file di famiglia corrotto";
$pgv_lang["result_page"]			= "Pagina dei risultati";
$pgv_lang["edit_media"]				= "Modifica Voce Media";
$pgv_lang["wiki_main_page"]			= "Wiki - Main Page";
$pgv_lang["wiki_users_guide"]		= "Wiki - User's Guide";
$pgv_lang["wiki_admin_guide"]		= "Wiki - Administrator's Guide";
$pgv_lang["no_search_for"]			= "Assicurarsi di selezionare una opzione di ricerca";
$pgv_lang["no_search_site"]			= "Assicurarsi di selezionare almeno un sito remoto.";
$pgv_lang["search_sites"] 			= "Siti per la ricerca";
$pgv_lang["site_list"]				= "Sito web:";
$pgv_lang["site_had"]				= "che contiene quanto segue";
$pgv_lang["label_search_engine_detected"]  = "Rilevato spider di motore di ricerca";

$pgv_lang["ex-spouse"]				= "Ex-coniuge";
$pgv_lang["ex-wife"]				= "Ex-moglie";
$pgv_lang["ex-husband"]				= "Ex-marito";
$pgv_lang["noemail"] 				= "Indirizzi senza e-mail";
$pgv_lang["onlyemail"] 				= "Solo con gli indirizzi e-mail";
$pgv_lang["maxviews_exceeded"]		= "Il limite di #GLOBALS[MAX_VIEWS]# pagine per #GLOBALS[MAX_VIEW_TIME]# secondi è stato superato.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Invia messaggio a utenti che non hanno effettuato l'accesso per 6 mesi";
$pgv_lang["broadcast_never_logged_in"]	= "Invia messaggio a utenti che non hanno mai effettuato l'accesso";
$pgv_lang["stats_to_show"]			= "Seleziona le statistiche da mostrare in questo blocco";
$pgv_lang["stat_avg_age_at_death"]	= "Età media di morte";
$pgv_lang["stat_longest_life"]		= "Persona più longeva";
$pgv_lang["stat_most_children"]		= "Famiglia con più figli";
$pgv_lang["stat_average_children"]	= "Numero medio di figli per famiglia";
$pgv_lang["stat_events"]			= "Eventi totali";
$pgv_lang["stat_media"]				= "Oggetti multimediali";
$pgv_lang["stat_surnames"]			= "Cognomi totali";
$pgv_lang["stat_users"]				= "Utenti totali";
$pgv_lang["no_family_facts"]		= "Nessun evento per questa famiglia";
$pgv_lang["stat_males"]				= "Totale maschi";
$pgv_lang["stat_females"]			= "Totale femmine";
$pgv_lang["stat_unknown"]			= "Totale sesso ignoto";
$pgv_lang["stat_link"]				= "Vedi le statistiche come grafico";
$pgv_lang["print_stat_link"]		= "Mostra collegamento al Prospetto delle statistiche?";

$pgv_lang["sunday_1st"]				= "D";
$pgv_lang["monday_1st"]				= "L";
$pgv_lang["tuesday_1st"]			= "Ma";
$pgv_lang["wednesday_1st"]			= "Me";
$pgv_lang["thursday_1st"]			= "G";
$pgv_lang["friday_1st"]				= "V";
$pgv_lang["saturday_1st"]			= "S";

$pgv_lang["jan_1st"]				= "Gen";
$pgv_lang["feb_1st"]				= "Feb";
$pgv_lang["mar_1st"]				= "Mar";
$pgv_lang["apr_1st"]				= "Apr";
$pgv_lang["may_1st"]				= "Mag";
$pgv_lang["jun_1st"]				= "Giu";
$pgv_lang["jul_1st"]				= "Lug";
$pgv_lang["aug_1st"]				= "Ago";
$pgv_lang["sep_1st"]				= "Set";
$pgv_lang["oct_1st"]				= "Ott";
$pgv_lang["nov_1st"]				= "Nov";
$pgv_lang["dec_1st"]				= "Dic";

$pgv_lang["edit_source"]			= "Modifica Fonte";
$pgv_lang["edit_shared_note"]		= "Modifica nota condivisa";
$pgv_lang["familybook_chart"]		= "Prospetto libro di famiglia";
$pgv_lang["family_of"]				= "Famiglia di:&nbsp;";
$pgv_lang["descent_steps"]			= "Passi discendenti";

$pgv_lang["cancel"]			= "Annulla";
$pgv_lang["cookie_help"]			= "Questo sito utilizza i cookies per tenere traccia del tuo stato di accesso. <br /> <br /> I cookie non sembrano essere abilitati nel tuo browser. È necessario abilitare i cookie di questo sito prima di poter effettuare il login.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]			= "Le informazioni di questo individuo provengono da sito remoto";
$pgv_lang["link_remote"]            = "Collega persona remota";
//Add Remote Link
$pgv_lang["title_search_link"]      = "Aggiungi Link locali";
$pgv_lang["label_site_url2"]        = "URL del sito";
//new stuff

$pgv_lang["delete_family_confirm"]	= "La cancellazione della famiglia scollegherà gli individui gli uni dagli altri, ma non elimina i singoli individui. Sei certo di voler cancellare questa famiglia?";
$pgv_lang["delete_family"]			= "Elimina famiglia";
$pgv_lang["add_favorite"]			= "Aggiungi un preferito";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Inserisci una nota facoltativa per questo individuo";
$pgv_lang["add_fav_or_enter_url"]	= "O<br />\nInserisci una URL e un titolo";
$pgv_lang["add_fav_enter_id"]		= "Inserisci una persona, famiglia o una fonte";
$pgv_lang["next_email_sent"]		= "Prossimo promemoria tramite email verrà inviata dopo";
$pgv_lang["last_email_sent"]		= "È stata inviata un'ultima e-mail di sollecito";
$pgv_lang["remove_child"]			= "Rimuovere questo bambino dalla famiglia";
$pgv_lang["link_new_husb"]			= "Aggiungi un marito utilizzando una persona esistente";
$pgv_lang["link_new_wife"]			= "Aggiungi una moglie utilizzando una persona esistente";
$pgv_lang["address_labels"]			= "Etichette indirizzo";
$pgv_lang["filter_address"]			= "Mostra indirizzi che contengono:";
$pgv_lang["address_list"]			= "Elenco indirizzi";
$pgv_lang["index_edit_advice"]		= "Evidenziare un blocco nome e quindi fare clic su una delle frecce per spostare il blocco evidenziato nella direzione indicata.";
$pgv_lang["changelog"]				= "Cambiamenti della versione #VERSION#";
$pgv_lang["html_block_descr"]		= "Questo è un semplice blocco HTML che puoi mettere nella tua pagina per aggiungere qualsiasi tipo di messaggio che vuoi.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Inserire il titolo qui</b></p><br /><p>Cliccare il pulsante di configurazione";
$pgv_lang["html_block_sample_part2"]	= "per cambiare ciò che è stampato qui. &lt;/ p&gt;";
$pgv_lang["html_block_name"]		= "Blocco HTML";
$pgv_lang["htmlplus_block_name"]	= "HTML avanzato";
$pgv_lang["htmlplus_block_descr"]	= "Questo è un blocco HTML che puoi inserire nella tua pagina per aggiungere qualsiasi tipo di messaggio che si può desiderare. È possibile inserire i riferimenti alle informazioni dal tuo file GEDCOM nel testo HTML.";
$pgv_lang["htmlplus_block_templates"] = "Modelli";
$pgv_lang["htmlplus_block_content"] = "Contenuto";
$pgv_lang["htmlplus_block_narrative"] = "Stile narrativo (solo in inglese)";
$pgv_lang["htmlplus_block_custom"]	= "Personalizzato";
$pgv_lang["htmlplus_block_keyword"]	= "Esempi di parole chiave (solo in inglese)";
$pgv_lang["htmlplus_block_taglist"]	= "Tag List";
$pgv_lang["htmlplus_block_compat"]	= "Modalità di compatibilità";
$pgv_lang["htmlplus_block_ui"]		= "Interfaccia estesa";
$pgv_lang["htmlplus_block_current"]	= "Corrente";
$pgv_lang["htmlplus_block_default"]	= "Predefinito";
$pgv_lang["htmlplus_block_gedcom"]	= "Albero Genealogico";
$pgv_lang["htmlplus_block_birth"]	= "nascita";
$pgv_lang["htmlplus_block_death"]	= "morte";
$pgv_lang["htmlplus_block_marrage"]	= "matrimonio";
$pgv_lang["htmlplus_block_adoption"]= "adozione";
$pgv_lang["htmlplus_block_burial"]	= "sepoltura";
$pgv_lang["htmlplus_block_census"]	= "censimento aggiunto";
$pgv_lang["num_to_show"]			= "Numero di elementi da mostrare";
$pgv_lang["days_to_show"]			= "Numero di giorni da mostrare";
$pgv_lang["before_or_after"]		= "Conteggi località prima o dopo il nome?";
$pgv_lang["before"]					= "prima";
$pgv_lang["after"]					= "dopo";
$pgv_lang["config_block"]			= "Blocco di Configurazione";
$pgv_lang["enter_comments"]			= "Per favore indica la tua relazione con i dati nel campo dei Commenti.";
$pgv_lang["comments"]				= "Commenti";
$pgv_lang["child-family"]			= "Genitori e Fratelli";
$pgv_lang["spouse-family"]			= "Coniuge e figli";
$pgv_lang["direct-ancestors"]		= "Antenati in linea diretta";
$pgv_lang["ancestors"]				= "Antenati in linea diretta e familiari";
$pgv_lang["descendants"]			= "Discendenti";
$pgv_lang["choose_relatives"]		= "Seleziona Parenti";
$pgv_lang["relatives_report"]		= "Report Parenti";
$pgv_lang["total_unknown"]			= "sconosciuto";
$pgv_lang["total_living"]			= "Totale vivi";
$pgv_lang["total_dead"]				= "Totale morti";
$pgv_lang["total_not_born"]			= "Totale non ancora nati";
$pgv_lang["remove_custom_tags"]		= "Rimuovere i tag PGV personalizzati? (es. _PGVU._THUM)";
$pgv_lang["cookie_login_help"]		= "Questo sito si ricorda di te dal precedente login. Ciò ti permette di avere accesso ad informazioni private e ad altre funzioni, ma per modificare i dati o amministrare il sito devi comunque effettuare il login, per maggior sicurezza.";
$pgv_lang["remember_me"]			= "Ricordami da questo computer";
$pgv_lang["fams_with_surname"]		= "Famiglie con cognome #surname#";
$pgv_lang["support_contact"]		= "Contatto Tecnico";
$pgv_lang["genealogy_contact"]		= "Contatto Genealogia";
$pgv_lang["common_upload_errors"]	= "Questo errore significa probabilmente che il file che hai provato a spedire supera la dimensione massima imposta dal tuo host. Il limite di default di PHP è 2MB. Puoi contattare il tuo team di supporto per l'host per far aumentare il limite imposto in php.ini o puoi inviare il file mediante FTP. Usa la pagina <a href=\"uploadgedcom.php?action=add_form\"><b>Aggiungi file GEDCOM</b></a> per inserire un file GEDCOM che hai inviato via FTP.";
$pgv_lang["total_memory_usage"]		= "Totale Utilizzo Memoria:";
$pgv_lang["mothers_family_with"]	= "Famiglia materna con ";
$pgv_lang["fathers_family_with"]	= "Famiglia paterna con ";
$pgv_lang["family_with"]			= "Famiglia con";
$pgv_lang["halfsibling"]			= "Fratellastro";
$pgv_lang["halfbrother"]			= "Fratellastro";
$pgv_lang["halfsister"]				= "Sorellastra";
$pgv_lang["family_timeline"]		= "Mostra la famiglia sulla tabella temporale";
$pgv_lang["children_timeline"]		= "Mostra i figli sulla tabella temporale";
$pgv_lang["other"]					= "Altro";
$pgv_lang["others"]					= "Altri";
$pgv_lang["sort_by_marriage"]		= "Ordina per data di matrimonio";
$pgv_lang["reorder_families"]		= "Riordina le famiglie";
$pgv_lang["indis_with_surname"]		= "Persone con il cognome #surname#";
$pgv_lang["first_letter_name"]		= "Scegli una lettera per mostrare le famiglie il cui nome inizia con quella lettera.";
$pgv_lang["first_letter_sfname"]	= "Scegli una lettera per mostrare le famiglie in cui il coniuge ha un nome che inizia con quella lettera.";
$pgv_lang["first_letter_iname"]		= "Scegli una lettera di mostrare le persone il cui cognome inizia con quella lettera.";
$pgv_lang["first_letter_fname"]		= "Scegli una lettera per mostrare le persone il cui nome inizia con quella lettera.";
$pgv_lang["total_names"]			= "Totale Nomi";
$pgv_lang["total_changes"]			= "Totale variazioni";
$pgv_lang["total_links"]			= "Totale collegamenti";
$pgv_lang["top10_pageviews_nohits"]	= "Al momento non ci sono click da mostrare.";
$pgv_lang["top10_pageviews_msg"]	= "Il conteggio dei click deve essere abilitato nella configurazione del file di famiglia, sezione Visualizzazione, gruppo Mostra/nascondi";
$pgv_lang["review_changes_descr"]	= "Il blocco delle modifiche in attesa darà agli utenti con diritti di modifica una lista dei record che sono stati modificati on line e che ancora necessitano di essere revisionati e accettati. Queste modifiche sono in attesa di accettazione o rifiuto..<br /><br />Se questo blocco è abilitato, gli utenti con diritti di accettazione riceveranno un e-mail una volta a giorno per notificare che quelle modifiche necessitano di revisione";
$pgv_lang["review_changes_block"]	= "Modifiche da approvare";
$pgv_lang["review_changes_email"]	= "Inviare email di promemoria?";
$pgv_lang["review_changes_email_freq"]	= "Frequenza e-mail di promemoria (giorni)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Rassegna modifiche";
$pgv_lang["review_changes_body"]	= "Sono state apportate modifiche on line ad un database genealogico. Occorre rivedere e accettare le modifiche prima che possano essere visualizzate dagli utenti. Per favore, utilizza l'URL qui sotto per accedere al sito e revisionare le modifiche.";
$pgv_lang["show_pending"]		= "Visualizza modifiche in attesa.";
$pgv_lang["show_spouses"]			= "Mostra sposi";
$pgv_lang["quick_update_title"]		= "Modifica veloce";
$pgv_lang["quick_update_instructions"] = "Questa pagina ti permette di aggiornare rapidamente le informazioni di un individuo. Occorre solo inserire le nuove informazioni o le modifiche rispetto al contenuto attuale della base dati. Appena le modifichei saranno state salvate, dovranno essere revisionate da un amministratore prima di diventare visibili a tutti.";
$pgv_lang["update_name"]			= "Aggiorna Nome";
$pgv_lang["update_fact"]			= "Aggiorna un Fatto";
$pgv_lang["update_fact_restricted"] = "L'aggiornamento di questo evento è riservato:";
$pgv_lang["select_fact"]			= "Seleziona un fatto...";
$pgv_lang["update_address"]			= "Aggiorna Indirizzo";
$pgv_lang["top10_pageviews_descr"]	= "Questo blocco mostra i 10 record che sono stati visualizzati di più. Questo blocco richiede che il conteggio dei click sia abilitato nelle impostazioni di configurazione del file di famiglia.";
$pgv_lang["top10_pageviews"]		= "Voci più viste";
$pgv_lang["top10_pageviews_block"]		= "Voci più viste";
$pgv_lang["stepparent"]				= "Genitori adottivi";
$pgv_lang["stepdad"]				= "Patrigno";
$pgv_lang["stepmom"]				= "Matrigna";
$pgv_lang["stepsister"]				= "Sorellastra";
$pgv_lang["stepbrother"]			= "Fratellastro";
$pgv_lang["fams_charts"]			= "Opzioni per la famiglia";
$pgv_lang["indis_charts"]			= "Opzioni per la persona";
$pgv_lang["none"]					= "Nessuno";
$pgv_lang["facts"]					= "Fatti";
$pgv_lang["locked"]					= "non cambiare";
$pgv_lang["privacy"]				= "Privacy";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]    = "?";
$pgv_lang["qm_ah"]     = "?";
$pgv_lang["page_help"]    = "Aiuto";
$pgv_lang["help_for_this_page"]  = "Aiuto di questa pagina";
$pgv_lang["help_contents"]   = "Contenuti";
$pgv_lang["show_context_help"]  = "Mostra aiuto contestuale";
$pgv_lang["hide_context_help"]  = "Nascondi aiuto contestuale";
$pgv_lang["sorry"]					= "<b>Spiacente, l'aiuto per questa pagina o per questo oggetto non è ancora disponibile.</b>";
$pgv_lang["help_not_exist"] 		= "<b>Il testo di aiuto per questa pagina o voce non è ancora disponibile.</b>";
$pgv_lang["var_not_exist"]			= "<span style=\"font-weight: bold\">La variabile lingua non esiste. Per favore, segnalalo come errore a un amministratore.</span>";
$pgv_lang["resolution"] 			= "Risoluzione Schermo";
$pgv_lang["menu"]					= "Menu";
$pgv_lang["header"] 				= "Intestazione";
$pgv_lang["imageview"]				= "Visualizzatore immagini";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]    = "PhpGedView Login Utenti";
$pgv_lang["for_support"]  = "Per informazioni tecniche e supporto, contattare";
$pgv_lang["for_contact"]  = "Per informazioni sulla gestione dell'albero genealogico, contattare";
$pgv_lang["for_all_contact"]  = "Per informazioni tecniche o domande sulla gestione dell'albero genealogico, contattare";
$pgv_lang["choose_username"]		= "Nome utente desiderato";
$pgv_lang["username"]				= "Nome utente";
$pgv_lang["invalid_username"]  = "Lo User Name contiene caratteri non validi";
$pgv_lang["firstname"]				= "Nome";
$pgv_lang["lastname"]				= "Cognome";
$pgv_lang["choose_password"]		= "Password desiderata";
$pgv_lang["password"]				= "Password";
$pgv_lang["confirm"]    = "Conferma Password";
$pgv_lang["login"]					= "Login";
$pgv_lang["logout"] 				= "Logout";
$pgv_lang["logout"] 				= "Logout";
$pgv_lang["admin"]     = "Amministra";
$pgv_lang["logged_in_as"]  = "Collegato come";
$pgv_lang["my_pedigree"]  = "Il mio pedigree";
$pgv_lang["my_indi"]				= "Il mio record individuale";
$pgv_lang["yes"]    = "Si";
$pgv_lang["no"] 					= "No";
$pgv_lang["change_theme"]   = "Cambia Tema";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]  = "Albero genealogico";
$pgv_lang["gen_ped_chart"] = "#PEDIGREE_GENERATIONS# Tabella delle Generazioni";
$pgv_lang["generations"]  = "Generazioni";
$pgv_lang["view"]     = "Visualizza";
$pgv_lang["fam_spouse"]  = "Famiglia con coniuge";
$pgv_lang["rootid"] 				   = "Prospetto Pedigree della persona Radice";
$pgv_lang["root_person"]	= "ID persona";
$pgv_lang["hide_details"]	= "Nascondi i dettagli";
$pgv_lang["show_details"]	= "Mostra i dettagli";
$pgv_lang["person_links"]	= "Collegamento ai grafici, famigliari e parenti stretti di questa persona";
$pgv_lang["zoom_box"]		= "Zoom IN/OUT";
$pgv_lang["orientation"]			= "Orientamento";
$pgv_lang["portrait"]				= "In altezza";
$pgv_lang["landscape"]				= "In larghezza";
$pgv_lang["landscape_top"]			= "Il più vecchio all\'inizio";
$pgv_lang["landscape_down"]		= "Il più vecchio alla fine";
$pgv_lang["start_at_parents"]		= "Inizia dai genitori";
$pgv_lang["charts"] 				= "Diagrammi";
$pgv_lang["lists"]					= "Liste";
$pgv_lang["box_width"] 				= "Grandezza riquadro";
$pgv_lang["random_surn"]			= "Cognome casuale";
$pgv_lang["generation_number"] = "generazioni";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Impossibile trovare una famiglia con questo ID";
$pgv_lang["unable_to_find_record"]	= "Impossibile trovare un record con questo ID";
$pgv_lang["title"]								= "Titolo:";
$pgv_lang["living"]								= "In vita";
$pgv_lang["private"]			= "Privato";
$pgv_lang["birth"]								= "Nascita:";
$pgv_lang["death"]								= "Morte:";
$pgv_lang["descend_chart"]				= "Tabella dei Discendenti";
$pgv_lang["individual_list"]				= "Lista delle Persone";
$pgv_lang["family_list"]					= "Lista delle Famiglie";
$pgv_lang["branch_list"]			= "Rami";
$pgv_lang["source_list"]					= "Lista delle Fonti";
$pgv_lang["shared_note_list"]		= "Note condivise";
$pgv_lang["place_list"]						= "Gerarchia dei Luoghi";
$pgv_lang["place_list_aft"] 		= "Gerarchia località dopo";
$pgv_lang["media_list"]						= "Lista degli Oggetti Multimediali";
$pgv_lang["repo_list"]					= "Lista Archivi";
$pgv_lang["search"]							= "Cerca";
$pgv_lang["clippings_cart"]				= "Carrello Ritagli dell'Albero Genealogico";
$pgv_lang["print_preview"]				= "Versione Stampabile";
$pgv_lang["cancel_preview"] 		= "Torna alla vista normale";
$pgv_lang["change_lang"]					= "Cambia Lingua";
$pgv_lang["print"]				= "Stampa";
$pgv_lang["total_queries"]			= "Totale Query al Database";
$pgv_lang["total_privacy_checks"]	= "Totale controlli privacy:";
$pgv_lang["back"]				= "Indietro";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]					= "AKA";
$pgv_lang["male"]					= "Maschio";
$pgv_lang["males"]					= "Maschi";
$pgv_lang["female"]				= "Femmina";
$pgv_lang["females"]				= "Femmine";
$pgv_lang["temple"]				= "Tempio della Chiesa Mormone";
$pgv_lang["temple_code"]		= "Codice della Chiesa Mormone:";
$pgv_lang["status"]				= "Stato";
$pgv_lang["source"]				= "Fonte:";
$pgv_lang["text"]					= "Testo:";
$pgv_lang["note"]					= "Nota";
$pgv_lang["NN"] 					= "(sconosciuto)";
$pgv_lang["PN"] 					= "(sconosciuta)";
$pgv_lang["NNhebrew"] 		= "(לא-ידוע)";
$pgv_lang["PNhebrew"] 		= "(לא-ידוע)";
$pgv_lang["NNarabic"] 		= "(غير معروف)";
$pgv_lang["PNarabic"] 		= "(غير معروف)";
$pgv_lang["NNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["PNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["NNrussian"] 		= "(неопределено)";
$pgv_lang["PNrussian"] 		= "(неопределено)";
$pgv_lang["NNchinese"] 		= "(未知)";
$pgv_lang["PNchinese"] 		= "(未知)";
$pgv_lang["NNvietnamese"] = "(vô danh)";
$pgv_lang["PNvietnamese"] = "(không biết tuổi)";
$pgv_lang["NNthai"] 			= "(sconosciuto)";
$pgv_lang["PNthai"] 			= "(sconosciuto)";
$pgv_lang["NNother"] 			= "(sconosciuto)";
$pgv_lang["PNother"] 			= "(sconosciuto)";
$pgv_lang["unrecognized_code"]	= "Codice GEDCOM sconosciuto";
$pgv_lang["unrecognized_code_msg"]	= "Questo è un errore, e vorremo sistemarlo. Per favore notificalo a";
$pgv_lang["indi_info"]			= "Informazione Individuale";
$pgv_lang["pedigree_chart"]	= "Albero genealogico";
$pgv_lang["individual"]				= "Individuale";
$pgv_lang["as_spouse"]			= "Famiglia con coniuge";
$pgv_lang["privacy_error"]	    = "I dettagli di questa persona sono privati.";
$pgv_lang["more_information"]		= "Per maggiori informazioni contattare";
$pgv_lang["given_name"]		= "Nome proprio:";
$pgv_lang["surname"]			= "Cognome:";
$pgv_lang["suffix"]					= "Suffisso:";
$pgv_lang["sex"]						= "Sesso";
$pgv_lang["personal_facts"]	= "Fatti e Dettagli personali";
$pgv_lang["type"]					= "Tipo";
$pgv_lang["parents"] 			= "Genitori";
$pgv_lang["gparents"]				= "Nonni";
$pgv_lang["siblings"] 			= "Fratelli";
$pgv_lang["father"] 			= "Padre";
$pgv_lang["mother"] 			= "Madre";
$pgv_lang["parent"] 				= "Genitore";
$pgv_lang["parent_age"] 			= "Età dei genitori";
$pgv_lang["father_age"]				= "Età del padre";
$pgv_lang["mother_age"]				= "Età della madre";
$pgv_lang["self"] 					= "Stesso";
$pgv_lang["relatives"]			= "Parenti stretti";
$pgv_lang["relatives_events"]		= "Eventi di parenti stretti";
$pgv_lang["historical_facts"]		= "Fatti storici";
$pgv_lang["partner"] 				= "Partner";
$pgv_lang["spouse"]				= "Coniuge";
$pgv_lang["spouses"] 				= "Coniugi";
$pgv_lang["surnames"]			= "Cognomi";
$pgv_lang["adopted"]			= "Adottato";
$pgv_lang["foster"]			= "Tutela";
$pgv_lang["sealing"]				= "Sigillatura";
$pgv_lang["challenged"]				= "Challenged";
$pgv_lang["disproved"]				= "Smentita";
$pgv_lang["infant"]					= "Bebè";
$pgv_lang["infant"]					= "Infante";
$pgv_lang["stillborn"]				= "Nato-morto";
$pgv_lang["deceased"]				= "Deceduto";
$pgv_lang["link_as_wife"]			= "Collega questa persona a una famiglia esistente come moglie";
$pgv_lang["no_tab1"]				= "Non ci sono fatti per questa persona.";
$pgv_lang["no_tab2"]				= "Non ci sono note per questa persona.";
$pgv_lang["no_tab3"]				= "Non ci sono Fonti per questa persona.";
$pgv_lang["no_tab4"]				= "Non ci sono oggetti multimediali per questa persona.";
$pgv_lang["no_tab5"]				= "Non ci sono parenti stretti per questa persona.";
$pgv_lang["no_tab6"]				= "Non ci sono log di ricerca allegati a questa persona.";
$pgv_lang["show_fact_sources"]		= "Mostra tutte le fonti";
$pgv_lang["show_fact_notes"]		= "Visualizza tutte le note";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]				= "Informazioni sulla Famiglia";
$pgv_lang["family_group_info"]	= "Informazione sul Gruppo famigliare";
$pgv_lang["husband"]					= "Marito:";
$pgv_lang["wife"]							= "Moglie:";
$pgv_lang["marriage"]					= "Matrimonio:";
$pgv_lang["lds_sealing"]				= "Suggellatura Mormone:";
$pgv_lang["marriage_license"]		= "Licenza di Matrimonio:";
$pgv_lang["no_children"]				= "Nessun figlio";
$pgv_lang["known_child"]			= "1 figlio";
$pgv_lang["known_children"]			= "figli";
$pgv_lang["childless_family"]		= "Questa famiglia è rimasta senza figli";
$pgv_lang["parents_timeline"]			= "Mostra i genitori sulla<br />tabella temporale";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]					= "Carrello Ritagli";
$pgv_lang["which_links"]				= "Che legami di questa famiglia si vorrebbero ancora aggiungere?";
$pgv_lang["just_family"]				= "Aggiungere solo questa persona";
$pgv_lang["parents_and_family"]	= "Aggiungere i genitori con questa famiglia.";
$pgv_lang["parents_and_child"]	= "Aggiungere i genitori e i figli a questo record di famiglia.";
$pgv_lang["parents_desc"]				= "Aggiungere i genitori e tutti i discendenti a questo record di famiglia.";
$pgv_lang["continue"]					= "Continuare ad aggiungere";
$pgv_lang["which_p_links"]			= "Che legami di questa persona si vorrebbero ancora aggiungere?";
$pgv_lang["just_person"]				= "Aggiungere solo questa persona.";
$pgv_lang["person_parents_sibs"]= "Aggiungere questa persona, i suoi genitori e i suoi fratelli e sorelle.";
$pgv_lang["person_ancestors"]		= "Aggiungere questa persona e i suoi antenati in linea diretta.";
$pgv_lang["person_ancestor_fams"]="Aggiungere questa persona, i suoi antenati in linea diretta e le loro famiglie.";
$pgv_lang["person_spouse"]			= "Aggiungere questa persona, la sua sposa, e i bambini.";
$pgv_lang["person_desc"]				= "Aggiungere questa persona, la sua sposa e tutti i registri dei discendenti.";
$pgv_lang["which_s_links"]			= "Quali record collegati a questa fonte dovrebbero essere aggiunti?";
$pgv_lang["just_source"]		= "Aggiungi solo questa fonte.";
$pgv_lang["linked_source"]		= "Aggiungi questa fonte e le famiglie/persone ad essa collegate.";
$pgv_lang["person_private"]			= "I dettagli di questa persona sono privati. I dettagli personali non saranno inclusi";
$pgv_lang["family_private"] 		= "I dettagli della famiglia sono privati e pertanto non saranno inclusi.";
$pgv_lang["media_private"] 		= "I dettagli di questo file multimediale sono riservati e non verranno inclusi.";
$pgv_lang["download"]					= "Per scaricare i file, fare click-destro (control-click sui Mac) sui collegamenti, poi selezionare &quot;Salva oggetto con nome...&quot;.";
$pgv_lang["cart_is_empty"]			= "Il carrello ritagli dell'albero è vuoto.";
$pgv_lang["id"]						= "ID";
$pgv_lang["ID"]						= "ID";
$pgv_lang["name_description"]		= "Nome / Descrizione";
$pgv_lang["remove"]					= "Rimuovere";
$pgv_lang["empty_cart"]				= "Carrello vuoto";
$pgv_lang["download_now"]			= "Scaricare";
$pgv_lang["download_file"]	= "Scarica file #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Questa persona è stata scaricata da:";
$pgv_lang["family_downloaded_from"] = "Questa famiglia è stata scaricata da:";
$pgv_lang["source_downloaded_from"] = "Questa fonte è stata scaricata da:";
$pgv_lang["enter_person_generations"] = "Numero di generazioni:";
$pgv_lang["convertPath"]			= "Converti il percorso degli oggetti multimediali in ";
$pgv_lang["convertSlashes"]		= "Converti i separatori della cartella degli oggetti media in ";
$pgv_lang["forwardSlashes"]		= "Slash in avanti : /";
$pgv_lang["backSlashes"]			= "Slash all'indietro : \\";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]				= "Trovate connessioni a questi luoghi<br />Visualizzare i risultati";
$pgv_lang["top_level"]					= "Livello superiore";
$pgv_lang["form"]						= "I luoghi sono codificati nel seguente formato:";
$pgv_lang["default_form"]				= "Città, Provincia/Contea, Regione/Stato, Nazione";
$pgv_lang["default_form_info"]		= "(Default)";
$pgv_lang["unknown"]					= "Sconosciuto";
$pgv_lang["individuals"]				= "Persone";
$pgv_lang["view_records_in_place"]	= "Visualizza tutti i documenti trovati in questa località";
$pgv_lang["place_list2"] 				= "Lista dei luoghi";
$pgv_lang["show_place_hierarchy"]	= "Visualizza Luoghi in Gerarchia";
$pgv_lang["show_place_list"]			= "Mostra tutti i luoghi in una lista";
$pgv_lang["total_unic_places"]			= "Totale luoghi unici";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Oggetti esterni";
$pgv_lang["multi_title"]				= "Lista degli oggetti multimediali";
$pgv_lang["media_found"]				= "Oggetti multimediali trovati";
$pgv_lang["view_person"]				= "Visualizza Persona";
$pgv_lang["view_family"]				= "Visualizza Famiglia";
$pgv_lang["view_source"]				= "Visualizza Fonte";
$pgv_lang["view_object"]			= "Visualizza Oggetto";
$pgv_lang["prev"]						= "&lt; Precedente";
$pgv_lang["next"]						= "Successivo &gt;";
$pgv_lang["next_image"]				= "Immagine successiva";
$pgv_lang["file_not_found"]				= "File non trovato";
$pgv_lang["medialist_show"] 			= "Mostra";
$pgv_lang["per_page"]					= "oggetti multimediali per pagina";
$pgv_lang["media_format"]			= "Formato media";
$pgv_lang["image_size"]				= "Dimensioni immagine";
$pgv_lang["media_id"]				= "Media ID";
$pgv_lang["invalid_id"]				= "Non esiste questo ID nel file di famiglia.";
$pgv_lang["record_updated"]			= "Record #pid# aggiornato con successo.";
$pgv_lang["record_not_updated"]		= "Il record #pid# non può essere aggiornato.";
$pgv_lang["record_removed"]			= "Il record #xref# è stato rimosso con successo dal file di famiglia.";
$pgv_lang["record_not_removed"]		= "Il record #xref# non può essere rimosso dal file di famiglia.";
$pgv_lang["record_added"]			= "Il record #xref# è stato aggiunto con successo al file di famiglia.";
$pgv_lang["record_not_added"]		= "Il record #xref# non può essere aggiunto al file di famiglia.";

//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"]			= "- O Cerca il nome come pensi che si scriva (Soundex):";
$pgv_lang["sources"]				= "FONTI";
$pgv_lang["shared_notes"]			= "Note condivise";
$pgv_lang["lastname_search"]		= "Cognome:";
$pgv_lang["search_place"]			= "Luogo:";
$pgv_lang["search_year"]			= "Anno:";
$pgv_lang["no_results"]				= "Nessun risultato trovato";
$pgv_lang["search_soundex"]			= "Ricerca fonetica";
$pgv_lang["search_replace"]			= "Cerca e sostituisci";
$pgv_lang["search_sources"]			= "Fonti";
$pgv_lang["search_shared_notes"]	= "Note condivise";
$pgv_lang["search_more_chars"]      = "Devi inserire più di un carattere";
$pgv_lang["search_soundextype"]		= "Tipo fonetica";
$pgv_lang["search_russell"]			= "Base";
$pgv_lang["search_tagfilter"]		= "Escludi Filtro";
$pgv_lang["search_tagfon"]			= "Escludi alcuni dati non genealogici";
$pgv_lang["search_tagfoff"]			= "Off";
$pgv_lang["associate"]				= "associare";
$pgv_lang["search_record"]			= "Intero record";
$pgv_lang["search_to"]				= "a";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]			= "Titoli";
$pgv_lang["find_source"]			= "Trova Fonti";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repository"] 			= "Deposito";
$pgv_lang["repos_found"]			= "Repository trovato";
$pgv_lang["find_repository"]		= "Trova Repository";
$pgv_lang["total_repositories"]		= "Totale Repository";
$pgv_lang["confirm_delete_repo"]	= "Sei sicuro di voler eliminare questo repository?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]			= "Informazioni sulla Fonte";
$pgv_lang["people"]					= "Persone";
$pgv_lang["families"]				= "Famiglie";
$pgv_lang["total_sources"]			= "Totale Fonti";

//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"]				= "Note condivise";
$pgv_lang["shared_notes_found"]			= "Trovate note condivise";
$pgv_lang["find_shared_note"]			= "Trova note condivise";
$pgv_lang["shared_note_info"]			= "Informazioni note condivise";
$pgv_lang["total_shared_notes"]			= "Totale note condivise";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]		= "Formato file di famiglia non valido";
$pgv_lang["exec_time"]				= "Totale tempo impiegato:";
$pgv_lang["unable_to_create_index"]	= "Assicurarsi che la cartella di PhpGedview abbia i permessi di scrittura attivati. I permessi possono essere riportati alle condizioni originarie una volta che i file indice siano stati scritti.";
$pgv_lang["changes_present"]		= "Il corrente file di famiglia ha modifiche in attesa di revisione. Se continui questa Importazione, queste modifiche verranno inserite nel database immediatamente. Dovresti rivedere le modifiche in attesa prima di continuare l'importazione";
$pgv_lang["sec"]					= "sec.";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]				= "Totale Famiglie";
$pgv_lang["total_indis"]			= "Persone Totali";
$pgv_lang["notes"]					= "Note";
$pgv_lang["ssourcess"]				= "Fonti";
$pgv_lang["media"]					= "Media";
$pgv_lang["name_contains"]			= "Il nome contiene";
$pgv_lang["filter"]					= "Filtra";
$pgv_lang["apply_filter"]			= "Applica filtro";
$pgv_lang["find_individual"]		= "Trova ID Persona";
$pgv_lang["find_familyid"]			= "Trova ID Famiglia";
$pgv_lang["find_sourceid"]			= "Trova Fonte ID";
$pgv_lang["find_specialchar"]		= "Trova Caratteri Speciali";
$pgv_lang["magnify"]				= "Ingrandisci";
$pgv_lang["skip_surnames"]			= "Non raggruppare i cognomi";
$pgv_lang["show_surnames"]			= "Raggruppa i cognomi";
$pgv_lang["skip_marnms"]			= "Escludi cognomi coniugali";
$pgv_lang["show_marnms"]			= "Includi cognomi coniugali";
$pgv_lang["all"]					= "TUTTO";
$pgv_lang["hidden"]					= "Nascosto";
$pgv_lang["confidential"]			= "Confidenziale";
$pgv_lang["alpha_index"]			= "Indice alfabetico";
$pgv_lang["name_list"] 				= "Lista nomi";
$pgv_lang["firstname_alpha_index"] 	= "Indice alfabetico nomi propri";
$pgv_lang["roots"]		 			= "Radici";
$pgv_lang["leaves"] 				= "Foglie";
$pgv_lang["widow"] 					= "Vedova";
$pgv_lang["widower"] 				= "Vedovo";
$pgv_lang["show_parents"] 			= "Visualizza i genitori";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]					= "Età";
$pgv_lang["husb_age"]				= "Età del marito";
$pgv_lang["wife_age"]				= "Età della moglie";
$pgv_lang["year1"]					= "anno";
$pgv_lang["years2"]					= "anni";	// 2 anni";
$pgv_lang["years"]					= "anni";	// >2 anni";
$pgv_lang["month1"]					= "mese";
$pgv_lang["months"]					= "mesi";
$pgv_lang["week1"]					= "settimana";
$pgv_lang["weeks"]					= "settimane";
$pgv_lang["day1"]					= "giorno";
$pgv_lang["days"]					= "giorni";
$pgv_lang["after_death"]        	= "dopo la morte";
$pgv_lang["at_death_day"]      		= "alla data di morte";
$pgv_lang["timeline_title"]			= "Scala Temporale di PhpGedView";
$pgv_lang["timeline_chart"]			= "Scala Temporale";
$pgv_lang["remove_person"]			= "Rimuovi questa persona";
$pgv_lang["show_age"]				= "Mostrare il marcatore d'età";
$pgv_lang["add_another"]			= "Aggiungere un'altra persona al diagramma:<br />ID della persona:";
$pgv_lang["find_id"]				= "Cerca un ID";
$pgv_lang["show"]					= "Visualizza";
$pgv_lang["year"]					= "Anno:";
$pgv_lang["timeline_instructions"]	= "Nei browser più recenti è possibile selezionare e trascinare i riquadri.";
$pgv_lang["zoom_in"]				= "Ingrandisci";
$pgv_lang["zoom_out"]				= "Rimpicciolisci";
$pgv_lang["timeline_beginYear"] = "Anno di inizio";
$pgv_lang["timeline_endYear"] = "Anno di fine";
$pgv_lang["timeline_scrollSpeed"] = "Velocità";
$pgv_lang["timeline_controls"] = "Controlli linea del tempo";
$pgv_lang["include_family"] = "Includi famiglia prossima";
$pgv_lang["lifespan_chart"] = "Prospetto periodo di vita";

// calendar conversion options
$pgv_lang["cal_none"]                 = "Nessuna conversione calendario";
$pgv_lang["cal_gregorian"]			= "Gregoriano";
$pgv_lang["cal_julian"]				= "Giuliano";
$pgv_lang["cal_french"]				= "French";
$pgv_lang["cal_jewish"]				= "Giudaico";
$pgv_lang["cal_hebrew"]				= "Ebraico";
$pgv_lang["cal_jewish_and_gregorian"] = "Giudaico e Gregoriano";
$pgv_lang["cal_hebrew_and_gregorian"] = "Ebraico e Gregoriano";
$pgv_lang["cal_hijri"]                = "Hijri";
$pgv_lang["cal_arabic"]               = "Arabo";

// some religious dates
$pgv_lang["easter"]     = "Pasqua";
$pgv_lang["ascension"]  = "Ascensione";
$pgv_lang["pentecost"]  = "Pentecoste";
$pgv_lang["assumption"] = "Assunzione";
$pgv_lang["all_saints"] = "Ognissanti";
$pgv_lang["christmas"]  = "Natale";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."]					= "am";
$pgv_lang["p.m."]					= "pm";
$pgv_lang["noon"]         = "mezzogiorno";
$pgv_lang["midn"]         = "mezzanotte";

//-- MONTH NAMES
$pgv_lang["jan"]			= "Gennaio";
$pgv_lang["feb"]			= "Febbraio";
$pgv_lang["mar"]			= "Marzo";
$pgv_lang["apr"]			= "Aprile";
$pgv_lang["may"]			= "Maggio";
$pgv_lang["jun"]			= "Giugno";
$pgv_lang["jul"]			= "Luglio";
$pgv_lang["aug"]			= "Agosto";
$pgv_lang["sep"]			= "Settembre";
$pgv_lang["oct"]			= "Ottobre";
$pgv_lang["nov"]			= "Novembre";
$pgv_lang["dec"]			= "Dicembre";

$pgv_lang["vend"]         = "Vendémiaire";
$pgv_lang["brum"]         = "Brumaire";
$pgv_lang["frim"]         = "Frimaire";
$pgv_lang["nivo"]         = "Nivôse";
$pgv_lang["pluv"]         = "Pluviôse";
$pgv_lang["vent"]         = "Ventôse";
$pgv_lang["germ"]         = "Germinal";
$pgv_lang["flor"]         = "Floréal";
$pgv_lang["prai"]         = "Prairial";
$pgv_lang["mess"]         = "Messidor";
$pgv_lang["ther"]         = "Thermidor";
$pgv_lang["fruc"]         = "Fructidor";
$pgv_lang["comp"]         = "jours complémentaires";

$pgv_lang["tsh"]          = "Tishrei";
$pgv_lang["csh"]          = "Heshvan";
$pgv_lang["ksl"]          = "Kislev";
$pgv_lang["tvt"]          = "Tevet";
$pgv_lang["shv"]          = "Shevat";
$pgv_lang["adr"]          = "Adar";
$pgv_lang["adr_leap_year"]= "Adar I";
$pgv_lang["ads"]          = "Adar II";
$pgv_lang["nsn"]          = "Nissan";
$pgv_lang["iyr"]          = "Iyar";
$pgv_lang["svn"]          = "Sivan";
$pgv_lang["tmz"]          = "Tamuz";
$pgv_lang["aav"]          = "Av";
$pgv_lang["ell"]          = "Elul";

$pgv_lang["muhar"]        = "Muharram";
$pgv_lang["safar"]        = "Safar";
$pgv_lang["rabia"]        = "Rabi' al-awwal";
$pgv_lang["rabit"]        = "Rabi' al-thani";
$pgv_lang["jumaa"]        = "Jumada al-awwal";
$pgv_lang["jumat"]        = "Jumada al-thani";
$pgv_lang["rajab"]        = "Rajab";
$pgv_lang["shaab"]        = "Sha'aban";
$pgv_lang["ramad"]        = "Ramadan";
$pgv_lang["shaww"]        = "Shawwal";
$pgv_lang["dhuaq"]        = "Dhu al-Qi'dah";
$pgv_lang["dhuah"]        = "Dhu al-Hijjah";

$pgv_lang["b.c."]					= "AC";

$pgv_lang["abt"]					= "circa";
$pgv_lang["aft"]			= "dopo";
$pgv_lang["and"]					= "e";
$pgv_lang["bef"]					= "prima";
$pgv_lang["bet"]					= "tra";
$pgv_lang["cal"]					= "calcolato";
$pgv_lang["est"]					= "stimato";
$pgv_lang["from"]					= "da";
$pgv_lang["int"]					= "interpretato";
$pgv_lang["to"]						= "fino a";
$pgv_lang["cir"]						= "circa";
$pgv_lang["apx"]					= "appross.";

//-- Admin File Messages
$pgv_lang["password_mismatch"]		= "La password non corrisponde";
$pgv_lang["enter_username"]			= "Devi immettere uno username";
$pgv_lang["enter_password"]			= "Devi immettere una password";
$pgv_lang["save"]					= "Salva";
$pgv_lang["saveandgo"]		= "Salva e vai a un nuovo record";
$pgv_lang["delete"]					= "Elimina";
$pgv_lang["edit"]					= "Modifica";
$pgv_lang["no_login"]				= "impossibile autenticare l'utente";
$pgv_lang["basic_realm"]			= "PhpGedView sistema di autenticazione";
$pgv_lang["basic_auth_failure"]		= "È necessario inserire una login e password valide per accedere a questa risorsa";
$pgv_lang["basic_auth"]				= "Autenticazione di base";
$pgv_lang["digest_auth"]				= "Autenticazione sommaria"; //not used in code yet
$pgv_lang["no_auth_needed"]			= "Nessuna autenticazione";
$pgv_lang["file_not_exists"]		= "Il nome del file inserito non esiste.";
$pgv_lang["research_assistant"]		= "Assistente di ricerca";
$pgv_lang["utf8_to_ansi"]			= "Vuoi convertire da UTF-8 a ANSI (ISO-8859-1)?";
$pgv_lang["media_linked"]			= "Questo oggetto media è collegato a seguente:";
$pgv_lang["media_not_linked"]		= "Questo oggetto media non è collegato ad alcun record del file di famiglia";
$pgv_lang["media_dir_1"]			= "Questo oggetto media è situato su un server esterno";
$pgv_lang["media_dir_2"]			= "Questo oggetto media è nella cartella standard dei media";
$pgv_lang["media_dir_3"]			= "Questo oggetto media è nella cartella media protetta";
$pgv_lang["thumb_dir_1"]			= "Questa anteprima è situato su un server esterno";
$pgv_lang["thumb_dir_2"]			= "Questa anteprima è nella cartella standard dei media";
$pgv_lang["thumb_dir_3"]			= "Questa anteprima è nella cartella media protetta";
$pgv_lang["moveto_2"]				= "Sposta in directory protetta";
$pgv_lang["moveto_3"]				= "Sposta in cartella standard";
$pgv_lang["move_standard"]			= "Sposta in standard";
$pgv_lang["move_protected"]			= "Sposta in protette";
$pgv_lang["move_mediadirs"]			= "Sposta cartelle media";
$pgv_lang["setperms"]				= "Imposta i permessi per i media";
$pgv_lang["setperms_fix"]			= "Correggi permessi lettura/scrittura/esecuzione";
$pgv_lang["setperms_success"]		= "Autorizzazioni impostate";
$pgv_lang["setperms_failure"]		= "Autorizzazioni non impostate";
$pgv_lang["setperms_time_exceeded"]	= "Il limite di tempo di esecuzione è stato raggiunto. Prova di nuovo il comando su una cartella più piccola.";
$pgv_lang["move_time_exceeded"]		= "Il limite di tempo di esecuzione è stato raggiunto. Prova di nuovo il comando per spostare il resto dei file.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "La cartella root del firewall per i media che hai richiesto non esiste. Creala prima.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "La cartella dei media protetti non può essere creata nella cartella radice del firewall dei media. Per favore, crea questa directory e rendila scrivibile al mondo";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "La cartella dei media protetti nella cartella radice del firewall per i media non è \"world-writable\"";
$pgv_lang["media_firewall_invalid_dir"]	= "Errore: Il Media Firewall è stato lanciato da una directory diversa da quella dei media directory.";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Vedi dettagli per ...";
$pgv_lang["view_fam_nav_notes"]		= "Vedi Note per ...";
$pgv_lang["view_fam_nav_sources"]	= "Vedi fonti per ...";
$pgv_lang["view_fam_nav_media"]		= "Vedi media per ...";
$pgv_lang["view_fam_nav_album"]		= "Visualizza album per ...";
$pgv_lang["view_fam_nav_relatives"]	= "Vedi Parenti per ...";
$pgv_lang["view_fam_nav_tree"]		= "Vedi albero per ...";
$pgv_lang["view_fam_nav_research"]	= "Vedi la ricerca per ...";
$pgv_lang["view_fam_nav_map"]		= "Visualizza Mappa per ...";
$pgv_lang["view_fam_nav_spare"]		= "Vedi informazioni varie per ...";
$pgv_lang["navigator"]				= "Navigatore";
$pgv_lang["fam_navigator"] = "Navigatore Famiglie";

$pgv_lang["relationship_great"] = "bis-";
$pgv_lang["relationship_chart"]		= "Grafico relazioni";
$pgv_lang["person1"]				= "Prima Persona";
$pgv_lang["person2"]				= "Seconda Persona";
$pgv_lang["no_link_found"]			= "Non può essere trovato un legame tra le due persone.";
$pgv_lang["no_other_link_found"]	= "Nessun altro collegamento fra le due persone può essere trovato.";
$pgv_lang["sibling"]				= "Fratello";
$pgv_lang["follow_spouse"]			= "Considera i matrimoni";
$pgv_lang["timeout_error"]			= "Lo script è scaduto prima di trovare una relazione.";
$pgv_lang["grandchild"]				= "Nipote";
$pgv_lang["grandson"]				= "Nipote";
$pgv_lang["granddaughter"]			= "Nipote";
$pgv_lang["greatgrandchild"]		= "Pro-nipote";
$pgv_lang["greatgrandson"]			= "Pro-nipote";
$pgv_lang["greatgranddaughter"]		= "Pro-nipote";
$pgv_lang["brother"]				= "Fratello";
$pgv_lang["sister"]					= "Sorella";
$pgv_lang["aunt"]					= "Zia";
$pgv_lang["uncle"]				= "Zio";
$pgv_lang["nephew"]				= "Nipote";
$pgv_lang["niece"]				= "Nipote";
$pgv_lang["firstcousin"]			= "Cugino/a di primo grado";
$pgv_lang["femalecousin"]			= "Cugina";
$pgv_lang["malecousin"]				= "Cugino";
$pgv_lang["relationship_to_me"]		= "Relazionato a me";
$pgv_lang["rela_husb"]				= "Relazione con il marito";
$pgv_lang["rela_wife"]				= "Relazione con la moglie";
$pgv_lang["next_path"]				= "Trova un altro collegamento";
$pgv_lang["show_path"]				= "Mostra collegamento";
$pgv_lang["line_up_generations"]	= "Allinea le generazioni";
$pgv_lang["oldest_top"]             = "Mostra i più vecchi in alto";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s è il %2\$s di %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s è la %2\$s di %3\$s.";

$pgv_lang["mother_in_law"]		= "Suocera";
$pgv_lang["father_in_law"]		= "Suocero";
$pgv_lang["brother_in_law"]		= "Cognato";
$pgv_lang["sister_in_law"]		= "Cognata";
$pgv_lang["brothers_wife"]		= "Cognata"; // brother's wife
$pgv_lang["son_in_law"]			= "Genero";
$pgv_lang["daughter_in_law"]	= "Nuora";
$pgv_lang["uncle_in_law"]		= "Zio acquisito";
$pgv_lang["aunt_in_law"]		= "Zia acquisita";
$pgv_lang["cousin_in_law"]		= "Cugino/a acquisito/a";
$pgv_lang["m_cousin_in_law"]	= "Cugino acquisito";
$pgv_lang["f_cousin_in_law"]	= "Cugina acquisita";
$pgv_lang["step_son"]			= "Figliastro";
$pgv_lang["step_daughter"]		= "Figliastra";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"]				= "nipote";             // brother's son
$pgv_lang["bosa_brothers_offspring_3"]				= "nipote";              // brother's daughter
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"]				= "pro-nipote";       // brother's son's son
$pgv_lang["bosa_brothers_offspring_5"]				= "pro-nipote";        // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"]				= "pro-nipote";       // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"]				= "pro-nipote";        // brother's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = "%2\$d° pro nipote";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d^ pro nipote";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"]				= "nipote";             // sister's son
$pgv_lang["bosa_sisters_offspring_3"]				= "nipote";              // sister's daughter
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"]				= "pro-nipote";       // sister's son's son
$pgv_lang["bosa_sisters_offspring_5"]				= "pro-nipote";        // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"]				= "pro-nipote";       // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"]				= "pro-nipote";        // sister's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = "%2\$d° pro-nipote";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d^ pro-nipote";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "figlio";                   // son
$pgv_lang["bosa_3"] 				= "figlia";              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "nipote";              // son's son
$pgv_lang["bosa_5"] 				= "nipote";         // son's daughter
$pgv_lang["bosa_6"] 				= "nipote";              // daughter's son
$pgv_lang["bosa_7"] 				= "nipote";         // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "pronipote";        // son's son's son
$pgv_lang["bosa_9"] 				= "pro-nipote";   // son's son's daughter
$pgv_lang["bosa_10"] 				= "pronipote";		   // son's daughter's son
$pgv_lang["bosa_11"] 				= "pro-nipote";   // son's daughter's daughter
$pgv_lang["bosa_12"] 				= "pronipote";        // daughter's son's son
$pgv_lang["bosa_13"] 				= "pro-nipote";   // daughter's son's daughter
$pgv_lang["bosa_14"] 				= "pronipote";		   // daughter's daughter's son
$pgv_lang["bosa_15"] 				= "pro-nipote";   // daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = "%3\$d° pro-nipote";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d^ pro-nipote";
$pgv_lang["n_x_grandson_from_daughter"]	  = "%3\$d° pro-nipote";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d^ pro-nipote";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= "zio";            // father's brother
$pgv_lang["sosa_uncle_3"] 				= "zio";            // mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "pro-zio";      // fathers's father's brother
$pgv_lang["sosa_uncle_5"] 				= "pro-zio";      // father's mother's brother
$pgv_lang["sosa_uncle_6"] 				= "pro-zio";      // mother's father's brother
$pgv_lang["sosa_uncle_7"] 				= "pro-zio";      // mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "%2\$d° pro-zio";
$pgv_lang["n_x_maternal_uncle"]	    = "%2\$d° pro-zio";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= "zia";            // father's sister
$pgv_lang["sosa_aunt_3"] 				= "zia";            // mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "pro-zia";      // fathers's father's sister
$pgv_lang["sosa_aunt_5"] 				= "pro-zia";      // father's mother's sister
$pgv_lang["sosa_aunt_6"] 				= "pro-zia";      // mother's father's sister
$pgv_lang["sosa_aunt_7"] 				= "pro-zia";      // mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "%2\$d^ pro-zia";
$pgv_lang["n_x_maternal_aunt"]	    = "%2\$d^ pro-zia";

// the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 				= "zio";            // father's brother
$pgv_lang["sosa_uncle_bm_3"] 				= "zio";            // mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"] 				= "pro-zio";      // fathers's father's brother
$pgv_lang["sosa_uncle_bm_5"] 				= "pro-zio";      // father's mother's brother
$pgv_lang["sosa_uncle_bm_6"] 				= "pro-zio";      // mother's father's brother
$pgv_lang["sosa_uncle_bm_7"] 				= "pro-zio";      // mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]		= "%2\$d° pro-zio";
$pgv_lang["n_x_maternal_uncle_bm"]	    = "%2\$d° pro-zio";

// the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 				= "zia";            // father's sister
$pgv_lang["sosa_aunt_bm_3"] 				= "zia";            // mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"] 				= "pro-zia";      // fathers's father's sister
$pgv_lang["sosa_aunt_bm_5"] 				= "pro-zia";      // father's mother's sister
$pgv_lang["sosa_aunt_bm_6"] 				= "pro-zia";      // mother's father's sister
$pgv_lang["sosa_aunt_bm_7"] 				= "pro-zia";      // mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]		= "%2\$d^ pro-zia";
$pgv_lang["n_x_maternal_aunt_bm"]	    = "%2\$d^ pro-zia";

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              = "cugino di primo grado";
$pgv_lang["male_cousin_2"]              = "cugino di secondo grado";
$pgv_lang["male_cousin_3"]              = "cugino di terzo grado";
$pgv_lang["male_cousin_4"]              = "cugino di 4° grado";
$pgv_lang["male_cousin_5"]              = "cugino di 5° grado";
$pgv_lang["male_cousin_6"]              = "cugino di 6° grado";
$pgv_lang["male_cousin_7"]              = "cugino di 7° grado";
$pgv_lang["male_cousin_8"]              = "cugino di 8° grado";
$pgv_lang["male_cousin_9"]              = "cugino di 9° grado";
$pgv_lang["male_cousin_10"]             = "cugino di 10° grado";
$pgv_lang["male_cousin_11"]             = "cugino di 11° grado";
$pgv_lang["male_cousin_12"]             = "cugino di 12° grado";
$pgv_lang["male_cousin_13"]             = "cugino di 13° grado";
$pgv_lang["male_cousin_14"]             = "cugino di 14° grado";
$pgv_lang["male_cousin_15"]             = "cugino di 15° grado";
$pgv_lang["male_cousin_16"]             = "cugino di 16° grado";
$pgv_lang["male_cousin_17"]             = "cugino di 17° grado";
$pgv_lang["male_cousin_18"]             = "cugino di 18° grado";
$pgv_lang["male_cousin_19"]             = "cugino di 19° grado";
$pgv_lang["male_cousin_20"]             = "cugino di 20° grado";
$pgv_lang["male_cousin_n"]              = "%d° cugino";
$pgv_lang["female_cousin_1"]            = "cugina di 1° grado";
$pgv_lang["female_cousin_2"]            = "cugina di 2° grado";
$pgv_lang["female_cousin_3"]            = "cugina di 3° grado";
$pgv_lang["female_cousin_4"]            = "cugina di 4° grado";
$pgv_lang["female_cousin_5"]            = "cugina di 5° grado";
$pgv_lang["female_cousin_6"]            = "cugina di 6° grado";
$pgv_lang["female_cousin_7"]            = "cugina di 7° grado";
$pgv_lang["female_cousin_8"]            = "cugina di 8° grado";
$pgv_lang["female_cousin_9"]            = "cugina di 9° grado";
$pgv_lang["female_cousin_10"]           = "cugina di 10° grado";
$pgv_lang["female_cousin_11"]           = "cugina di 11° grado";
$pgv_lang["female_cousin_13"]           = "cugina di 13° grado";
$pgv_lang["female_cousin_12"]           = "cugina di 12° grado";
$pgv_lang["female_cousin_14"]           = "cugina di 14° grado";
$pgv_lang["female_cousin_15"]           = "cugina di 15° grado";
$pgv_lang["female_cousin_16"]           = "cugina di 16° grado";
$pgv_lang["female_cousin_17"]           = "cugina di 17° grado";
$pgv_lang["female_cousin_18"]           = "cugina di 18° grado";
$pgv_lang["female_cousin_19"]           = "cugina di 19° grado";
$pgv_lang["female_cousin_20"]           = "cugina di 20° grado";
$pgv_lang["female_cousin_n"]            = "%d^ cugina";

// Only referenced from english specific functions
$pgv_lang["removed_ascending_1"]   = " once removed ascending";
$pgv_lang["removed_ascending_2"]   = " twice removed ascending";
$pgv_lang["removed_ascending_3"]   = " three times removed ascending";
$pgv_lang["removed_ascending_4"]   = " four times removed ascending";
$pgv_lang["removed_ascending_5"]   = " five times removed ascending";
$pgv_lang["removed_ascending_6"]   = " six times removed ascending";
$pgv_lang["removed_ascending_7"]   = " seven times removed ascending";
$pgv_lang["removed_ascending_8"]   = " eight times removed ascending";
$pgv_lang["removed_ascending_9"]   = " nine times removed ascending";
$pgv_lang["removed_ascending_10"]  = " ten times removed ascending";
$pgv_lang["removed_ascending_11"]  = " eleven times removed ascending";
$pgv_lang["removed_ascending_12"]  = " twelve times removed ascending";
$pgv_lang["removed_ascending_13"]  = " thirteen times removed ascending";
$pgv_lang["removed_ascending_14"]  = " fourteen times removed ascending";
$pgv_lang["removed_ascending_15"]  = " fifteen times removed ascending";
$pgv_lang["removed_ascending_16"]  = " sixteen times removed ascending";
$pgv_lang["removed_ascending_17"]  = " seventeen times removed ascending";
$pgv_lang["removed_ascending_18"]  = " eighteen times removed ascending";
$pgv_lang["removed_ascending_19"]  = " nineteen times removed ascending";
$pgv_lang["removed_ascending_20"]  = " twenty times removed ascending";
$pgv_lang["removed_descending_1"]  = " once removed descending";
$pgv_lang["removed_descending_2"]  = " twice removed descending";
$pgv_lang["removed_descending_3"]  = " three times removed descending";
$pgv_lang["removed_descending_4"]  = " four times removed descending";
$pgv_lang["removed_descending_5"]  = " five times removed descending";
$pgv_lang["removed_descending_6"]  = " six times removed descending";
$pgv_lang["removed_descending_7"]  = " seven times removed descending";
$pgv_lang["removed_descending_8"]  = " eight times removed descending";
$pgv_lang["removed_descending_9"]  = " nine times removed descending";
$pgv_lang["removed_descending_10"] = " ten times removed descending";
$pgv_lang["removed_descending_11"] = " eleven times removed descending";
$pgv_lang["removed_descending_12"] = " twelve times removed descending";
$pgv_lang["removed_descending_13"] = " thirteen times removed descending";
$pgv_lang["removed_descending_14"] = " fourteen times removed descending";
$pgv_lang["removed_descending_15"] = " fifteen times removed descending";
$pgv_lang["removed_descending_16"] = " sixteen times removed descending";
$pgv_lang["removed_descending_17"] = " seventeen times removed descending";
$pgv_lang["removed_descending_18"] = " eighteen times removed descending";
$pgv_lang["removed_descending_19"] = " nineteen times removed descending";
$pgv_lang["removed_descending_20"] = " twenty times removed descending";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]			= "Sei sicuro di voler eliminare questo fatto?";
$pgv_lang["access_denied"]			= "<b>Accesso negato</b><br />Non hai accesso a questa risorsa";
$pgv_lang["changes_exist"]			= "Sono stati fatti dei cambiamenti al file GEDCOM.";
$pgv_lang["find_place"]				= "Trova luogo";
$pgv_lang["close_window"]			= "Chiudi finestra";
$pgv_lang["close_window_without_refresh"] = "Chiudi la finestra senza ricaricare";
$pgv_lang["place_contains"]			= "Il luogo contiene:";
$pgv_lang["add"]					= "Aggiungi";
$pgv_lang["custom_event"]			= "Evento personalizzato";
$pgv_lang["delete_person"]			= "Cancella questa persona";
$pgv_lang["confirm_delete_person"]	= "Sei sicuro di voler cancellare questa persona nel file GEDCOM?";
$pgv_lang["find_media"]				= "Trova oggetto";
$pgv_lang["set_link"]				= "Impostare link";
$pgv_lang["delete_source"]			= "Cancella questa fonte";
$pgv_lang["delete_shared_note"]		= "Elimina questa nota condivisa";
$pgv_lang["confirm_delete_source"]	= "Sei sicuro di voler cancellare questa fonte dal file GEDCOM?";
$pgv_lang["confirm_delete_shared_note"]		= "Sei sicuro di voler eliminare questa nota condivisa?";
$pgv_lang["find_family"]			= "Trova la famiglia";
$pgv_lang["find_fam_list"]			= "Trova lista di famiglia";
$pgv_lang["edit_name"]				= "Modifica il nome";
$pgv_lang["delete_name"]			= "Cancella il nome";
$pgv_lang["select_date"]			= "Seleziona una data";
$pgv_lang["user_cannot_edit"]		= "Questo utente non può modificare questo file di famiglia";
$pgv_lang["ged_noshow"]				= "Questa pagina è stata disabilitata dall'amministratore del sito";

//-- calendar.php messages
$pgv_lang["bdm"]					= "Nascite, Morti, Matrimoni";
$pgv_lang["on_this_day"]			= "In questo giorno nella tua storia....";
$pgv_lang["in_this_month"]			= "In questo mese, nella tua storia...";
$pgv_lang["in_this_year"]			= "In questo anno, nella tua storia...";
$pgv_lang["year_anniversary"]		= "#year_var# anni d'anniversario";
$pgv_lang["today"]					= "Oggi";
$pgv_lang["day"]					= "Giorno";
$pgv_lang["month"]					= "Mese:";
$pgv_lang["showcal"]				= "Visualizza eventi di:";
$pgv_lang["anniversary"]			= "Anniversario";
$pgv_lang["anniversary_calendar"]	= "Calendario anniversari";
$pgv_lang["sunday"]					= "Domenica";
$pgv_lang["monday"]					= "Lunedì";
$pgv_lang["tuesday"]				= "Martedì";
$pgv_lang["wednesday"]				= "Mercoledì";
$pgv_lang["thursday"]				= "Giovedì";
$pgv_lang["friday"]					= "Venerdì";
$pgv_lang["saturday"]				= "Sabato";
$pgv_lang["viewday"]				= "Guarda il giorno";
$pgv_lang["viewmonth"]				= "Guarda il mese";
$pgv_lang["viewyear"]				= "Guarda l'anno";
$pgv_lang["all_people"]				= "Tutte le persone";
$pgv_lang["living_only"]			= "Persone viventi";
$pgv_lang["recent_events"]			= "Eventi recenti (<100 anni)";
$pgv_lang["day_not_set"]			= "Giornata non impostata";

//-- user self registration module
$pgv_lang["lost_password"]			= "Hai perso la password?";
$pgv_lang["requestpassword"]		= "Richiedi una nuova password";
$pgv_lang["no_account_yet"] 		= "Non sei registrato?";
$pgv_lang["requestaccount"] 		= "Richiedi un nuovo account utente";
$pgv_lang["emailadress"]			= "Indirizzo e-mail";
$pgv_lang["mandatory"] 			= "I campi contrassegnati con * sono obbligatori.";
$pgv_lang["mail01_line01"]			= "Ciao #user_fullname# ...";
$pgv_lang["mail01_line02"]			= "Il nostro sito (#SERVER_NAME#) ha ricevuto una richiesta per la creazione di un account con il tuo indirizzo email (#user_email#).";
$pgv_lang["mail01_line03"]			= "I dettagli della richiesta sono riportati qui sotto, dopo il link.";
$pgv_lang["mail01_line04"]			= "Per procedere, devi confermare la validita' della richiesta e del tuo indirizzo email, facendo clic sul seguente link e riempiendo i campi richiesti.";
$pgv_lang["mail01_line05"]			= "Se invece non hai richiesto un account, puoi semplicemente cancellare questo messaggio:";
$pgv_lang["mail01_line06"]			= "non riceverai altre email da questo sito, e la richiesta sara' annullata automaticamente dopo sette giorni.";
$pgv_lang["mail01_subject"] 		= "La tua registrazione a #SERVER_NAME#";

$pgv_lang["mail02_line01"]			= "Ciao Amministratore ...";
$pgv_lang["mail02_line02"]			= "Un aspirante utente si e' registrato al sito (#SERVER_NAME#).";
$pgv_lang["mail02_line03"]			= "L'utente ha ricevuto una email con le informazioni necessarie per verificare il proprio account.";
$pgv_lang["mail02_line04"]			= "Verrai informato da un'altra email quando questo utente si sara' autoverificato. Potrai quindi completare il processo attivando lo username. Il nuovo utente non potra' collegarsi finche' non attiverai il suo account.";
$pgv_lang["mail02_line04a"]			= "Sarai informato via e-mail quando questo potenziale utente avrà confermato la sua richiesta. Dopo di che l'utente potrà accedere senza ulteriori azioni da parte tua.";
$pgv_lang["mail02_subject"] 		= "Nuova registrazione a #SERVER_NAME#";

$pgv_lang["hashcode"]				= "Codice di verifica:";
$pgv_lang["thankyou"]				= "Ciao #user_fullname# ...<br />Grazie per la tua registrazione";
$pgv_lang["pls_note06"] 			= "Manderemo ora una mail di conferma all'indirizzo <b>#user_email#</b>.<br />Devi verificare l'account richiesto seguendo le istruzioni nel messaggio di conferma.<br />Se non effettuerai questa verifica entro sette giorni, il tuo account sarà cancellato automaticamente, e dovrai registrarti di nuovo.<br/><br/>Dopo che avrai seguito le istruzioni nella mail di conferma, l'amministratore dovrà approvare la tua richiesta prima che tu possa utilizzare il tuo account.<br/><br/>Per collegarti al sito, devi ricordare l'username e la password.<br/><br/>";
$pgv_lang["pls_note06a"] 			= "Manderemo adesso una e-mail all'indirizzo <b>#user_email#</b>. Devi verificare la tua richiesta di registrazione seguendo le istruzioni della e-mail di conferma. Se non confermi la tua richiesta di registrazione entro sette giorni, la tua richiesta verrà respinta automaticamente e dovrai effettuare nuovamente la richiesta..<br /><br />Dopo aver seguito le istruzioni della e-mail di conferma, potrai accedere. Per accedere a questo sito occorre che tu conosca nome utente e password.<br /><br />";

$pgv_lang["registernew"]			= "Conferma nuovo Account";
$pgv_lang["user_verify"]		= "Verifica utente";
$pgv_lang["send"]				= "Invia";

$pgv_lang["pls_note07"] 			= "Per verificare la tua richiesta di un account utente, scrivi il tuo nome utente, la password e il codice di verifica che hai ricevuto tramite email.";
$pgv_lang["pls_note08"] 			= "Le informazioni per l'utente #user_name# sono state verificate.";

$pgv_lang["mail03_line01"]			= "Ciao Amministratore...";
$pgv_lang["mail03_line02"]			= "L'utente '#newuser[username]#' (#newuser[fullname]#) ha verificato i suoi dati di registrazione.";
$pgv_lang["mail03_line03"]			= "Clicca sul link qui sotto per collegarti al sito. Devi modificare l'utente per attivare l'account, cosi' potra' fare login.";
$pgv_lang["mail03_line03a"]			= "Non è necessario intraprendere alcuna azione, l'utente può effettuare il login.";
$pgv_lang["mail03_subject"] 		= "Nuovo utente a #SERVER_NAME#";

$pgv_lang["pls_note09"] 			= "Hai confermato la richiesta per diventare un utente registrato.";
$pgv_lang["pls_note10"] 			= "L'amministratore è stato informato. Appena ti darà l'autorizzazione, potrai collegarti con il tuo nome utente e password.";
$pgv_lang["pls_note10a"]			= "Puoi ora collegarti con il tuo nome utente e password.";
$pgv_lang["data_incorrect"]			= "I dati non sono stati coretti!<br />Per favore riprova!";
$pgv_lang["user_not_found"] 		= "Impossibile verificare le informazioni immesse. Si prega di riprovare oppure contattare l'amministratore del sito per ulteriori informazioni.";

$pgv_lang["lost_pw_reset"]			= "Richiesta password smarrita";
$pgv_lang["pls_note11"] 			= "Per reimpostare la tua password, inserisci il tuo nome utente. <br /><br /> Ti risponderemo inviando un'email all'indirizzo registrato per il tuo account. L'email conterrà un URL e il codice di conferma per il tuo account. Quando si visita l'URL, è possibile cambiare la password e accedere a questo sito. Per motivi di sicurezza, non si dovrebbe dare a nessuno il codice di conferma.<br /><br />Se hai bisogno di assistenza da parte l'amministratore del sito,puoi utilizzare il link di contatto sottostante.";

$pgv_lang["mail04_line01"]			= "Ciao #user_fullname#....";
$pgv_lang["mail04_line02"]			= "Una nuova password è stata richiesta per il tuo nome utente.";
$pgv_lang["mail04_line03"]			= "Raccomandazione:";
$pgv_lang["mail04_line04"]			= "Si prega di cliccare sul link sottostante o di incollarlo nella barra degli indirizzi del browser. Accedere con la nuova password e cambiarla immediatamente per mantenere l'integrità della sicurezza dei dati.";
$pgv_lang["mail04_line05"]			= "Dopo aver effettuato l'accesso, selezionare il link «#pgv_lang[editowndata]#» sotto il menu «#pgv_lang[mygedview]#» e riempire i campi password per cambiarla.";
$pgv_lang["mail04_subject"] 		= "Dati richiesti a #SERVER_NAME#";

$pgv_lang["pwreqinfo"]				= "Salve ...<br /><br />Una e-mail con la nuova password è stata inviata all'indirizzo registrato per <b>#user[email]#</b>.<br /><br />Per favore, controlla la posta, dovresti ricevere il nostro messaggio entro pochi secondi.<br /><br />Raccomandazione:<br />Dovresti accedere al sito il prima possibile con la nuova password e cambiarla per mantenere la sicurezza dei dati.";

$pgv_lang["myuserdata"]				= "Il mio account";
$pgv_lang["user_theme"]				= "Il mio tema";
$pgv_lang["mgv"]					= "Il mio GedView";
$pgv_lang["mygedview"]				= "Il mio GEDView";
$pgv_lang["passwordlength"]			= "La password deve contenere almeno sei caratteri.";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><b>Benvenuti in questo Sito Genealogico</b></center><br />L'accesso a questo sito è permesso a tutti i visitatori in possesso di un account utente.<br /><br />Se hai già un account utente, puoi autenticarti in questa pagina. Se non hai ancora un account utente, puoi chiederne uno facendo clic sull'apposito link qui sotto.<br /><br />Dopo aver verificato la tua registrazione, l'amministratore del sito attiverà il tuo account. Riceverai una e-mail quando la tua richiesta sarà stata approvata.";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><b>Benvenuti in questo Sito Genealogico</b></center><br />L'accesso a questo sito è permesso ai soli <u>utenti autorizzati</u>.<br /><br />Se sei già registrato, puoi effettuare il login da questa pagina. Se non sei ancora registrato, puoi richiedere un account utente cliccando sul link qui sotto.<br /><br />Dopo aver verificato il tuo account, l'amministratore del sito approverà o rifiuterà la tua richiesta. Riceverai una e-mail quando la tua richiesta di registrazione sarà stata approvata.";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><b>Benvenuti in questo Sito Genealogico</b></center><br />L'accesso a questo sito è permesso ai soli <u>membri della famiglia</u>.<br /><br />Se sei già registrato, puoi effettuare il login da questa pagina. Se non sei ancora registrato, puoi richiedere un account utente cliccando sul link qui sotto.<br /><br />Dopo aver verificato il tuo account, l'amministratore del sito approverà o rifiuterà la tua richiesta. Riceverai una e-mail quando la tua richiesta di registrazione sarà stata approvata.";
$pgv_lang["welcome_text_cust_head"] 	= "<center><b>Benvenuti in questo Sito Genealogico</b></center><br />L'accesso a questo sito è permesso solo agli utenti in possesso di un account e di una password per questo sito.<br />";
$pgv_lang["acceptable_use"]			= "<div class=\"largeError\">Avviso:</div><div class=\"error\">Completando e inviando questo modulo, accetti:<ul><li>di proteggere la privacy delle persone viventi elencate nel sito;</li><li>e nella casella di testo qui sotto, di spiegare a chi sei correlato o di fornire informazioni su qualcuno che potrebbe essere elencato nel nostro sito.</li></ul></div>";


//-- mygedview page
$pgv_lang["upcoming_events"]		= "Prossimi Eventi";
$pgv_lang["living_or_all"]			= "Visualizza solo gli eventi di persone in vita?";
$pgv_lang["basic_or_all"]			= "Mostra solo nascite, decessi e matrimoni?";
$pgv_lang["style"]					= "Stile presentazione";
$pgv_lang["style1"]					= "Elenco";
$pgv_lang["style2"]					= "Tabella";
$pgv_lang["style3"]					= "Tagcloud";
$pgv_lang["sort_style"]				= "Stile abbreviato";
$pgv_lang["by_anniv"]				= "Per anniversario";
$pgv_lang["by_alpha"]				= "Alfabeticamente";
$pgv_lang["cal_download"]			= "Permetti scarico calendario eventi?";
$pgv_lang["no_events_living"]		= "Non esiste alcun evento per persone viventi per i prossimi #pgv_lang[global_num1]# giorni";
$pgv_lang["no_events_living1"]		= "Nessun evento per le persone viventi per domani";
$pgv_lang["no_events_all"]			= "Non esistono eventi per i prossimi #pgv_lang[global_num1]# giorni.";
$pgv_lang["no_events_all1"]			= "Non esistono eventi per domani.";
$pgv_lang["no_events_privacy"]		= "Esistono eventi per i prossimi #pgv_lang[global_num1]# giorni, ma restrizioni privacy ti impediscono di vederli.";
$pgv_lang["no_events_privacy1"]		= "Esistono eventi per domani, ma restrizioni privacy ti impediscono di vederli.";
$pgv_lang["more_events_privacy"]	= "<br />Ci sono ulteriori eventi per i prossimi #pgv_lang[global_num1]# giorni, ma restrizioni privacy ti impediscono di vederli.";
$pgv_lang["more_events_privacy1"]	= "<br />Esistono ulteriori eventi, per domani, ma restrizoni privacy ti impediscono di vederli.";
$pgv_lang["none_today_living"]		= "Nessun avvenimento per oggi.";
$pgv_lang["none_today_all"]			= "Nessun evento per oggi";
$pgv_lang["none_today_privacy"]		= "Esistono eventi per oggi, ma restrizioni privacy ti impediscono di vederli.";
$pgv_lang["more_today_privacy"]		= "<br />Ulteriori eventi previsti per oggi, ma restrizioni privacy ti impediscono di vederli.";
$pgv_lang["chat"]					= "Chat";
$pgv_lang["users_logged_in"]		= "Utenti collegati";
$pgv_lang["anon_user"]				= "1 utente anonimo";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# utenti anonimi collegati";
$pgv_lang["login_user"]				= "1 utente collegato";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# utenti collegati";
$pgv_lang["no_login_users"]			= "Nessun utente (né registrato, né anonimo)";
$pgv_lang["message"]			= "Manda un messaggio";
$pgv_lang["my_messages"]			= "I miei messaggi";
$pgv_lang["date_created"]			= "Data inviato:";
$pgv_lang["message_from"]			= "Indirizzo e-mail";
$pgv_lang["message_from_name"]		= "Nome";
$pgv_lang["message_to"]				= "Messaggio a:";
$pgv_lang["message_subject"]		= "Oggetto:";
$pgv_lang["message_body"]			= "Corpo:";
$pgv_lang["no_to_user"]			= "Non è stato fornito nessun destinatario, Non posso continuare.";
$pgv_lang["provide_email"]			= "Per favore inserisci un indirizzo valido se vuoi ricevere una risposta, altrimenti non saremo in grado di contattarti";
$pgv_lang["reply"]					= "Rispondi";
$pgv_lang["message_deleted"]	= "Messaggio eliminato";
$pgv_lang["message_sent"]		= "Messaggio inviato";
$pgv_lang["reset"] 			= "Reset";
$pgv_lang["site_default"]			= "Standard del Sito";
$pgv_lang["mygedview_desc"]		= "La tua pagina PhpGedView ti permettere di tenere traccia dei tuoi preferiti, monitorare gli eventi in arrivo e collaborare con altri utenti .";
$pgv_lang["no_messages"]		= "Non hai messaggi pendenti.";
$pgv_lang["clicking_ok"]			= "Cliccando OK si aprirà un'altra finestra dove potrai contattare #user[fullname]#";
$pgv_lang["favorites"]				= "Preferiti";
$pgv_lang["my_favorites"]			= "I miei preferiti";
$pgv_lang["no_favorites"]			= "Non hai selezionato nessun preferito. Per aggiungere una persona ai tuoi preferiti, cerca i dettagli della persona che vuoi aggiungere e clicca su 'Aggiungi ai miei preferiti', oppure usa il metodo di ricerca per ID.";
$pgv_lang["add_to_my_favorites"]	= "Aggiungi ai miei preferiti";
$pgv_lang["gedcom_favorites"]		= "I Preferiti del GEDCOM";
$pgv_lang["no_gedcom_favorites"]	= "Al momento non ci sono preferiti selezionati. L'amministratore può aggiungere dei preferiti da mostrare all'avvio.";
$pgv_lang["confirm_fav_remove"]		= "Sei sicuro di voler rimuovere questo elemento dai tuoi preferiti?";
$pgv_lang["invalid_email"]		= "Per favore inserisci un indirizzo e-mail valido";
$pgv_lang["enter_subject"]		= "Per favore inserisci un oggetto";
$pgv_lang["enter_body"]			= "Per favore inserisci un messaggio";
$pgv_lang["confirm_message_delete"]	= "Sei sicuro di voler cancellare questo messaggio? Non sarà più possibile recuperarlo.";
$pgv_lang["message_email1"]			= "Il messaggio seguente e' stato inviato al tuo utente PhpGedView da: ";
$pgv_lang["message_email2"]		= "Hai inviato il seguente messaggio a un utente PhpGedView:";
$pgv_lang["message_email3"]			= "Hai inviato il seguente messaggio all'amministratore di PhpGedView:";
$pgv_lang["viewing_url"]			= "Questo messaggio è stato inviato mentre si guardava la seguente pagina:";
$pgv_lang["messaging2_help"]		= "Appena invierai questo messaggio riceverai una copia via email all'indirizzo che hai fornito.";
$pgv_lang["random_picture"]			= "Foto casuale";
$pgv_lang["message_instructions"]	= "<b>NB:</b> Informazioni private di persone viventi saranno dati solo a parenti e amici stessi. Ti verrà richiesto di verificare la tua relazione prima di ricevere qualsiasi dato privato. A volte informazioni di persone decedute possono anch'esse essere private. Ciò in quanto non vi sono sufficienti informazioni per determinare se sono viventi o meno e probabilmente non abbiamo ulteriori informazioni su questa persona.<br /><br />Prima di porre domande, per favore verifica che stai chiedendo informazioni della persona corretta controllando date, località e parenti stretti. Se stai inserendo modifiche ai dati genealogici, per favore includi la fonte da cui hai ottenuto i dati.<br /><br />";
$pgv_lang["sending_to"] 			= "Questo messaggio sarà inviato a #TO_USER#";
$pgv_lang["preferred_lang"] 		= "(la lingua preferita di questo utente è: #USERLANG#, ma puoi sempre scrivere anche in inglese)";
$pgv_lang["gedcom_created_using"]	= "Il file GEDCOM è stato creato usando <b>#SOFTWARE# #VERSION#</b>";
$pgv_lang["gedcom_created_on"]		= "Il file GEDCOM è stato creato il <b>#DATA</b>";
$pgv_lang["gedcom_created_on2"] 	= " il <b>#DATE#</b>";
$pgv_lang["gedcom_stats"]			= "Statistiche del file GEDCOM";
$pgv_lang["stat_individuals"]		= "Persone";
$pgv_lang["stat_families"]			= "Famiglie";
$pgv_lang["stat_sources"]			= "Fonti";
$pgv_lang["stat_other"] 			= "Altri dati";
$pgv_lang["stat_earliest_birth"] 	= "Anno di nascita più vecchio";
$pgv_lang["stat_latest_birth"] 		= "Anno di nascita più recente";
$pgv_lang["stat_earliest_death"] 	= "Anno di morte più vecchio";
$pgv_lang["stat_latest_death"] 		= "Anno di morte più recente";
$pgv_lang["customize_page"] 		= "Personalizza il mio GedView";
$pgv_lang["customize_gedcom_page"]	= "Personalizza la pagina di benvenuto del GEDCOM";
$pgv_lang["upcoming_events_block"]	= "Prossimi Eventi";
$pgv_lang["upcoming_events_descr"]	= "Il blocco prossimi eventi mostra anniversari di eventi che accadranno nel prossimo futuro. Puoi configurare il numero di dettagli mostrati e l'amministratore può configurare l'intervallo di giorni futuri in cui questo blocco effettuerà la ricerca.";
$pgv_lang["todays_events_block"]	= "In questo giorno";
$pgv_lang["todays_events_descr"]	= "Il blocco In Questo Giorno, nella Tua Storia... mostra anniversari di eventi per oggi. Puoi configurare il numero di dettagli mostrati.";
$pgv_lang["todo_block"] = "&quot;Lavori da fare&quot;";
$pgv_lang["todo_descr"] = "Il blocco Compiti da fare elenca tutti i lavori da fare presenti nel database";
$pgv_lang["todo_show_other"]     = "Mostra i lavori degli altri utenti";
$pgv_lang["todo_show_unassigned"]= "Visualizza i compiti non assegnati";
$pgv_lang["todo_show_future"]    = "Visualizza futuri compiti";
$pgv_lang["todo_nothing"]        = "Non ci sono lavori &quot;Da Fare&quot; .";
$pgv_lang["yahrzeit_block"]			= "Prossimi anniversari di morte";
$pgv_lang["yahrzeit_descr"]			= "Il blocco Anniversari di morte mostra gli anniversari dei morti che si verificheranno nel prossimo futuro. Puoi configurare il periodo mostrato e l'amministratore può configurare quanto lungo sarà questo periodo";
$pgv_lang["logged_in_users_block"]	= "Utenti collegati";
$pgv_lang["logged_in_users_descr"]	= "Il blocco utenti collegati mostra una lista degli utenti che sono in atto collegati";
$pgv_lang["user_messages_block"]	= "Messaggi degli utenti";
$pgv_lang["user_messages_descr"]	= "Il blocco Messaggi degli utenti mostra una lista dei messaggi che sono stati inviati all'utente attivo";
$pgv_lang["user_favorites_block"]	= "Preferiti dagli utenti";
$pgv_lang["user_favorites_descr"]	= "Il blocco favoriti dall'utente mostra all'utente una lista delle sue persone favorite nel database, in modo da poter facilmente collegarsi ad essi";
$pgv_lang["welcome_block"]			= "Benvenuto utente";
$pgv_lang["welcome_descr"]			= "Il blocco Benvenuto utente mostra all'utente la data e l'ora corrente, collegamenti veloci per modificare il proprio profilo o per andare al suo Prospetto Pedigree e un collegamento per personalizzare la sua pagina di accesso";
$pgv_lang["random_media_block"] 	= "Media casuale";
$pgv_lang["random_media_descr"] 	= "Il blocco Media casuale sceglie casualmente una foto o altri elementi multimediali dal database attivo corrente e la mostra all'utente.<br /><br />L'amministratore può determinare se questo blocco possa mostrare oggetti multimediali associati a persone o a eventi.";
$pgv_lang["random_media_persons_or_all"]	= "Mostra solo persone, eventi o tutto?";
$pgv_lang["random_media_persons"]	= "Persone";
$pgv_lang["random_media_events"]	= "Eventi";
$pgv_lang["gedcom_block"]			= "Benvenuti GEDCOM";
$pgv_lang["gedcom_descr"]			= "Il blocco Benvenuto GEDCOM funziona alla stessa maniera del blocco Benvenuto Utente. Saluta il visitatore al sito e mostra il titolo del database attivo corrente, così come la data e l'ora correnti";
$pgv_lang["gedcom_favorites_block"] = "GEDCOM preferiti";
$pgv_lang["gedcom_favorites_descr"] = "Il blocco Favoriti GEDCOM da all'amministratore la possibilità di individuare persone dal database in modo che le loro informazioni siano facilmente accessibili a tutti. Questo è un modo per evidenziare persone che sono importanti nella storia della famiglia.";
$pgv_lang["gedcom_stats_block"] 	= "Statistiche file GEDCOM";
$pgv_lang["gedcom_stats_descr"] 	= "Il blocco statistiche file GEDCOM mostra al visitatore alcune informazioni di base sul database, come, ad esempio, quando è stato creato e quante persone sono contenute.<br /><br />Ha anche una lista dei cognomi più frequenti ed è possibile aggiungere i eliminare cognomi. Puoi configurare il numero di occorrenze necessarie perché un cognome appaia in questa lista.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Visualizza cognomi comuni";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Puoi personalizzare la pagina posizionando i blocchi nel modo in cui vuoi.<br /><br />La pagina è divisa in sezione <b>Principale</b> e sezione di <b>Destra</b>. La sezione <b>Principale</b> dei blocchi appare più larga e sotto il titolo della pagina. La sezione di <b>Destra</b> incomincia alla destra del titolo e va giù lungo il margine destro della pagina.<br /><br />Ciascuna sezione ha la sua lista di blocchi che saranno stampati nella pagina nell'ordine in cui sono elencati. Puoi aggiungere, rimuovere o riordinare i blocchi a tuo piacimento.<br /><br />Quando una delle liste blocchi è vuota I blocchi rimanenti prenderanno l'intera larghezza della pagina.<br /><br />";
$pgv_lang["login_block"]			= "Accesso";
$pgv_lang["login_descr"]			= "Il blocco Accesso accetta un nome utente e una password per l'accesso degli utenti";
$pgv_lang["theme_select_block"] 	= "Seleziona tema";
$pgv_lang["theme_select_descr"] 	= "Il blocco Seleziona Tema mostra un selettore di temi anche quando il Cambio Tema è disabilitato";
$pgv_lang["block_top10_title"]		= "Top 10 Cognomi";
$pgv_lang["block_top10"]			= "Top 10 Cognomi";
$pgv_lang["block_top10_descr"]		= "Questo blocco mostra una tabella di 10 cognomi più frequenti nel database. Il numero effettivo di cognomi mostrato in questo blocco è configurabile. È possibile configurare il GEDCOM per rimuovere i nomi di questo elenco.";
$pgv_lang["block_givn_top10_title"]		= "Top 10 nomi propri";
$pgv_lang["block_givn_top10"]			= "Top 10 nomi propri";
$pgv_lang["block_givn_top10_descr"]		= "Questo blocco mostra una tabella dei 10 nomi propri più frequenti. L'effettivo numero dei nomi propri mostrato in questo blocco è configurabile.";

$pgv_lang["gedcom_news_block"]		= "GEDCOM News";
$pgv_lang["gedcom_news_descr"]		= "Il blocco GEDCOM News mostra al visitatore le notizie o gli articoli inseriti da un utente amministratore.<br /><br />Il blocco News è un buon posto per annunciare aggiornamenti significativi, riunioni familiari, nascita di bambini ecc.";
$pgv_lang["gedcom_news_limit"]		= "Limite di visualizzazione per:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Nessun limite";
$pgv_lang["gedcom_news_limit_date"]		= "Età della voce";
$pgv_lang["gedcom_news_limit_count"]	= "Numero di voci";
$pgv_lang["gedcom_news_flag"]		= "Limite:";
$pgv_lang["gedcom_news_archive"] 	= "Vedi archivio";
$pgv_lang["user_news_block"]		= "Giornale dell'utente";
$pgv_lang["user_news_descr"]		= "Il Giornale dell'utente permette agli utenti di tenere note o un giornale on line";
$pgv_lang["my_journal"] 			= "Il mio giornale";
$pgv_lang["no_journal"] 			= "Non hai creato alcuna voce giornale";
$pgv_lang["confirm_journal_delete"] = "Sei sicuro di voler eliminare questa voce di giornale?";
$pgv_lang["add_journal"]			= "Aggiungi una nuova voce di giornale";
$pgv_lang["gedcom_news"]			= "News";
$pgv_lang["confirm_news_delete"]	= "Sei sicuro di voler eliminare questa news?";
$pgv_lang["add_news"]				= "Aggiungi una News";
$pgv_lang["no_news"]				= "Non sono state inserite news.";
$pgv_lang["edit_news"]				= "Aggiungi/Modifica voce di Giornale/News";
$pgv_lang["enter_title"]			= "Per favore inserisci un titolo.";
$pgv_lang["enter_text"] 			= "Per favore, inserisci del testo per questa voce di Giornale o News";
$pgv_lang["news_saved"] 			= "Voce vi Giornale/News salvata con successo.";
$pgv_lang["article_text"]			= "Testo della voce";
$pgv_lang["main_section"]			= "Blocchi della sezione principale";
$pgv_lang["right_section"]			= "Blocchi della sezione di destra";
$pgv_lang["available_blocks"]		= "Blocchi disponibili";
$pgv_lang["move_up"]				= "Su";
$pgv_lang["move_down"]				= "Giù";
$pgv_lang["move_right"] 			= "Destra";
$pgv_lang["move_left"]				= "Sinistra";
$pgv_lang["broadcast_all"]			= "A tutti gli utenti";
$pgv_lang["hit_count"]				= "Conteggio dei click";
$pgv_lang["phpgedview_message"] 	= "PhpGedView";
$pgv_lang["common_surnames"]		= "Cognomi più comuni";
$pgv_lang["default_news_title"] 	= "Benvenuto nella tua Genealogia";
$pgv_lang["default_news_text"]		= "Questo è un sito di informazioni genealogiche, realizzato mediante il programma <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a>.<br />Questa pagina presenta un semplice riepilogo del nostro Albero Genealogico.<br /><br />Per iniziare a lavorare con i dati, seleziona uno dei grafici dal menu Diagrammi, apri la lista delle persone o seleziona un nome o un luogo.<br />Registrandoti, potrai vedere tutti i dati ...e addirittura <b>correggerli</b>, o <b>aggiungerne</b> di nuovi!<br /><br />Se hai problemi nell'uso del sito, in ogni pagina puoi fare clic sull'icona di aiuto per avere informazioni su come usare la pagina corrente.<br /><br />Grazie per la tua visita.";
$pgv_lang["reset_default_blocks"]	= "Reset ai blocchi standard";
$pgv_lang["recent_changes"] 		= "Cambiamenti Recenti";
$pgv_lang["recent_changes_block"]	= "Modifiche recenti";
$pgv_lang["recent_changes_descr"]	= "Il blocco delle modifiche recenti elencherà tutte le modifiche che sono state fatte alla base dati nell'ultimo mese. Questo blocco può aiutare a rimanere aggiornati dei cambiamenti che sono stati fatti. Le modifiche vengono rilevate automaticamente utilizzando il tag CHAN definito nel linguaggio GEDCOM standard";
$pgv_lang["recent_changes_none"]	= "<b>Non ci sono state modifiche negli ultimi #pgv_lang[global_num1]# giorni.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Modifiche fatte negli ultimi #pgv_lang[global_num1]# giorni</b><br />";
$pgv_lang["show_empty_block"]		= "Questo blocco, deve essere nascosto se vuoto?";
$pgv_lang["hide_block_warn"]		= "Se nascondi un blocco vuoto, non potrai modificare la sua configurazione fino a che diventa nuovamente visibile quando non più vuoto.";
$pgv_lang["delete_selected_messages"]	= "Cancella i messaggi selezionati";
$pgv_lang["use_blocks_for_default"]	= "Utilizza questi blocchi come configurazione standard dei blocchi per tutti gli utenti?";
$pgv_lang["block_not_configure"]	=	"Questo blocco non può essere configurato";

//-- validate GEDCOM
$pgv_lang["add_media_tool"] 		= "Aggiungi strumento multimediale";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Grafico a clessidra";

//-- report engine
$pgv_lang["choose_report"]			= "Seleziona un report da generare";
$pgv_lang["enter_report_values"]	= "Inserisci i valori del report";
$pgv_lang["selected_report"]		= "Report Selezionato";
$pgv_lang["select_report"]			= "Seleziona Report";
$pgv_lang["download_report"]		= "Scarica Report";
$pgv_lang["reports"]				= "Report";
$pgv_lang["pdf_reports"]			= "Report in PDF";
$pgv_lang["html_reports"]			= "Rapporti HTML";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Relazione Ahnentafel";
$pgv_lang["ahnentafel_header"]		= "Rapporto Ahnentafel per";
$pgv_lang["ahnentafel_generation"]	= "Generazione";
$pgv_lang["ahnentafel_pronoun_m"]	= "Egli";
$pgv_lang["ahnentafel_pronoun_f"]	= "Essa";
$pgv_lang["ahnentafel_born_m"]		= "è nato";			// male
$pgv_lang["ahnentafel_born_f"]		= "è nata";			// female
$pgv_lang["ahnentafel_christened_m"] = "è stato battezzato";	// male
$pgv_lang["ahnentafel_christened_f"] = "è stata battezzata";	// female
$pgv_lang["ahnentafel_married_m"]	= "ha sposato";			// male
$pgv_lang["ahnentafel_married_f"]	= "ha sposato";			// female
$pgv_lang["ahnentafel_married_post"] = "&nbsp;";
$pgv_lang["ahnentafel_died_m"]		= "è morto";				// male
$pgv_lang["ahnentafel_died_f"]		= "è morta";				// female
$pgv_lang["ahnentafel_buried_m"]	= "è stato seppellito";			// male
$pgv_lang["ahnentafel_buried_f"]	= "è stata seppellita";			// female
$pgv_lang["ahnentafel_place"]		= "a";				// place name follows this
$pgv_lang["ahnentafel_no_details"]	= "ma i dettagli non sono noti";
$pgv_lang["ahnentafel_on"]			= "il";

//-- Changes report
$pgv_lang["changes_report"]			= "Stampa delle modifiche";
$pgv_lang["changes_pending_tot"]	= "Totale modifiche in attesa:";
$pgv_lang["changes_accepted_tot"]	= "Totale modifiche accettate:";

//-- Descendancy report
$pgv_lang["descend_report"]		= "Rapporto dei discendenti";
$pgv_lang["descendancy_header"]		= "Rapporto dei discendenti per ";
$pgv_lang["son_of"]				= "figlio di";
$pgv_lang["daughter_of"]		= "figlia di";
$pgv_lang["child_of"]				= "Figlio/a di ";
$pgv_lang["children_of"]			= "Figli di ";
$pgv_lang["descendancy_pronoun_m"] = "Lui";
$pgv_lang["descendancy_pronoun_f"] = "Lei";

$pgv_lang["family_group_report"]	= "Report Famiglia";
$pgv_lang["page"]     = "Pagina";
$pgv_lang["of"]						= "di";
$pgv_lang["enter_famid"]			= "Inserisci ID Famiglia";
$pgv_lang["show_sources"]			= "Mostra Fonti?";
$pgv_lang["show_notes"] 			= "Mostra note?";
$pgv_lang["show_basic"] 			= "Stampa eventi base quando vuoti?";
$pgv_lang["show_photos"]			= "Mostra foto?";
$pgv_lang["relatives_report_ext"]	= "Rapporto Parenti allargato";
$pgv_lang["with"]					= "con";
$pgv_lang["on"]						= "il";			// for precise dates
$pgv_lang["in"]						= "nel";			// for imprecise dates
$pgv_lang["individual_report"]		= "Report persona";
$pgv_lang["individual_with_rela_report"]	= "Rapporto dei parenti stretti";
$pgv_lang["enter_pid"]				= "Inserisci ID Persona";
$pgv_lang["generated_by"]			= "Generato da";
$pgv_lang["list_children"]			= "Elenca ogni bambino in ordine di nascita.";
$pgv_lang["birth_report"]			= "Report Data e Luogo di nascita";
$pgv_lang["birthplace"]				= "Luogo di nascita contiene";
$pgv_lang["birthdate1"]				= "Data di nascita minima";
$pgv_lang["birthdate2"]				= "Data di nascita massima";
$pgv_lang["death_report"]			= "Rapporto delle date e delle località di morte";
$pgv_lang["deathplace"]				= "Località di morte contiene";
$pgv_lang["deathdate1"]				= "Inizio intervallo date di morte";
$pgv_lang["deathdate2"]				= "Fine intervallo date di morte";
$pgv_lang["marr_report"]			= "Rapporto delle date e delle loclaità di matrimonio";
$pgv_lang["marrplace"]				= "Località di matrimonio contiene";
$pgv_lang["marrdate1"]				= "Inizio intervallo date matrimonio";
$pgv_lang["marrdate2"]				= "Fine intervallo date di matrimonio";
$pgv_lang["sort_by"]    = "Ordina per";
$pgv_lang["cemetery_report"]		= "Rapporto dei cimiteri";
$pgv_lang["burialplace"] = "Luogo di sepoltura contiene";
$pgv_lang["fact_sources_report"] = "Rapporto Fonti dei fatti";
$pgv_lang["missing_facts_report"] = "Rapporto fatti mancanti";
$pgv_lang["sources_to_events"] = "Fonti degli Eventi";

$pgv_lang["cleanup"]				= "Pulitura";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["statistics"]		= "Statistiche";
$pgv_lang["show_stats_charts"]		= "Visualizza i grafici delle statistiche";
$pgv_lang["decade_birth"]			= "Decade di nascita";
$pgv_lang["decade_death"]			= "Decade di morte";
$pgv_lang["decade_marriage"]		= "Decade di matrimonio";
$pgv_lang["avg_age"]				= "Età media";

//-- Merge Records
$pgv_lang["merge_same"] 			= "I record non sono dello stesso tipo. Impossibile fondere dati di tipo diverso.";
$pgv_lang["merge_step1"]			= "Unione Passo 1 di 3";
$pgv_lang["merge_step2"]			= "Unione Passo 2 di 3";
$pgv_lang["merge_step3"]   = "Unione Passo 3 di 3";
$pgv_lang["select_gedcom_records"]	= "Seleziona due record da unire. Devono essere dello stesso tipo.";
$pgv_lang["merge_to"]				= "Unisci a ID:";
$pgv_lang["merge_from"] 			= "Unisci da ID:";
$pgv_lang["merge_facts_same"]		= "I seguenti fatti sono esattamente uguali in entrambi i record e saranno uniti automaticamente.";
$pgv_lang["no_matches_found"]		= "Nessun fatto trovato";
$pgv_lang["unmatching_facts"]		= "I seguenti fatti non corrispondono. Seleziona le informazioni che vuoi mantenere.";
$pgv_lang["record"] 				= "Record";
$pgv_lang["adding"] 				= "Sto aggiungendo";
$pgv_lang["updating_linked"]		= "Sto aggiornando i record collegati";
$pgv_lang["merge_more"] 			= "Unisci altri dati.";
$pgv_lang["same_ids"]				= "Hai inserito la stessa ID. Non è possibile unire lo stesso record.";
$pgv_lang["updated_favorites"] 			= "aggiornato preferiti";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]			= "Grafico Antenati";
$pgv_lang["gen_ancestry_chart"]		= "#PEDIGREE_GENERATIONS# Generazione del Prospetto degli antenati";
$pgv_lang["chart_style"]			= "Stile diagramma";
$pgv_lang["chart_list"]			= "Elenco";
$pgv_lang["chart_booklet"]   	= "Libretto";
$pgv_lang["show_cousins"]			= "Mostra cugini";
// 1st generation
$pgv_lang["sosa_2"]			= "Padre";
$pgv_lang["sosa_3"]			= "Madre";
// 2nd generation
$pgv_lang["sosa_4"]					= "Nonno";
$pgv_lang["sosa_5"]			= "Nonna";
$pgv_lang["sosa_6"]					= "Nonno";
$pgv_lang["sosa_7"]					= "Nonna";
// 3rd generation
$pgv_lang["sosa_8"]					= "Bisnonno";
$pgv_lang["sosa_9"] 				= "Bisnonna";
$pgv_lang["sosa_10"]				= "Bisnonno";
$pgv_lang["sosa_11"]				= "Bisnonna";
$pgv_lang["sosa_12"]				= "Bisnonno";
$pgv_lang["sosa_13"]				= "Bisnonna";
$pgv_lang["sosa_14"]				= "Bisnonno";
$pgv_lang["sosa_15"]				= "Bisnonna";
// 4th generation
$pgv_lang["sosa_16"]				= "Trisavolo";
$pgv_lang["sosa_17"]				= "Trisavola";
$pgv_lang["sosa_18"]				= "Trisavolo";
$pgv_lang["sosa_19"]				= "Trisavola";
$pgv_lang["sosa_20"]				= "Trisavolo";
$pgv_lang["sosa_21"]				= "Trisavola";
$pgv_lang["sosa_22"]				= "Trisavolo";
$pgv_lang["sosa_23"]				= "Trisavola";
$pgv_lang["sosa_24"]				= "Trisavolo";
$pgv_lang["sosa_25"]				= "Trisavola";
$pgv_lang["sosa_26"]				= "Trisavolo";
$pgv_lang["sosa_27"]				= "Trisavola";
$pgv_lang["sosa_28"]				= "Trisavolo";
$pgv_lang["sosa_29"]				= "Trisavola";
$pgv_lang["sosa_30"]				= "Trisavolo";
$pgv_lang["sosa_31"]				= "Trisavola";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d° bisnonno paterno";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d^ bisnonna paterna";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d° bisnonno materno";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d^ bisnonna materna";

//-- FAN CHART
$pgv_lang["compact_chart"]		= "Grafico Compatto";
$pgv_lang["fan_chart"]			= "Diagramma Circolare";
$pgv_lang["gen_fan_chart"]  		= "#PEDIGREE_GENERATIONS# Generazione diagramma circolare";
$pgv_lang["fan_width"]				= "Larghezza";
$pgv_lang["gd_library"]				= "PHP server errata: libreria GD 2.x necessario per utilizzare funzioni di immagine.";
$pgv_lang["gd_freetype"]			= "PHP server errata: FreeType libreria necessaria per utilizzare i font TrueType.";
$pgv_lang["gd_helplink"]			= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]			= "File dei caratteri non trovato sul server PHP";
$pgv_lang["fanchart_IE"]			= "Questa immagine non può essere stampata direttamente dal tuo browser. Utilizza il click destro e quindi salva e poi stampa";

//-- RSS Feed
$pgv_lang["rss_descr"]				= "Notizie e collegamenti dal sito #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]			= "Feed creato da PhpGedView";
$pgv_lang["rss_feeds"]				= "Feed RSS";
$pgv_lang["no_feed_title"]			= "Feed non è disponibile";
$pgv_lang["no_feed"]				= "Non vi è alcun feed RSS disponibili per questo sito PhpGedView";
$pgv_lang["feed_login"]				= "Se hai un account in questo sito, puoi <a href=\"#AUTH_URL#\">accedere</a> al server utilizzando l'Autenticazione di base HTTP per vedere le informazioni private.";
$pgv_lang["authenticated_feed"]		= "Feed autenticato";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] = "Badante";
$pgv_lang["attending"] = "Badando";
$pgv_lang["best_man"] = "Testimone dello sposo";
$pgv_lang["bridesmaid"] = "Damigella/testimone della sposa";
$pgv_lang["buyer"] = "Acquirente";
$pgv_lang["circumciser"] = "Circoncisore";
$pgv_lang["civil_registrar"] = "Ufficiale di Stato Civile";
$pgv_lang["employee"] = "Impiegato/a";
$pgv_lang["employer"] = "Datore di lavoro";
$pgv_lang["foster_child"]     = "Figlio/a adottivo";
$pgv_lang["foster_father"]    = "Padre adottivo";
$pgv_lang["foster_mother"]    = "Madre adottiva";
$pgv_lang["friend"]					= "Amico";
$pgv_lang["godfather"] = "Padrino";
$pgv_lang["godmother"] = "Madrina";
$pgv_lang["godparent"] = "Padrino/Madrina";
$pgv_lang["godson"]		= "Figlioccio";
$pgv_lang["goddaughter"] = "Figlioccia";
$pgv_lang["godchild"]	= "Figlioccio/Figlioccia";
$pgv_lang["guardian"]	      = "Tutore";
$pgv_lang["informant"] = "Confidente";
$pgv_lang["lodger"] = "Inquilino/a";
$pgv_lang["nanny"]            = "Bambinaia/balia";
$pgv_lang["nurse"] = "Infermiere/a o Balia";
$pgv_lang["owner"] = "Proprietario/a";
$pgv_lang["priest"] = "Sacerdote";
$pgv_lang["rabbi"] = "Rabbino";
$pgv_lang["registry_officer"] = "Ufficiale dell'Anagrafe";
$pgv_lang["seller"] = "Venditore/Commerciante";
$pgv_lang["servant"] = "Persona di servizio";
$pgv_lang["slave"] = "Schiavo/a";
$pgv_lang["twin"]					= "Gemello";
$pgv_lang["twin_brother"] = "Fratello gemello";
$pgv_lang["twin_sister"] = "Sorella gemella";
$pgv_lang["ward"]             = "Minore";
$pgv_lang["witness"] = "Testimone";

//-- statistics utility
$pgv_lang["stat_create"]		= "Crea il tuo prospetto";
$pgv_lang["statutci"]			= "impossibile creare indice";
$pgv_lang["statnnames"]			= "Totale persone";
$pgv_lang["statnfam"]			= "Totale famiglie";
$pgv_lang["statnmale"]			= "Totale maschi";
$pgv_lang["statnfemale"]		= "Totale femmine";
$pgv_lang["with_sources"] = "Con le fonti";
$pgv_lang["without_sources"] = "Senza le fonti";
$pgv_lang["stat_sindi"]			= "Persone con fonti";
$pgv_lang["stat_sfam"]			= "Famiglie con fonti";
$pgv_lang["statvars"]			= "Compila i seguenti parametri per il tracciato";
$pgv_lang["statlxa"]			= "Seleziona tipo di grafico:";
$pgv_lang["statlya"]			= "risultati:";
$pgv_lang["statlza"]			= "Categorie:";
$pgv_lang["map_type"]			= "Tipo di mappa";
$pgv_lang["stat_1_map"]			= "Distribuzione delle persone";
$pgv_lang["stat_2_map"]			= "Nati per paese";
$pgv_lang["stat_3_map"]			= "Morti per paese";
$pgv_lang["stat_4_map"]			= "Matrimoni per paese";
$pgv_lang["stat_5_birth"]		= "Nascite per secolo";
$pgv_lang["stat_6_death"]		= "Morti per secolo";
$pgv_lang["stat_7_marr"]		= "Matrimoni per secolo";
$pgv_lang["stat_7_div"] = "Divorzi per secolo";
$pgv_lang["stat_8_fam"]			= "Famiglie con fonti";
$pgv_lang["stat_9_indi"]		= "Persone con fonti";
$pgv_lang["stat_10_none"]		= "nessuno";
$pgv_lang["stat_11_mb"]			= "Mese di nascita";
$pgv_lang["stat_12_md"]			= "Mese di morte";
$pgv_lang["stat_13_mm"]			= "Mese di matrimonio";
$pgv_lang["stat_14_mb1"]		= "Mese di nascita del primo figlio in una relazione";
$pgv_lang["stat_15_mm1"]		= "Mese del primo matrimonio";
$pgv_lang["stat_16_mmb"]		= "Mesi tra il matrimonio e il primo bambino";
$pgv_lang["stat_17_arb"]		= "Età relativa all'anno di nascita";
$pgv_lang["stat_18_ard"]		= "Età relativa all'anno di morte";
$pgv_lang["stat_18_aard"]		= "Età media relativa al secolo di morte";
$pgv_lang["stat_19_arm"]		= "Età nell'anno di matrimonio";
$pgv_lang["stat_19_aarm"]		= "Età media nel secolo di matrimonio";
$pgv_lang["stat_20_arm1"]		= "Età nell'anno del primo matrimonio";
$pgv_lang["stat_21_nok"]		= "numero di figli.";
$pgv_lang["stat_22_fwok"]		= "Numero di famiglie senza figli";
$pgv_lang["stat_200_none"]		= "tutti (o vuoto)";
$pgv_lang["stat_201_num"]		= "numeri";
$pgv_lang["stat_202_perc"]		= "percentuale";
$pgv_lang["stat_300_none"]		= "nessuno";
$pgv_lang["stat_301_mf"]	= "genere";
$pgv_lang["stat_302_cgp"]		= "data periodi";
$pgv_lang["century"]			   = "secolo";
$pgv_lang["stat_age"]			= "Età";
$pgv_lang["no_date_fam"]		= "sconosciuto";
$pgv_lang["statar_xgp"]			= "limiti per periodi";
$pgv_lang["statar_xgl"]			= "limiti per età";
$pgv_lang["statar_xgm"]			= "limiti per mesi";
$pgv_lang["statar_xga"]			= "limiti per numeri";
$pgv_lang["statar_zgp"]			= "limiti per intervalli data";
$pgv_lang["less"]				= "inferiore a";
$pgv_lang["over"]				= "oltre";
$pgv_lang["interval"]			= "intervallo";
$pgv_lang["aft_marr"]			= "mesi dopo il matrimonio";
$pgv_lang["bef_marr"]			= "mesi prima e dopo il matrimonio";
$pgv_lang["quarters"]			= "trimestri dopo il matrimonio";
$pgv_lang["half_year"]			= "semestri sopo il matrimonio";
$pgv_lang["one_child"]			= "intervallo di un bambino";
$pgv_lang["two_children"]		= "intervallo di due figli";
$pgv_lang["statreset"]			= "reset";
$pgv_lang["statsubmit"]		= "mostra il grafico";
$pgv_lang["stat_largest_families"] = "Famiglie con più figli";

$pgv_lang["stat_own_charts"] = "Grafici personalizzati";
$pgv_lang["statnliving"]		= "Totale vivi";
$pgv_lang["statndead"]			= "Totale morti";
$pgv_lang["stat_births"] = "Totale nascite";
$pgv_lang["stat_marriages"] = "Totale matrimoni";
$pgv_lang["stat_divorces"] = "Totale divorzi";
$pgv_lang["stat_deaths"] = "Totale morti";
$pgv_lang["stat_first_birth"] = "Nascita più antica";
$pgv_lang["stat_first_marriage"] = "Matrimonio più antico";
$pgv_lang["stat_first_divorce"] = "Divorzio più antico";
$pgv_lang["stat_first_death"] = "Morte più antica";
$pgv_lang["stat_last_birth"] = "Nascita più recente";
$pgv_lang["stat_last_marriage"] = "Matrimonio più recente";
$pgv_lang["stat_last_divorce"] = "Divorzio più recente";
$pgv_lang["stat_last_death"] = "Morte più recente";
$pgv_lang["stat_lifespan"] = "Longevità";
$pgv_lang["stat_lived_longest"] = "Età di morte più elevata";
$pgv_lang["stat_live_longest"] = "Più anziani ancora in vita";
$pgv_lang["stat_marr_age"] = "Durata del matrimonio";
$pgv_lang["stat_long_marr_age"] = "Matrimonio più duraturo";
$pgv_lang["stat_short_marr_age"] = "Matrimonio più breve";
$pgv_lang["stat_youngest_male"] = "Maschio più giovane";
$pgv_lang["stat_youngest_female"] = "Femmina più giovane";
$pgv_lang["stat_oldest_male"] = "Maschio più anziano";
$pgv_lang["stat_oldest_female"] = "Femmina più anziana";
$pgv_lang["stat_childbirth_age"] = "Età alla nascita del figlio";
$pgv_lang["stat_youngest_father"] = "Padre più giovane";
$pgv_lang["stat_youngest_mother"] = "Madre più giovane";
$pgv_lang["stat_oldest_father"] = "Padre più anziano";
$pgv_lang["stat_oldest_mother"] = "Madre più anziana";
$pgv_lang["stat_children_in_fam"] = "Numero di figli";
$pgv_lang["stat_largest_gfamilies"] = "Famiglie con più nipoti";
$pgv_lang["stat_age_difference"] = "Differenza di età";
$pgv_lang["stat_age_siblings"] = "Differenza tra fratelli";
$pgv_lang["stat_top_age_siblings"] = "Massima differenza tra fratelli";
$pgv_lang["stat_age_mf_spouse"] = "Differenza tra marito e moglie";
$pgv_lang["stat_age_fm_spouse"] = "Differenza tra moglie e marito";
$pgv_lang["stat_names"] = "Nomi";
$pgv_lang["statnsurnames"] = "Totale cognomi";
$pgv_lang["statngivennames"] = "Totale nomi di battesimo";
$pgv_lang["top_surnames"] = "Cognomi più diffusi";
$pgv_lang["top_givennames"] = "Nomi più diffusi";
$pgv_lang["events"] = "Eventi";
$pgv_lang["stat_records"] = "Record";
$pgv_lang["stat_notes"] = "Note";
$pgv_lang["stat_first_event"] = "Evento più antico";
$pgv_lang["stat_last_event"] = "Evento più recente";
$pgv_lang["stat_places"] = "Luoghi";
$pgv_lang["stat_birth_places"] = "Luoghi di nascita";
$pgv_lang["stat_marriage_places"] = "Luoghi di matrimonio";
$pgv_lang["stat_death_places"] = "Luoghi di morte";
$pgv_lang["stat_countries"] = "Eventi per Nazione";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistiche del tracciato";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplinfo"]			= "informazioni sul tracciato:";
$pgv_lang["stpltype"]		= "tipo:";
$pgv_lang["stplnoim"]			= "non implementato:";
$pgv_lang["stplmf"]			 	= "per sesso";
$pgv_lang["stplipot"]			= "per periodo di tempo";
$pgv_lang["stplmonth"]			= "mese";
$pgv_lang["stplnumbers"]		= "numeri";
$pgv_lang["stplnuch"]			= "bambini";
$pgv_lang["stplage"]			= "età";
$pgv_lang["stplperc"]		= "percento";
$pgv_lang["stplnumof"]			= "Conteggi";
$pgv_lang["stplmarrbirth"]		= "Mesi tra il matrimonio e la nascita del primo figlio";
$pgv_lang["indi_distribution_chart"]	= "Prospetto distribuzione delle persone";
$pgv_lang["surname_distribution_chart"]	= "Prospetto distribuzione dei cognomi";
$pgv_lang["g_chart_high"]		= "Più persone";
$pgv_lang["g_chart_low"]		= "Meno persone";
$pgv_lang["g_chart_nobody"]		= "Nessuna persona";
$pgv_lang["area_chart"]			= "Zona geografica";
$pgv_lang["europe_chart"]		= "Europa";
$pgv_lang["s_america_chart"]	= "America del Sud";
$pgv_lang["asia_chart"]			= "Asia";
$pgv_lang["middle_east_chart"]	= "Medio Oriente";
$pgv_lang["africa_chart"]		= "Africa";
$pgv_lang["world_chart"]		= "Mondo";

//-- alive in year
$pgv_lang["alive_in_year"]		= "Vivi nel";
$pgv_lang["is_alive_in"]	= "è vivo nel #YEAR#";
$pgv_lang["alive"]			= "Vivo";
$pgv_lang["dead"]			= "Morto";
$pgv_lang["maybe"]					= "Forse";
$pgv_lang["both_alive"]				= "Entrambi vivi";
$pgv_lang["both_dead"]				= "Entrambi morti";

//-- Help system
$pgv_lang["definitions"]			= "Definizioni";

//-- Index_edit
$pgv_lang["block_desc"]				= "Descrizione dei blocchi";
$pgv_lang["click_here"]		= "Fai clic qui per continuare";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Clicca questo pulsante per salvare le tue modifiche.<br /><br />Sarai reindirizzato alla pagina #pgv_lang[welcome]# o alla pagina #pgv_lang[mygedview]# , ma le tue modifiche potrebbero non essere visibili. Potrebbe essere necessario utilizzare la funzione Ricarica Pagina del tuo browser per vedere correttamente le modifiche.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Qui c'è una breve descrizione di ciascuno dei blocchi che tu puoi mettere nella pagina #pgv_lang[welcome]# o o nella pagina #pgv_lang[mygedview]# .<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]			= "Località trovata";
$pgv_lang["media_contains"]			= "Media contiene:";
$pgv_lang["repo_contains"]			= "Repository contiene:";
$pgv_lang["shared_note_contains"]	= "Note condivise contiene:";
$pgv_lang["source_contains"]		= "Fonte contiene:";
$pgv_lang["display_all"]	= "Mostra tutto";

// FAQ Page
$pgv_lang["add_faq_header"] = "Intestazione FAQ";
$pgv_lang["add_faq_body"] = "FAQ Corpo";
$pgv_lang["add_faq_order"] = "FAQ Posizione";
$pgv_lang["add_faq_visibility"] = "FAQ Visibilità";
$pgv_lang["no_faq_items"] = "La lista FAQ è vuota";
$pgv_lang["position_item"] = "Posizione voce";
$pgv_lang["faq_list"]			= "Lista FAQ";
$pgv_lang["confirm_faq_delete"]	= "Sei sicuro di voler cancellare questa FAQ?";
$pgv_lang["preview"]			= "Anteprima";
$pgv_lang["no_id"]					= "Nessun ID FAQ è stato specificato";

// Help search
$pgv_lang["hs_title"]				= "Cerca nel testo di aiuto";
$pgv_lang["hs_search"] 			= "Cerca";
$pgv_lang["hs_close"] 			= "Chiudi finestra";
$pgv_lang["hs_results"] 			= "Risultati trovati:";
$pgv_lang["hs_keyword"] 			= "Cerca";
$pgv_lang["hs_searchin"]			= "Cerca in";
$pgv_lang["hs_searchuser"]			= "Guida Utente";
$pgv_lang["hs_searchmodules"]		= "Moduli Aiuto";
$pgv_lang["hs_searchconfig"]	= "Aiuto";
$pgv_lang["hs_searchhow"]			= "Tipo di ricerca";
$pgv_lang["hs_searchall"]		= "Tutte le parole";
$pgv_lang["hs_searchany"]		= "Qualsiasi parola";
$pgv_lang["hs_searchsentence"]		= "Frase esatta";
$pgv_lang["hs_intruehelp"]		 	= "Aiuto solo testo";
$pgv_lang["hs_inallhelp"]		= "Tutto il testo";

// Media import
$pgv_lang["choose"] = "Scegli:";
$pgv_lang["account_information"] = "Informazioni sull'account";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"]		= "Audio";
$pgv_lang["TYPE__book"]			= "Libro";
$pgv_lang["TYPE__card"]			= "Carta";
$pgv_lang["TYPE__certificate"]	= "Certificato";
$pgv_lang["TYPE__coat"]				= "Stemma araldico";
$pgv_lang["TYPE__document"]		= "Documento";
$pgv_lang["TYPE__electronic"]	= "Elettronico";
$pgv_lang["TYPE__fiche"]			= "Microschede";
$pgv_lang["TYPE__film"]			= "Microfilm";
$pgv_lang["TYPE__magazine"]		= "Rivista";
$pgv_lang["TYPE__manuscript"]	= "Manoscritto";
$pgv_lang["TYPE__map"]			= "Mappa";
$pgv_lang["TYPE__newspaper"]	= "Giornale";
$pgv_lang["TYPE__photo"]		= "Foto";
$pgv_lang["TYPE__tombstone"]	= "Lapide";
$pgv_lang["TYPE__video"]		= "Video";
$pgv_lang["TYPE__painting"]			= "Dipinto";
$pgv_lang["TYPE__other"]			= "Altro";
//-- Other media suff
$pgv_lang["view_slideshow"] 		= "Visualizza come slideshow";
$pgv_lang["download_image"]			= "Download file";
$pgv_lang["no_media"]				= "Nessun media trovato";
$pgv_lang["media_privacy"]			= "Le impostazioni privacy ti impediscono di vedere questa voce";
$pgv_lang["relations_heading"]		= "L'immagine si riferisce a:";
$pgv_lang["file_size"]				= "Dimensione file";
$pgv_lang["img_size"]				= "Dimensione immagine";
$pgv_lang["media_broken"]			= "Questo file multimediale è corrotto e non può essere filigranato";
$pgv_lang["unknown_mime"]			= "Media Firewall errore:&gt; Sconosciuto Mimetype &lt;per il file";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "Azione sconosciuta: [action].";
$pgv_lang["module_error_unknown_type"] = "Tipo modulo sconosciuto";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Visualizza persone vive nell'anno indicato.";
$pgv_lang["button_BIRT_Y100"] = "Visualizza le persone nate nel corso degli ultimi 100 anni.";
$pgv_lang["button_BIRT_YES"] = "Visualizza le persone nate più di 100 anni fa.";
$pgv_lang["button_DEAT_H"] = "Visualizza le coppie in cui solo il partner maschile è deceduto.";
$pgv_lang["button_DEAT_N"] = "Visualizza le persone che sono vive o coppie in cui entrambi i partner sono in vita.";
$pgv_lang["button_DEAT_W"] = "Visualizza le coppie in cui solo il partner di sesso femminile è deceduto.";
$pgv_lang["button_DEAT_Y"] = "Visualizza le persone che sono morte o coppie in cui entrambi i partner sono deceduti.";
$pgv_lang["button_DEAT_Y100"] = "Visualizza le persone che sono morte nel corso degli ultimi 100 anni.";
$pgv_lang["button_DEAT_YES"] = "Visualizza le persone che sono morte più di 100 anni fa.";
$pgv_lang["button_MARR_DIV"] = "Visualizza coppie divorziate.";
$pgv_lang["button_MARR_U"] = "Mostra coppie con data di matrimonio sconosciuta";
$pgv_lang["button_MARR_Y100"] = "Visualizza le coppie che si sono sposate negli ultimi 100 anni.";
$pgv_lang["button_MARR_YES"] = "Mostra le coppie che si sono sposate più di 100 anni fa.";
$pgv_lang["button_reset"] = "Reimposta l'elenco di default.";
$pgv_lang["button_SEX_F"] = "Mostra solo le femmine.";
$pgv_lang["button_SEX_M"] = "Mostra solo i maschi.";
$pgv_lang["button_SEX_U"] = "Mostra solo le persone di cui il genere non è noto.";
$pgv_lang["button_TREE_L"] = "Mostra «foglie» coppie o persone. Queste sono persone che sono vive, ma non hanno figli registrati nel database.";
$pgv_lang["button_TREE_R"] = "Mostra «radici» coppie o persone. Queste persone possono anche essere chiamate «patriarchi». Sono individui che non hanno genitori registrati nel database.";
$pgv_lang["sort_column"] = "Ordina per questa colonna.";
?>
