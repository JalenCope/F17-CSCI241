<?php

$balance = 100;

$transactions = array(12, 10, 5, 4, 3, 24, 15, 22, 52);

echo "Balance is now $balance <br>";

rsort($transactions);

while($transaction = array_shift($transactions))
{
    $balance -= $transaction;
    
    echo "Balance is now $balance <br>";
    
    if($balance < 0)
    {
        $balance -= 35;
        echo "OVERDRAFT! Balance is now $balance <br>";
    }
    
    
}

echo "Balance is now $balance <br>";
