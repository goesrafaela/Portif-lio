<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = addslashes($_POST['nome']); 
    $email = addslashes($_POST['email']); 
    $celular = addslashes($_POST['celular']); 

    $para = "goes.rafaelasilva27@gmail.com";
    $assunto = "Ideias de projetos - ProgramCenter";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular;

    $headers = "From $email";

    if(mail($para,$assunto,$corpo,$headers)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email");
    }
}
   
?>


<!-- Addslashes > serve para tratamento de strings -->