<?php

require_once('../config.php');
require_once(DBAPI);

/*duas variáveis globais, para serem usadas entre as funções, e que vão guardar
 *  os registros que estiverem sendo usados:
 */
$cruds = null;/*irá guardar um conjunto de registros de pedidos.*/
$crud = null;/*guardará um único pedido, para os casos de inserção e atualização (CREATE e UPDATE).*/

/*"index()"função que será chamada na tela principal de pedidos, e ela fará a
 *  consulta pelos registros no banco de dados, e depois colocará tudo na
 *  variável $cruds, para que possamos exibir.
 */

/**
 *  Listagem do Pedido
 */
function index() {
	global $cruds;
	$cruds = find_all('crud');
}
/**
 *  Cadastro do Pedido
 */
function add() {

  if (!empty($_POST['crud'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Manaus'));

    $crud = $_POST['crud'];
    $crud['modificado'] = $crud['criado'] = $today->format("Y-m-d H:i:s");
    
    save('crud', $crud);
    header('location:../EnviarPedido.php');
  }
}
/**
 *	Atualizacao/Edição do Pedido
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Manaus'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['crud'])) {

      $crud = $_POST['crud'];
      $crud['modificado'] = $now->format("Y-m-d H:i:s");

      update('crud', $id, $crud);
      header('location: pedido.php');
    } else {

      global $crud;
      $crud = find('crud', $id);
    } 
  } else {
    header('location: pedido.php');
  }
}
/**
 *  Visualização do Pedido
 */

/*Essa função faz a busca na tabela pedidos pelo ID que foi passado pela
 *  requisição (através do parâmetro $id). Depois, o resultado é guardado na
 *  variável $crud, que será acessada na tela de visualização.
 */
function view($id = null) {
  global $crud;
  $crud = find('crud', $id);
}

/***  Exclusão do Pedido */		
function delete($id = null) {				  
    global $crud;		  
    $crud = remove('crud', $id);				  
    header('location: pedido.php');		
    
}