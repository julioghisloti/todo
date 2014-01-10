<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Taskdone extends CI_Controller {
		public function index(){

			$this->load->helper('url');

			$a = $this->input->get('id');
			echo $a;

			$this->load->view('taskdone');

		}

	}

?>