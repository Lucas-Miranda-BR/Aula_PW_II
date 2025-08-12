<?php

class ContaBancaria {
    private $saldo = 0;

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria();
$conta->depositar(100);
echo "Saldo: R$ " . $conta->getSaldo();

?>
