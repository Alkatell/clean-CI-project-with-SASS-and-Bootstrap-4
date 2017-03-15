<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data = array(
            'title' => 'Titre',
        );

		$this->load->view('parts/header', $data);
		$this->load->view('home');
		$this->load->view('parts/footer', $data);
	}
}
