<?php


require_once "Banco.php";
require_once "Produto.php";
require_once "CrudProduto.php";


$conn = new Banco('localhost', 'loja_paulo', 'root', '');


$produto1 = new Produto;

$produto1->setIdProduto(0)->setNome("Camisa Azul")->setPrecoVenda(70)->setEstoque(300)->setGtin(5464)->setNcm(5446)->setPrecoCusto(450)->setPrecoPromo(480)->setPesoLiquido(3)->setPesoBruto(45)->setValidade('19101994')->setCondicao("Novo")->setLargura(45)->setComprimento(3)->setAltura(1)->setFabricante("cases bahia")->setCategoria("CatXD")->setUnidade(33);


echo "<pre>";
	//print_r($produto1);


$crud = new CrudProduto($conn, $produto1);

//$crud->save();


//echo $crud->delete(5454);

//$crud->update();

print_r($crud->list());


echo "</pre>";
