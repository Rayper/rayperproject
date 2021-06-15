<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class m_kategori extends Model
{
    protected $table = 'kategori';
    protected $allowedFields = ['Kategori_id ', 'nama'];


    // public function get_data_tpu()
    // {
    //     return $this->db->table('tpu')
    //     ->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')
    //     ->get()->getResultArray(); 
    // }

    // public function get_blok_tpu()
    // {
    //     return $this->db->table('tpu_detail')
    //      ->join('tpu  ', 'tpu.TPU_ID = tpu_detail.TPU_ID')
    //      ->join('blok_tpu', 'tpu_detail.Blok_id = blok_tpu.Blok_id')
    //      ->get()->getResultArray();
    // }
}