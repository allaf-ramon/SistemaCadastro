<?php

    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    define('GUSER', 'endereço de email');
    define('GPWD', 'senha do email');

    function enviarEmail(Usuario $usuario)
    {

        # configuração para envio
        $mail = new PHPMailer();  // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;  // authentication enabled
        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
        $mail->SMTPAutoTLS = false;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        
        $mail->Username = GUSER;
        $mail->Password = GPWD;
        $mail->setFrom(GUSER);
        $mail->addAddress($usuario->getEmail());
        $mail->Subject = 'Recuperar senha';
        $mail->msgHTML(montaMsg($usuario->getSenha()));
        $mail->AltBody = "Sua nova senha é: {$usuario->getSenha()}";

        # configuração de log
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');

        #envio do email
        if(!$mail->send())
        {
            $log = fopen("email_log.txt", "a");
            fwrite($log, "{$mail->ErrorInfo}\r\n{$usuario->getEmail()}\r\n{$date}\r\n\r\n");
            fclose($log);
            redirectLogin('danger', 'Ocorreu uma falha ao enviar a senha para o email');
        } else {
            $log = fopen("email_log.txt", "a");
            fwrite($log, "Email enviado: {$usuario->getEmail()} - {$date}\r\n\r\n");
            fclose($log);
            redirectLogin('success', 'Foi gerado uma nova senha. Verifique seu email');
        }
    }

    function montaMsg(string $senha)
    {
        return "<!DOCTYPE html>"
        . "<html lang=\"pt-br\">"
        . " <head>"
            . "<meta charset=\"UTF-8\">"
            . "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">"
            . "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">"
            . "<title>Recuperacao de senha</title>"
        . "</head>"
        . "<body>"
            . "<h1>Recuperacao de senha</h1>"
            . "<div align=\"center\">"
                . "<h3>Sua nova senha e: {$senha}</h3>"
           . "</div>"
        . "</body>"
        . "</html>";
    }

    function redirectLogin()
    {
        echo "<script>alert('Nova senha enviada para o Email');</script>";
        echo "<script>window.location='login';</script>";
        exit;
    }