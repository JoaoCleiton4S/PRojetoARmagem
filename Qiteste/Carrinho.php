<?php
session_start();

// Inicializar o carrinho
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Adicionar item ao carrinho
if (isset($_GET['acao']) && $_GET['acao'] == 'add' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$id] = array(
            'quantidade' => 1,
            // Você pode adicionar mais informações do produto aqui, como nome, preço, etc.
        );
    }
    header('Location: carrinho.php');
    exit;
}

// Remover item do carrinho
if (isset($_GET['acao']) && $_GET['acao'] == 'remover' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
    header('Location: carrinho.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
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

<h2>Carrinho de Compras</h2>

<!-- Exibir itens do carrinho -->
<ul>
    <?php foreach ($_SESSION['carrinho'] as $id => $item): ?>
        <li>Produto <?php echo $id; ?> - Quantidade: <?php echo $item['quantidade']; ?> <a href="carrinho.php?acao=remover&id=<?php echo $id; ?>">Remover do Carrinho</a></li>
    <?php endforeach; ?>
</ul>

<!-- Link para voltar à página de produtos -->
<p><a href="index.php">Continuar Comprando</a></p>

<!-- Adicione o Bootstrap JS e o jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer><br>Agradecemos a Preferêcia</footer>
</body>
</html>
