<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

    public function __construct() {
        
        parent::__construct();

        //cek session login
        if($this->session->userdata("id_user") == "") {
            redirect('/login');
        }

    }

    public function index()
    {
        //load view form login
        $this->load->view('pendaftaran');
    }

    public function logout()
    {
        //hapus session
        $this->session->sess_destroy();

        redirect('/login');
    }

}