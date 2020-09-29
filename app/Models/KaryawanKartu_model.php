<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KaryawanKartu_model extends Model {
 
    protected $table = 'm_karyawan_oc_kartu';

    public function getData($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id_karyawan' => $id])->getRowArray();
        }  
    }
     
    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
 
    public function updateData($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_karyawan' => $id]);
    }
 
    public function deleteData($id)
    {
        //return $this->db->table($this->table)->delete(['category_id' => $id]);
        return $this->db->table($this->table)->update(['soft_delete' => 1], ['id_karyawan' => $id]);
    }
} 