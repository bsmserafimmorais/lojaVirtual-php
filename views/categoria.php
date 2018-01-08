<html>
    <head>
        <meta charset="UTF-8">
        <title>Nossa loja</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/template.css">
    </head>
<h1><?php echo utf8_encode($categoria); ?></h1>

<?php foreach ($produtos as $produto):?>
	<a href="/lojavirtual/produto/ver/<?php echo $produto['id'];?> ">
	<div class="produto">
	<img src="../../assets/images/<?php echo $produto['imagem']?>" height="180" width="180" border="0" />
		<?php echo $produto['nome']; ?><br/>
		<?php echo 'R$ '.$produto['preco'].',00'; ?><br/>
	</div>
</a>
<?php endforeach; ?>
<div style="clear:both;"></div>

