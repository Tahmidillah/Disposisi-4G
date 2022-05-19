<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data = array(
            'content' => 'dashboard/index.php'
        );
        $this->load->view('template/main.php', $data);
    }
    public function add()
    {
        $this->load->view('admin/user/add_form.php');
    }
    public function edit()
    {
        $this->load->view('admin/user/edit_form.php');
    }
}
