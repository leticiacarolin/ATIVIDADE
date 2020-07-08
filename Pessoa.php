<?php

class Pessoa {

private $Nome;
private $Idade;
private $Peso;
private $Sexo;

public function getNome(){
	return $this->nome;
}
public function setNome($argNome){
	 $this->nome = $argNome;
}
public function getIdade(){
	return $this->idade;
}
public function setIdade($argIdade){
	 $this->idade = $argIdade;
}
public function getPeso(){
	return $this->peso;
}
public function setPeso($argPeso){
	 $this->peso = $argPeso;
}
public function getSexo(){
	return $this->sexo;
}
public function setSexo($argSexo){
	 $this->sexo = $argSexo;
}
}