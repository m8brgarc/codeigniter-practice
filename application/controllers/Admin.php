<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function migration($version)
    {
        $this->load->library("migration");

        if ($this->migration->version($version) === FALSE)
        {
            show_error($this->migration->error_string());
        }
    }
}