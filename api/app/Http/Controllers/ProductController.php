<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;    
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        // Dependency injection
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();
        return response()->json($products);
    }    
}   