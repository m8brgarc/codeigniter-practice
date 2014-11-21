<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('article_model', 'Article', TRUE);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $articles = $this->Article->all();
        $this->data['articles'] = $articles;
        $this->data['msg'] = $this->session->flashdata('msg');
        $this->data['title'] = 'All Articles';
        $this->template->load('layout', 'article/index', $this->data);
    }

    public function show_article($id)
    {
        $article = $this->Article->find($id);
        $this->data['article'] = $article;
        $this->data['msg'] = $this->session->flashdata('msg');
        $this->data['title'] = 'Article - '.$article->title;
        $this->template->load('layout', 'article/show', $this->data);
    }

    public function new_article()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('author', 'Author', 'trim|required');
        $this->form_validation->set_rules('text', 'Text', 'trim|required');

        if($this->form_validation->run() == TRUE) {
            $article = $this->Article->create();
            $this->session->set_flashdata('msg', 'Article successfully created');
            redirect('article/show/'.$article->id);
        }
        $this->data['title'] = 'Create New Article';
        $this->template->load('layout', 'article/new', $this->data);
    }

    public function edit_article($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('author', 'Author', 'trim|required');
        $this->form_validation->set_rules('text', 'Text', 'trim|required');

        if($this->form_validation->run() == TRUE) {
            $article = $this->Article->update($id);
            $this->session->set_flashdata('msg', 'Article successfully updated');
            redirect('article/show/'.$article->id);
        }
        $this->data['title'] = 'Edit Article';
        $this->data['article'] = $this->Article->find($id);
        $this->template->load('layout', 'article/edit', $this->data);
    }

    public function delete_article($id)
    {
        $this->Article->delete($id);
        $this->session->set_flashdata('msg', 'Article successfully deleted');
        redirect('articles');
    }
}