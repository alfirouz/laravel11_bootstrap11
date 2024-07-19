<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru_model extends Model
{
    use HasFactory;
    protected $table ="guru";
    protected $primaryKey ="id_guru";

    public $incrementing = false;
    public $timestamps = true;

}
