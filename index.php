<?php include("cabecalho.php") ?>
<h1>Requisição de Almoxarifado</h1>

<div class="alert alert-info alert-dismissible fade show">
    <strong>Atenção!</strong> Solicitações até as 10:00 serão entregues das 11:00 ás 11:30.</br>
    Solicitações até ás 15:00 serão entregues das 16:00 ás 16:30
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<form name="formulario" action="adiciona-pedido.php" onsubmit="return verificaCampo()" method="post" required>
    <table class="table table-striped table-bordered">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" maxlength="15"></td>
        </tr>
        <tr>
            <td>Crachá:</td>
            <td><input class="form-control" type="number" name="cracha" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="7"></td>
        </tr>
        <tr>
            <td>Setor:</td>
            <td><input class="form-control" type="text" name="setor" maxlength="20"></td>
        </tr>
        <tr>
            <td>Tipo requisição:</td>
            <td>
                <select class="form-select" aria-label="Default select example" name="tipoRequisicao">
                    <option value=""></option>
                    <option value="Solicitação">Solicitação</option>
                    <option value="Devolução">Devolução</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Descrição do Material:</td>
            <td><textarea class="form-control" name="descricaoMaterial" maxlength="50"></textarea></td>
        </tr>
        <tr>
            <td>Quantidade Solicitada:</td>
            <td><input class="form-control" type="number" name="quantidadeSolicitada" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="6">

            </td>
        </tr>
        <tr>
            <td>Aprovador:</td>
            <td>
                <select class="form-select" aria-label="Default select example" name="aprovador">
                    <option value=""></option>
                    <option value="Evandro">Evandro</option>
                    <option value="Maria AP RH">Maria AP RH</option>
                    <option value="Fábio PCP">Fábio PCP</option>
                    <option value="Fábio Almoxarifado">Fábio Almoxarifado</option>
                    <option value="Marilaine Manutenção">Marilaine Manutenção</option>
                    <option value="Adelino">Adelino</option>
                    <option value="Edson">Edson</option>
                    <option value="Claudir">Claudir</option>
                    <option value="Vinicius">Vinicius</option>
                    <option value="Diego">Diego</option>
                    <option value="Gabriel">Gabriel</option>
                    <option value="Fabiano">Fabiano</option>
                </select>
            </td>
        </tr>
    </table>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>

<?php include("rodape.php") ?>