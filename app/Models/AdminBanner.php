<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBanner extends Model
{
    use HasFactory;

    protected $table = 'banner';

    protected $primaryKey = 'banner_id';

    protected $fillable = [
        'image_path'
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
