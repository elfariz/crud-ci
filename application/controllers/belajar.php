<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_data');
    }

	public function index()
	{
        $data['kontak'] = $this->m_data->show_data()->result();
		$this->load->view('kontak', $data);
	}
    
    function add()
    {
        $name = $this->input->post('nama');
        $age = $this->input->post('umur');

        $data = array(
            'nama' => $name,
            'umur' => $age
        );

        $this->m_data->input($data);
        redirect(base_url());

    }

    function edit($id){
        $where = array('id' => $id);
        $data['kontak'] = $this->m_data->getById($where)->result();
        $this->load->view('edit', $data);
    }

    function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('nama');
        $age = $this->input->post('umur');

        $data = array(
            'nama' => $name,
            'umur' => $age
        );

        $this->m_data->update($id, $data);
        redirect(base_url());

    }

    function delete($id){
        // $where = array('id' => $id);
        $this->m_data->delete($id);
        redirect(base_url());
    }

}
