<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cardapio</h2>

<form action="add.php" method="POST">
  <!-- area de campos do form -->
  <hr/>
  <div class="text text-center"><h3>Mesas</h3></div>
  <hr/>
  <div class="row" class="table-responsive">
      <div class="form-group col-md-2">
        <label for="campo1">MESA - 1:</label>
        <input type="radio" class="radio" name="crud['mesa']" value="1">
     </div>
      
      <div class="form-group col-md-2">
        <label for="campo2">MESA - 2:</label>
        <input type="radio" class="radio" name="crud['mesa']" value="2">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3">MESA - 3:</label>
        <input type="radio" class="radio" name="crud['mesa']" value="3">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo4">MESA - 4:</label>
        <input type="radio" class="radio" name="crud['mesa']" value="4">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo5">MESA - 5:</label>
        <input type="radio" class="radio" name="crud['mesa']" value="5">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo6">MESA - 6:</label>
        <input type="radio" class="radio" name="crud['mesa']" value="6">
      </div>
  </div>  <hr/>
  <div class="text text-center"><h3>Escolha um Prato</h3></div>
  <hr/>
  <div class="row" class="table-responsive">  
      <div class="form-group col-md-4">
        <label for="campo1">Camarão ao Molho - R$25,00<br>
        <img width="200px" src="../img/res02.jpg" class="btn" data-toggle="modal" data-target="#prato1"></label>
        <input type="radio" class="" name="crud['pedido']" value="Camarão ao Molho">
      </div>

      <div class="form-group col-md-4">
        <label for="campo2">Picanha - R$20,00<br>
            <img width="200px "src="../img/picanha.jpg" class="btn" data-toggle="modal" data-target="#prato2"></label>
            <input type="radio" class="" name="crud['pedido']" value="Picanha">
      </div>

      <div class="form-group col-md-4">
        <label for="campo3">Alcatra - R$30,00<br>
            <img width="200px "src="../img/alcatra.jpg" class="btn" data-toggle="modal" data-target="#prato3"></label>
            <input type="radio" class="" name="crud['pedido']" value="Alcatra">
      </div>
    </div>
  
    <div class="row">
      <div class="form-group col-md-4">
        <label for="campo4">Lasanha - R$20,00<br>
            <img width="200px "src="../img/lasanha.jpg" class="btn" data-toggle="modal" data-target="#prato4" ></label>
            <input type="radio" class="checkbox-inline" name="crud['pedido']" value="Lasanha">
      </div>

      <div class="form-group col-md-4">
        <label for="campo5">Frango - R$25,00<br>
            <img width="200px "src="../img/frango.jpg" class="btn" data-toggle="modal" data-target="#prato5"></label>
            <input type="radio" class="" name="crud['pedido']" value="Frango">
      </div>
    
      <div class="form-group col-md-4">
        <label for="campo6">Tambaqui - R$40,00<br>
            <img width="200px "src="../img/tambaqui.jpg" class="btn" data-toggle="modal" data-target="#prato6"></label>
            <input type="radio" class="" name="crud['pedido']" value="Tambaqui">
      </div> 
      <div class="form-group col-md-7">
        <label for="campo7">Adicionar / Retirar Item</label>
        <input type="text" class="form-control" name="crud['observacao']">
      </div>
    </div>
  
    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="../principal.php" class="btn btn-default">Cancelar</a>
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