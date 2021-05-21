<?php
defined('BASEPATH') or exit('No direct access denied alowed');
/**
 * 
 */
class Keberangkatan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	public function index()
	{
		$data = [
			'data' => $this->model->tampil('keberangkatan')
		];
		$this->pages('tampil/berangkat', $data);
	}

	public function input()
	{
		$this->pages('form/keberangkatan');
	}

	function inputAct()
	{
		$data = array(
			'date' => $this->input->post('date'),
			'aded' => $this->input->post('aded'),
			'ades' => $this->input->post('ades'),
			'acid' => $this->input->post('acid'),
			'acreg' => $this->input->post('acreg'),
			'rwy' => $this->input->post('rwy'),
			'sut' => $this->input->post('sut'),
			'taxit' => $this->input->post('taxit'),
			'etd' => $this->input->post('etd'),
			'atd' => $this->input->post('atd'),
			'fl' => $this->input->post('fl'),
			'cfl' => $this->input->post('cfl'),
			'speed' => $this->input->post('speed')
		);
		$this->model->input('keberangkatan', $data);
		redirect('dasboard');
	}

	public function pages($view, $data = true)
	{
		$this->load->view('header');
		$this->load->view($view, $data);
		$this->load->view('footer');
	}
}
