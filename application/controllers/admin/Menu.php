<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data = array(
            'content' => 'dashboard/index'
        );
        $this->load->view('admin/template/main', $data);
    }
    public function add()
    {
        $this->load->view('admin/user/add_form');
    }
    public function edit()
    {
        $this->load->view('admin/user/edit_form');
    }
}
