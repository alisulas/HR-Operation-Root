<?php

namespace App\Controllers;
use App\Models\KepegModel;
use Carbon\Carbon;

class Kepeg extends BaseController
{
	public function __construct()
    {
        helper('form');
        $this->KepegModel = new KepegModel();
    }

    public function dashkepeg()
	{
		$data = array(
			'title' => 'Dashboard',
        );
        // print_r($data['datakepeg']);
        // die();
		return view('campur/vk_dash',$data);
    }

    public function datakepeg()
	{
        $date = Carbon::now()->timezone('Asia/Jakarta');
		$data = array(
			'title' => 'Data Kepegawaian',
            'show'	=> $this->KepegModel->tampilpegawai(),
            'now'   => $date
        );
        // print_r($data);
        // die();
		return view('campur/vk_datakepeg',$data);
    }

    public function ubahpeg($id)
    {
        $data = array(
			'title' => 'Perubahan SIP/SIK Pegawai',
			'show'	=> $this->KepegModel->tampilubahsip($id), 
        );

        // print_r($data['show']);
        // die();
        return view('campur/vk_ubahdatakepeg', $data);
    }

    public function updatepegawai()
	{
        if ($this->validate([
            'no_sip' => [
                'label'  => 'Nomer SIK / SIP',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'exp_sip' => [
                'label'  => 'Masa Berlaku SIK / SIP',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
        ])) {
            # Jika Valid
            $date = Carbon::now()->timezone('Asia/Jakarta');
            $exp = Carbon::parse($this->request->getPost('exp_sip'));

            $data = array(
                'id_user' => $this->request->getPost('id_user'),
                'no_sip' => $this->request->getPost('no_sip'),
                'exp_sip' => $exp,
                'created_at' => $date
            );
            $this->KepegModel->updatepegawai($data);
            // print_r($exp);
            // die();
            // $this->Model_Admin->simpanpegawai($nip);
            session()->setFlashdata('pesan', 'Simpan Data Pegawai Berhasil.');
            return redirect()->to(base_url('kepeg/datakepeg'));
        } else {
            # Jika Tidak Valid
            $getid = $this->request->getPost('id_user');
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('kepeg/ubahpeg/'.$getid));
        }
    }
}