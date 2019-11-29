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
				<h1>Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
    				<form role="form" action="atividade-sol-back.php" method="post">
					  <div class="form-group">
                          <div class="form-group">
                              <label for="usr">Quantidade</label>
                              <input type="number" name="num" class="form-control">
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