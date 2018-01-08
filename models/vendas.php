<?php
	class vendas extends model{
		public function __construct(){
			parent:: __construct();
		}
	public function setVenda($uid, $endereco, $valor, $pg, $prods){
		//  1=>aguardando aprovação, 2=> aprovado, 3=>cancelado

		$status = '1';
		$liink = '';

		$sql = "INSERT INTO vendas SET id_usuario = '$uid', endereco = '$endereco', valor = '$valor', forma_pg = '$pg', status_pg = '$status', link_pg = '$link' ";

		$this->db->query($sql);
		$id_venda = $this->db->lastInsertId();

		if($pg == '1' ){
			$status = '2';
			$link = '/lojavirtual/carrinho/obrigado';

			$this->db->query("UPDATE vendas SET status_pg = 'status' WHERE id = '".$id_venda."' ");
		}elseif($pg == '2'){
			//pagseguro
			require 'libary/public/createSession.php'

			$paymentRequest = new createSession();
			foreach($prods as $prod){
				$paymentRequest->addItem($prod['id'], $prod['nome'], 1, $prod['preco']);
			}
			$paymentRequest->setCurrency("BRL");
			$paymentRequest->setReference($id_venda);
			$paymentRequest->setRedirectUrl("localhost/lojavirtual/carrinho/obrigado");
			$paymentRequest->addParameter("notificationUrl", "localhos/lojavirtual/carrinho/notificacao");

			try{

				$cred = PagseguroConfig::getAccountCredentials();
				$link = $paymentRequest->register($cred);
			}catch(PagseguroServiceException $e){
				echo $e->getMessage();

			}

		}

		

		foreach ($prods as $prod) {
			$sql = "INSERT INTO vendas_produtos SET id_venda = '$id_venda', id_produto = '".($prod['id'])."', quantidade = '1'";

			$this->db->query($sql);
		}
		$_SESSION['carrinho'] = array();
		return $link;
	}		



	}
?>