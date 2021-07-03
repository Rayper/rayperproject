<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;



class m_pemesanan extends Model
{
    protected $table = 'form_pemesanan';
    protected $primaryKey = 'invoice_id';
    protected $returnType  = 'array';
    protected $allowedFields = 
    ['invoice_id ', 'user_id','tpu_id','status', 'tanggalpemesanan', 'NamaCustomer', 'NamaTPU', 'KategoriTPU', 'UnitTPU', 'BlokTPU', 'namaAlm', 'nikAlm','tanggalKematian',
    'tanggaldiKubur','namaAhliWaris','alamatAhliWaris', 'NoHPAhliWaris', 'suratKematian', 'KTPAlm','KKAlm','KTPAhliWaris','KKAhliWaris','KTPSaksi',
    'KKSaksi','suratpernyataan','buktipembayaran'];

    public function search($keyword)
    {
        $builder = $this->table('form_pemesanan');
        $builder->like('namaAlm', $keyword);
        $builder->orLike('KategoriTPU', $keyword);
        $builder->orLike('UnitTPU', $keyword);
        return $builder;
    }

    public function getdetailinvoice($invoice_id = false)
    {
        if($invoice_id === false){
            return $this->findAll();
        } 
        return $this
        ->join('status_pembayaran ', 'form_pemesanan.status = status_pembayaran.status')
        ->join('blok_tpu ', 'form_pemesanan.BlokTPU = blok_tpu.Blok_id')
        ->where(['invoice_id' => $invoice_id])
        ->get()->getResultArray();
    }


}