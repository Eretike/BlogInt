<?php
class CHome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mHome');
	}
	public function index(){
		$this->load->view("header.php");
		$this->load->view("index.php");
		$this->load->view("footer.php");
	}
}
?>