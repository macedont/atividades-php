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
                        $name = $_POST['name'];
                        $nome = "";
                        for($x = 1; $x <=5; $x++){
                            $nome .= $name. " ";
                            echo $nome. "<br/>";
                        }
                    ?>
                </div>
            </div>
		</div>
	</body>
</html>
