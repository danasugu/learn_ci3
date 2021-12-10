<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendIndex_model extends CI_Model
{
    public function insert_index($client_data)
    {
        $this->db->insert('send_index', $client_data);
    }
}