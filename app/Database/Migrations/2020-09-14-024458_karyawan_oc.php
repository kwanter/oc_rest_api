<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KaryawanOc extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_karyawan_oc'           => [
				'type'              => 'INT',
				'constraint'        => 15,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'nik'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '15',
				'unique'			=> TRUE,
				'null'           	=> FALSE,
			],
			'nama_karyawan'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
				'null'           	=> FALSE,
			],
			'tmpt_lahir'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'tgl_lahir'         => [
				'type'              => 'DATE',
				'null'           	=> FALSE,
			],
			'jenis_kelamin'      => [
                'type'           => 'ENUM',
                'constraint'     => ['P', 'W'],
				'default'        => 'P',
				'null'           => FALSE,
			],
			'agama'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '10',
			],
			'suku'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'status_nikah'         => [
				'type'           => 'ENUM',
                'constraint'     => ['K', 'BK','J','D'],
                'default'        => 'K',
			],
			'alamat_domisili'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'alamat_ktp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kelurahan_domisili'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kelurahan_ktp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kecamatan_domisili'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kecamatan_ktp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kota_domisili'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kota_ktp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'provinsi_domisili'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'provinsi_ktp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kode_pos_domisili'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'kode_pos_ktp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'no_telp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'no_hp'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'no_hp_2'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'foto'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '255',
			],
			'tipe_foto'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '45',
			],
			'cuti_tahunan'         => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
			],
			'jmlh_anak'         => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
				'default'			=> 0,
			],
			'last_upload'         => [
				'type'              => 'date',
				'default'        	=> '1970-01-01',
			],
			'soft_delete'         => [
				'type'           => 'ENUM',
                'constraint'     => ['deleted', 'not-deleted'],
                'default'        => 'not-deleted',
			],

		]);
		$this->forge->addKey('id_karyawan', TRUE);
		$this->forge->createTable('m_karyawan_oc');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
