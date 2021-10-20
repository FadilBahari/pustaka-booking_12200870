<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaMigration extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200870';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];


    
    }
    