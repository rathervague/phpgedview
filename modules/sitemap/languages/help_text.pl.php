<?php
/**
 * English Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team. All rights reserved.
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
 * @subpackage SiteMap
 * @version $Id: help_text.pl.php 5177 2009-03-06 16:58:09Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["SITEMAP"]				= "Mapa strony - informacje";
$pgv_lang["SITEMAP_help"]			= "~#pgv_lang[SITEMAP]#~<br /><br />Używając tej strony możesz wygenerować plik mapy strony. Mapa strony może być używana przez wyszukiwarki do optymalnego indeksowania tej strony. Wygenerowany zostanie plik zawierający odnośniki do wszystkich stron, które chcesz aby były pokazane przez wyszukiwaki. (np. Google)<br/>To narzędzie generuje plik mapy strony dla danego pliku GEDCOM i (jeśli więcej niż jeden plik mapy strony jest wygenerowany) plik indeksów strony. Wygenerowany plik powinien być umieszczony w katalogu głównym phpGedView.<br/>Obecnie tylko Google używa plików mapy strony. Więcej informacji dostępnych jest na stronie: <br/><a href=\"https://www.google.com/webmasters/sitemaps/docs/pl/about.html\">Narzędzia Google dla webmasterów</a>";

$pgv_lang["SM_GEDCOM_SELECT"]		= "Wybierz pliki GEDCOM";
$pgv_lang["SM_GEDCOM_SELECT_help"]	= "~#pgv_lang[SM_GEDCOM_SELECT]#~<br /><br />Wybierz pliki GEDCOM, dla których chcesz wygenerować plik mapy strony. Wybierz co najmniej jeden.<br/>Gdy będzie zaznaczona opcja \"Brak linków do prywatnych informacji\", tylko odnośniki do informacji dostępnych publicznie będą załączone.";

$pgv_lang["SM_ITEM_SELECT"]			= "Wbierz informacje do zamieszczenia";
$pgv_lang["SM_ITEM_SELECT_help"]	= "~#pgv_lang[SM_ITEM_SELECT]#~<br /><br />Wybierz elementy, które będą zamieszczone w pliku mapy strony. Dla wszystkich zaznaczonych elementów wybierz priorytet. Ten priorytet odnosi się do innych priorytetów w pliku.<br/>Również możesz określić częstotliwość zmian na stronie. Jest to częstotliwość z jaką mogą być zmieniane informacje na stronie. Ta opcja wpływa na czas pomiędzy kolejnymi wizytami mechanizmów wyszukiwarek i może mieć wpływ na ruch jaki ta strona generuje.";

?>
