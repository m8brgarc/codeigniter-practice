<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    private $data = array();
    public function index()
    {
        $this->data['title'] = 'Homepage';
        $this->template->load('layout', 'page/index', $this->data);
    }

    public function about()
    {
        $this->data['title'] = 'About Us';
        $this->template->load('layout', 'page/about', $this->data);
    }

    public function calendar($year = null, $month = null)
    {
        $y = empty($year) ? date('Y') : $year;
        $m = empty($month) ? date('n') : $month;
        $this->load->library('calendar', array(
            'show_next_prev' => true,
            'next_prev_url' => site_url('/calendar'),
            'day_type' => 'short',
            'template' => calendar_template()
        ));
        $this->data['calendar'] = $this->calendar->generate($y, $m);
        $this->data['title'] = 'Calendar';
        $this->template->load('layout', 'page/calendar', $this->data);
    }

    public function contact()
    {
        $this->load->helper('form');
        $this->data['title'] = 'Contact Us';
        $this->data['posted_info'] = implode('<br/>', $this->input->post());
        $this->template->load('layout', 'page/contact', $this->data);
    }
}