<?php
class BankAccount {
    //properties 
    
    protected string $name ;
    protected float $balance ; 
    // protected readonly string $id ;
    private string $id; 


    //methods 
    public function __construct($name , $balance)
    {
        $this->name = $name ; 
        $this->balance = $balance ;
        $this->id = uniqid('ACC_') ; 

    }

    //get id  


    public function getACCInfo(){
        echo "Your Account ID : ". $this->id . "<br>";
        echo "Your Name is : $this->name <br>";
        echo "Your balance is : $this->balance <br>";
    }


    public function deposit($depositeMoney){
        $this->balance += $depositeMoney ;
        return $this ;
    }

    public function withdraw($withdrawMoney){
        if($this->balance < $withdrawMoney){
            echo "Your Balance Not Enough to withdraw this money ! ";
            exit();
        }else{
            $this->balance -= $withdrawMoney ; 
            return $this ;
        }
    }


}

$ahmed = new BankAccount("Ahmed" , 5000);
$ahmed->withdraw(1000)->deposit(500)->withdraw(4000)->getACCInfo();

echo "<br>";

$mohammed = new BankAccount("Mohammed" , 10000);
$mohammed->withdraw(2000)->getACCInfo();

?>