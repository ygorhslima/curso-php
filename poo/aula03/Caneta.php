<?php 

class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $carga;
    private $tampada;

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