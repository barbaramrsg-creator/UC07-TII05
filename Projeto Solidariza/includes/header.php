
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solidariza - Conectando Doadores e Causas</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <div class="cabecalho-principal">
            <nav class="navbar">

                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                        <h1>Solidariza</h1>
                    </a>
                </div>

                <button class="menu-hamburguer"
                        id="menu-hamburguer"
                        aria-label="Abrir menu"
                        aria-expanded="false"
                        aria-controls="menu-links">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <ul class="menu-links" id="menu-links">
                    <li><a href="index.php">INÍCIO</a></li>
                    <li><a href="#campanhas">CAMPANHAS</a></li>
                    <li><a href="login.php">ENTRAR</a></li>
                    <li><a href="cadastro.php">CADASTRAR</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <script>
    const botaoMenu = document.getElementById('menu-hamburguer');
    const menuLinks = document.getElementById('menu-links');

    botaoMenu.addEventListener('click', function () {
        menuLinks.classList.toggle('ativo');

        const aberto = menuLinks.classList.contains('ativo');

        botaoMenu.setAttribute('aria-expanded', aberto);
        botaoMenu.setAttribute(
            'aria-label',
            aberto ? 'Fechar menu' : 'Abrir menu'
        );
    });
</script>






