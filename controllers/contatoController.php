<?php
class contatoController extends controller {

public function __construct(){
	parent::__construct();
}

    public function index() {
    	$dados = array('msg' =>'');

    	if(isset($_POST['nome']) && !empty($_POST['nome'])){
    		$nome = addslashes($_POST['nome']);
    		$email = addslashes($_POST['email']);
    		$msg = addslashes($_POST['mensagem']);

    		$html = "Nome: ".$nome." <br/>E-mail".$email."<br/> Mensagem: ".$msg;

    		$headers = 'From: bsmserafim@gmail.com'."\r\n";
    		$headers .= 'Replay-To: '.$email."\r\n"; 
    		$headers .= 'X-Mailer: PHP/'.phpversion();

    		mail("bsmserafim@gmail.com", "Contato pelo site em".date('d/m/Y'), $html, $headers);

    		$dados['msg'] = "E-mail enviado com sucesso!";

    	}

        $this->loadTemplate('contato', $dados);
    }

}