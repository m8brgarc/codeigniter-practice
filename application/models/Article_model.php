<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

    public $title, $author, $text, $date_posted;

    public function __construct()
    {
        parent::__construct();
    }

    public function find($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('article');

        return $query->row();
    }

    public function all()
    {
        $this->db->order_by('date_posted', 'DESC');
        $query = $this->db->get('article');

        return $query->result();
    }

    public function create()
    {
        $this->title = $this->input->post('title');
        $this->author = $this->input->post('author');
        $this->text = $this->input->post('text');
        $this->date_posted = date('Y-m-d H:i:s');


        $this->db->insert('article', $this);

        $this->db->order_by('id', 'DESC')->limit(1);
        $query = $this->db->get('article');

        return $query->row();
    }

    public function update($id)
    {
        $this->title = $this->input->post('title');
        $this->author = $this->input->post('author');
        $this->text = $this->input->post('text');
        $this->date_posted = date('Y-m-d H:i:s');

        $this->db->update('article', $this, array('id' => $id));

        return $this->find($id);
    }

    public function delete($id)
    {
        $this->db->delete('article', array('id' => $id));
    }

}