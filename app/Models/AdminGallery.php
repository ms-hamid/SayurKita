<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $primaryKey = 'gallery_id';

    protected $fillable = [
        'title', 'description', 'image_path', 'category_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image_path) {
            return asset('storage/' . $this->image_path);
        }
        return asset('images/no-image.png'); // Default image
    }
}
