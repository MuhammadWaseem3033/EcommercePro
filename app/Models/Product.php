<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =
    [
        'user_id',
        'title',
        'category_id',
        'price',
        'discount_price',
        'quantity',
        'image',
        'description',
    ];
 
    

    public function category()
    {
        return $this->belongsTo(Category::class ,'category_id','id');
    }
    public function User()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
}
