<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class category extends MY_Model{

    private $db_tracker;

    public function __construct()
    {
        $this->db_tracker = $this->load->database('tracker',true,false);
    }

    public function list_all()
    {
        $query = $this->db_tracker->get('jt_categories');

        $list = $query->num_rows > 0 ? $query->result(): array();

        return $list;
    }


}
/**
 * Created by CTech.
 * Author: user
 * Date: 1/25/13
 * File: category.php
 */