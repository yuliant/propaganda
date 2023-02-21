<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('Dashboard_model');
		$data['title'] = 'Dashboard';

		$data['departure'] = $this->Dashboard_model->departure()->result_array();
		$data['projustisia'] = $this->Dashboard_model->projustisia()->result_array();

		$data['dep'] = $this->db->get('deportasi')->result_array();
		$data['tak'] = $this->Dashboard_model->tak();
		$data['projus'] = $this->Dashboard_model->projus();
		$data['deportasi'] = $this->Dashboard_model->deportasi();
		$data['deteni'] = $this->Dashboard_model->deteni();
		$data['bap'] = $this->Dashboard_model->bap();
		$data['anggaran'] = $this->db->get('anggaran')->result_array();

		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/dashboard', $data);
		$this->load->view('templates/auth_footer');
	}

	public function arrival()
	{
		$this->load->model('Dashboard_model');
		$data['title'] = 'Dashboard';

		$data['departure'] = $this->Dashboard_model->departure()->result_array();
		$data['projustisia'] = $this->Dashboard_model->projustisia()->result_array();

		$data['dep'] = $this->db->get('deportasi')->result_array();
		$data['tak'] = $this->Dashboard_model->tak();
		$data['projus'] = $this->Dashboard_model->projus();
		$data['deportasi'] = $this->Dashboard_model->deportasi();
		$data['deteni'] = $this->Dashboard_model->deteni();
		$data['bap'] = $this->Dashboard_model->bap();
		$data['anggaran'] = $this->db->get('anggaran')->result_array();

		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/dashboard_arrival', $data);
		$this->load->view('templates/auth_footer');
	}

	public function json_departure()
	{
		$this->load->view('auth/dashboard_json');
	}
}
