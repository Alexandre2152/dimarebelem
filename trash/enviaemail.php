<?php 

//ini_set("SMTP", "smtp.gmail.com");


$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
// $to = "ajfs2513@outlook.com";
$assuntos = $_POST['assunto'];

//Corpo do email
$arquivo = "

    <html>
        
        <table width='500'>
            <tr>
                <td>
                    <tr>
                        <td width='500'>Nome:$nome</td>
                    </tr>

                    <tr>
                        <td width='320'>E-mail:$email</td>
                    </tr>

                    <tr>
                        <td width='320'>Mensagem:$mensagem</td>
                    </tr>
                </td>
            </tr>
        </table>

    </html>
";

//enviar
$emailEnviar = "ajfs2513@gmail.com";
$destino = $emailEnviar;
$assunto = "Teste de email";

$headers = 'MINE-version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';

$enviarEmail = mail($destino, $assunto, $arquivo, $headers);
var_dump($enviarEmail);
if($enviarEmail){
    echo "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    //echo " <meta http-equiv='refresh' content='3;URL=paginaTeste.html'>";
}else{
    echo "ERRO AO ENVIAR E-MAIL!";
}
?>