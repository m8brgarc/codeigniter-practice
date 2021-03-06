<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

    public $title, $author, $text, $published, $created_at, $updated_at;

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
        $this->db->order_by('updated_at', 'DESC');
        $query = $this->db->get('article');

        return $query->result();
    }

    public function create()
    {
        $this->title = $this->input->post('title');
        $this->author = $this->input->post('author');
        $this->text = $this->input->post('text');
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');


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
        $this->updated_at = date('Y-m-d H:i:s');

        $this->db->update('article', $this, array('id' => $id));

        return $this->find($id);
    }

    public function delete($id)
    {
        $this->db->delete('article', array('id' => $id));
    }

}