<?php

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */

	if ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ){
		$_SERVER['HTTPS'] = 'on';
	}
	
	date_default_timezone_set('Asia/Manila');
	define('DOMAIN_NAME', (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'].'/');
	define('BASE_URL', (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME']
	  .str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
	define('IS_LOCAL', strpos(BASE_URL, 'lgmanetwork') !== false || strpos(BASE_URL, 'local') !== false ? true : false);
	define('IS_TEST', strpos(BASE_URL, 'tgmanetwork') !== false ? true : false);
	define('IS_DEV', strpos(BASE_URL, 'dgmanetwork') !== false ? true : false);
	define('IS_AWSDEV', strpos(BASE_URL, 'aws.dgmanetwork') !== false ? true : false);
	define('IS_LIVE', strpos(BASE_URL, '.gmanetwork.com') !== false ? true : false);
	define('IS_AD_TESTING', !IS_LIVE && true);
	define('LOAD_LOCAL_ASSETS', false);
	define('IS_DUPLICATE', false); // make it false when not in duplicate
	define('PRD2_DUPLICATE_URL', '//prd2.gmanetwork.com/news_duplicate/');
	define('ENVIRONMENT', IS_LOCAL || IS_DEV ? 'development' : (IS_TEST ? 'testing' : 'production'));
	define('BT_KEYWORDS','facemask,skincare,soap,skintoner,skinpeeling,bodywash,glowingskin,clearskin,cleansing,lotion,beautycare,skinlightening,smoothskin,facecare,youngerlookingskin,skinregimen,exposedskincare,koreanskincare,philosophyskincare,skincareclinic,originsskincare,skincareroutine,skincaretips,rosaceaskincare,skincaredoctors,professionalskincare,advancedskincare,purestskincare,skincarespecialist,shampooforoilyhair,hairgrowthshampoo,shampoofordryhair,shampooforthinninghair,hairthickeningshampoo,hairlossshampoo,hairconditioner,hairshampoo,shampooforgreasyhair,shampooforgreyhair,shampooforcurlyhair,shampoofordamagedhair,shampooandconditionerforoilyhair,hairconditionerformen,conditionerforcurlyhair,conditionerfordryhair,leaveinhairconditioner,conditionerforoilyhair,hairconditioneruse,haircolorconditioner,homemadehairconditioner,halitosis,toothbrush,listerine,mouthwash,toothpaste,bestwhiteningtoothpaste,besttoothpaste,bestsensitivetoothpaste,bestnaturaltoothpaste,whatisthebesttoothpaste,worldbesttoothpaste,besttoothpasteforenamel,besttoothpasteforgingivitis,causesofbadbreath,badbreath,badbreathtreatment,badbreathcure,pinoyrecipe,vegetablerecipespinoy,pinoyfoodrecipe,simplepinoyrecipes,pinoyrecipewithpictures,pinoyfoodrecipeswithpictures,cheappinoyrecipe,bestpinoyrecipe,pinoysnacksrecipes,filipinodesserts,filipinodelicacies,filipinodelicacieslist,filipinoviands,filipinocookbook,filipinodishes,filipinoporkdishes,filipinochickendishes,famousfilipinodishes,meatdishesfilipino,filipinofoodlist,filipinobreakfastfood,filipinostreetfood,filipinofoodblog,famousfilipinofood,filipinofoodhistory,nativefilipinofoods,car,carsforsale,vehicle,usedcarsforsale,usedcars,carfind,comparecars,automobile,carreviews,newcar,unionbank,bankofamerica,commercialbank,tdbank,cardbank,netbanking,chasebank,bankinterest,internationalbank,listofbanks,thenearestbank,bankam,cinbank,bankingtechnology,bankingonline,directbank,smallbanks,rgbbank,bankofa,bankreviews,bankofficial,banksofficialwebsite,recommendedbanks,bankna,bankf,bankinformation,digitalbanking,websitebank,cityonebank,bankcenter,studentbanking,banklocations,bankcompanies,bestplacestotravel,traveldestinations,airways,wheretovisit,airlines,destinationstovisit,cheapestcountriestovisit,travelbook,travelcompanies,airtravel,budgettravel,placestogo,airfare,cheapairfare,lowestairfare,airfarespecials,internationalairfare,airfareandhotel,discountairfare,travelhotel,travelandhotel,cleaningdetergent,dishwasherdetergent,laundrydetergentstorage,floordetergent,washerdetergent,highefficiencydetergent,washingmachinedetergent,oxilaundrydetergent,highefficiencywasherdetergent,topliquiddetergent,laundrydetergentforhardwater,washingmachineliquiddetergent,finishdetergent,naturalwashingmachinedetergent,bestlaundrydetergentfortoploaders,bestcleaningdetergent,bestdetergentpowderforwashingmachine,bestdetergentforfrontloadwasher,thebestdetergentforwhiteclothes,bestwashingdetergentforwhiteclothes,bestdetergentfordarkcolors,bestlaundrydetergentforclothes,bestlaundrydetergentforcoloredclothes,bestlaundrydetergentforfrontloaders,bestdetergentforwashingmachine,besthighefficiencydetergent,bestlaundrystainremover,moneyremittancetophilippines,onlineremittancetophilippines,remittancephilippines,bestremittancetophilippines,bestmoneyremittancetophilippines,cheapremittancephilippines,onlinemoneyremittancetophilippines,maximumremittancetophilippines,transfermoneyoverseas,sendmoneyoverseas,howtosendmoneyoverseas,howtotransfermoneyoverseas,wiringmoneyoverseas,bestwaytotransfermoneyoverseas,internationalmoneytransfer,internationalwiretransfer,bestinternationalmoneytransfer,cheapinternationalmoneytransfer,bestwaytotransfermoneyinternationally,internationalmoneytransferonline,SKINCARE,
	HAIRCARE,ORALCARE,PINOYFOOD,AUTOMOTIVE,BANKING,TRAVEL,DETERGENT,REMITTANCE,BrandTalk,BRANDTALK,brandtalk,BrandTalk(AggregatorPage),BRANDTALK(AggregatorPage),brandtalk(AggregatorPage),BrandTalk,BRANDTALK,brandtalk,AggregatorPage,AGGREGATORPAGE,Aggregator,AGGREGATOR');
	define('BT_DESCRIPTION','GMA Brand Talk shares stories about the most talked about trends, issues, and events. The content on this page is produced with the partner brands of GMA Network.');
	define('BT_TITLE', strpos($_SERVER['REQUEST_URI'], 'aboutus') ? 'About Us | GMA Brand Talk' : 'GMA Brand Talk – Stories for everyone');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':
		case 'testing':
			error_reporting(E_ALL);
		break;
	
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}

/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * folder then the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server.  If
 * you do, use a full server path. For more info please see the user guide:
 * http://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 *
 */
	$application_folder = 'application';

/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here.  For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT:  If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller.  Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 *
 */
	// The directory name, relative to the "controllers" folder.  Leave blank
	// if your controller is not in a sub-folder within the "controllers" folder
	// $routing['directory'] = '';

	// The controller class file name.  Example:  Mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 *
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (realpath($system_path) !== FALSE)
	{
		$system_path = realpath($system_path).'/';
	}

	// ensure there's a trailing slash
	$system_path = rtrim($system_path, '/').'/';

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	// this global constant is deprecated.
	define('EXT', '.php');

	// Path to the system folder
	define('BASEPATH', str_replace("\\", "/", $system_path));

	// Path to the front controller (this file)
	define('FCPATH', str_replace(SELF, '', __FILE__));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));


	// The path to the "application" folder
	if (is_dir($application_folder))
	{
		define('APPPATH', $application_folder.'/');
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_folder.'/'))
		{
			exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
		}

		define('APPPATH', BASEPATH.$application_folder.'/');
	}

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 *
 */
require_once BASEPATH.'core/CodeIgniter.php';

/* End of file index.php */
/* Location: ./index.php */