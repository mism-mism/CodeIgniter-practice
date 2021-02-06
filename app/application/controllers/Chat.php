<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
    public function index()
    {
        $this->load->library('form_validation');

        if (! $this->input->post('name')
            && ! $this->input->post('message') ) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run() === TRUE) {

            }
        }

        $this->load->view('chat/index');
    }
}
