<style type="text/css">
	
	.produto_foto{
	width: 300px;
	height: 300px;
	background: #fff;
	margin-top:20px;
	margin-bottom: 30px;
	float: left;

}
.produto_info{
	float: left;
	margin-left: 20px;
	margin-top: 20px;
}

</style>

<div class="produto_foto">
	<img src="../../assets/images/<?php echo $produto['imagem'];?>" border="0" width="300"  height="300">
</div>	
<div class="produto_info">
	<h2><?php echo utf8_encode($produto['nome']);?></h2>
	<?php echo utf8_encode($produto['descricao']);?>
	<h3><?php echo $produto['preco'];?>,00 reais</h3>
	<a href="/lojavirtual/carrinho/add/<?php echo $produto['id'];?>">Adicionar ao carrinho</a>
</div>	
<div style="clear:both"></div>	