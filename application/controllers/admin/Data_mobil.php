<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Rental_mobil_model', 'data_mobil');
    }


    public function index()
    {
        $data['title'] = "Data_mobil";
        $data['data_mobil'] = $this->data_mobil->getAllRentalmobil();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Data_mobil/index', $data);
        // $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil()
    {
        $data['title'] = "Data_mobil";
        $data['data_mobil'] = $this->data_mobil->getAllRentalmobil();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Data_mobil/form_tambah_mobil', $data);
        $this->load->view('templates_admin/footer');
    }
}

// class Data_mobil extends CI_Controller
// {
//     public function index()
//     {
//         $data['mobil'] = $this->rental_model->get_data('mobil')->result();
//         $this->load->view('templates_admin/header');
//         $this->load->view('templates_admin/sidebar');
//         $this->load->view('admin/data_mobil', $data);
//         $this->load->view('templates_admin/footer');
//     }
// }
