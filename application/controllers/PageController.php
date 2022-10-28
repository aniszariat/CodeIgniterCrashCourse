<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function index()
    {
        echo "I am the index page<br>you're learning codeigniter ";
    }
    public function pages()
    {
        echo "pages function is loaded" ;
    }
    public function blog($blog_url='blog_url', $blog_body='blog_body')
    {
        echo "blog url is : " .$blog_url ."<br>blog body is : ".$blog_body;
        $this->load->view('blog_view');
    }
    public function userpage()
    {
        $this->load->view('userpage');
    }
    public function demo()
    {
        // $adds['title']=" hello title";
        $adds['title']=" hello title";
        $adds['body']=" hello body";
        $this->load->model('StudentModel', 'st');
        $adds['person'] = $this->st->studentData();
        $this->load->view('DemoView', $adds);
    }
}
