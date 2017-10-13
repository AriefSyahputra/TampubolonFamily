<?php
class Mod_mahasiswa extends Model { 
    function getall() {
        $ambildata = $this->db->get('tb_mahasiswa');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
    function tambah() {
        $nim = $this->input->post('nim');
        $nama  = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $data = array (
            'nim' => $nim,
            'nama'  => $nama,
            'alamat'=> $alamat,
            'email' => $email
        );  
        $this->db->insert('tb_mahasiswa',$data);
    }
}
?>