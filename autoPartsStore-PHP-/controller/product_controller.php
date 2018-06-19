<?php
	require '../model/initProduct.php';
	$PDO = db_connect();
	$sql = "SELECT * FROM product";
	$stmt = $PDO->prepare($sql);
	$stmt->execute();

	$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


	$product = $products[0];

	$product_id = $product['id'];
	$product_nome = $product['nome'];
	$product_valor = $product['valor'];
	$product_descricao = $product['descricao'];
	$product_imagem = $product['imagem'];
?>