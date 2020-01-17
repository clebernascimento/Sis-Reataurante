<?php
/*ligação dessa página com o módulo de pedidos (pelo arquivo functions.php)*/
    require_once('functions.php');
    /* chama função index, que é o backend desta página.*/
    index();
?>

<?php include(HEADER_TEMPLATE);?>
<!-- Tag para Atualizar a Página a cada 10 segundos -->
<meta http-equiv="refresh" content="10">
<!--começa a marcação da listagem, apenas com um topo simples e algumas opções.-->
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Pedidos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<!--<a class="btn btn-primary" href="#"><i class="fa fa-plus"></i> Novo Pedido</a>-->
	    	<a class="btn btn-default" href="pedido.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<!-- verificação de mensagens de seção. Isso serve para exibir alguma notificação
* que tenha sido definida no backend, como mensagens de erro ou de sucesso,
* por exemplo.
-->
<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>
<!-- Depois, ver a tabela de registros. Dentro dela tem um loop
* (usando o foreach) que vai pegar cada registro da variável $cruds e criar
* uma linha nessa tabela e exibir os dados. Como uso os dados de forma
* associativa (lá na camada de acesso a dados), é possível obter esses dados
* pelo nome das colunas.
-->
<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>Pedido</th>
                <th>Mesa</th>
                <th>Observação</th>
		<th>Atualizado em</th>
		<th width="25%">Opções</th>
	</tr>
</thead>

<!--na linha 59 está a tabela de registros. Dentro dela tem um loop
*(usando o foreach) que vai pegar cada registro da variável $customers e criar
* uma linha nessa tabela e exibir os dados.
-->
<tbody>
<?php if ($cruds) : ?>
<?php foreach ($cruds as $crud) : ?>
	<tr>
		<td><?php echo $crud['id']; ?></td>
		<td><?php echo $crud['pedido']; ?></td>
                <td><?php echo $crud['mesa']; ?></td>
                <td><?php echo $crud['observacao']; ?></td>
		<td><?php echo $crud['modificado']; ?></td>
                
<!--na linha 72 mostra links para operações nos registros da
* tabela. Basta passar o ID como parâmetro, e a função no backend
* (do arquivo functions.php) deve ler e usar esse parâmetro.
-->
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $crud['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $crud['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-crud="<?php echo $crud['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>
<!--Com isso, a marcação do modal vai ser injetada na página de listagem e aí o modal poderá ser exibido.-->
<?php include('./modal.php'); ?>
<?php include('../crud/modal/ModalPrato.php');?>
<!--template de footer, para fechar a página.-->
<?php include(FOOTER_TEMPLATE); ?>