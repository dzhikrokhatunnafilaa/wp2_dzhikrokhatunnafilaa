<<<<<<< HEAD
<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_lenght' => 'Kode terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
=======
<?php 
class Matakuliah extends CI_Controller 
{  
     public function index() 
    { 

     $this->load->view('view-form-matakuliah');    
    } 
    public function cetak()
    {
        $this->form_validation->set_rules('kode','kode Matakuliah','required|min_lenght[3]',
        ['required'=>'kode Matakuliah Harus Diisi',
        'min_lenght'=>'kode terlalu pendek']);

        $this->form_validation->set_rules('nama','nama Matakuliah','required|min_lenght[3]',
        ['required'=>'nama Matakuliah Harus Diisi',
        'min_lenght'=>'nama terlalu pendek']);
    
        if ($this->form_validation->run()!= true){
            $this->view('view-form-matakuliah');
        }else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks') 
        ];
         $this-load->view('view-data-matakuliah',$data);
        }
    }

}
 

        
>>>>>>> 73e0b997d2a42375080be599dc8909c9a94125c5
