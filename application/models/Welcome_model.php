<?php

class Welcome_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    private $table = 'preregistro';

    public function insert($data)
    {
        $LisOkey = $this->db->insert($this->table,$data);
        return ($LisOkey == true) ? true : false;

    }

    public function readData(){
        $rstQuery = $this->db->get($this->table);
        return $rstQuery->result_array();
    }