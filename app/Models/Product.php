<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'price',
        'status',
        'image_path',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function chooseStatus()
    {
        if ($this->status == "active") {
            return "<span class='badge badge-success'>Còn hàng</span>";
        }
        else {
            return "<span class='badge badge-danger'>Hết hàng</span>";
        }
    }
}
