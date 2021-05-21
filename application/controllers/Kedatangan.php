<?php
defined('BASEPATH') or exit('No Direct Access Dined Allowed');

class Kedatangan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
		$this->load->helper('url');
	}
	public function index()
	{
		$data = [
			'data' => $this->model->tampil('kedatangan')
		];
		$this->pages('tampil/datang', $data);
	}

	public function input()
	{
		$this->pages('form/kedatangan');
	}
	function inputAct()
	{
		$date = $this->input->post('date');
		$aded = $this->input->post('aded');
		$ades = $this->input->post('ades');
		$acid = $this->input->post('acid');
		$acreg = $this->input->post('acreg');
		$rwy = $this->input->post('rwy');
		$eta = $this->input->post('eta');
		$ata = $this->input->post('ata');
		$fl = $this->input->post('fl');


		$data = array(
			'date' => $date,
			'aded' => $aded,
			'ades' => $ades,
			'acid' => $acid,
			'acreg' => $acreg,
			'rwy' => $rwy,
			'eta' => $eta,
			'ata' => $ata,
			'fl' => $fl
		);
		$this->model->input('kedatangan', $data);
		redirect('dasboard');
	}

	public function pages($view, $data = true)
	{
		$this->load->view('header');
		$this->load->view($view, $data);
		$this->load->view('footer');
	}
}
