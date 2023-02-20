<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		
	}

	public function index()
	{

		$data['title'] = 'Tambah User';
		$data ['user'] =$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['login'] = $this->db->get_where('user',['role_id'=>2])->result_array();
		$data['userall']=$this->db->get('user')->result_array();

		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Username','required|trim|is_unique[user.email]',[
			'is_unique'=> 'This Username has already registered!'
		]);

		if ($this->form_validation->run()== false) {
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('admin/index',$data);
			$this->load->view('templates/footer');
		}else{
			$pass=1234;
			$data=[
				'name'=>htmlspecialchars($this->input->post('nama',true)),
				'email'=>htmlspecialchars($this->input->post('email',true)),
				'image'=>'default.png',
				'password'=>password_hash($pass, PASSWORD_DEFAULT),
				'role_id'=>2,
				'is_active'=>1,
				'date_created'=>time()
			];

			$this->db->insert('user',$data);

			//$this->_sendEmail();

			$this->session->set_flashdata('massage','
				<div class="alert alert-success" role="alert">
				User baru telah ditambahkan!
				</div>');
			redirect('admin/index');
		}

	}

	


	public function role(){
		$data['title'] = 'Role';
		$data ['user'] =$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['role']= $this->db->get('user_role')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role',$data);
		$this->load->view('templates/footer');
	}


	public function roleAccess($role_id){
		$data['title'] = 'Role Access';
		$data ['user'] =$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

		$data['role']= $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=',1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role-access',$data);
		$this->load->view('templates/footer');
	}

	public function changeAccess(){
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleID');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result= $this->db->get_where('user_access_menu',$data);

		if($result->num_rows() < 1){
			$this->db->insert('user_access_menu',$data);
		}else{
			$this->db->delete('user_access_menu',$data);
		}

		$this->session->set_flashdata('massage','
				<div class="alert alert-success" role="alert">
				Access Changed!
				</div>');


	}

}