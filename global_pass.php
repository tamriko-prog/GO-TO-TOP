<?

define('PROJECT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/nordic/tamara/project1');

define('DB_HOST','localhost');
define('DB_NAME','nordic_tamara_2');
define('DB_USER','nordic_tamara');
define('DB_PASSWORD','7D1w1V1t');   


	$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
	if($isHttps){
		$protocol = 'https';
	}else{
		$protocol = 'http';
	}
    $hostpath = $protocol.'://'.$_SERVER['HTTP_HOST'].'/nordic/tamara/project2';
	
	//var_dump($_SERVER);
	
	
	define('PROJECT_URL',$hostpath);
	