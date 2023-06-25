<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
    {
        $this->load->view('backend/header');
        $this->load->view('backend/index');
        $this->load->view('backend/footer');
    }
    public function product_list()
    {
        $this->load->view('backend/header');
        $this->load->view('backend/product_list');
        $this->load->view('backend/footer');
    }
    public function product_add()
    {
        $this->load->view('backend/header');
        $this->load->view('backend/product_add');
        $this->load->view('backend/footer');
    }
    public function gallery_list()
    {
        $this->load->view('backend/header');
        $this->load->view('backend/gallery_list');
        $this->load->view('backend/footer');
    }
    public function gallery_add()
    {
        $this->load->view('backend/header');
        $this->load->view('backend/gallery_add');
        $this->load->view('backend/footer');
    }
}