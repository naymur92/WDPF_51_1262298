<?php
    class messMember{
        public $month;
        public $advance;

        public function takeAdvance($payment_month, $cash_deposite){
            $this->month = $payment_month;
            $this->advance = $cash_deposite;
        }
    }

    $rifat = new messMember();
    $rifat->takeAdvance("May", 3000);

    echo "<pre>";
    print_r($rifat);
?>