<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Tentang extends CI_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('about/tentang');
		$this->load->view('footer');
	}
}
