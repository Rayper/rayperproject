<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class m_berita extends Model
{
    protected $table = 'berita';
    protected $allowedFields = ['berita_id ', 'nama', 'Judul','tanggalupload','Thumbnail', 'Isi'];

    public function getberita()
    {
     return $this->findAll();
    }

    public function getdetailberita($berita_id = false)
    {
        if($berita_id === false){
            return $this->findAll();
        } 
        return $this->where(['berita_id' => $berita_id])->first();
    }
    
}