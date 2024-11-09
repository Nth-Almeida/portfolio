<?php

    // Captura e protege os dados
    $nome = addcslashes($_POST['nome'], "'\"");
    $email = addcslashes($_POST['email'], "'\"");
    $celular = addcslashes($_POST['celular'], "'\"");
    $mensagem = addcslashes($_POST['mensagem'], "'\"");

    // Dados do e-mail
    $para = "nathanvk.ti@gmail.com";
    $contato = "Coleta de dados - Portfólio";

    // Corpo do e-mail
    $corpo = "Nome: " . $nome . "\n" .
             "E-mail: " . $email . "\n" .
             "Celular: " . $celular . "\n" .
             "Mensagem: " . $mensagem . "\n";  // Corrigido aqui!

    // Cabeçalhos do e-mail
    $cabeca = "From: teste@infinity.com" . "\n" .
              "Reply-to: " . $email . "\n" .
              "X-Mailer: PHP/" . phpversion();

    // Envio do e-mail
    if(mail($para, $contato, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso");
    } else {
        echo("Houve um erro ao enviar o E-mail");
    }

?>
