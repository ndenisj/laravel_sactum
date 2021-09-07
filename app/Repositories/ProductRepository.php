<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface {
    public function all()
    {
        return Product::all();
    }

    public function orderAllByName($paginate)
    {
        return Product::orderBy('name')->paginate($paginate);
    }

    public function showProduct($productId)
    {
        return Product::find($productId);
    }
}
