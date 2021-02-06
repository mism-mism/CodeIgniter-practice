<?php


class Message_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_message($id = null) {
        if ($id === null)
        {
            $query = $this->db->get_where('message');
            return $query->result_array();
        }

        $query = $this->db->get_where('message', array('id' => $id));
        return $query->row_array();
    }

    public function set_message()
    {
        $this->load->helper('url');
        $now_date = date("Y-m-d H:i:s");
        $data = array(
            'view_name' => $this->input->post('view_name'),
            'message' => $this->input->post('message'),
            'post_date' => $now_date
        );

        return $this->db->insert('message', $data);
    }
}