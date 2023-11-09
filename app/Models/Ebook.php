<?php

namespace App\Models;

use App\Models\User;
use App\Models\EbookCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ebook extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ebooks';

    public function user() {
        return $this->BelongsTo(User::class);
        
    }
    public function cat() {
        return $this->BelongsTo(EbookCategory::class, 'category_id','id');
        
    }
}
