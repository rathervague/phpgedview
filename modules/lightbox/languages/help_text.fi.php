<?php
/**
 * English language file for Lightbox Album module
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PhpGedView developers
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
 * @subpackage Module
 * @version $Id: help_text.fi.php 4207 2008-10-31 14:51:59Z meliza $ 
 * @author Brian Holland
 * @translator Matti Valve 
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6

// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["lb_generalLegend"]		 = "Lightbox Album - General Help";
$pgv_lang["lb_general_help"]		 = "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help1"]		 = "<li>~To view the notes, details, or source associated with an image~<br /><b>Drop-Down Menu:</b><br />Hover over the <b>#pgv_lang[lb_viewedit]#</b> link below the thumbnail and a dropdown menu will appear. The options are <b>#pgv_lang[lb_viewnotes]#</b> (If there are any), <b>#pgv_lang[lb_viewdetails]#</b> and also <b>#pgv_lang[lb_viewsource]#</b>.<br /><br /><b>Viewing:</b><br />Clicking <b>#pgv_lang[lb_viewnotes]#</b> will show a <b>#pgv_lang[lb_balloon_true]#</b> with the Note information inside. Click again to turn off the <b>#pgv_lang[lb_balloon_true]#</b>.<br />Clicking <b>#pgv_lang[lb_viewdetails]#</b> will take you to the Mediaviewer page, and <b>#pgv_lang[lb_viewsource]#</b> will (if authorized) take you to the Source page for the media item.<br /><br /><b>Editing:</b><br />(There are additional Edit options for Editors and above)<br /><br /><b>Opened Lightbox Image:</b><br />When viewing an opened Lightbox image, the <b>#pgv_lang[lb_viewnotes]#</b> and <b>#pgv_lang[lb_viewdetails]#</b> icons can be clicked on the border below the image.<br /><br /></li>";
$pgv_lang["lb_general_help2"]		 = "<li>~Katsoaksesi kuvaa~<br />Näpäytä mitä tahansa pienoiskuvaa. Kuvan nimi ilmestyy esiin tulevan kuvan alle.<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~Zoomaustilan käyttö~<br /><b>HUOM:</b><br />Diaesitys on pysäytettävä, jotta zoomauskuvakkeet näkyisivät.<br /><br /><b>Salli zoomaus:</b><br />Kun vihreä plusmerkki kuvan oikeassa alareunassa näkyy, zoomaus on jo käytössä. Käytä vieritysrullaa koon muuttamiseen (tai käytä näppäimiä  <b>i</b> ja <b>o</b>) Kuvake muuttuu punaiseksi miinukseksi.<br />Kun kuva suurennetaan näyttöä suuremmaksi, drag and drop the image, tai käytä nuolinäppäimiä kuvan siirtämiseksi näytöllä.<br /><br /><b>Estä zoomaus:</b><br />Doubleclick inside the image, tai näpäytä punaista miinusmerkkiä näytön  alalaidassa poistuaksesi zoomaustilasta (tai käytä näppäintä  <b>z</b>)<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~Kuvan sulkeminen~<br />Näpäytä outside of the image, tai, näpäytä punaista <b>X</b>-kuvaketta alhaalla oikealla, tai käytä näppäintä <b>x</b>).<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~Seuraavan tai edellisen kuvan näyttäminen~<br />Kun kuljetat kursoria kuvan päällä silloin, kun se EI ole zoomaustilassa, kuvan oikealle puolelle ilmestyy <b>&gt;</b>-merkki ja vasemmalle  <b>&lt;</b>-merkki. Näpäytä mihin tahansa kuvan oikealla puoliskolla siirtyäksesi seuraavaan kuvaan ja vasemmalla puoliskolla edelliseen kuvaan.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~Mihin tahansa kuvaan siirtyminen kuvastossa~<br />Kun liikutat kursoria noin yhden senttimetrin päässä kuvan yläpuolella, kun ET ole zoomaustilassa, näkyviin ilmestyy pienoiskuvakokoelma. Tarvittaessa siirrä kursoria vasemmalle tai oikealle saadaksesi lisää pienoiskuvia näkyviin tästä kokoelmasta. Näpäytä pienoiskuvaketta avataksesi siihen liittyvän kuvan.<br /><br /><b>Seuraava</b>, <b>Edellinen</b> and <b>Hyppy</b> on mahdollista riippumatta siitä, onko diaesitys menossa tai taukotilassa.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~Diaesityksen käynnistäminen~<br />Näpäytä Käynnistä-kuvaketta alhaalla vasemmalla. Mikäli mukana on äänitiedosto, kaiutinkuvake ilmestyy näkyviin. Näpäytä kaiutinkuvaketta käynnistääksesi tai sulkeaksesi äänirata. Näpäytä taukopainiketta diaesityksen pysäyttämiseksi.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~Navigointi ...~<br />Käytä <b>#pgv_lang[view_lightbox]#</b> taulukkoa kuva-kuvaketaulukon oikealla puolella valitaksesi suoraan toisen henkilön kuvastonäkymän.<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~Huomautus:~<br />Sellaiset pienoiskuvat, jotka eivät viittaa kuviin, kuten PDF-tiedostot, äänet, kirjat ja videot, voidaan katsoa erikseen. Ne eivät näy diaesityksessä.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~Huomautus ylläpitäjälle:~<br />Mikäli joku tavanomaista kuvaformaattia (jpg, gif, bmp jne) oleva tiedosto, joka edustaa valokuvaa, todistusta, dokumenttia jne ilmestyy riville <b>Muut</b>, näiden kohteiden <b>#factarray[TYPE]#</b> has not been set for these Media objects.  You may wish to edit the Media object's details to set this value.</li>";
//End Lightbox General Help File ----------------------------------------------------------------------------------------------------------------------------- 

$pgv_lang["lb_tt_balloonLegend"]		= "Album Tab Thumbnail - Notes Link Tooltip";
$pgv_lang["lb_tt_balloon_help"]			= "~#pgv_lang[lb_tt_balloonLegend]#~<br />This option lets you determine whether the \"View Notes\" link should show a \"Balloon\" Tooltip or \"Normal\" Tooltip when clicked. <br /><br />The link shown here show you the Notes associated with a Media item(if available).<br />";

// VERSION 4.1.3 
$pgv_lang["mediatabLegend"]				= "Media-välilehden näkyminen";
$pgv_lang["mediatab_help"]				= "~#pgv_lang[mediatab]#~<br />Tämä valinta määrittelee, näkyykö Media-välilehti sivulla  #pgv_lang[indi_info]#.<br /><br />Mikäli valinta on asetettu tilaan <b>#pgv_lang[hide]#</b>, vain <b>#pgv_lang[lightbox]#</b> välilehti näkyy ja se nimetään muotoon <b>#pgv_lang[media]#</b>.<br />";
$pgv_lang["lb_al_head_linksLegend"]		= "Kuvastovälilehden otsikkolinkin näkyminen";
$pgv_lang["lb_al_head_links_help"]		= "~#pgv_lang[lb_al_head_linksLegend]#~<br />Tällä valinnalla määritellään näkyykö pgv_lang[lightbox]#-välilehden otsikkoalueella olevat Valopöytää ohjaavat linkit kuvakkeina, pelkkänä tekstinä tai kumpanakin.<br /><br />Valinta <b>#pgv_lang[lb_icon]#</b> ei luultavasti ole kovin hyödyllinen, koska silloin ei näe kunkin kuvakkeen toimintaa ennen kuin kursoria liikutetaan kuvakkeen päälle.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]	= "Kuvastovälilehden pienoiskuvalinkkien näkyminen";
$pgv_lang["lb_al_thumb_links_help"]		= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />Tällä valinnalla määritellään näkyykö kunkin pienoiskuvan alla olevassa linkkikentässä kuvake vai teksti. Tässä olevat linkit antavat sinun editoida mediakohteen tiedot tai poistaa sen.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]	= "Pienoiskuvalinkkien näkyminen";
$pgv_lang["lb_ml_thumb_links_help"]		= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />Tällä valinnalla määritellään, näkyvätkö linkit mediakohteiden tietojen yläpuolella olevan linkkialueen multimedialuettelossa vain kuvakkeina, teksteinä vai kumpanakin. Tässä näkyvät linkit sallivat sinun editoida ko. multimediakohdetta. <br /><br />Vaihtoehto <b>#pgv_lang[lb_none]#</b> piilottaa kokonaan nämä linkit jolloin näyttäisi siltä, ettei käyttäjällä ole mitään editointioikeuksia.<br />";
$pgv_lang["lb_ss_speedLegend"]			= "Diaesityksen nopeus";
$pgv_lang["lb_ss_speed_help"]			= "~#pgv_lang[lb_ss_speedLegend]#~<br />Tällä valinnalla määritellään kunkin kuvan esilläoloaika diaesityksessä.<br />";
$pgv_lang["lb_music_fileLegend"]		= "Diaesityksen ääniraita";
$pgv_lang["lb_music_file_help"]			= "~#pgv_lang[lb_music_fileLegend]#~<br />Tällä valinnalla voidaan määritellä, mikä ääniraita soi kun diaesitys on käynnissä. Mikäli tämä kenttä jätetään tyhjäksi, mitään ei soiteta diaesityksen aikana.<br /><br />Vain mp3-typpiset äänitiedostot toimivat.<br />";
$pgv_lang["lb_transitionLegend"]		= "Kuvan siirtymänopeus";
$pgv_lang["lb_transition_help"]			= "~#pgv_lang[lb_transitionLegend]#~<br />Tällä valinnalla määritetään kuvien välinen siirtymänopeus. Sitä käytetään diaesityksessä. Sitä käytetään myös kun siirrytään seuraavaan tai edelliseen kuvaan kun diaesitys ei ole käynnissä.<br /><br />Vaihtoehdolla <b>#pgv_lang[lb_none]#</b> siirtymää ei ole, vaan kuvat korvaavat toisensa suoraan.<br />";
$pgv_lang["lb_url_dimensionsLegend"]	= "Valopöydän URL ikkunan mitat";
$pgv_lang["lb_url_dimensions_help"]		= "~#pgv_lang[lb_url_dimensionsLegend]#~<br />Näpäytettäessä URL pienoiskuvaa, voidaan määritellä valopöydän URL-ikkunan mitat pikseleinä..<br /><br />Tämän tulisi yleensä olla pienempi kuin käytettävänselainikkunan koko ja varmasti pienempi kuin näytön koko.<br />";

?>
