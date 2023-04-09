<?php

class Mascota{
    private $nombre;
    private $raza;
    private $edad;
    private $peso;
    
    private $finlista;
    private $arreglo = array();

    public function __construct(){
        $this->finlista = 0;
    }

    public function setDatos($name, $race, $age, $pes){
        $this->arreglo[] = $name;
        $this->arreglo[] = $race;
        $this->arreglo[] = $age;
        $this->arreglo[] = $pes;
        $this->finlista = $this->finlista+4;
    }

    public function MotrarDatos(){
        
        for($i=0;$i<$this->finlista;$i++){
            echo '<p>'.$this->arreglo[$i].'</p>';
            
        }
    }

}

class Mascota2{
    private $nombre;
    private $raza;
    private $edad;
    private $peso;
    private $img;
    
    private $finlista;
    private $arreglo = array();

    public function __construct(){
        $this->finlista = 0;
    }

    public function setDatos($name, $race, $age, $pes, $img){
        $this->arreglo[] = $name;
        $this->arreglo[] = $race;
        $this->arreglo[] = $age;
        $this->arreglo[] = $pes;
        $this->arreglo[] = $img;
        $this->finlista = $this->finlista+5;
    }

    public function MotrarDatos(){
        
        for($i=0;$i<$this->finlista;$i++){
            echo '<p>'.$this->arreglo[$i].'</p>';
            
        }
    }

}

?>