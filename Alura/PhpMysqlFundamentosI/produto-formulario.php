<?php include("cabecalho.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>

        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>

        <tr>
            <td>Descrição</td>
            <td><textarea name="descricao" class="form-control"></textarea></td>
        </tr>

        <tr>

            <td>Categoria</td>
            <td>
                <input type="radio" name="categoria_id" value="1">Esporte</br>
                <input type="radio" name="categoria_id" value="2">Escolar</br>
                <input type="radio" name="categoria_id" value="3">Mobilidade</br>
            </td>
        </tr>

        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>

    </table>
</form>

<?php include("rodape.php"); ?>
