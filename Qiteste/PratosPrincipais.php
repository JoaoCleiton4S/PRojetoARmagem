<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Pratos Principais</title>
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

<h2><br>Cardápio de Pratos Principais</h2>

<!--botões de seleção-->
<div class="menu-item">
    <h3><br>Frango à Parmegiana</h3>
        <a><img src="frangoApar.png"></a>
        <p><br>Porção de 300g </p>
        <p>Preço: R$ 25.00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('frangoApar',25.00)">Adicionar ao Carrinho</button>
    <h3><br>Spaghetti Carbonara</h3>
        <a><img src="espaguete.png"></a>
        <p>Tijela média <br> de 400g</p>
        <p>Preço: R$ 20,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('espaguete',20.00)"> Adicionar ao Carrinho</button>
    <h3><br>Feijoada Completa</h3>
        <a><img src="feijoada.png"></a>
        <p>Porções grande de 800g <br></p>
        <p>Preço: R$ 30,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('risotto',30.00)">Adicionar ao Carrinho</button>
    <h3><br>Risoto de Funghi</h3>
        <a><img src="risotto.png"></a>
        <p>Porção de 400g</p>
        <p>Preço: R$ 22,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('milanesa',22.00)">Adicionar ao Carrinho</button>
    <h3><br>Bife à Milanesa</h3>
        <a><img src="milanesa.png"></a>
        <p>Porção de 180g</p>
        <p>Preço: R$ 28,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('legumes-na-grelha',28.00)">Adicionar ao Carrinho</button>
        <br>
</div>

<?php
/*$pratos_principais = array(
    "Frango à Parmegiana" => 25.00,
    "Spaghetti Carbonara" => 20.00,
    "Feijoada Completa" => 30.00,
    "Risoto de Funghi" => 22.00,
    "Bife à Milanesa" => 28.00,
    "Salmão Grelhado" => 35.00,
    "Moqueca de Peixe" => 32.00,
    "Tortellini ao Molho Pesto" => 26.00,
    "Filé Mignon ao Molho Madeira" => 40.00,
    "Lasanha à Bolonhesa" => 24.00
);

// Exibindo o cardápio de pratos principais
echo "<ul>";
foreach ($pratos_principais as $prato => $preco) {
    echo "<li>$prato - R$ $preco</li>";
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