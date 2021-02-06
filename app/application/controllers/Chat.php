<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
    public function index()
    {
        $this->load->library('form_validation');

        if (! $this->input->post('name')
            || ! $this->input->post('message') ) {
            $this->form_validation->set_rules('name', '表示名', 'required',
                array('required' => '%sを入力してください'));
            $this->form_validation->set_rules('message', 'ひと言メッセージ', 'required',
              array('required' => '%sを入力してください'));

            if ($this->form_validation->run() === TRUE) {

            }
        }

        $this->load->view('chat/index');
    }
}
