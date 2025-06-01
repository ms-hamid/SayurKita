<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminProduct extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'product';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name', 'description', 'image_path', 'category_id', 'user_id' 
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image_path) {
            return asset('storage/' . $this->image_path);
        }
        return asset('images/no-image.png'); // Default image
    }
}
