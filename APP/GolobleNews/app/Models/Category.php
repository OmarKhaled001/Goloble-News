<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    public function manager()
    {
        return $this->belongsTo(Editor::class, "id_manager", "id");
    }
    public function news()
    {
        return $this->hasMany(News::class, 'id_category', 'id');
    }
}
