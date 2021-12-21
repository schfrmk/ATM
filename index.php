<?php
require_once('Includes/Classes/ATM.php');
require_once('Includes/Classes/MoneyBank.php');

/**
 * Let's make some tranactions
 */
$bank = new MoneyBank();
echo "First transaction.</br>";
$atm = new ATM();
$atm->attach($bank);
$atm->doTransaction(100);
echo "Second transaction.</br>";
$atm->doTransaction(-20);
$atm->detach($bank);
?>
