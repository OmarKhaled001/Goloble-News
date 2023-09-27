<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    public function editor()
    {
        return $this->belongsTo(Editor::class, "id_editor", "id");
    }
    public function category()
    {
        return $this->belongsTo(Category::class, "id_category", "id");
    }
}
