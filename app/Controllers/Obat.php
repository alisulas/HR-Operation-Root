<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ObatModel;
use App\Models\SertifikasiModel;

class Obat extends BaseController
{

    public function __construct()
    {
        helper('form');
        // $this->ObatModel = new ObatModel();
		$this->sertifikasi = new SertifikasiModel();
    }



	public function index()
	{
        $data = [
            'title' => 'Sertifikasi Seluruh Karyawan',
            'obat' => $this->sertifikasi->allData(),
            'isi' => 'campur/v_obat',
        ];
        return view('layouts/v_wrapper', $data);
	}


    

    public function kadaluarsa()
    {   
        // var_dump($this->obat->where('tanggal_kadaluarsa <', date('Y-m-d'))->get()->getResult());die;
        $data = [
            'title' => 'Divisi',
            'dataarr' => $this->obat->kadaluarsam(),
            'isi' => 'campur/v_obat_kadaluarsa',

        ];
        return view('layouts/v_wrapper', $data);


        // echo view('campur/v_obat_kadaluarsa', [
        //     'data' => $this->obat->where('tanggal_kadaluarsa <', date('Y-m-d'))->get()->getResult()
        // ]);
    }

    Public function cobahtml() {
        $data = [
            'title' => 'Coba html controller coba',
            'sertifikasi' => $this->sertifikasi->findAll(),
            'isi' =>'campur/v_obat_html',
        ];
        return view('layouts/v_wrapper', $data);
    }


    
}
