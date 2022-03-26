<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function index()
	{
        // echo 'Hello World!!!';

        $data['nama'] = 'Andrew';
        $data['nim']  = '035';
        $data['kom']  = 'A';

		$this->load->view('hello_world', $data);
	}

    public function hello1()
	{
        echo 'ini dari hello 1';
	}

    public function hello2($nama)
	{
        echo 'Halo '.$nama;
	}
}
