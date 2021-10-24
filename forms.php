<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms</title>
</head>
<body>
	<h2>Formulário</h2>
	<h4>O que você achou do site?</h4>
	<form nome="cadastro" method="get" action="pagina_forms.php">
		<input type="radio" name="Muito Bom"/> Muito Bom
		<input type="radio" name="Bom"/> Bom
		<input type="radio" name="Regular"/> Regular
		<input type="radio" name="Um lixo"/> Um lixo
		<h4>Qual a seção que você mais gostou?</h4>
		<select name="em cartaz"> 
			<option>Em Cartaz</option>
			<option>Trilha Sonora</option>
			<option>Galeria de Fotos</option>
			<option>Bilheteria</option>
			<option>Outra</option>
		</select>
		Outra: <input type="text" name="Outra:">
		<h4>Digite seus comentários no espaço abaixo:</h4>
		Mensagem:
		</br> </br>
		<textarea name="Mensagem" cols="45" rows="10"> 
		</textarea>
		<h4>Diga-nos como entrar em contato com você:</h4>
		Nome: <input type="text" name="nome"> </br></br>
		E-mail: <input type="text" name="e-mail"> </br></br>
		Fone: <input type="number" name="fone"> </br></br>
		Fax: <input type="text" name="fax"> </br></br>/
		<input type="checkbox" name="novidades">
		Quero receber as novidades do site por e-mail </br></br>
		<input type="submit" name="Enviar Dados">
		<input type="reset" name="Limpar Formulário">
		&nbsp;&nbsp;&nbsp;
	</form>

</body>
</html>