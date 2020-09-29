<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RiwayatpendidikanOc extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_riwayatpendidikan_oc'  => [
				'type'              => 'INT',
				'constraint'        => 11,
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
			'nama_jurusan'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'peminatan'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'id_jenjangpendidikan'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '10',
				'null'				=> FALSE,
			],
			'asal_lembaga_pendidikan'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'asal_kota_lp'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '75',
			],
			'tgl_kelulusan'       => [
				'type'              => 'YEAR',
				'default'        	=> '1970',
				'null'           	=> FALSE,
			],
			'nilai_kelulusan'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '15',
			],
			'skala_nilai'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '20',
			],
			'level'       => [
				'type'              => 'VARCHAR',
				'constraint'        => '10',
			],
			'soft_delete'         => [
				'type'           => 'ENUM',
                'constraint'     => ['deleted', 'not-deleted'],
                'default'        => 'not-deleted',
			],
		]);
		$this->forge->addKey('id_riwayatpendidikan_oc', TRUE);
		$this->forge->addForeignKey('id_karyawan_oc','m_karyawan_oc','id_karyawan_oc');
		$this->forge->addForeignKey('id_jenjangpendidikan','m_jenjangpendidikan','id_jenjangpendidikan');
		$this->forge->createTable('m_riwayatpendidikan_oc');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
