<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class Product extends Model
{
    use HasFactory,Searchable;
    
    
    public function toSearchableArray()
    {
        return array_merge($this->toArray(),[
            'id' => (string) $this->id,
            'title' => ucfirst($this->title), // تبدیل اولین حرف به حروف بزرگ
            'description' => ucfirst($this->description), // تبدیل اولین حرف به حروف بزرگ
            'price' => number_format($this->price, 2, '.', ','), // نمایش قیمت با فرمت پولی
           

        ]);
    }
}
