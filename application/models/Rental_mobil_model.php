<?php

class Rental_mobil_model extends CI_Model
{
    public function getAllRentalmobil()
    {
        return $this->db->get('mobil')->result_array();
    }

    public function tambah()
    {
        $data = array(
            'nama_mobil' => $this->input->post('nama_mobil'),
            'img_mobil' => $this->input->post('img_mobil'),
            'no_plat' => $this->input->post('no_plat'),
            'merk_mobil' => $this->input->post('merk_mobil'),
            'warna' => $this->input->post('warna'),
            'tahun' => $this->input->post('tahun'),
            'status' => $this->input->post('status'),
            'harga' => $this->input->post('harga'),
        );
        $this->db->insert('mobil', $data);
        return $this->db->affected_rows();
    }
}
