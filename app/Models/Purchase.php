<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'purchases';
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function vendor() {
        return $this->belongsTo(User::class,'vendor_id','id');
    }
    public function course() {
        return $this->belongsTo(Course::class,'product_id','id');
    }

    
}
