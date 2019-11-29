<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Atividade Mês</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
			<div class="row">
				<h1>Informe um número entre 1 e 12 para saber o mês</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
    				<form role="form" action="atividade-livro-back.php" method="post">
					  <div class="form-group">
                          <div class="form-group">
                              <label for="usr">Nome do livro</label>
                              <input type="text" name="livro" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="usr">Tipo de usuário</label>
                              <span style="font-size: 9px; margin: 2px;">Professor ou aluno</span>
                              <input type="text" name="tipo_u" class="form-control">
                          </div>
					  </div>
					  <button type="submit" class="btn btn-default">Enviar</button>
					</form>
    			</div>
    			<div class="col-md-4"></div>
    			<div class="col-md-4"></div>
  			</div>
		</div>
	</body>
</html>