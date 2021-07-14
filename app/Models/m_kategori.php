<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class m_kategori extends Model
{
    protected $table = 'kategori';
    protected $allowedFields = ['Kategori_id ', 'nama'];


    public function getkategori()
    {
        return $this->findAll();
    }

    

    

    
}