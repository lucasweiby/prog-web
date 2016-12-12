<?php
	$nome = $_POST ['nome'];
	$um = $_POST['um'];
	$dois = $_POST['dois'];
	$tres = $_POST['tres'];
	$quatro = $_POST['quatro'];
	$cinco = $_POST['cinco'];
	$cont = 0;

	if ($um == 'nao') {
		$cont++;
	}
	if ($dois == 'kernel') {
		$cont++;
	}
	if ($tres == 'c') {
		$cont++;
	}
	if ($quatro == 'b') {
		$cont++;
	}
	if ($cinco == 'sim') {
		$cont++;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
</head>
<body>
	<h1><?php echo 'Seu resultado ', $nome;
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Questão 1</th>
			<td>Não</td>
		</tr>
		<tr>
			<th>Questão 2</th>
			<td>Kernel</td>
		</tr>
		<tr>
			<th>Questão 3</th>
			<td>opção C</td>
		</tr>
		<tr>
			<th>Questão 4</th>
			<td>opção B</td>
		</tr>
		<tr>
			<th>Questão 5</th>
			<td>Sim</td>
		</tr>
		<tr>
			<th>Total de acertos</th>
			<td> 
				<?php echo $cont; ?>
			</td>
		</tr>
	</table>
</body>
</html>
