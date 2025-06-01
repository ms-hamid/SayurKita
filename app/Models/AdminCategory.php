<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminCategory extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name', 'category_type' 
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
