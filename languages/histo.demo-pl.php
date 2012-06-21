<?php
/**
 * File used to display Polish Historical facts on individual page
 * Each line is a GEDCOM style record to describe an event, including newline chars (\n)
 * File to be renamed : histo.xx.php where xx is language code
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
 * @author Łukasz Wileński <wooc@users.sourceforge.net>
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: histo.demo-pl.php 6561 2009-12-16 17:45:15Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 05 AUG 1772\n2 EVEN Pierwszy rozbiór Polski";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 06 OCT 1788\n2 EVEN Początek obrad Sejmu Wielkiego";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 03 MAY 1791\n2 EVEN Uchwalenie Konstytycji 3. maja";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 23 JAN 1793\n2 EVEN Drugi rozbiór Polski";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 24 MAR 1794\n2 EVEN Wybuch powstania kościuszkowskiego";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 25 NOV 1795\n2 EVEN Trzeci rozbiór Polski";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE BET 16 JUL 1795 AND 18 JUL 1795\n2 EVEN Powstanie Mazurka Dąbrowskiego. Utwór nosił wówczas nazwę \"Pieśń legionów polskich we Włoszech\"";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 29 NOV 1830\n2 EVEN Wybuch powstania listopadowego";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 22 JAN 1863\n2 EVEN Wybuch powstania styczniowego";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 30 APR 1905\n2 EVEN Carski ukaz o tolerancji";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 28 JUL 1914\n2 EVEN Wybuch I wojny światowej";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 11 NOV 1918\n2 EVEN Odzyskanie przez Polskę niepodległości, koniec I wojny światowej";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 12 AUG 1920\n2 EVEN Bitwa warszawska \"Cud nad Wisłą\"";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 01 SEP 1939\n2 EVEN Atak Niemiec hitlerowskich na Polskę";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 17 SEP 1939\n2 EVEN Atak Związku Radzieckiego na Polskę";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 01 AUG 1944\n2 EVEN Wybuch powstania warszawskiego";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 08 MAY 1945\n2 EVEN Koniec II wojny światowej";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 13 DEC 1981\n2 EVEN Wprowadzenie stanu wojennego";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 04 JUN 1989\n2 EVEN Upadek komunizmu w Polsce";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 12 MAR 1999\n2 EVEN Przystąpienie Polski do NATO";
$histo[] = "1 EVEN\n2 TYPE Historia\n2 DATE 01 MAY 2004\n2 EVEN Przystąpienie Polski do Unii Europejskiej";
?>
