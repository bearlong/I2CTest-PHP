<?php
class BankAccount
{
    // 私有屬性
    private  $balance = 0;

    // 存款方法
    public function deposit($amount)
    {
        if ($amount > 0) { // 確保為正數
            $this->balance += $amount;
            return  "成功存入: " .  $amount . " 元。當前餘額: "  . $this->getBalance();
        } else {
            return "存款金額必須大於0。";
        }
    }

    // 提款方法
    public function withdraw($amount)
    {
        if ($amount > 0) { // 確保為正數
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                return  "成功提出: " .  $amount . " 元。當前餘額: "  . $this->getBalance();
            } else {
                return "錯誤，餘額不足。";
            }
        } else {
            return "存款金額必須大於 0 。";
        }
    }

    public function getBalance()
    {
        // 當前餘額
        return  $this->balance . " 元。";
    }
}

// 實際展示
$account = new BankAccount();
echo $account->deposit(100); // 回應： 成功存入: 100 元。當前餘額: 100 元。
echo "\n";
echo $account->withdraw(50); // 回應：成功提出: 50 元。當前餘額: 50 元。
echo "\n";
echo $account->withdraw(70); // 回應：錯誤，餘額不足。
echo "\n";
echo $account->withdraw(-20); // 回應：存款金額必須大於 0 。
echo "\n";
echo "當前餘額: " . $account->getBalance(); // 回應：當前餘額: 50 元。
