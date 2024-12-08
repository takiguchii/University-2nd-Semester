<?php

require_once("Notificacao.php");
require_once("NotificacaoEmail.php");
require_once("NotificacaoPush.php");
require_once("NotificacaoSms.php");

$n1 = new Email("destinatario@example.com", "Olá, isso é uma notificação!");
$n2 = new Push("usuario123", "Olá, isso é uma notificação!");
$n3 = new Sms("+559912345678", "Olá, isso é uma notificação!");

$notificacoes = [$n1, $n2, $n3];
foreach ($notificacoes as $notificacao) {
    $notificacao->enviar();
    echo("<hr>");
}
