<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nik', 'label' => 'Nik', 'rules' => 'required'],
            ['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
            ['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
            ['field' => 'program', 'label' => 'Program', 'rules' => 'required'],
            ['field' => 'tanggapan', 'label' => 'Tanggapan', 'rules' => 'required']
        ];
    }
    function getKecamatan()
    {
        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get('kec');
        $response = $q->result_array();

        return $response;
    }

    function getKelurahan($postData)
    {

        $response = array();

        // Select record
        $this->db->select('iddesa,namakel');
        $this->db->where('idkec', $postData['namakec']);
        $q = $this->db->get('kel');
        $response = $q->result_array();

        return $response;
    }
}
