<!-- HEADER -->
<?php 
include_once 'includes/head.php';
?>
<!-- BODY -->
<div>
    <div>
        <h1>
            Novo Cliente
        </h1>
        <form action="criar.php" method="post">
            <div>
                <input type="text" name="name" id="name">
                <label for="name">Nome</label>
            </div>
            <div>
                <input type="text" name="lastname" id="lastname">
                <label for="lastname">Sobrenome</label>
            </div>
            <div>
                <input type="text" name="email" id="email">
                <label for="email">E-mail</label>
            </div>
            <div>
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>
            <div>
                <input type="text" name="senha" id="senha">
                <label for="senha">Senha</label>
            </div>
            <button type="submit" name="btn-cadastrar">Cadastrar</button>
            <a href="index.php" type="submit">Listar clientes</a>

        </form>
    </div>
</div>

<!-- FOOTER -->
<?php 
include_once 'includes/footer.php';
?>