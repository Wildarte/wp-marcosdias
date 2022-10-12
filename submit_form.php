<?php

require '../../../wp-config.php';

//$host = get_option("smtp_host");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'):

    if($_POST['null1'] != "" || $_POST['null2'] != ""):
        echo "5"; //caso preencham os camapos ocultos
    else:

        if(empty($_POST['nome_home']) || empty($_POST['email_home']) || empty($_POST['msg_home'])):
            echo "4"; //caso algum campo obrigatório esteja vazio
        else:

            //$host = get_option('mailserver_url');
            //$username = get_option('mailserver_login');
            //$password = get_option('mailserver_pass');
            //$port = get_option('mailserver_port');

            $host = get_option("show_host");
            $username = get_option("show_smtp_username");
            $password = get_option("show_smtp_senha");
            $port = get_option("show_smtp_porta");
            $smtp_email = get_option("show_smtp_email");
            $smtp_secure = get_option("show_smtp_secure");
            $emailContato = get_option("show_email_contato");

            $nome = $_POST['nome_home'];
            $email = $_POST['email_home'];
            $empresa = $_POST['empresa_home'];
            $cargo = $_POST['cargo_home'];
            $msg = $_POST['msg_home'];

            //$whatsapp = $_POST['whatsappForm'];
            //$mensagem = $_POST['mensagemForm'];

            $url = 'localhost';
            $toEmail = '';
            $emailServer = 'formulario@'.$url;
            $assunto = "Alguém entrou em contato";

            if(empty($host) || empty($username) || empty($password) || empty($port)):
                
                //caso algum dos campos de configuração de servidor de email esteja vazio

                //Create a new PHPMailer instance
                $mail = new PHPMailer();
                
                //$dominio = $_SERVER['SERVER_NAME'];

                $mail->CharSet = 'UTF-8';
                //Set who the message is to be sent from
                $mail->setFrom('from@'.$dominio, 'Mensagem recebida');
                //Set who the message is to be sent to
                $mail->addReplyTo($email, $nome);
                //Set the subject line
                $mail->addAddress($emailContato);
                //Set an alternative reply-to address
                $mail->Subject = $assunto;
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body

                $mail->addAttachment($attachment['tmp_name'], $attachment['name']);         //Add attachments

                $mail->msgHTML("
                <html>
                    <h2>Mensagem recebida do Site</h2> 
                    <p><strong>Nome</strong> - {$nome}</p> 
                    <p> <strong>E-mail: </strong> {$email} </p> 
                    <p> <strong>Empresa: </strong> {$empresa} </p> 
                    <p> <strong>Cargo: </strong> {$cargo} </p> 
                    <p> <strong>Mensagem:</strong> {$msg}</p>
                    <br>
                    <p><strong>Esse contato veio da página: </strong>{$_POST['contato_from']}</p>
                </html>");

                //send the message, check for errors
                if (!$mail->send()) {
                    echo 'Mailer Error without SMTP: ' . $mail->ErrorInfo;
                } else {
                    echo "1";
                }

            else:

                $mail = new PHPMailer();

                //Server settings
                //$mail->SMTPDebug = 2;
                //$mail->Debugoutput = 'html';
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                if($smtp_secure == "ssl/tls"){                                            //Send using SMTP
                    $mail->Host = "ssl://".$host;                     //Set the SMTP server to send through
                    //echo "smtp_secure é igual a ssl/tls";
                }elseif($smtp_secure == "none"){
                    $mail->Host = $host;
                    //echo "smtp_secure é igual a none";
                }else{
                    $mail->Host = $host;
                    //echo "mail->host é igual a host";
                }
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $username;                     //SMTP username
                $mail->Password   = $password;                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->CharSet = 'UTF-8';
                //Set who the message is to be sent from
                $mail->setFrom($smtp_email, 'Mensagem do site Marcos Dias');
                //Set an alternative reply-to address
                $mail->addReplyTo($email, $nome);
                //Set who the message is to be sent to
                $mail->addAddress($emailContato);
                //Set the subject line
                $mail->Subject = $assunto;
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body

                //$mail->addAttachment($attachment['tmp_name'], $attachment['name']);         //Add attachments

                $mail->msgHTML("
                <html><h2>Mensagem recebida do Site</h2> 
                    <p><strong>Nome</strong> - {$nome}</p> 
                    <p> <strong>E-mail: </strong> {$email} </p> 
                    <p> <strong>Empresa: </strong> {$empresa} </p> 
                    <p> <strong>Cargo: </strong> {$cargo} </p> 
                    <p> <strong>Mensagem:</strong> {$msg}</p>
                    <br>
                    <p><strong>Esse contato veio da página: </strong>{$_POST['contato_from']}</p>
                </html>");

                if(!$mail->send()):
                    echo 'Mailer Error with SMTP: ' . $mail->ErrorInfo;
                else:
                    echo "1";
                endif;

            endif;
        
        endif;

    endif;

else:
    echo "<script> window.location.href = '404'; </script>";
endif;




?>