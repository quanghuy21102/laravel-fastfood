<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'category_id';
    protected $keyType = 'string';

    protected $fillable = [
        'category_id',
        'category_name',
    ];

    public function product() {
        return $this->hasMany(Product::class);
    }
}
