<?php
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$data = $_POST['data'];
$conn =  mysqli_connect("localhost","root","");
mysqli_select_db($conn,"catalogo");
$sql = "INSERT INTO filmes (nome, genero, data) VALUES ('".$nome."', '".$genero."', '".$data."')";; 

mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Cast-Filmes</title>
    <link rel="stylesheet" href="css/estiloDasPaginas.css">
</head>

<header>
    <h1 class="cast-filmes">Cast-Filmes</h1>
</header>

<body>

    <nav class="nav">
		<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastra.php">Cadastrar</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
	</nav>
	
    <main>
        <div class="container">
            <p class="cadastroSucesso"><?php echo "Cadastro efetuado com sucesso!"?></p>
        </div>
        <div class=butt>
            <a class=button href="cadastra.php">VOLTAR</a>
         </div>
    </main> 

	<footer class="footer">
		&copy; Michel Bernardo 2020
	</footer>
</body>
</html>