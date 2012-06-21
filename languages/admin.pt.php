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
 * @version $Id: admin.pt.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["user"]="Usuário Autenticado";
$pgv_lang["thumbnail_deleted"]="Miniatura excluída com sucesso.";
$pgv_lang["thumbnail_not_deleted"]="Não foi possível excluir a Miniatura.";
$pgv_lang["step2"]="Passo 2 de 4:";
$pgv_lang["refresh"]="Atualizar";
$pgv_lang["move_file_success"]="Mídia e Miniatura movidas com sucesso.";
$pgv_lang["media_folder_corrupt"]="A pasta de Mídias está corrompida.";
$pgv_lang["media_file_not_deleted"]="Não foi possível excluir arquivo de Mídia.";
$pgv_lang["gedcom_deleted"]="GEDCOM [#GED#] excluido com sucesso.";
$pgv_lang["gedadmin"]="Administrador de GEDCOM";
$pgv_lang["full_name"]="Nome Completo";
$pgv_lang["error_header"]="O arquivo GEDCOM, [#GEDCOM#], não existe no local informado.";
$pgv_lang["confirm_delete_file"]="Confirma exclusão do arquivo?";
$pgv_lang["confirm_folder_delete"]="Confirma exclusão desta pasta?";
$pgv_lang["confirm_remove_links"]="Confirma a exclusão de todas as ligações deste objeto?";
$pgv_lang["manage_gedcoms"]="Gerenciar GEDCOM e editar Privacidade";
$pgv_lang["created_remotelinks"]="Tabela de <i>Ligações Externas</i> criada com sucesso.";
$pgv_lang["created_remotelinks_fail"]="Não foi possível criar a tabela de <i>Ligações Externas</i>.";
$pgv_lang["created_indis"]="Criada com sucesso tabela de <i>Pessoas</i>.";
$pgv_lang["created_indis_fail"]="Incapaz de criar tabela de <i>Pessoas</i>.";
$pgv_lang["created_fams"]="Criada com sucesso tabela de <i>Famílias</i>.";
$pgv_lang["created_fams_fail"]="Incapaz de criar tabela de <i>Famílias</i>.";
$pgv_lang["created_sources"]="Criada com sucesso tabela de <i>Fontes</i>.";
$pgv_lang["created_sources_fail"]="Incapaz de criar tabela de <i>Fontes</i>.";
$pgv_lang["created_other"]="Criada com sucesso <i>Outras</i> tabelas.";
$pgv_lang["created_other_fail"]="Incapaz de criar <i>Outras</i> tabelas.";
$pgv_lang["created_places"]="Criada com sucesso tabela de <i>Locais</i>.";
$pgv_lang["created_places_fail"]="Incapaz de criar tabela de <i>Locais</i>.";
$pgv_lang["created_placelinks"]="Tabela de <i>Ligações de Locais</i> criada com sucesso.";
$pgv_lang["created_placelinks_fail"]="Não foi possível criar a tabela de <i>Ligações para Locais</i>.";
$pgv_lang["created_media_fail"]="Não foi possível criar a tabela de <i>Mídia</i>.";
$pgv_lang["created_media_mapping_fail"]="Não foi possível criar a tabela de <i>Mapeamento de Mídia</i>.";
$pgv_lang["no_thumb_dir"]="Pasta de Miniaturas não existe e não foi possível cria-la.";
$pgv_lang["move_to"]="Mover para";
$pgv_lang["folder_created"]="Pasta criada";
$pgv_lang["folder_no_create"]="Não foi possível criar a pasta";
$pgv_lang["security_no_create"]="Aviso: Não foi possível criar o arquivo <b><i>index.php</i></b> em ";
$pgv_lang["security_not_exist"]="Aviso: O arquivo <b><i>index.php</i></b> não existe em ";
$pgv_lang["label_add_search_server"]="Adicionar IP";
$pgv_lang["label_add_server"]="Adicionar";
$pgv_lang["label_ban_server"]="Enviar";
$pgv_lang["label_delete"]="Excluir";
$pgv_lang["add_gedcom"]="Incluir arquivo GEDCOM";
$pgv_lang["add_new_gedcom"]="Criar um novo arquivo GEDCOM";
$pgv_lang["admin_approved"]="Sua conta em #SERVER_NAME# foi aprovada";
$pgv_lang["admin_gedcom"]="Gerenciar GEDCOM";
$pgv_lang["admin_geds"]="Gerenciar GEDCOM e Dados";
$pgv_lang["admin_info"]="Informativo";
$pgv_lang["admin_site"]="Gerenciar Site";
$pgv_lang["administration"]="Administração";
$pgv_lang["ansi_encoding_detected"]="Detectado arquivo com configuração ANSI.  PhpGedView trabalha melhor com arquivos configurados em UTF-8.";
$pgv_lang["ansi_to_utf8"]="Converter esse arquivo GEDCOM do formato ANSI (ISO-8859-1) para UTF-8?";
$pgv_lang["apply_privacy"]="Aplicar medidas de privacidade?";
$pgv_lang["bytes_read"]="Bytes Lidos";
$pgv_lang["calc_marr_names"]="Deduzindo Nomes de Casada";
$pgv_lang["change_id"]="Alterar ID da Pessoa para";
$pgv_lang["choose_priv"]="Selecione o nível de privacidade:";
$pgv_lang["cleanup_places"]="Limpeza de Locais";
$pgv_lang["click_here_to_go_to_pedigree_tree"]="Clique aqui para ir para a Árvore Genealógica.";
$pgv_lang["comment"]="Comentários do Administrador sobre o Usuário";
$pgv_lang["comment_exp"]="Comentário do administrador";
$pgv_lang["configuration"]="Configuração";
$pgv_lang["confirm_user_delete"]="Tem certeza que deseja excluir o usuário";
$pgv_lang["create_user"]="Criar Usuário";
$pgv_lang["dataset_exists"]="Um arquivo GEDCOM com este nome já foi importado para esse banco de dados.";
$pgv_lang["day_before_month"]="Dia antes do Mês (DD MM YYYY)";
$pgv_lang["do_not_change"]="Não alterar";
$pgv_lang["download_gedcom"]="Download GEDCOM";
$pgv_lang["download_note"]="Observação: O processamento, que é feito antes do download, de GEDCOMs muito grandes pode ser demorado. Caso o PHP encerre o processamento por \"time out\", o arquivo poderá estar imcompleto.<br /><br />Para saber se o arquivo está integro, utilize um editor de texto qualquer e verifique se a última linha do arquivo GEDCOM é um <b>0&nbsp;TRLR</b>. <u>Não</u> salve o arquivo GEDCOM após verifica-lo.<br /><br />O processo de \"download\" pode demorar tanto quanto para o processo de envio do GEDCOM.";
$pgv_lang["editaccount"]="Permite este usuário alterar as informações de sua conta";
$pgv_lang["empty_dataset"]="Você deseja apagar os dados antigos e substituir por estes novos?";
$pgv_lang["empty_lines_detected"]="Detectado linhas vazias em seu arquivo GEDCOM.  Na 'Limpeza' essas linhas vazias serão removidas.";
$pgv_lang["error_ban_server"]="Endereço de IP inválido.";
$pgv_lang["error_delete_person"]="Selecione a pessoa, cuja ligação remota, você deseja excluir.";
$pgv_lang["error_header_write"]="O arquivo GEDCOM, [#GEDCOM#], não tem permissão para escrita. Verifique atributos e direitos de acesso.";
$pgv_lang["error_siteauth_failed"]="Falhou a autenticação com o site remoto";
$pgv_lang["error_url_blank"]="Favor preencher o título e o endereço do site";
$pgv_lang["error_view_info"]="Selecione uma pessoa para ver as informações dela.";
$pgv_lang["example_date"]="Exemplo de data inválida do seu GEDCOM:";
$pgv_lang["example_place"]="Exemplo de um lugar inválido de sua GEDCOM:";
$pgv_lang["found_record"]="Registro encontrado";
$pgv_lang["ged_import"]="Importar GEDCOM";
$pgv_lang["gedcom_downloadable"]="Este arquivo de GEDCOM pode ser copiado pela Internet!<br />Leia a seção de Segurança no arquivo <a href=\"readme.txt\"><b>readme.txt</b></a> e saiba como corrigir o problema.";
$pgv_lang["gedcom_file"]="Arquivo GEDCOM";
$pgv_lang["img_admin_settings"]="Configuração de Edit Image Manipulation";
$pgv_lang["import_complete"]="Importação terminada.";
$pgv_lang["import_marr_names"]="Importar nomes de casada";
$pgv_lang["import_options"]="Opções de Importação";
$pgv_lang["import_progress"]="Importação em progresso, Aguarde ...";
$pgv_lang["import_statistics"]="Estatística da Importação";
$pgv_lang["import_time_exceeded"]="Tempo máximo de processamento para a importação dos dados foi excedido. Para prosseguir com a importação do GEDCOM é necessário clicar no botão Continuar.";
$pgv_lang["inc_languages"]="Idiomas";
$pgv_lang["invalid_dates"]="Detectado formato inválido de datas, na 'Limpeza' esses dados serão modificados para o formato DD MMM YYYY (ex. 1 JAN 2004).";
$pgv_lang["invalid_header"]="Detectado linhas antes do cabeçalho do GEDCOM (0 HEAD).  Na 'Limpeza' essas linhas serão removidas.";
$pgv_lang["label_added_servers"]="Adicionar Servidores Remotos";
$pgv_lang["label_banned_servers"]="Banir sites por IP";
$pgv_lang["label_families"]="Familias";
$pgv_lang["label_gedcom_id2"]="ID do Banco de Dados:";
$pgv_lang["label_individuals"]="Individuos";
$pgv_lang["label_manual_search_engines"]="IPs de Robos de Sites de Pesquisa";
$pgv_lang["label_new_server"]="Novo site";
$pgv_lang["label_password_id"]="Senha";
$pgv_lang["label_remove_ip"]="Banir o endereço de IP (Ex: 198.128.*.*):";
$pgv_lang["label_remove_search"]="IPs de robôs de sites de pesquisa tais como Google, Yahoo, etc..";
$pgv_lang["label_server_info"]="Todas as pessoas ligadas remotamente pelo site:";
$pgv_lang["label_server_url"]="Site URL/IP";
$pgv_lang["label_username_id"]="Usuário";
$pgv_lang["label_view_local"]="Exibir dados locais da pessoa";
$pgv_lang["label_view_remote"]="Exibir dados remotos da pessoa";
$pgv_lang["link_manage_servers"]="Gerenciar os Sites";
$pgv_lang["logfile_content"]="Conteúdo do arquivo de log";
$pgv_lang["macfile_detected"]="Detectado arquivo Macintosh.  Na 'Limpeza' seu arquivo será convertido para um arquivo DOS.";
$pgv_lang["merge_records"]="Consolidar Registros";
$pgv_lang["month_before_day"]="Mês antes do Dia (MM DD YYYY)";
$pgv_lang["performing_validation"]="Validando o arquivo GEDCOM...";
$pgv_lang["pgv_registry"]="Exibir outros sites usando PhpGedView";
$pgv_lang["phpinfo"]="Informações do PHP";
$pgv_lang["place_cleanup_detected"]="Detectado codificação inválida de Local.  Esses erros precisariam ser corrigidos.  O exemplo seguinte mostra o local inválido que foi detectado: ";
$pgv_lang["please_be_patient"]="Por Favor, seja paciente !!!";
$pgv_lang["reading_file"]="Lendo arquivo GEDCOM";
$pgv_lang["readme_documentation"]="Documentação";
$pgv_lang["remove_ip"]="Excluir IP";
$pgv_lang["rootid"]="Pessoa raiz da Árvore Genealógica";
$pgv_lang["select_an_option"]="Escolha uma opção abaixo:";
$pgv_lang["siteadmin"]="Admistrador do Site";
$pgv_lang["skip_cleanup"]="Não Limpar";
$pgv_lang["time_limit"]="Limite de Tempo:";
$pgv_lang["title_manage_servers"]="Gerenciar Sites";
$pgv_lang["title_view_conns"]="Exibir Conexões";
$pgv_lang["update_myaccount"]="Alterar Minha Conta";
$pgv_lang["update_user"]="Alterar Conta do Usuário";
$pgv_lang["upload_gedcom"]="Enviar GEDCOM";
$pgv_lang["user_auto_accept"]="Aceitar, imediatamente, as alterações feitas por este usuário ";
$pgv_lang["user_contact_method"]="Método preferido de Contato";
$pgv_lang["user_create_error"]="Não foi possível criar o usuário. Tente novamente.";
$pgv_lang["user_created"]="Usuário criado com sucesso.";
$pgv_lang["user_default_tab"]="Ficha a ser exibida na página de dados de pessoas";
$pgv_lang["valid_gedcom"]="Detectado GEDCOM válido.  A limpeza não é necessária.";
$pgv_lang["validate_gedcom"]="Validar GEDCOM";
$pgv_lang["verified"]="Validou sua conta";
$pgv_lang["verified_by_admin"]="Aprovado pelo Administrador";
$pgv_lang["verify_gedcom"]="Checar GEDCOM";
$pgv_lang["verify_upload_instructions"]="Um arquivo GEDCOM com este nome já existe. Se você escolher continuar, o arquivo GEDCOM do servidor será substituido pelo GEDCOM que será enviado e o processo de importação terá inicio logo após. Para manter o arquivo GEDCOM do servidor inalterado clique CANCELAR.";
$pgv_lang["view_changelog"]="Exibir o arquivo changelog.txt";
$pgv_lang["view_logs"]="Exibir Logs";
$pgv_lang["view_readme"]="Leia o arquivo readme.txt";
$pgv_lang["visibleonline"]="Visível para outros usuários quando on-line";
$pgv_lang["visitor"]="Visitante";
$pgv_lang["you_may_login"]=" pelo administrador do site. Agora você pode acessar o  Site clicando no link abaixo:";


?>
