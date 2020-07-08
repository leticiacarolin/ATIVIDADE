<?php

class Livro {

private $Titulo;
private $Autor;
private $Ano;
private $Edicao;

public function getTitulo(){
	return $this->titulo;
}
public function setTitulo($argTitulo){
	$this->titulo = $argTitulo;
}
public function getAutor(){
	return $this->autor;
}
public function setAutor($argAutor){
	$this->autor = $argAutor;
}
public function getAno(){
	return $this->ano;
}
public function setAno($argAno){
	$this->ano = $argAno;
}
public function getEdicao(){
	return $this->edicao;
}
public function setEdicao($argEdicao){
	 $this->edicao = $argEdicao;
}


}