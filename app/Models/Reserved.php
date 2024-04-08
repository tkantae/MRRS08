<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Reserved extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'res_status',
        'res_starable',
        'res_enddate',
        'res_serialcode',
        'res_totalprice',
        'res_typeroom',
        'res_dayType',
        'ro_id',
        'reserver_id'];
}
