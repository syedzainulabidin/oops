<?php

class BankAccount
{
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        $this->getBalance();
        echo "</br><b>Credited: </b>" . $amount;
    }
    public function withdraw($amount)
    {
        if ($amount <= $this->balance && $amount > 0) {
            $this->balance -= $amount;
            $this->getBalance();
            echo "</br><b>Debited: </b>" . $amount;
        } else {
            echo "Insufficient funds for withdrawal";
        }
    }
    public function getBalance()
    {
        echo "<b>Account No:</b>" . $this->accountNumber . "</br><b>Balance:</b> " . $this->balance;
    }
}

$emp1 = new BankAccount(1234, 1000);
// $emp1->deposit(100);
// $emp1->withdraw(100);
// $emp1->getBalance();
