<?php
class Model_Latihan1 extends CI_Model 
{
    
    // Properties
    public  $nilai1,
            $nilai2,
            $hasil;

    // Methods
    public function jumlah($n1=null, $n2=null) {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}


?>