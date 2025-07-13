<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $data = [
            ['id' => 1, 'produk' => 'Sepatu', 'harga' => 100000, 'stok' => 10],
            ['id' => 2, 'produk' => 'Tas', 'harga' => 150000, 'stok' => 5],
            ['id' => 3, 'produk' => 'Baju', 'harga' => 200000, 'stok' => 8],
        ];

        return view('list_product', compact('data'));
    }
}
