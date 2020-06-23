<!DOCTYPE html>
<html lang="pt-br">

<head>
	
	<meta charset="UTF-8"/>
	<title>Cadastro de Usuários</title>   
	<link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
	<link rel="stylesheet" href="_css/form.css"/>	
	
</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body>
<div id="interface">

	<header id="cabecalho">
	<hgroup>
	<h1>Catálogo Online</h1>
	<h2>Cadastro de usuário</h2>
	</hgroup>
	
	 
	<nav id="menu">
	<h1>Menu Principal</h1>
	<ul type="1" start="1">	
		<li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="index.html">Home</a></li>
		<li onmouseover="mudaFoto('_imagens/especificacoes.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="specs.html">Especificações</a></li>
		<li onmouseover="mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fotos.html">Fotos</a></li>
		<li onmouseover="mudaFoto('_imagens/multimidia.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="multimidia.html">Multimídia</a></li>
		<li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fale-conosco.html">Fale conosco</a></li>
	</ul>
	</nav>
</header>
<section id="corpo-full">
	<article id="noticia-principal">
		<header id="cabecalho-artigo">
			<hgroup>
				<h3>Fale Conosco > Contato</h3>
				<h1>Fomulário de Cadastro</h1>
				<h2> </h2>
				<h3 class="direita">Atualizado em 23/Junho/2020</h3>
			</hgroup>
		</header>
        </form>
            <form action=" " name="cadastro" method="POST">
		<fieldset id="usuario"><legend>Identificação do Usuário</legend>
				<p>Nome:<input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
                                <p>Login:<input type="login" name="tLogin" id="cLogin" size="8" maxlength="8" placeholder="Máx. 8 Dígitos"/></p>
				<p>Senha:<input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Máx. 8 Dígitos"/></p>
				<p>E-mail:<input type="email" name="tMail" id="cMail" size="20" maxlength="40" placeholder="Email"/></p>
				<fieldset id="sexo"><legend>Sexo</legend>
                                <input type="radio" name="tSexo" value="Masculino"> <label for="cMasc">Masculino</label><br/>
				<input type="radio" name="tSexo" value="Feminino"><label for="cFem">Feminino</label></fieldset>
				<p>Data de Nascimento: <input type="date" name="tNasc" id="cNasc"/></p>
		</fieldset>
		
		<fieldset id="endereco"><legend>Endereço do Usuário</legend>
			<p>Logradouro:<input type="text" name="tRua" id="cRua" size="20" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
			<p>Número:<input type="number" name="tNum" id="cNum" min="0" max="99999"</p>
			<p>Estado:<input type="text" name="tUF" id="cUF" size="20" maxlength="80" placeholder="Estado"/></p>
			<p>Cidade:<input type="text" name="tCidade" id="cCidade" size="20" maxlength="80" placeholder="cidade"/></p>
                        <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_cadastrar" value="Cadastrar"><br>
            
		</fieldset>
		
	</form>
           

	</article>
</section>

<footer id="rodape">
<p>Copyright &copy; 2020 - by  <br/>
<a href="http://facebook.com/profile.php?id=100013947282089&epa" target="_blank">Facebook</a> | Twitter</p>
</footer>
</div>
 <?php
 include 'DadosBanco.php'; 
 $temp = new Banco();
 $temp->Cadlogin();
?>
</body>
</html>
