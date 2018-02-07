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


define('PROTOCOL', (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') );
define('ASSETS_URL', IS_LIVE ? "http://images.gmanews.tv/res/" :
                (BASE_URL . "res/"));
define('R3P_URL', BASE_URL . "res/thirdparty/");
define('JS_URL', BASE_URL . "res/js/");
define('CSS_URL', BASE_URL . "res/css/");
define('DATA_URL', IS_LIVE ? PROTOCOL.'data.gmanetwork.com/gno/' : PROTOCOL.'s3-ap-southeast-1.amazonaws.com/test.gmanetwork.com/gno/');
define('DATA2_URL', IS_LIVE ? PROTOCOL.'data2.gmanetwork.com/gno/' : PROTOCOL.'s3-ap-southeast-1.amazonaws.com/test.gmanetwork.com/gno/');

define('FB_ID', IS_LOCAL ? '855597087842465' :
                (IS_DEV ? '797582773643897' : '255951164473730'));
define('MYSTREAM_ACTIVE', false);

if (defined('ENVIRONMENT')) {

	switch (ENVIRONMENT) {
		case 'development':

			$GOOGLE_ANALYTICS = 'UA-61176667-1';
			$S3_MEDIA = 'http://dev.gmanetwork.com.s3.amazonaws.com/entertainment/';

			$ENTERTAINMENT_DATA = 'http://dev.gmanetwork.com.s3.amazonaws.com/entertainment/data/';
			$ENTERTAINMENT_DATA2 = 'http://dev.gmanetwork.com.s3.amazonaws.com/entertainment/data2/';

			define("DBPASSWORD_GMANEWS", 'arF:van26snElL');
			define("DBUSERNAME_GMANEWS", 'gno_revamped');
			define("DBHDBSNAME_GMANEWS", 'gmanews_revamped');

			break;

		case 'testing':

			$GOOGLE_ANALYTICS = 'UA-67022818-1';
			$S3_MEDIA = 'http://test.gmanetwork.com.s3.amazonaws.com/entertainment/';

			$ENTERTAINMENT_DATA = 'http://test.gmanetwork.com.s3.amazonaws.com/entertainment/data/';
			$ENTERTAINMENT_DATA2 = 'http://test.gmanetwork.com.s3.amazonaws.com/entertainment/data2/';

			define("DBPASSWORD_GMANEWS", 'peD49CaEca');
			define("DBUSERNAME_GMANEWS", 'revamped_test');
			define("DBHDBSNAME_GMANEWS", 'gmanews_revamped_test');

			break;
		case 'production':

			$GOOGLE_ANALYTICS = 'UA-242242-18';
			$S3_MEDIA = 'http://aphrodite.gmanetwork.com/';

			$ENTERTAINMENT_DATA = 'http://data.igma.tv/entertainment/';
			$ENTERTAINMENT_DATA2 = 'http://data.igma.tv/entertainment/';

			define("DBPASSWORD_GMANEWS", 'arF:Twa36ope');
			define("DBUSERNAME_GMANEWS", 'gno2015_access');
			define("DBHDBSNAME_GMANEWS", 'gmanews_2015');

			break;
		default:
			exit('The application environment is not set correctly.');
	}
}

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


/* End of file constants.php */
/* Location: ./application/config/constants.php */