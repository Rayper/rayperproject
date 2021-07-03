<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class m_tpu extends Model
{
    protected $table = 'tpu';
    protected $primarykey = 'tpu_id';
    protected $allowedFields = ['tpu_id', 'NamaTPU', 'AlamatTPU', 'Kategori_id ', 'Thumbnail', 'Unit', 'Contact', 'Link'];


    // public function search($keyword)
    // {
    //     $builder = $this->table('tpu');
    //     $builder->like('NamaTPU', $keyword);
    //     // $builder->orLike('nama', $keyword);
    //     $builder->orLike('unit', $keyword);
    //     $builder->Where(['tpu.Kategori_id' => 1]);
    //     return $builder;
    // }

    // public function search2($keyword)
    // {
    //     $builder = $this->table('tpu');
    //     $builder->like('NamaTPU', $keyword);
    //     // $builder->orLike('nama', $keyword);
    //     $builder->orLike('unit', $keyword);
    //     $builder->Where(['tpu.Kategori_id' => 2]);
    //     return $builder;
    // }

    // public function search3($keyword)
    // {
    //     $builder = $this->table('tpu');
    //     $builder->like('NamaTPU', $keyword);
    //     // $builder->orLike('nama', $keyword);
    //     $builder->orLike('unit', $keyword);
    //     $builder->Where(['tpu.Kategori_id' => 3]);
    //     return $builder;
    // }

    public function getProduct($tpu_id = false)
    {
        if($tpu_id === false){
            return $this->findAll();
        } 
        return $this
        ->join('kategori ', 'tpu.Kategori_id = kategori.Kategori_id')
        ->join('tpu_detail', 'tpu_detail.tpu_id = tpu.tpu_id')
        ->join('blok_tpu', 'tpu_detail.Blok_id = blok_tpu.Blok_id')
        ->where(['tpu.tpu_id' => $tpu_id])
        ->get()->getRowArray();
    }

    public function getBloktpu($tpu_id = false)
    {
        if($tpu_id === false){
            return $this->findAll();
        } 
        return $this
        ->join('tpu_detail', 'tpu_detail.tpu_id = tpu.tpu_id')
        ->join('blok_tpu', 'tpu_detail.Blok_id = blok_tpu.Blok_id')
        ->where(['tpu_detail.tpu_id' => $tpu_id])
        ->get()->getResultArray();
    }

}

   


