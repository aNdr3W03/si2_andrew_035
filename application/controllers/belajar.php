<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
    public function index()
	{
		$this->load->view('belajar_view');
	}

    function pemrograman(){
        echo "MENGHILANGKAN INDEX.PHP PADA CODEIGNITER";
    }
}
