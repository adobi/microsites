<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define('FACEBOOK_APPLICATION_ID', '164112073685693');
define('FACEBOOK_APPLICATION_SECRET', '96faf9468a317d28331ef5ad7a9df0fe');
define('FACEBOOK_PAGE_ID', '226467557415341');
define('FACEBOOK_APPLICATION_URL', 'https://apps.facebook.com/'.FACEBOOK_APPLICATION_ID.'/');
//define('FACEBOOK_APPLICATION_URL', 'http://www.facebook.com/pages/alma/'.FACEBOOK_PAGE_ID.'/?sk=app_'.FACEBOOK_APPLICATION_ID);

define('FACEBOOK_PAYMENT_APP_ID', '239232439472925');
define('FACEBOOK_PAYMENT_APP_SECRET', '0d405b0cc29d777204609a755dfe198f');




/* End of file constants.php */
/* Location: ./application/config/constants.php */