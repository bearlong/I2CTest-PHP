<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'price', 'imgUrl'];

    // 資料陣列(假資料)
    public static function getProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'apple',
                'imgUrl' => asset('images/apple.jpg'),
                'price' => 100,
            ],
            [
                'id' => 2,
                'name' => 'cherry',
                'imgUrl' => asset('images/cherry.jpg'),
                'price' => 10,
            ],
            [
                'id' => 3,
                'name' => 'kiwi',
                'imgUrl' => asset('images/kiwi.jpg'),
                'price' => 30,
            ],
            [
                'id' => 4,
                'name' => 'lemon',
                'imgUrl' => asset('images/lemon.jpg'),
                'price' => 15,
            ],
            [
                'id' => 5,
                'name' => 'orange',
                'imgUrl' => asset('images/orange.jpg'),
                'price' => 100,
            ],
            [
                'id' => 6,
                'name' => 'pineapple',
                'imgUrl' => asset('images/pineapple.jpg'),
                'price' => 100,
            ],
            [
                'id' => 7,
                'name' => 'strawberry',
                'imgUrl' => asset('images/strawberry.jpg'),
                'price' => 100,
            ],
            [
                'id' => 8,
                'name' => 'watermelon',
                'imgUrl' => asset('images/watermelon.jpg'),
                'price' => 100,
            ],
        ];
    }


    //新增產品
    public static function addProduct($data)
    {
        return self::create($data);  // 寫入資料庫
    }

    // 根據 ID 搜尋產品
    public static function findProduct($id)
    {
        return self::find($id);
    }

    // 根據 ID 刪除產品
    public static function deleteProduct($id)
    {
        return self::destroy($id);   // 刪除資料庫中的資料
    }
}
