<?php
class M_data extends CI_Model{
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function tampil_data(){
        return $this->db->get('mahasiswa');
    }

    function edit($where,$table){
        return $this->db->get_where($table,$where);
    }

    function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>