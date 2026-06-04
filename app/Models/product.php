<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'description', 'sku', 'price', 'compare_price', 'stock_quantity', 'is_active'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}