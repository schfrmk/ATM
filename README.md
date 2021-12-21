# ATM's functionality
Implementation of the observer pattern.
You can find the classes' code in the Includes/Classes directory.
ATM functionality generates output like below:

First transaction.
ATM: bank was connected.
ATM: changes to account in amount: 100$
ATM: sending tranactions to the banks...
Bank: account history updated.
ATM: My state has just changed to: 100$
Second transaction.
ATM: changes to account in amount: -20$
ATM: sending tranactions to the banks...
Bank: account history updated.
ATM: My state has just changed to: 80$
ATM: bank was disconnected.
