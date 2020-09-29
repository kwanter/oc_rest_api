<?php namespace App\Database\Seeds;
  
class KaryawanOcSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data1 = [
            'nama_karyawan'     => 'Tono',
            'tmpt_lahir'        => 'Balikpapan',
            'tgl_lahir'         => '1990-01-25',
        ];
        $data2 = [
            'nama_karyawan'     => 'Toni',
            'tmpt_lahir'        => 'Balikpapan',
            'tgl_lahir'         => '1995-04-19',
        ];
        $this->db->table('m_karyawan_oc')->insert($data1);
        $this->db->table('m_karyawan_oc')->insert($data2);
    }
} 