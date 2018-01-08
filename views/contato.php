<style type="text/css">
	.contato input [type=text],.nome, [type=email], .contato textarea{
		width: 400px;
		border: 1px solid #CCC;
		padding: 10px;
		font-size: 13px;
	}
	.contato textarea{
		height: 200px;
	}

</style>

<h1>contato</h1>


<form method="POST" class="contato">

<?php  if (!empty($msg)):?>
	<div class="aviso"><?php echo $msg; ?></div>
<?php endif; ?>

Nome:<br/>
<input type="text" name="nome" class="nome" required><br/><br/>

Email:<br/>
<input type="email" name="email" required><br/><br/>

Mensagem:<br/>
<textarea name="mensagem"></textarea><br/><br/>

<input type="submit" value="Enviar">
</form>

<div style="clear:both"></div>
