<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_barang'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nama_barang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'qty'     			=> [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'harga_beli'       => [
				'type'           => 'INT',
				'constraint'     => 11
			],
			'harga_jual'       => [
				'type'           => 'INT',
				'constraint'     => 11
			],
		]);
		$this->forge->addKey('id_barang', TRUE);
		$this->forge->createTable('barang');
		//
	}

	public function down()
	{
		//
	}
}

// membuat migrasi table
// 1. php spark migrate:create post
// isi migrate up
// php spark migrate