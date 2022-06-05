<?php
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $cpf=$_POST['cpf'];
    $dat_nascimento=$_POST['dat_nascimento'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];
    $numero=$_POST['numero'];
    $complemento=$_POST['complemento'];
    $bairro=$_POPST['bairro'];
    $estado=$_POST['estado'];
    $cidade=$_POST['cidade'];
    $senha=$_POST['senha'];
    $conf_senha=$_POST['conf_senha'];
    

    

    // var_dump($nome,$email,$sobrenome);

    $mysqli = new mysqli("localhost", "root", "", "	pag-insc");

    $mysqli->query("INSERT INTO cliente (nome, sobrenome, cpf, dat_nascimento, email, telefone, endereco, numero, complemento, bairro, estado, cidade, senha, conf_senha) VALUES ('$nome','$sobrenome','$cpf','$dat_nascimento','$email','$telefone','$endereco','$numero','$complemento','$bairro','$estado','$cidade','$senha','$conf_senha')");
   
?>