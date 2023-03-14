<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		Formulário
 	</title>
 </head>
 <body>
 	<h1>
 		Formulário
 	</h1>
 	<form action="cadastrar_action.php" method="POST">
 		<label>
 			Código
 		</label>
 		<input type="" name="">
 		<br><br>
 		<label for="nm">
 			Nome
 		</label>
 		<input type="text" name="nome" id="nm">
 		<br><br>
 		<label for="sn">
 			Sobrenome
 		</label>
 		<input type="text" name="sobrenome" id="sn">
 		<br><br>
 		<label for="em">
 			Email
 		</label>
 		<input type="email" name="email" id="em">
 		<br><br>
 		<label for="cpf">
 			CPF
 		</label>
 		<input type="number" name="cpf" id="cpf">
 		<br><br>
 		<label for="sx">
 			Sexo
 		</label>
 		<select id="sx">
 			<option>
 				Feminino
 			</option>
 			<option>
 				Masculino
 			</option>
 		</select>
 		<br><br>
 		<label for="us">
 			Usuário
 		</label>
 		<input type="text" name="">
 		<br><br>
 		<label for="sn">
 			Senha
 		</label>
 		<input type="password" name="">
 		<br><br>
 		
 		<input type="submit" name="enviar" value="ENVIAR">

 	</form>
 	<br><br>
 	<button>
 		<a href="login.php" target="_self">
			LOGIN
		</a>
 	</button>
 	<button>
 		<a href="index.php" target="_self">
			SAIR
		</a>
 	</button>
 </body>
 </html>