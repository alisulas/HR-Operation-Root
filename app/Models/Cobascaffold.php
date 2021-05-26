<?php
namespace App\Models;
use CodeIgniter\Model;

class Cobascaffold extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'cobascaffolds';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

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


	public function index()
	{
		return $this->get()->getResultArray();
		// return $this->db->table('tbl_fakultas')
		// ->orderBy('id_fakultas', 'DESC')
		// ->get()->getResultArray();
	}

	public function where()
	{
		return $this->where(['id' => 1])
			->get()
			->getResult();
	}

	public function getBarang($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		} else {
			return $this->getWhere(['id_barang' => $id]);
		}
	}

	public function saveBarang($data)
	{
		$builder = $this->db->table($this->table);
		return $builder->insert($data);
	}

}
