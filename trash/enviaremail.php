<?php
// require_once ('PHPMailer-FE_v4.11/PHPMailer-FE_v4.11/_lib/class.phpmailer.php');

// $mailer = new PHPMailer();
// $mailer->IsSMTP();
// $mailer->SMTPDebug = 1;
// $mailer->Port = 587; //Indica a porta de conexão 
// $mailer->Host = 'smtplw.com.br';//Endereço do Host do SMTP 
// $mailer->SMTPAuth = true; //define se haverá ou não autenticação 
// $mailer->Username = 'smtplocaweb'; //Login de autenticação do SMTP
// $mailer->Password = 'Gwb9etA323'; //Senha de autenticação do SMTP
// $mailer->FromName = 'Alexandre Fontes'; //Nome que será exibido
// $mailer->From = 'adm@lojadimarebelem.com.br'; //Obrigatório ser 
// //a mesma caixa postal configurada no remetente do SMTP
// $mailer->AddAddress('adm@lojadimarebelem.com.br','Alexandre Santana');
// //Destinatários
// $mailer->Subject = 'Teste enviado através do PHP Mailer SMTPLW';
// $mailer->Body = 'Este é um teste realizado com o PHP Mailer SMTPLW';
// if(!$mailer->Send())
// {
// echo "Mensagem não enviada";
// echo "Mailer Error: " . $mailer->ErrorInfo; exit; }
// print "E-mail enviado!"

$to = "ajfs2513@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assuntos = $_POST['assunto'];

//send
mail($to, $nome, $email, $mensagem, $assuntos);


?>