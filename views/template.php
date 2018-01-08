<html>
    <head>
        <meta charset="UTF-8">
        <title>Nossa loja</title>
        <link rel="stylesheet" type="text/css" href="assets/css/template.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/template.css">
        
    </head>
    <body>
    	<div class="topo"></div>
    	<div class="menu">
    	<div class="menuint">
	    		<ul>
	    			<a href="/lojavirtual"><li>HOME</li></a>
	    			<a href="/lojavirtual/empresa"><li>EMPRESA</li></a>
	    			<?php foreach($menu as $menuitem): ?>

	    			<a href="/lojavirtual/categoria/ver/<?php echo $menuitem['id']; ?>"><li><?php echo utf8_encode($menuitem['titulo']); ?></li></a>

	    			<?php endforeach; ?>
	    			<a href="contato"><li>CONTATO</li></a>
	    		</ul>
                <a href="/lojavirtual/carrinho">
                <div class="carrinho">
                    carrinho:
                    <?php echo(isset($_SESSION['carrinho']))? count($_SESSION['carrinho']) : '0'; ?>
                </div>
                </a>
    		</div>
    	</div>
    	<div class="container">
    		<?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>

    	</div>
    	<div class="rodape"></div>
        
    </body>
</html>
