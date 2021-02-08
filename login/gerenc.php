<?php
session_start();


if ( $_SESSION["idUsuario"] == "" ){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../imagens/logo.png" type="image/x-icon" />
<meta charset="UTF-8">
<title>npdn</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet"/>
<script type="text/javascript" src="ajax.js" > </script>


<style>
html{
	overflow-x: hidden;
}

body{
	text-align:center;
}

#header{
	width: auto;
	min-width:105%;
	margin-top:-1%;
	height: 25rem;
	background-image: url('../imagens/header_gerenciamento.png');
	background-size: 100% 100%;
	margin-left:-0.5rem;
}


	
	#menu{
	padding: 0 0 0 0;
	margin: 0 0 0 0;
	background-color:#00001a;
	position:fixed;
	width:100%;
	height:10%;
	margin-top:-2%;
	}
	
	#menu ul{
		width:95%;
		margin-top:2.5%;
	}
	
	#menu ul li{
		display: inline;
		margin-left:2%;
	}
	
	#menu li{
	float:right;
	}
	
	#menu ul li a{
		text-transform: uppercase;
		text-decoration:none;
		color:white;
		font-size:10pt;
		font-weight:600;
			}
	
	#menu ul li a:hover{
		transition: color 0.5s linear 0.2s;	
		color:#cccccc;
			
	}
	
	#menu img{
	float:left;
		margin-top:-5%;
		padding:0 0 0 0;
		width:20%;
		height:20%;
	}

    #tabela_gerenc{
        width:80%;
        margin-left:10%;
        padding-top:3rem;
    }

    .desc_pesq{
        width:20%;
        float:left;
        font-size:10pt;
        font-family: 'Noto Sans HK', sans-serif;";
    }

    .text-tab {
        width:20%;
        float:left;
        font-size:10pt;
        font-family: 'Noto Sans HK', sans-serif;";
      text-overflow:ellipsis;
      overflow: hidden;   
      white-space: nowrap;
    }   
 
    #img_tab_div{
    width:1rem;
    }
    
    #link_mais_pesq{
        padding: 15px 15px 15px 15px;
        border: 2px black solid;  
        color:black;
        text-decoration:none; 
        font-family: 'Noto Sans HK', sans-serif;
         
    }
    
    #link_mais_pesq:visited{
        color:black;
        text-decoration:none; 
    }
    
  .img_tab{
        width:20px;
        margin-top:2%;
        float:right;
        margin-right:1%;
    }
    
    .img_link{
        width:25px;
        margin-top:50px; 
        margin-right:1%;

    }
    .tam_linha{
        width:20%;
        float:left;
        height:5rem;
    
    }


</style>
</head>
<body>
<div id="header"></div>
<a id="link_mais_pesq" href="extensao.php"> <img class="img_link" src="../imagens/mais.png" >Nova Pesquisa  </a>
<a id="link_mais_pesq" href="cadastro.php"> <img class="img_link" src="../imagens/mais.png" >Novo cadastro  </a>
<div id="tabela_gerenc">
	<div style="background-color:#7ED957; width:100%; height:4rem;">
	<h5 class="desc_pesq"> Nome </h5>
	<h5 class="desc_pesq"> Data de envio </h5>

	<h5 class="desc_pesq"> Situação </h5>
	<h5 class="desc_pesq"> Descrição </h5>
	</div>
	

 
  <?php
 
  require 'gerenc_conf.php';
  
  

                // Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
                try {
                    $stmt = $conexao->prepare("SELECT * FROM pesquisas");
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                            echo "<p class='text-tab'>".$rs->Nome."</p> 
                                  <p class='text-tab'>".$rs->Data."</p>                              
                                  <p class='text-tab'>".$rs->Situacao."</p>  
                                   <p class='text-tab'>".$rs->Descricao."</p>  
                                  <div class='tam_linha'>
                                    <a href=\"atualizar.php/?act=upd&Id=".$rs->Id."\">
                                        <img class='img_tab' src='../imagens/recarregar.png' alt='Edite'>
                                    </a>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"." 
                                    <a href=\"?act=del&Id=".$rs->Id."\">
                                        <img class='img_tab' src='../imagens/cancelar.png' alt='Delete'>
                                    </a> 
                                  </div> ";
                           
                        }
                    } else {
                        echo "Erro: Não foi possível recuperar os dados do banco de dados";
                    }
                } catch (PDOException $erro) {
                    echo "Erro: ".$erro->getMessage();
                }
                ?>

</div>



</body>