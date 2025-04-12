<?php 
class Lingkaran{
    public $jari2;
    public const PHI = 3.14;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }

    public function getLuas()
    {
        $luas = self::PHI * $this->jari2 * $this->jari2;
        return $luas;
    }

    public function getKeliling()
    {
        $keliling = 2.0 * self::PHI * $this->jari2;
        return $keliling;
    }

    public function cetak()
    {
        echo "Lingkaran dengan Jari-jari : " .$this->jari2;  
        echo "<br>Luas Lingkaran : " .$this->getLuas();  
        echo "<br>Keliling Lingkaran : " .$this->getKeliling();  
    }
}


?>