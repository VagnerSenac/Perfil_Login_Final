<?php
$nome = $_POST['nome'];
$email = $_POST['email']; 
$profissao = $_POST['profissao']; 
$instagram = $_POST['instagram']; 
$twitter = $_POST['twitter']; 
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$youtube = $_POST['youtube'];
$senhaperfil = $_POST['senhaperfil'];
$descricao = $_POST['descricao'];
$fundo = $_POST['fundo'];
$senha = $senha;

$pasta = "img/";
$nomeDoArquivo = $_FILES["arquivo"] ["name"];
$extensao = explode(".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($extensao);
move_uploaded_file($_FILES["arquivo"]["tmp_name"], $pasta . $nomeNovo);


include "conexao.php";

$sqlGravar = "insert into t_perfil(nome, email, profissao, instagram, twitter, facebook, linkedin, youtube, senha, descricao, foto, fundo) values('$nome', '$email', '$profissao', '$instagram', '$twitter', '$facebook', '$linkedin', '$youtube', '$senhaperfil', '$descricao', '$nomeNovo', '$fundo')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);


header("location: index.php?msg=inserido");
?>