<?php
  require_once 'Usuario.php';
  require_once 'DBConnection.php';

class UsuarioCrud{

	public function getUsuarios(){
		//retorna todos os usuarios
		$bd = new DBConnection();
		$conexao = $bd->getConexao();

		$sql = "select * from usuarios";
		$resultado = $conexao->query($sql);  //executa a consulta criada

		$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
		$listaUsuarios = [];
		foreach ($usuarios as $usuario) {
			$listaUsuarios[] = new Usuario($usuario['id'], $usuario['nome'], $usuario['sobrenome'], $usuario['estado'],
                $usuario['cidadeorigem'],$usuario['datanasc'], $usuario['email'],$usuario['senha'],$usuario['foto']);
        }
		}


	public function getUsuario($id){
		//retorna um usuario, de acordo com o $id
	}

	public function insertUsuario(Usuario $usuario){
		//recebe um Usuario e insere no BD

		$sql = "insert into ....";
	}

}
