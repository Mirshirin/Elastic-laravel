<?php
namespace App\Services;

use App\Contracts\ProductSearchInterface;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class EloquentProductSearch implements ProductSearchInterface
{
    public function search(string $query): LengthAwarePaginator
    {
        return Product::search($query)->paginate(10);
    }
}
