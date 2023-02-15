require 'mailer/PHPMailerAutoload.php';

       if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                 $nome = $_POST['nome'];
      }

       if (isset($_POST['email']) && !empty($_POST['email'])) {
                 $email = $_POST['email'];
      }
       if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {
                 $telefone = $_POST['telefone'];
      }
       if (isset($_POST['estado']) && !empty($_POST['estado'])) {
                 $estado = $_POST['estado'];
      }
       if (isset($_POST['cidade']) && !empty($_POST['cidade'])) {
                 $cidade = $_POST['cidade'];
      }

       if (isset($_POST['bairro']) && !empty($_POST['bairro'])) {
                  $bairro = $_POST['bairro'];
       }
      
       
        if (isset($_POST['empresa']) && !empty($_POST['empresa'])) {
                  $empresa = $_POST['empresa'];
       }

       if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
                  $mensagem = $_POST['mensagem'];
       }

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.uhserver.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'comercial@brascald.com.br';
    $mail->Password = 'Sucesso2022';
    $mail->Port = 465;
    $mail->setFrom('comercial@brascald.com.br', 'Contato via site');
  

    $mail->isHTML(true);

    $mail->Subject = $assunto;
    $mail->Body    = nl2br($mensagem);
    $mail->AltBody = nl2br(strip_tags($mensagem));
    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        header('Location: index.php?enviado');
    }