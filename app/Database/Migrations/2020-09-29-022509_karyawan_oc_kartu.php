<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KaryawanOcKartu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_kartu_karyawan_oc'  => [
				'type'              => 'INT',
				'constraint'        => 15,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE,
				'null'				=> FALSE,
			],
			'id_karyawan_oc'         => [
				'type'              => 'INT',
				'constraint'        => '15',
				'unsigned'          => TRUE,
				'null'				=> FALSE,
			],
			'id_keluarga_oc'       => [
				'type'              => 'INT',
				'constraint'        => '15',
				'unsigned'          => TRUE,
				'default'           => 0,
				'null'				=> FALSE,
			],
			'kartu_deskripsi'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'kartu_singkat'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'kartu_no'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'kartu_tgl_awal'       => [
				'type'              => 'DATE',
				'default'        	=> '1970-01-01',
				'null'           	=> FALSE,
			],
			'kartu_tgl_akhir'       => [
				'type'              => 'DATE',
				'default'        	=> '1970-01-01',
				'null'           	=> FALSE,
			],
			'penerbit'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'file'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'tgl_upload'       => [
				'type'              => 'DATETIME',
				'default'        	=> '1970-01-01 00:00:00',
				'null'           	=> FALSE,
			],
			'soft_delete'         => [
				'type'           => 'ENUM',
                'constraint'     => ['deleted', 'not-deleted'],
                'default'        => 'not-deleted',
			],
		]);
		$this->forge->addKey('id_kartu_karyawan_oc', TRUE);
		$this->forge->createTable('m_karyawan_kartu_oc');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
