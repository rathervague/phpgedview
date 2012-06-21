<?php
/**
 * phpGedView Research Assistant Tool - Form Loader Engine.
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
 * @package PhpGedView
 * @subpackage Research_Assistant
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com 
 * @version $Id: lang.tr.php 4878 2009-01-22 23:19:09Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"] = "Eşlerin soyadını içer:";
$pgv_lang["autosearch_sgivennames"] = "Eşlerin adlarını içer:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Genealogy-Search-Help.com Plug-in";

$pgv_lang["add_task_inst"]		= "Araştırma sonuçlarınız için henüz bir görev eklemediniz, Önce görev oluşturmanız ve sonra görevi kaydetmek ve tamamlamak için seçeneği seçmelisiniz.";
$pgv_lang["complete_task_inst"]	= "Görev ve girişi tamamlamak için alttaki görevlerinizin listesinden sonuçlarınızın görevi seç:";
$pgv_lang["enter_results"]		= "Sonuçları Gir";
$pgv_lang["auto_gen_inst"]		= "Bazı programlar GEDCOM dosyanızda TODO bölümlerinde size araştırma görevine girmesine izin verirler.  This option will search through your GEDCOM file and automatically convert any TODO item into a research task.";
$pgv_lang["choose_search_site"]	= "Bir araştırma siteyi tercih edin";
$pgv_lang["pid_search_for"]		= "Siz kimin için aramak isterdiniz?";
$pgv_lang["manage_research_inst"]	= "Araştırma görevlerinizi yönetmek için bu bölüm size yardımcı olacaktır.  Diğer araştırmacıyla araştırma görevlerine yardım eder, Araştırmanızı kaydedesiniz birlikte çalışırsınız.";
$pgv_lang["manage_research"]	= "Araştırma Yönetimi";
$pgv_lang["manage_sources"]		= "Kayanklar Yönetimi";
$pgv_lang["part_of"]			= "Bölüm (seçenek)";
$pgv_lang["search_fhl"]			= "Aile Geçmiş Tarih Kütüphane Kataloğu Ara"; 
$pgv_lang["determine_sources"]	= "Mümkün Kaynakları Belirle";
$pgv_lang["analyze_database"]	= "Veritabanı Analizi";
$pgv_lang["pid_know_more"]		= "Siz kimin hakkında daha fazlayı öğrenmeyi istersiniz?";
$pgv_lang["analyze_people"]		= "Tarihimi Analiz et";
$pgv_lang["analyze_data"]		= "Tarihimi Analiz et";
$pgv_lang["missing_info"] 		= "Kayıp Bilgiler";
$pgv_lang["auto_search"]		= "Bu özellik ataları otomatik olarak arayacak ve AileArar. İsim ile arama seçebilirsiniz ve doğum/ölüm tarihi.<br />";
$pgv_lang["auto_search_text"]	= "Otomatik Arama";
$pgv_lang["task_list"]			= "Görevler";
$pgv_lang["task_list_text"]		= "Bu alan oluşturduğunuz görevleri gösterir. Görevleri görmek için <b>Görüntüle</b> tıkla.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Benim Görevlerim";
$pgv_lang["add_task"]							= "Görev Ekle";
$pgv_lang["view_folders"]						= "Klasörleri Görüntüle";
$pgv_lang["view_probabilities"]					= "Olasılıkları Görüntüle";
$pgv_lang["up_folder"]							= "Üst Klasör";
$pgv_lang["edit_folder"]						= "Klasör Ekle/Düzenle";
$pgv_lang["gen_tasks"]							= "Otomatik Görevler Üret";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Görev Düzenle";
$pgv_lang["completed"]							= "Tamamlanan";
$pgv_lang["complete"]							= "Tamamla";
$pgv_lang["incomplete"]							= "Tamamlanmayan";
$pgv_lang["created"]							= "Oluşturuldu";
$pgv_lang["details"]							= "Detaylar";
$pgv_lang["result"]                     		= "Sonuç";
$pgv_lang["okay"]                               = "Peki";
$pgv_lang["editform"]							= "Form Tarihi Düzenle";
$pgv_lang["FilterBy"]							= "Arayan";
$pgv_lang["Recalculate"]						= "Tekrar Hesapla";
$pgv_lang["LocalData"]							= "Veri Konumu";
$pgv_lang["RelatedRecord"]						= "İlişkili Kayıt";
$pgv_lang["RelatedData"]						= "İlişkili Veri";
$pgv_lang["Percent"]							= "Yüzdelik";
$pgv_lang["Fields"]								= "Alanların Sayısı";
$pgv_lang["FieldName"]							= "Alan Adı";
$pgv_lang["InputType"]							= "Giriş Tipi";
$pgv_lang["Values"]								= "Değerler";
$pgv_lang["FormBuilder"]						= "Form Kur"; 
$pgv_lang["FormName"]							= "Form ismi gir";
$pgv_lang["MultiplePeople"]						= "Form çok insanlara uygulansınmı?";
$pgv_lang["EnterGEDCOMExtension"]				= "Lütfen formların gerçek tipi için GEDCOM uzantısını gir";
$pgv_lang["FormDesciption"]						= "Lütfen form için açıklama gir";
$pgv_lang["FormGeneration"]						= "Form Üretimi Tamamla!";
$pgv_lang["CustomField"]						= "Özel Alan İsmi";
$pgv_lang["txt"]								= "Metin";
$pgv_lang["checkbox"]							= "Seçim Kutusu";
$pgv_lang["radiobutton"]						= "Radio Butonu";
$pgv_lang["EnterResults"]						= "Sonuçları Gir"; 
$pgv_lang["ra_submit"]							= "Gönder";
$pgv_lang["ra_generate_tasks"]					= "TODO dan Görev Üret";
$pgv_lang["TaskDescription"]					= "Görev Açıklaması";
$pgv_lang["SelectFolder"]                       = "Klasör Seç:";
$pgv_lang["ra_done"]							= "Bitti";
$pgv_lang["ra_generate"]						= "Üret";
$pgv_lang["LocalPercent"]						= "Yerel Yüzde";
$pgv_lang["GlobalPercent"]						= "Global Yüzdelik";
$pgv_lang["Average"]							= "Ortalama";
$pgv_lang["NoData"]								= "Bilgi Yok!";
$pgv_lang["NotEnoughData"]						= "Yeterli Veri Yok!";
$pgv_lang["InferIndvBirthPlac"]					= "Doğum yeri olduğu %PERCENT% şahsı vardır:";
$pgv_lang["InferIndvDeathPlac"]					= "Ölüm yeri olduğu %PERCENT% şahsı vardır:";
$pgv_lang["InferIndvSurn"]						= "Soyadı olduğu %PERCENT% şahsı vardır:";
$pgv_lang["InferIndvMarriagePlace"]				= "Evlilik yeri olduğu %PERCENT% şahsı vardır:";
$pgv_lang["InferIndvGivn"]						= "İsmi olduğu %PERCENT% şahsı vardır:";
$pgv_lang["All"]								= "Hepsi";
$pgv_lang["More"]								= "Daha";
$pgv_lang["ThereIsChance"]						= "Possible Sources may include:";
$pgv_lang["TheMostLikely"]						= "Bu kaynak için en uygun yer:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]					= "Veri İlişkileri";
$pgv_lang["ViewProbExplanation"]				= "This page analyzes the data for the active GEDCOM dataset and shows the correlations between different data elements. For example, there could be a 95% correlation that the surname in a local record is the same as the surname in the father's record.  This would mean that 95% of the people in this GEDCOM dataset share the same surname as their father. In this version of the Research Assistant, these calculations are not being used in other areas of the program and are only provided as a help to you in your research.  In the future we plan to use this data to help provide you with meaningful suggestions of where you should focus some of your future research. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                             = "Klasör:";
$pgv_lang["Edit_Gen_Task"]                 		= "Edit Generated Task";
$pgv_lang["Start_Date"]                 		= "Başlama Tarihi";
$pgv_lang["Task_Name"]                			= "Görev Adı";
$pgv_lang["Folder_Name"]                		= "Klasör Adı";
$pgv_lang["Folder_View"]                		= "Klasör Görüntüleme";
$pgv_lang["Task_View"]                  		= "Görev Görüntüleme";
$pgv_lang["page_header"]						= "Araştırma Asıstan Klasörleri";
$pgv_lang["no_folder_name"]             		= "Klasör alanında klasör ismi girilmeli.";
$pgv_lang["add_folder"]                 		= "Klasör Ekle";
$pgv_lang["folder_name"]                		= "Klasör Adı:";
$pgv_lang["Parent_Folder:"]             		= "Ana Klasör:";
$pgv_lang["No_Parent"]                  		= "Ana Klasör Yok";
$pgv_lang["Folder_Description:"]        		= "Klasör Açıklaması:";
$pgv_lang["Folder_names_must_be_unique"]		= "Dosya isimleri tek olmalı.";
$pgv_lang["folder_submitted"]          			= "Klasörünüz gönderildi"; 
$pgv_lang["folder_problem"]             		= "Dosyanızı eklemenizde bir sorun oluştur, Lütfen tekrar deneyin";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] = "This area displays Kayıp Bilgiler about the record. Select a checkbox and folder and click <b>Add Task</b> to create a task for the missing item. Existing tasks will show <b>View</b> instead of a checkbox.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]						= "Yeni görev oluştur.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "Henüz hiç bir klasör mevcut değil. Lütfen önce yeni klasör oluştur.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]				= "~Folder View~<ul><li><b>Folder Name:</b> This column contains the names of all of the folders you have created.</li><li><b>Description:</b> This column contains the description of the folders.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~Add New Task~<ul><li><b>Title:</b> This should contain the title of the task that you are adding.</li><li><b>Folder:</b> In this field you can assign which folder you want your new task to go to.</li><li><b>Description:</b> Enter a description of the task you want to add.</li><li><b>Sources:</b> Assign any sources that you have for the task.</li><li><b>People:</b> Assign any people associated for the new task.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "~Edit Folder~<ul><li><b>Folder Name:</b> This is where you should add the title of the folder that you are editing.</b></li><li><b>Parent folder:</b> You can assign the parent folder, if any, of the folder you are editing.</b></li><li><b>Folder description:</b> This is the description of the folder you are editing.</b></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "~Add Folder~<ul><li><b>Folder Name:</b> This is where you should add the title of the folder that you are adding.</b></li><li><b>Parent folder:</b> You can assign the parent folder, if any, of the folder you are adding.</b></li><li><b>Folder description:</b> This is the description of the folder you are adding.</b></li></ul>";
$pgv_lang["ra_view_task_help"]				= "~Task View~<ul><li><b>Task Name:</b> This column contains the name of each task.</b></li><li><b>Start Date:</b> This will contain the start dates of all the tasks.</li><li><b>Completed:</b> This will show whether or not a task is completed.</li><li><b>Edit:</b> This will take you to edit the task</li><li><b>Delete:</b> This will delete the task.</li><li><b>Complete:</b> This will take you immediately to choose the form and edit the task</li></ul>";
$pgv_lang["ra_task_view_help"]				= "~View Task~<ul><li><b>Title:</b> This should contain the title of the task that you are adding.</li><li><b>People:</b> Assign any people associated for the new task.</li><li><b>Description:</b> Enter a description of the task you want to add.</li><li><b>Sources:</b> Assign any sources that you have for the task.</li><li>Click <b>Edit Task</b> to edit the details of the task.</li></ul>";
$pgv_lang["ra_comments_help"]				= "~Comments~<ul><li>This will contain any comments related to the task. Click <b>Add New Comment</b> to add any comments.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "~Generate Tasks~<p>This form generates tasks from the _TODO tags in your GEDCOM file.</p><ul><li><b>Generate:</b> check each task to generate when you click <b>Generate</b>.</li><li><b>Task Name:</b> This is the name the task will be given.  This defaults to the text in the actual _TODO tag, excluding any CONT tags</li><li><b>Task Description:</b> The description the task will be given.  This is generated from the text in the _TODO tag plus all of the associated CONT tags.  </li><li><b>Edit:</b> click the link to edit that task.</li><li><b>Select Folder:</b> select the folder to put the generated tasks in.</li><li><b>Generate:</b> generates the tasks that have been checked.</li><li><b>Done:</b> redirects you to the Folder View page.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "~Edit Generated Task~<p>This form allows you to edit the tasks generated from _TODO tags in your GEDCOM file.</p><ul><li><b>Task Name:</b> This is the name the task will be given.  </li><li><b>Task Description:</b> The description the task will be given. </li><li><b>People:</b> click the link to select the person to associate the task with.</li><li><b>Source:</b> click the link to select the source to associate the task with.</li><li><b>Save:</b> saves all your changes and redirects you to the Generate tasks page.</li><li><b>Cancel:</b> disregards all your changes and redirects you to the Generate tasks page.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "~Configure Privacy~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> The specified task is available to everyone.</li><li><b>#pgv_lang[PRIV_USER]#:</b> The specified task is available only to authenticated users.</li><li><b>#pgv_lang[PRIV_NONE]#</b> The specified task is available only to users with Admin rights.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> The specified task is not available to anyone.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Edit Task~<ul><li><b>Title:</b> This should contain the title of the task that you are editing.</li><li><b>Folder:</b> In this field you can assign which folder you want your new task to go to.</li><li><b>Description:</b> Enter a description of the task you want to edit.</li><li><b>Sources:</b> Assign or edit any sources that you have for the task.</li><li><b>People:</b> Assign or edit any people associated for the task.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]						= "Görev Görüntüle";
$pgv_lang["add_new_comment"]				= "Yeni Yorum Ekle";
$pgv_lang["no_indi_tasks"]					= "Bu şahısla ilgili hiç bir görev gerevlendirilmedi.";
$pgv_lang["no_sour_tasks"]					= "Bu kaynakla ilgili hiç bir görev gerevlendirilmedi.";
$pgv_lang["edit_comment"]					= "Yorum Düzenle";
$pgv_lang["comment_success"]				= "Yorumunuz başarılı biçimde eklendi.";
$pgv_lang["comment_body"]					= 'Yorum';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Bu yorumu silmek istediğinizden emin misiniz?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Yeni Görev Ekle";
$pgv_lang["submit"]						= "Gönder";
$pgv_lang["save_and_complete"]          = "Tamam ve Kaydet";
$pgv_lang["assign_task"]				= "Görevi Görevlendir";
$pgv_lang["AddTask"]					= "Görev Ekle";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]		    = "Mahremiyet Konfigürasyon";
$pgv_lang["show_my_tasks"]              = "Benim Görevleri Göster";
$pgv_lang["show_add_task"]		        = "Görev Ekle Göster";
$pgv_lang["show_auto_gen_task"]         = "Otomatik Görev Üret Göster";
$pgv_lang["show_view_folders"]		    = "Klasörleri Görüntüle Göster";
$pgv_lang["show_add_folder"]		    = "Klasör Ekle Göster";
$pgv_lang["show_add_unlinked_source"]   = "Bağlantısız Kaynak Ekle Göster";
$pgv_lang["show_view_probabilities"]	= "Olasılıkları Görüntüle Göster";

//-- Census Forms
$pgv_lang["rows"]                       = "Sıraların Sayısı";
$pgv_lang["state"]                      = "Semt";
$pgv_lang["call/url"]                   = "Çağrı Numara/URL";
$pgv_lang["enumDate"]                   = "Sayım Tarihi";
$pgv_lang["county"]                     = "İl";
$pgv_lang["city"]                       = "Şehir";
$pgv_lang["complete_title"]				= "Bir Görevi Tamamlayın";
$pgv_lang["select_form"]				= "Form Seç";
$pgv_lang["choose_form_label"]			= "Bir genel araştırma formu seçin:";
$pgv_lang["book"]                 		= "Kitap";
$pgv_lang["folio"]                   	= "Folo";
$pgv_lang["uk_county"]					= "İl";
$pgv_lang["uk_boro"]						= "Şehir veya İlçe";
$pgv_lang["uk_place"]					= "Yer";

$pgv_lang["AssIndiFacts"]				= "Kişisel Gerçeği İlişkilendir"; 
$pgv_lang["AssFamFacts"]				= "Aile Gerçeği İlişkilendir";  
$pgv_lang["ra_facts"]					= "Gerçekler"; 	
$pgv_lang["ra_fact"]					= "Gerçek"; 
$pgv_lang["ra_remove"]					= "kaldır";   
$pgv_lang["ra_inferred_facts"]			= "Gerçekleri Anla"; 
$pgv_lang["ra_person"]					= "Şahıs"; 
$pgv_lang["ra_reason"]					= "Sebeb"; 
$pgv_lang["success"]					= "Başarılı!"; 

$pgv_lang["registration_no"]			= "Kayıt Numarası:";
$pgv_lang["serial_no"]					= "Serial No.:";
$pgv_lang["ra_no"]						= "Sayı:";
$pgv_lang["order_no"]					= "Numaraya göre Sırala:";

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "The #pgv_lang[my_tasks]# block shows tasks for the current user. It can be configured to show completed tasks or to show tasks that are currently unassigned.";
$pgv_lang["mytasks_block"] 				= "Araştırma asıstanı";
$pgv_lang["mytasks_edit"]               = "Düzenle";
$pgv_lang["mytasks_unassigned"]			= "Unassigned";
$pgv_lang["mytasks_takeOn"]				= "TakeOn";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   		= "Show unassigned tasks?";
$pgv_lang["mytask_show_completed"]		= "Görevler tamamlandı göster?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		    = "Soyadı içer:";
$pgv_lang["autosearch_givenname"]	    = "İlk adları içer:";
$pgv_lang["autosearch_byear"]		    = "Doğum yılını içer:";
$pgv_lang["autosearch_bloc"]		    = "Doğum konumu içer:";  
$pgv_lang["autosearch_dyear"]		    = "Ölüm yılı içer:";
$pgv_lang["autosearch_dloc"]		    = "Ölüm konumu içer:";
$pgv_lang["autosearch_gender"]          = "Cinsiyeti içer:";
$pgv_lang["autosearch_plugin_name"]     = "aaaaaa";  
$pgv_lang["autosearch_fsurname"]		= "Babaların soyadını içer:";
$pgv_lang["autosearch_fgivennames"]		= "Babaların ilk adlarını içer:";
$pgv_lang["autosearch_msurname"]		= "Annelerin soyadını içer:";
$pgv_lang["autosearch_mgivennames"]	    = "Annelerin ilk adını içer:"; 
$pgv_lang["autosearch_country"]  	    = "Ülkeyi içer:"; 
$pgv_lang["autosearch_plugin_name_ancestry"] = "Ancestry.com Plug-in";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] = "Ancestry.co.uk Plug-in";
$pgv_lang["autosearch_plugin_name_ellisIsland"] = "EllisIslandRecords.org Plug-in";
$pgv_lang["autosearch_plugin_name_genNet"] = "GeneaNet.com Plug-in";
$pgv_lang["autosearch_plugin_name_gen"]  = "Genealogy.com Plug-in"; 
$pgv_lang["autosearch_plugin_name_fs"]   = "FamilySearch.org Plug-in";
$pgv_lang["autosearch_plugin_name_werelate"]   = "Werelate.org Plug-in";
$pgv_lang["autosearch_search"]           = "Ara";
$pgv_lang["autosearch_keywords"] = "Anahtar sözcük:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 ="Klasör halen görev içeriyor ve silinemez";
$pgv_lang["has_folders"]               ="The folder currently countains folders and cannot be deleted";
?>
