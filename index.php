<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tblusuario");
    echo json_encode($usuarios);*/

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista); 

//carrega lista de usuarios buscando pelo login
//$search = Usuario::search("br");                                                                    //p/ buscar usuarios q comecem com essas letras
//echo json_encode($search);


//carrega um usuario usando o login e a senha   
//$usuario = new Usuario();
//$usuario->login("brunalobato","12345");

//echo $usuario;

//enserindo um usuario
//$aluno = new Usuario("aluno","@luno");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "5656");

echo $usuario;
?>