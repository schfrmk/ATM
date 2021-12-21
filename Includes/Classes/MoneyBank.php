<?php
/**
 * Concrete Observers react to the updates issued by the ATM
 */
class MoneyBank implements \SplObserver
{
    public function update(\SplSubject $atm): void
    {
        echo "Bank: account history updated.</br>";
        $atm->state += $atm->amount;
    }
}
