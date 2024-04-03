<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_titles extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $primaryKey = 'ro_id';
    public $incrementing = true;
    public $timestamps = false;
}
