<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
	public function __constuct()
	{
		parent::__constuct();
		is_logged_in();
	}

	public function json_tak()
	{
		$this->load->view('kegiatan/tak_json');
	}

	public function tak()
	{
		$data['title'] = 'Departure';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->where('tgl_l >=', date('Y-m-d'));
		$data['tak'] = $this->db->get('tak')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		// $this->form_validation->set_rules('masa','Masa Berlaku','required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		// $this->form_validation->set_rules('sponsor','Sponsor','required');
		// $this->form_validation->set_rules('niora','niora','required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		// $this->form_validation->set_rules('pasal','Pasal','required');
		// $this->form_validation->set_rules('pelanggaran','pelanggaran','required');
		// $this->form_validation->set_rules('no_putusan','No Putusan','required');
		// // $this->form_validation->set_rules('isi','isi Putusn','required');
		// $this->form_validation->set_rules('tgl_putusan','Tgl Putusan','required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/tak', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Tak_model');
			$this->Tak_model->tambah();

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Data Departure ditambahkan!
				</div>');
			redirect('kegiatan/tak');
		}
	}

	public function detail_tak($id_tak)
	{
		$data['title'] = 'Detail Departure';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['tak'] = $this->db->get_where('tak', ['id_tak' => $id_tak])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kegiatan/detail_tak', $data);
		$this->load->view('templates/footer');
	}

	public function edit_tak($id_tak)
	{
		$data['title'] = 'Edit Data Departure';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['tak'] = $this->db->get_where('tak', ['id_tak' => $id_tak])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		// $this->form_validation->set_rules('masa','Masa Berlaku','required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		// $this->form_validation->set_rules('sponsor','Sponsor','required');
		// $this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		// $this->form_validation->set_rules('pasal','Pasal','required');
		// $this->form_validation->set_rules('pelanggaran','pelanggaran','required');
		// $this->form_validation->set_rules('no_putusan','No Putusan','required');
		// $this->form_validation->set_rules('isi','isi Putusn','required');
		// $this->form_validation->set_rules('tgl_putusan','Tgl Putusan','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_tak', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Tak_model');
			$this->Tak_model->update();

			$this->session->set_flashdata('messagedt', '
				<div class="alert alert-success" role="alert">
				Data Departure berhasil diubah!
				</div>');
			redirect('kegiatan/edit_tak/' . $id_tak);
		}
	}


	public function delete_tak($id_tak)
	{
		$this->db->where('id_tak', $id_tak);
		$this->db->delete('tak');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Data Departure berhasil dihapus!
			</div>');
		redirect('kegiatan/tak');
	}


	public function projustisia()
	{

		$data['title'] = 'Arrival';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['projustisia'] = $this->db->get('projustisia')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		// $this->form_validation->set_rules('masa','Masa Berlaku','required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		// $this->form_validation->set_rules('sponsor','Sponsor','required');
		// $this->form_validation->set_rules('niora','niora','required');
		// $this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		// $this->form_validation->set_rules('pasal','Pasal','required');
		// $this->form_validation->set_rules('pelanggaran','pelanggaran','required');
		// $this->form_validation->set_rules('no_putusan','No Putusan','required');
		// $this->form_validation->set_rules('isi','isi Putusn','required');
		// $this->form_validation->set_rules('tgl_putusan','Tgl Putusan','required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/projust', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Projust_model');
			$this->Projust_model->tambah();

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Data Arrival ditambahkan!
				</div>');
			redirect('kegiatan/projustisia');
		}
	}

	public function detail_projus($id_projus)
	{
		$data['title'] = 'Detail Arrival';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['projus'] = $this->db->get_where('projustisia', ['id_projus' => $id_projus])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kegiatan/detail_projus', $data);
		$this->load->view('templates/footer');
	}

	public function edit_projus($id_projus)
	{
		$data['title'] = 'Edit Data Arrival';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['projus'] = $this->db->get_where('projustisia', ['id_projus' => $id_projus])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		// $this->form_validation->set_rules('masa','Masa Berlaku','required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		// $this->form_validation->set_rules('sponsor','Sponsor','required');
		// $this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		// $this->form_validation->set_rules('pasal','Pasal','required');
		// $this->form_validation->set_rules('pelanggaran','pelanggaran','required');
		// $this->form_validation->set_rules('no_putusan','No Putusan','required');
		// $this->form_validation->set_rules('isi','isi Putusn','required');
		// $this->form_validation->set_rules('tgl_putusan','Tgl Putusan','required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_projus', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Projust_model');
			$this->Projust_model->update();

			$this->session->set_flashdata('messagedt', '
				<div class="alert alert-success" role="alert">
				Data Arrival berhasil diubah!
				</div>');
			redirect('kegiatan/edit_projus/' . $id_projus);
		}
	}


	public function delete_projus($id_projus)
	{
		$this->db->where('id_projus', $id_projus);
		$this->db->delete('projustisia');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Data Arrival berhasil dihapus!
			</div>');
		redirect('kegiatan/projustisia');
	}


	public function deportasi()
	{

		$data['title'] = 'Deportasi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['dep'] = $this->db->get('deportasi')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		// $this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		// $this->form_validation->set_rules('alamat','alamat','required');
		// $this->form_validation->set_rules('paspor','No Paspor','required');
		// $this->form_validation->set_rules('masa','Masa Berlaku','required');
		// $this->form_validation->set_rules('kebangsaan','Kebangsaan Berlaku','required');
		// $this->form_validation->set_rules('sponsor','Sponsor','required');
		// $this->form_validation->set_rules('niora','niora','required');
		// $this->form_validation->set_rules('jabatan','Jabatan','required');
		// $this->form_validation->set_rules('jenis_doc','Jenis Dokumen','required');
		// $this->form_validation->set_rules('pasal','Pasal','required');
		// $this->form_validation->set_rules('pelanggaran','pelanggaran','required');
		// $this->form_validation->set_rules('no_putusan','No Putusan','required');
		// $this->form_validation->set_rules('isi','isi Putusn','required');
		// $this->form_validation->set_rules('tgl_putusan','Tgl Putusan','required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/deportasi', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('deportasi_model');
			$this->deportasi_model->tambah();

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Data deportasi ditambahkan!
				</div>');
			redirect('kegiatan/deportasi');
		}
	}

	public function detail_deportasi($id_deportasi)
	{
		$data['title'] = 'Detail deportasi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['dep'] = $this->db->get_where('deportasi', ['id_deportasi' => $id_deportasi])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kegiatan/detail_deportasi', $data);
		$this->load->view('templates/footer');
	}

	public function edit_deportasi($id_deportasi)
	{
		$data['title'] = 'Edit Data deportasi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['dep'] = $this->db->get_where('deportasi', ['id_deportasi' => $id_deportasi])->row_array();


		$this->form_validation->set_rules('nama', 'Nama', 'required');
		// $this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		// $this->form_validation->set_rules('paspor','No Paspor','required');
		// $this->form_validation->set_rules('masa','Masa Berlaku','required');
		// $this->form_validation->set_rules('kebangsaan','Kebangsaan Berlaku','required');
		// $this->form_validation->set_rules('sponsor','Sponsor','required');
		// $this->form_validation->set_rules('jabatan','Jabatan','required');
		// $this->form_validation->set_rules('jenis_doc','Jenis Dokumen','required');
		// $this->form_validation->set_rules('pasal','Pasal','required');
		// $this->form_validation->set_rules('pelanggaran','pelanggaran','required');
		// $this->form_validation->set_rules('no_putusan','No Putusan','required');
		// $this->form_validation->set_rules('isi','isi Putusn','required');
		// $this->form_validation->set_rules('tgl_putusan','Tgl Putusan','required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_deportasi', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('deportasi_model');
			$this->deportasi_model->update();

			$this->session->set_flashdata('messagedt', '
				<div class="alert alert-success" role="alert">
				Data deportasi berhasil diubah!
				</div>');
			redirect('kegiatan/edit_deportasi');
		}
	}

	public function delete_deportasi($id_deportasi)
	{
		$this->db->where('id_deportasi', $id_deportasi);
		$this->db->delete('deportasi');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Data deportasi berhasil dihapus!
			</div>');
		redirect('kegiatan/deportasi');
	}


	public function deteni()
	{

		$data['title'] = 'Deteni';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['deteni'] = $this->db->get('deteni')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		$this->form_validation->set_rules('masa', 'Masa Berlaku', 'required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		$this->form_validation->set_rules('sponsor', 'Sponsor', 'required');
		$this->form_validation->set_rules('niora', 'niora', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		$this->form_validation->set_rules('pasal', 'Pasal', 'required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'required');
		$this->form_validation->set_rules('no_putusan', 'No Putusan', 'required');
		$this->form_validation->set_rules('isi', 'isi Putusn', 'required');
		$this->form_validation->set_rules('tgl_putusan', 'Tgl Putusan', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/deteni', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Deteni_model');
			$this->Deteni_model->tambah();

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Data deteni ditambahkan!
				</div>');
			redirect('kegiatan/deteni');
		}
	}

	public function detail_deteni($id_deteni)
	{
		$data['title'] = 'Detail Deteni';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['deteni'] = $this->db->get_where('deteni', ['id_deteni' => $id_deteni])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kegiatan/detail_deteni', $data);
		$this->load->view('templates/footer');
	}

	public function edit_deteni($id_deteni)
	{
		$data['title'] = 'Edit Data Deteni';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['deteni'] = $this->db->get_where('deteni', ['id_deteni' => $id_deteni])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		$this->form_validation->set_rules('masa', 'Masa Berlaku', 'required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		$this->form_validation->set_rules('sponsor', 'Sponsor', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		$this->form_validation->set_rules('pasal', 'Pasal', 'required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'required');
		$this->form_validation->set_rules('no_putusan', 'No Putusan', 'required');
		$this->form_validation->set_rules('isi', 'isi Putusn', 'required');
		$this->form_validation->set_rules('tgl_putusan', 'Tgl Putusan', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_deteni', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Deteni_model');
			$this->Deteni_model->update();

			$this->session->set_flashdata('messagedt', '
				<div class="alert alert-success" role="alert">
				Data deteni berhasil diubah!
				</div>');
			redirect('kegiatan/edit_deteni/' . $id_deteni);
		}
	}

	public function delete_deteni($id_deteni)
	{
		$this->db->where('id_deteni', $id_deteni);
		$this->db->delete('deteni');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Data deteni berhasil dihapus!
			</div>');
		redirect('kegiatan/deteni');
	}


	public function pora()
	{

		$data['title'] = 'Agenda Kantor';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pora'] = $this->db->get('pora')->result_array();

		$this->form_validation->set_rules('kegiatan', 'Nama Kegiatan', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required');
		$this->form_validation->set_rules('tgl', 'Tgl Kegiatan', 'required');
		$this->form_validation->set_rules('anggota', 'Nama Anggota', 'required');
		$this->form_validation->set_rules('hasil', 'Hasil', 'required');



		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/pora', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Pora_model');
			$this->Pora_model->tambah();

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Data Pora ditambahkan!
				</div>');
			redirect('kegiatan/pora');
		}
	}

	public function detail_pora($id_pora)
	{
		$data['title'] = 'Detail Pora';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pora'] = $this->db->get_where('pora', ['id_pora' => $id_pora])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kegiatan/detail_pora', $data);
		$this->load->view('templates/footer');
	}

	public function edit_pora($id_pora)
	{
		$data['title'] = 'Edit Agenda Kantor';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pora'] = $this->db->get_where('pora', ['id_pora' => $id_pora])->row_array();

		$this->form_validation->set_rules('kegiatan', 'Nama Kegiatan', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required');
		$this->form_validation->set_rules('tgl', 'Tgl Kegiatan', 'required');
		$this->form_validation->set_rules('anggota', 'Nama Anggota', 'required');
		$this->form_validation->set_rules('hasil', 'Hasil', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_pora', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Pora_model');
			$this->Pora_model->update();

			$this->session->set_flashdata('messagedt', '
				<div class="alert alert-success" role="alert">
				Agenda Kantor berhasil diubah!
				</div>');
			redirect('kegiatan/edit_pora/' . $id_pora);
		}
	}

	public function delete_pora($id_pora)
	{
		$this->db->where('id_pora', $id_pora);
		$this->db->delete('pora');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Agenda Kantor berhasil dihapus!
			</div>');
		redirect('kegiatan/pora');
	}


	public function bap()
	{

		$data['title'] = 'BAP WNA';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['bap'] = $this->db->get('bap')->result_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		$this->form_validation->set_rules('masa', 'Masa Berlaku', 'required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		$this->form_validation->set_rules('sponsor', 'Sponsor', 'required');
		$this->form_validation->set_rules('niora', 'niora', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		$this->form_validation->set_rules('pasal', 'Pasal', 'required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'required');
		$this->form_validation->set_rules('no_putusan', 'No Putusan', 'required');
		$this->form_validation->set_rules('isi', 'isi Putusn', 'required');
		$this->form_validation->set_rules('tgl_putusan', 'Tgl Putusan', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/bap', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('bap_model');
			$this->bap_model->tambah();

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Data BAP ditambahkan!
				</div>');
			redirect('kegiatan/bap');
		}
	}

	public function detail_bap($id_bap)
	{
		$data['title'] = 'Detail BAP';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['bap'] = $this->db->get_where('bap', ['id_bap' => $id_bap])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kegiatan/detail_bap', $data);
		$this->load->view('templates/footer');
	}

	public function edit_bap($id_bap)
	{
		$data['title'] = 'Edit Data BAP';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['bap'] = $this->db->get_where('bap', ['id_bap' => $id_bap])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_l', 'Tgl Lahir', 'required');
		$this->form_validation->set_rules('paspor', 'No Paspor', 'required');
		$this->form_validation->set_rules('masa', 'Masa Berlaku', 'required');
		$this->form_validation->set_rules('kebangsaan', 'Kebangsaan Berlaku', 'required');
		$this->form_validation->set_rules('sponsor', 'Sponsor', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('jenis_doc', 'Jenis Dokumen', 'required');
		$this->form_validation->set_rules('pasal', 'Pasal', 'required');
		$this->form_validation->set_rules('pelanggaran', 'pelanggaran', 'required');
		$this->form_validation->set_rules('no_putusan', 'No Putusan', 'required');
		$this->form_validation->set_rules('isi', 'isi Putusn', 'required');
		$this->form_validation->set_rules('tgl_putusan', 'Tgl Putusan', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_bap', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('Bap_model');
			$this->Bap_model->update();

			$this->session->set_flashdata('messagedt', '
				<div class="alert alert-success" role="alert">
				Data BAP berhasil diubah!
				</div>');
			redirect('kegiatan/edit_bap/' . $id_bap);
		}
	}

	public function update_bap()
	{
		$data['title'] = 'Edit Data BAP';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['bap'] = $this->db->get_where('bap', ['id_bap' => $id_bap])->row_array();
	}

	public function delete_bap($id_bap)
	{
		$this->db->where('id_bap', $id_bap);
		$this->db->delete('bap');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Data BAP berhasil dihapus!
			</div>');
		redirect('kegiatan/bap');
	}

	public function anggaran()
	{
		$data['title'] = 'Anggaran';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ang'] = $this->db->get('anggaran')->result_array();



		$this->form_validation->set_rules('nama', 'Nama Anggaran', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah Anggaran', 'required');


		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/anggaran', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				"nama" => $this->input->post('nama', true),
				"jumlah" => $this->input->post('jumlah', true)
			];


			$this->db->insert('anggaran', $data);
			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Anggaran baru telah ditambahkan!
				</div>');
			redirect('kegiatan/anggaran');
		}
	}

	public function edit_ang($id_ang)
	{
		$data['title'] = 'Edit Anggaran';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ang'] = $this->db->get_where('anggaran', ['id_ang' => $id_ang])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Anggaran', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah Anggaran', 'required');


		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kegiatan/edit_ang', $data);
			$this->load->view('templates/footer');
		} else {
			$jumlah = $this->input->post('jumlah', true);
			$nama = $this->input->post('nama', true);

			$this->db->set('nama', $nama);
			$this->db->set('jumlah', $jumlah);
			$this->db->where('id_ang', $id_ang);
			$this->db->update('anggaran');

			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
				Anggaran berhasil diubah!
				</div>');
			redirect('kegiatan/edit_ang/' . $id_ang);
		}
	}

	public function delete_ang($id_ang)
	{
		$this->db->where('id_ang', $id_ang);
		$this->db->delete('anggaran');


		$this->session->set_flashdata('messagedt', '
			<div class="alert alert-success" role="alert">
				Data Anggaran berhasil dihapus!
			</div>');
		redirect('kegiatan/anggaran');
	}
}
