<?php
defined('BASEPATH') or exit('No direct script access allowed');

class test extends CI_Controller
{
    public function index()
    {
        $this->load->model('test_model');
        $data['data'] = $this->test_model->getData();
        $this->load->view('test', $data);
    }
}
