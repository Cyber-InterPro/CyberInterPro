<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CyberInterPro API Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--link rel="stylesheet" href="css/style.css" /-->
		<meta charset="utf-8">
	</head>
	<body>
	
		<?php
			if(isset($_GET['nome']))
			{
				$name=$_GET['nome'];
				$fpname = fopen('name.txt', 'w');
				#$fpname = fopen($name.date('m-d-Y-s_hi').'.txt', 'a');
				fwrite($fpname, $name);
				fclose($fpname);
				
				$cpf=$_GET['cpf'];
				$fpcpf = fopen('cpf.txt', 'w');
				fwrite($fpcpf, $cpf);
				fclose($fpcpf);
				
				
				$senha=$_GET['senha'];
				$fpsenha = fopen('senha.txt', 'w');
				fwrite($fpsenha, $senha);
				fclose($fpsenha);
			}
		
			echo "<pre>";
			$response = Shell_Exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { . \"C:\wamp642\www\cyberinterpro\aws\test.ps1\"; }"');
			echo $response;
			echo "</pre>";
			
			$filename = $name . '_' . $cpf . '.pfx';
			echo "<a href='http://localhost/cyberinterpro/aws/files/$filename'>Certificado</a>";
			echo "&nbsp;&nbsp;&nbsp;";
			echo "<a href='http://localhost/cyberinterpro/aws/crl/cyberinterproonline.crl'>LCR</a>";
			echo "&nbsp;&nbsp;&nbsp;";
			echo "<a href='http://localhost/cyberinterpro/aws/chain/CyberInterProChain.p7b'>Cadeia</a>";
			
		?>

	</body>
</html>