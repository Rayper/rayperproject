<?php 
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\Query;



class m_user extends Model
{
    protected $table = 'user';
    // protected $primarykey = 'id';
    protected $returnType = "object";
    protected $allowedFields = ['user_id', 'role_id', 'fullname', 'phonenumber', 'email', 'password', 'confirmpw'];
    private $permission = array();

    public function editProfile($data, $param)
    {
        $builder = $this->db->table('user');
        $builder->where('email', $param);
        return $builder->update($data);
    }

    

    

}