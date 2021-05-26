<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelGedung;

class Gedung extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelGedung = new ModelGedung();
    }



	public function index()
	{
        $model = new ModelGedung;
        $data = [
            'title' => 'Divisi',
            'gedung' => $this->ModelGedung->allData(),
            'isi' => 'admin/v_gedung',
        ];
        return view('layouts/v_wrapper', $data);
	}


   
    public function add()
    {
        $data = [
            'gedung' => $this->request->getPost('divisi'),
        ];
        $this->ModelGedung->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Tambahkan !!');
        return redirect()->to(base_url('gedung'));
    }


    public function edit($id_gedung)
    {
        $data = [
            'id_gedung' => $id_gedung,
            'gedung'=> $this->request->getPost('gedung'),
        ];
        $this->ModelGedung->edit($data);
        return redirect()->to(base_url('gedung'));
    }



    public function delete($id_gedung)
    {
        $data = [
        'id_gedung' => $id_gedung,
        ];

        $this->ModelGedung->delete_data($data);
        return redirect()->to(base_url('gedung'));
    }




}