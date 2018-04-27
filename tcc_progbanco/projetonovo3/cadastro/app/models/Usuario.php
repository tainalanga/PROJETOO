<?php

class Usuario{
	private $id;
	private $nome;
	private $sobrenome;
	private $estado;
	private $cidadeorigem;
	private $datanasc;
	private $email;
	private $senha;
	private $foto;

	public function __construct($id, $nome, $sobrenome,$estado, $cidadeorigem, $datanasc, $email, $senha, $foto){
		$this->id = $id;
		$this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->estado = $estado;
        $this->cidadeorigem = $cidadeorigem;
        $this->datanasc = $datanasc;
		$this->email = $email;
		$this->senha = $senha;
		$this->foto = $foto;
	}


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}


	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}


	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}


	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->telefone = $senha;
	}


	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}

}