<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class deteni_model extends CI_Model{
	public function tambah(){


		$upload_foto_paspor=$_FILES['foto_paspor']['name'];
		$upload_foto_wna=$_FILES['foto_wna']['name'];

		if ($upload_foto_paspor && $upload_foto_wna) {
			# code...
		}else{
			$this->session->set_flashdata('message','
				<div class="alert alert-danger" role="alert">
					Foto paspor dan WNA tidak boleh kosong!
				</div>');
			redirect('kegiatan/deteni');
		}



		if($upload_foto_paspor){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/deteni/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto_paspor')){


					$foto_paspor=$this->upload->data('file_name');
					

				}else{
					echo $this->upload->display_errors();
					$this->session->set_flashdata('message','
					<div class="alert alert-warning" role="alert">
					Foto paspor tidak boleh kosong!
					</div>');
					redirect('deteni');
				}

			}

			if($upload_foto_wna){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/deteni/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto_wna')){


					$foto_wna=$this->upload->data('file_name');
					

				}else{
					echo $this->upload->display_errors();
					$this->session->set_flashdata('message','
					<div class="alert alert-warning" role="alert">
					Foto WNA tidak boleh kosong!
					</div>');
					redirect('deteni');
				}

			}


		$data=[
			"nama"=>$this->input->post('nama',true),
			"jk"=>$this->input->post('jk',true),
			"alamat"=>$this->input->post('alamat',true),
			"tgl_l"=>$this->input->post('tgl_l',true),
			"paspor"=>$this->input->post('paspor',true),
			"masa"=>$this->input->post('masa',true),
			"niora"=>$this->input->post('niora',true),
			"kebangsaan"=>$this->input->post('kebangsaan',true),
			"sponsor"=>$this->input->post('sponsor',true),
			"jabatan"=>$this->input->post('jabatan',true),
			"jenis_doc"=>$this->input->post('jenis_doc',true),
			"tgl_masuk"=>$this->input->post('tgl_masuk',true),
			"tgl_keluar"=>$this->input->post('tgl_keluar',true),
			"pasal"=>$this->input->post('pasal',true),
			"pelanggaran"=>$this->input->post('pelanggaran',true),
			"no_putusan"=>$this->input->post('no_putusan',true),
			"isi"=>$this->input->post('isi',true),
			"tgl_putusan"=>$this->input->post('tgl_putusan',true),
			"foto_paspor"=>$foto_paspor,
			"foto_wna"=>$foto_wna
		];

		
		$this->db->insert('deteni', $data);
	}

	public function update(){
		$id_deteni=$this->input->post('id_deteni',true);
		$data['deteni']=$this->db->get_where('deteni',['id_deteni' => $id_deteni])->row_array();

		$upload_foto_paspor=$_FILES['foto_paspor']['name'];
		
		if($upload_foto_paspor){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/deteni/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto_paspor')){


					$old_foto_paspor = $data['deteni']['foto_paspor'];
					
					unlink(FCPATH . 'assets/berkas/deteni' . $old_foto_paspor);
					

					$new_foto_paspor=$this->upload->data('file_name');
					$this->db->set('foto_paspor',$new_foto_paspor);

				}else{
					echo $this->upload->display_errors();
				}
					
				

			}


			$upload_foto_wna=$_FILES['foto_wna']['name'];
			if($upload_foto_wna){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/berkas/deteni/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto_wna')){

					$old_foto_wna = $data['deteni']['foto_wna'];
					
					unlink(FCPATH . 'assets/berkas/deteni' . $old_foto_wna);
					

					$new_foto_wna=$this->upload->data('file_name');
					$this->db->set('foto_wna',$new_foto_wna);

				}else{
					echo $this->upload->display_errors();
				}
					
				

			}

		$data=[

			"nama"=>$this->input->post('nama',true),
			"jk"=>$this->input->post('jk',true),
			"alamat"=>$this->input->post('alamat',true),
			"tgl_l"=>$this->input->post('tgl_l',true),
			"paspor"=>$this->input->post('paspor',true),
			"masa"=>$this->input->post('masa',true),
			"niora"=>$this->input->post('niora',true),
			"kebangsaan"=>$this->input->post('kebangsaan',true),
			"sponsor"=>$this->input->post('sponsor',true),
			"jabatan"=>$this->input->post('jabatan',true),
			"jenis_doc"=>$this->input->post('jenis_doc',true),
			"tgl_masuk"=>$this->input->post('tgl_masuk',true),
			"tgl_keluar"=>$this->input->post('tgl_keluar',true),
			"pasal"=>$this->input->post('pasal',true),
			"pelanggaran"=>$this->input->post('pelanggaran',true),
			"no_putusan"=>$this->input->post('no_putusan',true),
			"isi"=>$this->input->post('isi',true),
			"tgl_putusan"=>$this->input->post('tgl_putusan',true)
			
		];

		$this->db->set($data);
		$this->db->where('id_deteni',$id_deteni);
		$this->db->update('deteni');

	}
}