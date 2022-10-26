function verificaCampo()
{
var vazio = document.forms["formulario"]["nome"].value;
if (vazio == "")
{
alert("Por favor, insira um valor para o nome");
return false;
}

var vazio = document.forms["formulario"]["cracha"].value;
if (vazio == "")
{
alert("Por favor, insira um valor para o crachá");
return false;
}

var vazio = document.forms["formulario"]["setor"].value;
if (vazio == "")
{
alert("Por favor, insira um valor para o setor");
return false;
}

var vazio = document.forms["formulario"]["tipoRequisicao"].value;
if (vazio == "")
{
alert("Por favor, insira um valor para o tipo de requisição");
return false;
}

var vazio = document.forms["formulario"]["descricaoMaterial"].value;
if (vazio == "")
{
alert("Por favor, insira um valor para a descrição do material");
return false;
}

var vazio = document.forms["formulario"]["quantidadeSolicitada"].value;
if (vazio == "")
{
alert("Por favor, insira um valor para a quantidade");
return false;
}

var vazio = document.forms["formulario"]["aprovador"].value;
if (vazio == "")
{
alert("Por favor, insira um aprovador");
return false;
}

}