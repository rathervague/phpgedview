<?php


// Determine what locale to use
switch (PHP_OS)
{
	case 'WINNT':
	case 'WIN32':
		$locale = 'turkish';
		break;

	case 'FreeBSD':
	case 'NetBSD':
	case 'OpenBSD':
		$locale = 'tr_TR.ISO8859-9';
		break;

	default:
		$locale = 'tr_TR';
		break;
}

// Attempt to set the locale
setlocale(LC_CTYPE, $locale);


// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_encoding'			=>	'iso-8859-9',
'lang_multibyte'		=>	false,

// Notices
'Bad request'			=>	'Hatalı Talep.Takip ettiğiniz link yanlış ya da güncel değil',
'No view'				=>	'Bu forumları görmek için gerekli yetkiye sahip değilsiniz.',
'No permission'			=>	'Bu sayfaya erişmek için  için gerekli yetkiye sahip değilsiniz.',
'Bad referrer'			=>	'Kötü HTTP_REFERER. Gayrı resmi kaynaktan bu sayfaya yönlendirildiniz. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the PunBB documentation.',

// Topic/forum indicators
'New icon'				=>	'Yeni iletiler var.',
'Normal icon'			=>	'<!-- -->',
'Closed icon'			=>	'Bu başlık kapandı.',
'Redirect icon'			=>	'Yönlendirilmiş forum',

// Miscellaneous
'Announcement'			=>	'Duyuru',
'Options'				=>	'Seçenekler',
'Actions'				=>	'Faaliyetler',
'Submit'				=>	'Onayla',	// "name" of submit buttons
'Ban message'			=>	'Bu forumdan banlandınız.',
'Ban message 2'			=>	'Ban kaldırılma tarihi ',
'Ban message 3'			=>	'Banlayan yönetici bu mesajı bu mesajı size bıraktı:',
'Ban message 4'			=>	'Forum yöneticisiyle iletişim kurmak için:',
'Never'					=>	'Asla',
'Today'					=>	'Bugün',
'Yesterday'				=>	'Dün',
'Info'					=>	'Bilgi',		// a common table header
'Go back'				=>	'Geri',
'Maintenance'			=>	'Bakım',
'Redirecting'			=>	'Yönlendiriliyor',
'Click redirect'		=>	'Sayfaya hemen gitmek için buraya tıklayınız.(ya da tarayıcınız sizi otomatik olarak yönlendirmiyorsa)',
'on'					=>	'Açık',		// as in "BBCode is on"
'off'					=>	'Kapalı',
'Invalid e-mail'		=>	'Girdiğiniz e-posta adresi geçerli değil.',
'required field'		=>	'forumda dolurulması zorunludur.',	// for javascript form validation
'Last post'				=>	'Son gönderilen ileti',
'by'					=>	'gönderen',	// as in last post by someuser
'New posts'				=>	'Yeni&nbsp;iletiler',	// the link that leads to the first new post (use &nbsp; for spaces)
'New posts info'		=>	'Bu başlıktaki en yeni iletiye git.',	// the popup text for new posts links
'Username'				=>	'Kullanıcı ismi',
'Password'				=>	'Şifre',
'E-mail'				=>	'e-posta',
'Send e-mail'			=>	'e-posta gönder',
'Moderated by'			=>	'Denetmen: ',
'Registered'			=>	'Kayıtlı',
'Subject'				=>	'Konu başlığı',
'Message'				=>	'Mesaj',
'Topic'					=>	'Başlık',
'Forum'					=>	'Forum',
'Posts'					=>	'İletiler',
'Replies'				=>	'Cevaplar',
'Author'				=>	'Yazan',
'Pages'					=>	'Sayfalar',
'BBCode'				=>	'BBCode',	// You probably shouldn't change this
'img tag'				=>	'[img] tag',
'Smilies'				=>	'Gülen yüzler',
'and'					=>	've',
'Image link'			=>	'resim',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'yazdı',	// For [quote]'s
'Code'					=>	'Kod',		// For [code]'s
'Mailer'				=>	'Posta servisi',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'	=>	'Önemli Bilgi',
'Write message legend'	=>	'Mesajınızı yazıp onaylayın.',

// Title
'Title'					=>	'Başlık',
'Member'				=>	'Üye',	// Default title
'Moderator'				=>	'Denetmen',
'Administrator'			=>	'Yönetici',
'Banned'				=>	'Banlanan',
'Guest'					=>	'Misafir',

// Stuff for include/parser.php
'BBCode error'			=>	'Hatalı BBCode sözdizimi.',
'BBCode error 1'		=>	'[quote] tagını yazmadınız.',
'BBCode error 2'		=>	'[code] tagı kapatılmadı.',
'BBCode error 3'		=>	'[code] tagını yazmadınız.',
'BBCode error 4'		=>	'Bir ya da birden fazla [quote] tagı kapanma hatası.',
'BBCode error 5'		=>	'Bir ya da birden fazla [/quote] tagı başlatma hatası.',

// Stuff for the navigator (top of every page)
'Index'					=>	'Anasayfa',
'User list'				=>	'Kullanıcılar',
'Rules'					=>  'Kurallar',
'Search'				=>  'Arama',
'Register'				=>  'Kayıt',
'Login'					=>  'Giriş',
'Not logged in'			=>  'Giriş yapmadınız.',
'Profile'				=>	'Profil',
'Logout'				=>	'Çıkış',
'Logged in as'			=>	'Giriş yapan',
'Admin'					=>	'Yönetim',
'Last visit'			=>	'Son ziyaret',
'Show new posts'		=>	'En yeni iletiler',
'Mark all as read'		=>	'Hepsini okundu olarak işaretle',
'Link separator'		=>	'',	// The text that separates links in the navigator

// Stuff for the page footer
'Board footer'			=>	'Board footer',
'Search links'			=>	'Arama bağlantıları',
'Show recent posts'		=>	'Yeni iletileri göster',
'Show unanswered posts'	=>	'Cevaplanmayan iletileri göster',
'Show your posts'		=>	'İletilerimi göster',
'Show subscriptions'	=>	'Üye olduğum konular.',
'Jump to'				=>	'Atla',
'Go'					=>	' Git',		// submit button in forum jump
'Move topic'			=>  'Konu taşı',
'Open topic'			=>  '',
'Close topic'			=>  'Konu kapat',
'Unstick topic'			=>  'Konudaki sabit özelliğini kaldır',
'Stick topic'			=>  'Konuyu sabitle',
'Moderate forum'		=>	'Forumu kısıtla',
'Delete posts'			=>	'Çoklu iletileri sil',
'Debug table'			=>	'Hata ayıklama bilgileri',

// For extern.php RSS feed
'RSS Desc Active	'	=>	'İlgili en yeni aktif başlıklar',	// board_title will be appended to this string
'RSS Desc New'			=>	'İlgili en yeni başlık',					// board_title will be appended to this string
'Posted'				=>	'Gönderildi'	// The date/time a topic was started

);
