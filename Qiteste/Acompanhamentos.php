<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio de Acompanhamentos</title>
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

<h2><br>Cardápio de Acompanhamentos</h2>

<!--botões de seleção-->
<div class="menu-item">
    <h3><br>Arroz Branco</h3>
        <a><img src="arroz-branco.png"></a>
        <p><br>Tigela média <br> de 200g</p>
        <p>Preço: R$ 5,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('arroz-branco',5.00)">Adicionar ao Carrinho</button>
    <h3><br>Feijoada</h3>
        <a><img src="feijao-preto.png"></a>
        <p>Tijela média <br> de 200g</p>
        <p>Preço: R$ 4,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('feijao-preto',4.00)"> Adicionar ao Carrinho</button>
    <h3><br>Batata Frita</h3>
        <a><img src="batata-fritas.png"></a>
        <p>Porções <br> pequena 200g <br> média 500g <br> grande 800g <br></p>
        <p>Preço: R$ 8,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('batata-frita',8.00)">Adicionar ao Carrinho</button>
    <h3><br>Salada Mista</h3>
        <a><img src="salada-mista.png"></a>
        <p>Porção pequena</p>
        <p>Preço: R$ 7,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('salada-mista',7.00)">Adicionar ao Carrinho</button>
    <h3><br>Legumes Grelhados</h3>
        <a><img src="legumes-na-grelha.png"></a>
        <p>Pimentão vermelho, Berinjela, Pimentão amarelo, Abóbrinha <br>porção pequena</p>
        <p>Preço: R$ 6,00</p>
        <button type="button" class="btn btn-dark" onclick="addToCart('legumes-na-grelha',6.00)">Adicionar ao Carrinho</button>
        <br>
</div>

<?php
// Definindo o cardápio de acompanhamentos como um array associativo
//$acompanhamentos = array(
//  "Arroz Branco" => 5.00,
//  "Feijão Preto" => 4.00,
//  "Batata Frita" => 8.00,
//  "Salada Mista" => 7.00,
//  "Legumes Greslhado" => 6.00
//);

// Exibindo o cardápio de acompanhamentos
//echo "<ul>";
//foreach ($acompanhamentos as $acompanhamento => $preco) {
//  echo "<li>$acompanhamento - R$ $preco</li>";
//}
//echo "</ul>";
?>

<!-- Adicione o Bootstrap JS e o jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer><br>Agradecemos a Preferêcia</footer>
</body>
</html>
