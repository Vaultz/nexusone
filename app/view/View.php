<?php

class View {
	public function __construct() {
		echo '<!DOCTYPE html><html><body>';
	}

	public function __destruct() {
		echo '</body></html>';
	}

	public function displayHome() {
		include_once('HomeTemplate/head.php');
		include_once('HomeTemplate/header.php');
		include_once('home.php');
		include_once('HomeTemplate/scripts.php');
	}

	public function displayPartner_mobile($page1,$page2) {
		$page1 = ($page1==null) ? 'offers' : $page1 ;
		include_once('PartnerMobile/Template/head.php');
		include_once('PartnerMobile/Template/header.php');
		if ($page2=='') {
			include_once('PartnerMobile/'.$page1.'.php');
		}
		else {
			include_once('PartnerMobile/'.$page2.'.php');
		}
		include_once('PartnerMobile/Template/scripts.php');
	}

	public function displayPartner_web($object, $action, $step) {
		include_once('PartnerWeb/Template/head.php');
		include_once('PartnerWeb/Template/header.php');
		if ($step=='') {
			if ($action=='') {
				include_once('PartnerWeb/home.php');
			}
			else {
				include_once('PartnerWeb/'.$object.'/'.$action.'.php');
			}
		}
		else {
			include_once('PartnerWeb/'.$object.'/'.$action.'/'.$step.'.php');
		}
		include_once('PartnerWeb/Template/scripts.php');
	}
}
?>
