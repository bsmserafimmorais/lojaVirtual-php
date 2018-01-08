<!DOCTYPE html>
<html>
<head>
	
        <link rel="stylesheet" type="text/css" href="../assets/css/template.css">
</head>
<body>

<h1>Finalizar compra</h1>
<form method="POST">
<?php if (!empty($erro)): ?>
	<div class="erro"><?php echo $erro; ?></div>
<?php endif;?>
<fieldset>
	<legend>Informações do usuário</legend>
	Nome:<br/>
	<input type="text" name="nome"><br/><br/>
	E-mail:<br/>
	<input type="text" name="email"><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"><br/><br/>
</fieldset>

<br/>
<fieldset>
	<legend>Informações do endereço</legend>
	<textarea name="endereco" style="width: 400px;height: 100px;"></textarea>
</fieldset>

<br/>

<fieldset>
	<legend>Resumo da conta</legend>
	Total a pagar: R$<?php echo $total; ?>

</fieldset>
<br/>
<fieldset>
	<legend>Informações de pagamento</legend>
	<?php foreach($pagamentos as $pg): ?>

		<input type="radio" name="pg" value="<?php echo $pg['id'];?>"><?php echo $pg['nome'];?><br/><br/>

	<?php endforeach;?>
</fieldset>
<br/>
<input type="submit" value="efetuar pagamento">

</form>

</body>
</html>