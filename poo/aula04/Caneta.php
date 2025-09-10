<?php 

class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $carga;
    private $tampada;

    public function __construct($m,$c,$p, $ca)
    {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->carga = $ca;
        $this->tampar();
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }

    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($carga){
        $this->carga = $carga;
    }
    public function getTampada(){
        return $this->tampada;
    }
    public function setTampada($tampada){
        $this->tampada = $tampada;
    }

    public function rabiscar(){
        if($this->tampada == true){
            echo "<p>ERRO! não posso rabiscar</p>";
        }else{
            echo "estou rabiscando";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }

    public function mostrarEstado(){
        $res_tampada = $this->getTampada() ? "sim":"não";
        echo "<div class='container'>
                <p>Nome: ". $this->getModelo() ." </p>
                <p>cor: ". $this->getCor() ."</p>
                <p>ponta: ".$this->getPonta()." </p>
                <p>carga: ". $this->getCarga() ." </p>
                <p>está tampada?: ". $res_tampada ." </p>
            </div> ";
        }
}