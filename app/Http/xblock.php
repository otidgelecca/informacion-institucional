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

// configuration
$url = 'xblock.php';
$filea = 'xblock-ip.txt';
$fileb = 'xblock-mail.txt';
$ok = "off";
// check if form has been submitted
if (isset($_POST['texta']) || isset($_POST['textb']))
{
    file_put_contents($filea, $_POST['texta']);
	file_put_contents($fileb, $_POST['textb']);
	header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}
$texta = file_get_contents($filea);
$textb = file_get_contents($fileb);

$a = count(file($filea));
$b = count(file($fileb));
?>
<html>
<head><title>Painel de bloqueios</title></head><body>
<form action="" method="post">
<table border="0" align="center">
  <tr>
    <td><span style="font-family:verdana; font-size:13px;">Bloqueio de IPS: (<?php echo $a; ?>)</span><p />
<textarea name="texta" cols="30" rows="25"><?php echo htmlspecialchars($texta) ?></textarea><br />
</td>
    <td>
	<span style="font-family:verdana; font-size:13px;">Bloqueio de e-mails: (<?php echo $b; ?>)</span><p />
<textarea name="textb" cols="30" rows="25"><?php echo htmlspecialchars($textb) ?></textarea><br />

	</td>
  </tr>
  <tr>
    <td height="21" colspan="2" align="center"><hr /><input type="submit" value="Salvar tudo"/></td>
  </tr>
</table>
</form>
</body></html>