<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_home');
    }

    public function cetak()
    {


        $merek = $this->input->post('merek');
        if ($merek == 'Nike') {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => "375000"
            ];
        }
        if ($merek == 'Adidas') {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => "300000"
            ];
        }
        if ($merek == 'Bucherri') {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => "400000"
            ];
        }
        if ($merek == 'Kickers') {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => "250000"
            ];
        }
        if ($merek == 'Eiger') {
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => "275000"
            ];
        }
        $this->load->view('view-sepatu', $data);
    }
}
