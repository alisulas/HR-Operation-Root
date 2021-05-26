<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SertifikasiModel;
use CodeIgniter\I18n\Time;

class Sertifikasi extends BaseController
{
    public function __construct()
    {
        $this->sertifikasiModel = new SertifikasiModel();
    }

    public function index()
    {        
        $data = [
            'title' => 'Sertifikasi',
            'isi' => 'sertifikasi/v_index_srtf',
            'sertifikasidata' => $this->sertifikasiModel->allData(),
        ];
        return view('layouts/v_wrapper', $data);
    }


    public function testQuery()
    {        
        $data = [
            'title' => 'Sertifikasi',
            'isi' => 'sertifikasi/v_index_srtf',
            'sertifikasidata' => $this->sertifikasiModel->allData(),
        ];
        d($data);
        return view('layouts/v_wrapper', $data);
    }


    Public function insert() {
        
    }

    public function hapus($id)
    {
        $this->SertifikasiModel->delete($id);
    }
}