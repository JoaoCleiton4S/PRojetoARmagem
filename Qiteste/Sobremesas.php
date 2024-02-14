<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Sobremesas</title>
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

<h2>Cardápio de Sobremesas</h2>

<!--botões de seleção-->
<div class="menu-item">
    <h3><br>Pudim de Leite</h3>
        <a><img src="pudim.png"></a>
        <p><br>Porção de 300g </p>
        <p>Preço: R$ 8.00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('pudim',8.00)">Adicionar ao Carrinho</button>
    <h3><br>Mousse de Chocolate</h3>
        <a><img src="mousecho.png"></a>
        <p>Taça média <br> de 200g</p>
        <p>Preço: R$ 10,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('espaguete',10.00)"> Adicionar ao Carrinho</button>
    <h3><br>Torta de Limão"</h3>
        <a><img src="tortalimao.png"></a>
        <p>Porções de 600g <br></p>
        <p>Preço: R$ 12,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('risotto',12.00)">Adicionar ao Carrinho</button>
    <h3><br>Sorvete de Creme</h3>
        <a><img src="sorvete.png"></a>
        <p>Porção de 400g</p>
        <p>Preço: R$ 6,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('milanesa',6.00)">Adicionar ao Carrinho</button>
    <h3><br>Brigadeiro</h3>
        <a><img src="brigadeiro.png"></a>
        <p>Porção de 180g</p>
        <p>Preço: R$ 1,50</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('legumes-na-grelha',1.50)">Adicionar ao Carrinho</button>
        <br>
</div>

<?php
// Definindo o cardápio de sobremesas como um array associativo
/*$sobremesas = array(
    "Pudim de Leite" => 8.00,
    "Mousse de Chocolate" => 10.00,
    "Torta de Limão" => 12.00,
    "Sorvete de Creme" => 6.00,
    "Brigadeiro" => 1.50,
    "Cheesecake de Morango" => 14.00,
    "Tiramisù" => 15.00,
    "Pavê de Chocolate" => 11.00,
    "Banana Split" => 9.00,
    "Creme Brûlée" => 13.00
);

// Exibindo o cardápio de sobremesas
echo "<ul>";
foreach ($sobremesas as $sobremesa => $preco) {
    echo "<li>$sobremesa - R$ $preco</li>";
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
