<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'business_platform');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/test2mvc/public');

}else
{
	/** database config **/
	define('DBNAME', 'wapihup_wapihubplatform');
	define('DBHOST', 'host13');
	define('DBUSER', 'wapihubp_wapihubp');
	define('DBPASS', 'WqfU%.,Lz]IB');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.wapihubplatform.com');

}

define('APP_NAME', "wapihubplatform");
define('APP_DESC', "Explore More, Live More");

/** true means show errors **/
define('DEBUG', true);
