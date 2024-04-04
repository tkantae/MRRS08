<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'res_id',
        'res_status',
        'res_startdate',
        'res_enddate',
        'res_serialcode',
        'res_totalprice',
        'res_typeroom',
        'res_dayType',
        'ro_id',
        'reserver_id'
    ];

}
