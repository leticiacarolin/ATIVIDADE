<?php

require_once 'Pessoa.php';
require_once 'Carro.php';
require_once 'Livro.php';

$pessoa = new Pessoa();
$pessoa->setNome("Leticia");
$pessoa->setIdade (16);
$pessoa->setPeso (65);
$pessoa->setSexo ("Feminino");
echo "Nome: " . $pessoa->getNome() . "<br/>";
echo "Idade: " . $pessoa->getIdade() . "<br/>";
echo "Peso: " . $pessoa->getPeso() . "<br/>";
echo "Sexo: " . $pessoa->getSexo() . "<br/>". "<br/>";

$carro = new Carro();
$carro->setMarca ("CHEVROLET");
$carro->setCor ("PRATA");
$carro->setPlaca ("VTY 3808");
$carro->setModelo ("CORSA");
echo "Marca: " . $carro->getMarca() . "</br>";
echo "Cor: " . $carro->getCor() . "</br>";
echo "Placa: " . $carro->getPlaca() . "</br>";
echo "Modelo: " . $carro->getModelo() . "</br>". "</br>";

$livro = new Livro();
$livro->setTitulo  ("A Menina que Roubava Livros");
$livro->setAutor  (" Markus Zusak");
$livro->setAno  ("2005");
$livro->setEdicao  ("Picador.");
echo "Titulo: " . $livro->getTitulo() . "</br>";
echo "Autor: " . $livro->getAutor() . "</br>";
echo "Ano: " . $livro->getAno() . "</br>";
echo "Edição: " . $livro->getEdicao() . "</br>";