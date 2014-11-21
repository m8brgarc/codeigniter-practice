<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    private $data = array();
    public function index()
    {
        $this->data['title'] = 'All Articles';
        $this->template->load('layout', 'article/index', $this->data);
    }
}