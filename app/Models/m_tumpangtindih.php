<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;



class m_tumpangtindih extends Model
{
    protected $table = 'form_pemesanantumpang';
    protected $allowedFields = 
    ['invoice_id ', 'user_id','tpu_id','status ', 'NamaCustomer', 'NamaTPU', 'KategoriTPU', 'UnitTPU','namaAlm', 'nikAlm','tanggalKematian',
    'tanggaldiKubur','namaAhliWaris','alamatAhliWaris', 'NoHPAhliWaris', 'suratKematian', 'KTPAlm','KKAlm','KTPAhliWaris','KKAhliWaris','KTPSaksi',
    'KKSaksi','suratpernyataan'];

    public function search($keyword)
    {
        $builder = $this->table('form_pemesanantumpang');
        $builder->like('namaAlm', $keyword);
        $builder->orLike('KategoriTPU', $keyword);
        $builder->orLike('UnitTPU', $keyword);
        return $builder;
    }

    

    

    

}