<?php


// Determine what locale to use
switch (PHP_OS)
{
	case 'WINNT':
	case 'WIN32':
		$locale = 'slovenian';
		break;

	case 'FreeBSD':
	case 'NetBSD':
	case 'OpenBSD':
		$locale = 'sl_SI.UTF-8';
		break;

	default:
		$locale = 'sl_SI.UTF-8';
		break;
}

// Attempt to set the locale
setlocale(LC_CTYPE, $locale);


// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_encoding'			=>	'UTF-8',
'lang_multibyte'		=>	false,

// Notices
'Bad request'			=>	'Napačna zahteva. Povazava je nepravilna ali je časovno že pretekla.',
'No view'				=>	'Nimaš dovoljenja za ogled forumov.',
'No permission'			=>	'Nimaš dovoljenja za dostop do te strani.',
'Bad referrer'			=>	'Napačna zahteva. Zahteva prihaja iz neavtoriziranega vira. Če problem ne popusti preveri če je pravilno nastavljen \'Base URL\' v Admin/Opcije in če dostopaš do foruma s tem URL nalovom. Več informacij najdi v PunBB dokumentaciji.',

// Topic/forum indicators
'New icon'				=>	'Tukaj so nove objave',
'Normal icon'			=>	'<!-- -->',
'Closed icon'			=>	'Ta tema je zaprta',
'Redirect icon'			=>	'Forum je preusmerjen ',

// Miscellaneous
'Announcement'			=>	'Posebno obvestilo',
'Options'				=>	'Opcije',
'Actions'				=>	'Dejanje',
'Submit'				=>	'Pošlji',	// "name" of submit buttons
'Ban message'			=>	'Do tega foruma imaš prepoved dostopa.',
'Ban message 2'			=>	'Prepoved poteče konec',
'Ban message 3'			=>	'Administrator oziroma moderator, ki ti je prepovedal dostop ti je pustil naslednje sporočilo:',
'Ban message 4'			=>	'Prosim pošlji vprašanje administratorju foruma na',
'Never'					=>	'Nikoli',
'Today'					=>	'Danes',
'Yesterday'				=>	'Včeraj',
'Info'					=>	'Informacija',		// a common table header
'Go back'				=>	'Nazaj',
'Maintenance'			=>	'Vzdrževanje',
'Redirecting'			=>	'Preusmerjanje',
'Click redirect'		=>	'Klikni sem, če nočeš čakati (ali če te brskalnik ni avtomatsko preusmeril)',
'on'					=>	'vključeno',		// as in "BBCode is on"
'off'					=>	'izključeno',
'Invalid e-mail'		=>	'Vnešen e-poštni naslov ni pravilen.',
'required field'		=>	'zahtevano polje v obrazcu.',	// for javascript form validation
'Last post'				=>	'Zadnja objava',
'by'					=>	'',	// as in last post by someuser
'New posts'				=>	'Nove&nbsp;objave',	// the link that leads to the first new post (use &nbsp; for spaces)
'New posts info'		=>	'Pojdi na prvo novo objavo v tej temi.',	// the popup text for new posts links
'Username'				=>	'Uporabniško ime',
'Password'				=>	'Geslo',
'E-mail'				=>	'e-poštni naslov',
'Send e-mail'			=>	'Pošlji e-pošto',
'Moderated by'			=>	'Moderira',
'Registered'			=>	'Registriran',
'Subject'				=>	'Naslov sporočila',
'Message'				=>	'Telo sporočila',
'Topic'					=>	'Tema',
'Forum'					=>	'Forum',
'Posts'					=>	'Objav',
'Replies'				=>	'Odgovori',
'Author'				=>	'Avtor',
'Pages'					=>	'Strani',
'BBCode'				=>	'BBCode',	// You probably shouldn't change this
'img tag'				=>	'[img] oznaka',
'Smilies'				=>	'Smeški',
'and'					=>	'in',
'Image link'			=>	'slika',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'je napisal',	// For [quote]'s
'Code'					=>	'Koda',		// For [code]'s
'Mailer'				=>	'Adresar',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'	=>	'Pomembne informacije',
'Write message legend'	=>	'Napiši sporočilo in pošlji',

// Title
'Title'					=>	'Naslov',
'Member'				=>	'Član',	// Default title
'Moderator'				=>	'Moderator',
'Administrator'			=>	'Administrator',
'Banned'				=>	'Prepovedan',
'Guest'					=>	'Gost',

// Stuff for include/parser.php
'BBCode error'			=>	'Sintaksa BBCode v tem sporočilu je napačna.',
'BBCode error 1'		=>	'Napačna začetna oznaka za [/quote].',
'BBCode error 2'		=>	'Napačna končna oznaka za [code].',
'BBCode error 3'		=>	'Napačna začetna oznaka za  [/code].',
'BBCode error 4'		=>	'Manjka ena ali več oznak za  [quote].',
'BBCode error 5'		=>	'Manjka ena ali več začetnih oznak za  [quote].',

// Stuff for the navigator (top of every page)
'Index'					=>	'Indeks',
'User list'				=>	'Seznam uporabnikov',
'Rules'					=>  'Pravila',
'Search'				=>  'Iskanje',
'Register'				=>  'Registracija',
'Login'					=>  'Prijava',
'Not logged in'			=>  'Nisi prijavljen.',
'Profile'				=>	'Profil',
'Logout'				=>	'Odjava',
'Logged in as'			=>	'Prijavljen kot',
'Admin'					=>	'Administracija',
'Last visit'			=>	'Zadnji obisk',
'Show new posts'		=>	'Prikaži nove objave od zadnjega obiska',
'Mark all as read'		=>	'Označi vse teme kot prebrane',
'Link separator'		=>	'',	// The text that separates links in the navigator

// Stuff for the page footer
'Board footer'			=>	'Noga deske',
'Search links'			=>	'Iči povezave',
'Show recent posts'		=>	'Prikaži novejše objave ',
'Show unanswered posts'	=>	'Prikaži neodgovorjene objave',
'Show your posts'		=>	'Prikaži moje objave',
'Show subscriptions'	=>	'Prikaži naročene teme',
'Jump to'				=>	'Pojdi na',
'Go'					=>	'Pojdi',		// submit button in forum jump
'Move topic'			=>  'Premakni temo',
'Open topic'			=>  'Odpri temo',
'Close topic'			=>  'Zapri temo',
'Unstick topic'			=>  'Odlepi temo',
'Stick topic'			=>  'Prilepi temo',
'Moderate forum'		=>	'Moderiraj forum',
'Delete posts'			=>	'Izbriši objave',
'Debug table'			=>	'Informacije za razhroščevanje',

// For extern.php RSS feed
'RSS Desc Active'		=>	'Novejše  aktivne teme',	// board_title will be appended to this string
'RSS Desc New'			=>	'Najnovejše teme',					// board_title will be appended to this string
'Posted'				=>	'Poslano'	// The date/time a topic was started

);
