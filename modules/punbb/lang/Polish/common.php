<?php

/*
// Determine what locale to use
switch (PHP_OS)
{
	case 'WINNT':
	case 'WIN32':
		$locale = 'polish';
		break;

	case 'FreeBSD':
	case 'NetBSD':
	case 'OpenBSD':
		$locale = 'pl.PL-ASCII';
		break;

	default:
		$locale = 'pl_PL';
		break;
}

// Attempt to set the locale
setlocale(LC_CTYPE, $locale);
*/

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
//'lang_encoding'			=>	'iso-8859-8-2',
'lang_encoding'			=>	'UTF-8',
'lang_multibyte'		=>	false,

// Notices
'Bad request'			=>	'Złe odwołanie. Odnośnik jest nieprawidłowy lub nieaktualny.',
'No view'				=>	'Nie możesz zobaczyć tego forum.',
'No permission'			=>	'Nie możesz wejść na tą stronę.',
'Bad referrer'			=>	'Złe odniesienie HTTP_REFERER. Zostałeś odesłany do tej strony przez nie upoważnione źródło. Jeśli problem będzie nadal występował upewnij się, że \'Adres bazowy\' jest poprawnie ustawiony w Administracja/Opcje i podczas wizyty na forum jesteś pod tym adresem. Więcej informacji znajdziesz w dokumentacji.',

// Topic/forum indicators
'New icon'				=>	'Nowe posty',
'Normal icon'			=>	'<!-- -->',
'Closed icon'			=>	'Wątek zamknięty',
'Redirect icon'			=>	'Forum przeadresowane',

// Miscellaneous
'Announcement'			=>	'Ogłoszenia',
'Options'				=>	'Opcje',
'Actions'				=>	'Akcje',
'Submit'				=>	'Zatwierdź',	// "name" of submit buttons
'Ban message'			=>	'Masz blokadę na te forum.',
'Ban message 2'			=>	'Blokada do końca',
'Ban message 3'			=>	'Administrator lub moderator, który Ci założył blokadę napisał wiadomość:',
'Ban message 4'			=>	'Wszelkie prośby proszę kierować do administratora forum',
'Never'					=>	'Nigdy',
'Today'					=>	'Dziś',
'Yesterday'				=>	'Wczoraj',
'Info'					=>	'Informacje',		// a common table header
'Go back'				=>	'Wróć',
'Maintenance'			=>	'Utrzymanie',
'Redirecting'			=>	'Przekierowywanie',
'Click redirect'		=>	'Kliknij tu jeśli nie chcesz czekać (lub jeśli przeglądarka nie przejdzie sama)',
'on'					=>	'włączone',		// as in "BBCode is on"
'off'					=>	'wyłączone',
'Invalid e-mail'		=>	'Adres e-mail jest nieprawidłowy.',
'required field'		=>	'jest wymaganym polem.',	// for javascript form validation
'Last post'				=>	'Ostatni post',
'by'					=>	'przez',	// as in last post by someuser
'New posts'				=>	'Nowe&nbsp;posty',	// the link that leads to the first new post (use &nbsp; for spaces)
'New posts info'		=>	'Przejdź do pierwszego nowego postu w tym wątku.',	// the popup text for new posts links
'Username'				=>	'Nazwa użytkownika',
'Password'				=>	'Hasło',
'E-mail'				=>	'E-mail',
'Send e-mail'			=>	'Wyślij e-mail',
'Moderated by'			=>	'Moderator',
'Registered'			=>	'Zarejstrowany',
'Subject'				=>	'Temat',
'Message'				=>	'Wiadomość',
'Topic'					=>	'Wątek',
'Forum'					=>	'Forum',
'Posts'					=>	'Posty',
'Replies'				=>	'Odpowiedzi',
'Author'				=>	'Autor',
'Pages'					=>	'Strony',
'BBCode'				=>	'BBCode',	// You probably shouldn't change this
'img tag'				=>	'[img] tag',
'Smilies'				=>	'Emotikonki',
'and'					=>	'i',
'Image link'			=>	'obrazek',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'napisał',	// For [quote]'s
'Code'					=>	'Kod',		// For [code]'s
'Mailer'				=>	'Poczta',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'	=>	'Ważne informacje',
'Write message legend'	=>	'Napisz swoją wiadomość i wyślij',

// Title
'Title'					=>	'Tytuł',
'Member'				=>	'Wiadomość',	// Default title
'Moderator'				=>	'Moderator',
'Administrator'			=>	'Administrator',
'Banned'				=>	'Zbanowany',
'Guest'					=>	'Gość',

// Stuff for include/parser.php
'BBCode error'			=>	'Składnia BBCode w wiadomości jest nieprawidłowa.',
'BBCode error 1'		=>	'Brak taga startowego dla [/quote].',
'BBCode error 2'		=>	'Brak taga końcowego dla [code].',
'BBCode error 3'		=>	'Brak taga startowego dla [/code].',
'BBCode error 4'		=>	'Brak co najmniej jednego taga końcowego dla [quote].',
'BBCode error 5'		=>	'Brak co najmniej jednego taga startowego dla [/quote].',

// Stuff for the navigator (top of every page)
'Index'					=>	'Indeks',
'User list'				=>	'Lista użytkowników',
'Rules'					=>  'Zasady',
'Search'				=>  'Szukaj',
'Register'				=>  'Zarejestruj',
'Login'					=>  'Login',
'Not logged in'			=>  'Nie jesteś zalogowany.',
'Profile'				=>	'Profil',
'Logout'				=>	'Wyloguj',
'Logged in as'			=>	'Zalogowany jako',
'Admin'					=>	'Administracja',
'Last visit'			=>	'Ostatnia wizyta',
'Show new posts'		=>	'Pokaż nowe posty od ostatniej wizyty',
'Mark all as read'		=>	'Zaznacz wszystkie wątki jako przeczytane',
'Link separator'		=>	'',	// The text that separates links in the navigator

// Stuff for the page footer
'Board footer'			=>	'Stopka',
'Search links'			=>	'Wyniki wyszukiwania',
'Show recent posts'		=>	'Pokaż nowe posty',
'Show unanswered posts'	=>	'Pokaż posty bez odpowiedzi',
'Show your posts'		=>	'Pokaż moje posty',
'Show subscriptions'	=>	'Pokaż subskrybowane wątki',
'Jump to'				=>	'Idź do',
'Go'					=>	' Idź ',		// submit button in forum jump
'Move topic'			=>  'Przenieś wątek',
'Open topic'			=>  'Otwórz wątek',
'Close topic'			=>  'Zamknij wątek',
'Unstick topic'			=>  'Odklej wątek',
'Stick topic'			=>  'Przyklej wątek',
'Moderate forum'		=>	'Moderuj forum',
'Delete posts'			=>	'Usuń powtarzające się posty',
'Debug table'			=>	'Informacje debugowania',

// For extern.php RSS feed
'RSS Desc Active'		=>	'Najbardziej aktywne wątki',	// board_title will be appended to this string
'RSS Desc New'			=>	'Najnowsze wątki',				// board_title will be appended to this string
'Posted'				=>	'Wysłano'	// The date/time a topic was started

);
