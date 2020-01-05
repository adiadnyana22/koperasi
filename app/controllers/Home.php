<?php

class Home extends Controller {
	public function index()
	{
		$data['judul'] = 'Admin Panel';
		$this->view('home/index', $data);
	}
	public function tambah()
	{
		if ( $this->model('models')->tambahDataSiswa($_POST) > 0 ) {
			header('Location: ' . BASEURL . '/siswa');
			exit;
		} else {
			echo "gagal";
			header('Location: ' . BASEURL . '/siswa');
			exit;
		}
	}
}