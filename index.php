
<?php

include 'class.phpmailer.php';

/*$message="hello";
$sub="hi";
$to="hamfernandes25@gmail.com";


$rt=mail($to, $sub, $message);
if($rt===0)
{
echo "mail not sent";
}
 else {
     echo "mail sent";
    
 }
  
 */
function is_bot(){
	$botlist = array("Teoma", "alexa", "froogle", "Gigabot", "inktomi",
		"looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory",
		"Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot",
		"crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp",
		"msnbot", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz",
		"Baiduspider", "Feedfetcher-Google", "TechnoratiSnoop", "Rankivabot",
		"Mediapartners-Google", "Sogou web spider", "WebAlta Crawler","TweetmemeBot",
		"Butterfly","Twitturls","Me.dium","Twiceler","Purebot","facebookexternalhit",
		"Yandex","CatchBot","W3C_Validator","Jigsaw","PostRank","Purebot","Twitterbot",
		"Voyager","zelist");

	foreach($botlist as $bot){
		if(strpos($_SERVER['HTTP_USER_AGENT'],$bot)!==false)
		return true;	// Is a bot
	}
	return false;	// Not a bot
}

// get ip
//$ip = $_SERVER['REMOTE_ADDR'];
//$query_string = $_SERVER['QUERY_STRING'];
//$http_referer = $_SERVER['HTTP_REFERER'];
//$http_user_agent = $_SERVER['HTTP_USER_AGENT'];
//$remote_host = $_SERVER['REMOTE_HOST'];
//$request_uri = $_SERVER['REQUEST_URI'];
//
//// check if it's a bot
//if (is_bot())
//	$isbot = 1;
//else
//	$isbot = 0;

// get country and city


//include('ip2locationlite.class.php');
////Load the class
//$ipLite = new ip2location_lite;
//$ipLite->setKey('ADD_API_KEY_HERE');
// 
////Get errors and locations
//$locations = $ipLite->getCity($ip);
//$errors = $ipLite->getError();
// 
////Getting the result
//if (!empty($locations) && is_array($locations)) {
//  foreach ($locations as $field => $val) {
//  	if ($field == 'countryName')
//  		$country = $val;
//    if ($field == 'cityName')
//  		$city = $val;
//  }
//}

// insert into db
date_default_timezone_set('UTC');
$date = date("Y-m-d");
$time = date("H:i:s");

try {
$mail=new PHPMailer(true);
$mail->SMTPDebug=0;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
 $mail->Username='mysterious25pro@gmail.com';
$mail->Password='sapra12345678';

$mail->SMTPSecure='tls';
$mail->Port=587;
$mail->SetFrom('mysterious25pro@gmail.com');
$mail->AddAddress('hamfernandes25@gmail.com');

$mail->IsHTML(true);
$mail->Subject='Good Morning!';
 echo $mail->Body='Good Morning! Have a wonderful day ahead!';
        if(!$mail->Send())
{echo'mail not sent';
echo 'mailer erreo'.$mail->ErrorInfo;

}
 else {
    
 echo"mail sent";}


} catch (phpmailerException $e) {
	 $e->errorMessage();
}

?>

