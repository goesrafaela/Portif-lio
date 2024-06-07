<?php

    $nome = addslashes($_POST['nome']); 
    $email = addslashes($_POST['email']); 
    $celular = addslashes($_POST['celular']); 

    $para = "goesrafaela.26@gmail.com";
    $assunto = "Ideias de projetos - ProgramCenter";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular;

    $cabeca = "From goes.rafaelasilva@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:/PHP".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email");
    }
?>


<!-- Addslashes > serve para tratamento de strings -->