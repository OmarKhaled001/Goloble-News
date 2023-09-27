<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;
    protected $table = 'editor';
    protected $primaryKey = 'id';
    public function category()
    {
        return $this->hasMany(Category::class, 'id_manager', 'id');
    }
    public function news()
    {
        return $this->hasMany(News::class, 'id_editor', 'id');
    }
}
