<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Bebidas</title>
    <!-- Adicione o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Qiteste/styles/styles.css">

</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ApenasUmBar Cardápio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="PratosPrincipais.php">Pratos Principais <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            <li class="nav-item">
                <a class="nav-link" href="Acompanhamentos.php">Acompanhamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Bebidas.php">Bebidas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Sobremesas.php">Sobremesas</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="LOGI.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Carrinho.php">Carrinho</a>
            </li>
        </ul>
    </div>
</nav>
</header>

<h2><br>Cardápio de Bebidas</h2>

<div class="menu-item">
    <h3><br>Refrigerante</h3>
        <a><img src="latinha.png"></a>
        <p><br>Latinha de 350ml</p>
        <p>Preço: R$ 5,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('Refrigerante',5.00)">Adicionar ao Carrinho</button>
    <h3>Suco Natural</h3>
        <a><img src="suco.png"></a>
        <p>Copo de 300ml</p>
        <p>Preço: R$ 6,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('Suco Natural',6.00)"> Adicionar ao Carrinho</button>
    <h3>Água Mineral</h3>
        <a><img src="aguamineral.png"></a>
        <p>Garrafa de 500g</p>
        <p>Preço: R$ 4,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('Água Mineral',4.00)">Adicionar ao Carrinho</button>
    <h3>Cerveja Nacional</h3>
        <a><img src="cerveja.png"></a>
        <p>Latão de 475ml</p>
        <p>Preço: R$ 7,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('Cerveja Nacional',7.00)">Adicionar ao Carrinho</button>
</div>

<?php
/*    $bebidas = array(
        "Refrigerante" => 5.00,
        "Suco Natural" => 6.00,
        "Água Mineral" => 3.00,
        "Cerveja Nacional" => 7.00,
);

// Exibindo o cardápio de bebidas
    echo "<ul>";
foreach ($bebidas as $bebida => $preco) {
    echo "<li>$bebida - R$ $preco</li>";
}
echo "</ul>";*/
?>

<!-- Adicione o Bootstrap JS e o jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer><br>Agradecemos a Preferêcia</footer>
</body>
</html>
