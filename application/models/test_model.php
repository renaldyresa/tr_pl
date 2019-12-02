<?php
class test_model extends CI_Model
{
    private $_table = 'test';
    public function getData()
    {
        $this->db->select('id_test, nama, jenis');
        $this->db->from($this->_table);
        return $this->db->get()->result();
    }
}
