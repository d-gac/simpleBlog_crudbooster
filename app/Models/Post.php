<?php

namespace App\Models;

use App\Traits\FullSoft;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, FullSoft;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'root_id');
    }
}
