<?php

require_once '../models/UsuarioCrud.php';

if (isset($_GET['acao'])){
	$acao = $_GET['acao'];
}else{
	$acao = 'index';
}



if ($acao == 'index'){
	//exibe a pagina principal de usuario, listando todos
	echo 'index';
}elseif($acao == 'inserir'){
	//exibe a pagina de insercao
	include '../views/usuarios/indexlog.html';
}elseif($acao == 'gravaInserir'){
//move o arquivo para uma pasta
	move_uploaded_file($_FILES['foto']['tmp_name'], '/home/aluno/public_html/exemplo/assets/imagens/'.$_FILES['foto']['name']);
//cria o objeto do usuario
	$usuario = new Usuario(null ,$_POST['nome']   , '/home/aluno/public_html/exemplo/assets/imagens/'.$_FILES['foto']['name']);
//cria o crud e depois insere o objeto criado no BD
	$crud = new UsuarioCrud();
	$crud->insertUsuario($usuario);
}