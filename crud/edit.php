<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Pedido</h2>

<form action="edit.php? id=<?php echo $crud['id']; ?>" method="post">
  <hr />
  <!--<div class="row">
      <div class="form-group col-md-2">
      <label for="campo1">MESA-1:</label>
      <input type="radio" class="" name="crud['mesa']">
    </div>
      
     <div class="form-group col-md-2">
      <label for="campo1">MESA-2:</label>
      <input type="radio" class="" name="crud['mesa']">
     </div>
      
     <div class="form-group col-md-2">
      <label for="campo1">MESA-3:</label>
      <input type="radio" class="" name="crud['mesa']">
     </div>
      
     <div class="form-group col-md-2">
      <label for="campo1">MESA - 4:</label>
      <input type="radio" class="" name="crud['mesa']">
     </div>
      
     <div class="form-group col-md-2">
      <label for="campo1">MESA - 5:</label>
      <input type="radio" class="" name="crud['mesa']">
     </div>
      
     <div class="form-group col-md-2">
      <label for="campo1">MESA - 6:</label>
      <input type="radio" class="" name="crud['mesa']">
     </div>-->
     <div class="text text-center"><h3>Selicione seu Pedido</h3></div>
  <hr/> 
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Camarão ao Molho<br>
          <img width="200px "src="../img/res02.jpg" class="btn" data-toggle="modal" data-target="#prato1"></label>
      <input type="radio" class="btn" name="crud['pedido']" value="<?php echo $crud['pedido']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Picanha<br>
          <img width="200px "src="../img/picanha.jpg" class="btn" data-toggle="modal" data-target="#prato2"></label>
      <input type="radio" class="" name="crud['pedido']" value="<?php echo $crud['pedido']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Alcatra<br>
          <img width="200px "src="../img/alcatra.jpg" class="btn" data-toggle="modal" data-target="#prato3"></label>
      <input type="radio" class="" name="crud['pedido']" value="<?php echo $crud['pedido']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo4">Lasanha<br>
          <img width="200px "src="../img/lasanha.jpg" class="btn" data-toggle="modal" data-target="#prato4"></label>
      <input type="radio" class="" name="crud['pedido']" value="<?php echo $crud['pedido']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo5">Frango<br>
          <img width="200px "src="../img/frango.jpg" class="btn" data-toggle="modal" data-target="#prato5"></label>
      <input type="radio" class="" name="crud['pedido']" value="<?php echo $crud['pedido']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo6">Tambaqui<br>
          <img width="200px "src="../img/tambaqui.jpg" class="btn" data-toggle="modal" data-target="#prato6"></label>
      <input type="radio" class="" name="crud['pedido']" value="<?php echo $crud['pedido']; ?>">
    </div>
    <div class="form-group col-md-7">
      <label for="campo7">Adicionar / Retirar Item</label>
      <input type="text" class="form-control" name="crud['observacao']" value="<?php echo $crud['observacao']; ?>">
    </div>
  </div>
      
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="pedido.php" class="btn btn-default">Voltar</a>
    </div>
  </div>
</form>
<?php include('../crud/modal/ModalPrato.php');?>
<?php include('../crud/modal/ModalPrato1.php');?>
<?php include('../crud/modal/ModalPrato2.php');?>
<?php include('../crud/modal/ModalPrato3.php');?>
<?php include('../crud/modal/ModalPrato4.php');?>
<?php include('../crud/modal/ModalPrato5.php');?>
<?php include('../crud/modal/ModalPrato6.php');?>
<?php include(FOOTER_TEMPLATE); ?>