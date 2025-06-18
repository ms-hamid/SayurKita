<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'blog';
    protected $primaryKey = 'blog_id';

    protected $fillable = [
        'title', 'content', 'image_path', 'category_id', 'user_id'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'blog_id')
            ->where('target_type', 'blog')
            ->whereNull('parent_id')
            ->latest();
    }

    public function related()
    {
        return Blog::where('category_id', $this->category_id)
            ->where('blog_id', '!=', $this->blog_id)
            ->take(3)
            ->get();
    }
}
