<?PHP
// CONSTANTS
define('APPNAME', 	'MMFX');
define('CAPTION', 	'Building Tomorrow\'s Legacy Today');
define('COMPANY', 	'Mastermind FX Empire Ltd.');
define('SUMMARY', 	'Mastermind FX Empire Ltd. Located at Kerues Place, No. 47 Hospital Road, Ekpan, Warri, Delta-State');
define('KEYWORDS', 	'mmfx,mastermind empire,mastermind fx empire,investment company lagos,hwp labs,tugbeh emmanuel');
define('COPYRIGHT',	'Copyright &copy; 2021 '.COMPANY);
define('EMAIL',			'');
define('EMAIL_2',		'');
define('PHONE',			'');
define('PHONE_2',		'');
define('PHONE_3',		'');
define('ADDRESS',		'Kerues Place, No. 47 Hospital Road, Ekpan, Warri, Delta-State');
define('THEME_PRI',	'#E8A516');
define('THEME_SEC',	'#562A45');
define('THEME_ALT',	'');

// APACHE
define('SERVER', 		'mmfxcomn');
define('DATABASE',	SERVER.'_db');
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	define('USERNAME',	'root');
	define('PASSWORD',	'');
} else {
	define('USERNAME',	SERVER.'_root');
	define('PASSWORD', 	'_Strongp@ssw0rd');
}

// ISP
define('INDEX', 		'index.php');
define('DOMAIN', 		'mmfx.com.ng');
define('CPANEL', 		'http://'.DOMAIN.'/cpanel');
define('WEBMAIL', 	'http://'.DOMAIN.'/webmail');;
define('WEBMAIL_1',	'info@'.DOMAIN);
define('WEBMAIL_2',	'support@'.DOMAIN);
define('WEBMAIL_3',	'admin@'.DOMAIN);
define('VERSION',		'4.24.12.20');
define('HOSTED',		'2020-12-24');
define('REVISED',		'2021-01-02');

// META TAGS
$m = array();
$m['author'] =					'HWP Labs';
$m['classification'] = 	'Enterprise Application Software';
$m['copyright'] = 			date('Y');
$m['coverage'] = 				'Nigeria';
$m['description'] = 		SUMMARY;
$m['designer'] = 				'Tugbeh, E.O.';
$m['keywords'] = 				KEYWORDS;
$m['language'] = 				'en';
$m['owner'] = 					COMPANY;
$m['reply_to'] = 				WEBMAIL_1;
$m['revised'] = 				REVISED;
$m['robots'] = 					'index,follow';
$m['theme_color'] = 		THEME_PRI;
$m['url'] = 						'https://'.DOMAIN.'/';
$m['viewport'] = 				! isset($page_ctx_viewport)? '': 'width=device-width, initial-scale=1.0';
$m['title'] = 					! isset($page_ctx_title)? COMPANY: $page_ctx_title.' - '.APPNAME;
$META = (object)$m;
?>