<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Session $session
 * @property CI_Input $input
 * @property CI_Admin_Model $admin_model
 */

class Login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('logged_in') === TRUE) {
            redirect('home');
        }
        $this->load->view('login');
    }

    public function cek()
    {
        $this->load->model('admin_model');
        $username   = $this->input->post('username', TRUE);
        $password   = md5($this->input->post('password', TRUE));
        $query      = $this->admin_model->validasi($username, $password);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $session_data = array(
                'id_admin' => $result['id_admin'],
                'username' => $username,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            redirect('home');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert bg-danger text-center" role="alert">Username dan Password salah</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
