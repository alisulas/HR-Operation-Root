<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikasiModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'tbl_sertifikasi';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDelete        = true;
    protected $protectFields        = true;
    protected $allowedFields        = ['id', 'nama_sertifikasi', 'lembaga', 'deskripsi', 'lokasi_sertifikasi', 'tanggal_terbit', 'tanggal_kadaluarsa', 'id_karyawan', 'id_unitkerja', 'biaya'];

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
    
    ///1. connect database (db->connect), $this->db = \Config\Database::connect();
    // 2. instantiate new object (new SertifikasiModel), 
    // 3. query (SELECT ALL)/querybuilder 
    // 4. ShowResult


    // Method 1:
    // 1. $this->db = \Config\Database::connect();
    // 2.$builderRaw = $this->db->query("SELECT * from tbl_sertifikasi")
    // 3. $data = $builderRaw->getResultArray()

    // connect = db->connect() di function __construct $db = \Config\Database::connect();
    // builder1 = $this->db->tables('tbl_sertifikasi')->get() //query builder needs an innitiate
    // builder2 = $this->db->query("SELECT * from tbl_users") //raw query
    // Show Result = $builder->getResultArray()


    public function allData()
    {
        $builder = $this->db->table('tbl_sertifikasi');
        $data = $builder->join('karyawan', 'karyawan.badge = tbl_sertifikasi.id_karyawan', 'left')
                        ->orderBy('tbl_sertifikasi.tanggal_kadaluarsa', 'ASC')
                        ->get()->getResultArray();
        return $data;
    }

}