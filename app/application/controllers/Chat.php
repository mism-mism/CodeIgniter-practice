<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->library('form_validation');
        $data['success_message'] = null;
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules('view_name', '表示名', 'required',
                array('required' => '%sを入力してください'));
            $this->form_validation->set_rules('message', 'ひと言メッセージ', 'required',
              array('required' => '%sを入力してください'));

            if ($this->form_validation->run() === TRUE) {
                $this->message_model->set_message();
                $data['success_message'] = 'メッセージを書き込みました。';
            }
        }

        $data['message_array'] = $this->message_model->get_message();
        $this->load->view('chat/index', $data);
    }
}
