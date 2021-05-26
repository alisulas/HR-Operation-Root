<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Barang_model extends Model
{
    protected $table                = 'barang';
	protected $primaryKey           = 'id_barang';
	protected $allowedFields        = ['nama_barang', 'qty', 'harga_beli', 'harga_jual'];
     
    public function getBarang($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_barang' => $id]);
        }   
    }

    public function saveBarang($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editBarang($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_barang', $id);
        return $builder->update($data);

    }


    public function hapusBarang($id)
    {
        // $builder = $db->table('table');
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_barang' => $id]);
    }


    public function metodModel()
    {
        $barangModel = new \App\Models\Barang_model();
		$barang = $barangModel->find(1);
        return $barang;
    
    }



}