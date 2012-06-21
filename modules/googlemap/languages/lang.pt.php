<?php
/*=================================================
   charset=utf-8
   Project:         phpGedView
   File:            lang.pt.php
   Author:          Johan Borkhuis / Traduzida por Clovis Bombardelli
   Comments:        Portugese Language file for Google map module
===================================================*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Mapa";
$pgv_lang["no_gmtab"]               = "N&atilde;o existem dados para o mapa desta pessoa";
$pgv_lang["gm_disabled"]            = "M&oacute;dulo Googlemap desabilitado";

$pgv_lang['gm_redraw_map']          = "Refazer mapa";
$pgv_lang["gm_map"]                 = "Mapa";
$pgv_lang["gm_satellite"]           = "Imagem";
$pgv_lang["gm_hybrid"]              = "H&iacute;brido";

// Configuration texts
$pgv_lang["gm_manage"]              = "Configurar m&oacute;dulo Googlemap ";
$pgv_lang["configure_googlemap"]    = "Configura&ccedil;&atilde;o Googlemap";
$pgv_lang["gm_admin_error"]         = "Somente para Administradores";
$pgv_lang["gm_db_error"]            = "tabela de lugares n&atilde;o encontrada na base de dados";
$pgv_lang["gm_table_created"]       = "tabela de lugares criada";
$pgv_lang["googlemap_enable"]       = "Habilitar Googlemap";
$pgv_lang["googlemapkey"]           = "Google Map API key";
$pgv_lang["gm_map_type"]            = "Mapa padr&atilde;o";
$pgv_lang["gm_map_size"]            = "Tamanho do mapa (pixels)";
$pgv_lang["gm_map_size_x"]          = "Largura";
$pgv_lang["gm_map_size_y"]          = "Comprimento";
$pgv_lang["gm_map_zoom"]            = "Fator de zoom para o mapa";
$pgv_lang["gm_digits"]              = "d&iacute;gitos";
$pgv_lang["gm_min"]                 = "Min.";
$pgv_lang["gm_max"]                 = "Max.";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Editar coordenadas de localização";
$pgv_lang["pl_no_places_found"]     = "Local n&atilde;o encontrado";
$pgv_lang["pl_zoom_factor"]         = "Fator de zoom";
$pgv_lang["pl_place_icon"]          = "&Iacute;cone";
$pgv_lang["pl_edit"]                = "Editar local";
$pgv_lang["pl_add_place"]           = "Adicionar local";
$pgv_lang["pl_import_gedcom"]       = "Importar do GEDCOM atual";
$pgv_lang["pl_import_all_gedcom"]   = "Importar de todos GEDCOMs";
$pgv_lang["pl_import_file"]         = "Importar do arquivo";
$pgv_lang["pl_export_file"]         = "Exportar para arquivo";
$pgv_lang["pl_export_all_file"]     = "Exportar todos os lugares para arquivo";
$pgv_lang["pl_north_short"]         = "N";
$pgv_lang["pl_south_short"]         = "S";
$pgv_lang["pl_east_short"]          = "E";
$pgv_lang["pl_west_short"]          = "W";
$pgv_lang["pl_places_filename"]     = "Arquivo contendo lugares (CSV)";
$pgv_lang["pl_clean_db"]            = "Limpar todos dados de localiza&ccedil;&atilde;o dos lugares antes da importa&ccedil;&atilde;o?";
$pgv_lang["pl_no_places_found"]     = "Nenhum lugar encontrado";
$pgv_lang["pl_use_this_value"]      = "Usar este valor";
$pgv_lang["pl_precision"]           = "Precis&atilde;o";
$pgv_lang["pl_country"]             = "Pa&iacute;s";
$pgv_lang["pl_state"]               = "Estado";
$pgv_lang["pl_city"]                = "Cidade";
$pgv_lang["pl_neighborhood"]        = "Vizinhan&ccedil;as";
$pgv_lang["pl_house"]               = "Casa";
$pgv_lang["pl_max"]                 = "Max";

$pgv_lang["pl_flag"]                = "Bandeira";
$pgv_lang["flags_edit"]             = "Selecionar bandeira";
$pgv_lang["pl_change_flag"]         = "Alterar bandeira";
$pgv_lang["pl_remove_flag"]         = "Remover bandeira";

$pgv_lang["pl_remove_location"]     = "Remover este local?";
$pgv_lang["pl_delete_error"]        = "Local n&atilde;o removido: este local deve conter sub-locais";
?>
