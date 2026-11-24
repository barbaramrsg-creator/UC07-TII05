
<?php include 'includes/header.php'; ?>

<main class="conteudo-principal container-form">

    <section class="card-form">

        <div class="cabecalho-form">
            <h2>Criar Conta de Doador</h2>
            <p>Preencha seus dados para participar das campanhas de arrecadação.</p>
        </div>

        <form
            id="form-cadastro"
            class="formulario"
            method="POST"
            action="actions/auth_register.php"
        >

            <fieldset class="grupo-secao">
                <legend>Dados pessoais e Acesso</legend>

                <div class="grupo-input">
                    <label for="nome">Nome completo</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Ex: João da Silva"
                        maxlength="150"
                        autocomplete="name"
                        required
                    >
                </div>

                <div class="grupo-input">
                    <label for="email">E-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Ex: joao.silva@example.com"
                        maxlength="150"
                        autocomplete="email"
                        required
                    >
                </div>
                <div class="linha-dupla">
                    <div class="grupo-input">
                        <label for="senha">Senha</label>
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Crie uma senha"
                            minlength="6"
                            autocomplete="new-password"
                            required
                        >
                    </div>

                    <div class="grupo-input">
                        <label for="confirmar-senha">Confirmar senha</label>
                        <input
                            type="password"
                            id="confirmar-senha"
                            name="confirmar_senha"
                            placeholder="Minimo 6 caracteres"
                            minlength="6"
                            required
                        >
                        <small id="erro-senha" class="mensagem-erro"></small>
                    </div>

                </div>

            </fieldset>

            <fieldset class="grupo-secao">
                <legend>Endereço para coleta</legend>

                <div class="linha-dupla">

                    <div class="grupo-input">
                        <label for="cep">CEP</label>
                        <input
                            type="text"
                            id="cep"
                            name="cep"
                            placeholder="Ex: 12345-678"
                            maxlength="9"
                            required
                        >
                        <small id="cep-status" class="texto-ajuda">
                            Digite o CEP para preenchimento automático.
                        </small>
                    </div>

                    <div class="grupo-input">
                        <label for="bairro">Bairro</label>
                        <input
                            type="text"
                            id="bairro"
                            name="bairro"
                            placeholder="Preenchimento automático"
                            required
                        >
                    </div>

                </div>

                <div class="grupo-input">
                    <label for="logradouro">Logradouro</label>
                    <input
                        type="text"
                        id="logradouro"
                        name="logradouro"
                        placeholder="Ex: Rua Exemplo, 123"
                        maxlength="200"
                        required
                    >
                </div>

                <div class="linha-dupla">

                    <div class="grupo-input">
                        <label for="localidade">Cidade</label>
                        <input
                            type="text"
                            id="localidade"
                            name="localidade"
                            placeholder="Preenchimento automático"
                            maxlength="100"
                            required
                        >
                    </div>

                    <div class="grupo-input">
                        <label for="uf">Estado</label>
                        <input
                            type="text"
                            id="uf"
                            name="uf"
                            placeholder="UF"
                            maxlength="2"
                            required
                        >
                    </div>

                </div>

            </fieldset>

            <button type="submit" class="btn-sustentavel btn-grande">
                Cadastrar
            </button>

        </form>

        <div class="rodape-form">
            <p>
                Já tem uma conta?
                <a href="login.php">Faça login</a>
            </p>
        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>