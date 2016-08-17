<?php
class Money
{
    private $amount;
   public static   $currencies= array(1 => 'USD',2=>'GBP',3=>'EUR' );

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function get_currencies(){
      return array(1 => 'USD',2=>'GBP',3=>'EUR' );
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }

    // ...
}

?>
