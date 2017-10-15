<?php
Class Con_mahasiswa extends CI_Controller {    
    function con_mahasiswa()  
    {  
        parent::__construct();  
        $this->load->model('mod_mahasiswa');
        $this->load->helper(array('url','form'));
    }
    function index() {
        $data['hasil'] = $this->mod_mahasiswa->getall();
        $this->load->view('view_mahasiswa', $data);
    }
     
   function tambahdata() {
        if($this->input->post('submit')){
            $this->mod_mahasiswa->tambah();
            redirect('con_mahasiswa');
        }
        $this->load->view('tambah_mahasiswa');
    }
}
?>