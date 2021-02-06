<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->library('form_validation');
        $data['message_array'] = $this->message_model->get_message();
        $this->load->view('admin/index', $data);
    }
    public function edit()
    {

    }
    public function download()
    {

    }
}
