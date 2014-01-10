<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Action_newuser extends CI_Controller {
		public function index(){

			$this->load->helper('url');

			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$senha = $this->input->post('senha');

			mysql_query("INSERT INTO `users` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha') ");	

			$data['nome'] = $nome = $this->input->post('nome');

			$this->load->view('action_newuser', $data);

		}

	}

?>