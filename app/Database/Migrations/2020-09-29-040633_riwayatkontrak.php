<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Riwayatkontrak extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_riwayatkontrak'  => [
				'type'              => 'INT',
				'constraint'        => 15,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'id_karyawan_oc'  => [
				'type'              => 'INT',
				'constraint'        => 15,
				'unsigned'          => TRUE,
				'null'           	=> FALSE,
			],
			'no_kontrak'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '50',
				'null'           	=> FALSE,
			],
			'nama_pjtk'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '50',
				'null'				=> FALSE,
			],
			'tmt_berlaku'         => [
				'type'              => 'DATE',
				'null'           	=> FALSE,
				'default'			=> '1970-01-01'
			],
			'tmt_berakhir'         => [
				'type'              => 'DATE',
				'null'           	=> FALSE,
				'default'			=> '1970-01-01'
			],
			'nama_jabatan'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '10',
			],
			'soft_delete'         => [
				'type'           => 'ENUM',
                'constraint'     => ['deleted', 'not-deleted'],
                'default'        => 'not-deleted',
			],

		]);
		$this->forge->addKey('id_riwayatkontrak', TRUE);
		$this->forge->addForeignKey('id_karyawan_oc','m_karyawan_oc','id_karyawan_oc');
		$this->forge->createTable('m_riwayatkontrak');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
