
<?php include 'includes/header.php'; ?>

<main class="conteudo-principal">

    <!-- SEÇÃO PRINCIPAL -->
    <section class="hero-section">

        <div class="hero-textos">

            <h2>A Solidariedade move o mundo, faça parte desse ciclo.</h2>

            <p>
                Conectando quem deseja ajudar com as campanhas de arrecadação
                que mais precisam. Doe roupas, móveis, alimentos e tempo.
            </p>

            <div class="hero-botoes">

                <a href="cadastro.php" class="btn-sustentavel btn-grande">
                    QUERO DOAR
                </a>

                <a href="#campanhas" class="btn-sustentavel btn-grande">
                    VER CAMPANHAS
                </a>

            </div>
        </div>

        <div class="hero-imagem">
            <img src="assets/img/hero.jpeg" alt="Imagem de solidariedade">
        </div>

    </section>


    <!-- COMO FUNCIONA -->
    <section class="como-funciona">

        <h3>COMO FUNCIONA?</h3>

        <div class="cards-passos">

            <div class="card">
                <h4>1. Cadastre-se</h4>
                <p>
                    Crie uma conta gratuita e tenha acesso às campanhas
                    de arrecadação disponíveis.
                </p>
            </div>

            <div class="card">
                <h4>2. Escolha a causa</h4>
                <p>
                    Escolha como deseja contribuir: doe roupas,
                    móveis, alimentos ou outros itens.
                </p>
            </div>

            <div class="card">
                <h4>3. Solidarize-se</h4>
                <p>
                    Sua contribuição ajuda pessoas e fortalece
                    iniciativas de solidariedade.
                </p>
            </div>

        </div>

    </section>


    <!-- CAMPANHAS ATIVAS -->
    <section id="campanhas" class="vitrine-campanhas">

        <div class="cabecalho-secao">
            <h3>Campanhas Ativas</h3>
            <p>Escolha a causa e faça a diferença.</p>
        </div>

        <div class="grid-campanhas">

            <!-- PRIMEIRO CARD -->
            <article class="card-campanha">

                <span class="badge-status ativa">Ativa</span>

                <h4>Campanha do Agasalho</h4>

                <p class="descricao-campanha">
                    Arrecadação de roupas de inverno, cobertores e calçados
                    em bom estado para famílias em situação de vulnerabilidade.
                </p>

                <div class="rodape-card">
                    <a href="cadastro.php" class="btn-sustentavel btn-pequeno">
                        Quero doar
                    </a>
                </div>

            </article>


            <!-- SEGUNDO CARD -->
            <article class="card-campanha">

                <span class="badge-status ativa">Ativa</span>

                <h4>Cesta Básica Solidária</h4>

                <p class="descricao-campanha">
                    Doe alimentos não perecíveis e itens de higiene para
                    montagem de cestas destinadas à comunidade local.
                </p>

                <div class="rodape-card">
                    <a href="cadastro.php" class="btn-sustentavel btn-pequeno">
                        Quero doar
                    </a>
                </div>

            </article>


            <!-- TERCEIRO CARD -->
            <article class="card-campanha">

                <span class="badge-status ativa">Ativa</span>

                <h4>Móveis que Transformam</h4>

                <p class="descricao-campanha">
                    Doe móveis em bom estado para ajudar famílias
                    que precisam mobiliar suas casas.
                </p>

                <div class="rodape-card">
                    <a href="cadastro.php" class="btn-sustentavel btn-pequeno">
                        Quero doar
                    </a>
                </div>

            </article>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>

