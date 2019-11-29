<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">
            <div class="row">
                <h1>Detalhes da Operação</h1>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <?php
                        $tipo_u = $_POST['tipo_u'];
                        $livro = $_POST['livro'];

                        //verifica se quem ta pedindo o livro é aluno ou professor;
                        if($tipo_u == "professor"){
                            echo "$tipo_u, você tem 10 dias para entregar o livro: <br /> $livro";
                        } else{
                            echo "$tipo_u, você tem 3 dias para entregar o livro: <br /> $livro";
                        }
                    ?>
                </div>
            </div>
		</div>
	</body>
</html>