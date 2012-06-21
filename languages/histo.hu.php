<?php
/**
 * File used to display Historical facts on individual page
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team
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
 * @author PGV Developers
 * @author Hrotkó Gábor <roti@al.pmmf.hu>
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: histo.hu.php 4194 2008-10-30 10:45:46Z fisharebest $
 *
 *
 * Each line is a GEDCOM style record to describe an event, including newline chars (\n)
 * File to be renamed : histo.xx.php where xx is language code
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 820\n2 NOTE Álmos fejedelem született";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 895\n2 NOTE Honfoglalás";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 895\n2 NOTE Árpád fejedelem";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 947\n2 NOTE Fajsz/Falics fejedelem";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 955\n2 NOTE Taksony fejedelem";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 972\n2 NOTE Géza fejedelem";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 997\n2 NOTE Vajk fejedelem, később I. Istvánnak lett keresztelve";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 25 DEC 1000\n2 NOTE I. István (Szent István) király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 2 SEP 1031\n2 NOTE Imre herceg halála";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 15 AUG 1038\n2 NOTE Péter király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1041\n2 NOTE Aba Sámuel király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1044\n2 NOTE Péter király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1046\n2 NOTE I. András király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1061\n2 NOTE I. Béla király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1063\n2 NOTE Salamon király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1074\n2 NOTE I. Géza király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 25 APR 1077\n2 NOTE I. László király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 29 JUL 1095\n2 NOTE Könyves Kálmán király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 3 FEB 1116\n2 NOTE II. István király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 28 APR 1131\n2 NOTE II. Béla király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 16 FEB 1141\n2 NOTE II. Géza király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 31 MAY 1162\n2 NOTE III. István király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 4 MAR 1172\n2 NOTE III. Béla király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 24 APR 1196\n2 NOTE Imre király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 26 AUG 1204\n2 NOTE III. László király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 29 MAY 1205\n2 NOTE II. András király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 25 SEP 1235\n2 NOTE IV. Béla király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 3 MAY 1270\n2 NOTE V. István király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 3 SEP 1272\n2 NOTE IV. László király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 23 JUL 1290\n2 NOTE III. András király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 27 AUG 1301\n2 NOTE Vencel (László) király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 5 DEC 1305\n2 NOTE Ottó király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 10 OCT 1307\n2 NOTE Ottó király lemond trónjáról és I. Károly király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 21 JUL 1342\n2 NOTE I. Lajos király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 17 SEP 1382\n2 NOTE Mária királynő trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 31 DEC 1385\n2 NOTE Mária királynő lemond trónjáról és II. Károly király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 24 FEB 1386\n2 NOTE II. Károly király meghal és Mária királynő trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 31 MAR 1387\n2 NOTE Zsigmond király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 18 DEC 1437\n2 NOTE I. Albert király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 17 JUL 1440\n2 NOTE I. Ulászló király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1445\n2 NOTE V. László király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 24 JAN 1458\n2 NOTE Hunyadi Mátyás király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 26 APR 1490\n2 NOTE II. Ulászló király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 13 MAR 1516\n2 NOTE II. Lajos király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 29 AUG 1526\n2 NOTE Mohácsi csata";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 3 NOV 1527\n2 NOTE I. Ferdinánd király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1564\n2 NOTE Miksa király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1576\n2 NOTE Rudolf király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 19 NOV 1608\n2 NOTE II. Mátyás király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 1 JUL 1618\n2 NOTE II. Ferdinánd király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 15 FEB 1637\n2 NOTE III. Ferdinánd király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 27 JUL 1657\n2 NOTE I. Lipót király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 21 MAY 1703\n2 NOTE Rákóczi-szabadságharc";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 5 MAY 1705\n2 NOTE I. József király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 17 APR 1711\n2 NOTE III. Károly király trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 20 OCT 1740\n2 NOTE Mária Terézia trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 29 NOV 1780\n2 NOTE II. József a trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 15 NOV 1790\n2 NOTE II. Lipót király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 6 JUN 1792\n2 NOTE I. Ferenc király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 2 MAR 1835\n2 NOTE I. Ferenc király halála és V. Ferdinánd trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 15 MAR 1848\n2 NOTE Forradalom és szabadságharc";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 2 DEC 1848\n2 NOTE V. Ferdinánd lemond és Ferenc József király a trónra kerül";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 21 NOV 1916\n2 NOTE Ferenc József király halála";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 30 DEC 1916\n2 NOTE IV. Károly király koronázása";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 11 NOV 1918\n2 NOTE Első világháború";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 13 NOV 1918\n2 NOTE IV. Károly király lemond a kormányzásról";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 16 NOV 1918\n2 NOTE A Népköztársaság kikiáltásával megszűnt a királyság.";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 4 JUN 1920\n2 NOTE Versailles-ban aláírják a trianoni kastélyban a békeszerződést";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 8 MAY 1945\n2 NOTE Második világháború";
$histo[] = "1 EVEN\n2 TYPE Történelem\n2 DATE 23 OCT 1956\n2 NOTE Forradalom és szabadságharc";
?>
