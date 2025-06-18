<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Session $session
 */
class Home extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->view('home');
    }
}
