<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'password'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    function registrasi($data)
    {
        $this->save($data);
    }

    function login($nama)
    {
        $builder = $this->select('nama,password,saldo,id_tabungan')->join('tabungan', 'user.id_tabungan = tabungan.id')->where('nama', $nama);
        $result = $builder->first();
        return $result;
    }
}
