# PHP Showcase

這個專案展示了三個 PHP 相關技術的實現，分別是用戶管理系統、Promise 版本的計時器
函數和多檔案內容合併與格式化。每個元件都有其功能及使用說明。

## 1. 設計一個簡單的銀行帳戶類別

### 描述

設計一個名為 `BankAccount` 的 class，負責管理銀行帳戶的基本操作。該 class 應包含
以下功能：

- `deposit($amount)`：存款，接受一個金額並將其加入到帳戶餘額中。
- `withdraw($amount)`：提款，接受一個金額並從帳戶餘額中扣除，若餘額不足則回傳錯
  誤訊息。
- `getBalance()`：回傳目前帳戶的餘額。

### 使用方法

1. 執行 `bankAccount.php`

## 2. 迴圈操作

### 描述

撰寫一個 PHP 函數 `printNumbers($n)`，該函數接受一個整數 n，並利用迴圈將 1 到 n
之間的所有整數列印出來。

- 如果數字是 3 的倍數，則列印 `Fizz` 代替該數字。
- 如果數字是 5 的倍數，則列印 `Buzz` 代替該數字。
- 如果數字同時是 3 和 5 的倍數，則列印 `FizzBuzz`。

### 使用方法

1. 執行 `printNumbers.php`

## 3. Laravel 路由、控制器與 Model 設計

### 描述

使用 Laravel 建立一個控制器來處理產品的增刪查詢，並且需要與 Model 互動。

- GET /products：返回所有產品的列表。
- POST /products：新增一個產品。
- DELETE /products/{id}：根據產品 id 刪除產品。

設計細節：

- 程式碼可以寫在一起, 上面註明哪幾行要放在哪個檔案裡面, 例如: // routes/web.php
  。
- `ProductController` 應呼叫 `Product` Model 來處理資料庫操作，但 Model 中的函數
  內容不需要細寫，使用註解標明即可。

### 文件結構

- 位置在 `web` 資料夾內：
  - 路由在 `routes/web.php` 內
  - 控制器在 `App\Http\Controllers\ProductController`。
  - Model 在 `App\Models\Product`。

### 使用方法

1. 把資料夾放入 `\xampp\htdocs`
2. 啟動 xampp
3. `http://localhost/I2CTest-PHP/web/public/products` 可檢視商品列表
4. 使用 POST 和 DELETE 請求進行資料庫操作。
