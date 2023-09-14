<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email', 
        'password', 
    ];
}
