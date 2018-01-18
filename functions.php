<?php
require_once('../config.php');
require_once(DBAPI);
$customers = null;
$customer = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('clientes');
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $customer;
  $customer = remove('clientes', $id);
  header('location: clientes.php');
}
?>