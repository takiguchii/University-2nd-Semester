<?php

class Notificacao {
    private string $destinatario;
    private string $mensagem;

    public function __construct(string $destinatario, string $mensagem) {
        $this->setDestinatario($destinatario);
        $this->setMensagem($mensagem);
    }

    public function setDestinatario(string $destinatario): void {
        $this->destinatario = $destinatario;
    }

    public function getDestinatario(): string {
        return $this->destinatario;
    }

    public function setMensagem(string $mensagem): void {
        $this->mensagem = $mensagem;
    }

    public function getMensagem(): string {
        return $this->mensagem;
    }

    public function enviar(): void {
        echo "Mensagem <b>{$this->getMensagem()}</b> recebida de <b>{$this->getDestinatario()}</b>.<br>";
    }
}
