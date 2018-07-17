<?php

include_once(getcwd().'/app/view/View.php');

class Controller {
	private $view;	
	
	public function __construct($elements) {
		$this->view=new View();

		switch ($elements[0]) {
			case 'partner_mobile':
				if (!isset($elements[0])) $elements[0]='';
				if (!isset($elements[3])) $elements[3]='';
				$this->view->displayPartner_mobile($elements[0], $elements[3]);
				break;

			case 'partner_web':
				/*if (!isset($elements[2])) $elements[2]='';*/
				$this->view->displayPartner_web();
				break;
			
			default:
				$this->cleanSession();
				$this->view->displayHome();
				break;
		}
	}

	public function cleanSession() {
/*		if ($_SESSION['test']) {
			echo __FILE__.' '.__LINE__.' : Logger';
		} */

		if(session_id() == '' || !isset($_SESSION)) {
		    session_start();
		}
		else {
			session_destroy();	
		}

		$_SESSION['user']=null;
		$_SESSION['nbphoto_avis']=0;
		$_SESSION['nbphoto_facture']=0;
		$_SESSION['nbphoto_existant']=0;
		$_SESSION['offer']=null;
	}	
}

?>