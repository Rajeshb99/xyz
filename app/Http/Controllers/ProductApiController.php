<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function update(Request $request, $id)
    {
        // Update product data
        $product = Product::find($id);
        // Update logic here

        // Reindex
        $product->searchable();

        return response()->json(['message' => 'Product updated successfully']);
    }
}

