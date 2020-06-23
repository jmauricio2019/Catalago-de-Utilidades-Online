<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo 
    
    </title>
    <link rel="stylesheet" type="text/css"href="_css/estilo.css"/>	
    <link rel="stylesheet" href="_css/fotos.css">
</head>

<body>
    
    	<header id="cabecalho">
            <img id="icone" src="_imagens/utilidades.jpg" />

        </header>

    <fieldset id="chamado"><legend>Ocorrências</legend>
    <form action="#" name="gerador" method="POST">
        
            <p><label for="cusuario">Login:</label><input type="text" name="login" id="cUsuario" size="20" maxlength="30" placeholder="Usuario"/></p>
            <p><label for="cdata">Senha:</label><input type="text" name="senha" id="cNomedoJogo" size="20" maxlength="12"/></p><br>        	
            
        <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_entrar" value="Entrar"><br>
            	 
    </form>
        
<?php

    include("DadosBanco.php");
    $templogin = new Banco();
    $templogin->login();

?>
</body>
<br>
</fieldset>
<p>Copyright &copy; 2020 - by .</p>
<br>
</html>
