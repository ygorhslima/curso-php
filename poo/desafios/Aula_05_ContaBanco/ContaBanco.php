<?php 
    class ContaBanco{
        private $numConta;
        // tipo vai aceitar conta corrente(cc) e conta poupança (cp)
        private $tipo;
        private $dono;
        private $saldo;
      
        //se a conta está aberta, o status é verdadeiro se a conta não está aberta, status é falso
        private $status;

        public function __construct()
        {
            // gerando valores automaticamente para o número da conta já criptografado
            $this->numConta = random_int(1000,1000000);
            $this->saldo = 0;
            $this->status = false; // por padrão, a conta está fechada
        }

        // métodos getters e setters
        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }
        public function getNumConta(){
            return $this->numConta;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setDono($dono){
            $this->dono = $dono;
        }
        public function getDono(){
            return $this->dono;
        }
        private function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        private function getSaldo(){
            return $this->saldo;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        public function getStatus(){
            return $this->status;
        }

        public function abrirConta($tipo){
            //é preciso saber se a conta é cc ou cp
            $this->setTipo($tipo);
            $this->setStatus(true);
            if($tipo == "cc"){
                // se a conta for conta corrente o saldo começa com R$ 50
                $this->setSaldo(50);
            }else if($tipo == "cp"){
                // agora se a conta for conta poupança, o saldo começa com R$150
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta com dinheiro</p>";
            }else if($this->getSaldo() < 0){
                echo "<p>Conta em débito</p>";
            }else{
                $this->setStatus(false);
                echo "<p>Conta está zerada e foi fechada com sucesso</p>";
            }
        }

        public function depositar($valor_deposito){
            // a conta deve estar aberta para depositar
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $valor_deposito);
            }else{
                echo "<p>Impossível depositar</p>";
            }
        }
        public function sacar($valor_saque){
            // a conta deve estar aberta para sacar e tem que ter dinheiro suficiente
            if($this->getStatus() == true){
                if($this->getSaldo() > $valor_saque){
                    $this->setSaldo($this->getSaldo() - $valor_saque);
                }else if($this->getSaldo() < $valor_saque){
                    echo "<p>Saldo insuficiente</p>";
                }else{
                    echo "<p>zerando a conta</p>";
                    $this->setSaldo(0);
                }
            }else{
                echo "<p>sua conta está fechada e não pode sacar</p>";
            }
        }
        public function pagarMensalidade(){
            // vai ser cobrado diretamente no saldo
            // o cliente que tiver uma conta corrente vai pagar R$ 12,
            // já o cliente que vai pagar conta poupança vai pagar R$20
            $v = 0;
            if($this->getTipo() == "cc"){
                $v = 12;
            }
            else if($this->getTipo() == "cp"){
                $v = 20;
            }
            if($this->getStatus() == true){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo()  - $v);
                }else{
                    echo "<p>Saldo insuficiente</p>";
                }
            }else{
                echo "<p>impossível pagar</p>";
            }
        }

        public function mostrarDados(){
            $res_status = $this->getStatus() ? "aberto":"fechado";
            echo "
                <div class='container-dados'>
                    <p><strong>Número</strong>: ". $this->getNumConta() ."</p>
                    <p><strong>Dono</strong>: ". $this->getDono() ."</p>
                    <p><strong>Tipo</strong>: ". $this->getTipo() ."</p>
                    <p><strong>Saldo</strong>: ". $this->getSaldo() ."</p>
                    <p><strong>Status</strong>: ". $res_status ." </p>
                </div>
            ";

        }
    }
?>