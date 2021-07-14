<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class m_feedback extends Model
{
    protected $table = 'feedback';
    protected $allowedFields = ['id', 'user_id','feedback'];

}