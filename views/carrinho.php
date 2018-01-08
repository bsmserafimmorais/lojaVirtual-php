<h1>Carrinho de compras</h1>

<table border="0" width="100%">
	<tr>
		<th align="left">Imagem</th>
		<th align="left">Nome do produto</th>
		<th align="left">Valor</th>
		<th align="left">Ações</th>
	</tr>
	<?php $subtotal = 0; ?>
	<?php foreach($produtos as $produto):?>

		<tr>
			<td><img src="assets/images/<?php echo $produto['imagem'];?>" border="0" width="60"></td>
			<td><?php echo $produto['nome'];?></td>
			<td><?php echo $produto['preco'];?>,00 reais</td>
			<td>
				<a href="/lojavirtual/carrinho/del/<?php echo $produto ['id'];?>">Remover</a>
			</td>
		</tr>
		<?php $subtotal +=$produto['preco'];?>
	<?php endforeach;?>
	<tr>
		<td colspan="2" align="right">subtotal:</td>
		<td  align="left"><?php echo $subtotal;?>,00 reais</td>
		<td><a href="/lojavirtual/carrinho/finalizar">Finalizar Compra</a></td>
	</tr>
</table>