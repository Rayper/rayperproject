<?php 
namespace App\Models;
use CodeIgniter\Model;


class m_user extends Model
{
    protected $table = 'user';
    protected $primarykey = 'fullname';
    protected $returnType = "object";
    protected $allowedFields = ['id', 'role_id', 'fullname', 'phonenumber', 'email', 'password', 'confirmpw'];

}