<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __constuct()
	{
		parent::__constuct();
		$this->load->library('form_validation');
	}

	public function index(){

		if($this->session->userdata('email')){
			redirect('user');
		}

		$this->form_validation->set_rules('email','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run()==false){

			$data['title']='Login Page';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}else{
			//validasi sukses
			$this->_login();
		}
		
	}

	private function _login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//amdil data di db
		$user = $this->db->get_where('user',['email' =>$email])->row_array();

		if ($user) {
			//user ada
			if ($user ['is_active'] == 1) {
				//cek user aktif
				if (password_verify($password, $user['password'])) {
					$data = [
						'email'=> $user['email'],
						'role_id'=> $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('admin');
					}else{
						redirect('kegiatan/tak');
					}
					
				} else {
					$this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert"> Wrong password!</div>');
					redirect('auth');
				}
	
			} else{
				$this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('massage','
				<div class="alert alert-danger" role="alert">
				Your email is not registered!
				</div>');
			redirect('auth');
		}

	}

	


	/*private function _sendEmail(){
		$config = [

			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'alphabed2021@gmail.com',
			'smtp_pass' => '@beta2021',
			'smtp_port' => 465,
			'mailtype'	=> 'html',
			'charset'	=> 'utf-8',
			'newline'	=> "\r\n"

		];

		$this->load->library('email',$config);

		$this->email->from('alphabed2021@gmail.com', 'Kua SDA');
		$this->email->to('dhanidwi383@gmail.com');
		$this->email->subject('testing');
		$this->email->message('Hallo World!');


		if($this->email->send()){
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}
	}*/

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('massage','
				<div class="alert alert-success" role="alert">
				You have been logout!
				</div>');
			redirect('auth');
	}


	public function blocked(){
		$this->load->view('auth/blocked');
	}
}
