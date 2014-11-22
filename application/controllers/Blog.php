<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('blog_model', 'Blog', TRUE);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $blogs = $this->Blog->all();
        $this->data['title'] = 'All Blog Posts';
        $this->data['blogs'] = $blogs;
        $this->data['msg'] = $this->session->flashdata('msg');
        $this->template->load('layout', 'blog/index', $this->data);
    }

    public function show_blog($id)
    {
        $blog = $this->Blog->find($id);
        $this->data['title'] = 'Blog Post - '.$blog->id;
        $this->data['blog'] = $blog;
        $this->data['msg'] = $this->session->flashdata('msg');
        $this->template->load('layout', 'blog/show', $this->data);
    }

    public function new_blog()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('author', 'Author', 'trim|required');
        $this->form_validation->set_rules('text', 'Text', 'trim|required');

        if($this->form_validation->run() === TRUE) {
            $blog = $this->Blog->create();
            $this->session->set_flashdata('msg', 'Post successfully created');
            redirect('blog/show/'.$blog->id);
        }

        $this->data['title'] = 'Create New Blog Post';
        $this->template->load('layout', 'blog/new', $this->data);
    }

    public function edit_blog($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('author', 'Author', 'trim|required');
        $this->form_validation->set_rules('text', 'Text', 'trim|required');

        if($this->form_validation->run() === TRUE) {
            $blog = $this->Blog->update($id);
            $this->session->set_flashdata('msg', 'Post successfully updated');
            redirect('blog/show/'.$blog->id);
        }

        $blog = $this->Blog->find($id);
        $this->data['title'] = 'Edit Blog Post';
        $this->data['blog'] = $blog;
        $this->template->load('layout', 'blog/edit', $this->data);
    }

    public function delete_blog($id)
    {
        $this->Blog->delete($id);
        $this->session->set_flashdata('msg', 'Post successfully deleted');
        redirect('blogs');
    }
}