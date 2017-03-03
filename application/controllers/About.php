<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "		Nama	:Dita Permatasari", 
				'ttl' => "		TTL		:Mojokerto, 4 Oktober 1997", 
				'alamat' => "	Alamat	:Perum. Japan Kec. Sooko Kab.Mojokerto", 
				'hoby' => "		Hobby	:Bersepedah", 
				'kuliah' => "	Kuliah	:Politeknik Negeri Malang",
				'jurusan' => "	Julusan	:Teknologi Informatika",
				'kelas' => "	Kelas	:TI 2A",
				'nim' => "		nim		:1541180085",
			);
		$this->load->view('about',$data);
	}
}