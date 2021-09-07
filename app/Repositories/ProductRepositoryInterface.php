<?php

namespace App\Repositories;

interface ProductRepositoryInterface {
    public function all();

    public function orderAllByName($paginate);

    public function showProduct($productId);
}
