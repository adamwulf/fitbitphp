<?

include "config.php";
require 'fitbitphp.php';

try{
	
	$fitbit = new FitBitPHP(FITBIT_KEY, FITBIT_SECRET);
	
	
	$authHost = 'www.fitbit.com'; 
	$apiHost = 'api.fitbit.com';
	$fitbit->setEndpointBase($apiHost, $authHost, false, false);
	$fitbit->setMetric(1); // to get US metrics instead of UK
	$fitbit->setResponseFormat('json');
	
	$fitbit->initSession('http://welcome.totheinter.net/apps/fitbitphp/');
	
	$profile = $fitbit->getProfile();
	
	$water = $fitbit->getWater(new DateTime());
	
	print_r($profile);
	echo "<br><br>";
	print_r($water);
	
}catch(Exception $e){
	print_r($e);
}


?>
