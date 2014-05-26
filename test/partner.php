<pre>


<?php
// SOAP_CLIENT_BASEDIR - folder that contains the PHP Toolkit and your WSDL
// $USERNAME - variable that contains your Salesforce.com username (must be in the form of an email)
// $PASSWORD - variable that contains your Salesforce.ocm password





define("SOAP_CLIENT_BASEDIR", "../soapclient");
$debugme = 0;  //URL var set to get value debugme if exists and processed debug info to console if set to 1
$USERNAME='cfphpflex@gmail.com';
$PASSWORD='Laurel86213CVF3QmzCqsJrNwmIjfwVyRb';
require_once (SOAP_CLIENT_BASEDIR.'/SforcePartnerClient.php');
require_once (SOAP_CLIENT_BASEDIR.'/SforceHeaderOptions.php');
 
echo "SOAP_CLIENT_BASEDIR:";
echo SOAP_CLIENT_BASEDIR. "/SforcePartnerClient.php";
 
 
$query="Select o.OrganizationType, o.Id From Organization o where id = '00D300000007gjdEAA'";


try {
	
	$mySforceConnection = new SforcePartnerClient();  // LOAD this classes and functions
	    		
	 	if(isset($_GET['debugme']) && $_GET['debugme'] == '1') {
	 	    
	 		echo("<script>console.log('  inside  debugme is true <br>  mySforceConnection PHP: " .  json_encode(print_r($mySforceConnection)). "');</script>");
	 	}
	 	
	 	 // echo("<script>console.log('mySforceConnection PHP: "    . print_r($mySforceConnection). "');</script>");
	 	 // echo("   mySforceConnection");
	 	 // print_r($mySforceConnection);  //Print loaded clasess
	$mySoapClient = $mySforceConnection->createConnection(SOAP_CLIENT_BASEDIR.'/partner.wsdl.xml');	
	 	 //	 echo("   mySforceConnection");
	 	   	   		
	 	if(isset($_GET['debugme'])) {
	 	    echo("  inside  debugme is true <br>");
	 		echo("<script>console.log('mySforceConnection PHP:   " .  json_encode(print_r($mySoapClient)). "');</script>");
	 	}
	     //echo("<script>console.log('mySforceConnection PHP: "    . print_r($mySoapClient)  . "');</script>");
	  	 //print_r($mySoapClient);
	$mylogin = $mySforceConnection->login($USERNAME, $PASSWORD);
		 //print($mylogin);  
		 //print_r($mySforceConnection->getUserInfo());
		 echo("<script>console.log('mySforceConnection PHP: " . json_encode(print_r($mySforceConnection->getUserInfo())). "');</script>");
		
 
	//print_r($mylogin->userInfo);
  echo "***** Get Server Timestamp *****\n";
  		//$response = $mySforceConnection->getServerTimestamp();
		//	print_r($response);
 		//print_r($mySforceConnection->describeSObject('User'));  
  		//$result = $mySforceConnection->query($query);
  		//print_r($result);
} catch (Exception $e) {
	print_r($e);
}
?>
</pre>



