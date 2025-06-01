<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use HasFactory, SoftDeletes;
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    protected $fillable = [
    'name',
    'description',
    'image_path',
    'category_id',
    'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
