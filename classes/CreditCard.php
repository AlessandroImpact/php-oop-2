<?php

class CreditCard{

    public $day;
    public $month;
    public $year;
    protected $expiry;
    public $validation = true;
    

    public function __construct($giorno, $mese, $anno){

        $this->day = $giorno;
        $this->month = $mese;
        $this->year = $anno;
        $this->IsValid();
    }

    public function IsValid() {
        $this->expiry = date( $this->month . "-" . $this->day . "-" . $this->year );

        //se la carta è scaduta ferma la validazione

        if ($this->expiry < date('m-d-Y')) {
            
            $this->validation = false;
        } else {
            $this->validation = true;
        }
    }

}

?>