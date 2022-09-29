<?php
class Ggwp2 extends CI_Controller {
	public function index()
	{
		//boleh ditambah script "$this->load->model('m_ggwp2');" dibawah ini tidak apa2
		$data['kelompok'] = $this->m_ggwp2->sedot_data();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_ggwp2', $data);	
		$this->load->view('templates/footer');
	}
}
?>