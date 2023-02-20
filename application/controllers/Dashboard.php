<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index(){

		$this->load->model('Dashboard_model');
		$data['title'] = 'Dashboard';
		$this->db->where('tgl_l >= ', date('Y-m-d'));
		$data['departure'] =$this->db->get('tak')->result_array();
		$this->db->where('tgl_l >= ', date('Y-m-d'));
		$data['projustisia'] =$this->db->get('projustisia')->result_array();
		$data['dep'] =$this->db->get('deportasi')->result_array();
		$data['tak'] =$this->Dashboard_model->tak();
		$data['projus'] =$this->Dashboard_model->projus();
		$data['deportasi'] =$this->Dashboard_model->deportasi();
		$data['deteni'] =$this->Dashboard_model->deteni();
		$data['bap'] =$this->Dashboard_model->bap();
		$data['anggaran'] = $this->db->get('anggaran')->result_array();

		$this->load->view('templates/auth_header',$data);
		$this->load->view('auth/dashboard',$data);
		$this->load->view('templates/auth_footer');
		
		

	}
	

}