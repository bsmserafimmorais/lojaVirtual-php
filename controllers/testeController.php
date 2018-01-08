<?php

class testeController extends controller{

	public function index(){
		$dados = array();

		$this->loadTemplate('teste', $dados);
	}
	public function foi($nome, $sobrenome){
		echo "foi mesmopo eim?!".$nome.''.$sobrenome;
	}
}