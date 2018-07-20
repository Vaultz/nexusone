<?php

include_once(getcwd().'/app/view/View.php');

class Controller {
	private $view;	
	
	public function __construct($elements) {
		$this->view=new View();

		switch ($elements[0]) {
			case 'partner_mobile':
				if (!isset($elements[1])) $elements[1]='';
				if (!isset($elements[4])) $elements[4]='';
				$this->view->displayPartner_mobile($elements[1], $elements[4]);
				break;

			case 'partner_web':
				$path=$this->makePath($elements);
				if (!isset($elements[1])) $elements[1]='';
				if (!isset($elements[2])) $elements[2]='';
				if (!isset($elements[3])) $elements[3]='';
				$this->view->displayPartner_web($elements[1],$elements[2],$elements[3]);
				break;
			
			default:
				$this->cleanSession();
				$this->view->displayHome();
				break;
		}
	}

	public function cleanSession() {


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

	// depending on which page the use reads, returns the current path to home
	public function makePath($page) {
		
	}
}

?>