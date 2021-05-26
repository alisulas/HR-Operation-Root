<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelFakultas;

class Fakultas extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelFakultas = new ModelFakultas();
    }



    public function index()
    {
        $model = new ModelFakultas;
        $data = [
            'title' => 'Divisi',
            'fakultas' => $this->ModelFakultas->allData(),
            'isi' => 'admin/v_fakultas',
        ];
        return view('layouts/v_wrapper', $data);
    }



    public function add()
    {
        $data = [
            'fakultas' => $this->request->getPost('divisi'),
        ];
        $this->ModelFakultas->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Tambahkan !!');
        return redirect()->to(base_url('fakultas'));
    }


    public function edit($id_fakultas)
    {
        $data = [
            'id_fakultas' => $id_fakultas,
            'fakultas' => $this->request->getPost('fakultas'),
        ];
        $this->ModelFakultas->edit($data);
        return redirect()->to(base_url('fakultas'));
    }



    public function delete($id_fakultas)
    {
        $data = [
            'id_fakultas' => $id_fakultas,
        ];

        $this->ModelFakultas->delete_data($data);
        return redirect()->to(base_url('fakultas'));
    }
}