<?php
function printNumbers($n)
{
    // 從 1 開始迴圈到 n
    for ($i = 1; $i <= $n; $i++) {
        // 同時是 3 和 5 的倍數
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FizzBuzz ";
        }
        // 是 3 的倍數
        else if ($i % 3 === 0) {
            echo "Fizz ";
        }
        // 是 5 的倍數
        else if ($i % 5 === 0) {
            echo "Buzz ";
        }
        // 其他數字
        else {
            echo $i . " ";
        }
    }
}

// 測試函數
printNumbers(26); // 回應： 1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz 22 23 Fizz Buzz 26
