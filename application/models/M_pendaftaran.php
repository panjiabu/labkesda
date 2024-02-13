<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('m_pendaftaran');

        $data = array(
            'pendaftaran' => $this->m_pendaftaran->get_pendaftaran()->result()
        );
        //load view
        $this->load->view('pendaftaran', $data);
    }
}