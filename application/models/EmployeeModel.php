<?php

class EmployeeModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function insertEmployee($data)
    {
        return $this->db->insert('tbl_employee', $data);
    }

    public function getEmployee()
    {
        $query = $this->db->get('tbl_employee');
        return $query->result();
    }

    public function getEmployeeById($id)
    {
        $query = $this->db->get_where('tbl_employee', ['id' => $id]);
        return $query->row();
    }

    public function updateEmployee($data, $id)
    {
        return $this->db->update('tbl_employee', $data, ['id' => $id]);
    }

    public function deleteEmployee($id)
    {
        return $this->db->delete('tbl_employee', ['id' => $id]);
    }
}