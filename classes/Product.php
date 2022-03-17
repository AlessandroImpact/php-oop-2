<?php

class Product {

    public $productType;
    
    public $price;
    public $month;

    public function __construct($productType, $price){

        $this->productType = $productType;
       
        $this->price = $price;
        $this->month = date('m');
        $this->SetType($genereProdotto);
    }

    function SetType($productType) {
        if($productType == 'Plays' || $productType == 'PetFood' || $productType == 'Kennels') {
           $this->productType = $productType;
        } else {
           echo " Errore! Seleziona un tipo di prodotto tra quelli possibili";
        }
   
        if($productType == 'Plays') {
            //i primi tre mesi dell'anno i giochi non sono disponibili
            if ($this->month == '01' || $this->month == '02' || $this->month == '03') {
            $this->price = ($this->price / 20) * 100;
            }
        }
    }

}

?>