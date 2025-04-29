<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dosen_model');
    }
    public function index() {
        $data['dosen'] = $this->Dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['dosen'] = $this->Dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $nidn = $this->input->post('nidn');
        $nama_dosen = $this->input->post('nama_dosen');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        
        $data = array(
            'nidn' => $nidn,
            'nama_dosen' => $nama_dosen,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'telp' => $telp,
        );

        $result = $this->Dosen_model->insert_dosen($data);
        if ($result) {
            $this->session->set_flashdata('success', 'dosen berhasil disimpan');
            redirect('dosen');
        } else {
            $this->session->set_flashdata('error', 'dosen gagal disimpan');
            redirect('dosen');
        }
    }
    

    public function edit($id) {
        $data['dosen'] = $this->Dosen_model->get_dosen_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp')
        );

        if ($this->Dosen_model->update_dosen($id, $data)) {
            $this->session->set_flashdata('success', 'Data dosen berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data dosen');
        }
        redirect('dosen');
    }

    public function hapus($nidn) {
        $this->Dosen_model->delete_dosen($nidn);
        redirect('dosen');
    }
}