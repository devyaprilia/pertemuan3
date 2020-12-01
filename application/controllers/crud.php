<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {
	public function logout() {
		$this->load->view('login');
	}

	public function update($id) {
		$data['user'] = $this->crud_model->get_user_by_Id($id);
    $datas['id'] = $id;
    $this->session->set_flashdata($datas);
		$this->load->view("update",$data);
	}

  public function do_update($id) {
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
    $this->crud_model->update('user',$data,$id);
    $data['user'] = $this->login_model->get_user();
  	$this->load->view("main.php",$data);
  }

	public function delete($id) {
		$this->crud_model->delete_data($id);
		$data['user'] = $this->login_model->get_user();
		$this->load->view('main',$data);
	}
}
