<?php
/**
 * The ATM reciving the transactions and sending them to the banks
 */
class ATM implements \SplSubject
{
    /**
     * @var int The temporary state for the transaction status
     */
    public $amount;

    /**
     * @var int Some temporary state for transaction status
     */
    public $state = 0;
    /**
     * @var SplObserver List of banks that have access to account
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * The subscription management methods.
     */
    public function attach(\SplObserver $observer): void
    {
        echo "ATM: bank was connected.</br>";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo "ATM: bank was disconnected.</br>";
    }

    /**
     * Send a tranaction to each bank.
     */
    public function notify(): void
    {
        echo "ATM: sending tranactions to the banks...</br>";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Do some transaction
     */
    public function doTransaction(int $sum): void
    {
        echo "ATM: changes to account in amount: $sum$</br>";
        $this->amount = $sum;
        $this->notify();
        echo "ATM: My state has just changed to: $this->state$</br>";
    }
}
