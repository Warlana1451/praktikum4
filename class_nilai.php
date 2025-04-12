<?php 

/**
 * clas untuk menghitung nilai mahasiswa
 */
class Nilaimahasiswa{

    /**
     * Properties
     * @var string $nama
     */
    public $nama;
    /**
     * Properties
     * @var string $matakuliah
     */
    public $matakuliah;
    /**
     * Properties
     * @var string $uts
     */
    public $uts;
    /**
     * Properties
     * @var string $uas
     */
    public $uas;
    /**
     * Properties
     * @var string $tugas
     */
    public $tugas;

    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.3;
    public const PERSENTASE_TUGAS = 0.45;

    /**
     * KKM = kriteria ketuntasan minimal
     */
    public const KKM = 60;

    public function getNilaiakhir() 
    {
        $getNilaiakhir = (self::PERSENTASE_UTS*$this->uts)+(self::PERSENTASE_UAS*$this->uas)+(self::PERSENTASE_TUGAS*$this->tugas);
        return $getNilaiakhir;
    }

    public function kelulusan() 
    {
        if($this->getNilaiakhir() >= self::KKM){
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        };
    }



}
?>