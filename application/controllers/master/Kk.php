<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function Index()
    {
        $data['title'] = 'Data Kartu Keluarga Makassar B';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->model('Kk_Model', 'kk');
        $data['kk'] = $this->kk->getKk();

        $this->load->helper('url');       //pointer sidebar
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/kk/index', $data);
        $this->load->view('templates/footer');
    }
    public function Panakkukang()
    {
        $data['namakec'] = 'panakkukang';
        $data['title'] = 'Data Kartu Keluarga Kec. ' . ucfirst($data['namakec']);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris
        $this->load->model('Kk_Model', 'kk');
        $data['kk'] = $this->kk->getKkKecamatan($data['namakec']);

        $this->load->helper('url');       //pointer sidebar
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/kk/kecamatan', $data);
        $this->load->view('templates/footer');
    }
    public function Biringkanaya()
    {
        $data['namakec'] = 'biringkanaya';
        $data['title'] = 'Data Kartu Keluarga Kec. ' . ucfirst($data['namakec']);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->model('Kk_Model', 'kk');
        $data['kk'] = $this->kk->getKkKecamatan($data['namakec']);

        $this->load->helper('url');       //pointer sidebar
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/kk/kecamatan', $data);
        $this->load->view('templates/footer');
    }
    public function Manggala()
    {
        $data['namakec'] = 'manggala';
        $data['title'] = 'Data Kartu Keluarga Kec. ' . ucfirst($data['namakec']);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->model('Kk_Model', 'kk');
        $data['kk'] = $this->kk->getKkKecamatan($data['namakec']);

        $this->load->helper('url');       //pointer sidebar
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/kk/kecamatan', $data);
        $this->load->view('templates/footer');
    }
    public function Tamalanrea()
    {
        $data['namakec'] = 'tamalanrea';
        $data['title'] = 'Data Kartu Keluarga Kec. ' . ucfirst($data['namakec']);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->model('Kk_Model', 'kk');
        $data['kk'] = $this->kk->getKkKecamatan($data['namakec']);

        $this->load->helper('url');       //pointer sidebar
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/kk/kecamatan', $data);
        $this->load->view('templates/footer');
    }
}
