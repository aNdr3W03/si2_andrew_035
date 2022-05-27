<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeControl extends CI_Controller {
    public function __construct()
    {
        $this->load->helper('form');
        parent::__construct();
    }
    
	public function view_profil()
	{
        $this->load->helper('form');
		$this->load->view('profil');
	}
    
	public function detail_produk($id_produk, $nama_produk)
	{
		echo "ID Produk   : ".$id_produk."<br>";
		echo "Nama Produk : ".$nama_produk;
	}
}
