<?php 

class Caneta{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;


    function rabiscar(){
        if($this->tampada == true){
            echo "<p>ERRO! não posso rabiscar</p>";
        }else{
            echo "estou rabiscando";
        }
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }

    function mostrarEstado(){
        echo <<< RES
            <div>
                <p>Nome: $this->modelo</p>
                <p>cor: $this->cor</p>
                <p>ponta: $this->ponta</p>
                <p>carga: $this->carga </p>
                <p>está tampada?: $this->tampada</p>
            </div>    
        RES;
    }
}