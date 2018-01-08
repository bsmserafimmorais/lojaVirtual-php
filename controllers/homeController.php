<?php
class homeController extends controller {
	public function __construct(){
		parent::__construct();
	}
   

    public function index() {
        $dados = array();
        
        $produtos = new produtos();
        $dados['produtos'] = $produtos->listar(8);

        $this->loadTemplate('home', $dados);
    }
    public function ver($id){
		if(!empty($id)){
			$dados = array();

			$this->loadTemplate("produto", $dados);
		}
	}

}