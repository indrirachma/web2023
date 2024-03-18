<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$Kendaraan = new Kendaraan("Mobil", "Merah", "Darat");
echo $Kendaraan->nama;
echo "<br>";
echo $Kendaraan->warna;
echo "<br>";
echo $Kendaraan->tempatOperasi;
echo "<br>";

?>