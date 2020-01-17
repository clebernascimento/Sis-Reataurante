<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Pedido <?php echo $crud['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>PEDIDO:</dt>
	<dd><?php echo $crud['pedido']; ?></dd>
        
        <dt>MESA:</dt>
	<dd><?php echo $crud['mesa']; ?></dd>
        
        <dt>OBSERVAÇÃO:</dt>
	<dd><?php echo $crud['observacao']; ?></dd>

	<dt>DATA DO PEDIDO:</dt>
	<dd><?php echo $crud['criado']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $crud['id']; ?>" class="btn btn-primary">Editar</a>
          <a href="pedido.php" class="btn btn-default">Voltar</a>
	</div>
</div>

        
<?php include(FOOTER_TEMPLATE); ?>