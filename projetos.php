<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Npdn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet"/>
<script type="text/javascript" src="ajax.js" > </script>
<link rel="icon" href="imagens/logo.png" type="image/x-icon" />


</head>
<style type="text/css">
	
html{
    scroll-behavior:smooth;
    overflow-x: hidden; 
}
body{
width:100%;
height:auto;
background-color:#FFFFFF;

}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 10px 10px 10px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #89E163;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#header{
	width: 100%;
	height: 30rem;
	background-image: url('imagens/header_pesquisas.png');
	background-size: 100% 60%;
	background-position: top;
	background-attachment: fixed;
	margin-left:-0.5rem;
	margin-top:-5rem;
}

#title {
    font-family: 'Noto Sans HK', sans-serif;
    text-align:center;
    color:#7ED957;
    margin-top:5%;
}

.sep_pesq{
    width:20%;
    float:left;
    margin-left:10%;
    margin-top:5%;
}

.img_pesq{
    width:100%;
}

.text_pesq{
    font-family: 'Noto Sans HK', sans-serif;
    color:black;
    background-color:#7ED957;
    margin-top:-3%;
    padding: 10px 5px 10px 5px;
}

.link_pesquisas:link {
  text-decoration:none;
}
a:visited {
  color:#000000;
  text-decoration:none;
}

.cont{
    width:80%;
    margin-left:10%;
}


#footer_div{
    width:100%;
    margin-top:48rem;
    margin-left:-0.5%;
}
.div_footer{
    
	width:20%;;
	float:left;
	background-color:rgb(10, 17, 13);
	color:white;
	height:10rem;
	
	padding-top:2rem;
	padding-bottom:2rem;
}

h5.h5_footer{
	margin-top:15%;
	font-family: 'Open Sans', sans-serif;
}

a.link_footer:link {
  color: #FFFFFF;
  text-decoration: none;
  font-family: 'Open Sans', sans-serif;
  font-size:10pt;


}

a.link_footer:visited {
  color: #FFFFFF;
}

a.link_footer:hover {
  color: ;
}
.button_cont {
	background-color:#7ed957;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:11pt;
	font-weight:bold;
	padding:10px 40px;
	text-decoration:none;
	margin-left:10%;
}
.button_cont:hover {
	background-color:#7ed957;
}
.button_cont:active {
	position:relative;
	top:1px;
}

.img_link{
    margin-top:1rem;
	padding-bottom:1rem;
	width:3rem;
	float:left;
}

.img_logo_footer{
	width:5rem; 
	margin-left:2rem; 
	margin-top:2rem; 
	padding-bottom:10%;

}

@media only screen and (max-width: 350px) {

#header{
	width: 100%;
	height: 20rem;
	background-image: url('../imagens/header.jpg');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: inherit;
	background-repeat:no-repeat;
	margin-left:-0.5rem;
	margin-top:-5rem;
}


.button_cont {
	background-color:#7ed957;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:11pt;
	font-weight:bold;
	padding:10px 40px;
	text-decoration:none;
	margin-left:20%;
	margin-bottom:5%;
}

.img_link{
	margin-top:1rem;
	padding-bottom:1rem;
	margin-left:20%;
	margin-right:-20%;
	width:15%;
	float:left;
}

.img_logo_footer{
margin-left:-1%;
	width:20%; 
	margin-top:15%; 
	padding-bottom:10%;

}


}

@media only screen and (max-width: 750px) {

.div_footer{
	background-color:rgb(10, 17, 13);
	height:13rem;
	width:110%;

}


.button_cont {
	background-color:#7ed957;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:11pt;
	font-weight:bold;
	padding:10px 40px;
	text-decoration:none;
	margin-left:-5%;
	margin-bottom:5%;
}

.img_link{
	margin-top:3rem;
	padding-bottom:1rem;
	margin-left:25%;
	margin-right:-23%;
	width:10%;
	float:left;
}

.img_logo_footer{
    margin-left:5%;
	width:15%; 
	margin-top:5%; 
	padding-bottom:10%;

}
.link_footer{
margin-left:5%;
	margin-top:5%; 
	padding-bottom:5%}

}
h5.h5_footer{
	font-family: 'Open Sans', sans-serif;
	margin-left:5%;
	margin-top:5%; 
}
.img_link_social{
    width:5%;
}

@media only screen and (max-width: 500px) {
    .img_link_social{
    width:15%;
    }

    .img_logo_footer{
    margin-left:5%;
	width:25%; 
	margin-top:5%; 
	padding-bottom:10%;

}
}



</style>


<body>

<!-- Menu -->
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <img src="imagens/logo.png" style="width:50%; margin-left:5%;"/>
	  <a style="color:white; line-height:3rem;  font-family: 'Montserrat'; font-weight:light; font-size:14pt;" onclick="closeNav()" href="http://localhost/tcc_project/index.html">Home</a>
	  <a style="color:white; line-height:3rem;  font-family: 'Montserrat'; font-weight:light; font-size:14pt;" onclick="closeNav()" href="http://localhost/tcc_project/projetos.php">Pesquisas</a>
	  <a style="color:white; line-height:3rem;  font-family: 'Montserrat'; font-weight:light; font-size:14pt;" onclick="closeNav()" href="http://localhost/tcc_project/index.php">Instituição</a>
	  <a style="color:white; line-height:3rem;  font-family: 'Montserrat'; font-weight:light; font-size:14pt;" onclick="closeNav()" href="http://localhost/tcc_project/mailer.php">Contato</a>
	</div>
	
	<span style="position: fixed; margin-top: 100px; margin-left: 15px;  padding: 8px 10px 10px 10px; border-radius:5px; color:#89E163; font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
	
	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}
	
	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
	</script>
	<!-- Fim do menu -->
<div id="header"></div>
<div id="cont">
<?php 
require 'login/gerenc_conf.php';

// Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
try {
    $stmt = $conexao->prepare("SELECT * FROM pesquisas");
    if ($stmt->execute()) {
        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
            
            echo"<div class='sep_pesq' href=\"pesquisas.php/?act=upd&Id=".$rs->Id."\'>
	               <a href='pesquisa.php/?act=upd&Id=".$rs->Id."' class='link_pesquisas'>
                       <img src='".$rs->link."' class='img_pesq'/>
                       <h4 class='text_pesq'>".$rs->nome."</h4>
                   </a>
                 </div>
                 <div class='sep_pesq' href=\"pesquisas.php/?act=upd&Id=".$rs->Id."\'>
	               <a href='pesquisa.php/?act=upd&Id=".$rs->Id."' class='link_pesquisas'>
                       <img src='".$rs->link."' class='img_pesq'/>
                       <h4 class='text_pesq'>".$rs->nome."</h4>
                   </a>
                 </div>
                 ";
        }}
        else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
        
   
?>
	              
                      
                   </a>
                 </div>

</div>
	<footer>
		<div id="footer_div">
		<div class="div_footer">
			<img src="imagens/logo.png" class="img_logo_footer"/>
		</div>
		<div class="div_footer" >
			<h5 class="h5_footer">INÍCIO</h5>
			<a class="link_footer" href="index.html">Home </a><br/>
			<a class="link_footer" href="projetos.php">Projetos </a>
		</div>
		<div class="div_footer">
			<h5 class="h5_footer">SOBRE NÓS</h5>
			<a class="link_footer" href="#sobre">Informação da empresa</a><br/>
			<a class="link_footer" href="mailer.php">Contato </a>
		</div>
		<div class="div_footer">
			<h5 class="h5_footer">ÀREA RESTRITA </h5>
			<a class="link_footer" href="login/login.php">Login </a>
		</div>
			<div class="div_footer">
			<a href="https://www.instagram.com/lab.npdn" class="img_link_social"><img class="img_link" src="imagens/1.png"/></a>
			<a href="https://goo.gl/maps/LfoitUcaXeEyqkGY6" class="img_link_social"><img class="img_link" src="imagens/2.png"/></a>
			<a href="mailer.php" class="img_link_social"><img class="img_link" src="imagens/3.png"/></a>
			<a href="mailer.php" class="button_cont">Contato</a>
			
		</div>
		</div>
	</footer>
</body>


