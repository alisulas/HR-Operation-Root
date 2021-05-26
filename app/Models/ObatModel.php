<?php
namespace App\Models;
use CodeIgniter\Model;

class ObatModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'data_obat';
	protected $primaryKey           = 'kode_obat';
	protected $useAutoIncrement     = false;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['kode_obat', 'nama_obat', 'bentuk_obat', 'tanggal_produksi', 'tanggal_kadaluarsa', 'harga', 'id_obat'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];



    public function allData()
    {
        return $this->db->table('data_obat')
            ->orderBy('tanggal_produksi', 'DESC')
            ->get()->getResultArray();
    }
    
    public function kadaluarsam()
    {
        return $this->db->table('data_obat')
                    ->where('tanggal_kadaluarsa <', date('Y-m-d'))
                    ->get()->getResult();

        // return $this->db->table('data_obat')
        //     ->orderBy('id_fakultas', 'DESC')
        //     ->get()->getResultArray();
    }






}
