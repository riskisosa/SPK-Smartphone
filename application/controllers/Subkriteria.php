<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Hasil_Model $hasil_model
 * @property CI_Alternatif_Model $alternatif_model
 * @property CI_Kriteria_Model $kriteria_model
 * @property CI_Subkriteria_Model $subkriteria_model
 * @property CI_Session $session
 * @property CI_Input $input
 */

class Subkriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
        $this->load->helper('form');
        $this->load->model('kriteria_model');
        $this->load->model('subkriteria_model');
    }

    public function index($id_kriteria = '')
    {
        $data['query'] = $this->subkriteria_model->get_all($id_kriteria)->result();
        $query = $this->kriteria_model->get_by_id($id_kriteria);
        $result = $query->row_array();
        $data['id_kriteria'] = $result['id_kriteria'];
        $data['nama_kriteria'] = $result['nama_kriteria'];
        $data['kode_kriteria'] = $result['kode_kriteria'];
        $data['bobot'] = $result['bobot'];
        $data['tipe'] = $result['tipe'];
        $this->load->view('subkriteria/data', $data);
    }

    public function tambah($id_kriteria = '')
    {
        if ($this->input->post('save') === NULL) {
            $data['id_kriteria'] = $id_kriteria;
            $this->load->view('subkriteria/tambah', $data);
        } else {
            $this->subkriteria_model->insert($id_kriteria);
            redirect('subkriteria/' . $id_kriteria);
        }
    }

    public function ubah($id_kriteria = '', $id_subkriteria = '')
    {
        if ($this->input->post('save') === NULL) {
            $query = $this->subkriteria_model->get_by_id($id_subkriteria);
            $result = $query->row_array();
            $data['nama_subkriteria'] = $result['nama_subkriteria'];
            $data['bobot'] = $result['bobot'];
            $data['id_subkriteria'] = $id_subkriteria;
            $data['id_kriteria'] = $id_kriteria;
            $this->load->view('subkriteria/ubah', $data);
        } else {
            $this->subkriteria_model->update($id_subkriteria);
            redirect('subkriteria/' . $id_kriteria);
        }
    }

    public function hapus($id_kriteria = null, $id_subkriteria = null)
    {
    if (!$id_subkriteria) 
        {
            $this->session->set_flashdata('error', 'ID Subkriteria tidak valid.');
            redirect('subkriteria/' . $id_kriteria);
        }

        if ($this->subkriteria_model->delete($id_subkriteria)) {
            $this->session->set_flashdata('success', 'Subkriteria berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus subkriteria.');
        }

        redirect('subkriteria/' . $id_kriteria);
    }
}


/* End of file Subkriteria.php */

