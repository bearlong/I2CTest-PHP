<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function  show()
    {
        // 取得產品列表
        $products = Product::getProducts();
        // http://localhost/I2CTest-PHP/web/public/products  使用XAMPP 檢視產品列表
        return view("product.show", ["products" => $products]);
    }

    public function  add(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $imgUrl = $request->input('imgUrl');
        $newItem = [
            'name' => $name,
            'price' => $price,
            'imgUrl' => $imgUrl
        ];

        // 驗證規則
        $rules = [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'imgUrl' => 'required|string|max:255',
        ];

        $validator = Validator::make($newItem, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        Product::addProduct($newItem);
        // 新增成功，告知新增項目
        return response()->json(['message' => '新增成功!', 'product' => $newItem], 201);
    }

    public function  delete($id)
    {
        $product = Product::findProduct($id);
        if (!$product) {
            // 找不到產品
            return response()->json(['message' => '無此商品'], 404);
        }
        Product::deleteProduct($id);
        // 刪除成功
        return response()->json(['message' => '刪除商品成功!'], 200);
    }
}
