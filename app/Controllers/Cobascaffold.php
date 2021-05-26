<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SertifikasiModel;

class Cobascaffold extends BaseController
{

	public function __construct()
	{
		$this->db = \Config\Database::connect('default'); //1. koneksi utk Raw Query & queryBuilder
		$this->db = db_connect();

        $this->sertifikasiModel = new SertifikasiModel(); 
        // $this->sertifikasiModel = new \App\Models\SertifikasiModel(); 

	}

	public function indexRaw()
	{
		$builderRaw = $this->db->query('SELECT * FROM tbl_sertifikasi'); //ini instance Object. setara dengan ->get()
		$builderRaw2 = $this->db->table('tbl_sertifikasi')->get();
		$results = $builderRaw->getResultArray();

		$data = [
			'isi' => 'sertifikasi/v_index_srtf',
			'sertifikasidata' => $results
		];
		echo '<bre>';d($builderRaw);echo '<bre>';d($builderRaw2);
		return view('layouts/v_wrapper', $data);
	}

	public function indexQueryBuilder()
	{
		$builderRaw = $this->db->table('tbl_sertifikasi')->get(); //ini instance
		$results = $builderRaw->getResultArray();

		$data = [
			'isi' => 'sertifikasi/v_index_srtf',
			'sertifikasidata' => $results
		];
		return view('layouts/v_wrapper', $data);
	}

	public function index()
	{

		$data = [
			'title' => 'Sertifikasi',
			'isi' => 'sertifikasi/v_index_srtf',
			'sertifikasidata' => $this->sertifikasiModel->findAll(),
			// 'tanggal' => $sertifikasi,
		];
		d($data);
		return view('layouts/v_wrapper', $data);
	}




}