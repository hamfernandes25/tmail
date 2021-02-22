
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
	$arr= array("May your soul always remain filled with enthusiasm and motivation every day. 
Good Morning!!",
    "Paint the canvas of your day with colors of life, livelihood, and cheerfulness today. 
Good Morning!!",
    "May this morning be better and sweet. Better for your enemy and sweet for your friends. 
Good Morning!!",
    "A meaningful life is not being rich, being popular, being highly educated or being prefect...
It is about being real, being humble, being able to share ourselves and touch the lives of others. Good Morning",
    "Every day is a fresh new start.. So just paint the canvas of your life with beautiful days and delightful memories.. Good morning ",
    "Every morning has a new beginning.A new hope.It's a perfect day because it's God's gift.Have a blessed, hopeful perfect day to begin with. 
Good Morning.",
    "Never explain yourself, Your real friends don't need it, & your enemies won't believe it. Good Morning", 
    "You may not be able to control every situation and it's outcome, but you can control your attitude and how you deal with it. Good morning", 
    "Everyone is not fair, everyone can't be fair all the time, be forgiving, enjoy New Morning! Good Morning!",
    "A person's most valuable asset is not a brain loaded with knowledge...But a heart full of love with an ear open to listen and A hand willing to help... GOOD MORNING",
    "Smile & be happy and let that happiness spread everywhere you go. Life is beautiful. Good Morning",
    "True success in life is not measured by how much you make,but by how of a difference you make. Morning",
    "Every morning brings new opportunities, you, of course are capable to make them work. Good Morning!",
    "Stay positive the things you're waiting and hoping for,tend to arrive at the most unexpected moments.Good morning",
    "Respect is the most important element of our personality.It like an investment,whatever we give to others,it will return to us with profit ....Good morning",
    "A simple formula for happy life.Never try to defeat anyone,Just try to win everyone,Don't laugh at anyone but laugh with everyone.Good Morning",
    "Every morning is a blank canvas.. it is whatever you make out of it.Good morning",
    "The most difficult task is to make everybody happy,the simplest task is to be happy with everyone.Good morning.",
    "Welcome the new day with smile Embrace the joy and happiness.Enjoy your day to the fullest.Good morning",
    "May this morning and the day brings smile in your face and fills your heart with happiness! Good Morning"
    ,
    "The most important part of our personality is our speech..Because looks can gain only attraction..But speech can win hearts forever.Good Morning.",
    "This morning will never ever come back in your life again.Get up and make the most of it. Good morning.",  
    "God has added one more day in your life not necessarily bcoz you need it but because someone else might need u.Good Morning!",  
    "A smile to start your day.. A prayer to bless your way... A song to lighten your burden .. A message to wish you good day Good Morning!", 
    "Eyes are precious, They are not meant for tears, And heart is precious, It is not meant for fears, So start your day with a smile, Good morning!", 
    "Don't feel bad if people remember you only when they need you.Feel privileged that you are like a candle that comes to their mind when there is darkness!Good Morning",  
    "The greatest inspiration you can ever get is to know that you are an inspiration to others. Wake up and start living an inspirational life today. Good morning.",  
    "Even the smallest of thoughts have the potential to become the biggest of successes all you have to do is get up and get going. Good morning.",  
    "Mind is not a dustbin to keep anger, hatred and jealousy.But it is the treasure box to keep, love happiness and sweet memories.Good Morning",  
    "Nothing is impossible when God is on your side. Good morning.", 
    "Success is not just a measure of how big you can DREAM, it is also a measure of how much you can DO. Good morning.",
    "Good morning today is a brand new day. One that we've never lifed before. Let's make it an awesome day!"
    
    
   
    );

$ra=rand(0,31);
$mail=new PHPMailer(true);
$mail->SMTPDebug=0;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
 $mail->Username='mysterious21pr@gmail.com';
$mail->Password='1234567';

$mail->SMTPSecure='tls';
$mail->Port=587;
$mail->SetFrom('mysterious21pr@gmail.com');
$mail->AddAddress('hamfernandes25@gmail.com');

$mail->IsHTML(true);
$mail->Subject='Good Morning!';
 echo $mail->Body=$arr[$ra];
        if(!$mail->Send())
{echo'mail not sent';
echo 'mailer erreo'.$mail->ErrorInfo;

}
 else {
    
 echo"mail sent";}


} catch (phpmailerException $e) {
	echo $e->errorMessage();
}

?>

