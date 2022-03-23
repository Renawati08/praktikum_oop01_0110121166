<?php 
class Persegi { // buka class
    private $jari;
    const PP = 2.25;
    function __construct( $r )
    {
    $this->jari = $r;
    }
    function getLuas()
    {
    return self::PP * $this->jari * $this->jari ;
    }
    function getKeliling()
    {
    return 2 * self::PP * $this->jari;
    }
    } // tutup class
    ?>