<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_ctrl extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

  public function register() {
    $this->load->view('register.php');
  }

  public function do_login() {
    $username = $this->input->post('username');
    $pwd = $this->input->post('password');

    $check = $this->login_model->check_user($username, $pwd);
    if($check == true) {
			$data['user'] = $this->login_model->get_user();
			$login = $this->login_model->get_user_spec($username);
			if($login){
			foreach ($login as $key) {
				$dataUser = array(
					'id' => $key->id,
					'username' => $key->username,
					'email' => $key->email,
					'password' => $key->password,
					'hak_akses' => $key->hak_akses
				);
			}
		}
			$this->session->set_userdata($dataUser);
      $this->load->view("main.php", $data);
    } else {
      redirect();
    }
  }

	public function do_register() {
		$username = $this->input->post("username");
		$data = array(
      'username' => $username,
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password'),
      'birth_date' => $this->input->post('tanggal'),
    );
    $config['upload_path']          = 'assets/photos/';
    $config['allowed_types']        = 'jpg|jpeg|gif|png';
    $config['file_name']						= $username;

    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('gambar'))
    {

    }
    else {
      $data += array(
        'gambar' => $config['upload_path'].$this->upload->data('file_name'),
      );
    }
    $this->login_model->create('user',$data);
  	$this->load->view("login");
	}

	public function logout() {
		$this->load->view('login');
	}
}
