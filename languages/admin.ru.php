<?php
/**
 * Russian texts
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
 * @package PhpGedView
 * @author Eugene Fedorov
 * @author Natalia Anikeeva
 * @version $Id: admin.ru.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["step2"]				= "Шаг 2 из 5:";
$pgv_lang["gedcom_deleted"]		= "GEDCOM [#GED#] удален.";
$pgv_lang["full_name"]			= "Полное имя";
$pgv_lang["error_header"] 		= "Файл GEDCOM, \$GEDCOM, отсутствует в заданном оглавлении.";
$pgv_lang["manage_gedcoms"]		= "Администратор GEDCOMs";
$pgv_lang["created_indis"]		= "Таблица <i>Individuals</i> успешно создана.";
$pgv_lang["created_indis_fail"]	= "Невозможно создать таблицу <i>Individuals</i>.";
$pgv_lang["created_fams"]		= "Таблица <i>Families</i> успешно создана.";
$pgv_lang["created_fams_fail"]	= "Невозможно создать таблицу <i>Families</i>.";
$pgv_lang["created_sources"]	= "Таблица <i>Sources</i> успешно создана.";
$pgv_lang["created_sources_fail"]	= "Невозможно создать таблицу <i>Sources</i>.";
$pgv_lang["created_other"]		= "Таблица <i>Other</i> успешно создана.";
$pgv_lang["created_other_fail"]	= "Невозможно создать таблицу <i>Other</i>.";
$pgv_lang["created_places"]		= "Таблица <i>Places</i> успешно создана.";
$pgv_lang["created_places_fail"]	= "Невозможно создать таблицу <i>Places</i>.";
$pgv_lang["folder_created"]		= "Создать папку";
$pgv_lang["add_gedcom"]			= "Добавить файл GEDCOM";
$pgv_lang["add_new_gedcom"]		= "Создать новый файл GEDCOM";
$pgv_lang["admin_approved"]		= "Ваш вход на #SERVER_NAME# одобрен";
$pgv_lang["admin_gedcom"]			= "Аминистрирование GEDCOM";
$pgv_lang["administration"]		= "Администратор";
$pgv_lang["ansi_encoding_detected"]	= "Обнаружена кодировка ANSI. PhpGedView работает наилучшим образом с файлами в кодировке UTF-8.";
$pgv_lang["ansi_to_utf8"]		= "Преобразовать файл GEDCOM из ANSI (ISO-8859-1) на UTF-8?";
$pgv_lang["bytes_read"]			= "Прочтено байт:";
$pgv_lang["can_admin"]			= "Иметь право на администрирование";
$pgv_lang["can_edit"]			= "Иметь право на редактирование";
$pgv_lang["change_id"]			= "Изменить ID персоны на:";
$pgv_lang["cleanup_places"]		= "Чистить Геогр. названия";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Кликните здесь если вы хотите идти на восходящее дерево.";
$pgv_lang["configuration"]		= "Инсталлировать";
$pgv_lang["confirm_user_delete"]	= "Вы уверены что хотите удалить этого пользователя?";
$pgv_lang["create_user"]		= "Создать нового пользователя";
$pgv_lang["dataset_exists"]		= "GEDCOM файл с таким именем уже находится в базе данных.";
$pgv_lang["day_before_month"]		= "День перед Месяцем (DD MM YYYY)";
$pgv_lang["do_not_change"]		= "Не менять";
$pgv_lang["download_gedcom"]		= "Загрузить файл GEDCOM";
$pgv_lang["download_note"]		= "ЗАМЕЧАНИЕ: Большие GEDCOM файлы могут потребовать большого времени для загрузки. Если ограничение по времени, установленное в PHP, истечет до того как загрузка будет завершена, Вы можете получить неполную загрузку. Для проверки полноты загрузки, Вы можете проверить последнюю строку загруженного GEDCOM файла, она должна быть равна 0 TRLR. В общем импорт GEDCOM файлов может занять много времени. ";
$pgv_lang["editaccount"]			= "Позволить этому пользователю редактировать информацию своей учетной записи";
$pgv_lang["empty_dataset"]		= "Вы хотите очистить базу данных?";
$pgv_lang["empty_lines_detected"]	= "В Ваше GEDCOM файле были обнаружены пустые строки. Они будут удалены при чистке.";
$pgv_lang["error_header_write"]	= "GEDCOM-файл, [#GEDCOM#], закрыт на запись. Проверьте аттрибуты доступа к файлу.";
$pgv_lang["example_date"]		= "Пример неправильной даты из Ваших GEDCOM данных:";
$pgv_lang["found_record"]		= "Найдено записей";
$pgv_lang["ged_import"]			= "Импортировать файл GEDCOM";
$pgv_lang["gedcom_config_write_error"]	= "Ошибка!!! Невозможно записать GEDCOM файл конфигурации.";
$pgv_lang["gedcom_file"]		= "Файл GEDCOM:";
$pgv_lang["img_admin_settings"]	= "Изменить настройки менеджера изображений";
$pgv_lang["import_complete"]		= "Импорт готов";
$pgv_lang["import_progress"]	= "Прогресс импорта...";
$pgv_lang["inc_languages"]		= "Языки:";
$pgv_lang["invalid_dates"]		= "Обнаружен неправильный формат даты, приведите все даты к формату DD MMM YYYY (например, 1 JAN 2004).";
$pgv_lang["invalid_header"]		= "Обнаружины строки перед заголовком GEDCOM файла (0 HEAD). Они будут удалены при Чистке.";
$pgv_lang["logfile_content"]	= "Содержимое log-файла";
$pgv_lang["macfile_detected"]	= "Обнаружен файл в формате Макинтош. При чистке от будет конвертирован в DOS формат.";
$pgv_lang["merge_records"]			= "Слияние записей";
$pgv_lang["month_before_day"]		= "Месяц перед Днем (MM DD YYYY)";
$pgv_lang["performing_validation"]	= "Производя утверждение GEDCOM, выбирите необходимые опции и нажмите 'Чистка'";
$pgv_lang["pgv_registry"]		= "Посмотреть другие сайты использующие PhpGedView?";
$pgv_lang["place_cleanup_detected"]	= "Обнаружены записи географических названий в неправильном формате. Эти ошибки должны быть исправлены. Следующий пример показывает обнаруженную неправильную запись географического названия:";
$pgv_lang["please_be_patient"]		= "МИНУТУ ТЕРПЕНИЯ, ПОЖАЛУЙСТА!";
$pgv_lang["reading_file"]		= "Считывание файла GEDCOM";
$pgv_lang["readme_documentation"]	= "Документация README";
$pgv_lang["rootid"]			= "Начинать с персоны по восходящему дереву";
$pgv_lang["select_an_option"]		= "Выбор опции:";
$pgv_lang["skip_cleanup"]			= "Пропустить очистку";
$pgv_lang["update_myaccount"]	= "Обновить Учетную Запись";
$pgv_lang["update_user"]		= "Применить к пользователю";
$pgv_lang["upload_gedcom"]		= "Выгрузить файл GEDCOM";
$pgv_lang["user_contact_method"]	= "Предпочтительный метод связи";
$pgv_lang["user_create_error"]		= "Новый пользователь не создан. Попробуйте еще раз.";
$pgv_lang["user_created"]		= "Пользователь создан.";
$pgv_lang["valid_gedcom"]		= "Корректные GEDCOM данные. Исправлений не требуется.";
$pgv_lang["validate_gedcom"]	= "Утвердить GEDCOM";
$pgv_lang["verified"]			= "Подтверждения пользователя:";
$pgv_lang["verified_by_admin"]		= "Разрешение администратора:";
$pgv_lang["verify_upload_instructions"]	= "Если Вы выберете продолжить, старый grdcom файл будет заменен тем, который Вы выгрузили, и процесс импорта начнется снова. Если вы выберете отмену, старый GEDCOM файл останется без изменений.";
$pgv_lang["view_logs"]			= "Посмотреть Log-файл";
$pgv_lang["visibleonline"]			= "Позволять другим пользователям видеть меня, когда я в системе";
$pgv_lang["you_may_login"]		= "администратором. Сейчас Вы должны ввести свой логин на сайте. Кликните по нижестоящей кнопочке.";


?>
