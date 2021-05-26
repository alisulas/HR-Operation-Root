<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Barang_model;
// use CodeIgniter\HTTP\Response;
// use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class Barang extends BaseController
{
	public function index()
	{
		$model = new Barang_model;
		$data['title'] = 'Data Barang';
		$data['getBarang3'] = $model->getBarang();
		$data['isi'] = 'barang/v_barang';
		echo view('layouts/v_wrapper', $data);
	}


	public function tambah()
	{
		$data['title'] = 'Tambah Barang';
		$data['isi'] = 'barang/v_barang_tambah';
		echo view('layouts/v_wrapper', $data);
	}

	public function add()
	{
		$barangModel = new \App\Models\Barang_model();
		$model = new Barang_model;
		$data = array(
			'nama_barang' => $this->request->getPost('nama'),
			'qty'         => $this->request->getPost('qty'),
			'harga_beli'  => $this->request->getPost('beli'),
			'harga_jual'  => $this->request->getPost('jual')
		);
		// $model->saveBarang($data);
		$barangModel->insert($data);
		return redirect()->to('/barang');
	}

	public function edit($id)
	{
		$model = new Barang_model;
		$getBarange = $model->getBarang($id)->getRow();
		if (isset($getBarange)) {
			$data['barang'] = $getBarange;
			$data['title'] = 'Edit' . $getBarange->nama_barang;
			$data['isi'] = 'barang/v_barang_edit';
			echo view('layouts/v_wrapper', $data);
		} else {
			echo '<script>
					alert("data tidak ditemukan");
					window.location="' . base_url('barang') . '"
			</script>';
		}
	}

	public function update()
	{
		$model = new Barang_model;
		$id = $this->request->getPost('id_barang');
		$data = array(
			'nama_barang' => $this->request->getPost('nama'),
			'qty'         => $this->request->getPost('qty'),
			'harga_beli'  => $this->request->getPost('beli'),
			'harga_jual'  => $this->request->getPost('jual')
		);
		$model->editBarang($data, $id);
		return redirect()->to('/barang');
	}

	public function hapus($id)
	{
		$model = new Barang_model;
		$getBarangh = $model->getBarang($id)->getRow();
		if (isset($getBarangh)) {
			$model->hapusBarang($id);
			echo '<script>
                    alert("Hapus Data Barang Sukses");
                    window.location="' . base_url('barang') . '"
                </script>';
		} else {

			echo '<script>
                    alert("Hapus Gagal !, ID barang ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('barang') . '"
                </script>';
		}
	}


	public function cobahtml()
	{
		$data = [
			'title' => 'ini judul cobahtml controller',
			'metodcontroller' => $barang,
			'isi' => 'barang/v_barangcoba',
		];
		return view('layouts/v_wrapper', $data);
	}
}
