<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cat�logo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">
            <div class="row">
                <h1>Detalhes da Opera��o</h1>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <?php
                        $qtde = $_POST['num'];

                        for ($x = 1;$x <= $qtde; $x++){
                            echo "Sol <br />";
                        }
                    ?>
                </div>
            </div>
		</div>
	</body>
</html>