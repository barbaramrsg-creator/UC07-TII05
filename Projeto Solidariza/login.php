
<?php include 'includes/header.php'; ?>

<main class="conteudo-principal">

    <section class="container-form">

        <div class="card-form card-form-pequeno">

            <div class="cabecalho-form">
                <h2>ENTRAR NO SOLIDARIZA</h2>
                <p>Acesse sua conta para acompanhar ou registrar doações.</p>
            </div>

            <form
                id="form-login"
                class="formulario"
                method="POST"
                action="actions/auth_login.php"
            >

                <div class="grupo-input">
                    <label for="email">E-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        autocomplete="email"
                        required
                    >
                </div>

                <div class="grupo-input">
                    <label for="senha">Senha</label>
                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <button type="submit" class="btn-sustentavel btn-grande">
                    Entrar
                </button>

            </form>

            <div class="rodape-form">
                <p>
                    Não tem uma conta?
                    <a href="cadastro.php">Cadastre-se</a>
                </p>
            </div>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
