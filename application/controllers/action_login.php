<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Action_newuser extends CI_Controller {
		public function index(){

			$this->load->helper('url');

			$nome = $this->input->post('nome');
			$senha = $this->input->post('senha');

			$query = mysql_query("SELECT * FROM `users` WHERE `nome`='$nome' and `senha`='$senha' ");
			$volta = mysql_num_rows($query);

			if($volta == 1){
				$this->load->view('tasks');
			}

		}

	}

?>