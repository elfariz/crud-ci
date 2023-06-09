<?php

class M_data extends CI_Model{

    private $_table = 'kontak';

    function show_data(){
        return $this->db->get($this->_table);
    }

    function input($data) {
        $this->db->insert($this->_table, $data);
    }

    function getById($id)
    {
        return $this->db->get_where($this->_table, $id);
    }

    function update($id, $data){
        $this->db->update($this->_table, $data, ['id' => $id]);
    }

    function delete($id){
        $this->db->delete($this->_table, ['id' => $id]);
    }

}

?>