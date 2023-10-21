<?php

    class Conta{


        public $Cliente;
        public $Agencia;
        public $Conta;
        public $Saldo;
        public $Status;

        function __construct($Titular,$Agencia,$Conta,$Saldo,$Status){
            $this->Cliente = $Titular;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->Saldo = $Saldo;
            $this->Cancelada = $Status;
        }

        function __destruct(){
            echo "<br/><small> O Objeto está sendo destruido</small>";
    }

    function Sacar($quantia){
        if($quantia > 0){
            $this->Saldo += $quantia; 
        }
    }

    function ObterSaldo(){
        return $this->Saldo;
    }
}

?>