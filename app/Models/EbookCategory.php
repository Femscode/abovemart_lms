<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbookCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ebook_categories';
    public function ebook() {
        return $this->hasMany(Ebook::class,'category_id','id');
    }
}
