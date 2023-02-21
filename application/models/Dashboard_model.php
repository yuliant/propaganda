<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function projustisia()
  {
    $this->db->where('tgl_l >= ', date('Y-m-d'));
    $data = $this->db->get('projustisia');
    return $data;
  }

  public function departure()
  {
    $this->db->where('tgl_l >=', date('Y-m-d'));
    $this->db->where('pasal >=', date('H:i:s'));
    $data = $this->db->get('tak');
    return $data;
  }

  public function tak()
  {
    $this->db->group_by('jk');
    $this->db->select('jk');
    $this->db->select("count(*) as total");
    return $this->db->from('tak')
      ->get()
      ->result();
  }

  public function projus()
  {
    $this->db->group_by('jk');
    $this->db->select('jk');
    $this->db->select("count(*) as total");
    return $this->db->from('projustisia')
      ->get()
      ->result();
  }

  public function deportasi()
  {
    $this->db->group_by('jk');
    $this->db->select('jk');
    $this->db->select("count(*) as total");
    return $this->db->from('deportasi')
      ->get()
      ->result();
  }

  public function deteni()
  {
    $this->db->group_by('jk');
    $this->db->select('jk');
    $this->db->select("count(*) as total");
    return $this->db->from('deteni')
      ->get()
      ->result();
  }

  public function bap()
  {
    $this->db->group_by('jk');
    $this->db->select('jk');
    $this->db->select("count(*) as total");
    return $this->db->from('bap')
      ->get()
      ->result();
  }
}
