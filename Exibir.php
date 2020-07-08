<?php

require_once 'Pessoa.php';
require_once 'Carro.php';
require_once 'Livro.php';

$pessoa = new Pessoa();
$pessoa->setNome("Leticia");
$pessoa->setIdade (16);
$pessoa->setPeso (55);
$pessoa->setSexo ("Feminino");
echo "Nome: " . $pessoa->getNome() . "<br/>";
echo "Idade: " . $pessoa->getIdade() . "<br/>";
echo "Peso: " . $pessoa->getPeso() . "<br/>";
echo "Sexo: " . $pessoa->getSexo() . "<br/>". "<br/>";

$carro = new Carro();
$carro->setMarca ("CHEVROLET");
$carro->setCor ("PRETO");
$carro->setPlaca ("VTY 3808");
$carro->setModelo ("OPALA");
echo "Marca: " . $carro->getMarca() . "</br>";
echo "Cor: " . $carro->getCor() . "</br>";
echo "Placa: " . $carro->getPlaca() . "</br>";
echo "Modelo: " . $carro->getModelo() . "</br>". "</br>";

$livro = new Livro();
$livro->setTitulo  ("Todos, nenhum: simplesmente humano");
$livro->setAutor  ("Jeff Garvin");
$livro->setAno  ("1 fevereiro de 2017");
$livro->setEdicao  ("VR editora");
echo "Titulo: " . $livro->getTitulo() . "</br>";
echo "Autor: " . $livro->getAutor() . "</br>";
echo "Ano: " . $livro->getAno() . "</br>";
echo "Edição: " . $livro->getEdicao() . "</br>";