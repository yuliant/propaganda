<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pora_model extends CI_Model{
	public function tambah(){


		$upload_foto1=$_FILES['foto1']['name'];
		$upload_foto2=$_FILES['foto2']['name'];
		$upload_foto3=$_FILES['foto3']['name'];



		if($upload_foto_1){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/pora/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto_1')){


					$foto_1=$this->upload->data('file_name');
					

				}else{
					echo $this->upload->display_errors();
				}

			}

			if($upload_foto2){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/pora/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto2')){


					$foto2=$this->upload->data('file_name');
					

				}else{
					echo $this->upload->display_errors();
				}

			}

			if($upload_foto3){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/pora/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto3')){


					$foto2=$this->upload->data('file_name');
					

				}else{
					echo $this->upload->display_errors();
				}

			}


		$data=[
			"kegiatan"=>$this->input->post('kegiatan',true),
			"tempat"=>$this->input->post('tempat',true),
			"tgl"=>$this->input->post('tgl',true),
			"anggota"=>$this->input->post('anggota',true),
			"target"=>$this->input->post('target',true),
			"hasil"=>$this->input->post('hasil',true),
			"foto1"=>$foto1,
			"foto2"=>$foto2,
			"foto3"=>$foto3
		];

		
		$this->db->insert('pora', $data);
	}

	public function update(){

		$id_pora=$this->input->post('id_pora',true);
		$data['pora']=$this->db->get_where('pora',['id_pora' => $id_pora])->row_array();

		$upload_foto1=$_FILES['foto1']['name'];
		
		if($upload_foto1){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/pora/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto1')){


					$old_foto1 = $data['pora']['foto1'];
					
					unlink(FCPATH . 'assets/berkas/pora' . $old_foto1);
					

					$new_foto1=$this->upload->data('file_name');
					$this->db->set('foto1',$new_foto1);

				}else{
					echo $this->upload->display_errors();
				}
			}


			$upload_foto2=$_FILES['foto2']['name'];
			if($upload_foto2){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/pora/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto2')){

					$old_foto2 = $data['pora']['foto2'];
					
					unlink(FCPATH . 'assets/berkas/pora' . $old_foto2);
					

					$new_foto2=$this->upload->data('file_name');
					$this->db->set('foto2',$new_foto2);

				}else{
					echo $this->upload->display_errors();
				}
			}
			$upload_foto3=$_FILES['foto3']['name'];
			if($upload_foto3){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/pora/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto3')){

					$old_foto3 = $data['pora']['foto3'];
					
					unlink(FCPATH . 'assets/berkas/pora' . $old_foto3);
					

					$new_foto3=$this->upload->data('file_name');
					$this->db->set('foto3',$new_foto3);

				}else{
					echo $this->upload->display_errors();
				}
			}

		$data=[

			"kegiatan"=>$this->input->post('kegiatan',true),
			"tempat"=>$this->input->post('tempat',true),
			"tgl"=>$this->input->post('tgl',true),
			"anggota"=>$this->input->post('anggota',true),
			"target"=>$this->input->post('target',true),
			"hasil"=>$this->input->post('hasil',true)
		];

		$this->db->set($data);
		$this->db->where('id_pora',$id_pora);
		$this->db->update('pora');

	}
}