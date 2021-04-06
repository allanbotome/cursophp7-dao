<?php

  require_once("config.php");

  /*$sql = new Sql();
  carrega um usuario
  $root = new Usuario();
  $root->loadById(1);
  echo $root;*/

  //CARREGA LISTA DE USUARIOS
  /*$lista = Usuario::getList();
  echo json_encode($lista);*/

  //CARREGA LISTA DE USUARIOS BUSCANDO PELO LOGIN
  /*$search = Usuario::search("all");
  echo json_encode($search);/*

  //CARREGA UM USUARIO USANDO LOGIN E SENHA
  /*$usuario = new Usuario();
  $usuario->login("allan","1234567890");
  echo $usuario;*/

  //INSERINDO NOVO USARIO
  /*$aluno = new Usuario("aluno", "senha123");
  $aluno->insert();
  echo $aluno;*/

  //ALTERAR USUARIO
  /*$usuario = new Usuario();
  $usuario->loadById(3);
  $usuario->update("romildo", "gremio1903");
  echo $usuario;*/

  //DELETAR USUARIO
  /*$usuario = new Usuario();
  $usuario->loadById(1);
  $usuario->delete();
  echo $usuario;*/
?>
