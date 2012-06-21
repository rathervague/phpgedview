<?php
/**
 * Portugese Language file for PhpGedView.
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
 * @package PhpGedView
 * @author Maurício Menegazzo Rosa
 * @author Anderson Wilson and Clovis Bombardelli
 * @version $Id: editor.pt.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"]="Aceitar / Rejeitar Alterações";
$pgv_lang["replace"]="Substituir Registro";
$pgv_lang["append"]="Adicionar Registro";
$pgv_lang["review_changes"]="Rever Alterações";
$pgv_lang["remove_object"]="Excluir Objeto";
$pgv_lang["remove_links"]="Excluir Ligações";
$pgv_lang["media_not_deleted"]="Pasta de Mídia não foi excluída.";
$pgv_lang["thumbs_not_deleted"]="Pasta de Miniaturas não foi excluída.";
$pgv_lang["thumbs_deleted"]="Pasta de Miniaturas excluída com sucesso.";
$pgv_lang["show_thumbnail"]="Exibir Miniaturas";
$pgv_lang["link_media"]="Ligar Mídia";
$pgv_lang["to_person"]="Com a Pessoa";
$pgv_lang["to_family"]="Com a Família";
$pgv_lang["to_source"]="Com a Fonte";
$pgv_lang["edit_fam"]="Alterar a Família";
$pgv_lang["copy"]="Copiar";
$pgv_lang["cut"]="Recortar";
$pgv_lang["sort_by_birth"]="Ordenado por nascimento";
$pgv_lang["reorder_children"]="Re-ordenar os Filhos";
$pgv_lang["add_from_clipboard"]="Adicionar da Área de Transferência:";
$pgv_lang["record_copied"]="Registro copiado para a Área de Transferência";
$pgv_lang["add_unlinked_person"]="Adicionar uma pessoa sem parentes a árvore";
$pgv_lang["add_unlinked_source"]="Adicionar uma fonte sem ligação alguma";
$pgv_lang["server_file"]="Nome do arquivo no servidor";
$pgv_lang["server_file_advice"]="Não altere para manter o nome original do arquivo.";
$pgv_lang["server_file_advice2"]="Informe uma URL inciando por &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]="O máximo de níveis permitdos abaixo da pasta padrão de mídia &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; é de  #GLOBALS[MEDIA_DIRECTORY_LEVELS]#.<br />Suprima &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; do nome da pasta de destino.";
$pgv_lang["server_folder_advice2"]="O campo \"Nome do Arquivo\" não deve conter uma URL.";
$pgv_lang["add_linkid_advice"]="Informe ou pesquise a ID da pessoa, família, ou fonte a qual esta mídia deverá estar ligada.";
$pgv_lang["use_browse_advice"]="Use o botão de &laquo;Procurar&raquo; e selecione em seu computador o arquivo desejado.";
$pgv_lang["add_media_other_folder"]="Outra pasta...por favor informe";
$pgv_lang["add_media_file"]="Arquivo de mídia existe no servidor";
$pgv_lang["main_media_ok1"]="Arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> foi renomeado com sucesso para <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]="Arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> foi movido com sucesso de <b>#GLOBALS[oldMediaFolder]#</b> para <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]="Pasta principal de mídia foi movida e renomeada de  <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.|";
$pgv_lang["main_media_fail0"]="Pasta principal de mídia <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> não existe.";
$pgv_lang["main_media_fail1"]="Não foi possível renomear o arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]="Não foi possível mover o arquivo principal de mídia <b>#GLOBALS[oldMediaName]#</b> de <b>#GLOBALS[oldMediaFolder]#</b> para <b>#GLOBALS[newMediaFolder]#.";
$pgv_lang["main_media_fail3"]="Não foi possível mover e renomear o arquivo principal de mídia de <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok1"]="Pasta de miniaturas <b>#GLOBALS[oldMediaName]#</b> foi renomeada para <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]="Pasta de miniaturas <b>#GLOBALS[oldMediaName]#</b> movida de <b>#GLOBALS[oldThumbFolder]#</b> para <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]="<b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> movido e renomeado para <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]="Pasta de miniaturas <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> não existe.";
$pgv_lang["thumb_media_fail1"]="Não foi possível renomear <b>#GLOBALS[oldMediaName]#</b> para  <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]="Não foi possível mover <b>#GLOBALS[oldMediaName]#</b> de <b>#GLOBALS[oldThumbFolder]#</b> para <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]="Não foi possível mover e renomear <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> para <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]="Nova Testemunha";
$pgv_lang["edit_sex"]="Alterar Sexo";
$pgv_lang["add_obje"]="Adicionar Mídia";
$pgv_lang["add_name"]="Adicionar Nome";
$pgv_lang["edit_raw"]="Editar registro GEDCOM";
$pgv_lang["label_add_remote_link"]="Adicionar Ligação";
$pgv_lang["label_gedcom_id"]="ID do Banco de Dados";
$pgv_lang["label_local_id"]="ID da Pessoa";
$pgv_lang["accept"]="Aceitar";
$pgv_lang["accept_all"]="Aceitar todas as alterações";
$pgv_lang["accept_gedcom"]="Para cada alteração informe se aceita ou descarta a mesma.<br />Para aceitar todas de uma vez, clique em \"Aceitar todas as Alterações\" na caixa abaixo.<br />Para saber mais sobre a alteração, <br />clique \"Exibir Diferenças\" e veja as diferenças entre a nova situação e a antiga, <br />ou clique em \"Exibir registro GEDCOM\" para exibir a situação atual no formato GEDCOM.";
$pgv_lang["accept_successful"]="Alterações aceitas com sucesso no banco de dados";
$pgv_lang["add_child"]="Adicionar filho";
$pgv_lang["add_child_to_family"]="Adicionar filho a esta família";
$pgv_lang["add_fact"]="Adicionar Fato";
$pgv_lang["add_father"]="Adicionar pai";
$pgv_lang["add_husb"]="Adicionar marido";
$pgv_lang["add_husb_to_family"]="Adicionar marido a esta família";
$pgv_lang["add_media"]="Adicionar Mídia";
$pgv_lang["add_media_lbl"]="Adicionar Mídia";
$pgv_lang["add_mother"]="Adicionar mãe";
$pgv_lang["add_new_chil"]="Adicionar Criança";
$pgv_lang["add_new_husb"]="Adicionar marido";
$pgv_lang["add_new_wife"]="Adicionar esposa";
$pgv_lang["add_note"]="Adicionar Nota";
$pgv_lang["add_note_lbl"]="Adicionar Nota";
$pgv_lang["add_sibling"]="Adicionar irmão ou irmã";
$pgv_lang["add_son_daughter"]="Adicionar filho ou filha";
$pgv_lang["add_source"]="Adicionar Citação à Fonte";
$pgv_lang["add_source_lbl"]="Adicionar Citação à Fonte";
$pgv_lang["add_wife"]="Adicionar esposa";
$pgv_lang["add_wife_to_family"]="Adicionar esposa a esta família";
$pgv_lang["advanced_search_discription"]="Pesquisa avançada de site";
$pgv_lang["auto_thumbnail"]="Miniatura Automática";
$pgv_lang["basic_search"]="pesquisa";
$pgv_lang["basic_search_discription"]="Pesquisa básica de site";
$pgv_lang["birthdate_search"]="Data de Nascimento:";
$pgv_lang["birthplace_search"]="Local de Nascimento:";
$pgv_lang["change"]="Alterar";
$pgv_lang["change_family_instr"]="Use está página para excluir ou alterar os membros desta família.<br /><br />Quando terminar de alterar e excluir, clique no botão Salvar, confirmando suas modificações.<br />";
$pgv_lang["change_family_members"]="Alterar Membros da Família";
$pgv_lang["changes_occurred"]="As seguintes mudanças ocorreram para essa pessoa:";
$pgv_lang["confirm_remove"]="Confirma a exclusão desta pessoa da Família?";
$pgv_lang["confirm_remove_object"]="Confirma a exclusão do objeto?";
$pgv_lang["create_repository"]="Nova Reposição";
$pgv_lang["create_source"]="Nova Fonte";
$pgv_lang["current_person"]="O mesmo que agora";
$pgv_lang["date"]="Data";
$pgv_lang["deathdate_search"]="Data de Falecimento:";
$pgv_lang["deathplace_search"]="Local onde Faleceu:";
$pgv_lang["delete_dir_success"]="Pastas de Mídia e Miniatura foram excluídas com sucesso.";
$pgv_lang["delete_file"]="Excluir Arquivo";
$pgv_lang["delete_repo"]="Excluir Reposição";
$pgv_lang["directory_not_empty"]="Pasta não está vazia.";
$pgv_lang["directory_not_exist"]="Pasta inexistente.";
$pgv_lang["error_remote"]="Site remoto selecionado.";
$pgv_lang["error_same"]="Você selecionou o mesmo site.";
$pgv_lang["external_file"]="Está Mídia não pode ser excluída movida ou renomeada, pois não está armazenada no servidor.";
$pgv_lang["file_missing"]="Nenhum arquivo foi recebido. Por favor tente novamente.";
$pgv_lang["file_partial"]="Arquivo foi enviado parcialmente, por favor tente novamente";
$pgv_lang["file_success"]="Arquivo enviado com sucesso";
$pgv_lang["file_too_big"]="O arquivo a ser enviado excede o tamanho permitido";
$pgv_lang["folder"]="Pasta no Servidor";
$pgv_lang["gedcom_editing_disabled"]="Edição deste GEDCOM foi desabilitada pelo administrador do sistema.";
$pgv_lang["gedcomid"]="Minha Identificação na Árvore Genealógica";
$pgv_lang["gedrec_deleted"]="Registro GEDCOM excluido com sucesso.";
$pgv_lang["gen_thumb"]="Criar Miniatura";
$pgv_lang["gender_search"]="Sexo:";
$pgv_lang["generate_thumbnail"]="Gerar Miniatura automaticamente de ";
$pgv_lang["hebrew_givn"]="Nomes Hebráicos";
$pgv_lang["hebrew_surn"]="Sobrenome Hebráico";
$pgv_lang["hide_changes"]="Clique aqui para não exibir as alterações.";
$pgv_lang["highlighted"]="Imagem de Destaque";
$pgv_lang["illegal_chars"]="Caracteres ilegais no nome";
$pgv_lang["invalid_search_multisite_input"]="Informe um destes: Nome, data/local de Nascimento, data/local de Falecimento, ou Sexo";
$pgv_lang["invalid_search_multisite_input_gender"]="Por favor repita a pesquisa e informe algo mais além do sexo";
$pgv_lang["label_diff_server"]="Site diferente";
$pgv_lang["label_location"]="Local";
$pgv_lang["label_password_id2"]="Senha:";
$pgv_lang["label_rel_to_current"]="Relação com a pessoa atual";
$pgv_lang["label_remote_id"]="ID da Pessoa Remota";
$pgv_lang["label_same_server"]="Mesmo Site";
$pgv_lang["label_site"]="Site";
$pgv_lang["label_site_url"]="Endereço do Site:";
$pgv_lang["label_username_id2"]="Usuário:";
$pgv_lang["lbl_server_list"]="Usar um site que já exista.";
$pgv_lang["lbl_type_server"]="Informe novo site.";
$pgv_lang["link_as_child"]="Ligar esta pessoa como Filho de uma Família da árvore";
$pgv_lang["link_as_husband"]="Ligar esta pessoa como Marido de uma Família da árvore";
$pgv_lang["link_success"]="Ligação incluída com sucesso";
$pgv_lang["link_to_existing_media"]="Ligar a uma mídia existente";
$pgv_lang["max_media_depth"]="O máximo de níveis da pasta Mídia é de #MEDIA_DIRECTORY_LEVELS#";
$pgv_lang["max_upload_size"]="Tamanho máximo para envio:";
$pgv_lang["media_deleted"]="Pasta de Mídia excluída com sucesso.";
$pgv_lang["media_exists"]="Arquivo de Mídia já existe.";
$pgv_lang["media_file"]="Arquivo de Mídia a enviar";
$pgv_lang["media_file_deleted"]="Arquivo de Mídia excluído com sucesso.";
$pgv_lang["media_file_not_moved"]="Não foi possível mover o arquivo de Mídia.";
$pgv_lang["media_file_not_renamed"]="Não foi possível mover nem renomear a Mídia.";
$pgv_lang["media_thumb_exists"]="Miniatura da Mídia já existe.";
$pgv_lang["multiple_gedcoms"]="Esta árvore contém ligações para outra árvore genealógica neste mesmo servidor. Antes de excluir, mover ou renomear a árvore, é necessário excluir estas ligações.";
$pgv_lang["must_provide"]="Informe um ";
$pgv_lang["name_search"]="Nome:";
$pgv_lang["new_repo_created"]="Reposição criada";
$pgv_lang["new_source_created"]="Nova fonte criada com sucesso.";
$pgv_lang["no_changes"]="Não há mudança necessária a ser revisada.";
$pgv_lang["no_known_servers"]="Nenhum Servidor conhecido<br />Nenhum resultado será encontrado";
$pgv_lang["no_temple"]="No Temple - Living Ordinance";
$pgv_lang["no_upload"]="O envio de Mídia não é permitido porque esta opção está desabilitada ou porque a pasta de Mídia não possui permissão de escrita.";
$pgv_lang["paste_id_into_field"]="Paste the following source ID into your editing fields to reference this source ";
$pgv_lang["paste_rid_into_field"]="Para referenciar esta Reposição, Cole a ID da Reposição nos campos de edição ";
$pgv_lang["photo_replace"]="Substituir foto anterior por esta?";
$pgv_lang["privacy_not_granted"]="Você não tem acesso para";
$pgv_lang["privacy_prevented_editing"]="As configurações de privacidade impedem você de alterar esse registro.";
$pgv_lang["record_marked_deleted"]="Este registro foi marcado para ser excluido após a aprovação do Administrador.";
$pgv_lang["replace_with"]= "Substituir por";
$pgv_lang["show_changes"]="Este registro foi atualizado. Clique aqui para exibir as alterações.";
$pgv_lang["thumb_genned"]="Miniatura #thumbnail# gerada automaticamente.";
$pgv_lang["thumbgen_error"]="Miniatura #thumbnail# não foi gerada.";
$pgv_lang["thumbnail"]="Miniatura";
$pgv_lang["title_remote_link"]="Adicionar Ligação Remota";
$pgv_lang["undo"]="Desfazer";
$pgv_lang["undo_all"]="Desfazer todas as alterações";
$pgv_lang["undo_all_confirm"]="Desfazer todas as alterações efetuadas neste GEDCOM?";
$pgv_lang["undo_successful"]="Alterações desfeitas com sucesso.";
$pgv_lang["update_successful"]="Atualização bem sucedida";
$pgv_lang["upload"]="Enviar/Upload";
$pgv_lang["upload_error"]="Um erro ocorreu durante o envio do arquivo GEDCOM.";
$pgv_lang["upload_media"]="Enviar arquivos de Mídia";
$pgv_lang["upload_media_help"]="~#pgv_lang[upload_media]#~<br /><br />Selecione os arquivos de seu computador a serem enviados para o servidor. Todos os arquivos serão gravados na pasta <b>#MEDIA_DIRECTORY#</b> ou em uma de suas sub-pastas.<br /><br />Nomes de pasta especificados serão concatenados com #MEDIA_DIRECTORY#. Exemplo, #MEDIA_DIRECTORY#minhafamilia. A pasta de miniaturas é criada automaticamente caso não exista.<br />";
$pgv_lang["upload_successful"]="Enviado com sucesso";
$pgv_lang["view_change_diff"]="Exibir Diferenças";


?>
