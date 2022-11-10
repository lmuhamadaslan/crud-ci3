<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeeModel');
    }

    public function index()
    {
        $this->load->view('template/header');

        $model = new EmployeeModel();
        $data['employee'] = $model->getEmployee();
        $this->load->view('frontend/employee', $data);
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('frontend/create');
    }

    public function store()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run()) {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
            ];

            $model = new EmployeeModel();
            $model->insertEmployee($data);
            $this->session->set_flashdata('success', 'Employee Added Successfully');
            redirect(base_url('employee'));
        } else {
            $this->create();
        }
    }

    public function edit($id)
    {
        $this->load->view('template/header');

        $model = new EmployeeModel();
        $data['employee'] = $model->getEmployeeById($id);

        $this->load->view('frontend/edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required', 'valid_email');

        if ($this->form_validation->run()) {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
            ];

            $model = new EmployeeModel();
            $model->updateEmployee($data, $id);
            $this->session->set_flashdata('success', 'Employee Updated Successfully');
            redirect(base_url('employee'));
        } else {
            $this->edit($id);
        }
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->deleteEmployee($id);
        $this->session->set_flashdata('success', 'Employee Deleted Successfully');
        redirect(base_url('employee'));
    }
}