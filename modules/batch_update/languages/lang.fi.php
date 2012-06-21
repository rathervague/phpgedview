<?php
/**
 * Finnish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team. All rights reserved.
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
 * @subpackage BatchUpdate
 * @translator Matti Valve
 * @version $Id: lang.fi.php 4199 2008-10-30 12:54:35Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]="Eräpäivitys";
$pgv_lang["bu_update_chan"]="Päivitä CHAN-tietue";
$pgv_lang["bu_nothing"]="Mitään ei löytynyt.";
$pgv_lang["bu__desc"]="Valitse eräpäivitys tästä luettelosta.";
$pgv_lang["bu_button_update"]="Päivitä";
$pgv_lang["bu_button_update_all"]="Päivitä kaikki";
$pgv_lang["bu_button_delete"]="Poista";
$pgv_lang["bu_button_delete_all"]="Poista kaikkil";

$pgv_lang["bu_search_replace"]="Etsi ja korvaa";
$pgv_lang["bu_search_replace_desc"]="Etsi ja/tai korvaa tietoja GEDCOM-tiedostossasi käyttäen yksinkertaisia hakuja tai edistynyttä kuviotäsmäystä.";
$pgv_lang["bu_search"]="Etsi tekstiä/kuviota";
$pgv_lang["bu_replace"]="Korvaava teksti";
$pgv_lang["bu_method"]="Hakutapa";
$pgv_lang["bu_exact"]="Tarkka teksti";
$pgv_lang["bu_exact_desc"]="Täsmää tarkasti teksti, vaikka se esiintyisi keskellä sanaa.";
$pgv_lang["bu_words"]="Vain kokonaiset sanat";
$pgv_lang["bu_words_desc"]="Täsmää tarkka teksti, ellei se esiinny keskellä sanaa";
$pgv_lang["bu_wildcards"]="Jokerimerkit";
$pgv_lang["bu_wildcards_desc"]="Käytä &laquo;?&raquo; täsmätäksesi yhden erillisen merkin, käytä &laquo;*&raquo; täsmätäksesi nolla tai useampia merkkejä.";
$pgv_lang["bu_regex"]="Normaalimuoto";
$pgv_lang["bu_regex_desc"]="Normaalimuodot ovat edsitynyt kuviontäsmäystekniikka.  Katso <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/en/regexp.reference.php</a> lisätietoja varten.";

$pgv_lang["bu_regex_bad"]="Normaalimuodossa on virhe.  Sitä ei voi käyttää.";
$pgv_lang["bu_case"]="Kirjaintasosta riippumaton";
$pgv_lang["bu_case_desc"]="Rastita tämä ruutu verrataksesi sekä pien- että suuraakkosia.";

$pgv_lang["bu_birth_y"]="Lisää puuttuvat syntymätiedot";
$pgv_lang["bu_birth_y_desc"]="Voit parantaa PGV:n toimintaa huolehtimalla, että kaikilla henkilöillä on &laquo;elämä alkoi&raquo;-tapahtuma.";

$pgv_lang["bu_death_y"]="Lisää puuttuvat kuolintiedot";
$pgv_lang["bu_death_y_desc"]="Voit parantaa PGV:n toimintaa huolehtimalla, että kaikilla henkilöillä on (kun aiheellista) &laquo;elämä päättyi&raquo;-tapahtuma.";

$pgv_lang["bu_married_names"]="Lisää puuttuvat avionimet";
$pgv_lang["bu_married_names_desc"]="On helpompi etsiä avioituneita naisia merkitsemällä heidän avionimensä.<br/>Kaikki naiset eivät kuitenkaan ota aviomiehensä sukunimeä, joten huolehdi oikeiden tietojen syöttämisestä GEDCOM-tiedostoosi.";

$pgv_lang["bu_surname_option"]="Sukunimioptio";
$pgv_lang["bu_surname_replace"]="Aviovaimon sukunimi korvattu aviomiehen sukunimellä";
$pgv_lang["bu_surname_add"]="Aviovaimon tyttönimestä tulee uusi etunimi";
?>
